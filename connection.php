<?php
$servername = "localhost"; // Your server name (e.g., localhost if running locally)
$username = "root";        // Database username (default for WAMP is 'root')
$password = "";            // Database password (default for WAMP is empty)
$dbname = "stepanportfolio";     // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>