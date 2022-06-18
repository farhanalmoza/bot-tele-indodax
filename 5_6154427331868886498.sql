-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2022 at 10:33 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1555160_bitcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `commands`
--

CREATE TABLE `commands` (
  `id` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commands`
--

INSERT INTO `commands` (`id`, `keyword`, `photo`, `caption`) VALUES
(1, '/crash1', 'img/crash1.png', 'Diagram jumlah crash 1 setiap harinya'),
(2, '/crash1jenis', 'img/crash1jenis.png', 'Diagram jumlah crash 1 beserta jenisnya setiap harinya'),
(3, '/crash2', 'img/crash2.png', 'Diagram jumlah crash 2 setiap harinya'),
(4, '/crash2jenis', 'img/crash2jenis.png', 'Diagram jumlah crash 2 beserta jenisnya setiap harinya'),
(5, '/wajar1', 'img/wajar1.png', 'Diagram jumlah wajar 1 setiap harinya'),
(6, '/wajar1jenis', 'img/wajar1jenis.png', 'Diagram jumlah wajar 1 beserta jenisnya setiap harinya'),
(7, '/wajar2', 'img/wajar2.png', 'Diagram jumlah wajar 2 setiap harinya'),
(8, 'wajar2jenis', 'img/wajar2jenis.png', 'Diagram jumlah wajar 2 beserta jenisnya setiap harinya'),
(9, '/recover1', 'img/recover1.png', 'Diagram jumlah recover 1 setiap harinya'),
(10, '/recover1jenis', 'img/crash2jenis.png', 'Diagram jumlah crash 2 beserta jenisnya setiap harinya'),
(11, '/recover2', 'img/recover2.png', 'Diagram jumlah recover 2 setiap harinya'),
(12, 'recover2jenis', 'img/recover2jenis.png', 'Diagram jumlah recover 2 beserta jenisnya setiap harinya'),
(13, '/moon2', 'img/moon2.png', 'Diagram jumlah moon 2 setiap harinya'),
(14, '/moon2jenis', 'img/moon2jenis.png', 'Diagram jumlah moon 2 beserta jenisnya setiap harinya'),
(15, '/supermoon1', 'img/supermoon1.png', 'Diagram jumlah supermoon 1 setiap harinya'),
(16, 'supermoon1jenis', 'img/supermoon1jenis.png', 'Diagram jumlah supermoon 1 beserta jenisnya setiap harinya'),
(17, '/supermoon2', 'img/supermoon2.png', 'Diagram jumlah supermoon 2 setiap harinya'),
(18, '/supermoon2jenis', 'img/supermoon2jenis.png', 'Diagram jumlah supermoon 2 beserta jenisnya setiap harinya'),
(19, '/supercrash1', 'img/supercrash1.png', 'Diagram jumlah supercrash 1 setiap harinya'),
(20, '/supercrash1jenis', 'img/supercrash1jenis.png', 'Diagram jumlah supercrash 1 beserta jenisnya setiap harinya'),
(21, '/supercrash2', 'img/supercrash2.png', 'Diagram jumlah supercrash 2 setiap harinya'),
(22, '/supercrash2jenis', 'img/supercrash2jenis.png', 'Diagram jumlah supercrash 2 beserta jenisnya setiap harinya'),
(23, '/megacrash1', 'img/megacrash1.png', 'Diagram jumlah megacrash 1 setiap harinya'),
(24, '/megacrash1jenis', 'img/megacrash1jenis.png', 'Diagram jumlah megacrash 1 beserta jenisnya setiap harinya'),
(25, '/megacrash2', 'img/megacrash2.png', 'Diagram jumlah megacrash 2 setiap harinya'),
(26, '/megacrash2jenis', 'img/megacrash2jenis.png', 'Diagram jumlah megacrash 2 beserta jenisnya setiap harinya'),
(27, '/ultracrash1', 'img/ultracrash1.png', 'Diagram jumlah ultra crash 1 setiap harinya'),
(28, '/ultracrash1jenis', 'img/ultracrash1jenis.png', 'Diagram jumlah ultracrash 1 beserta jenisnya setiap harinya'),
(29, '/ultracrash2', 'img/ultracrash2.png', 'Diagram jumlah ultracrash 2 setiap harinya'),
(30, '/ultracrash2jenis', 'img/ultracrash2jenis.png', 'Diagram jumlah ultracrash 2 beserta jenisnya setiap harinya'),
(31, '/goldencrash1', 'img/goldencrash1.png', 'Diagram jumlah goldencrash 1 setiap harinya'),
(32, '/goldencrash1jenis', 'img/goldencrash1jenis.png', 'Diagram jumlah goldencrash 1 beserta jenisnya setiap harinya'),
(33, '/goldencrash2', 'img/goldencrash2.png', 'Diagram jumlah goldencrash 2 setiap harinya'),
(34, '/goldencrash2jenis', 'img/goldencrash2jenis.png', 'Diagram jumlah goldencrash 2 beserta jenisnya setiap harinya'),
(35, '/diamondcrash', 'img/diamondcrash.png', 'Diagram jumlah diamondcrash setiap harinya'),
(36, '/diamondcrashjenis', 'img/diamondcrashjenis.png', 'Diagram jumlah diamondcrash beserta jenisnya setiap harinya'),
(37, '/megamoon1', 'img/megamoon1.png', 'Diagram jumlah megamoon 1 setiap harinya'),
(38, '/megamoon1jenis', 'img/megamoon1jenis.png', 'Diagram jumlah megamoon 1 beserta jenisnya setiap harinya'),
(39, '/megamoon2', 'img/megamoon2.png', 'Diagram jumlah megamoon 2 setiap harinya'),
(40, '/megamoon2jenis', 'img/megamoon2jenis.png', 'Diagram jumlah megamoon 2 beserta jenisnya setiap harinya'),
(41, '/ultramoon1', 'img/ultramoon1.png', 'Diagram jumlah ultramoon 1 setiap harinya'),
(42, '/ultramoon1jenis', 'img/ultramoon1jenis.png', 'Diagram jumlah ultramoon 1 beserta jenisnya setiap harinya'),
(43, '/ultramoon2', 'img/ul;tramoon2.png', 'Diagram jumlah ultramoon 2 setiap harinya'),
(44, '/ultramoon2jenis', 'img/ultramoon2jenis.png', 'Diagram jumlah ultramoon 2 beserta jenisnya setiap harinya'),
(45, '/goldenmoon1', 'img/goldenmoon1.png', 'Diagram jumlah goldenmoon 1 setiap harinya'),
(46, '/goldenmoon1jenis', 'img/goldenmoon1jenis.png', 'Diagram jumlah goldenmoon 1 beserta jenisnya setiap harinya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
