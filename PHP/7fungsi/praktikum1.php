<?php
    function lstiga($alas, $tinggi){
        $lsegitiga = 1/2 * $alas * $tinggi;
        return $lsegitiga;
    }
    function lingkaran($jari){
        $llingkaran = pi() * $jari * $jari;
        return $llingkaran;
    }
    function persegi($sisi){
        $coy = $sisi * $sisi;
        return $coy;
    }
    function persegipanjang($panjang, $lebar){
        $ppanjang = $panjang * $lebar;
        return $ppanjang;
    }
    function jajargenjang($alas, $tinggi){
        $jajar = $alas * $tinggi;
        return $jajar;
    }
    function ketupat($dig1, $dig2){
        $lsegitiga = 1/2 * $dig1 * $dig2;
        return $lsegitiga;
    }
    function rangga() {
        echo "Nama : Rangga Wijaya<br/>";
        echo "Rayon : Tarkal 1<br>";
        echo "Rombel : PPLG X<br/><br/>";
    }
    function aidil() {
        echo "Nama : Rayhan Aidil<br/>";
        echo "Rayon : Al-Ikrom 6<br>";
        echo "Rombel : PPLG X<br/><br/>";
    }
    function wijdan() {
        echo "Nama : Muhammad Wijdan<br/>";
        echo "Rayon : Garteng<br>";
        echo "Rombel : PPLG X<br/>";
    }
    echo "Nilai luas segitiga adalah ". lstiga(5, 10)."<br>";
    echo "Nilai luas lingkaran adalah ". lingkaran(10)."<br>";
    echo "Nilai luas persegi adalah ". persegi(20)."<br>";
    echo "Nilai luas persegi panjang adalah ". persegipanjang(20, 15)."<br>";
    echo "Nilai luas jajar genjang adalah ". jajargenjang(20, 15)."<br>";
    echo "Nilai luas belah ketupat adalah ". ketupat(20, 15)."<br><br/>";

    rangga();
    aidil();
    wijdan();
?>