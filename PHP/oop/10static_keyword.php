<?php

class Tambah{
    public static $pesan = "Hasil penjumlahan adalah: ";
    
    public static function tambah($a, $b) {    
        echo self::$pesan; //mengakses properti pesan yang memiliki keyword static menggunakan self::    
        return $a + $b;

        //tidak perlu menggunakan this->variabel
    }
}

$a = Tambah::tambah(10, 20); //memanggil method tambah() secara langsung tanpa membuat objek dari class Tambah
echo $a; //menampilkan hasil penjumlahan
?>