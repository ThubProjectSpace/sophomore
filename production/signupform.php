<?php
include"config.php";
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 0px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body align="center">

<h2>ADD STUDENT</h2>

<form action="" method=post>
  
 
    <label for="uname"><b>STUDENT ID</b></label>
  <br>  <input type="text" placeholder="Enter rollno here" name="uname" required>
<!--
   <br> <label for="psw"><b>Password</b></label>
    <br><input type="password" placeholder="Enter Password" name="psw" required>-->
        
    <br><button type="submit" name="sign">Sign up</button>
    
  

  
</form>

</body>
</html>

<?php
$flag=0;
if(isset($_POST['sign']))
{
	$rollno=$_POST['uname'];
	$sql="select user_name from users ";
	$result=mysqli_query($conn,$sql);
	
	
while($row=mysqli_fetch_array($result))
{
	$u=$row['$user_name'];
	if($u==$uname)
		$flag=1;
}
if(flag==0)
{
	$sql="insert into users (user_name,password) values('$rollno','$rollno')";
	$res=mysqli_query($conn,$sql);
	echo "$res";
	}
}
	?>
 