<?php 
    include "config.php";
    session_start();
    if(@$_SESSION['rollno']!=''){
      header('location:otp1.php');
    }
 ?>

 
  <?php
            if (isset($_POST['submit'])) {
             
              $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
             // echo "<script>alert('$phoneno');</script>";
             $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
              //echo "<script>alert('$rollno');</script>";

                $select_login = "SELECT * from `studentdata` where phoneno='".$phoneno."' and rollno='".$rollno."' ";
              

              $query=mysqli_query($conn,$select_login);

             $fetch_login = mysqli_fetch_array($query);

             $count = mysqli_num_rows($query);
            
            if(@$count==1){
              // echo "<script>alert('working');</script>";

                $random_number=mt_rand(100000,999999);

                // echo "<script>alert('".$random_number."');</script>";

                 $result=mysqli_query($conn,"UPDATE `studentdata` SET otp='".$random_number."' WHERE rollno='".$rollno."'");
           @$Message = file_get_contents("http://alerts.adeeptechnologies.com/api/v4/?api_key=A3ca2502007ffe7f750f2ef5e91370064&method=sms&message=Your+OTP+for+changing+password+%0a$random_number,%0aThanks+Your+ID+is+%0aRegards,%0aSophomore+Scoop+Team&to=$phoneno&sender=ADITYA");
                      
 if($Message){
                
                echo "<script>window.location.href='otp1.php';</script>";
                       
                }
                  }    
            else{
              ?>
               <div class="col-md-12 text-center ">
                 <label class=" text-danger animated bounce">
                    <?php echo "Please check username and phoneno";?>
                 </label>
              </div>
            <?php
            }  
            ?>
          
             <?php
             }   
 ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body class=img-responsive; style="background-image:url('images/plain.jpg'); background-repeat: no-repeat; width: 100%; height: 100%; background-size: cover;;  background-position: center center;">
<div class="animated bounceInUp ">
  <h1 class="text-center"></h1>
</div>
<div class="container">
    <div class="card"></div>
    <div class="card">
       <h4 class="title">Confirmation Id</h4>      
        <form method="post">
          <div class="input-container">
                <input type="text" id="rollno" name="rollno" required="required"/>
                <label for="#{label}">enter roll number</label>
                <div class="bar"></div>
            
            </div>
          <div class="input-container">
                <input type="number" id="rollno" name="phoneno" required="required"/>
                <label for="#{label}">enter phone number</label>
                <div class="bar"></div>
            
            </div>
             
        

            <div class="button-container">
                <button type="submit" name="submit" value="submit"><span>submit</span></button>
            </div>
            
        </form>
    </div>
</div>

</body>
<script>
  $(document).ready(function(){
    $('#rollno').keyup(function(){
      var rollno = $(this).val();
      $('#rollno').val($('#rollno').val().toUpperCase());
    });
  }); 
</script>

</html>
