<?php
abstract class Produk{
    protected $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;   

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    public function judul( $judul ) {
        $this->judul = $judul;
    }

    public function penulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function penerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function harga( $harga ) {
        $this->harga = $harga;
    }
}
?>