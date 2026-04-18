<?php
// jadi hanya require file init.php saja untuk inisialisasi autoloading
require_once 'init.php';

$produk1 = new Manga("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 200);
$produk2 = new Game("The Last of Us", "Naughty Dog", "Sony Computer Entertainment", 20000, 10);

$info = new cetakInfoProduk();
$info->tambahProduk($produk1);
$info->tambahProduk($produk2);
echo $info->showinfo();

echo "<br>";
echo "<hr>";
new Testlain();
// Ini akan memanggil class Testlain yang berada di file Testlain.php tanpa perlu melakukan require karena sudah diinisialisasi autoloading pada file init.php
// Mantap! 

?>