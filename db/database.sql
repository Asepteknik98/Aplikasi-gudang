CREATE TABLE users (
    id_users int (3) NOT NULL AUTO_INCREMENT,
    id_pegawai varchar(8),
    username varchar(25),
    password varchar(100),
    roles int(1),
    PRIMARY KEY (id_users)
);

CREATE TABLE pegawai (
    id_pegawai varchar (8) NOT NULL,
    nm_pegawai varchar(25),
    email varchar(25),
    alamat text,
    no_telp varchar(13),
    jsn_kelamin varchar (1),
    tgl_lahir date,
    tmp_lahir varchar (25),
    PRIMARY KEY (id_pegawai)
);

CREATE TABLE kat_produk (
    id_kategori int (3) NOT NULL AUTO_INCREMENT,
    nm_kategori varchar(25),
    keterangan text,
    PRIMARY KEY (id_kategori)
);

CREATE TABLE satuan (
    id_satuan int (3) NOT NULL AUTO_INCREMENT,
    nm_satuan varchar(25),
    keterangan text,
    PRIMARY KEY (id_satuan)
);

CREATE TABLE produk (
    id_produk varchar (8) NOT NULL,
    nm_produk varchar(25),
    id_supplier int(3),
    deskripsi text,
    stok int(6),
    id_satuan int(3),
    id_kategori int(3),
    PRIMARY KEY (id_produk)
);

CREATE TABLE supplier (
    id_supplier int (3) NOT NULL AUTO_INCREMENT,
    nm_supplier varchar(25),
    alamat text,
    no_telp varchar(13),
    email varchar(25),
    PRIMARY KEY (id_supplier)
);

CREATE TABLE stok_keluar (
    id_stok_keluar int (10) NOT NULL AUTO_INCREMENT,
    no_faktur varchar(25),
    tgl_keluar date,
    id_costumer varchar(10),
    jml_barang int(6),
    id_pegawai varchar (8),
    id_produk varchar (8),
    PRIMARY KEY (id_stok_keluar)
);

CREATE TABLE stok_masuk (
    id_stok_masuk int (10) NOT NULL AUTO_INCREMENT,
    no_faktur varchar(25),
    id_supplier int(3),
    id_produk varchar (8),
    tgl_masuk date,
    jml_barang int(6),
    id_pegawai varchar(8),
    PRIMARY KEY (id_stok_masuk)
);

CREATE TABLE costummer (
    id_costumer varchar (10) NOT NULL,
    nm_costumer varchar(25),
    alamat text,
    email varchar (25),
    no_telp varchar(13),
    PRIMARY KEY (id_costumer)
);