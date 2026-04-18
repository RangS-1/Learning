<?php
// interface adalah kontrak yang harus dipenuhi oleh class yang mengimplementasikan interface tersebut, sehingga class yang mengimplementasikan interface harus menyediakan implementasi untuk semua method yang didefinisikan dalam interface tersebut.

interface InfoProduk {
    public function getInfoproduk();
}

class Produk{
    protected $judul = "judul",
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

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function judul( $judul ) {
        $this->judul = $judul;
    }

    public function penulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function penerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function harga( $harga ) {
        $this->harga = $harga;
    }
}

class cetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function showinfo() {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoproduk()} <br>";
        }

        return $str;
    }
}

class Manga extends Produk implements InfoProduk {
    public $jumlahHalaman = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $jumlahHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jumlahHalaman = $jumlahHalaman; 
    }

    public function getInfoproduk() {
        $str = "Manga | " . $this->getLabel() . " - Jumlah Halaman: {$this->jumlahHalaman} Halaman.";
        
        return $str; 
    }
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
}

// sama
class Game extends Produk implements InfoProduk {
    public $waktuGame = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $waktuGame) {
        parent::__construct($judul, $penulis, $penerbit, $harga); 
        
        $this->waktuGame = $waktuGame;
    }
    public function getInfoproduk() {
        $str = "Game | " . $this->getLabel() . " ~ Waktu Game: {$this->waktuGame} Jam.";
        return $str; 
    }   
}

$produk1 = new Manga("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 200);
$produk2 = new Game("The Last of Us", "Naughty Dog", "Sony Computer Entertainment", 20000, 10);

$info = new cetakInfoProduk();
$info->tambahProduk($produk1);
$info->tambahProduk($produk2);
echo $info->showinfo();

?>