-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 11:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_image`
--

CREATE TABLE IF NOT EXISTS `tb_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_image`
--

INSERT INTO `tb_image` (`id`, `filename`, `location`) VALUES
(1, 'Jellyfish.jpg', 'Jellyfish.jpg'),
(2, 'Koala.jpg', 'Koala.jpg'),
(3, 'Penguins.jpg', 'Penguins.jpg'),
(4, 'Penguins.jpg', 'Penguins.jpg'),
(5, 'Koala.jpg', 'file/Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE IF NOT EXISTS `todolist` (
  `id` int(11) NOT NULL,
  `priority` varchar(15) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
