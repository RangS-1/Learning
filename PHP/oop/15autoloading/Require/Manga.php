<?php
class Manga extends Produk implements InfoProduk {
    public $jumlahHalaman = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $jumlahHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jumlahHalaman = $jumlahHalaman; 
    }

    public function getInfoproduk() {
        $str = "Manga | " . $this->getLabel() . " - Jumlah Halaman: {$this->jumlahHalaman} Halaman.";
        
        return $str; 
    }
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
?>