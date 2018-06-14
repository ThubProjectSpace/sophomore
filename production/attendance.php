<?php
 include "includes/config.php";
//session_start();
 $rollno =$_SESSION['rollno'];
 //_SESSION['rollno'];
 // $sql = ;

 $held = mysqli_query($conn, "SELECT id,held,subject FROM subject_info where sem='32'");
  
 
 

 $attendance=mysqli_query($conn,"SELECT * FROM attendance where rollno='".$rollno."' ");

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
                      <table class="table table-hover">
                         <thead>
                            <tr>
                             <th>Sno</th>
                             <th>Subject</th>
 							               <th>Held</th>
 							               <th>Attended</th>
 							               <!--<th>Percentage</th>-->
 						                </tr>
                         </thead>
                         <tbody>
                        <?php
						              $i=3;
                          while($row=mysqli_fetch_array($attendance))
                           {
                            //ho "'.$row.'";
                           	while($row2=mysqli_fetch_array($held)){
                            
                           echo "<tr>";
                           echo "<td>" . $row2['id']."</td>";
                      
                           echo "<td>" . $row2['subject'] . "</td>";
                           echo "<td>" . $row2['held'] . "</td>";
                           echo "<td>".$row[$i]."</td>";
                           $i=$i+1;
                           //echo "<td>" . $row[13]."</td>";
                           echo "</tr>";
                           	}
                           
                      }
                      ?>
                        
                      </tbody>
                    </table>
                         <table class="table table-hover">
                         <thead>
                            <tr>
                             <th>Percentage</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              
                                <?php
                                 $attendance=mysqli_query($conn,"SELECT * FROM attendance where rollno='".$rollno."' ");
                                 $rows=mysqli_fetch_array($attendance);                              
                                echo "<td>" . $rows['percent']."</td>";
                                echo "</tr>";
                                ?>
                          </tbody>
                  </div>
                </div>
              
            </div>
        </div>
        <!-- /page content -->

       
      </div>
    </div>
