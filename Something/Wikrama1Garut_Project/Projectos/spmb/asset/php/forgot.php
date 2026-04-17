<?php
include "connect.php";

$email        = $_POST['email'];
$password     = $_POST['password'];
$con_password = $_POST['con_password'];

if ($password !== $con_password) {
    echo "Password tidak sama!";
    exit;
}

// hash password baru
$hash_password = password_hash($password, PASSWORD_DEFAULT);

// update password
$query = "UPDATE user SET password='$hash_password' WHERE email='$email'";

if (mysqli_query($koneksi, $query)) {
    echo "Password berhasil direset.";
} else {
    echo "Gagal reset password.";
}
?>
