<?php
//Buat class Produk yang memiliki:
//
//Property:
//namaProduk
//harga
//Constructor untuk mengisi data awal.
//Method diskon($persen) yang menghitung harga setelah diskon.

class Produk{
    public $namaProduk = "Nama Produk",
            $harga = 0;

    public function __construct($namaProduk, $harga){
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function diskon($persen){
        $jumlahDiskon = ($this->harga * $persen) / 100;
        $hasilDiskon = ($this->harga - $jumlahDiskon);
        return "$this->namaProduk, $hasilDiskon";
    }
}

$produk1 = new Produk("Thinkpad X13", 5000000);
$produk2 = new Produk("Acer Aspire 3", 6500000);
$produk3 = new Produk("Asus Notebook", 2000000);

echo $produk1->diskon(10);
echo "<br>";
echo $produk2->diskon(15);
echo "<br>";
echo $produk3->diskon(30);

?>