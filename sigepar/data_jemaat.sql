-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigepar`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jemaat`
--

CREATE TABLE `data_jemaat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jemaat`
--

INSERT INTO `data_jemaat` (`id`, `nama_lengkap`, `jenis_kelamin`, `keluarga`, `alamat`, `no_hp`, `tanggal_lahir`, `tanggal_bergabung`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Sayoni Simanjuntak', 'Laki-laki', 'Sayoni Simanjuntak', 'Parsoburan Komplek PLN', '123456789', '2022-05-10', '2022-05-02', 'Aktif', 'No Avatar', '2022-05-22 18:21:15', NULL),
(3, 'Alex Pernandes', 'Laki-laki', 'Alex Sirait', 'Balige', '081234567890', '2022-05-25', '2022-05-18', 'Aktif', 'aleximage.png', '2022-05-23 06:18:55', '2022-05-23 13:18:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jemaat`
--
ALTER TABLE `data_jemaat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jemaat`
--
ALTER TABLE `data_jemaat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
