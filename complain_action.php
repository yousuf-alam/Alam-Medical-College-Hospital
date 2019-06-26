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
$n=$_POST['type'];
$e=$_POST['description'];

$sql = "INSERT INTO comp(type,description)  VALUES ('$n','$e')";

if (mysqli_query($conn, $sql)) {
     echo "succesfully complained";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>