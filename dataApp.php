<?php

$hostname = "localhost"; // Host name  
$username = "root"; // Mysql
$password = "MuhammadLuthfi25"; // Password to open database
$database_name = "anggota_robotik";

$db = mysqli_connect($hostname, $username, $password, $database_name);


if ($db->connect_error) {
    die ("ERORR 🚫" . mysqli_connect_error());
} 


?>


