<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u819514852_droid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>