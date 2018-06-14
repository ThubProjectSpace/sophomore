
<?php 
    include "config.php";
    session_start();
 ?>
 <style>
     
 </style>
 <div  class="col-md-12 ">
     <h2 class="text-center">Add Internal Marks</h2>
 </div>
<div class="col-md-10 col-md-offset-1" style="height:400px;">
    
<?php
 
    //include "config.php";
    //session_start();
 
 
 if(isset($_POST['import'])){
         //echo $_POST['post_result'];

        
      $filename=$_FILES["file"]["tmp_name"];      
      

         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");

            switch($_POST['post_result'])
            {
             case '11':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,desc6,obj6,assg6,lab1,lab2,lab3,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;

              case '12':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,desc6,obj6,assg6,desc7,obj7,assg7,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;

              case '21':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,lab1,lab2,lab3,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;

              case '22':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,lab1,lab2,lab3,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;
              case '31':
              $getData = fgetcsv($file, 10000, ",");
              //echo $getData;
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internal31(rollno,studentname,desc1,assg1,obj1,desc2,assg2,obj2,desc3,assg3,obj3,desc4,assg4,obj4,desc5,assg5,obj5,desc6,assg6,obj6,desc7,assg7,obj7,desc8,assg8,obj8,desc9,assg9,obj9,desc10,assg10,obj10,lab1,lab2,lab3,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."','".$getData[29]."','".$getData[30]."','".$getData[31]."','".$getData[32]."', '".$getData[33]."','".$getData[34]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;
              case '32':
              //echo "welcome";
              $getData = fgetcsv($file, 10000, ",");

             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {
               
              //echo "welcome";
              //exit;
              $sql = "INSERT into internal32(rollno,studentname,desc1,assg1,obj1,desc2,assg2,obj2,desc3,assg3,obj3,desc4,assg4,obj4,desc5,assg5,obj5,desc6,assg6,obj6,desc7,assg7,obj7,desc8,assg8,obj8,desc9,assg9,obj9,desc10,assg10,obj10,desc11,assg11,obj11,desc12,assg12,obj12,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."','".$getData[29]."','".$getData[30]."','".$getData[31]."','".$getData[32]."','".$getData[33]."','".$getData[34]."','".$getData[35]."','".$getData[36]."','".$getData[37]."','1')";
                   //echo $sql;
                   //exit;              
                 $result = mysqli_query($conn,$sql);
                  //echo $result;
                  //exit;
              }
              break;

              case '41':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,desc6,obj6,assg6,desc7,obj7,assg7,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;

              case '42':
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {


               $sql = "INSERT into internals(rollno,studentname,desc1,obj1,assg1,desc2,obj2,assg2,desc3,obj3,assg3,desc4,obj4,assg4,desc5,obj5,assg5,desc6,obj6,assg6,desc7,obj7,assg7,gr_total,status)
               values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','1')";
                 
                  $result = mysqli_query($conn, $sql);
              }
              break;
           }
                if(!isset($result))
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
                        <input type="hidden" name="post_result" value="<?php echo $_POST['post_data'];?>">
                        <input type="submit" name="import" value="import" class="btn btn-primary" data-loading-text="Loading...">
                        <a href="uploads/internals_sample_format.csv" download>Sample CSV File</a>
                    </div>
                </div>

            </div>
</form>
    </div>
</div>


 