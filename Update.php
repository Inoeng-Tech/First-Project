<?php
		// connect File to databade
		#include_once("connect.php");
		$con = mysqli_connect('localhost','web13_usr','Ueuj114~');
		
		// Select Database
		mysqli_select_db($con,'kuebomare');
		
		//UPDATE Query
		$sql = "UPDATE test_DB SET Name='$_POST[pname]',Email='$_POST[email]',Mobile='$_POST[mobile]' WHERE ID='$_POST[id]'";
		
		//Execute the query
		if(mysql_query($con))
			header("refresh:1; url=index.php");
		else
			echo"Update fail";
			


?>