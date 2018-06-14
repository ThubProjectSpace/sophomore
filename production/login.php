<?php 
    include "config.php";
    session_start();
    if(@$_SESSION['rollno']!=''){
     //header('location:index.php');
    }
 ?>

 <?php 

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
<body class=img-responsive; style="background-image:url('images/plain.jpg');  width: 100%; height: 100%; background-size:cover;  background-position: center center;">
<div class="animated bounceInUp ">
  <h1 class="text-center" style="color:#40dfe6; font-family:Times New Romans;"><b>Sophomore Scoop</b></h1>
</div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login</h1>
        <form method="post">
            <div class="input-container">
                <input type="text" id="rollno" name="rollno" required="required"/>
                <label for="#{label}">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container" style="margin-bottom:20px;">
                <input type="password" id="#{label}" name="password" required="required"/>
                <label for="#{label}">Password</label>
                <div class="bar"></div>
            </div>
            <?php
            if (isset($_POST['login'])) {
              $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);

              $select_login = mysqli_query($conn, "SELECT * from studentdata where rollno='".$rollno."' and password='".$password."' ");
              $fetch_login = mysqli_fetch_array($select_login);
              $category = $fetch_login['category'];
              $_SESSION['category']=$category;
              $count = mysqli_num_rows($select_login);

            if(@$count==1){
              if($category==''){


                $_SESSION['rollno'] = $rollno;
            //echo $rollno;
                header("location:index_s.php");
              }elseif($category=='admin'){
                $_SESSION['rollno'] = $rollno;
                header("location:index1.php");
              }
            }

            else{
              ?>
                

                <div class="col-md-12 text-center ">

                    <label class=" text-danger animated bounce">
                        <?php echo "Please check username and password";?>

                    </label>

                </div>



                <?php
            }
           }
         
         if(isset($_POST['forgot_pswd'])){
            if($_SESSION['rollno']==''){
              ?>
              <div class="col-md-12 text-center ">

                    <label class=" text-danger animated bounce">
                        <?php echo "Please Enter User";?>

                    </label>

                </div>
                <?php
            }
            else{
              echo "<script>window.location.href='otp.php'</script>";
            }
           }
    
          
        ?>

            <div class="button-container">
                <button type="submit" name="login"><span>Login</span></button>
            </div>
            <div class="footer"><li><a href="otp.php" nmae="forgot_pswd">Forgot your password?</a></li></div>
      
                <div class="footer"><a href="register.php">Create Account</a>
            </div>

        </form>
    </div>
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