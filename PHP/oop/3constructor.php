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
    public function buyed() {
        return "Keterangan pembelian <br> Judul: $this->judul <br> Penulis: $this->penulis <br> Penerbit: $this->penerbit <br> Harga: $this->harga <br>";
    }
}

$produk1 = new Produk("Assassination Classroom", "Yusei Matsui", "Shonen Jump", 10000);
$produk2 = new Produk("Death Note", "Tsugumi Ohba", "Shonen Jump", 15000);

echo $produk1->buyed(); //kembali memanggil method buyed() pada objek $produk1
echo "<br>";
echo $produk2->buyed(); //memanggil method buyed() pada objek $produk2

echo var_dump($produk1);
?>