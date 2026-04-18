<?php
class cetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function showinfo() {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoproduk()} <br>";
        }

        return $str;
    }
}
?>