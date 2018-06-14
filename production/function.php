<?php
 
 include 'config.php';
 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];

		$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		//echo $ext;
		//exit();	


		 if($ext=="csv")
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	          $sql = "INSERT into attend (Subject,Held,Attend,percentage,status) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','1')";
                   $result = mysqli_query($conn, $sql);
				if(!$result)
				{
					echo "<script type=\"text/javascript\">
							alert(\"Data not Uploaded\");
							window.location = 'index1.php?pages=imp';
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = 'index1.php?pages=imp';
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
		 else {
		 	?>
                    <div class="alert alert-danger alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo "Invalid File:Please upload CSV file"; ?>
                </div>
                
                <?php
 
		 }
	}	 

	
	 function get_all_records(){
    $conn = getdbname();
    $Sql = "SELECT * FROM attend";
    $result = mysqli_query($conn, $Sql);  


    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>sno</th>
                          <th>Subject</th>
                          <th>Held</th>
                          <th>Attend</th>
                          <th>%</th>
						  <th>status</th>
                        </tr></thead><tbody>";


     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['sno']."</td>
                   <td>" . $row['Subject']."</td>
                   <td>" . $row['Held']."</td>
                   <td>" . $row['Attend']."</td>
                   <td>" . $row['%']."</td>
				   <td>" . $row['status']."</td></tr>";
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
}

 ?>

 
 
