-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 07:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--
CREATE DATABASE IF NOT EXISTS `my_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Body` varchar(300) NOT NULL,
  `Time` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Name`, `Email`, `Body`, `Time`) VALUES
(1, 'name', 'sjhd@gmail.com', 'tftfu mekenet', '0000-00-00'),
(2, 'brooo', 'bro@gmial.com', 'kkas', '0000-00-00'),
(4, 'Chala ', 'Chala124@lmail.com', 'test message', '0000-00-00'),
(6, 'aa', 'da@gmail', 'ad', '0000-00-00'),
(7, 'chala', 'asas@da', 'asasa', '0000-00-00'),
(9, 'chala', 'chala', 'khg', '2022-06-05'),
(14, 'chala', 'chala', 'Erts', '2022-06-05'),
(15, 'chala', 'chala', 'hi', '2022-06-05'),
(16, 'User007', 'User007', '123456', '2022-06-12'),
(17, 'User007', 'N/A', '123456', '2022-06-12'),
(18, 'User007', 'N/A', '123456', '2022-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(100) NOT NULL DEFAULT 'Customer',
  `Uname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Age` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Kebelle_Id` varchar(255) NOT NULL,
  `Verified` tinyint(1) NOT NULL DEFAULT 0,
  `Time` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `usertype`, `Uname`, `password`, `Name`, `Phone`, `Email`, `Age`, `Birthdate`, `Gender`, `photo`, `Kebelle_Id`, `Verified`, `Time`) VALUES
(1, 'Customer', 'User001', '12345678', 'Generic User', 6934663, 'N/A', 12, '2000-01-23', 'Male', 'handsome-man-posingstudio-shot-260nw-284325527.jpg', 'kitaw.jpg', 0, '2022-06-11'),
(2, 'Customer', 'User002', '12345678', 'Generic User', 8568, 'N/A', 54, '1989-06-18', 'Female', 'images_16.jpeg', 'images_15.jpeg', 0, '2022-06-11'),
(11, 'Customer', 'User003', '12345678', 'Generic User', 356498, 'N/A', 25, '0000-00-00', 'Male', 'IMG_20181116_091625.jpg', 'IMG_20181116_093250.jpg', 0, '2022-06-11'),
(12, 'Customer', 'User004', '12345678', 'Chala Teklu', 326498, 'N/A', 51, '0000-00-00', 'Male', 'cake.jpg', 'vlcsnap-2019-03-28-15h07m39s223.png', 0, '2022-06-11'),
(14, 'Customer', 'User005', '12345678', 'Abel Ayele', 0, 'N/A', 0, '0000-00-00', 'Male', '21ZqZxjaoAL._SX200_ (3).jpg', '', 0, '2022-06-11'),
(17, 'Customer', 'User006', '12345678', 'Abebe Kebede', 98756432, 'N/A', 987, '0000-00-00', 'Female', 'tecno.jpeg', 'apple.jpeg', 0, '2022-06-11'),
(24, 'Customer', 'User007', '12345678', 'Robel Issa', 923123836, 'N/A', 1, '2021-04-06', 'Male', 'gemma-stpjHJGqZyw-unsplash.jpg', 'eduardo-soares-QsYXYSwV3NU-unsplash.jpg', 1, '2022-06-11'),
(27, 'Customer', 'asas', 'sas', 'asa', 0, 'N/A', 0, '2022-06-01', 'Male', 'dennis-siqueira-QnMeRW36-zY-unsplash.jpg', 'eduardo-soares-QsYXYSwV3NU-unsplash.jpg', 0, '2022-06-11'),
(28, 'Customer', 'asdd', 'adad', 'adad', 0, 'N/A', 0, '2022-06-05', 'Male', 'dennis-siqueira-QnMeRW36-zY-unsplash.jpg', 'eduardo-soares-QsYXYSwV3NU-unsplash.jpg', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(100) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Photo` varchar(150) NOT NULL,
  `Kebelle_ID` varchar(150) NOT NULL,
  `Verified` tinyint(1) NOT NULL DEFAULT 0,
  `Time` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5560 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `usertype`, `Uname`, `Password`, `Name`, `Phone`, `Email`, `Age`, `Birthdate`, `Gender`, `Photo`, `Kebelle_ID`, `Verified`, `Time`) VALUES
(13, 'Distributor', 'Employee001', '12345678', 'Generic Name', 98765432, 'Generic@email.com', 0, '2022-06-11', 'Male', 'bugatti.jpg', 'cake.jpg', 1, '2022-06-11'),
(14, 'Clerk', 'Employee002', '12345678', 'Generic Name', 9876543, 'N/A', 0, '2022-06-11', 'Female', '2013_Audi_R8.jpg', '2015_hitman_agent_47-3840x2160.jpg', 1, '2022-06-11'),
(15, 'Clerks Manager', 'Employee003', '12345678', 'Generic Name', 9876543, 'N/A', 0, '2022-06-11', 'Male', 'life_of_pi_boat_tiger-1920x1200.jpg', 'Mercedes_2012_Mercedes_Benz_Concept_Style_Coupe.jpg', 1, '2022-06-11'),
(5555, 'admin', 'Admin001', '12345678', 'Robel Issa', 0, 'Generic@email.com', 0, '2022-06-11', 'Male', 'o', '4', 1, '2022-06-11'),
(5556, 'Clerks Manager', 'Employee005', '12345678', 'Generic Name', 554121452, 'Generic@email.com', 0, '2022-06-11', 'Female', 'E-Shemach-logo (5).png', 'E-Shemach-logo-white (1).png', 0, '2022-06-11'),
(5557, 'Clerk', 'Employee006', '12345678', 'Generic Name', 56463, 'N/A', 0, '2022-06-11', 'Male', '', '', 0, '2022-06-11'),
(5558, 'Clerks Manager', 'Employee004', '12345678', 'Generic Name', 2147483647, 'N/A', 0, '2022-06-11', 'Female', 'E-Shemach-logo-black (1).png', 'E-Shemach-logo (6).png', 0, '2022-06-11'),
(5559, 'Clerk', 'Employee007', '12345678', 'Employee', 12345678, 'N/A', 0, '2021-12-01', 'Male', 'eduardo-soares-QsYXYSwV3NU-unsplash.jpg', 'dennis-siqueira-QnMeRW36-zY-unsplash.jpg', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Type` varchar(20) NOT NULL,
  `Product_name` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Product_In_Stock` int(20) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Type`, `Product_name`, `Quantity`, `Price`, `Product_In_Stock`, `ID`) VALUES
('Oil', 'Omaar', 5, 1280, 50, 1),
('Oil', 'Tena', 5, 1285, 50, 2),
('sugar', 'White sugar', 5, 250, 400, 3),
('Oil', 'Tena', 3, 700, 60, 4);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Good` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Customer` varchar(100) NOT NULL,
  `Clerk` varchar(50) NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`ID`, `Good`, `Price`, `Quantity`, `Customer`, `Clerk`, `Time`) VALUES
(3, 'Sugar', 876, 8765, 'dave', '', '2022-06-12'),
(4, 'Sugar', 567, 987, 'chala', '', '2022-06-12'),
(5, 'Oil', 64, 48, 'ed', '', '2022-06-12'),
(6, 'Oil', 64, 48, 'ed', '', '2022-06-12'),
(7, 'Oil', 64, 48, 'ed', '', '2022-06-12'),
(8, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(9, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(10, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(11, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(12, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(13, 'Sugar', 2345, 7845, 'axa', '', '2022-06-12'),
(14, 'Sugar', 852, 999, 'dawd', '', '2022-06-12'),
(15, 'Sugar', 2011, 50, 'User007', '', '2022-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `request_subject` varchar(100) NOT NULL,
  `request_text` varchar(300) NOT NULL,
  `request_status` int(11) NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `request_subject`, `request_text`, `request_status`, `Time`) VALUES
(1, 'melkamu tebeje', 'lbe aysklshm, beday yresal', 1, '0000-00-00'),
(2, 'wedet', 'hedech alu dinget', 1, '0000-00-00'),
(3, 'meselu fantahun', 'wey limta mta', 1, '0000-00-00'),
(4, 'meselu fantahun', 'wey limta mta', 1, '0000-00-00'),
(5, 'melkamu tebeje', 'aaa', 1, '0000-00-00'),
(6, 'wedet', ';l', 0, '0000-00-00'),
(7, 'deva', 'bro', 1, '0000-00-00'),
(8, 'daaaa', 'ssa', 0, '0000-00-00'),
(9, 'melkamu tebeje', 'ethiopiaaaaaaaaaaaa', 1, '0000-00-00'),
(10, 'ahmed teshome dimbi', 'teteyaki nazret yachi lij yetalech', 1, '0000-00-00'),
(11, 'iouyt', 'ityrtr', 1, '0000-00-00'),
(12, 'ncxjsni', 'njisaubcieq', 1, '0000-00-00'),
(13, 'wubet ayalew', 'chigr mefter meftat\r\n', 1, '0000-00-00'),
(14, 'wubet the great', 'leader of all time', 1, '0000-00-00'),
(15, 'eka answual', 'sugar , oil ychemerln abetuu gt', 1, '0000-00-00'),
(16, 'zgucbsd', 'j i buS', 1, '0000-00-00'),
(17, 'JHXB USG', 'JHX UZYS', 1, '0000-00-00'),
(18, 'ABIY teklu', 'eka alkuwal ychemer  beme\r\n', 1, '0000-00-00'),
(19, 'help', 'we are being raided!!!', 1, '0000-00-00'),
(20, 'help', 'test 1234', 1, '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
