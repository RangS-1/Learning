<?php

class Produk{
    public $judul = "judul", //property dengan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;   

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // fungsi showallinfo() akan digunakan untuk produk umum, yang bukan termasuk manga atau game
    // sehingga memanggil fungsi ini!
    public function showallinfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// mengambil fungsi showallinfo() dari class Produk dengan menggunakan parent::showallinfo()
// overriding!
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
echo "<br>";

?>