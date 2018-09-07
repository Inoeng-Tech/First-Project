<?php
	
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Mobile = $_POST['mobile'];
	
	$sql = "INSERT INTO test_DB (name,email,mobile) VALUES ('$Name','$Email','$Mobile')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';	
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:1; url=display.php");
	
?>