<?php ob_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'c24.blog';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

//echo 'Connected successfully' . PHP_EOL;

//die('Hello - Hallo');
