<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Record</title>
</head>

<body>

<?php
		// connect File to databade
		#include_once("connect.php");
		$con = mysqli_connect('localhost','web13_usr','Ueuj114~','kuebomare');
		
		// Select Database
		mysqli_select_db($con,'kuebomare');
		
		//Select Query
		$sql = "SELECT * FROM test_DB";
		
		//Execute the query
		$records = mysqli_query($con,$sql);
		
		
?>
<table>
	<tr>
    	<th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
     </tr>
     <?php
	 while($row = mysqli_fetch_array($records))
	 {
			echo "<tr><form action=update.php method=get>";
			echo "<td><input type=text name=pname value='".$row['Name']."'> </td>";
			echo "<td><input type=text name=email value='".$row['Email']."'> </td>";
			echo "<td><input type=text name=mobile value='".$row['Mobile']."'> </td>";
			echo "<input type=hidden name=id value='".$row['ID']."'>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
	 } 
	 
	 ?>
        
</body>
</html>