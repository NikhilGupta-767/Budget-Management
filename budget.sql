-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 01, 2020 at 12:46 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Name`, `Email`, `Password`, `PhoneNumber`) VALUES
('awesome', 'awesome@123', '25f9e794323b453885f5181f1b624d0b', '1234560789');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `P_title` varchar(100) NOT NULL,
  `PersonName` varchar(100) NOT NULL,
  KEY `P_title` (`P_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`P_title`, `PersonName`) VALUES
('goa', 'ron'),
('goa', 'jon'),
('adventure island', 'rakesh'),
('adventure island', 'john'),
('adventure island', 'peanut'),
('bussiness', 'goldie'),
('asdfg', 'asdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `C_email` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Froms` varchar(100) NOT NULL,
  `Tos` varchar(100) NOT NULL,
  `InitialBudget` bigint(100) NOT NULL,
  `NoPeople` int(100) NOT NULL,
  PRIMARY KEY (`Title`),
  KEY `C_email` (`C_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`C_email`, `Title`, `Froms`, `Tos`, `InitialBudget`, `NoPeople`) VALUES
('awesome@123', 'adventure island', '2020-07-05', '2020-07-30', 7000, 3),
('awesome@123', 'asdfg', '2020-06-28', '2020-07-24', 5000, 1),
('awesome@123', 'bussiness', '2020-07-05', '2020-08-08', 10000, 1),
('awesome@123', 'goa', '2020-07-13', '2020-07-23', 400, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`P_title`) REFERENCES `plans` (`Title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`C_email`) REFERENCES `clients` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
