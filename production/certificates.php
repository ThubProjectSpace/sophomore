<?php 
    include "includes/config.php";
    
 ?>


 <?php
    if(isset($_POST['upload'])){

        $rollno = $_SESSION['rollno'];
        $file_type = $_POST['file_type'];
        $others = $_POST['others'];
        // echo "<script>alert('".$others."')</script>";


         $insert_files = mysqli_query($conn, "INSERT INTO certificates set rollno='".$rollno."', file_type= '".$file_type."',  others ='".$others."', status = '1' ");
             if($insert_files){
                 $last_id = mysqli_insert_id($conn);
                 $target = "uploads/".$rollno."/";
                 $file_name = $_FILES['file']['name'];
                 $size = $_FILES['file']['size'];
                 $temp_name = $_FILES['file']['tmp_name'];
                 $ext_array = explode('.', $file_name);
                 $count = count($ext_array);
                 $ext = $ext_array[$count-1];
                 $img_name = $file_name;
                 if($size>=204800){
                  ?>
                    <div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "file size limit exceeded"; ?>
                    </div>
                <?php
                }elseif($ext!='jpg' && $ext!="png" && $ext!="pdf"){
                  ?>
                    <div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "file should be of jpg.png.pdf"; ?>
                    </div>
                    <?php

                }else{
                   $upload = move_uploaded_file($temp_name, $target.$img_name);
                   if($upload){
                   $update_files = mysqli_query($conn,"UPDATE certificates set file_name='".$img_name."' where id = '".$last_id."' ");
                   if($update_files){
                    ?>
                    <div class="alert alert-success alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "file uploaded Successfully"; ?>
                    </div>
                    <?php
     
                   
                   }else{
                    ?>
                    <div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "file Uploaded but not updated into database";?>
                         </div>
                        <?php
     
                  
                   }
                }else{
                  ?>
                  <div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "failed"; ?>
                         </div>
                         <?php
                }
            }
         }else{
          ?>
          <div class="alert alert-danger alert-dismissible fade in" >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "Uploaded failed";?>
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

    
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <style>

        #hidden_text{
            display:none;
        }

    </style>


  </head>

  <body class="nav-lg">
    <div class="container body">
      <div class="main_container">        
        <!-- page content -->
        <div  role="main">
          <div class="col-md-12">
            <div class="page-title">
              <div class="title_left">
                <h3><span class="fa fa-plus-circle"></span>Add New</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Certificates uploader</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <input type="file" name="file">    
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" id="certificate_type" name="file_type" onchange="hide()" required>
                                    <option value="">----Select-----</option>
                                    <option value="ssc">Ssc</option>
                                    <option value="inter">Intermediate</option>
                                    <option value="caste">Caste</option>
                                    <option value="income">Income</option>
                                    <option value="res">Residence</option>
                                    <option value="passport">Passport</option>
                                    <option value="pan">Pan card</option>
                                    <option value="aadhar">Aadhar</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>



                            <div class="col-md-3" id="hidden_text">
                                <input type="text" class="form-control"  name="others">
                            </div>
                            




                            <div class="col-md-3">
                                <input type="submit" value="Upload" class="btn btn-success" name="upload">
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- /page content -->
		
      </div>
    </div>



    <!-- jQuery -->
    <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>

<script>
    function hide(){
        var certi_type = document.getElementById('certificate_type').value;
        if(certi_type=="others"){
           document.getElementById('hidden_text').style.display = "block";
        }else{
            document.getElementById('hidden_text').style.display = "none";
        }
    }

    // $('#certificate_type').change(function(){
    //     $('#hidden_text').show();
    // });
</script>
