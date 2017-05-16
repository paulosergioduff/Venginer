-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2014 at 03:25 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tipocontrato`
--

CREATE TABLE IF NOT EXISTS `tipocontrato` (
  `CDEMPRESA` smallint(6) NOT NULL,
  `CDTIPOCONTRATO` smallint(6) NOT NULL,
  `NMTIPOCONTRATO` varchar(30) DEFAULT NULL,
  `CTBLOQTIPOCONTRATO` datetime DEFAULT NULL,
  PRIMARY KEY (`CDEMPRESA`,`CDTIPOCONTRATO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipocontrato`
--

INSERT INTO `tipocontrato` (`CDEMPRESA`, `CDTIPOCONTRATO`, `NMTIPOCONTRATO`, `CTBLOQTIPOCONTRATO`) VALUES
(1, 7, 'GARANTIA BALCÃO', '2011-08-29 12:37:21'),
(1, 8, 'garantia on site (descont.)', '2011-08-29 12:32:37'),
(1, 9, 'hardware (descontinuado)', '2011-08-29 12:29:37'),
(1, 10, 'garantia on site 2 (descont.)', '2011-08-29 12:32:58'),
(1, 11, 'SOFTWARE', '2011-08-29 12:37:11'),
(1, 12, 'hard s/peças (descontinuado)', '2011-08-29 12:29:14'),
(1, 13, 'soft s/internet (descont.)', '2011-08-29 12:28:52'),
(1, 14, 'HARDWARE OPÇAO 1', '2011-08-29 12:36:58'),
(1, 15, 'HARDWARE OPÇAÕ 2', '2011-08-29 12:37:15'),
(1, 17, 'HARDWARE OPÇÃO 1 EXT ARQUIVO', '2012-03-08 16:08:17'),
(1, 18, 'PSA Hardware', '2012-07-05 17:20:29'),
(1, 19, 'PSA Software', '2012-07-05 17:20:58'),
(1, 20, 'PSA Soft + Hard', '2012-07-05 17:21:23'),
(1, 21, 'PSA Hard c/ extraçao', '2012-08-30 13:50:25'),
(1, 22, 'PSA Hard + Soft C/ extração', '2012-09-06 08:14:40'),
(1, 23, 'PENDENTE', '2013-11-14 08:50:27'),
(1, 24, 'Supergarantia', '2013-11-28 11:18:57'),
(1, 25, 'Supergantia C/Soft', '2013-11-28 11:18:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
