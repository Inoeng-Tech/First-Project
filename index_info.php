<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
</head>

<body>
</body>
</html>
<?php
	//connection to Database
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Titel = $_POST['titel'];
	$Date = $_POST['date'];
	$Autor = $_POST['autor'];
	$IDfoto = $_POST['idfoto'];
	$Text = $_POST['text'];
		
		
	$sql = "INSERT INTO info_DB (titel,date,author,foto-id,text) VALUES ('$Titel','$Date','$Autor','$IDfoto','$Text')";
	
	if(!mysqli_query($con,$sql))
	{
		echo '<a href="alert.php"></a';	
	}
	else
	{
		echo '<a href="fehler.php"></a>';
	}
		


?>


	
	
	
	
	
	
	
	
	
	
	
	