-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 09:00 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `orderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `productName`, `productPrice`, `productQuantity`, `orderStatus`) VALUES
(1, 5, 'Samsung', '22000', 5, 'Pending'),
(2, 5, 'Samsung', '22000', 3, 'Pending'),
(3, 5, 'Mac Book', '150000', 5, 'Pending'),
(4, 5, 'Mac Book', '150000', 1, 'Pending'),
(5, 5, 'Samsung', '22000', 3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `PName` varchar(111) NOT NULL,
  `PPrice` varchar(111) NOT NULL,
  `PImage` varchar(211) NOT NULL,
  `PCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `PName`, `PPrice`, `PImage`, `PCategory`) VALUES
(39, 'Iphone 11', '68999', 'Uploadimage/4.jpg', 'Iphone'),
(40, 'Samsung', '215000', 'Uploadimage/5.jpg', 'Samsung'),
(41, 'Ryte t1', '1500', 'Uploadimage/12.jpg', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(255) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(5, 'Dipesh', 'dipesh2000@gmail.com', '9865741230', 'dipesh'),
(6, 'RAMESH', 'rameshsingh9813@gmail.com', '9812115957', 'ramesh'),
(7, 'chanda', 'suryanarayanmahato788@gmail.com', '9874563210', '123654'),
(19, 'Rupesh', 'suryanarayrrranmahato788@gmail.com', '9803290797', '00000000'),
(20, 'admin455', 'suryanaraya14552nmahato788@gmail.com', '0003290797', 'admin123'),
(21, 'admin14', 'sury145anarayanmahato788@gmail.com', '0003290797', 'surya@1234'),
(26, 'Mohan Mahato', 'mohan142@gmail.com', '9800090797', 'mohan@123'),
(29, 'DipeshMahato', 'suryanarayandfghjmahato788@gmail.com', '9803000097', '$2y$10$VJ1yDbN4Er7K16nV2LH25.5O6b7erPQ1bph9dJTrEpNJARNVUboC6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
