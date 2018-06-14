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
    include "config.php";
    $select = mysqli_query($conn, "SELECT * FROM flash_news where id = '".$_GET['id']."' ");
    $fetch_flash_news = mysqli_fetch_array($select);
        //echo $fetch_flash_news['textarea'];



    $old_category=$fetch_flash_news['category'];
    $old_news=$fetch_flash_news['textarea'];
    $old_text_heading=$fetch_flash_news['text_heading'];
    $old_link=$fetch_flash_news['link'];


    

    //include "config.php";
    //if($_GET['id']==''){
      //  echo "this is insert form";

        if(isset($_POST['update']))
        {
            //echo "hii";
            //exit;

             $category=$_POST['category'];
             $news=$_POST['news'];
             $text_heading=$_POST['text_heading'];
             $link=$_POST['link'];
             $sql="UPDATE flash_news set category='$category', textarea='$news', text_heading='$text_heading',link='$link', status = '1' WHERE id='".$_GET['id']."' ";


            $insert_news = mysqli_query($conn,$sql);
            if(!$insert_news)
            {
              ?>
             <div class="alert alert-danger alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo "News Updation Failed "; ?>
                </div>
         <?php
            }
            else {
                ?>
                <div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo "News Updated Successfully"; ?>
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


                    @$Message = file_get_contents("http://alerts.adeeptechnologies.com/api/v4/?api_key=A3ca2502007ffe7f750f2ef5e91370064&method=sms&message=".$_POST['text_heading'].",".$_POST['link'].",".$_POST['news']."&to=".$row['phoneno']."&sender=ADITYA");

                }
                if($Message){
                  echo "<script></script>";
              }
          }

      }
  
       // echo "this is update form";
  $select = mysqli_query($conn, "SELECT * FROM flash_news where id = '".$_GET['id']."' ");
  $fetch_flash_news = mysqli_fetch_array($select);
        //echo $fetch_flash_news['textarea'];



  $old_category=$fetch_flash_news['category'];
  $old_news=$fetch_flash_news['textarea'];
  $old_text_heading=$fetch_flash_news['text_heading'];
  $old_link=$fetch_flash_news['link'];


  ?>

  <form method="POST" class="form-horizontal">
    <center><h1 color="pink"><i><b>Flash News</b></i></h1></center>
    <div class="col-md-12" style=" padding:50px; height:100%;">
        <div class="col-md-4">
            <label>Select type</label>
            <select class="form-control" name="category" required="required" value="<?php echo "$old_category";?>">
                <option value=""> --------------Select--------------</option>
                <option  value="event" <?php if($old_category=='event') echo "selected"; ?> >Event</option>
                <option value="update" <?php if($old_category=='update') echo "selected"; ?>>Latest Update</option>
            </select>
        </div>
        <div class="col-md-8">
            <label>Enter Updates or Events:</label>
            <h5>Heading:</h5>
            <input type="text" class="form-control" name="text_heading" value="<?php echo "$old_text_heading";?>"> 
            <h5>Link:</h5>
            <input type="text" class="form-control" name="link" value="<?php echo "$old_link";?>"> 
            <h5>Content:</h5>
            <textarea class="form-control" rows="10" cols=50 name="news"><?php echo $old_news;?></textarea>

            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" name="sms">
                <span class="custom-control-indicator"></span>Send SMS
            </label>
        </div>






        <div class="col-md-12 text-right" style="margin-top:15px;">



           <input type="submit" class="btn btn-success" name="update" value="update">
       </div>
   </div>
</form>
</div>
</body>
</html>