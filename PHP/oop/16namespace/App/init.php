<?php
// file ini digunakan untuk menginisialisasi autoloading, sehingga kita tidak perlu lagi menggunakan require_once untuk setiap file yang kita butuhkan

//require_once 'App/Produk/Users.php';
//require_once 'App/Produk/Produk.php';
//require_once 'App/Produk/infoproduk.php';
//require_once 'App/Produk/cetakInfoProduk.php';
//require_once 'App/Produk/Manga.php';
//require_once 'App/Produk/Game.php';
//
//require_once 'App/Service/Users.php';

spl_autoload_register(function($class) { 
    // kode dibawah menghasilkan App\Produk\Users = ["App", "Produk", "Users"]
    $class = explode('\\', $class); //memecah string namespace menjadi array berdasarkan karakter '\'
    $class = end($class); //mengambil elemen terakhir dari array yang dihasilkan, yaitu nama classnya saja (Users)
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class) { 
    // kode dibawah menghasilkan App\Service\Users = ["App", "Service", "Users"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});

?>