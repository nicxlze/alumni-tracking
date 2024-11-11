<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_tracking";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // The connection is successful
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

?>
