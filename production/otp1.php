<?php 
    include "config.php";
    session_start();
    if(@$_SESSION['rollno']!=''){
      header('location:login.php');
    }
 ?>

 <?php 

  ?>

<style>


</style>
<link rel="stylesheet" type="text/css" href="../vendors/animate.css/animate.css">
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login.css">
<!-- Mixins-->

<!-- Pen Title-->
<body class=img-responsive; style="background-image:url('images/plain.jpg'); background-repeat: no-repeat; width: 100%; height: 100%; background-size: cover;;  background-position: center center;">
<div class="animated bounceInUp ">
  <h1 class="text-center"></h1>
</div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login</h1>
        <form method="post">
            <div class="input-container">
                <input type="number" id="otp" name="otp" required="required"/>
                <label for="#{label}">Enter OTP</label>
                <div class="bar"></div>
            </div>
            <div class="input-container" style="margin-bottom:20px;">
                <input type="password" id="#{label}" name="npassword" required="required"/>
                <label for="#{label}"> New Password</label>
                <div class="bar"></div>
            </div>
            <div class="input-container" style="margin-bottom:20px;">
                <input type="password" id="#{label}" name="cpassword" required="required"/>
                <label for="#{label}"> Confirm Password</label>
                <div class="bar"></div>
            </div>
            <?php
            if (isset($_POST['login'])) {
              $otp = mysqli_real_escape_string($conn, $_POST['otp']);
              $npassword = mysqli_real_escape_string($conn, $_POST['npassword']);
              $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
              $select_login = mysqli_query($conn, "SELECT * from studentdata where otp='".$otp."'");
              $count = mysqli_num_rows($select_login);

            if(@$count==1){
              if($npassword==$cpassword){
                echo $update_pass = mysqli_query($conn, "UPDATE studentdata set password='".$npassword."', otp='' where otp = '".$otp."'");  
                if($update_pass){
                  echo "<script>alert('Password changed successfully'), window.location.href='login.php'</script>";
                }
              }else{
                ?>

                <div class="col-md-12 text-center ">

                    <label class=" text-danger animated bounce">
                        <?php echo "Please make sure that both passwords should be same";?>

                    </label>

                </div>
                <?php
              }
              
              
            }
            else{
              ?>
                

                <div class="col-md-12 text-center ">

                    <label class=" text-danger animated bounce">
                        <?php echo "Enter Correct OTP";?>

                    </label>

                </div>



                <?php
            }
           }
    
        ?>

            <div class="button-container">
                <button type="submit" name="login"><span>Login</span></button>
            </div>

        </form>
    </div>
</div>


<script>
  $(document).ready(function(){
    $('#rollno').keyup(function(){
      var rollno = $(this).val();
      $('#rollno').val($('#rollno').val().toUpperCase());
    });
  }); 
</script>