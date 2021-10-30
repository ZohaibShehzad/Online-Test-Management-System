<?php
$servername = "localhost";
$dbname = "stsadmin_users";
$username = "stsadmin";
$password = "StS@2019$786";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>