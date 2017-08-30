-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 07:34 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `servis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataservis`
--

CREATE TABLE IF NOT EXISTS `dataservis` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nmbarang` varchar(50) NOT NULL,
  `nmpemilik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlpn` varchar(50) NOT NULL,
  `kerusakan` varchar(50) NOT NULL,
  `kelengkapan` varchar(50) NOT NULL,
  `tglditerima` date NOT NULL,
  `penerimabarang` varchar(50) NOT NULL,
  `teknisi` varchar(50) NOT NULL,
  `kondisibrg` varchar(255) NOT NULL,
  `tglambil` date NOT NULL,
  `penyerahanbarang` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `dataservis`
--

INSERT INTO `dataservis` (`no`, `nmbarang`, `nmpemilik`, `alamat`, `tlpn`, `kerusakan`, `kelengkapan`, `tglditerima`, `penerimabarang`, `teknisi`, `kondisibrg`, `tglambil`, `penyerahanbarang`, `biaya`) VALUES
(20, 'Laptop Lenovo', 'Ani', 'Kuman', '087909989999', 'Instal ulang Win.7', 'Btre,Tas', '2016-12-01', 'Doni', 'Doni', 'Oke', '2016-12-01', 'Doni', '85000'),
(21, 'Hp Evercos', 'Yuda', 'Kepoh', '08578909878', 'Flash', 'Btre,sc,mmc', '2016-12-01', 'Doni', 'Doni', 'OKE', '2016-12-01', 'Doni', '85000'),
(22, 'laptop acer', 'raka', 'bojonegoro', '085789098767', 'instal ulang win.10', 'btre,tas,cas', '2016-12-03', 'doni', '', '', '0000-00-00', '', ''),
(23, 'Laptop Lenovo', 'budi', 'lamongan', '08788888888', 'instal ulang win.10', 'btre', '2016-12-05', 'Doni', '', '', '0000-00-00', '', ''),
(24, 'Hp Evercos', 'Samprul', 'Kepohbaru', '085780956487', 'lcd', 'btre', '2016-12-08', 'busi', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'doni', 'doni', '2da9cd653f63c010b6d6c5a5ad73fe32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
