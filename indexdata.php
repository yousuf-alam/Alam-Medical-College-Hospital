<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$n=$_POST['name'];
$e=$_POST['email'];
$u=$_POST['user'];
$p=$_POST['psw'];

$sql = "INSERT INTO yousuf(name,email,user,pass)  VALUES ('$n','$e','$u','$p')";

if (mysqli_query($conn, $sql)) {
     include('home.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>