<?php
//session_start();
$roll=$_SESSION['rollno'];

$sql="SELECT * FROM studentdata WHERE rollno='$roll'";
//exit;
$rc=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rc);
?>
<?php
if(isset($_POST['update']))
{
	//echo "hello";
	
	$old_pswd=$_POST['old_pswd'];
    $new_pswd=$_POST['new_pswd'];
    
    if($old_pswd==$row['password'])
    {
	$update_data = mysqli_query($conn,"UPDATE studentdata set password='".$new_pswd."' where
	rollno = '".$roll."' ");
    ?>
    <div class="alert alert-success alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "Records Updated Successfully"; 
                        ?>
    </div>

    
    <?php
	$sql="SELECT * FROM studentdata WHERE rollno='$roll'";
    //exit;
    $rc=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rc);
   //echo $row['password'];
    //exit;
	}
	else{
		?>
		<div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "Password is Incorrect"; 
                        ?>
    </div>

		<?php
	}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>registration</title>

    <!-- Bootstrap -->
    
    <!-- Font Awesome -->
   
    <!-- NProgress -->
    
    <!-- Custom Theme Style -->
 
    </html>


  <body class="nav-lg">
  
    <div class="container body">
      <div class="main_container">
        
        

        <!-- page content -->
        <div role="main">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="" method=POST>

                      
                      <span class="section">ChangePassword</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Old password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="old_pswd" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="old_pswd" required="required" type="text" value="">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="new_pswd" name="new_pswd" required="required" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="update" type="submit" class="btn btn-success"name="update">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        
      </div>
    </div>

    <!-- jQuery -->
    <!--<script src="../vendors/jquery/dist/jquery.min.js"></script>-->
    <!-- Bootstrap -->
    
    <!-- FastClick -->
    <!-- NProgress -->
 
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    
	
  </body>
</html>






