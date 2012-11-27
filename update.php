<?php
session_start();
include("database.php");
if(isset($_GET['edit']))
{
	$schoolid = $_GET['schoolid'];
	echo $schoolid;
	
	$schoolname =$_GET["editname"];
	echo $schoolname;
	$statement = "UPDATE school SET 
					name ='$schoolname' WHERE id ='$schoolid'";
	mysql_query($statement);
	header("Location:view.php");
	exit;
	//update scohool set name = name where id =schoolid;
}
session_destroy();
?>


