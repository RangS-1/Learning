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
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar{
    public $radius = 0;
    public function __construct($nama, $radius){
        parent::__construct($nama);
        $this->radius = $radius;
    }
    public function hitungLuas(){
        return 3.14 * $this->radius * $this->radius;
    }
}

class Segitiga extends BangunDatar{
    public $alas = 0;
    public $tinggi = 0;
    public function __construct($nama, $alas, $tinggi){
        parent::__construct($nama);
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function hitungLuas(){
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$daftarBangun = array(
    new Persegi("Persegi", 20),
    new Lingkaran("Lingkaran", 7),
    new Segitiga("Segitiga", 10, 15)
);

foreach($daftarBangun as $bangun){
    echo $bangun->nama . " : " . $bangun->hitungLuas() . " cm²<br>";
}
?>