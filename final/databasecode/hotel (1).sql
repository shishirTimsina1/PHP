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
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hID` int(8) NOT NULL,
  `hotelName` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `hotelPrice` int(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hID`, `hotelName`, `location`, `hotelPrice`, `image`) VALUES
(1, 'Hyatt', 'Sea of Tranquility', 6000, 'hyatt.jpg'),
(2, 'Wyndham', 'Mare Imbrium', 5500, 'wyndham.jpg'),
(3, 'Hampton Inn', 'Mare Imbrium', 4000, 'hamptonInn.jpg'),
(4, 'Red Roof Inn', 'Mare Crisium', 3000, 'redRoof.jpg'),
(5, 'Holiday Inn', 'Sea of Tranquility', 5500, 'holidayInn.jpg'),
(6, 'Hyatt', 'Sea of Tranquility', 3000, 'default.jpg'),
(7, 'Wyndham', 'Sea of Tranquility', 2000, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
