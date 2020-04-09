-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 02:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE `bought` (
  `email` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`email`, `brand`, `model`, `price`) VALUES
('', ' BatMobile', ' supermanvsbatman', ' 1500000$'),
('mohamed_bakry@yahoo.com', ' bmw', ' M3', ' 115000$'),
('mohamed_bakry@yahoo.com', ' porsche', ' 911 GT3', ' 325000$'),
('mohamed_bakry@yahoo.com', ' astonmartin', ' DBS', ' 308000$'),
('mohamed_bakry@yahoo.com', ' porsche', ' 911 GT3', ' 325000$'),
('hassan_ahmed9201@yahoo.com', ' astonmartin', ' DBS', ' 308000$'),
('hassan_ahmed9201@yahoo.com', ' astonmartin', ' DBS', ' 308000$'),
('hassan_ahmed9201@yahoo.com', ' astonmartin', ' DBS', ' 308000$');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`brand`, `model`, `price`) VALUES
('porsche', '911 GT3', '325000'),
('astonmartin', 'DBS', '308000'),
('bmw', 'M3', '115000'),
('BatMobile', 'supermanvsbatman', '1500000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` char(70) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Password`) VALUES
('', '', ''),
('anas ahmed', 'anas_ahmed@yahoo.com', 'dasdasdadad'),
('ramzy', 'gfshw@abc.xyz', 'moh123'),
('hacker vinom', 'hacker_vinom@yahoo.com', 'dsdasdsa'),
('hassan ahmed', 'hassan_ahmed9201@yahoo.com', 'sdasd'),
('Mohamed Fawzy', 'mfawzy2301@yahoo.com', 'dsdasdsa'),
('mina mounir', 'minamoner@icloud.com', 'sjagsdfhi'),
('mohamed bakry', 'mohamed_bakry@yahoo.com', '123456789'),
('mostafa galal', 'mostafagalal@icloud.com', '5544332211'),
('anas', 'oxter155@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD KEY `email` (`email`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`model`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bought`
--
ALTER TABLE `bought`
  ADD CONSTRAINT `bought_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
