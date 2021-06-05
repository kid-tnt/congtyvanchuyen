-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 11:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `congtyvanchuyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `comment`) VALUES
(1, 'thangngo', '1@gmail.com', 'thanks'),
(2, 'thangngo', '1@gmail.com', 'Cảm ơn sản phẩm của công ty. Chúng tôi rất hài lòng '),
(3, 'ABC', 'abc@gmail.com', 'sẩn phẩm rất tệ dịch vụ cũng tệ luôn '),
(4, 'ABC', 'abc@gmail.com', 'nhân viên quá tệ'),
(5, 'KD', 'xyz@gmail.com', 'test'),
(6, 'khách hàng', 'khachhang1@gmail.com', 'Dịch vụ công ty rất tốt'),
(7, 'thangngo', 'abc@gmail.com', 'gsgsdg');

-- --------------------------------------------------------

--
-- Table structure for table `lading`
--

CREATE TABLE `lading` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `address_sender` text NOT NULL,
  `address_receiver` text NOT NULL,
  `date_create` varchar(50) NOT NULL,
  `weight` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lading`
--

INSERT INTO `lading` (`ID`, `userID`, `serviceID`, `address_sender`, `address_receiver`, `date_create`, `weight`, `status`) VALUES
(6, 4, 1, 'Ha Noi', 'HP', '2021-06-04 08:14:29', 15, 'đã tiếp nhận'),
(15, 4, 1, 'SG', 'HN', '2021-06-05 08:08:51', 15, 'đã tiếp nhận'),
(24, 4, 2, 'Hà Nội', 'Hải Phòng', '2021-06-05 15:19:56', 21, 'đã giao hàng');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `name`, `description`) VALUES
(1, 'chuyển phát nhanh ', 'tốc độ nhanh an toàn chính xác  '),
(2, 'chuyển phát tiết kiệm', 'an tâm tiết kiệm kịp thời'),
(3, 'chuyển phát hỏa tốc ', 'giao ngay trong 24h'),
(5, 'vận chuyển quốc  tế', 'cung cấp dịch vụ vận chuyển xuyên quốc gia ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `password`, `fullname`, `phone`, `address`, `role`) VALUES
(1, 'admin@admin.com', 'b18dcat240', 'Ngo Van Thang', NULL, NULL, 0),
(4, '1@gmail.com', '123456', 'Đinh Công Mạnh', '123456789', 'Cần Thơ', 1),
(8, '2@gmail.com', '123456', 'Hiếu Laptop', '0123456789', 'PTIT', 1),
(15, '3@gmail.com', '123456', '', '', '', 1),
(16, '4@gmail.com', '123456', '', '', '', 1),
(17, '6@gmail.com', '123456', 'Chú Sáu fake', '1111111111111111', 'Mỗ Lao Hà Đông', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lading`
--
ALTER TABLE `lading`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lading`
--
ALTER TABLE `lading`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lading`
--
ALTER TABLE `lading`
  ADD CONSTRAINT `lading_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `lading_ibfk_2` FOREIGN KEY (`serviceID`) REFERENCES `service` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
