<?php
$servername = "localhost";
$username = "rc17281";
$password = "bneEL{^6w,WnGz~$";
$dbname = "rc17281";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>