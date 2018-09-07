
 
 <?php
$servername = "localhost";
$username = "web13_usr";
$database = "kuebomare";
$password = "Ueuj114~";

//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>