<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'maindatabase-do-user-14617775-0.c.db.ondigitalocean.com');
define('DB_USERNAME', 'doadmin');
define('DB_PASSWORD', 'AVNS_YBXx_wRxNMxSxTUV_I_');
define('DB_NAME', 'webstack');
define('PORT', '25060');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD, PORT);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>