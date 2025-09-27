-- Membuat database bernama warung_db
CREATE DATABASE IF NOT EXISTS warung_db;

-- Menggunakan database warung_db
USE warung_db;

-- Tabel untuk data barang
CREATE TABLE IF NOT EXISTS barang (
    id_barang INT PRIMARY KEY AUTO_INCREMENT,
    nama_barang TEXT NOT NULL,
    harga_jual INT NOT NULL,
    kategori TEXT NOT NULL,
    unit TEXT NOT NULL,
    created_at DATE NOT NULL,
    updated_at DATE
);

-- Tabel untuk data pengguna (user)
CREATE TABLE IF NOT EXISTS user (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nama_user TEXT NOT NULL,
    username TEXT NOT NULL,
    password TEXT NOT NULL,
    created_at DATE NOT NULL,
    updated_at DATE
);

-- Tabel untuk struk transaksi
CREATE TABLE IF NOT EXISTS struk (
    id_struk INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    jumlah INT NOT NULL,
    kategoriTransaksi INT NOT NULL,
    created_at DATE NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);

-- Tabel untuk transaksi penjualan
CREATE TABLE IF NOT EXISTS transaksi_jual (
    id_jual INT PRIMARY KEY AUTO_INCREMENT,
    id_struk INT NOT NULL,
    id_barang INT NOT NULL,
    kuantitas INT NOT NULL,
    created_at DATE NOT NULL,
    FOREIGN KEY (id_struk) REFERENCES struk(id_struk),
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);

-- Tabel untuk transaksi pembelian
CREATE TABLE IF NOT EXISTS transaksi_beli (
    id_beli INT PRIMARY KEY AUTO_INCREMENT,
    id_struk INT NOT NULL,
    id_barang INT NOT NULL,
    kuantitas INT NOT NULL,
    created_at DATE NOT NULL,
    FOREIGN KEY (id_struk) REFERENCES struk(id_struk),
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);