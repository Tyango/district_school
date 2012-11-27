<?php
session_start();
include("database.php");
if($_GET['schoolid'])
{
	//echo $_REQUEST['schoolid'];
	//die;
	$todelete = $_GET["schoolid"];
	echo $todelete;
	$sql = "DELETE FROM school WHERE id='$todelete'";
	mysql_query($sql);
	header("Location:view.php");
	exit;
}
else
{
	header("Location:view.php");
	exit;
}
session_destroy();
mysql_close($connection);
?>
