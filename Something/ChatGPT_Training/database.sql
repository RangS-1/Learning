CREATE DATABASE db_toko;

CREATE TABLE produk (
    id_produk INT PRIMARY KEY AUTO_INCREMENT,
    nama_produk VARCHAR(100) NOT NULL,
    harga DECIMAL(10, 2) NOT NULL,
    stok INT NOT NULL
);

INSERT INTO produk ( 
    VALUES (NULL, "Laptop", 1500.00, 10),
    (NULL, "Smartphone", 800.00, 20),
    (NULL, "Headphones", 150.00, 30)
);

UPDATE produk
SET harga = 15000.00, stok = 0
WHERE id_produk = 3;

DELETE FROM produk
WHERE stok = 0;

ALTER TABLE produk
ADD COLUMN kategori VARCHAR(50);

ALTER TABLE produk 
MODIFY COLUMN harga DECIMAL(12, 2);

ALTER TABLE produk
CHANGE COLUMN nama_produk nama VARCHAR(100); /* sertakan tipe datanya */