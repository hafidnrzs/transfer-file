<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "simple_crud";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn -> connect_error)
    die ("Koneksi ke server-database gagal");
?>
