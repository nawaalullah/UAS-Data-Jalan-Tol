-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2025 at 06:02 AM
-- Server version: 8.0.40
-- PHP Version: 8.1.10

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
-- Table structure for table `tol`
--

CREATE TABLE `tol` (
  `id` int NOT NULL,
  `tol_asal` varchar(100) DEFAULT NULL,
  `gambar_asal` varchar(255) DEFAULT NULL,
  `tol_tujuan` varchar(100) DEFAULT NULL,
  `gambar_tujuan` varchar(255) DEFAULT NULL,
  `harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tol`
--

INSERT INTO `tol` (`id`, `tol_asal`, `gambar_asal`, `tol_tujuan`, `gambar_tujuan`, `harga`) VALUES
(5, 'cileunyi', '1752832624_Screenshot 2025-07-11 225601.png', 'cinunuk', '1752832624_Screenshot 2025-07-16 121643.png', 1000000000),
(8, 'cibiru', '1752835049_Screenshot 2025-07-17 213636.png', 'pasteur', '1752835049_Screenshot 2025-07-14 172858.png', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sandi', '$2y$10$wEtynfG2m4mc2lr2ghqj2eUHAu53H2I6tRLEvYRCPzjGjK1Y9WZaS'),
(9, 'dika', '$2y$10$XhoWFuIwm98GaHW2u6xdCukJ8MYk0IBgYNmoQbrsyJfIvAqKe2.1u'),
(10, 'nawa', '$2y$10$cjOqeL8MgZ0cC6Ea9z91necPIyRBQAGtIrxNIZSSKHflL8py7f1Iy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tol`
--
ALTER TABLE `tol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tol`
--
ALTER TABLE `tol`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
