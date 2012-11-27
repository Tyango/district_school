<?php
session_start();
include('database.php');;
//if(isset($_GET["schoolid"]))
//{
$edit = $_GET['schoolid'];

$_SESSION["id"] =$edit;
//echo $edit;
$sql = "SELECT name FROM school WHERE id = '$edit'";
$result =mysql_query($sql);
$row = mysql_fetch_array($result);
echo "<form method ='get' action ='update.php'>";
echo "<label>Edit school name HERE..</label>";
echo "<input type = 'text' value =".$row['name']." name = 'editname'>";
echo "<input type ='hidden' name ='schoolid' value ='$edit'>";
echo "<input type ='submit' value ='Save Changes' name ='edit'>";
echo "</form>";
//}
//else
//echo "not set";
session_destroy();
?>
