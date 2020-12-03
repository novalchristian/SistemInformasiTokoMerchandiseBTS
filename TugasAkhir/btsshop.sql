-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 00.50
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btsshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `harga` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `id_transaksi`, `nama_brg`, `harga`) VALUES
(1, 0, 'Diary Book', 20000),
(2, 0, 'tumbler', 30000),
(3, 0, 'Holding Book', 15000),
(4, 0, 'Album', 10000);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data_barang`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_barang` (
`nama_karyawan` varchar(100)
,`nip` int(40)
,`nama_brg` varchar(100)
,`harga` int(40)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `nip` int(40) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `nip`, `bagian`, `password`) VALUES
(1, 'Yono', 1221011, 'Checking', 0),
(2, 'admin', 1221012, 'Checker', 21232);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `username`, `email`, `alamat`) VALUES
(17, 'udin', 'nopal@gmail.com', 'jakarta utara'),
(18, '', '', ''),
(19, 'randi ', 'hiya@gmail.com', 'jakarta utara'),
(20, '', '', ''),
(21, 'yani', 'yani@gmail.com', 'jakarta barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(20) NOT NULL,
  `id_karyawan` int(20) NOT NULL,
  `id_brg` int(20) NOT NULL,
  `tlg_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur untuk view `data_barang`
--
DROP TABLE IF EXISTS `data_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_barang`  AS  select `karyawan`.`nama_karyawan` AS `nama_karyawan`,`karyawan`.`nip` AS `nip`,`barang`.`nama_brg` AS `nama_brg`,`barang`.`harga` AS `harga` from ((`barang` join `transaksi`) join `karyawan`) where (`barang`.`harga` = '20000') ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
