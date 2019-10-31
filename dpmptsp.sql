-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2019 pada 08.41
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpmptsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `permohonan`
--

INSERT INTO `permohonan` (`id`, `nama_kota`, `tahun`, `jumlah`, `status`) VALUES
(1, 'Kota Bandung', '2019-05-01', 33, '1'),
(2, 'Kota Bogor', '2019-05-01', 26, '1'),
(3, 'Kota Depok', '2019-05-01', 23, '1'),
(4, 'Kota Cimahi', '2019-05-01', 17, '1'),
(5, 'Kab. Bandung', '2019-05-01', 14, '1'),
(6, 'Kota Bandung', '2019-04-01', 37, '1'),
(7, 'Kota Bogor', '2019-04-01', 21, '1'),
(8, 'Kota Depok', '2019-04-01', 23, '1'),
(9, 'Kota Cimahi', '2019-04-01', 17, '1'),
(10, 'Kab. Bandung', '2019-04-01', 14, '1'),
(11, 'Kota Bandung', '2019-05-01', 25, '1'),
(12, 'Kota Bogor', '2019-03-01', 41, '1'),
(13, 'Kota Depok', '2019-03-01', 23, '1'),
(14, 'Kota Cimahi', '2019-03-01', 17, '1'),
(15, 'Kab. Bandung', '2019-03-01', 14, '1'),
(16, 'Kota Bandung', '2019-02-01', 42, '1'),
(17, 'Kota Bogor', '2019-02-01', 27, '1'),
(18, 'Kota Depok', '2019-02-01', 23, '1'),
(19, 'Kota Cimahi', '2019-02-01', 17, '1'),
(20, 'Kab. Bandung', '2019-02-01', 14, '1'),
(21, 'Kota Bandung', '2019-01-01', 38, '1'),
(22, 'Kota Bogor', '2019-01-01', 33, '1'),
(23, 'Kota Depok', '2019-01-01', 23, '1'),
(24, 'Kota Cimahi', '2019-01-01', 17, '1'),
(25, 'Kab. Bandung', '2019-01-01', 14, '1'),
(26, 'Kota Bandung', '2019-06-01', 45, '1'),
(27, 'Kota Bogor', '2019-06-01', 48, '1'),
(30, 'Kota Cimahi', '2019-06-01', 23, '1'),
(31, 'Kota Depok', '2019-06-01', 17, '1'),
(32, 'Kab. Bandung', '2019-06-01', 14, '1'),
(33, 'Kota Bandung', '2019-07-01', 25, '1'),
(34, 'Kota Bogor', '2019-07-01', 38, '1'),
(35, 'Kota Cimahi', '2019-07-01', 23, '1'),
(36, 'Kota Depok', '2019-07-01', 17, '1'),
(37, 'Kab. Bandung', '2019-07-01', 14, '1'),
(38, 'Kota Bandung', '2019-08-01', 35, '1'),
(39, 'Kota Bogor', '2019-08-01', 51, '1'),
(40, 'Kota Cimahi', '2019-08-01', 23, '1'),
(41, 'Kota Depok', '2019-08-01', 17, '1'),
(42, 'Kab. Bandung', '2019-08-01', 14, '1'),
(43, 'Kota Bandung', '2019-09-01', 40, '1'),
(44, 'Kota Bogor', '2019-09-01', 48, '1'),
(45, 'Kota Cimahi', '2019-09-01', 23, '1'),
(46, 'Kota Depok', '2019-09-01', 17, '1'),
(47, 'Kab. Bandung', '2019-09-01', 14, '1'),
(48, 'Kota Bandung', '2019-10-01', 50, '1'),
(49, 'Kota Bogor', '2019-10-01', 45, '1'),
(50, 'Kota Cimahi', '2019-10-01', 23, '1'),
(51, 'Kota Depok', '2019-10-01', 17, '1'),
(52, 'Kab. Bandung', '2019-10-01', 14, '1'),
(53, 'Kota Bandung', '2019-11-01', 66, '1'),
(54, 'Kota Bogor', '2019-11-01', 32, '1'),
(55, 'Kota Cimahi', '2019-11-01', 23, '1'),
(56, 'Kota Depok', '2019-11-01', 17, '1'),
(57, 'Kab. Bandung', '2019-11-01', 14, '1'),
(58, 'Kota Bandung', '2019-12-01', 57, '1'),
(59, 'Kota Bogor', '2019-12-01', 28, '1'),
(60, 'Kota Cimahi', '2019-12-01', 28, '1'),
(61, 'Kota Depok', '2019-12-01', 25, '1'),
(62, 'Kab. Bandung', '2019-12-01', 15, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonanbulan`
--

CREATE TABLE `permohonanbulan` (
  `kota` varchar(30) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `may` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `aug` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `oct` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `dec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonanbulan`
--

INSERT INTO `permohonanbulan` (`kota`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
('Kota Bandung', 38, 42, 25, 37, 33, 45, 25, 35, 40, 50, 66, 57),
('Kota Bogor', 33, 27, 41, 21, 26, 48, 38, 51, 48, 45, 32, 28),
('Kota Cimahi', 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 28),
('Kota Depok', 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 25),
('Kab. Bandung', 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
