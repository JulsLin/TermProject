<?php

// Connection to MySQL Database
$servername = "maindatabase-do-user-14617775-0.c.db.ondigitalocean.com:25060";
$username = "doadmin";
$password = "AVNS_YBXx_wRxNMxSxTUV_I_";
$dbname = "webstack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>