<?php
// date_default_timezone_set('Africa/Nairobi');
//db details
session_start();
$server = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'detergents';

//Connect and select the database
$conn = new mysqli($server, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	// echo "Connection established";
}

?>