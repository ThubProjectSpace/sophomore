
<?php 
    include "includes/config.php";
    session_start();
 ?>
 <style>
     
 </style>
 <div  class="col-md-12 ">
     <h2 class="text-center">Add Students</h2>
 </div>
<div class="col-md-10 col-md-offset-1" style="height:400px;">
                   <?php 
    //include "config.php";
    //session_start();
 

 if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];      


         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {
                 $count=0;
                 $select_rollno = mysqli_query($conn, "SELECT * from studentdata where rollno='".$getData[0]."' ");
                  //$select_cat=mysqli_fetch_array($select_rollno);
                  
                   @$count = mysqli_num_rows($select_rollno);
                   //echo $count;


                 if($count==1)
                  {
                    $sql="UPDATE studentdata  set rollno='".$getData[0]."',phoneno='".$getData[1]."' where rollno='".$getData[0]."' ";
                  $result=mysqli_query($conn,$sql);
                  //echo $result;

                  }
                  else
                  {
                   $sql = "INSERT into studentdata (rollno,phoneno,status) 
                   values ('".$getData[0]."','".$getData[1]."','1')";
                   $result=mysqli_query($conn,$sql);
                    //echo $result;
                  }
                  //echo $sql;
                  //echo "<br>";
                  //exit;
                   
                   //echo $result;
                   //exit;
                
             }
             if(!$result)
                {
                  ?>
                    <div class="alert alert-danger alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo "Invalid File:Please upload CSV file"; ?>
                </div>
                
                <?php
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
            <div class="col-md-12">

     

            </div>
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
                        <a href="CSV/student_data.csv" download>Sample CSV File</a>
                    </div>
                </div>

            </div>
</form>
    </div>
</div>


 