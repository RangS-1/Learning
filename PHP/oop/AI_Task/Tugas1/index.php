<?php
//Buat class Mahasiswa yang memiliki:
//Property:
//nama
//nim
//Method:
//tampilkanData()

class Mahasiswa{
    public $nama = "Nama",
            $nim = 0;

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampilkanData(){
        $str = "$this->nama, $this->nim";
        return $str;
    }
}

$siswa1 = new Mahasiswa("RangS", 23249212);
$siswa2 = new Mahasiswa("Denz", 23249213);

echo $siswa1->tampilkanData();
echo "<br>";
echo $siswa2->tampilkanData();
?>