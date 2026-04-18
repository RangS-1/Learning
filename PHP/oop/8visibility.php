<?php

class Produk{
    public $judul = "judul", //property dengan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit";
               
    protected $diskon = 0; //visibility protected, hanya bisa diakses dalam class itu sendiri dan class turunannya (child class)

    private $harga = 0; //visibility private, hanya bisa diakses dalam class itu sendiri

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100); //mengakses properti harga yang memiliki visibility private, hanya simpan di parent class (Produk)
    }


    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function showallinfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Manga extends Produk {
    public $jumlahHalaman = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $jumlahHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga); //memanggil constructor dari class induk (Produk) untuk menginisialisasi properti yang diwariskan
        
        $this->jumlahHalaman = $jumlahHalaman; //menginisialisasi proper
    }

    public function showallinfo() {
        $str = "Manga | " . parent::showallinfo() . " - Jumlah Halaman: {$this->jumlahHalaman} Halaman.";
        
        return $str; 
    }
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
}

// sama
class Game extends Produk {
    public $waktuGame = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $waktuGame) {
        parent::__construct($judul, $penulis, $penerbit, $harga); //memanggil constructor dari class induk (Produk) untuk menginisialisasi properti yang diwariskan
        
        $this->waktuGame = $waktuGame; //menginisialisasi properti yang spesifik untuk Game
    }
    public function showallinfo() {
        $str = "Game | " . parent::showallinfo() . " ~ Waktu Game: {$this->waktuGame} Jam.";
        return $str; 
    }

    
}

$produk1 = new Manga("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 100);
$produk2 = new Game("Grand Theft Auto", "Rockstar Games", "Rockstar", 15000, 10);
$produk3 = new Produk("Gantungan kunci", "Test", "Test", 12000);


echo $produk1->showallinfo();
echo "<br>";
echo $produk2->showallinfo();
echo "<br>";
echo $produk3->showallinfo();
echo "<hr>";

// ini bisa jadi problem karena properti $harga pada class Produk memiliki visibility public, 
// sehingga dapat diakses dan diubah dari luar kelas.
// misalnya dengan 
// $produk1->harga = 5000; maka harga produk1 akan berubah menjadi 5000, padahal seharusnya harga produk1 tetap 10000 sesuai dengan nilai yang diinisialisasi pada constructor.
// echo "Harga Produk 1: " . $produk1->harga;
// gunakan visibility lain seperti private atau protected
// jika menggunakan protected hanya bisa diakses oleh class itu sendiri dan class turunannya (child class), sehingga tidak bisa diakses dari luar kelas, tetapi masih bisa diakses oleh class turunannya (child class) seperti Manga dan Game.
// visibility private hanya bisa diakses oleh class itu sendiri, sehingga tidak bisa diakses dari luar kelas maupun class turunannya (child class), sehingga untuk mengakses properti harga yang memiliki visibility private, kita harus menggunakan method getter seperti getHarga() yang sudah dibuat pada class Produk.

$produk1->setDiskon(50); //mengatur diskon 50% untuk produk1
echo "Harga Produk 2: " . $produk2->getHarga();
echo "<br>";
echo "Harga Produk 1: " . $produk1->getHarga();
?>