<?php

if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];
}

// KONEKSI DATABASE 
$servername = "localhost";
$username = "root";
$password = "MuhammadLuthfi25";
$dbname = "anggota_robotik";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// -------------------------------------------------------------

$sql = "DELETE FROM db_anggota WHERE id = $id";
$result = $con->query($sql);

header("location: table.php");
exit;

?>