-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2023 at 05:10 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(20) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apassword` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apassword`) VALUES
('hit52005@gmail.com', 'HIT', 'Hit12345'),
('nike@gmail.com', 'Nisarg', 'Nisarg1122');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bid` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `Bill_name` varchar(254) NOT NULL,
  `P_Method` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bid`),
  KEY `oid` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `date`, `total_amount`, `tid`, `Bill_name`, `P_Method`) VALUES
('B0105', '27/May/2023', '250', 'T1', 'B0105.pdf', 'Card'),
('B0107', '27/May/2023', '70', 'T1', 'B0107.pdf', ''),
('B0134', '13/May/2023', '350', 'T1', 'B0134.pdf', 'Card'),
('B0236', '19/May/2023', '250', 'T1', 'B0236.pdf', 'Cash'),
('B0254', '12/May/2023', '600', 'T1', 'B0254.pdf', 'Card'),
('B0255', '12/May/2023', '250', 'T1', 'B0255.pdf', 'UPI'),
('B0305', '12/May/2023', '500', 'T1', 'B0305.pdf', 'Cash'),
('B0946', '3/June/2023', '175', 'T1', 'B0946.pdf', 'Card'),
('B1039', '13/May/2023', '1600', 'T1', 'B1039.pdf', 'Card'),
('B1203', '11/May/2023', '500', 'T1', 'B1203.pdf', 'Cash'),
('B1248', '13/May/2023', '1490', 'T1', 'B1248.pdf', 'Card'),
('B1253', '13/May/2023', '1100', 'T1', 'B1253.pdf', 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `oder_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_id` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(40) NOT NULL,
  `price` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`oder_id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

DROP TABLE IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
  `chef_id` varchar(50) NOT NULL,
  `chef_password` varchar(30) NOT NULL,
  `chef_name` varchar(30) NOT NULL,
  `chef_city` varchar(20) NOT NULL,
  `chef_cno` varchar(10) NOT NULL,
  PRIMARY KEY (`chef_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`chef_id`, `chef_password`, `chef_name`, `chef_city`, `chef_cno`) VALUES
('renishr@gmail.com', 'Renish123', 'Renish123', 'junagadh', '9879669445');

-- --------------------------------------------------------

--
-- Table structure for table `chef_cart`
--

DROP TABLE IF EXISTS `chef_cart`;
CREATE TABLE IF NOT EXISTS `chef_cart` (
  `table_no` varchar(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `oder_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`oder_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `item_name` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `img` varchar(254) NOT NULL,
  `categories` varchar(50) NOT NULL,
  PRIMARY KEY (`item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_name`, `price`, `img`, `categories`) VALUES
('Cheese Garlic Naan', '50', 'CheeseGarlicNaan.jpg', 'Roti'),
('Masala Butter Milk', '20', 'Masala Chhash.jpg', 'Drinks'),
('Naan', '35', 'Naan.jpg', 'Roti'),
('Panner Butter Masala', '250', 'PannerButterMasala.jpg', 'Sabji'),
('Panner Tikka', '140', 'PannerTikka.jpg', 'Starters'),
('Panner Tikka Masala', '210', 'PannerTikkaMasala.jpg', 'Sabji');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `oid` varchar(20) NOT NULL,
  `table_no` varchar(5) NOT NULL,
  `item_qty` varchar(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `item_name` (`item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

DROP TABLE IF EXISTS `tbl`;
CREATE TABLE IF NOT EXISTS `tbl` (
  `table_no` varchar(10) NOT NULL,
  `capacity` int(255) NOT NULL,
  PRIMARY KEY (`table_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`table_no`, `capacity`) VALUES
('T1', 2),
('T2', 4),
('T3', 6),
('T4', 8),
('T5', 10),
('T6', 5),
('T7', 5),
('T8', 5);

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

DROP TABLE IF EXISTS `waiter`;
CREATE TABLE IF NOT EXISTS `waiter` (
  `wid` varchar(50) NOT NULL,
  `wpassword` varchar(30) NOT NULL,
  `wname` varchar(30) NOT NULL,
  `wcity` varchar(20) NOT NULL,
  `w_con` varchar(10) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`wid`, `wpassword`, `wname`, `wcity`, `w_con`) VALUES
('parthlathiya0018@gmail.com', 'Parth123', 'parth', 'surat', '8160330433'),
('ram123@gmail.com', 'Ram12345', 'ram ', 'lucknow', '1234567890'),
('renishr@gmail.com', 'Renish123', 'Renish', 'junagadh', '9879669445');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
