<?php 
    include "config.php";
    session_start();
 ?>

 <?php 
    if (isset($_POST['register'])) {
        $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
        $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
     	
        $select_rollno = mysqli_query($conn, "SELECT * from studentdata where rollno='".$rollno."' and phoneno='".$phoneno."' ");
        //$select_cat=mysqli_fetch_array($select_rollno);
        @$category=$_SESSION['category'];
        @$count = mysqli_num_rows($select_rollno);
        $random_number=mt_rand(100000,999999);
            if($count==1){

              if($category=='')
              {
                @$check=mysqli_query($conn,"SELECT password from studentdata where rollno='".$rollno."' and phoneno='".$phoneno."' ");
                $check_reg=mysqli_fetch_array(@$check);
                   if($check_reg['password']==''){
                        $_SESSION['rollno'] = $rollno;
                       @$Message = file_get_contents("http://alerts.adeeptechnologies.com/api/v4/?api_key=A3ca2502007ffe7f750f2ef5e91370064&method=sms&message=Your+OTP+for+changing+password+%0a$random_number,%0aThanks+Your+ID+is+%0aRegards,%0aSophomore+Scoop+Team&to=$phoneno&sender=ADITYA");
                       $update_otp = mysqli_query($conn, "UPDATE studentdata SET otp='".$random_number."' where rollno='".$rollno."'");
                       if($Message){
                          echo "<script>window.location.href='reg_pass.php';</script>";
                          }else{
                          echo "<script>alert('message failed');</script>";
                          }
                          
                    }
                    else{
                    echo "<script>alert('you are already registered user');
                    window.location.href='login.php';
                    </script>";
                    }
                  }
                    else{
                    echo "your are not registered";
                    }
              }
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
<body class=img-responsive; style="background-image:url('images/plain.jpg'); width: 100%; height: 100%; background-size: cover;  background-position: center center;">
<div class="pen-title animated bounceInUp ">
  <h1 style="color:#40dfe6";>Sophomore Scoop</h1>
</div>
<div class="container animated bounceIndown">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Register</h1>
    <form method="post">
      <div class="input-container">
        <input type="text" id="rollno" name="rollno" value="<?php if($_POST){ echo $_POST['rollno'];} ?>" required="required"/>
        <label for="#{label}">Rollno</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="text" id="rollno" name="phoneno" value="<?php if($_POST){ echo $_POST['phoneno'];} ?>" required="required"/>
        <label for="#{label}">PhoneNumber</label>
        <div class="bar"></div>
      </div>
     

      <div class="button-container">
        <button type="submit" name="register"><span>Register</span></button>
      </div>
      <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>

  </div>
  
    </form>
  </div>

</body>
</html>
<script>
  $(document).ready(function(){
    $('#rollno').keyup(function(){
      var rollno = $(this).val();
      $('#rollno').val($('#rollno').val().toUpperCase());
    });
  }); 
</script>