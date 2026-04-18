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

    // inheritance adalah konsep dimana sebuah kelas dapat mewarisi properti dan method dari kelas lain.
    public function showallinfo() {
        $str = "{$this->tipeProduk} | {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        if ($this->tipeProduk == "Manga") {
            $str .= " - Jumlah Halaman: {$this->jumlahHalaman} Halaman.";
            return $str; 
        } else if ($this->tipeProduk == "Game") {
            $str .= " ~ Waktu Game: {$this->waktuGame} Jam.";
            return $str;
        }

        return $str;
    }
}

//class InfoProduk {
//    public function showinfo(Produk $produk) {
//        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//        return $str;
//    }
//}


$produk1 = new Produk("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000, 100, 0, "Manga");
$produk2 = new Produk("Grand Theft Auto", "Rockstar Games", "Rockstar", 15000, 0, 10, "Game");

echo $produk1->showallinfo();
echo "<br>";
echo $produk2->showallinfo();
echo "<br>";

?>