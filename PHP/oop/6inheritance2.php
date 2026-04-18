<?php

class Produk{
    public $judul = "judul", //property dengan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit",
            $jumlahHalaman = 0,
            $waktuBaca = 0,
            $tipeProduk = "Tipe",
            $harga = 0;   

    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $jumlahHalaman, $waktuGame, $tipeProduk) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuGame = $waktuGame;
        $this->tipeProduk = $tipeProduk;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    //public function showallinfo() {
    //    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    //    return $str;
    //}
}

// contoh inheritance dengan class baru yang mewarisi class Produk
class Manga extends Produk {
    public function showallinfo() {
        $str = "Manga | {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - Jumlah Halaman: {$this->jumlahHalaman} Halaman.";
        
        return $str; 
    }
}

// sama
class Game extends Produk {
    public function showallinfo() {
        $str = "Game | {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ Waktu Game: {$this->waktuGame} Jam.";
        return $str; 
    }
}

//class InfoProduk {
//    public function showinfo(Produk $produk) {
//        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//        return $str;
//    }
//}


$produk1 = new Manga("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 100, 0, "Manga");
$produk2 = new Game("Grand Theft Auto", "Rockstar Games", "Rockstar", 15000, 0, 10, "Game");

echo $produk1->showallinfo();
echo "<br>";
echo $produk2->showallinfo();
echo "<br>";

?>