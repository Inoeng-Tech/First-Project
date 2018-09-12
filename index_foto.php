<<<<<<< HEAD
<?php
	//connection to Database
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Name = $_POST['name'];
	$Date = $_POST['date'];
	$Foto = $_POST['foto'];
	$Source = $_POST['source'];

	$sql = "INSERT INTO foto_DB (name,date,foto,source) VALUES ('$Name','$Date','$Foto','source')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';	
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:1; url=display_foto.php");
	
=======
<?php
	//connection to Database
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Name = $_POST['name'];
	$Date = $_POST['date'];
	$Foto = $_POST['foto'];
	$Source = $_POST['source'];

	$sql = "INSERT INTO foto_DB (name,date,foto,source) VALUES ('$Name','$Date','$Foto','source')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';	
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:1; url=display_foto.php");
	
>>>>>>> f46d70d14d843f6dd63e01857677adbdc8ab81eb
?>