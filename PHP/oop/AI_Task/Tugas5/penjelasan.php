<?php
/**
 * SISTEM MANAJEMEN PERPUSTAKAAN - IMPLEMENTASI LENGKAP DENGAN KOMENTAR
 * 
 * Program ini mendemonstrasikan konsep OOP: Class, Property, Method, Encapsulation,
 * dan interaksi antar class.
 */

// ============================================================================
// CLASS BUKU - Merepresentasikan sebuah buku di perpustakaan
// ============================================================================
class Buku {
    // Property (Atribut)
    public $id;              // ID unik buku
    public $judul;           // Judul buku
    public $penulis;         // Nama penulis
    public $statusDipinjam;  // Status: true = Dipinjam, false = Tersedia

    /**
     * Constructor - Menginisialisasi object Buku
     * @param int $id - ID buku
     * @param string $judul - Judul buku
     * @param string $penulis - Nama penulis
     */
    public function __construct($id, $judul, $penulis) {
        $this->id = $id;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->statusDipinjam = false; // Status awal: Tersedia
    }

    /**
     * Method Pinjam() - Mengubah status buku menjadi "Dipinjam"
     * Digunakan saat anggota meminjam buku
     */
    public function pinjam() {
        $this->statusDipinjam = true;
    }

    /**
     * Method Kembalikan() - Mengubah status buku menjadi "Tersedia"
     * Digunakan saat anggota mengembalikan buku
     */
    public function kembalikan() {
        $this->statusDipinjam = false;
    }

    /**
     * Method getStatus() - Mengembalikan status buku dalam format string
     * @return string - "Tersedia" atau "Dipinjam"
     */
    public function getStatus() {
        return $this->statusDipinjam ? "Dipinjam" : "Tersedia";
    }
}

// ============================================================================
// CLASS ANGGOTA - Merepresentasikan anggota perpustakaan
// ============================================================================
class Anggota {
    // Property (Atribut)
    public $id;              // ID unik anggota
    public $nama;            // Nama anggota
    public $daftarPinjaman;  // Array untuk menyimpan object Buku yang dipinjam

    /**
     * Constructor - Menginisialisasi object Anggota
     * @param int $id - ID anggota
     * @param string $nama - Nama anggota
     */
    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
        $this->daftarPinjaman = array(); // Array kosong pada awal
    }

    /**
     * Method pinjamBuku() - Meminjam buku
     * 
     * Aturan:
     * - Buku harus tersedia (statusDipinjam = false)
     * - Jika tersedia, ubah status menjadi "Dipinjam"
     * - Tambahkan buku ke daftarPinjaman anggota
     * - Tampilkan pesan sukses atau error
     * 
     * @param object $buku - Object Buku yang akan dipinjam
     */
    public function pinjamBuku($buku) {
        // Cek apakah buku sudah dipinjam
        if ($buku->statusDipinjam) {
            echo "❌ Gagal: Buku '{$buku->judul}' sedang dipinjam anggota lain!<br>";
            return false;
        }

        // Buku tersedia, lakukan peminjaman
        $buku->pinjam(); // Ubah status buku menjadi Dipinjam
        $this->daftarPinjaman[] = $buku; // Tambah ke daftar pinjaman anggota
        echo "✅ Sukses: {$this->nama} meminjam '{$buku->judul}'<br>";
        return true;
    }

    /**
     * Method kembalikanBuku() - Mengembalikan buku
     * 
     * Proses:
     * - Cari buku di daftarPinjaman anggota
     * - Ubah status buku menjadi "Tersedia"
     * - Hapus dari daftarPinjaman
     * - Tampilkan pesan sukses atau error
     * 
     * @param object $buku - Object Buku yang akan dikembalikan
     */
    public function kembalikanBuku($buku) {
        // Cari buku di dalam daftarPinjaman
        foreach ($this->daftarPinjaman as $key => $bukuPinjaman) {
            if ($bukuPinjaman->id == $buku->id) {
                // Buku ditemukan
                $buku->kembalikan(); // Ubah status menjadi Tersedia
                unset($this->daftarPinjaman[$key]); // Hapus dari daftar pinjaman
                echo "✅ Sukses: {$this->nama} mengembalikan '{$buku->judul}'<br>";
                return true;
            }
        }

        // Buku tidak ditemukan di daftar pinjaman
        echo "❌ Gagal: {$this->nama} tidak meminjam buku '{$buku->judul}'<br>";
        return false;
    }

    /**
     * Method tampilkanPinjaman() - Menampilkan daftar buku yang sedang dipinjam
     */
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

// ============================================================================
// CLASS PERPUSTAKAAN - Mengelola semua buku dan anggota
// ============================================================================
class Perpustakaan {
    // Property (Atribut)
    public $daftarBuku;      // Array untuk menyimpan semua object Buku
    public $daftarAnggota;   // Array untuk menyimpan semua object Anggota
    public $nama;            // Nama perpustakaan

    /**
     * Constructor - Menginisialisasi Perpustakaan
     * @param string $nama - Nama perpustakaan
     */
    public function __construct($nama) {
        $this->nama = $nama;
        $this->daftarBuku = array();      // Array kosong
        $this->daftarAnggota = array();   // Array kosong
    }

    /**
     * Method tambahBuku() - Menambah buku ke perpustakaan
     * 
     * @param object $buku - Object Buku yang akan ditambahkan
     */
    public function tambahBuku($buku) {
        $this->daftarBuku[] = $buku;
        echo "✅ Buku '{$buku->judul}' ditambahkan ke {$this->nama}<br>";
    }

    /**
     * Method tambahAnggota() - Menambah anggota ke perpustakaan
     * 
     * @param object $anggota - Object Anggota yang akan ditambahkan
     */
    public function tambahAnggota($anggota) {
        $this->daftarAnggota[] = $anggota;
        echo "✅ Anggota '{$anggota->nama}' terdaftar di {$this->nama}<br>";
    }

    /**
     * Method tampilkanBuku() - Menampilkan semua buku beserta statusnya
     */
    public function tampilkanBuku() {
        echo "<br><strong>📖 DAFTAR BUKU DI {$this->nama}:</strong><br>";
        echo str_repeat("=", 80) . "<br>";
        
        foreach ($this->daftarBuku as $buku) {
            $status = $buku->getStatus();
            $warna = $buku->statusDipinjam ? "🔴 Dipinjam" : "🟢 Tersedia";
            echo "ID: {$buku->id} | Judul: {$buku->judul} | Penulis: {$buku->penulis} | Status: {$warna}<br>";
        }
        
        echo str_repeat("=", 80) . "<br>";
    }

    /**
     * Method tampilkanAnggota() - Menampilkan semua anggota
     */
    public function tampilkanAnggota() {
        echo "<br><strong>👥 DAFTAR ANGGOTA DI {$this->nama}:</strong><br>";
        echo str_repeat("=", 80) . "<br>";
        
        foreach ($this->daftarAnggota as $anggota) {
            echo "ID: {$anggota->id} | Nama: {$anggota->nama}<br>";
        }
        
        echo str_repeat("=", 80) . "<br>";
    }
}

// ============================================================================
// IMPLEMENTASI & TESTING
// ============================================================================

echo "<h2>🏛️ SISTEM MANAJEMEN PERPUSTAKAAN</h2>";

// 1. Buat object Perpustakaan
$perpus = new Perpustakaan("Perpustakaan Kota");

// 2. Buat object Buku
$buku1 = new Buku(1, "PHP untuk Pemula", "Budi Santoso");
$buku2 = new Buku(2, "OOP dalam PHP", "Ahmad Wijaya");
$buku3 = new Buku(3, "Database MySQL", "Siti Nurhaliza");

// 3. Tambah buku ke perpustakaan
echo "<br><strong>📌 MENAMBAH BUKU:</strong><br>";
$perpus->tambahBuku($buku1);
$perpus->tambahBuku($buku2);
$perpus->tambahBuku($buku3);

// 4. Buat object Anggota
$anggota1 = new Anggota(101, "Andi");
$anggota2 = new Anggota(102, "Budi");

// 5. Tambah anggota ke perpustakaan
echo "<br><strong>📌 MENAMBAH ANGGOTA:</strong><br>";
$perpus->tambahAnggota($anggota1);
$perpus->tambahAnggota($anggota2);

// 6. Tampilkan daftar buku awal
$perpus->tampilkanBuku();

// 7. Anggota meminjam buku
echo "<br><strong>📌 PROSES PEMINJAMAN:</strong><br>";
$anggota1->pinjamBuku($buku1);  // Andi meminjam "PHP untuk Pemula"
$anggota2->pinjamBuku($buku2);  // Budi meminjam "OOP dalam PHP"
$anggota1->pinjamBuku($buku2);  // Andi mencoba meminjam "OOP dalam PHP" (GAGAL - sudah dipinjam Budi)

// 8. Tampilkan status buku setelah peminjaman
$perpus->tampilkanBuku();

// 9. Tampilkan pinjaman setiap anggota
echo "<br><strong>📌 DAFTAR PINJAMAN ANGGOTA:</strong><br>";
$anggota1->tampilkanPinjaman();
echo "<br>";
$anggota2->tampilkanPinjaman();

// 10. Anggota mengembalikan buku
echo "<br><strong>📌 PROSES PENGEMBALIAN:</strong><br>";
$anggota1->kembalikanBuku($buku1);  // Andi mengembalikan "PHP untuk Pemula"

// 11. Tampilkan status buku setelah pengembalian
$perpus->tampilkanBuku();

// 12. Andi sekarang bisa meminjam buku yang kembalikan
echo "<br><strong>📌 PEMINJAMAN KEDUA:</strong><br>";
$anggota1->pinjamBuku($buku2);  // Andi meminjam "OOP dalam PHP" (GAGAL - masih dipinjam Budi)

?>
