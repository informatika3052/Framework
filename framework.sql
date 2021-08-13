-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 06:43 PM
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
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `spk_id` int(11) NOT NULL,
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
-- Dumping data for table `history`
--

INSERT INTO `history` (`spk_id`, `plat_number`, `cust_name`, `cust_address`, `mekanik`, `type_kendaraan`, `ser_advisor`, `desc1`, `price1`, `desc2`, `price2`, `total`, `created_at`) VALUES
(2, 'L 5433 GG', 'BAMBANG', 'BULAK BANTENG 10 NO 19', 'ADI PONDANG ', 'dsfds', 'dsfs', 'dvd', 897978, 'dgdgdg', 979789, 1877767, '13 August 2021');

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
(909, 'popopop', 'gjgjgh'),
(1111, 'yudi novanto ', 'kang kung'),
(1212, 'ADI PONDANG', 'JARANG TIDUR'),
(2222, 'PABLO', 'TUKANG RUSUH'),
(3232, 'saipul', 'opopa'),
(4545, '', ''),
(6666, '', ''),
(8888, 'potat', 'sa'),
(67676, 'iuiu', 'uiuiu'),
(86686, 'yujufu', 'jhjjjjjj'),
(87878, 'SULAIMAN ', 'adadadadad'),
(758787, 'ghjyj', 'dddghd'),
(7878686, 'gjgjg', 'ghjgjgj');

-- --------------------------------------------------------

--
-- Table structure for table `req_order`
--

CREATE TABLE `req_order` (
  `id_req_order` int(11) NOT NULL,
  `id_spk` int(11) NOT NULL,
  `nopol` varchar(254) NOT NULL,
  `part1` varchar(254) NOT NULL,
  `qty1` int(11) NOT NULL,
  `perPcs1` int(11) NOT NULL,
  `total1` int(11) NOT NULL,
  `part2` varchar(254) NOT NULL,
  `qty2` int(11) NOT NULL,
  `perPcs2` int(11) NOT NULL,
  `total2` int(11) NOT NULL,
  `part3` varchar(254) NOT NULL,
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
(2, 2, 'L 5433 GG ', 'AIR RADIATOR ', 5, 200000, 1000000, 'KAMPAS REM ', 8, 10000, 80000, 'KAMPAS REM ', 8, 75000, 600000, 1680000, '13 August 2021');

--
-- Triggers `req_order`
--
DELIMITER $$
CREATE TRIGGER `penjualan_barang` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty1
    WHERE name_part = NEW.part1;
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
    WHERE name_part = NEW.part3;
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
-- Triggers `spk`
--
DELIMITER $$
CREATE TRIGGER `InsertSpk` AFTER INSERT ON `spk` FOR EACH ROW insert into history (
    spk_id,
    plat_number,
    cust_name,
    cust_address,
    mekanik,
    type_kendaraan,
    ser_advisor,
    desc1,
    price1,
    desc2,
    price2,
    total,
    created_at)
    VALUES (
   NEW.id,
        NEW.plat_number,
    NEW.cust_name,
    NEW.cust_address,
     NEW.mekanik,
     NEW.type_kendaraan,
    NEW.ser_advisor,
     NEW.desc1,
     NEW.price1,
     NEW.desc2,
    NEW.price2,
    NEW.total,
    NEW.created_at)
$$
DELIMITER ;

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
(12, 'SEKER', 200000, 2),
(13, 'BUSI', 60000, 3),
(14, 'OLI', 50000, 1),
(15, 'KLAKSON', 100000, 4),
(16, 'STANG ', 200000, 10),
(17, 'FULL PUMP', 100000, 32),
(18, 'AIR RADIATOR', 6500, 87),
(19, 'VAN BELT RADIATOR', 800000, 150),
(20, 'SELANG DINAMO ', 75000, 60),
(21, 'KAMPAS REM', 30000, 42),
(23, 'TUAS GARDAN', 200000, 30),
(24, 'PIN SEKER', 600000, 70);

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
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`spk_id`);

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
  ADD KEY `id_spk` (`id_spk`);

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
  MODIFY `id_req_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `req_order_ibfk_1` FOREIGN KEY (`id_spk`) REFERENCES `history` (`spk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
