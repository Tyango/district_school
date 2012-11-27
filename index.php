<?php
session_start();
include("database.php");
$sql = "SELECT * FROM district";
$result = mysql_query($sql);
echo "<form id ='form' action ='add.php' method ='post'>
<label>Choose district here</label>
<select name= 'District' id ='d_dropdown'> district<option>--Select--</option>";
while($row = mysql_fetch_array($result))
{
$id = $row['id'];
echo "<option value = '$id'>".$row['name']."</option>";
}
echo "<input type ='text' name ='school' id='school' value='Enter the school here'>
		<input type ='submit' name ='submit' value='Submit' >";
echo "<br/><br/><br/><label>Can't find district<input type ='submit' name ='add_district' value='Add District here'> </label></form>";
session_destroy();
mysql_close();
?>
