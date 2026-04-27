<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";
$port = 3306; // Specify the port


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
