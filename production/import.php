
<?php 
    include "config.php";
    //session_start();
 ?>
 <style>
     
 </style>
 <div  class="col-md-12 ">
     <h2 class="text-center">Add Attendance</h2>
 </div>
<div class="col-md-10 col-md-offset-1" style="height:400px;">

    <?php 
    include "config.php";
    //session_start();
 
 if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];      


         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
            
                switch($_POST['get_data'])
                {
                    
                case '32':
                    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                    {
                    $sql = "INSERT into attendance (rollno,studentname,se,dwdm,cn,daa,wt,ipr,cn_lab,se_lab,wt_lab,total,percent,status) 
                            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."',1)";
                
                    $result = mysqli_query($conn, $sql);
                    }
               case '41':
                    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                    {
                        $sql = "INSERT into attendance (rollno,studentname,CG_NS,UML,MC,UML_LAB,MPD_LAB,ST_LAB,HADOOP_lab,total_41,percent_41,status) 
                            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."',1)";
                        $result = mysqli_query($conn, $sql);
                     }
                case '42':
                      while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                      {
                      $sql = "INSERT into attendance (rollno,studentname,cc,ds,ms,hci,project,total_42,percent_42,status) 
                        values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."',1)";
                
                      $result = mysqli_query($conn, $sql);
                      }
                }
                if(!isset($result))
                {
                    echo "<script type=\"text/javascript\">
                            alert(\"Invalid File:Please Upload CSV File.\");
                            window.location = \"import.php\"
                          </script>";       
                }
                else {
                    ?>
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "Uploaded Successfully"; ?>
                    </div>
                        <?php
                }
             
            
             fclose($file); 
         }
    }    



  ?>

 
 

    <div class="col-md-6" style="height:100%; padding:0px; ">
        <img src="images/attendance.jpg" style="width:100%; border-top-left-radius:8px; border-bottom-left-radius:8px; height: 100%;">
    </div>
    <div class="col-md-6" style="height:100%; border-top-right-radius:8px; padding-top:100px; border-bottom-right-radius: 8px; background: linear-gradient(to bottom left, #003366 25%, #ffffff 101%);">
        <form class="form-horizontal" method="post" name="upload_excel" enctype="multipart/form-data" action="">
            <div class="col-md-12" style="border:1px solid grey; background: whitesmoke; border-radius:8px; height:200px; padding-top:8%;">

            <div class="col-md-12 text-center" style="margin-bottom: 20px;"><label >Note: Need to upload CSV Format only</label></div>

                <!-- File Button -->
                <div class="form-group">
                    <span class="col-md-3 col-md-offset-1" style="color:#073A50; font-weight: bold;" for="filebutton">Upload here</span>
                    <div class="col-md-4">
                        <input type="file" name="file" id="file" class="input-large">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label 
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <br/>
                        <input type="submit" name="Import" value="import" class="btn btn-primary" data-loading-text="Loading...">
                        <a href="uploads/attendance_sample.csv" download>Sample CSV File</a>
                    </div>
                </div>

            </div>
</form>
    </div>
</div>


 