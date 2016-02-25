<?php
/*$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "instituto";*/

$servername = "mysql02.institutopaulista.org";
$username = "institutopauli2";
$password = "Instituto0901";
$database = "institutopauli2";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>