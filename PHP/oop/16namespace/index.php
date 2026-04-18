<?php
// ***************
// namespace digunakan untuk agar class dengan nama yang sama tidak bentrok
// sangat penting untuk digunakan dalam project besar
// terutama untuk tim
// ***************

// jadi hanya require file init.php saja untuk inisialisasi autoloading
require_once 'App/init.php';

$produk1 = new Manga("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 200);
$produk2 = new Game("The Last of Us", "Naughty Dog", "Sony Computer Entertainment", 20000, 10);

$info = new cetakInfoProduk();
$info->tambahProduk($produk1);
$info->tambahProduk($produk2);
echo $info->showinfo();
echo "<hr>";

//class yang sama namun beda file.
//new App\Produk\Users();
//echo "<br>";
//new App\Service\Users();

// gunakan alias untuk mempersingkat penulisan namespace
use App\Produk\Users as ProdukUsers;
new ProdukUsers();
echo "<br>";
use App\Service\Users as ServiceUsers;
new ServiceUsers();
?>