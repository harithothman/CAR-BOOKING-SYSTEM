-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 09:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `b_id` int(11) NOT NULL,
  `b_customer` varchar(15) NOT NULL,
  `b_vehicle` varchar(10) NOT NULL,
  `b_pickupdate` date NOT NULL,
  `b_returndate` date NOT NULL,
  `b_totalprice` int(11) NOT NULL,
  `b_email` varchar(20) NOT NULL,
  `b_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`b_id`, `b_customer`, `b_vehicle`, `b_pickupdate`, `b_returndate`, `b_totalprice`, `b_email`, `b_status`) VALUES
(20, '012', 'BHL1234', '2023-01-29', '2023-01-30', 300, '', 3),
(36, '012', 'VDY2314', '2023-01-30', '2023-02-06', 2800, '', 3),
(37, '012', 'JEN2367', '2023-01-31', '2023-02-01', 250, '', 1),
(38, '012', 'NG 1122', '2023-02-02', '2023-02-17', 3000, '', 1),
(39, '020327011456', 'JEN2367', '2023-02-01', '2023-02-09', 2000, '', 1),
(40, '020327011456', 'BHL1234', '2023-02-16', '2023-02-17', 300, '', 1),
(41, '020327011456', 'NG 1122', '2023-02-07', '2023-02-09', 400, '', 1),
(42, '020327011456', 'VDY2314', '2023-02-14', '2023-02-15', 400, '', 1),
(43, '020208870040', 'JWQ 9091', '2023-02-01', '2023-02-08', 2800, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(5) NOT NULL,
  `s_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_id`, `s_desc`) VALUES
(1, 'RECEIVED'),
(2, 'APPROVED'),
(3, 'REJECTED'),
(4, 'CANCELLED');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` varchar(15) NOT NULL,
  `u_pwd` varchar(100) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_address` varchar(200) DEFAULT NULL,
  `u_contact` varchar(20) NOT NULL,
  `u_license` varchar(20) NOT NULL,
  `u_type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_pwd`, `u_name`, `u_address`, `u_contact`, `u_license`, `u_type`) VALUES
('012', '$2y$10$K4hIYKHp2QbSWKa7z.ceveLJ3aZbfFnamLz04usMk6nvIl7NojNNG', 'IQMAL', '110, Jalan Utama 8, Taman Mutiara Rini, Skudai, 81300, Johor', '0127021245', 'JEN1234', '2'),
('013', '$2y$10$Pe6AKnqmf3YGlUuo5XJBIeW.Q/KVOSpbWeVFzJvcNoTxc9c2DM1ZG', 'IKMAL', 'johor\r\nd. serambi', '0127021245', 'HAI', '2'),
('014', '$2y$10$Ysfh/UlPwkbcQDHTLmIX3e8UMPrLpTaECFw96hU2BzCnED3HREEqC', 'hu', 'johor\r\nd. serambi', '0167747505', 'admin', '2'),
('016', '$2y$10$cloOp1nmSPvPObaZrVT8tukqv/0gY22IfGfaXFIU5PvlyXXuIjjYG', 'HUHU', 'johor\r\nd. serambi', '0127021245', 'admin', '2'),
('017', '$2y$10$4iN7BrXeo6zU3B9PV01aW.cUKAMRiQ8wG54MODG.UWbdO6TwbOqDu', 'ALIE', 'johor\r\nd. serambi', '0127021245', 'admin', '2'),
('020208870039', '$2y$10$NJsQkFIz9BWe.yf9dGeZXe3k6s8Z53BJWAFLJ5bdHqDoCBGBGjJba', 'MUHAMMAD HARITH HAKIM BIN OTHMAN', 'NO 110, JALAN UTAMA 8,\r\nTAMAN MUTIARA RINI', '0127021245', 'LUIH', '1'),
('020208870040', '$2y$10$94gZ3eA9h52XOg1pP1EUu.rUJbbV0sCGvqNWI44JOBtRu4HE94u7G', 'MAL SIS', 'NO 110, JALAN UTAMA 8,\r\nTAMAN MUTIARA RINI', '0127021245', 'JAVP', '2'),
('020327011456', '$2y$10$7WkjauU/6dc0ncXMGoWkzu/MNcOveJLy.qDXhpIMz./znfXWSF/1G', 'SUAIDAH FARHANA', 'NO 110, JALAN UTAMA 8,\r\nTAMAN MUTIARA RINI', '0127021245', 'JAVP', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usertype`
--

CREATE TABLE `tb_usertype` (
  `ut_type` varchar(5) NOT NULL,
  `ut_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_usertype`
--

INSERT INTO `tb_usertype` (`ut_type`, `ut_desc`) VALUES
('1', 'Admin'),
('2', 'Cuztomer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehicle`
--

CREATE TABLE `tb_vehicle` (
  `v_reg` varchar(10) NOT NULL,
  `v_type` text NOT NULL,
  `v_model` varchar(10) NOT NULL,
  `v_year` int(4) DEFAULT NULL,
  `v_price` int(255) NOT NULL,
  `v_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehicle`
--

INSERT INTO `tb_vehicle` (`v_reg`, `v_type`, `v_model`, `v_year`, `v_price`, `v_pic`) VALUES
('BHL1234', 'SEDAN', 'Proton', 2002, 300, 'PROTON.jpg'),
('JEN2367', 'HATCHBACK', 'Honda', 2022, 250, 'HONDA.jpg'),
('JWQ 9091', 'SEDAN', 'PROTON', 2022, 400, 'MUSTANG.jpg'),
('NG 1122', 'SUV', 'SUBARU', 2022, 200, 'SUBARU.jpg'),
('VDY2314', 'HATCHBACK', 'Perodua', 2022, 400, 'PRODUA.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_customer` (`b_customer`),
  ADD KEY `b_vehicle` (`b_vehicle`),
  ADD KEY `b_status` (`b_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_type` (`u_type`);

--
-- Indexes for table `tb_usertype`
--
ALTER TABLE `tb_usertype`
  ADD PRIMARY KEY (`ut_type`);

--
-- Indexes for table `tb_vehicle`
--
ALTER TABLE `tb_vehicle`
  ADD PRIMARY KEY (`v_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`b_customer`) REFERENCES `tb_user` (`u_id`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`b_vehicle`) REFERENCES `tb_vehicle` (`v_reg`),
  ADD CONSTRAINT `tb_booking_ibfk_3` FOREIGN KEY (`b_status`) REFERENCES `tb_status` (`s_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`u_type`) REFERENCES `tb_usertype` (`ut_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
