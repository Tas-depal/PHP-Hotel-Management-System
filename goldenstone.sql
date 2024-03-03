-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2020 at 11:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldenstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `goldenstone_addroom`
--

DROP TABLE IF EXISTS `goldenstone_addroom`;
CREATE TABLE IF NOT EXISTS `goldenstone_addroom` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `roomType` varchar(50) NOT NULL,
  `roomNo` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `roomDes` longtext NOT NULL,
  `roomImg` blob NOT NULL,
  `roomStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldenstone_addroom`
--

INSERT INTO `goldenstone_addroom` (`room_id`, `roomType`, `roomNo`, `price`, `roomDes`, `roomImg`, `roomStatus`) VALUES
(4, 'Luxury', '104', 7000, 'Comfortable room decorated in pastel tones. Standard rooms are equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.', 0x726f6f6d362e6a7067, 'Unavailable'),
(1, 'Luxury', '101', 7000, 'Comfortable room decorated in pastel tones. Standard rooms are equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.\r\n', 0x726f6f6d322e6a7067, 'Available'),
(2, 'Luxury', '102', 7000, 'Comfortable room decorated in pastel tones and equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.', 0x726f6f6d332e6a7067, 'Available'),
(3, 'Luxury', '103', 7000, 'Comfortable room decorated in pastel tones and equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.', 0x726f6f6d342e6a7067, 'Available'),
(7, 'Delux', '201', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x67322e6a7067, 'Available'),
(5, 'Luxury', '105', 7000, 'Comfortable room decorated in pastel tones. Standard rooms are equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.', 0x726f6f6d312e6a7067, 'Available'),
(6, 'Luxury', '106', 7000, 'Comfortable room decorated in pastel tones and equipped with shower or bathtub and some of them with balcony overlooking hotel garden. Each room is air conditioned and has a flat-screen TV with international TV channels, cozy king size bed and spacious wardrobe.', 0x67342e6a7067, 'Available'),
(11, 'Delux', '205', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x6731302e6a7067, 'Available'),
(8, 'Delux', '202', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x332e6a7067, 'Available'),
(9, 'Delux', '203', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x67362e6a7067, 'Available'),
(10, 'Delux', '204', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x67382e6a7067, 'Available'),
(12, 'Delux', '206', 10000, 'Spacious air conditioned room with terrace overlooking old part of town and hotel garden. Room consist of sleeping area with king size bed and sitting area with comfortable sofa. This luxuriously decorated room features a flat-screen satellite TV, minibar and a laptop safe box. The bathroom with shower or a bath tub includes free toiletries.', 0x72312e6a7067, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `goldenstone_adminlogin`
--

DROP TABLE IF EXISTS `goldenstone_adminlogin`;
CREATE TABLE IF NOT EXISTS `goldenstone_adminlogin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldenstone_adminlogin`
--

INSERT INTO `goldenstone_adminlogin` (`admin_id`, `name`, `eid`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `goldenstone_roombooking`
--

DROP TABLE IF EXISTS `goldenstone_roombooking`;
CREATE TABLE IF NOT EXISTS `goldenstone_roombooking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldenstone_roombooking`
--

INSERT INTO `goldenstone_roombooking` (`book_id`, `check_in`, `check_out`, `user_id`, `roomId`) VALUES
(5, '2020-02-01', '2020-02-05', 5, 1),
(6, '2020-02-01', '2020-02-06', 5, 2),
(4, '2020-01-01', '2020-01-05', 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `goldenstone_userdetails`
--

DROP TABLE IF EXISTS `goldenstone_userdetails`;
CREATE TABLE IF NOT EXISTS `goldenstone_userdetails` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mobNo` bigint(20) NOT NULL,
  `eid` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldenstone_userdetails`
--

INSERT INTO `goldenstone_userdetails` (`userId`, `name`, `mobNo`, `eid`, `pass`) VALUES
(5, 'Tasneem', 9039183552, 'tasdepal123@gmail.com', 'tas123'),
(9, 'A', 6565, 'a@gmail.com', 'a123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
