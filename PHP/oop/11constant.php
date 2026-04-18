<?php

//define untuk konstanta global
//const untuk konstanta dalam class

define('NAMA', 'Rangga'); //mendefinisikan sebuah konstanta dengan nama NAMA dan nilai Rangga
define('UMUR', 20); //mendefinisikan sebuah konstanta dengan nama UMUR dan nilai 20
//echo NAMA; //menampilkan nilai konstanta NAMA
//echo UMUR; //menampilkan nilai konstanta UMUR

class Perkenalan {
    //define('NAMA', 'Rangga'); error karena define() tidak bisa digunakan dalam class, untuk mend
    
    const NAMA = 'Rangga'; //mendefinisikan sebuah konstanta dengan nama NAMA dan nilai Rangga dalam class Perkenalan
    const UMUR = 20; //mendefinisikan sebuah konstanta dengan nama UMUR dan nilai 20 dalam class Perkenalan

    public function perkenalkan() {
        return "Nama saya " . self::NAMA . ", umur saya " . self::UMUR . " tahun."; //mengakses konstanta NAMA dan UMUR yang ada dalam class Perkenalan menggunakan self::
    }
}
$perkenalan = new Perkenalan();
echo $perkenalan->perkenalkan(); //menampilkan pesan perkenalan

echo "<br>";
echo Perkenalan::NAMA; //mengakses konstanta NAMA yang ada dalam class Perkenalan secara langsung menggunakan nama class
echo "<br>";
echo "<hr>";

// ***********************
// ****Magic Constants****
// ***********************

echo __LINE__; //menampilkan nomor baris saat ini
echo "<br>";
echo __FILE__; //menampilkan path lengkap dari file yang sedang dieksekusi
echo "<br>";
echo __DIR__; //menampilkan direktori dari file yang sedang dieksekusi
echo "<br>";

function fungsi() {
    echo __FUNCTION__; //menampilkan nama fungsi saat ini, jika tidak berada dalam fungsi maka akan menampilkan string kosong
}
echo fungsi();
echo "<br>";

class kelas {
    public $kkl = __CLASS__; //menampilkan nama class saat ini, jika tidak berada dalam class maka akan menampilkan string kosong
}
$kl = new kelas();
echo $kl->kkl;
echo "<br>";

?>