-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 17.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode` int(50) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `harga` int(20) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `url` varchar(800) NOT NULL,
  `stok` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `url`, `stok`) VALUES
(1, 'chocolatos', 10000, 'Pcs', 'Snack', 'https://garudafood.com/chocolatos', 10),
(2, 'nabati', 2500, 'Pcs', 'Snack', '', 7),
(3, 'pie', 25000, 'Box', 'Makanan', '', 2),
(4, 'milo cube', 16000, 'Pcs', 'Snack', '', 5),
(5, 'susu uht', 4500, 'Pcs', 'Minuman', '', 40),
(6, 'brownie', 2000, 'Pcs', 'Snack', '', 15),
(7, 'kacang', 60000, 'Kg', 'Makanan', '', 3),
(8, 'momogi', 500, 'Pcs', 'Snack', '', 23),
(9, 'pocari', 6500, 'Pcs', 'Minuman', '', 6),
(10, 'energen', 1500, 'Pcs', 'Minuman', '', 2),
(11, 'okky', 36000, 'Box', 'Minuman', '', 1),
(12, 'nextar', 2000, 'Pcs', 'Snack', '', 4),
(13, 'fullo', 500, 'Pcs', 'Snack', '', 50);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kode` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
