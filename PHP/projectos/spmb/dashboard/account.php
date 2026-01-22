<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<body>

<div class="container">
    <div class="content">
        <h1>Informasi Akun</h1>

        <table>
            <tr>
                <td>Nama</td>
                <td><?= $_SESSION['name']; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?= $_SESSION['username']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $_SESSION['email']; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>***Tidak Semudah Itu Boy***</td>
            </tr>
        </table>
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
