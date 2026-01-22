<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.html");
    exit;
}

include "../asset/php/connect.php";

/* TOTAL USER */
$total_user = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));

/* USER TERAKHIR */
$last_user = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT name FROM user ORDER BY id DESC LIMIT 1")
);

/* TANGGAL LOGIN */
$tanggal_login = date("d-m-Y H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Statistik</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div class="container">

    <div class="content">
        <h1>Dashboard Statistik</h1>
        <p>Selamat datang, <b><?= $_SESSION['name']; ?></b></p>

        <div class="stats">
            <div class="card">
                <h2><?= $total_user; ?></h2>
                <p>Total User</p>
            </div>

            <div class="card">
                <h2><?= $last_user['name']; ?></h2>
                <p>User Terakhir</p>
            </div>

            <div class="card">
                <h2><?= $tanggal_login; ?></h2>
                <p>Login Terakhir</p>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <h3>Menu</h3>
        <a href="dashboard.php">Dashboard</a>
        <a href="account.php">Account</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

</div>

</body>
</html>
