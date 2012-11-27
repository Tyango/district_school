<!DOCTYPE html AUTHOR:TNC>
<html>
	<head><title>View page</title>
		<script >
			function showSchool(districtid)
			{
				var districtid =document.getElementById(districtid).value;
				xmlhttp=new XMLHttpRequest();
				xmlhttp.onreadystatechange =function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById('schools').innerHTML =xmlhttp.responseText;
						
					}
				}
				xmlhttp.open("GET","action.php?districtid="+districtid,true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
	<?php
	session_start();
	include ("database.php");

		//$district_name = $_POST["d_id"];
		//$school_name =$_POST["s_id"];

	$district = "SELECT * FROM district";
	//$school = "SELECT * FROM school";
	$result1 = mysql_query($district);
	//$result2 =mysql_query($school);
	?>
	<label>District</label>
	
	<form method ='get'>
		<select id="selecttag" name = "selecttag" onchange ="showSchool('selecttag');">
		<option>--Select--</option>";	
		<?php while($row1=mysql_fetch_array($result1)) 
			{ 
				//$namd = $row1["id"];
				//echo $id;
				echo "<option value =".$row1['id'].">". $row1['name'] ."</option>";
				
			}
		?>
	
	</select>
	</form>
	<div id ='schools'></div>
	
	<?php
	mysql_close($connection);
	session_destroy();
	?>
</body>
<html>


