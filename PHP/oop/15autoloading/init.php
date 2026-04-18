<?php
// file ini digunakan untuk menginisialisasi autoloading, sehingga kita tidak perlu lagi menggunakan require_once untuk setiap file yang kita butuhkan

// Hell Nah!
// require_once 'Require/Produk.php';
// require_once 'Require/infoproduk.php';
// require_once 'Require/cetakInfoProduk.php';
// require_once 'Require/Manga.php';
// require_once 'Require/Game.php';

spl_autoload_register(function($class) { 

    // ini digunakan untuk mengambil class dari tiap file yang ada di folder Require
    // secara otomatis!
    // tanpa perlu require manual seperti comment di atas
    require_once 'Require/' . $class . '.php';

    // gunakan kode dibawah untuk lebih lengkapnya
    // require_once __DIR__ . '/Require/' . $class . '.php';
});
?>