<?php
include "config.php";
session_start();// $_GET[id];
//echo "hi";  
//exit;   
if(isset($_GET['action']))
{
	//echo "welcome";
	//exit;

	$sql="DELETE FROM flash_news WHERE id='".$_GET[id]."' ";
	//echo $sql;
	//exit;
	$result=mysqli_query($conn,$sql);

	if($result){
		//echo "welcome";
		//?>
	          <script>window.location.href="index1.php?pages=viewneno&message=recordDeleted";</script>
    
<?php
	}
}
?>