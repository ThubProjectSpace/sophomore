<?php
if(isset($_POST['get_data'])){
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        
        $rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='".$_POST['get_data']."' ");
        //$labs=mysqli_query($conn,"SELECT lab FROM lab_info where sem='".$_POST['get_data']."' ");
        switch($_POST['get_data'])
          {
          case '11':
                $marks=mysqli_query($conn,"SELECT * FROM internal11 where rollno='".$rollno."' ");

                break;
          case '12':
                $marks=mysqli_query($conn,"SELECT * FROM internal12 where rollno='".$rollno."' ");
                break;
          case '21':
                $marks=mysqli_query($conn,"SELECT * FROM interna21 where rollno='".$rollno."' ");
                break;
          case '22':
                $marks=mysqli_query($conn,"SELECT * FROM internal22 where rollno='".$rollno."' ");
                break;
          case '31':

                
                $marks=mysqli_query($conn,"SELECT * FROM internal31 where rollno='".$rollno."' ");
                break;
          case '32':
                $marks=mysqli_query($conn,"SELECT * FROM internal32 where rollno='".$rollno."' ");
                break;
          case '41':
                $marks=mysqli_query($conn,"SELECT * FROM internal41 where rollno='".$rollno."' ");
                break;
          case '42':
                $marks=mysqli_query($conn,"SELECT * FROM internal42 where rollno='".$rollno."' ");
                break;
              }
              //echo $marks;
              
        //$marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
		//	echo mysqli_num_rows($marks);		
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
       <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- Custom Theme Style -->
  	  
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
                <div class="table-responsive">
                <table class="table table-hover table-responsive" id="internals">
              
                  <thead>
                    <tr>
                     <th>Sno</th>
                     <th>Subject</th>
   	                 <th>Descriptive</th>
 				          	 <th>Assignment</th>
 					           <th>Objective</th>
                     <th>DescriptiveII</th>
                     <th>AssignmentII</th>
                     <th>ObjectiveII</th>
                    
 					          </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=2;
			               while($rows=mysqli_fetch_array($marks))
                      {
            						
                        $sql="SELECT COUNT(*) as theory_count FROM subject_info WHERE sem='".$_POST['get_data']."' AND category='T' ";
                        $result=mysqli_query($conn,$sql);
                        $t_count=mysqli_fetch_array($result);
                        $t_count['theory_count'];
                        //echo $result;
                        //exit;
                        $sub_count=$t_count['theory_count'];
                        $j=1;
                        
                        
                      
            

                        while($row2=mysqli_fetch_array($subjects))
						            {
                          if($j<=$sub_count)
                          {
                          echo "<tr>";
					   	            echo "<td>".$row2['id']."</td>";
						              echo "<td>".$row2['subject']."</td>";
						              //echo "</tr>";
						              echo "<td>" . $rows[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $rows[$i] . "</td>";
						              $i=$i+1;
                          echo "<td>" . $rows[$i] . "</td>";
                          $i=$i+1;
                          echo "<td>" . $rows[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $rows[$i] . "</td>";
                          $i=$i+1;
                          echo "<td>" . $rows[$i] . "</td>";
                          $i=$i+1;
                                 
                          echo "</tr>";
                          $j++;
                        }
						              
						            }
                        //echo $i;

                      }
				             //$i;      
                     //echo $i;
                     //exit;          
			            	?>
                        
                </tbody>
                 </table>
               </div>
                    
                 
                   <table class="table table-hover table-responsive" id="internals" >

                    <thead>
                    <tr>
                     <th>Sno</th>
                     <th>Lab</th>
                     <th>Internal</th> 
                     </tr>
                     </thead>
                     <tbody>
                        <?php
                            //echo $index;
                            //echo $j;
                            //exit;
                           
                             switch($_POST['get_data'])
                                {
                                case '11':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal11 where rollno='".$rollno."' ");

                                      break;
                                case '12':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal12 where rollno='".$rollno."' ");
                                      break;
                                case '21':
                                      $marks=mysqli_query($conn,"SELECT * FROM interna21 where rollno='".$rollno."' ");
                                      break;
                                case '22':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal22 where rollno='".$rollno."' ");
                                      break;
                                case '31':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal31 where rollno='".$rollno."' ");
                                      break;
                                case '32':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal32 where rollno='".$rollno."' ");
                                      break;
                                case '41':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal41 where rollno='".$rollno."' ");
                                      break;
                                case '42':
                                      $marks=mysqli_query($conn,"SELECT * FROM internal42 where rollno='".$rollno."' ");
                                      break;
                                    }
                                    $k=1;
                              
                            while($rows=mysqli_fetch_array($marks))
                            {
                            $sql="SELECT COUNT(*) as lab_count FROM subject_info WHERE sem='".$_POST['get_data']."' AND category='L' ";
                            $result1=mysqli_query($conn,$sql);
                            $l_count=mysqli_fetch_array($result1);
                            $lab_c=$l_count['lab_count'];
                            
                            //exit;

                            $labs=mysqli_query($conn,"SELECT * FROM subject_info WHERE sem='".$_POST['get_data']."' AND category='L'");
                            //$k=1;

                            
                            //echo $i;
                            //exit;
                            while($row2=mysqli_fetch_array($labs))
                            {
                              //echo "hi";
                              
                              if($k<=$lab_c)
                              {
                              echo "<tr>";
                              echo "<td>".$row2['id']."</td>";
                              echo "<td>".$row2['subject']."</td>";
                              echo "<td>".$rows[$i]."</td>";
                              $i=$i+1;
                              echo "</tr>";
                              $k=$k+1;
                              }
                            } 
                          
                          }?>
                          </tbody>
                          </table>    
               </div>

             </div>

            </div>

              </div>
 
           
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->


        <!-- /page content -->
		</div>
    </div>	
    
<?php } ?>
