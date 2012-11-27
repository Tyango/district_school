<?php
session_start();
include("database.php");

if($_SESSION["selected_district"]!="--Select--")
{
	$disid = $_SESSION["selected_district"];
	$school = $_SESSION["school_name"];
	$sql = "INSERT INTO school (district_id,name) VALUES('$disid','$school')";
	mysql_query($sql);
	header("Location:view.php");
	exit;
	
}
else
{
	header("Location:index.php");
	exit;
}
session_destroy();
?>
