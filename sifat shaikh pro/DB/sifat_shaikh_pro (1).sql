-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 07:53 PM
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
-- Database: `sifat shaikh pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `Pimage` varchar(200) NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `Pimage`, `PCategory`) VALUES
(14, 'Iphone 15 pro', '144000', 'Uploadimage/iPhone-15-pmax-(2)-(6)-5363.jpg', 'Mobile'),
(15, 'samsung g.. s24u', '110000', 'Uploadimage/20240123_1705987892_224395.jpeg', 'Mobile'),
(17, 'Samsung', '72999', 'Uploadimage/sam s24 3-4265.jpg', 'Mobile'),
(18, 'pixel-8-pro', '93999', 'Uploadimage/Pixel-8-Pro-Porcelain-5189.jpg', 'Mobile'),
(19, 'samsung', '100000', 'Uploadimage/20220423_1650687277_504190.png', 'Home'),
(21, 'Apple', '144000', 'Uploadimage/MacBook-Pro-M3-14inch-Silver-1368.jpeg', 'Loptop'),
(22, '23\' Monitor BenQ', '100500', 'Uploadimage/gw2780-001-228x228.png', 'Monitor'),
(23, 'laptop', '200000', 'Uploadimage/MacBook-Air-M2-15-inch-8-CPU-10-GPU-Midnight-2449.jpeg', 'Home'),
(24, '24\' Monitor BenQ', '115000', 'Uploadimage/ex2710s-01-228x228.jpg', 'Home'),
(25, 'Iphone 15 pro', '144000', 'Uploadimage/iPhone-15-pmax-(2)-(6)-5363.jpg', 'Home'),
(26, 'Monitor 19\' BenQ', '29000', 'Uploadimage/ex2710s-01-228x228.jpg', 'Monitor'),
(27, 'Monitor 22\' BenQ', '45000', 'Uploadimage/gw2283-228x228.jpg', 'Monitor'),
(28, 'Monitor 24\' BenQ', '56000', 'Uploadimage/gw2480-001-228x228.jpg', 'Monitor'),
(29, 'laptop lenovo', '55000', 'Uploadimage/Lenovo-IdeaPad-Slim-3-15IAH8-a-8606.jpeg', 'Loptop'),
(30, 'laptop lenovo', '60500', 'Uploadimage/Lenovo-IdeaPad-Flex-5-16IAU7-a-8367.jpeg', 'Loptop'),
(31, 'MacBook-Air-M3', '156000', 'Uploadimage/MacBook-Air-M3-13-Inch-Midnight-7621.jpeg', 'Loptop'),
(32, 'laptop', '200000', 'Uploadimage/Lenovo-IdeaPad-5-15IAL7-Black-5999.jpeg', 'Home'),
(33, 'laptop 3', '110000', 'Uploadimage/Lenovo-IdeaPad-Flex-5-16IAU7-a-8367.jpeg', 'Home'),
(34, 'mobile', '110000', 'Uploadimage/Pixel-Fold-Porcelain-7592.jpg', 'Home'),
(35, 'mobile', '200000', 'Uploadimage/Redmi-Note-13-White-4884.jpg', 'Home'),
(36, 'Samsung', '50000', 'Uploadimage/20220428_1651142025_140857.png', 'Home'),
(37, 'Samsung gl 20', '110999', 'Uploadimage/sam s24 2 Mint-6535.jpg', 'Home'),
(38, 'Samsung zf1', '200000', 'Uploadimage/sam fold 1.jpg', 'Home'),
(39, 'iPhone 15 pro max', '155999', 'Uploadimage/iPhone-15-pmax-(2)-(1)-6945.jpg', 'Home'),
(40, 'vivo zfo', '11255', 'Uploadimage/vivo-X-Fold2-5G-(3)-4724.jpg', 'Home'),
(41, 'lenovo', '75000', 'Uploadimage/Lenovo-IdeaPad-S100-15AMN7--AMD-Ryzen-5-7520U--Integrated-Graphics-15.jpeg', 'Home'),
(42, 'Car si-1', '11000', 'Uploadimage/Ep28.jpg', 'Home'),
(43, 'cycle si-1', '45000', 'Uploadimage/Ep41.jpg', 'Home'),
(44, 'cre si-3', '4586', 'Uploadimage/Ep38.jpg', 'Home'),
(45, 'si-4', '55000', 'Uploadimage/Pixel-4-(3)-1722.jpg', 'Home'),
(46, 'si-5', '45544', 'Uploadimage/Pixel-7-Snow-9770.jpg', 'Home'),
(47, 'si-6', '255555', 'Uploadimage/iPhone-15-Pro-Max---24KT-Gold-Edition-j-6132.jpg', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(2, 'sifat shaikh', 'ss.dmshaikh355@gmail.com', '01981663443', '123456'),
(3, 'samiul', 'csesifatshaikh@gmail.com', '01724248713', 'samiul@123'),
(11, 'ZIHAD SHAIKH', 'ad770860@gmail.com', '152468', 'zihad1478'),
(12, 'HELENA BEGUM', 'helena@gmail.com', '012547889', 'helena4848'),
(14, 'zim al sh', 'zim@gmail.com', '0125489', '123456'),
(16, 'fahad', 'fahad@gmail.com', '145879632', 'fahad@4587'),
(17, 'rassel', 'rassel@gmail.com', '125478963', 'rassel147852');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
