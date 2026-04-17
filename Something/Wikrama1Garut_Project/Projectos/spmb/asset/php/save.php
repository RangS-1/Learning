<?php
include "connect.php";

$name     = $_POST['name'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$con_password = $_POST['con_password'];

// validasi konfirmasi password
if ($password !== $con_password) {
    echo "Password dan konfirmasi tidak sama!";
    exit;
}

// hash password SEKALI SAJA
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO user (name, email, username, password)
          VALUES ('$name', '$email', '$username', '$hash_password')";

if (mysqli_query($koneksi, $query)) {
    echo "Registrasi berhasil! Yattaaa!";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
