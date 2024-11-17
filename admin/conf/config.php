<?php
$dbuser = "root";
$dbpass = "root1234"; // Replace with the actual password
$host = "localhost";
$db = "internetbanking";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
