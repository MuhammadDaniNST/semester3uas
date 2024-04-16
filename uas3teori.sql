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
CREATE DATABASE IF NOT EXISTS `uas3teori` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uas3teori`;

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

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `stok_obat` int(50) NOT NULL,
  `harga_obat` int(50) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `harga_obat`) VALUES
(2, 'Procold', 25, 8000),
(3, 'Inza', 10, 12000),
(4, 'Antangin', 15, 3000),
(6, 'Woods', 20, 11500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nama` (`nama`),
  UNIQUE KEY `password` (`password`),
  KEY `nama_2` (`nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(1, 'dani123', 'dani123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
