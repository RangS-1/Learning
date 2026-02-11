<?php
// Database connection sama seperti kode Anda
$host = "localhost";
$user = "root";
$pass = "";
$db   = "wikramart";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['simpan'])) {
    $nama     = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $hargaJ   = $_POST['harga_jual'];
    $hargaB   = $_POST['harga_beli'];
    $stok     = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO barang (nama_barang, kategori, harga_jual, harga_beli, stok) VALUES (?,?,?,?,?)");
    $stmt->bind_param("ssiii", $nama, $kategori, $hargaJ, $hargaB, $stok);
    $stmt->execute();
    header("Location: admin.php"); // Diubah agar kembali ke file yang sama
}

if (isset($_POST['hapus']) && isset($_POST['id_barang'])) {
    $id = (int)$_POST['id_barang'];
    $stmt = $conn->prepare("DELETE FROM barang WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    // Optional: tambah pesan sukses/gagal jika mau
    header("Location: admin.php"); // refresh halaman
    exit;
}

$data = $conn->query("SELECT * FROM barang ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Wikramart</title>
    <link rel="stylesheet" href="../asset/css/admin.css">
</head>
<body>

<div class="sidebar">
    <img src="../asset/img/icon.png" width="220px" height="220px" ma    rgin-left="20px">
    <h3>WIKRAMART</h3>
    <button onclick="openTab('stok')" id="btn-stok" class="active">Stok Barang</button>
    <button onclick="openTab('tambah')" id="btn-tambah">Tambah Barang</button>
    <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
</div>

<div class="main-content">
    <div id="stok" class="tab-content active">
        <h2>Daftar Stok Barang</h2>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Aksi</th> <!-- Kolom baru -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while($row = $data->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                    <td><?= htmlspecialchars($row['kategori']) ?></td>
                    <td>Rp <?= number_format($row['harga_beli']) ?></td>
                    <td>Rp <?= number_format($row['harga_jual']) ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td>
                        <form method="post" style="margin:0;" 
                              onsubmit="return confirm('Yakin ingin menghapus <?= htmlspecialchars(addslashes($row['nama_barang'])) ?>?');">
                            <input type="hidden" name="id_barang" value="<?= $row['id'] ?>">
                            <button type="submit" name="hapus" class="btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div id="tambah" class="tab-content">
        <h2>Tambah Barang Baru</h2>
        <form method="post">
            <div class="form-grid">
                <input type="text" name="nama_barang" placeholder="Nama Barang" required>
                <input type="text" name="kategori" placeholder="Kategori" required>
                <input type="number" name="harga_beli" placeholder="Harga Beli" required>
                <input type="number" name="harga_jual" placeholder="Harga Jual" required>
                <input type="number" name="stok" placeholder="Stok Awal" required>
            </div>
            <button type="submit" name="simpan">Simpan Barang</button>
        </form>
    </div>
</div>

<script>
function openTab(tabName) {
    // Sembunyikan semua tab
    var contents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < contents.length; i++) {
        contents[i].classList.remove("active");
    }
    
    // Hilangkan kelas active di semua tombol
    var buttons = document.querySelectorAll(".sidebar button");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
    }

    // Tampilkan tab yang dipilih
    document.getElementById(tabName).classList.add("active");
    event.currentTarget.classList.add("active");
}
</script>

</body>
</html>
