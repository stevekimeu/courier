-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phone` int(15) NOT NULL,
  `message` text NOT NULL,
  `sentdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `sentdate`) VALUES
(4, 'Stephen Musyoka', 'stevekimeu@gmail.com', 711648268, 'I want to sell all my animals and buy a land, kindly get me a buyer', '2021-09-01 13:22:50'),
(5, 'Stella Omondi', 'stacyoloo@yahoo.com', 236598745, 'The password is working', '2021-09-03 22:11:04'),
(6, 'Moses Nyangau', 'mosesnyanngau@yahoo.com', 2147483647, 'the password has been reset and i cant login to my account\r\n', '2021-09-05 20:19:30'),
(7, 'Stephen Musyoka', 'stenekimeu@gmail.com', 769903170, 'The system is very fine', '2022-01-24 03:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `unique_key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `unique_key`, `expDate`) VALUES
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ca32d48f1a', '2021-08-31 13:32:06'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa542096ba', '2021-08-31 13:32:52'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ce6113539d', '2021-08-31 13:33:54'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f6474556f2c59973', '2021-08-31 13:34:47'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f647456f59b2895a', '2021-08-31 13:35:47'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745663bfe233b', '2021-08-31 13:38:05'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745f7641662b9', '2021-08-31 13:38:35'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745173d056500', '2021-08-31 14:38:38'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745a2b86ebef3', '2021-08-31 14:39:35'),
('stevekimeu@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d466107a56', '2021-08-31 15:28:52'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE5dfec3ca16', '2021-08-31 15:33:11'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGEa9bcfe91ef', '2021-08-31 15:40:08'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE39384e95ed', '2021-08-31 16:38:19'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE9dd793dd59', '2021-08-31 16:39:33'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE4bd21afe20', '2021-08-31 17:37:34'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE288dc88bd4', '2021-08-31 17:45:25'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE62ff2df1c1', '2021-08-31 18:00:13'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE19d1d1fc0d', '2021-08-31 19:09:41'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE3288522377', '2021-08-31 19:41:21'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE41bcf8063b', '2021-08-31 19:55:07'),
('dorcasmutisya10@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGEe07da23454', '2021-08-31 20:50:22'),
('dorcasmutisya1@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE24d9760261', '2021-08-31 20:59:27'),
('stephen.musyoka@tseikurutti.ac.ke', 'vŽxJ¨ý¹¸þ‡¾†öGE7e4d5b81f7', '2021-08-31 21:00:05'),
('stephen.musyoka@ict.com', 'vŽxJ¨ý¹¸þ‡¾†öGE6411afb48c', '2021-09-10 08:52:09'),
('stevekimeu@gmail.com', 'vŽxJ¨ý¹¸þ‡¾†öGE7087330b73', '2021-09-10 08:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `age` varchar(12) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `auction_date` date NOT NULL,
  `description` varchar(40) NOT NULL,
  `price` varchar(20) NOT NULL,
  `paymentmethod` varchar(20) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT current_timestamp(),
  `postedby` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `category`, `age`, `weight`, `location`, `sex`, `auction_date`, `description`, `price`, `paymentmethod`, `picture`, `Created_On`, `postedby`) VALUES
(1, 'Goats', '23', '20', 'Tana River County, Kenya', 'Crossbred', '2022-02-24', 'Galloway', '23,000', 'Cash', 'goat2.jpg', '2022-01-24 14:57:11', 'stevekimeu@gmail.com'),
(2, 'Goats', '30', '25', 'Isiolo County, Kenya', 'Crossbred', '2022-02-26', 'Gelbvieh', '30,000', 'Cash', 'goat1.jpg', '2022-01-24 15:00:06', 'dorcasmutisya10@gmail.com'),
(3, 'Goats', '25', '30', 'Nakuru County, Kenya', 'Crossbred', '2022-03-09', 'Salers', '31,000', 'Cash', 'goat4.jpg', '2022-01-24 15:01:33', 'dorcasmutisya10@gmail.com'),
(4, 'Dairy Cattle', '45', '150', 'Wajir County, Kenya', 'Crossbred', '2022-02-28', 'Guernsey', '78,000', 'Cash', '7. Hereford.jpg', '2022-01-24 15:04:22', 'dorcasmutisya10@gmail.com'),
(5, 'Dairy Cattle', '56', '200', 'Narok County, Kenya', 'Crossbred', '2022-02-10', 'Ayrshire', '120,000', 'Cash', '13. Shorthorn.jpg', '2022-01-24 15:07:22', 'dorcasmutisya10@gmail.com'),
(7, 'Beef Cattle', '56', '456', 'Marsabit County, Kenya', 'Crossbred', '2022-03-03', 'Aberdeen Angus', '125487', 'Cash', '3 Brahman.jpg', '2022-01-24 16:06:01', 'dorcasmutisya10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cid` int(10) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `region` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cid`, `manager_name`, `address`, `email`, `phonenumber`, `region`, `password`, `reg_date`) VALUES
(1, 'manza', 'wote,90300 makueni', 'manza@gmail.com', '0703977431', 'wote,makueni', 'manza', '2017-01-04 09:25:21'),
(2, 'kiilu', 'makindu,makueni', 'kiilu@gmail.com', '0797845678', 'makindu makueni', 'kiilu', '2017-02-02 09:40:42'),
(3, 'kioko', 'machakos', 'kioko@gmail.com', '07009876534', 'machakos-fast', 'kioko', '2017-01-30 17:50:34'),
(4, 'admin', 'ertyui8o', 'josephatkiokom@gmail.com', '0718721089', 'long Courier - Nairobi', 'joshua', '2017-03-07 13:48:01'),
(5, 'Stephen Musyoka', 'Kalawa', 'stevekimeu@gmail.com', '0711648268', '', 'kimeumusyoka', '2021-08-17 13:06:06'),
(6, 'Moffat', 'Rift Valley', 'stenekimeu@gmail.com', '0769903170', 'Rift Valley', 'Nairobi', '2021-08-17 13:13:27'),
(7, 'admin', 'wer', 'stenekimeu@gmail.com', '1256', '154', 'festus2018', '2021-08-18 19:52:42'),
(8, 'Stephen Musyoka', '58-90126 Kalawa', 'stenekimeu@gmail.com', '0711648268', '', '123456', '0000-00-00 00:00:00'),
(9, 'Stephen Musyoka', '58-90126 Kalawa', 'stenekimeu@gmail.com', '0711648268', 'Makueni', '123456', '0000-00-00 00:00:00'),
(10, 'Mutisya  Mwambwa', 'Kathulumbi', 'mutisyamwambwa@gmail.com', '0745897845', 'Kathozweni', '123456', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--

INSERT INTO `tbl_courier_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'Best ship - wote', 'Delayed', 'Delay due to rain', '2017-01-30 10:23:04'),
(3, 1, 'M22P7KHM', 'fastest - makindu', 'Delayed', 'Delayed due to rain', '2017-01-30 10:26:43'),
(4, 4, '2THBV8UM', 'long courir - Nairobi', 'Delayed', 'Due to rain', '2011-01-30 17:44:52'),
(5, 1, 'M22P7KHM', 'best courir- Makindu', 'Completed', 'Completed', '2017-01-30 17:49:11'),
(6, 1, 'M22P7KHM', 'Best Courier - Makindu', 'In Transit', 'i have got it', '2017-05-17 09:58:01'),
(7, 7, 'WVQ0TVA2', 'Best Courier - Makindu', 'In Transit', 'thanks', '2017-05-31 09:23:54'),
(8, 1, 'M22P7KHM', 'Best Courier - Makindu', 'Delayed', 'well', '2018-01-14 11:17:56'),
(9, 1, 'M22P7KHM', 'Fastest Courier - wote', 'Completed', 'well', '2018-01-14 11:18:55'),
(10, 7, 'WVQ0TVA2', 'Best Courier - Makindu', 'Landed', 'ok', '2018-01-15 14:02:07'),
(11, 6, 'R8I08D8X', 'Best Courier - Makindu', 'Completed', 'YTYTTT', '2018-02-28 11:52:36'),
(12, 6, 'R8I08D8X', 'long Courier - Nairobi', 'In Transit', 'wtuunvv', '2018-02-28 13:32:35'),
(13, 13, 'NAW7FP1M', 'long Courier - Nairobi', 'Landed', 'The goods were spoiled', '2021-08-16 20:45:17'),
(14, 12, 'ZM3570NX', 'Best Courier - Makindu', 'In Transit', '', '2021-08-16 21:34:56'),
(15, 15, 'CG351JZS', 'Best Courier - Makindu', 'In Transit', '', '2021-08-17 23:55:59'),
(16, 0, '2315', '', '', '', '2021-08-18 11:07:44'),
(17, 0, '2315', '', '', '', '2021-08-18 11:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(300) NOT NULL,
  `receiver` varchar(300) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`id`, `sender`, `receiver`, `message`) VALUES
(1, 'musyoka', '', 'try'),
(2, 'musyoka', '', 'try'),
(3, 'musyoka', '', 'try'),
(4, 'musyoka', 'admin', 'try'),
(5, 'Stephen Musyoka', 'admin', 'kindly quote a bit higher'),
(6, 'admin', 'stevekimeu@gmail.com', 'Try that'),
(7, 'stevekimeu@gmail.com', 'admin', 'Okay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `fullname`, `region`, `phonenumber`, `email`, `password`, `date`) VALUES
(9, 'Stephen Musyoka', 'Eastern', '0769903170', 'stevekimeu@gmail.com', '$2y$04$JH/LzDfF2ETm/2Ezv208Pezvg917/Ym3voPRMDzSLpQ6H7oawQ0Yq', '2022-01-06 00:00:00'),
(10, 'Dorcas Kimeu', 'Thika UTI', '0708659085', 'dorcasmutisya10@gmail.com', '$2y$04$bz5..GA6Mdi3uYoXpqcLwukN3KIIU/vX0kRpBv7lePnqlFbGTrTyW', '2022-01-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cid` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `bid` varchar(300) NOT NULL,
  `auction` date NOT NULL,
  `comments` text NOT NULL,
  `username` varchar(300) NOT NULL,
  `dealer` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cid`, `category`, `price`, `bid`, `auction`, `comments`, `username`, `dealer`, `order_date`) VALUES
(1, '91', 'Carmels', '70,000', '50,000', '2021-09-29', 'white', 'admin', '', '2021-09-09 13:19:04'),
(2, '91', 'Carmels', '70,000', '20,000', '2021-09-29', 'gray', 'admin', '', '2021-09-09 13:23:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livestock_number` (`cid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
