<?php

// Connection to MySQL Database
$servername = "maindatabase-do-user-14617775-0.c.db.ondigitalocean.com:25060";
$username = "doadmin";
$password = "AVNS_YBXx_wRxNMxSxTUV_I_";
$dbname = "webstack";

$con = new mysqli_connect($servername, $username, $password, $dbname);

mysqli_select_db($dbname, $con)

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
