-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 09:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `code` varchar(7) NOT NULL,
  `country` varchar(20) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `name`, `price`, `code`, `country`, `expiration_date`) VALUES
(12, 'concealer', 80, '16-355', 'SA', '2024-01-10'),
(14, 'skin glow', 95, '16-456', 'SA', '2024-04-20'),
(18, 'eyeshadow palette', 115, '14-662', 'SA', '2025-08-01'),
(21, 'ordinary Glycolic', 150, '32-854', 'SA', '2026-03-31'),
(25, 'Radiance Masque', 170, '10-763', 'SA', '2024-07-01'),
(29, 'Scandal Parfum', 470, '11-351', 'SA', '2025-01-11'),
(32, 'Le Gemme Parfum', 540, '38-454', 'SA', '2028-10-31'),
(34, 'COCO MADEMOISELLE', 510, '19-349', 'SA', '2024-03-10'),
(37, 'Eye Zone Treatment', 160, '12-189', 'SA', '2027-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
