<?php
 include "includes/config.php";
//session_start();
 $rollno = $_SESSION['rollno'];
 // $sql = ;
 $abc = mysqli_query($conn, "SELECT * FROM certificates where rollno ='".$rollno."' ");
// echo " '".$select_rows."' ";
 //exit;
 

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
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-lg">
    <div class="container body">
      <div class="main_container">
        
        <!-- page content -->
        <div  role="main">
          <div class="">
           

           
            <div class="row">
             


             

              
             
                <div class="x_panel">
                  
                  <div class="x_content">
                    <table class="table table-hover" id="attendance">
                      <thead>
                        <tr>
                          <th>file type</th>
                          <th>File Name</th>
                          <th>File</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                     while($row=mysqli_fetch_array($abc))
                      {
                      ?>
					  <tr>
						<td><?php echo $row['file_type']; ?></td>
            <td><?php echo $row['file_name'];?></td>
						<td><a href="uploads/<?php echo $rollno?>/<?php echo $row['file_name'];?>" download>Download</a></td>
					  </tr>
					  <?php
	                      }
                      ?>
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              
            </div>
        </div>
        <!-- /page content -->

       
      </div>
    </div>

    
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	

  </body>
</html>