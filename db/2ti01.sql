-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 09.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2ti01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `costummer`
--

CREATE TABLE `costummer` (
  `id_costumer` varchar(10) NOT NULL,
  `nm_costumer` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `costummer`
--

INSERT INTO `costummer` (`id_costumer`, `nm_costumer`, `alamat`, `email`, `no_telp`) VALUES
('COS-01', 'Ariq azmi', 'jl sintanala raya no 02', 'Ariqq@gmai.com', '0999881'),
('COS-02', 'andika semanan', 'semanan raya no 3', 'andika@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_produk`
--

CREATE TABLE `kat_produk` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(25) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kat_produk`
--

INSERT INTO `kat_produk` (`id_kategori`, `nm_kategori`, `keterangan`) VALUES
(1, 'Sabun cair', 'semua jenis sabun cair'),
(2, 'detergen', 'semua detergen bubuk'),
(3, 'minyak goreng ', 'semua minyak goreng kemasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(8) NOT NULL,
  `nm_pegawai` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `jsn_kelamin` varchar(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nm_pegawai`, `email`, `alamat`, `no_telp`, `jsn_kelamin`, `tgl_lahir`, `tmp_lahir`) VALUES
('PEG-01', 'Pungky', 'pungky.hwa@gmail.com', 'jl disana', '089637587329', 'p', '2023-05-16', 'disitu'),
('PEG-02', 'Harsya', 'harsyah@gmail.com', 'di situ', '089637587888', 'p', '2008-08-09', 'tangerang'),
('PEG-03', 'Arizal Rahman', 'Arizal@gmail.com', 'jl cempaka putih raya no 109', '099988881', 'l', '1998-05-26', 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(8) NOT NULL,
  `nm_produk` varchar(25) DEFAULT NULL,
  `id_supplier` int(3) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(6) DEFAULT NULL,
  `id_satuan` int(3) DEFAULT NULL,
  `id_kategori` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(3) NOT NULL,
  `nm_satuan` varchar(25) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nm_satuan`, `keterangan`) VALUES
(1, 'PCS', 'PICIS untuk satuan picis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_keluar`
--

CREATE TABLE `stok_keluar` (
  `id_stok_keluar` int(10) NOT NULL,
  `no_faktur` varchar(25) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `id_costumer` varchar(10) DEFAULT NULL,
  `jml_barang` int(6) DEFAULT NULL,
  `id_pegawai` varchar(8) DEFAULT NULL,
  `id_produk` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_masuk`
--

CREATE TABLE `stok_masuk` (
  `id_stok_masuk` int(10) NOT NULL,
  `no_faktur` varchar(25) DEFAULT NULL,
  `id_supplier` int(3) DEFAULT NULL,
  `id_produk` varchar(8) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jml_barang` int(6) DEFAULT NULL,
  `id_pegawai` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(3) NOT NULL,
  `nm_supplier` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nm_supplier`, `alamat`, `no_telp`, `email`) VALUES
(1, 'PT Susah rugi', 'jl daan mogot raya nomor sekian\r\n', '9999991', 'ptsusahrugi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(3) NOT NULL,
  `id_pegawai` varchar(8) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_pegawai`, `username`, `password`, `roles`) VALUES
(1, 'PEG-01', 'admin', 'admin', 1),
(2, 'PEG-02', 'harsya', 'harsya', 2),
(3, 'PEG-03', 'PEG-03', 'cobasaja', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `costummer`
--
ALTER TABLE `costummer`
  ADD PRIMARY KEY (`id_costumer`);

--
-- Indeks untuk tabel `kat_produk`
--
ALTER TABLE `kat_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `stok_keluar`
--
ALTER TABLE `stok_keluar`
  ADD PRIMARY KEY (`id_stok_keluar`);

--
-- Indeks untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD PRIMARY KEY (`id_stok_masuk`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kat_produk`
--
ALTER TABLE `kat_produk`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stok_keluar`
--
ALTER TABLE `stok_keluar`
  MODIFY `id_stok_keluar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  MODIFY `id_stok_masuk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
