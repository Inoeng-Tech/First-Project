<?php
	//connection to Database
	$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
	
	if(!$con)
	{
		echo 'Not cnnected To Server';
	}
	
	$Name = $_POST['name'];
	$Date = $_POST['date'];
	$target_file = $_FILES['foto']['name'];
	$Source = $_POST['source'];
	
	$sql = "INSERT INTO foto_DB (name,date,foto,source) VALUES ('$Name','$Date','$target_file','$Source')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';	
	}
	else
	{
		echo 'Inserted';
	}
	#header("refresh:1; url=index_foto.php");
	
	
	
	//====UPLOAD IMAGE	

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image

	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["foto"]["tmp_name"]);
    	if($check !== false) {
    	    echo "File is an image - " . $check["mime"] . ".";
        	$uploadOk = 1;
    	} else {
        	echo "File is not an image.";
        	$uploadOk = 0;
    	}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
    	echo "Sorry, file already exists.";
    	$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["foto"]["size"] > 500000) {
    	echo "Sorry, your file is too large.";
    	$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
    	echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
    	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        	echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    	} else {
        	echo "Sorry, there was an error uploading your file.";
    	}
	}
					


?>


	
	
	
	
	
	
	
	
	
	
	
	