-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 11:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs334`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(8) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `stAddy1` varchar(100) DEFAULT NULL,
  `stAddy2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stateAbbr` varchar(2) DEFAULT NULL,
  `postalCode` int(5) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `homePhone` varchar(18) DEFAULT NULL,
  `facebookURL` varchar(200) DEFAULT NULL,
  `cellPhone` varchar(18) DEFAULT NULL,
  `userID` varchar(10) NOT NULL,
  `userPassword` varchar(12) NOT NULL,
  `salesPersonID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `lastName`, `firstName`, `stAddy1`, `stAddy2`, `city`, `stateAbbr`, `postalCode`, `country`, `email`, `homePhone`, `facebookURL`, `cellPhone`, `userID`, `userPassword`, `salesPersonID`) VALUES
(1, 'John', 'Smith', '123 Big rd', NULL, 'Pittsburgh', 'PA', 15227, NULL, 'jsmith@email.com', '412-759-2244', NULL, NULL, 'jSmithy', 'pass', 1),
(2, 'Smith', 'Jake', '123 Small rd', NULL, 'Pittsburgh', 'PA', 15227, NULL, 'jakey@email.com', '412-333-4444', NULL, NULL, 'jakey', 'pass', 1),
(3, 'Scott', 'Jia', '321 Rd', NULL, 'Pittsburgh', 'PA', 15227, NULL, 'jScott@email.com', '412-333-5555', NULL, NULL, 'jiaBOI', 'pass', 1),
(4, 'Kelly', 'Charlie', '321 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'cheeseEater@email.com', '412-333-6666', NULL, NULL, 'ghouls', 'pass', 2),
(5, 'McDonald', 'Ronald', '696 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'muscleman@email.com', '412-666-5555', NULL, NULL, 'paddys', 'pass', 2),
(6, 'Reynolds', 'Dennis', '696 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'ladiesman@email.com', '412-666-6969', NULL, NULL, 'paddys', 'pass', 2),
(7, 'Reynolds', 'Deeandra', '78 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'birdGirls@email.com', '412-666-5555', NULL, NULL, 'paddys', 'pass', 4),
(8, 'Reynolds', 'Frank', '321 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'thewarthog@email.com', '412-123-1234', NULL, NULL, 'clams', 'pass', 3),
(9, 'Cricket', 'Rickety', 'Homeless', NULL, 'Philadelphia', 'PA', 15227, NULL, 'pastor@jesus.com', '412-123-5855', NULL, NULL, 'dee', 'pass', 3),
(10, 'The', 'Waitress', '9 Rd', NULL, 'Philadelphia', 'PA', 15227, NULL, 'waitress@email.com', '412-666-5555', NULL, NULL, 'dennis', 'pass', 3),
(15, 'Q', 'J', 'sd', NULL, 'Philadelphia', '', 0, NULL, '', NULL, NULL, NULL, 'jDoe', '', 1),
(16, 'McPoyle', 'Frank', '123 RDD', NULL, 'Pittsburgh', 'PA', 15227, NULL, 'sdf@ghj.com', NULL, NULL, NULL, 'LPoyle', 'pass', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `salesPersonID` (`salesPersonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`salesPersonID`) REFERENCES `salesperson` (`salesPersonID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
