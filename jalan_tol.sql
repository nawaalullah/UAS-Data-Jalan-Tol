-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 20 Jul 2025 pada 10.49
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalan_tol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tol`
--

CREATE TABLE `tol` (
  `id` int(11) NOT NULL,
  `tol_asal` varchar(100) DEFAULT NULL,
  `gambar_asal` varchar(255) DEFAULT NULL,
  `tol_tujuan` varchar(100) DEFAULT NULL,
  `gambar_tujuan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tol`
--

INSERT INTO `tol` (`id`, `tol_asal`, `gambar_asal`, `tol_tujuan`, `gambar_tujuan`, `harga`) VALUES
(1, 'Rancaekek', '1753001181_eldenring.jpg', 'Padalarang', '1753001193_ini dia.jpg', 20000),
(2, 'Cipularang', '1753000871_dedsec.jpg', 'Cilenyi', '1753000871_eldenring.jpg', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'andi', '$2y$10$K0Wnv6vYXCMwGAcl5WQOu.qrng3l8FTLBh1cUwDHjuL4GeJAIU6hm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tol`
--
ALTER TABLE `tol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tol`
--
ALTER TABLE `tol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
