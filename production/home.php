<?php 
  include "config.php";
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sophomorescoop</title>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*@media only screen and (min-width: 250px) 
and (max-width: 767px){
   #row {
        
    }
    #child_row{
      height:400px;
    }

    #child_row1{
      height:400px;
      
    }
}

@media only screen and (min-width: 768px) 
and (max-width: 991px){
     #row {
        height:auto;
    }
    #child_row{
      height:400px;
    }

    #child_row1{
      height:400px;
      
    }
}
@media only screen and (min-width: 992px) 
and (max-width: 1200px){
      #row {
        height:500px;
    }
    #child_row{
      height: 100%;
    }

    #child_row1{
      height: 100%;
      
    }
}
@media only screen and (min-width: 1200px){
    #row {
        height:500px;
        
        padding:30px;
    }
    #child_row{
      height: 100%;
      
    }
    #child_row1{
      height: 90%;
      
    }
}*/

.updates, .events {
  height: 400px;
  margin-bottom: 30px;
}
</style>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    body{
      padding:0;
      margin:0;
      width:100%;
      height:100%;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>

<style>
#a{
    font-family: 'Roboto', sans-serif;
border:1px solid black;
}
#b{
    font-family: 'Roboto', sans-serif;
margin-left:20px;

border:1px solid black;
}

.news{
    font-family: 'Roboto', sans-serif;
    padding-top:15px;
    padding-bottom:15px;
}
#event{
  border:1px solid grey;
  background-color: white;
  border-radius:3px;
  text-align:justify;
  padding:10px;
}
 #updates{

  border:1px solid grey;
  background-color: white;
  border-radius:3px;
  text-align:justify;
  padding:10px;
}
#event a{
  text-decoration:none;
  color:black;
  text-shadow: 1px 1px 1px grey;
  cursor:pointer;
  line-height: 18pt;
  font-size:12pt;
}
#updates a{
  text-decoration:none;
  color:black;
  text-shadow: 1px 1px 1px grey;
  cursor:pointer;
  line-height: 18pt;
  font-size:12pt;
}
#about{
 
  padding:50px;
}
</style>
 

</head>
<body>


         
       
  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b>Sophomore  </b> scoop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <?php
        //echo $_SESSION['rollno'];
        if((@$_SESSION['rollno'])=='')
        {
          ?>
        <li><a href="login.php">Login</a></li>
        <?php
        }
        else
        {
        ?>
        <li><a href="logout.php">Logout</a></li>
        <?php
        }
        ?>
        <li><a href="#about">About us</a></li>
        <li><a href="javascript:void(0)" data-toggle="collapse" data-target="#chatbot" class="animated bounce infinite"><i class="fa fa-commenting-o fw fa-lg" style="font-size: 25px; color: orange;"></i></a></li>
      </ul>
     
    </div>
  </div>
</nav>
<div class="container-fluid" style="padding:0px;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: relative;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images\logo.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images\acoe.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images\2.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images\super1.jpg" alt="" style="width:100%;">
      </div>
       
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  <iframe style="position: absolute; right: 0; top: 20px; z-index: 999999; border: none;"  id="chatbot" class="collapse col-md-3" height="400" 
    src="https://console.dialogflow.com/api-client/demo/embedded/75196d63-4e3d-4a71-91fa-f76220a8eb9e">
  </iframe>

  </div>
</div>

  <div class="w3-display-middle w3-margin-top w3-center">

  </div>
</header>

<!--news and notifications-->
 

<div class="container-fluid" style="background-image: url('images/handmade.png'); background-repeat:repeat-y; background-size: cover; padding:0px ">
  <div class="row" id="row">
    <div id="child_row1" class="col-md-6 col-xs-12">
    <div  class=" text-center " >
            <h3 style="color:#000;font-family:Tekton Pro Ext; padding:0px">
              <i><b>Events</b></i>
            </h3>
          </div>
          
            <div class="col-md-12 events" id="child_row" style="border:1px solid grey; border-radius:10px; 
     background-color: #fff">
              <marquee id="test" behavior="scroll" direction="up" height="100%" scrolldelay="100" scrollamount="5" onMouseOver="document.all.test.stop()" onMouseOut="document.all.test.start()">
                <?php 
                  $select_event = mysqli_query($conn, "select * from flash_news where category='event'");
                  while($fetch_event = mysqli_fetch_array($select_event))
                  {
                ?>
                  <div  id="event">
                    <h6><a style=""><?php echo $fetch_event['text_heading']; ?> </a></h6>
                    <p><a style="color:blue"><?php echo $fetch_event['textarea']; ?></a></p>
                    <a href="<?php echo $fetch_event['link']?>" style=" background: linear-gradient(to right, rgba(255,0,0,0), rgba(238,145,31));"><?php echo $fetch_event['link']; ?> </a>
                  </div>
                <?php
                  }
                ?>
              </marquee>
            </div>
            </div>

            <div id="child_row1" class="col-md-6 col-xs-12">
    <div class=" text-center">
      <h3 style="color:#000;font-family:Times New Romans;">
              <i><b>Latest Updates</b></i>
            </h3>
          </div>
          
            <div class="col-md-12 updates" id="child_row" style="border:1px solid grey; border-radius:10px; background-color: #fff">
              <marquee id="test1" behavior="scroll" direction="up" height="100%" scrolldelay="100" scrollamount="5" onMouseOver="document.all.test1.stop()" onMouseOut="document.all.test1.start()">
                <?php 
                  $select_update = mysqli_query($conn, "select * from flash_news where category='update'");
                  while($fetch_update = mysqli_fetch_array($select_update))
                  {
                ?>
                    <div id="updates">
                      <h6 ><a style=""><?php echo $fetch_update['text_heading'];?></a></h6>
                      <p><a style="color:blue"><?php echo $fetch_update['textarea']?></a></p>
                      <a href="<?php echo $fetch_update['link']?>" style="background: linear-gradient(to right, rgba(255,0,0,0), rgba(238,145,31));"><?php echo $fetch_update['link']?> </a>
                    </div>  
                <?php
                  }
                ?>
              </marquee>
            </div>
            </div>
          
</div>
</div>


<!-- About us-->
<div class="row">
<div class="w3-row-padding w3-grayscale"style="background-image: url('images/handmade.png');">
  <div class="w3-container w3-padding-10s0" id="about">
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="color:#fcf8e3;"><b>About us:</b></h2>
    <p style="color:#000;"><b> SOPHOMORE SCOOP is a platform that allows students to store/upload his/her certificates in pdf or image data format and to download them according to their wish and need ,Each student will be given a login ID and password using which they can access their data.
     In addition to this upload &download of data,this platform also gives the news and notifications to the students and important notifications will be sent as an SMS and e-mail to the student Students can view their internal marks on before hand.</b>

   </p>
  </div>
</div>
</div>

   
</body>

</html>















<!-- <script>
  $(document).ready(function(){
    //alert('asdf');
    $("#chatbot").click(function(){
      alert('adf');
      $("#chatbotdiv").collapse();
    });
  });
</script> -->