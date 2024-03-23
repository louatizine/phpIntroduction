<?php 

$servername = "localhost";
$username = "zine";
$password = "test1234";
$database = "zine_pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>