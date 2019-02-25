<?php
require 'db.php';
$nam_err = '';
$fnam_err = '';
$eml_err = '';
$s_err = '';
$sec_err = '';
$limit = 40;



if(empty($_POST['fname'])){
  $nam_err = "Please Enter Your Name";
  header('location:index.php?namerr='.$nam_err);
}
elseif(empty($_POST['ffname'])){
  $fnam_err = "Please Enter Your First Name";
  header('location:index.php?fnamerr='.$fnam_err);
}
elseif(empty($_POST['sid'])){
  $s_err = "Please Enter SID";
  header('location:index.php?serr='.$s_err);
}

elseif(empty($_POST['email'])){
  $eml_err = "Please Enter Your Email";
  header('location:index.php?emerr='.$eml_err);
}
elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
   $eml_err = "Wrong Email Syntax!";
   header('location:index.php?emerr='.$eml_err);
 }

elseif(empty($_POST['sec'])){
  $sec_err = "Please Select a Section";
  header('location:index.php?secerr='.$sec_err);
}

else{
    
//    
//    $email = $_POST['email']; 
//    
//    $check_query = "SELECT COUNT(*) as count FROM user_info WHERE email='$email'";
//    
//    $result = mysqli_query($db_connection,$check_query);
//    
//    $after_assoc=mysqli_fetch_assoc($result);
//    
//    if($after_assoc['count']==1){
//        
//   $eml_err = "email already exsist!";
//   header('location:register.php?emerr='.$eml_err);
//    
//    }
//    else {

    
     $sec = $_POST['sec']; 
    
    $check_query1 = "SELECT COUNT(*) AS total FROM $sec";
    $res1 = mysqli_query($db_connection,$check_query1);
    $as=mysqli_fetch_assoc($res1);
    $a=$as['total'];
    $available=$limit-$a;

        
    $name = $_POST['fname']; 
    $fname = $_POST['ffname']; 
    $sid = $_POST['sid']; 
    $email = $_POST['email'];  
    $sec = $_POST['sec'];

    if($sec=='section_a' && $available>0){
         $insert_query = "INSERT INTO `section_a`(name,fname,sid,email) VALUES ('$name','$fname','$sid','$email')";
    
    $result = mysqli_query($db_connection,$insert_query);
    header('location:index.php');  
    }
    elseif($sec=='section_b'){
       $insert_query = "INSERT INTO `section_b`(name,fname,sid,email) VALUES ('$name','$fname','$sid','$email')";
    
    $result = mysqli_query($db_connection,$insert_query);
    header('location:index.php');  
        
    }
    elseif($sec=='section_c'){
             $insert_query = "INSERT INTO `section_c`(name,fname,sid,email) VALUES ('$name','$fname','$sid','$email')";
    
    $result = mysqli_query($db_connection,$insert_query);
    header('location:index.php');  
    }
    elseif($sec=='section_d'){
    $insert_query = "INSERT INTO `section_d`(name,fname,sid,email) VALUES ('$name','$fname','$sid','$email')";
    
    $result = mysqli_query($db_connection,$insert_query);
    header('location:index.php');  
    }
    
    else{
        
          $sec_err = "No Seats Available!!";
         header('location:index.php?secerr='.$sec_err);
        
    }
   
   
    
    
    
//    }
    

    
    
}


 ?>
