<?php
//Buat abstract class:
//BangunDatar
//Method abstract:
//hitungLuas()
//Buat class turunan:
//Persegi
//Lingkaran
//Segitiga
//Rumus:
//Persegi = sisi × sisi
//Lingkaran = π × r × r
//Segitiga = ½ × alas × tinggi
//Kemudian:
//Simpan semua object dalam satu array.
//Gunakan looping untuk menampilkan luas setiap bangun.


abstract class BangunDatar{
    public $nama = "Bangun Datar";
    
    public function __construct($nama){
        $this->nama = $nama;
    }
    abstract public function hitungLuas();
}

class Persegi extends BangunDatar{
    public $sisi = 0;
    public function __construct($nama, $sisi){
        parent::__construct($nama);
        $this->sisi = $sisi;
    }
    public function hitungLuas(){
        $hasilPersegi = $sisi * $sisi;
        return $hasilPersegi;
    }
}

$bangundatar1 = new Persegi("Persegi", 20);

echo $bangundatar1->hitungLuas(20);
?>