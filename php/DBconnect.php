<?php
$servername = "http://141.44.30.147";
$username = "medSecteam1";
$password = "4b4AWuUI";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 