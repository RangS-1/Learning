<?php

class Produk{
    public $judul = "judul", //property dengan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;   

    // method
    public function buyed() {
        return "Membeli produk $this->judul dengan harga $this->harga";
    }
    //$this digunakan untuk mengakses properti dan method dalam kelas yang sama

    public function getLabe() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Assassination Classroom";
$produk1->penulis = "Yusei Matsui";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 10000;
//var_dump($produk1);
//echo "<br>";
//echo "<br>";
//
//$produk2 = new Produk();
//$produk2->judul;
//var_dump($produk2);
//echo "<br>";
//echo "<br>";
//
//$produk3 = new Produk();
//$produk3->propertylain = "value";
//var_dump($produk3);

echo "Manga : $produk1->judul, $produk1->penulis, $produk1->penerbit, <br> Harga : $produk1->harga";
echo "<br>";
echo $produk1->buyed(); //memanggil method buyed() pada objek $produk1
echo "<br>";
echo $produk1->getLabel(); //memanggil method getLabel() pada objek $produk1
?>