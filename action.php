<?php
session_start();
include ("database.php");
if(isset($_POST['go']))
{
	$_dname = $_POST["district"];
	$adddisctrict = "INSERT INTO district (name) VALUES('$_dname')";
	mysql_query($adddisctrict);
	header("Location:view.php");
	exit;
 }
if(isset($_GET['districtid']))
{
	echo "<form method='get'>";
	echo "<table border =1>";
	echo "<tr>";
	echo "<td>School Lists</td> ";
	echo "<td>Action</td></tr> ";
	$_districtid = $_GET['districtid'];
	$statement = "SELECT * FROM school WHERE district_id ='$_districtid'";
	$result = mysql_query($statement);
	echo "<tr>";
	//echo "<td>'--Select District--'</td>";
	while($row = mysql_fetch_array($result))
	{
		echo "<td>".$row['name']."</td>";
		echo "<td><a href ='delete.php?schoolid=".$row['id']."'>Delete</a>/<a href = 'edit.php?schoolid=".$row['id']."'>Edit</a></td>";
		echo "</tr>";
	}
	echo "</form>";
	
}

else
{
	header("Location:add.php");
	exit;
}
?>
