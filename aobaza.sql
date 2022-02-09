-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 04:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aobaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `koncert`
--

CREATE TABLE `koncert` (
  `id` int(11) NOT NULL,
  `ime` text COLLATE utf8_slovenian_ci NOT NULL,
  `datum` text COLLATE utf8_slovenian_ci NOT NULL,
  `ura` text COLLATE utf8_slovenian_ci NOT NULL,
  `opis` text COLLATE utf8_slovenian_ci NOT NULL,
  `fb` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `koncert`
--

INSERT INTO `koncert` (`id`, `ime`, `datum`, `ura`, `opis`, `fb`) VALUES
(1, 'Volkswagen Rocks Nova Gorica', '2017-03-09', '9.00', 'Volkswagen Rocks turneja se je premaknila v drugo fazo, ko bomo lahko ljubitelji rock glasbe po celi Sloveniji uživali v dobri glasbi mladih rock skupin. ', 'https://www.facebook.com/events/1407080879367120/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koncert`
--
ALTER TABLE `koncert`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koncert`
--
ALTER TABLE `koncert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
