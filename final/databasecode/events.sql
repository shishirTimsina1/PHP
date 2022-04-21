-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:19 AM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(8) NOT NULL,
  `eventName` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `eventPrice` int(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `location`, `eventPrice`, `image`) VALUES
(1, 'Moon Concert', 'Sea of Tranquility', 500, 'moonConcert.jpg'),
(2, 'Moon Basketball', 'Mare Imbrium', 300, 'moonBasketball.jpg'),
(3, 'Laser Show', 'Harbinger Mountains', 100, 'lasershow.jpg'),
(4, 'Rock Gathering', 'Schiller Crater', 1000, 'rockGathering.jpg'),
(5, 'Moon Hockey', 'Sea of Tranquility', 400, 'default.jpg'),
(6, 'Moon Concert', 'Mare Imbrium', 300, 'moonConcert.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
