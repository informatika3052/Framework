-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 04:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `mekanik`
--

CREATE TABLE `mekanik` (
  `id_mekanik` int(11) NOT NULL,
  `name_mekanik` varchar(254) NOT NULL,
  `divisi` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mekanik`
--

INSERT INTO `mekanik` (`id_mekanik`, `name_mekanik`, `divisi`) VALUES
(555, 'ISAL', 'JARANG LIHAT'),
(1111, 'SULAIMAN', 'JARANG TIDUR'),
(1212, 'adi juliari', 'jarang dirumah'),
(2222, 'HARIANTO', 'JARANG SADAR'),
(3232, 'yudi novanto', 'jarang maem'),
(4444, 'OPIK', 'JARANG HUMANIS'),
(4545, 'gerry prabowo', 'jarang naik');

-- --------------------------------------------------------

--
-- Table structure for table `req_order`
--

CREATE TABLE `req_order` (
  `id_req_order` int(11) NOT NULL,
  `id_spk` int(11) NOT NULL,
  `nopol` varchar(254) NOT NULL,
  `part1` int(11) NOT NULL,
  `qty1` int(11) NOT NULL,
  `perPcs1` int(11) NOT NULL,
  `total1` int(11) NOT NULL,
  `part2` int(11) NOT NULL,
  `qty2` int(11) NOT NULL,
  `perPcs2` int(11) NOT NULL,
  `total2` int(11) NOT NULL,
  `part3` int(11) NOT NULL,
  `qty3` int(11) NOT NULL,
  `perPcs3` int(11) NOT NULL,
  `total3` int(11) NOT NULL,
  `akumulasi_total` int(11) NOT NULL,
  `tgl_req_order` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_order`
--

INSERT INTO `req_order` (`id_req_order`, `id_spk`, `nopol`, `part1`, `qty1`, `perPcs1`, `total1`, `part2`, `qty2`, `perPcs2`, `total2`, `part3`, `qty3`, `perPcs3`, `total3`, `akumulasi_total`, `tgl_req_order`) VALUES
(1, 1, 'L 5656 GK  ', 12, 5, 200000, 1000000, 13, 8, 10000, 80000, 0, 8, 80000, 640000, 1720000, '23 July 2021'),
(4, 2, 'L 5433 GG ', 13, 5, 200000, 1000000, 14, 8, 456, 3648, 12, 8, 80000, 640000, 1643648, '23 July 2021'),
(5, 3, 'L 9090 LL ', 15, 5, 200000, 1000000, 15, 9, 10000, 90000, 14, 8, 80000, 640000, 1730000, '23 July 2021'),
(6, 4, 'L 7070 HH ', 15, 5, 200000, 1000000, 15, 8, 10000, 80000, 17, 8, 90000, 720000, 1800000, '24 July 2021');

--
-- Triggers `req_order`
--
DELIMITER $$
CREATE TRIGGER `penjualan_barang` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty1
    WHERE kd_part = NEW.part1;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualan_barang_2` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty2
    WHERE kd_part = NEW.part2;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualan_barang_3` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty3
    WHERE kd_part = NEW.part3;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `id` int(11) NOT NULL,
  `plat_number` varchar(254) NOT NULL,
  `cust_name` varchar(254) NOT NULL,
  `cust_address` varchar(254) NOT NULL,
  `mekanik` varchar(254) NOT NULL,
  `type_kendaraan` varchar(254) NOT NULL,
  `ser_advisor` varchar(254) NOT NULL,
  `desc1` varchar(254) NOT NULL,
  `price1` int(11) NOT NULL,
  `desc2` varchar(254) NOT NULL,
  `price2` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`id`, `plat_number`, `cust_name`, `cust_address`, `mekanik`, `type_kendaraan`, `ser_advisor`, `desc1`, `price1`, `desc2`, `price2`, `total`, `created_at`) VALUES
(1, 'L 5433 GG', 'BAMBANG', 'BULAK BANTENG 10 NO 19', 'adi juliari ', 'HONDA', 'ANU', 'GANTI OLI ,BUSI', 3000000, 'GANTI SEKER', 8000000, 11000000, '23 July 2021'),
(2, 'L 5656 GK ', 'BAGIO', 'TAMBAK DALAM 5 NO 67', 'yudi novanto ', 'AVANZA', 'JKA', 'GANTI PLAT ', 70000, 'GANTI RESO', 89000, 159000, '23 July 2021'),
(3, 'L 9090 LL', 'LEO', 'PETEMON 3 NO 89', 'adi juliari ', 'TOYOTA', 'ATK', 'GANTI LAMPU', 80000, 'GANTI FILTER', 90000, 170000, '23 July 2021'),
(4, 'L 8080 FF', 'TIO', 'JOLOTUNDO 9 NO 90 ', 'SULAIMAN ', 'CIVIC', 'OOP', 'GANTI SEKRING', 90000, 'GANTI RADIATOR', 700000, 790000, '24 July 2021'),
(5, 'L 7070 HH', 'HANAFI ', 'GENTENG 8 NO 77', 'SULAIMAN ', 'HILUX', 'KKO', 'GANTI OLI ', 800000, 'GANTI SELANG BENSIN', 700000, 1500000, '24 July 2021');

-- --------------------------------------------------------

--
-- Table structure for table `stock_part`
--

CREATE TABLE `stock_part` (
  `kd_part` int(11) NOT NULL,
  `name_part` varchar(254) NOT NULL,
  `hr_part` int(11) NOT NULL,
  `t_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_part`
--

INSERT INTO `stock_part` (`kd_part`, `name_part`, `hr_part`, `t_part`) VALUES
(12, 'SEKER', 200000, 17),
(13, 'BUSI', 600000, 11),
(14, 'OLI', 50000, 9),
(15, 'KLAKSON', 600000, -12),
(16, 'STANG ', 100000, 10),
(17, 'FULL PUMP', 100000, 32),
(18, 'AIR RADIATOR', 6500, 100),
(19, 'VAN BELT RADIATOR', 800000, 150),
(20, 'SELANG DINAMO ', 75000, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'adi', 'adi@gmail.com', 12345),
(2, 'adam', 'adam@gmail.com', 5758);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`id_mekanik`);

--
-- Indexes for table `req_order`
--
ALTER TABLE `req_order`
  ADD PRIMARY KEY (`id_req_order`),
  ADD KEY `fk_vendor` (`id_spk`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_part`
--
ALTER TABLE `stock_part`
  ADD PRIMARY KEY (`kd_part`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `req_order`
--
ALTER TABLE `req_order`
  MODIFY `id_req_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `req_order`
--
ALTER TABLE `req_order`
  ADD CONSTRAINT `fk_vendor` FOREIGN KEY (`id_spk`) REFERENCES `spk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
