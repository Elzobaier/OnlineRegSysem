<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="security_test";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = mysqli_real_escape_string($conn, $_POST['user']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$adress = mysqli_real_escape_string($conn, $_POST['adress']);

$sql= "INSERT INTO regstration (username,password,email,adress) values ('$username','$password','$email','$adress')";

if($conn->query($sql)=== true){
	echo"regstration successfuly";
}
else{
	echo "Error".$sql."<br/>".$conn->error;
}

$conn->close();
?>