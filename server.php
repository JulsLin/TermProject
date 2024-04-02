<?php

// Connection to MySQL Database
$servername = "localhost";
$username = "root";
$password = "Password";
$dbname = "webstack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>