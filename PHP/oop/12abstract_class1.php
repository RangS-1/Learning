<?php
// class abstract tidak bisa diinstansiasi, hanya bisa dijadikan sebagai parent class untuk class turunannya (child class)

abstract class Buah {
    private $warna;

    //implementasi method abstrak diimplementasikan oleh class turunannya (child class)
    abstract public function makan();

    public function setWarna($warna) {
        $this->warna = $warna;
    }


?>