<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$cn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($cn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";
?>