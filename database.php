<?php
$user = "doadmin";
$password = "AVNS_YBXx_wRxNMxSxTUV_I_";
$port = "25060";
$host = "maindatabase-do-user-14617775-0.c.db.ondigitalocean.com";
$database = "webstack";
$table = "users";

try {
        $db = new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $password);
        echo "<h2>Users in Database</h2><ol>";
        foreach ($db->query("SELECT * FROM $table") as $row) {
        echo "<li>Username: " . $row['username'] . ", Email: " . $row['email'] . ", First Name: " . $row['f>
        }
echo "</ol>";
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
        }
?>
