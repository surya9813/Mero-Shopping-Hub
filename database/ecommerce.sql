-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Mar 10, 2025 at 01:59 AM
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
(29, 'Hand Bag', '2600', 'Uploadimage/istockphoto-1271796113-612x612.jpg', 'bag'),
(30, 'Samsung', '22000', 'Uploadimage/pexels-felix-haumann-1938529-5792169.jpg', 'mobile'),
(31, 'Lenovo', '100000', 'Uploadimage/laptop lenovo.png', 'laptop'),
(32, 'Samsung', '17000', 'Uploadimage/pexels-ron-lach-8368973.jpg', 'mobile'),
(33, 'School Bag', '900', 'Uploadimage/81dy4N3jMZL._AC_SX522_.jpg', 'bag'),
(34, 'Mac Book', '150000', 'Uploadimage/pexels-shvetsa-5325003.jpg', 'laptop'),
(35, 'Ladies Bag', '1400', 'Uploadimage/S0a8a3a4e712b44a8a1273905c68a2fad5.jpg_640x640Q90.jpg_.webp', 'bag'),
(36, 'Hand Bag', '1600', 'Uploadimage/image_file__16597.jpg', 'bag'),
(37, 'Samsung', '887676', 'Uploadimage/Screenshot (145).png', 'mobile'),
(38, 'Samsung', '22000', 'Uploadimage/IMG_20230520_170535_952.jpg', 'mobile');

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
(8, 'Dippesh', 'dipeshmahatto@gmail.com', '9803643491', 'Dipesh'),
(9, 'Lalbabu Mahato', 'lalbabu@gmail.com', '9874501236', 'lalbabu'),
(19, 'Rupesh', 'suryanarayrrranmahato788@gmail.com', '9803290797', '00000000'),
(20, 'admin455', 'suryanaraya14552nmahato788@gmail.com', '0003290797', 'admin123'),
(21, 'admin14', 'sury145anarayanmahato788@gmail.com', '0003290797', 'surya@1234'),
(25, 'Ram Mahato', 'ram@gmail.com', '9812002295', 'ram@1234'),
(26, 'Mohan Mahato', 'mohan142@gmail.com', '9800090797', 'mohan@123'),
(27, 'Dipeshh', 'dipeshkumarmahato788@gmail.com', '9806721751', 'dipesh@123'),
(28, 'Dipeshhh', 'suryanarayassdmahato788@gmail.com', '9803200797', 'surya@98032'),
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
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
