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

class Anggota{
    public $id = 0,
            $nama = "Nama Anggota",
            $daftarPinjaman = array();

    public function __construct($id, $nama){
        $this->id = $id;
        $this->nama = $nama;
        $this->daftarPinjaman = array();
    }

    public function kembalikanBuku($buku) {
        // Cari buku di dalam daftarPinjaman
        foreach ($this->daftarPinjaman as $key => $bukuPinjaman) {
            if ($bukuPinjaman->id == $buku->id) {
                // Buku ditemukan
                $buku->kembalikan(); // Ubah status menjadi Tersedia
                unset($this->daftarPinjaman[$key]); // Hapus dari daftar pinjaman
                echo "Sukses: {$this->nama} mengembalikan '{$buku->judul}'<br>";
                return true;
            }
        }

        // Buku tidak ditemukan di daftar pinjaman
        echo "Gagal: {$this->nama} tidak meminjam buku '{$buku->judul}'<br>";
        return false;
    }

    public function tampilkanPinjaman() {
        echo "<strong>📚 Buku yang dipinjam oleh {$this->nama}:</strong><br>";
        
        if (empty($this->daftarPinjaman)) {
            echo "  Tidak ada buku yang dipinjam<br>";
        } else {
            foreach ($this->daftarPinjaman as $buku) {
                echo "  - {$buku->judul} oleh {$buku->penulis}<br>";
            }
        }
    }
}


?>