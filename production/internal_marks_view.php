<?php
	if(isset($_POST['11']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
	<?php
	}
	?>
<?php	
	if(isset($_POST['12']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
	<?php
	}
	?>
	<?php
	if(isset($_POST['21']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 
						}

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
	<?php
	}
	?>
	<?php
	if(isset($_POST['22']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
	<?php
	}
	?>
	<?php
		if(isset($_POST['31']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
    <?php
	}
	?>
	<?php
	if(isset($_POST['32']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
	<?php
	}
	?>
	<?php
	if(isset($_POST['41']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
<?php
	}

	if(isset($_POST['42']))
	{
		//echo "<script>alert('hai')</script>";
        error_reporting(0);
        include "includes/config.php";
        //session_start();
        $rollno ='16MH1A05B5';
        //$rollno=$_SESSION['rollno'];
        // $sql = ;

        $subjects = mysqli_query($conn, "SELECT id,subject FROM subject_info where sem='21' ");
        $marks=mysqli_query($conn,"SELECT * FROM internals where rollno='".$rollno."' ");
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
   	                 <th>Descriptive</th>
 					 <th>Objective</th>
 					 <th>Assignment</th>
 					</tr>
                  </thead>
                  <tbody>
                    <?php
			          while($row=mysqli_fetch_array($marks))
                      {
                            //ho "'.$row.'";
						$i=4;
                        while($row2=mysqli_fetch_array($subjects))
						{
		    			while($row2)
						 {
                          echo "<tr>";
					   	  echo "<td>".$row2['id']."</td>";
						  echo "<td>".$row2['subject']."</td>";
						  //echo "</tr>";
						  echo "<td>" . $row[$i]."</td>";
                          $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
						  $i=$i+1;
                          echo "<td>" . $row[$i] . "</td>";
                          $i=$i+1;
						  //echo "<td>" . $row[13]."</td>";
                          echo "</tr>";
						 }
						}

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
	<?php
	}
	?>
