<?php
//Buat class induk:
//Kendaraan
//Property:
//merk
//tahun
//Method:
//info()
//Kemudian buat 2 class turunan:
//Mobil
//Motor

class Kendaraan{
    public $merk = "",
           $tahun = 0;

    public function __construct($merk, $tahun){
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function info(){
        return "$this->merk, $this->tahun";
    }
}

class Mobil extends Kendaraan{
    public $jumlahPintu = 0;

    public function __construct($merk, $tahun, $jumlahPintu){
        parent::__construct($merk, $tahun);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function info(){
        $str = "Mobil : {$this->merk} | Tahun: {$this->tahun} | Memiliki Jumlah {$this->jumlahPintu} Pintu";
        return $str;
    }
}

class Motor extends Kendaraan{
    public $jenisMotor = "";

    public function __construct($merk, $tahun, $jenisMotor){
        parent::__construct($merk, $tahun);
        $this->jenisMotor = $jenisMotor;
    }

    public function info(){
        $str = "Motor : {$this->merk} | Tahun: {$this->tahun} | Jenis Motor: {$this->jenisMotor}";
        return $str;
    }
}

class Sepeda extends Kendaraan{
    public $jenisSepeda = "";

    public function __construct($merk, $tahun, $jenisSepeda){
        parent::__construct($merk, $tahun);
        $this->jenisSepeda = $jenisSepeda;
    }

    public function info(){
        $str = "Sepeda : {$this->merk} | Tahun: {$this->tahun} | Jenis Sepeda: {$this->jenisSepeda}";
        return $str;
    }
}

$kendaraan1 = new Mobil("Toyota", 2009, 4);
$kendaraan2 = new Motor("Honda", 2022, "Matic");
$kendaraan3 = new Sepeda("Polygon", 2021, "Sepeda Gunung");

echo $kendaraan1->info();
echo "<br>";
echo $kendaraan2->info();
echo "<br>";
echo $kendaraan3->info();

?>