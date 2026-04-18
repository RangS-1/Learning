<?php

class Produk{
    public $judul = "judul", //property dengan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;   

    // Constructor adalah method khusus yang akan dijalankan secara otomatis ketika sebuah objek dibuat dari kelas tersebut. 
    // Constructor biasanya digunakan untuk menginisialisasi properti-properti pada objek dengan nilai tertentu saat objek dibuat.
    // Supaya lebih mudah menambah nilai pada properti
    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //public function buyed() {
    //    return "Keterangan pembelian <br> Judul: $this->judul <br> Penulis: $this->penulis <br> Penerbit: $this->penerbit <br> Harga: $this->harga <br>";
    //}

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class InfoProduk {
    public function showinfo(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000);
$produk2 = new Produk("Death Note", "Tsugumi Ohba", "Shonen Jump", 15000);

$info = new InfoProduk();
echo $info->showinfo($produk1);
echo "<br>";
echo $info->showinfo($produk2);
?>