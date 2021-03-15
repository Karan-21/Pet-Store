-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2017 at 06:26 AM
-- Server version: 5.00.15
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petstore`
--
CREATE DATABASE IF NOT EXISTS `petstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petstore`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL auto_increment,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'dog'),
(2, 'cat'),
(3, 'fish'),
(4, 'bird');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `breedname` varchar(60) NOT NULL,
  `lifespan` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subid`, `cid`, `breedname`, `lifespan`, `color`, `height`, `weight`, `photo`) VALUES
(1, 1, 'Pug', '12 to 15years', 'White', '10 inches', '14 to 18 pounds', 'dog1.jpg'),
(2, 1, 'FinnishSpitz', '12 to 15 years', 'brown', '15inches', '20 to 35 pounds', 'dog2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
