-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2019 at 04:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `iteam` varchar(200) NOT NULL,
  `rs` int(8) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `date`, `iteam`, `rs`, `pass`) VALUES
(1, '2019-02-02', 'petroll', 300, '7046907808'),
(2, '2019-02-02', 'food', 1000, '9426006676'),
(3, '2019-02-02', 'petroll', 300, '7076673451'),
(4, '2019-02-02', 'food', 300, '7076673451'),
(7, '2019-02-03', 'clothes', 500, '7894561230'),
(6, '2019-02-03', 'petroll', 300, '7046907808'),
(8, '2019-02-03', 'petroll', 500, '7046907808'),
(9, '2019-02-03', 'food', 1000, '7046907808'),
(10, '2019-02-03', 'asd', 456, '7046907808'),
(11, '2019-02-03', 'abc', 10000, '4567891230'),
(12, '2019-02-28', 'petroll', 1000, '7046907808'),
(13, '2019-03-25', 'petroll', 100, '7046907808'),
(14, '2019-03-25', 'food', 100, '7046907808'),
(15, '2019-06-20', 'petroll', 200, '7046907808'),
(16, '2019-06-20', 'food', 100, '7046907808'),
(17, '2019-06-20', 'abc', 300, '7046907808'),
(18, '2019-06-20', 'clothes', 200, '7046907808'),
(19, '2019-06-20', 'petrol', 200, '7046907808');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `pass`) VALUES
(7, 'jay', '7046907808'),
(10, 'dineshbhai', '9408331785'),
(9, 'akash', '7076673451'),
(8, 'ram', '9426006676'),
(11, 'keya', '7894561230'),
(12, 'akash', '1234567890'),
(13, 'jitu', '9876543210'),
(14, 'jitu', '9876543210'),
(15, 'jitu', '9876543210'),
(16, 'jitu', '9876543210'),
(17, 'jitu', '9876543210'),
(18, 'bhargav', '4567891230');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
