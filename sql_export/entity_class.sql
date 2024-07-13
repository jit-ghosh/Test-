-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 09:29 AM
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
  `legal_entity_name` varchar(50) NOT NULL,
  `country_incorporation` varchar(100) NOT NULL,
  `country_taxresidence` varchar(100) NOT NULL,
  `ownership_info` varchar(200) NOT NULL,
  `outside_client_group_owners` varchar(10) NOT NULL,
  `self_certs` varchar(10) NOT NULL,
  `principal_purpose` varchar(100) NOT NULL,
  `assets_liabilities` varchar(100) NOT NULL,
  `doc_provided` varchar(100) NOT NULL,
  `local_law_opinion` varchar(100) NOT NULL,
  `distinguishing_features_legal_entity` varchar(100) NOT NULL,
  `crs` varchar(100) NOT NULL,
  `fatca` varchar(100) NOT NULL,
  `justification` varchar(100) NOT NULL,
  `structure_chart` varchar(10) NOT NULL,
  `snippet_sc` varchar(200) NOT NULL,
  `email_subject_line` varchar(200) NOT NULL,
  `change_in_fact_of_circumstances` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `entityclass`
--

INSERT INTO `entityclass` (`slno`, `legal_entity_name`, `country_incorporation`, `country_taxresidence`, `ownership_info`, `outside_client_group_owners`, `self_certs`, `principal_purpose`, `assets_liabilities`, `doc_provided`, `local_law_opinion`, `distinguishing_features_legal_entity`, `crs`, `fatca`, `justification`, `structure_chart`, `snippet_sc`, `email_subject_line`, `change_in_fact_of_circumstances`) VALUES
(1, 'Entity 1', 'Cayman Islands\r\n', 'Cayman Islands\r\n', 'Owner 1 and Owner 2\r\n', 'Yes', 'None', 'Some Activities\r\n', 'Asset 1\r\n', 'Email Date: DD/MM/YY\r\n', '', 'Some Feature of an FI\r\n', 'Financial Institution - FATCA\r\n', 'Financial Institution - CRS\r\n', 'Required Justification for Cayman FI\r\n', 'Yes', 'Photo\r\n', '', '');

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
