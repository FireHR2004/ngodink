-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-comerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `printer_tb`
--

CREATE TABLE `printer_tb` (
  `IdPrinter` int(11) NOT NULL,
  `NamaPrinter` varchar(50) NOT NULL,
  `SpesifikasiPrinter` varchar(255) NOT NULL,
  `HargaPrinter` varchar(50) NOT NULL,
  `UserIdUser` int(10) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer_tb`
--

INSERT INTO `printer_tb` (`IdPrinter`, `NamaPrinter`, `SpesifikasiPrinter`, `HargaPrinter`, `UserIdUser`, `image`) VALUES
(33, 'Canon 23', 'Canon Sukas 23', '2000000', NULL, ''),
(34, 'Canon', 'Canon 235', '1500000', NULL, 'mf15.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `IdTransaksi` int(11) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `UserIdUser` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `Printer_tbIdPrinter` int(10) NOT NULL,
  `UserIdUser2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`IdTransaksi`, `Jumlah`, `UserIdUser`, `status`, `Printer_tbIdPrinter`, `UserIdUser2`) VALUES
(37, 2000000, 1, 2, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Username`, `Password`) VALUES
(1, 'Muhammad Fathir Ikhsan', 'Codelyoko123'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printer_tb`
--
ALTER TABLE `printer_tb`
  ADD PRIMARY KEY (`IdPrinter`),
  ADD UNIQUE KEY `UserIdUser` (`UserIdUser`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IdTransaksi`),
  ADD UNIQUE KEY `Printer_tbIdPrinter` (`Printer_tbIdPrinter`),
  ADD KEY `UserIdUser2` (`UserIdUser2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printer_tb`
--
ALTER TABLE `printer_tb`
  MODIFY `IdPrinter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `IdTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `printer_tb`
--
ALTER TABLE `printer_tb`
  ADD CONSTRAINT `printer_tb_ibfk_1` FOREIGN KEY (`UserIdUser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`Printer_tbIdPrinter`) REFERENCES `printer_tb` (`IdPrinter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`UserIdUser2`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
