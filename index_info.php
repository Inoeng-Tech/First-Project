
	
	<?php
	//connection to Database
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Titel = $_POST['titel'];
	$Date = $_POST['date'];
	$Author = $_POST['author'];
	$Fotoid = $_POST['fotoid'];
	$Text = $_POST['text'];
	
	$sql = "INSERT INTO info_DB (titel,date,author,fotoid,text) VALUES ('$Titel','$Date','$Author','$Fotoid','$Text')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';	
	}
	else
	{
		echo 'Inserted';
	}
	
?>
	
	
	
	
	
	
	
	