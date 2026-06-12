<?php
//Soal 5 — Sistem Manajemen Perpustakaan (Multi Class)
//
//Buat program OOP sederhana dengan class berikut:
//
//Class Buku
//
//Property:
//
//id
//judul
//penulis
//statusDipinjam
//
//Method:
//
//pinjam()
//kembalikan()
//Class Anggota
//
//Property:
//
//id
//nama
//daftarPinjaman
//
//Method:
//
//pinjamBuku(Buku $buku)
//kembalikanBuku(Buku $buku)
//Class Perpustakaan
//
//Property:
//
//daftarBuku
//daftarAnggota
//
//Method:
//
//tambahBuku()
//tambahAnggota()
//tampilkanBuku()
//tampilkanAnggota()
//
//Aturan:
//
//Buku yang sedang dipinjam tidak bisa dipinjam anggota lain.
//Saat buku dipinjam, status berubah menjadi "Dipinjam".
//Saat dikembalikan, status berubah menjadi "Tersedia".
//Tampilkan daftar buku beserta statusnya.


class Buku{
    public  $id = 0,
            $judul = "Judul Buku",
            $penulis = "Nama Penulis",
            $statusDipinjam = true;

    public function __construct($id, $judul, $penulis, $statusDipinjam){
        $this->id = $id;
        $this->judul = $judul; 
        $this->penulis = $penulis; 
        $this->statusDipinjam = false;
    }

    public function Pinjam(){
        $this->$statusDipinjam = true;
    }

    public function Kembalikan(){
        $this->$statusDipinjam = false;
    }

    public function getStatus() {
        return $this->statusDipinjam ? "Dipinjam" : "Tersedia";
    }
}

class Anggota extends Buku{
    public $id = 0,
            $nama = "Nama Anggota",
            $daftarPinjaman = array();

    public function __construct($id, $nama){
        $this->id = $id;
        $this->nama = $nama;
        $this->daftarPinjaman = array();
    }

    public function pinjamBuku($buku){
        if ($buku->statusDipinjam){
            echo "'{$buku->judul}'sedang dipinjam";
        }
        $buku->pinjam();
        $this->daftarPinjaman[] = $buku;
        echo "Sukses meminjam buku {$this->nama}";
        return true;
    }

    public function kembalikanBuku($id, $penulis){
        parent::__construct($id);
        $statusDipinjam = false;
    }
}


?>