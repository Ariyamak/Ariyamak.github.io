-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 08:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbus_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_acc` int(11) NOT NULL,
  `license_no` varchar(10) NOT NULL,
  `id_emp_driver` char(13) NOT NULL,
  `id_emp_ticker` char(13) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `current_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_price` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `gas` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_acc`, `license_no`, `id_emp_driver`, `id_emp_ticker`, `id_ticket`, `username`, `current_time`, `total_price`, `tax`, `gas`) VALUES
(1, '15-3441', '145080068569', '340000870083', 1, 'Meng', '2017-04-24 00:00:00', '4770.00', '50.00', '792.01'),
(2, '15-3442', '3310101342278', '1310700008123', 3, 'Mod', '2017-04-24 03:18:18', '5678.00', '50.00', '812.36'),
(3, '15-3441', '145080068569', '340000870083', 2, 'Meng', '2017-04-24 00:00:00', '4852.00', '50.00', '792.01'),
(4, '15-3442', '3310101342278', '1310700008123', 4, 'Mod', '2017-04-24 03:18:18', '1810.00', '50.00', '812.36'),
(5, '14-6591', '145080068569', '3360900212359', 5, 'Meng', '2017-04-24 00:00:00', '5000.00', '50.00', '792.01'),
(6, '15-3441', '3350300463717', '1310700008123', 6, 'Mod', '2017-04-24 03:18:18', '4892.00', '50.00', '812.36'),
(7, '14-9421', '145080068569', '3360900212359', 7, 'Meng', '2017-04-24 00:00:00', '4571.00', '50.00', '792.01'),
(8, '15-2035', '1310700008123', '3360900212359', 8, 'Mod', '2017-04-24 03:18:18', '4881.00', '50.00', '812.36');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `licence_no` varchar(10) NOT NULL,
  `id_reciept` int(11) DEFAULT NULL,
  `id_insur` int(11) DEFAULT NULL,
  `bus_no` int(2) NOT NULL,
  `bus_id` int(2) NOT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `engines_no` varchar(30) DEFAULT NULL,
  `chasis_type` varchar(30) DEFAULT NULL,
  `body_type` varchar(30) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `width` decimal(5,2) DEFAULT NULL,
  `capacity` int(3) DEFAULT NULL,
  `fuel_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`licence_no`, `id_reciept`, `id_insur`, `bus_no`, `bus_id`, `brand`, `engines_no`, `chasis_type`, `body_type`, `color`, `year`, `width`, `capacity`, `fuel_type`) VALUES
('14-6591', 1238, 123801, 12, 38, 'NISSON', 'CBF87F-04190', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('14-9416', 1214, 121401, 12, 14, 'NISSON', 'CBF84F-03511', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('14-9417', 1243, 124301, 12, 43, 'NISSON', 'CBF84F-03523', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('14-9419', 1212, 121201, 12, 12, 'NISSON', 'CBF84F-03915', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('14-9421', 1234, 123401, 12, 34, 'NISSON', 'CBF84F-03931', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('15-2035', 618, 61801, 6, 18, 'NISSON', 'CBF84F-03877', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('15-2037', 612, 61201, 6, 12, 'NISSON', 'CBF87F-04012', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('15-2054', 1241, 124101, 12, 41, 'NISSON', 'WDB675274-64-068851', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('15-3441', 1206, 120601, 12, 6, 'NISSON', 'CBF84F-04193', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL),
('15-3442', 1201, 120101, 12, 1, 'NISSON', 'CBF84F-04189', 'รภโดยสารประจำทาง', 'NISSON', 'ส้ม น้ำตาล', 1994, '999.99', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_comp` int(11) NOT NULL,
  `name_comp` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_comp`, `name_comp`, `tel`, `fax`) VALUES
(1, 'มิตรแท้ประกันภัย', '1741', '026407777'),
(2, 'สินมั่นคงประกันภัย จำกัด (มหาชน)', '023787000', '023773322');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `personal_id` char(50) NOT NULL,
  `id_emp` char(7) NOT NULL,
  `name_emp` varchar(50) NOT NULL,
  `lastname_emp` varchar(50) DEFAULT NULL,
  `birth_emp` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `type_emp` int(1) NOT NULL,
  `conductor_licence_no` varchar(20) DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `note` varchar(150) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`personal_id`, `id_emp`, `name_emp`, `lastname_emp`, `birth_emp`, `address`, `type_emp`, `conductor_licence_no`, `expire_date`, `tel`, `note`, `status`) VALUES
('1310700008123', 'B_2', 'น.ส. สมบัติ', 'เภาตะณะ', '1984-03-09', '34 หมู่ที่ 6 ต.ไพศาล ประโคนชัย จ.บุรีรัมย์', 2, 'กท.00399/48', '2017-05-09', '', 'ชอบป่วย', 1),
('145080068569', 'D_1', 'นาย ศักดา', 'จันทร์คำหอม', '1990-09-09', '23 หมู่ที่ 10 ต.อัคคะคำ อ.โพธิ์ชัย จ.ร้อยเอ็ด', 1, 'ท.2-1รอ-00348/56', '2016-05-30', '12345678911', 'หยุดงานบ่อย', 0),
('3101200879001', 'D_3', 'นาย อนุชิต', 'ประมาณ', '1977-08-14', '441 ถ.ท่าดินแดง แขวง สมเด็จเจ้าพระยา เขต คลองสาน กรุงเทพมฯ', 1, 'ท.2-1 สป.01140/54', '2017-12-19', '095-780-8651', 'เฉยๆ', 1),
('3101201908438', 'D_6', 'นาย ยงยุทธ', 'แจ่มจำรัส', '1961-10-31', '1106 แขวง ดินเเดง เขต ดินแดง กรุงเทพฯ', 1, 'ท.2-กท.00581/40', '2018-03-12', '02-644-0549', 'ขี้เกียจสุดๆ', 1),
('3310101342278', 'D_5', 'นาย สมภาร', 'ปรากฏหาญ', '1970-08-21', '71 หมู่ที่ 5 ต.นิคม อ.สตึก จ.บุรีรัมย์', 1, 'ท.2-กท.03315/51', '0000-00-00', '', 'ป่วยเป็นเบาหวาน', 1),
('3330300212790', 'D_4', 'นาย สำราญ', 'แก้วคำ', '1968-02-16', '18/1 หมู่ที่1 ต.ดูน อ.กันทรารมย์ จ.ศรีสะเกษ', 1, 'ท.4-1กท.00010/54', '2019-10-19', '', 'เอาแต่ใจ', 1),
('3350300463717', 'D_2', 'นาย ธนพล', 'จันทร์เจริญ', '1979-08-29', '65 ซ.รังสิต-นครนายก 16 ต.ประชาธิปัตย์ อ.ธัญบุรี จ.ปทุมธานี', 1, 'ท.2-กท.02058/50', '2016-04-17', '', 'หูเบา', 1),
('3360900212359', 'B_3', 'น.ส. วงค์ษา', 'สมวงค์', '1968-04-17', 'อ.เทพสถิต จใชัยภูมิ', 2, 'กท.00475/59', '2019-09-20', '', 'พูดมากทำงานเก่ง', 1),
('340000870083', 'B_1', 'น.ส. บุญรวย', 'จาระงับ', '2017-02-05', '48 หมู่ที่ 4 ต.สะอาดไชยศรี อ.ดอนจาก จ.กาฬสินธุ์', 2, '1สป.000054/57', '2017-09-05', '098-170-3100', 'ชอบขอยืมเงิน', 1);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id_insur` int(11) NOT NULL,
  `id_comp` int(11) NOT NULL,
  `policy_no` varchar(15) NOT NULL,
  `type` int(1) NOT NULL,
  `insur_start` date NOT NULL,
  `insur_ens` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id_insur`, `id_comp`, `policy_no`, `type`, `insur_start`, `insur_ens`, `total_price`) VALUES
(61201, 2, '0107537001641', 2, '2015-12-31', '2016-12-31', '3738.56'),
(61201, 1, 'ฐช-VMF-5939219', 1, '2015-05-16', '2016-05-16', '12928.77'),
(61801, 2, '0107537001641', 2, '2015-12-31', '2016-12-31', '3738.58'),
(61801, 1, 'ฐช-VMF-5662643', 1, '2015-02-13', '2016-02-13', '3738.58'),
(120101, 2, '0107537001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(120101, 1, 'ฐช-VMF-6458180', 1, '2016-02-27', '2017-02-27', '20925.95'),
(120601, 2, '0107537001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(120601, 1, 'ฐช-VMF-5768959', 1, '2016-02-26', '2017-02-27', '29894.82'),
(121201, 2, '0107538001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(121201, 1, 'ฐช-VMF-7972516', 1, '2015-09-22', '2016-09-22', '25515.01'),
(121401, 2, '0107537001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(121401, 1, 'ฐช-VMF-8049024', 1, '2016-03-11', '2017-03-11', '10582.36'),
(123401, 2, '0107537001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(123401, 1, 'ฐช-VMF-8060248', 1, '2016-03-11', '2017-03-11', '14109.46'),
(123801, 2, '0107537001641', 2, '2015-12-31', '2016-12-31', '3738.58'),
(123801, 1, 'ฐช-VMF-8060278', 1, '2016-03-11', '2017-03-11', '10582.36'),
(124101, 2, '0107537001641', 2, '2015-12-31', '2016-12-31', '3738.58'),
(124101, 1, 'ฐช-VMF-5939219', 1, '2015-06-30', '2016-06-30', '0.00'),
(124301, 2, '0107537001641', 2, '2015-06-30', '2016-06-30', '3738.58'),
(124301, 1, 'ฐช-VMF-8060226', 1, '2016-03-11', '2017-03-11', '12345.37');

-- --------------------------------------------------------

--
-- Table structure for table `logaccount`
--

CREATE TABLE `logaccount` (
  `id_log` int(11) NOT NULL,
  `id_acc` int(11) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `note` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logaccount`
--

INSERT INTO `logaccount` (`id_log`, `id_acc`, `username`, `date_time`, `note`) VALUES
(1, 1, 'Meng', '2017-04-01', 'เสร็จสิ้น'),
(2, 2, 'Mod', '2017-04-02', 'ส่งรถช้า'),
(3, 3, 'Meng', '2017-04-03', 'เสร็จสิ้น'),
(4, 4, 'Mod', '2017-04-04', 'เสร็จสิ้น'),
(5, 5, 'Meng', '2017-04-05', 'เสร็จสิ้น'),
(6, 6, 'Mod', '2017-04-03', 'ส่งรถช้า'),
(7, 7, 'Meng', '2017-04-07', 'เสร็จสิ้น'),
(8, 8, 'Mod', '2017-04-09', 'เสร็จสิ้น');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id_maint` int(11) NOT NULL,
  `licence_no` varchar(10) DEFAULT NULL,
  `last_check` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `note_maint` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id_recd` int(11) NOT NULL,
  `id_emp` char(7) NOT NULL,
  `date_time` datetime NOT NULL,
  `note_recd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taxation`
--

CREATE TABLE `taxation` (
  `id_reciept` int(11) NOT NULL,
  `reciept_no` varchar(50) DEFAULT NULL,
  `installment_tax` varchar(50) DEFAULT NULL,
  `rate_tax` decimal(10,2) DEFAULT NULL,
  `date_expire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taxation`
--

INSERT INTO `taxation` (`id_reciept`, `reciept_no`, `installment_tax`, `rate_tax`, `date_expire`) VALUES
(612, 'ก13146823/600004237', '1/60-4/60', '1350.00', '2017-12-31'),
(618, 'ก13146152/600003473', '1/60-4/60', '1350.00', '2017-12-31'),
(1201, 'ก12525484/590017469', '3/59-2/60', '1350.00', '2017-06-30'),
(1206, 'ก12525726/590017718', '3/59-2/60', '1350.00', '2017-06-30'),
(1212, 'ก12525725/590017717', '3/59-2/60', '1350.00', '2017-06-30'),
(1214, 'ก12525729/590017721', '3/59-2/60', '1350.00', '2017-06-30'),
(1234, 'ก12525730/590017722', '3/59-2/60', '1350.00', '2017-06-30'),
(1238, 'ก12697101/600000594', '1/60-4/60', '1350.00', '2017-12-31'),
(1241, 'ก13146151/600003472', '1/60-4/60', '1350.00', '2017-12-31'),
(1243, 'ก12525731/590017723', '3/59-2/60', '1350.00', '2017-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `start_ticket` char(6) NOT NULL,
  `end_ticket` char(6) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `license_no` varchar(10) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `start_ticket`, `end_ticket`, `price`, `license_no`, `count`) VALUES
(1, '612001', '612524', '9.00', '15-3441', 523),
(2, '612525', '612999', '9.00', '15-3441', 523),
(3, '613001', '612569', '9.00', '15-3442', 568),
(4, '613570', '612999', '9.00', '15-3442', 568),
(5, '614001', '614524', '9.00', '14-6591', 523),
(6, '614525', '614999', '9.00', '15-3441', 523),
(7, '615001', '615569', '9.00', '14-9421', 568),
(8, '615570', '615999', '9.00', '15-2035', 568);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(5) NOT NULL,
  `password` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Meng', '12345678'),
('Mod', '12345678'),
('Pueng', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_acc`),
  ADD KEY `FK_account_user` (`username`),
  ADD KEY `FK_account_employee` (`id_emp_driver`),
  ADD KEY `FK_account_employee_2` (`id_emp_ticker`),
  ADD KEY `FK_account_bus` (`license_no`),
  ADD KEY `FK_account_ticket` (`id_ticket`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`licence_no`,`bus_no`,`bus_id`),
  ADD KEY `FK_bus_taxation` (`id_reciept`),
  ADD KEY `FK_bus_insurance` (`id_insur`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`personal_id`,`id_emp`,`type_emp`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id_insur`,`policy_no`,`id_comp`),
  ADD KEY `FK_insurance_company` (`id_comp`);

--
-- Indexes for table `logaccount`
--
ALTER TABLE `logaccount`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `FK_logaccount_account` (`id_acc`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_maint`),
  ADD KEY `FK_maintenance_bus` (`licence_no`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id_recd`),
  ADD KEY `FK_record_employee` (`id_emp`);

--
-- Indexes for table `taxation`
--
ALTER TABLE `taxation`
  ADD PRIMARY KEY (`id_reciept`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`,`start_ticket`,`end_ticket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FK_account_bus` FOREIGN KEY (`license_no`) REFERENCES `bus` (`licence_no`),
  ADD CONSTRAINT `FK_account_employee` FOREIGN KEY (`id_emp_driver`) REFERENCES `employee` (`personal_id`),
  ADD CONSTRAINT `FK_account_employee_2` FOREIGN KEY (`id_emp_ticker`) REFERENCES `employee` (`personal_id`),
  ADD CONSTRAINT `FK_account_ticket` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`),
  ADD CONSTRAINT `FK_account_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `FK_bus_insurance` FOREIGN KEY (`id_insur`) REFERENCES `insurance` (`id_insur`),
  ADD CONSTRAINT `FK_bus_taxation` FOREIGN KEY (`id_reciept`) REFERENCES `taxation` (`id_reciept`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `FK_insurance_company` FOREIGN KEY (`id_comp`) REFERENCES `company` (`id_comp`);

--
-- Constraints for table `logaccount`
--
ALTER TABLE `logaccount`
  ADD CONSTRAINT `FK_logaccount_account` FOREIGN KEY (`id_acc`) REFERENCES `account` (`id_acc`);

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `FK_maintenance_bus` FOREIGN KEY (`licence_no`) REFERENCES `bus` (`licence_no`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `FK_record_employee` FOREIGN KEY (`id_emp`) REFERENCES `employee` (`personal_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
