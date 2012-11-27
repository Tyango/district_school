<?php
session_start();
include ("database.php");
if(isset($_POST["submit"]))
{
	$_SESSION["selected_district"] = $_POST["District"];
	$_SESSION["school_name"] =$_POST["school"];
	header("Location:add_school.php");
	exit;
}
if(isset($_POST["add_district"]))
{
	header("Location:add_district.php");
	exit;
}
if(isset($_POST["add_district"]))
{
	header("Location:add_district.php");
	exit;
}
session_destroy();
?>
