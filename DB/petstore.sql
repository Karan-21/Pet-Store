-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 06:45 AM
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
-- Table structure for table `fooddata`
--

CREATE TABLE IF NOT EXISTS `fooddata` (
  `fid` int(11) NOT NULL auto_increment,
  `category` int(11) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `price` varchar(60) NOT NULL,
  `weight` varchar(60) NOT NULL,
  `expirydate` varchar(60) NOT NULL,
  `ingredients` varchar(100) NOT NULL,
  `photo` varchar(70) NOT NULL,
  PRIMARY KEY  (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fooddata`
--

INSERT INTO `fooddata` (`fid`, `category`, `foodname`, `price`, `weight`, `expirydate`, `ingredients`, `photo`) VALUES
(1, 1, 'whiskans', '299', '1.1kg', 'Sep 2018', 'fish meat', 'catfood.jpg'),
(2, 1, 'Pedigree', '461', '3 kg', 'Mar 2018', 'Chicken and milk', 'dogfood.jpg'),
(3, 3, 'Taiyo plus', '225', '1 kg', 'Dec 2017', 'fish meal', 'fishfood.jpg'),
(4, 1, 'Vitapol', '203', '500g', 'Nov   2019', 'grains', 'birdfood.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE IF NOT EXISTS `orderinfo` (
  `orderno` int(11) NOT NULL auto_increment,
  `orderdate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(60) NOT NULL,
  `shipaddress` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mail` varchar(60) NOT NULL,
  PRIMARY KEY  (`orderno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`orderno`, `orderdate`, `amount`, `cid`, `cname`, `shipaddress`, `contact`, `mail`) VALUES
(3, '2017-02-20', 2258, 1, 'anitha vijayan', 'plot no 7cas nagar', 9845678987, 'anitha@gmail.com'),
(4, '2017-02-22', 1981, 3, 'paulpandi', 'cas nagar madurai', 9845678987, 'paul@gmail.com'),
(5, '2017-02-22', 1981, 3, 'paulpandi', 'cas nagar madurai', 9845678987, 'paul@gmail.com'),
(6, '2017-02-22', 1465, 4, 'jerry paul', 'kknagar', 9876543210, 'jerry@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `cname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`pid`, `pname`, `price`, `quantity`, `amount`, `cid`, `pdate`, `cname`) VALUES
(1, 'whiskans', 299, 3, 897, 1, '2017-02-20', 'anitha vijayan'),
(2, 'Pedigree', 461, 1, 461, 1, '2017-02-20', 'anitha vijayan'),
(3, 'Taiyo plus', 225, 4, 900, 1, '2017-02-20', 'anitha vijayan'),
(1, 'whiskans', 299, 2, 598, 3, '2017-02-22', 'paulpandi'),
(2, 'Pedigree', 461, 3, 1383, 3, '2017-02-22', 'paulpandi'),
(1, 'whiskans', 299, 2, 598, 4, '2017-02-22', 'jerry paul'),
(2, 'Pedigree', 461, 1, 461, 4, '2017-02-22', 'jerry paul'),
(4, 'Vitapol', 203, 2, 406, 4, '2017-02-22', 'jerry paul');

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
  `highlights` varchar(200) NOT NULL,
  `feeding` varchar(200) NOT NULL,
  `care` varchar(200) NOT NULL,
  PRIMARY KEY  (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subid`, `cid`, `breedname`, `lifespan`, `color`, `height`, `weight`, `photo`, `highlights`, `feeding`, `care`) VALUES
(1, 1, 'Pug', '12 to 15years', 'White', '10 inches', '14 to 18 pounds', 'dog1.jpg', 'Pugs can be stubborn and difficult to housebreak. Crate training is recommended.Pugs wheeze, snort and snore, loudly.', 'Recommended daily amount: 1/2 to 1 cup of high-quality dry food a day, divided into two meals.', '\r\nThough playful and rambunctious, the Pug is a low-maintenance companion, making it ideal for older owners.'),
(2, 1, 'FinnishSpitz', '12 to 15 years', 'brown', '15inches', '20 to 35 pounds', 'dog2.jpg', 'Finnish Spitz are lively, high-energy dogs and require lots of daily exercise.\r\nThese dogs are called Bark Pointers for a good reason. ', 'Recommended daily amount: 1.75 to 2.5 cups of a high-quality dog food daily, divided into two meals.', 'Finnish Spitz have a lot of energy and high exercise needs. They aren''t recommended for apartment dwellers or families who don''t have the time and energy to give them a lot of exercise.'),
(3, 2, 'persian', '15years', 'white', '15feet', '30kg', 'cat.jpg', 'cute and white color cat', 'fishes', 'to keep the cat in cold conditions'),
(4, 2, 'Munchkin', '15 years', 'light brown with white shade', '12 feet', '25 kg', 'cat2.jpg', 'The Munchkin is a relatively new breed of cat characterized by its very short legs', 'Select a food specifically made for cats. You cannot feed cats using human foods, such as chicken or tuna', ' Munchkin cats, like any cat, require a healthy diet. However, they do not need food specifically made for munchkin cats.'),
(5, 3, 'Golden Nugget', '3 years', 'black with yellow dots', '15 cm', '5 kg', 'fish.jpg', 'he gold nugget pleco lives up to its name in a few ways. It has golden yellow highlights and costs more than regular plecos.', 'Gold nugget plecos are algae eaters. However, they will often eat all of the algae in a tank. They require supplemental food or they will waste away. ', 'Gold nugget plecos come from the northern drainage of the Amazon River. This water has very specific conditions in terms of temperature and pH. '),
(6, 3, 'betta', '2 years', 'reddishbrown', '10cm', '200g', 'fish1.jpg', 'They are also known as Siamese Fighting Fish. They fight with other bettas, so you will only want one in your tank.', 'These fish are hardy and will eat flake food or pellets. Because of the male betta fishâ€™s long fins\r\n\r\n', 'be sure not to pair them with others who might pick at the fins.The males have brilliantly bright long fins.\r\n\r\n'),
(7, 4, 'Finches', '20 years', 'white with black', '50 cm', '2 kg', 'bird.jpg', 'They have been bred in aviaries and kept in peopleâ€™s homes for over 100 years.', 'Their diet consist of seeds, fruit, buds, and weed seeds. Even during the breeding season these birds regurgitate seeds to their young.', 'Zebra ï¬nches are social animals that need the presence of others of their kind at all times. Zebra Finches are ideal subjects for the hobbyist who wants to study animal behavior. '),
(8, 4, 'Parrot', '30 years', 'green', '50cm', '1 kg', 'bird2.jpg', 'Parrots are very good mimics and can copy sounds that they hear in their environment', 'Parrots are omnivores, which means that they can eat both meat and vegetation.', 'Some parrots like to live in snowy climates. A few cold-weather parrots are maroon-fronted parrots, thick-billed parrots and keas.'),
(9, 1, 'Bichon Frise', '12 to 15 years', 'white', '9 inches to 11 inches', '7 to 12 pounds', '1.jpg', 'Bichons can be difficult to housebreak.', '1/2 to 1.5 cups of high-quality dry food', 'Bichons are active dogs but do well as apartment dwellers');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `uid` int(11) NOT NULL auto_increment,
  `cusname` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm` varchar(60) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `cusname`, `contact`, `address`, `email`, `password`, `confirm`) VALUES
(1, 'anitha vijayan', 9878987898, 'madurai', 'anitha@gmail.com', 'anitha123', 'anitha123'),
(2, 'keerthi', 9846512311, 'madurai', 'keerthi@gmail.com', 'keerthi', 'keerthi'),
(3, 'paulpandi', 9845678987, 'madurai', 'paul@gmail.com', 'paul123', 'paul123'),
(4, 'jerry paul', 9876543209, 'kknagar madurai', 'jerry@gmail.com', '12345', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
