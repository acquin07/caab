<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname, 3306);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}



?>