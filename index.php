<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 m-auto header">

                <h2>Register here for a Section</h2>
                <h5>Register only if you know what you are doing</h5>

                <ul>
                    <li>Please enter <b>all</b> information and select your desired Section. Please enter a correct 'SID' number!</li>
                    <li>Please check the number of available seats before submitting.</li>
                    <li>Register only to one Section</li>
                </ul>

            </div>


        </div>

    </div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto form">

                    <form action="register_post.php" method="POST">
                        <div class="row">

                            <div class="col-lg-4">
                                <label for="">Name</label>
                            </div>
                            <div class="col-lg-8 form-group">

                                <input type="text" name="fname" class="form-control" placeholder="Type Your Name">
                                <div class="error">
                                    <?php
                        if(!empty($_GET['namerr'])){
                          echo $_GET['namerr'];
                        }
                       ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="">First Name</label>
                            </div>
                            <div class="col-lg-8 form-group">

                                <input type="text" name="ffname" class="form-control" placeholder="Type Your First Name">
                                <div class="error">
                                    <?php
                        if(!empty($_GET['fnamerr'])){
                          echo $_GET['fnamerr'];
                        }
                       ?>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label for="">SID</label>
                            </div>
                            <div class="col-lg-8 form-group">

                                <input type="text" name="sid" class="form-control" placeholder="Type Your SID">
                                <div class="error">
                                    <?php
                        if(!empty($_GET['serr'])){
                          echo $_GET['serr'];
                        }
                       ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Email Address</label>
                            </div>
                            <div class="col-lg-8 form-group">
                                <input type="text" name="email" class="form-control" placeholder="Type Your Email Address">
                                <div class="error">
                                    <?php
                        if(!empty($_GET['emerr'])){
                          echo $_GET['emerr'];
                        }
                       ?>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label for="">Select a section</label>
                            </div>
                            <div class="col-lg-8 form-group">

                                <?php
                                    require 'db.php';
                                    $limit = 40;
                                
                                    $check_query1 = "SELECT COUNT(*) AS total FROM section_a";
                                    $res1 = mysqli_query($db_connection,$check_query1);
                                    $asa=mysqli_fetch_assoc($res1);
                                    $a=$asa['total'];
                                    $available_a=$limit-$a;
                                
                                    $check_query2 = "SELECT COUNT(*) AS total FROM section_b";
                                    $res2 = mysqli_query($db_connection,$check_query2);
                                    $asb=mysqli_fetch_assoc($res2);
                                    $b=$asb['total'];
                                    $available_b=$limit-$b;
                                
                                       $check_query3 = "SELECT COUNT(*) AS total FROM section_c";
                                    $res3 = mysqli_query($db_connection,$check_query3);
                                    $asc=mysqli_fetch_assoc($res3);
                                    $c=$asc['total'];
                                    $available_c=$limit-$c;
                                
                                   $check_query4 = "SELECT COUNT(*) AS total FROM section_d";
                                    $res4 = mysqli_query($db_connection,$check_query4);
                                    $asd=mysqli_fetch_assoc($res4);
                                    $d=$asd['total'];
                                    $available_d=$limit-$d;
                                
                                ?>

                                    <select name="sec" size="4" >
    <option value="section_a">Section A   <p><?php echo "------".$available_a  ?> seats remaining</p> </option> 
    <option value="section_b">Section B   <p><?php echo "------".$available_b  ?> seats remaining</p></option>
    <option value="section_c">Section C   <p><?php echo "------".$available_c  ?> seats remaining</p></option>
    <option value="section_d">Section D   <p><?php echo "------".$available_d  ?> seats remaining</p></option>
  </select>


                                    <div class="error">
                                        <?php
                                 if(!empty($_GET['secerr'])){
                                echo $_GET['secerr'];
                                    }
                                     ?>
                                    </div>


                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" name="button" class="btn btn-success">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>

</html>
