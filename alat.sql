-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 05:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas3teori`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE IF NOT EXISTS `alat` (
  `id_alat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_alat` varchar(50) NOT NULL,
  `stok_alat` int(50) NOT NULL,
  `harga_alat` int(50) NOT NULL,
  PRIMARY KEY (`id_alat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `stok_alat`, `harga_alat`) VALUES
(1, 'Termometer', 7, 70000),
(2, 'Sterilisator', 4, 50000),
(4, 'Tensimeter', 20, 150500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
