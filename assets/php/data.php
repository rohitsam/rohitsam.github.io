<?php
$servername = "tcp:rohitsam.database.windows.net,1433";
$username = "rohitsam";
$password = "fuckall123$";
$dbname = "my_game";
// Create connection
$conn = new mysqli($servername, $username, $password) or DIE("unable unable unble");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>