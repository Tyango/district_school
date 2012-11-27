<?php
	$connection = mysql_connect("localhost","root","") or die("Not connected");
	$_SESSION["connection"] =$connection;
	mysql_select_db("district_school",$connection) or die("No any DB found");
?>
