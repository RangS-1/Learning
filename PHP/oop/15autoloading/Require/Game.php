<?php
class Game extends Produk implements InfoProduk {
    public $waktuGame = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, 
                                $waktuGame) {
        parent::__construct($judul, $penulis, $penerbit, $harga); 
        
        $this->waktuGame = $waktuGame;
    }
    public function getInfoproduk() {
        $str = "Game | " . $this->getLabel() . " ~ Waktu Game: {$this->waktuGame} Jam.";
        return $str; 
    }
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
?>