<?php

// Connection to MySQL Database
$hostname = "maindatabase-do-user-14617775-0.c.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS_YBXx_wRxNMxSxTUV_I_";
$dbname = "webstack";
$port = "25060";

$conn = new mysqli_connect($hostname, $username, $password, $dbname, $port);

mysqli_select_db($dbname, $conn);

if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    exit();
}

?>
