
<?php
//session_start();
$roll=$_SESSION['rollno'];

$sql="select *from studentdata where rollno='$roll'";
//exit;
@$rc=mysqli_query($conn,$sql);
@$row=mysqli_fetch_array($rc);
?>
<?php
if(isset($_POST['update']))
{
	//echo "hello";
	
	$name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

	$update_data = mysqli_query($conn,"UPDATE studentdata set name='".$name."',email='".$email."',phoneno='".$mobile."' where
	rollno = '".$roll."' ");
  if($update_data){
     ?>
     <div class="alert alert-success alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "Records Updated Successfully"; 
                        ?>
    </div>
       <?php

    
  }
	$sql="SELECT  * FROM studentdata where rollno='$roll' ";
    //exit;
    $rc=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rc);
    
    
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

    <title>registration| </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript">
     function check()
     {
       var s1=document.f1.sname.value;
       var p1=document.f1.mobile.value;
	   var s2=new RegExp("^[a-z]+$");
       var p2=new RegExp("^\\d\\d\\d\\d\\d\\d\\d\\d\\d\\d$");
        if(!(s1.match(s2)))
		{
          alert("sorry,enter alphabets only in name");
          document.f1.sname.value="";
          document.f1.sname.focus();
           return false;
        }
        else if(!(p1.match(p2)))
        {
          alert("sorry,enter 10 digit number");
          document.f1.mobile.value="";
          document.f1.mobile.focus();
           return false;
		}
         else  
           return true;
     }
   </script>	 
  </head>

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

                      
                      <span class="section">Profile</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text" value="<?php echo $row['name'];?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" value="<?php echo $row['email'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Mobile Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="Mobile" name="mobile" required="required"  value="<?php echo $row['phoneno'];?>"data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
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
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>





