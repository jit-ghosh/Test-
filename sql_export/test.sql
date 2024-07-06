-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `entityclass`
--

CREATE TABLE `entityclass` (
  `slno` int(10) NOT NULL,
  `entity_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `fatca` varchar(50) NOT NULL,
  `crs` varchar(50) NOT NULL,
  `rationale` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `entityclass`
--

INSERT INTO `entityclass` (`slno`, `entity_name`, `country`, `fatca`, `crs`, `rationale`) VALUES
(1, 'Entity1', 'Luxembourg', 'Financial Institution', 'Financial Institution', 'XYZ'),
(2, 'Entity2', 'Luxembourg', 'Financial Institution', 'Financial Institution', '2XYZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entityclass`
--
ALTER TABLE `entityclass`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entityclass`
--
ALTER TABLE `entityclass`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
