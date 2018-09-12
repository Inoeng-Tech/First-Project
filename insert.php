<<<<<<< HEAD
<?php
	//connection to Database
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
	
=======
<?php
	//connection to Database
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
	
>>>>>>> f46d70d14d843f6dd63e01857677adbdc8ab81eb
?>