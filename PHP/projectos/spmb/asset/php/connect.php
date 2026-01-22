<?php
$host = "localhost";
$user = "root";
$pass = ""; // password database
$db   = "spmb";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
