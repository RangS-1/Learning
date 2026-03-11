CREATE TABLE kategori(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(110),
    deskripsi TEXT
);

CREATE TABLE supplier(
    id_supplier INT AUTO_INCREMENT PRIMARY KEY,
    nama_supplier VARCHAR(150) NOT NULL,
    alamat TEXT,
    no_telp VARCHAR(20),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE produk(
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    id_kategori INT,
    nama_produk VARCHAR(150) NOT NULL,
    merk VARCHAR(100),
    berat VARCHAR(50),
    harga_beli DECIMAL(12,2),
    harga_jual DECIMAL(12,2),
    stok INT DEFAULT 0,
    tanggal_expired DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (id_kategori) REFERENCES kategori(ID)
);

CREATE TABLE pembelian (
    id_pembelian INT AUTO_INCREMENT PRIMARY KEY,
    id_supplier INT,
    tanggal_pembelian DATE,
    total DECIMAL(12,2),
    
    FOREIGN KEY (id_supplier) REFERENCES supplier(id_supplier)
);

CREATE TABLE pembelian_detail (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_pembelian INT,
    id_produk INT,
    qty INT,
    harga_beli DECIMAL(12,2),
    subtotal DECIMAL(12,2),
    
    FOREIGN KEY (id_pembelian) REFERENCES pembelian(id_pembelian),
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
);

CREATE TABLE penjualan (
    id_penjualan INT AUTO_INCREMENT PRIMARY KEY,
    tanggal_penjualan DATETIME,
    total DECIMAL(12,2),
    bayar DECIMAL(12,2),
    kembalian DECIMAL(12,2)
);

CREATE TABLE penjualan_detail (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_penjualan INT,
    id_produk INT,
    qty INT,
    harga_jual DECIMAL(12,2),
    subtotal DECIMAL(12,2),
    
    FOREIGN KEY (id_penjualan) REFERENCES penjualan(id_penjualan),
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
);

CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','kasir'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);