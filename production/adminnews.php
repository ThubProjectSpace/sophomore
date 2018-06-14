
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<style>

h1 {
    color: white;
    text-align: center;
}

p {
	text-aign:center;
    font-family: verdana;
    font-size: 20px;
}
</style>


</head>
<body>    
    <?php 
        $select = mysqli_query($conn, "SELECT * FROM flash_news where id = '".$_GET['id']."'");
        $fetch_flash_news = mysqli_fetch_array($select);
        echo $fetch_flash_news['textarea'];
     ?>
    
<?php
include "config.php";
if($_GET['id']==''){
    //echo "this is insert form";
    if(isset($_POST['upload']))
    {
        
        $category=$_POST['category'];
        $news=$_POST['news'];
        $text_heading=$_POST['text_heading'];
        $link=$_POST['link'];
        $sql="INSERT INTO flash_news set category='$category', textarea='$news', text_heading='$text_heading',link='$link', status = '1'";


        $insert_news = mysqli_query($conn,$sql);
        if(!$insert_news)
                {
                    echo "<script type=\"text/javascript\">
                            alert(\"not loaded\");
                            window.location = \"adminnews.php\"
                          </script>";       
                }
                else {
                    ?>
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo "News Uploaded Successfully"; ?>
                    </div>
                        <?php
                }

                //echo "<script>alert('".$_POST['sms']."')</script>";

          if($_POST['sms']=="0"){
            //echo "<script>alert('asdf')</script>";
            $sql="SELECT phoneno from studentdata where phoneno!='0' and phoneno!=''";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
            {
            //echo $row['phnno']."<br>";


            @$Message = file_get_contents("http://alerts.adeeptechnologies.com/api/v4/?api_key=A3ca2502007ffe7f750f2ef5e91370064&method=sms&message=".$_POST['text_heading']."&to=".$row['phoneno']."&sender=ADITYA");
                
            }
            if($Message){
                  echo "<script></script>";
                }
          }

    }
}
 ?>

        <form method="post" class="form-horizontal">
            <center><h1 color="pink"><i><b>Flash News</b></i></h1></center>
            <div class="col-md-12" style=" padding:50px; height:100%;">
                <div class="col-md-4">
                    <label>Select type</label>
                    <select class="form-control" name="category" required="required">
                        <option value=""> --------------Select--------------</option>
                        <option  value="event">Event</option>
                        <option value="update">Latest Update</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label>Enter Updates or Events:</label>
                    <h5>Heading:</h5>
                   <input type="text" value="<?php echo $fetch_flash_news['textarea'] ?>" class="form-control" name="text_heading"> 
                    <h5>Link:</h5>
                   <input type="text" class="form-control" name="link"> 
                   <h5>Content:</h5>
                    <textarea class="form-control" rows="10" cols=50 name="news"></textarea>

                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="0" name="sms">
                        <span class="custom-control-indicator"></span>Send SMS
                    </label>
                </div>
                 

                   



                <div class="col-md-12 text-right" style="margin-top:15px;">
                    
                            
                 
                     <input type="submit" class="btn btn-success" name="upload" value="upload">
                </div>
            </div>
        </form>
    </div>
</body>
</html>