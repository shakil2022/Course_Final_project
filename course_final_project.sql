-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2022 at 06:41 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_cakes`
--

DROP TABLE IF EXISTS `available_cakes`;
CREATE TABLE IF NOT EXISTS `available_cakes` (
  `Cake_Type` varchar(30) NOT NULL,
  `available_piece` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_cakes`
--

INSERT INTO `available_cakes` (`Cake_Type`, `available_piece`) VALUES
('Strabery', '15');

-- --------------------------------------------------------

--
-- Table structure for table `cake_order`
--

DROP TABLE IF EXISTS `cake_order`;
CREATE TABLE IF NOT EXISTS `cake_order` (
  `Order_No` int(20) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Order_Date` date NOT NULL,
  `Order_Time` time NOT NULL,
  `Cake_Flavour` varchar(30) NOT NULL,
  `kg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_order`
--

INSERT INTO `cake_order` (`Order_No`, `Name`, `Email`, `Address`, `Phone`, `Order_Date`, `Order_Time`, `Cake_Flavour`, `kg`) VALUES
(101, 'shakil Ahmed', 'shakil@gmail.com', 'jahangirnagar University', '01764909404', '2022-03-09', '05:01:00', 'Strabery', '1.5'),
(102, 'tajul', 'tajul@gmail.com', 'jahangirnagar University', '01764909404', '2022-03-25', '11:30:00', 'Chocolate Cake', '2'),
(104, 'Tasnia', 'tasnisa@gmail.com', 'Mirpur-1', '0174365345', '2022-03-25', '12:19:00', 'Mango', '.75');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

DROP TABLE IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
  `Chef_ID` int(10) NOT NULL,
  `Chef_Name` varchar(40) NOT NULL,
  `Chef_Address` varchar(40) NOT NULL,
  `Chef_Phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`Chef_ID`, `Chef_Name`, `Chef_Address`, `Chef_Phone`) VALUES
(203, 'Navnit Kumar', 'Dhaka', '01764808505'),
(203, 'Navnit Kumar', 'Dhaka', '01764808505');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
