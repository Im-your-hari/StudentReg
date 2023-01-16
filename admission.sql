-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 07:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwword` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `passwword`, `created_at`) VALUES
(1, 'admin', 'admin123', '2023-01-12 15:33:36'),
(2, 'avishith', 'Avi@2001', '2023-01-13 21:24:35'),
(3, 'abcd', 'abcd1234', '2023-01-14 01:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `admission_data`
--

CREATE TABLE `admission_data` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `mtongue` varchar(30) NOT NULL,
  `guadian` varchar(30) NOT NULL,
  `relation` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `p-address` varchar(100) NOT NULL,
  `k-rank` varchar(20) NOT NULL,
  `k-roll` varchar(20) NOT NULL,
  `a-rank` varchar(20) NOT NULL,
  `n-roll` varchar(20) NOT NULL,
  `n-rank` varchar(20) NOT NULL,
  `percentile` varchar(10) NOT NULL,
  `plustwo-marks` varchar(10) NOT NULL,
  `isSanskrit` varchar(10) NOT NULL,
  `isAyurvedic` varchar(50) NOT NULL,
  `extra-activities` varchar(50) NOT NULL,
  `s-sign` varchar(100) NOT NULL,
  `g-sign` varchar(100) NOT NULL,
  `neet-file` varchar(100) NOT NULL,
  `hs-file` varchar(100) NOT NULL,
  `regno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_data`
--

INSERT INTO `admission_data` (`username`, `name`, `dob`, `image`, `gender`, `email`, `phone`, `nationality`, `mstatus`, `caste`, `mtongue`, `guadian`, `relation`, `category`, `address`, `p-address`, `k-rank`, `k-roll`, `a-rank`, `n-roll`, `n-rank`, `percentile`, `plustwo-marks`, `isSanskrit`, `isAyurvedic`, `extra-activities`, `s-sign`, `g-sign`, `neet-file`, `hs-file`, `regno`) VALUES
('abcda', 'Hari krishnan', '2023-01-26', 'IMG20221130132211.jpg', 'option2', 'wovenweb1@gmail.com', '+918157096325', 'iuhgvhj', 'oiuytfdfgh', 'lkjhgf', 'poiuytr', ';loiuygf', ';lkjhg', '1234567', 'lkjhgf', 'lkjhg', 'lkiuyhgf', 'liuyhg', 'liuytgf', '987654', '98765', '98765', '1234', ';loiu', 'kjhg', 'jhgf', 'sign.jpg', 'sign.jpg', ' FinalPpt.pdf', ' FinalPpt.pdf', 1),
('avishith', 'hj', '2022-12-10', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
('imhari', 'Hari krishnan', '2023-01-14', '', 'option2', 'wovenweb1@gmail.com', '+918157096325', 'India', 'Single', 'Hindu', 'Malayalam', 'Hari krishnan', 'Me', 'Obc', 'KRISHNALAYAM H', 'PANAMUKKU , NEDUPUZHA P O', '123', '123', '123', '132', '123', '1', '1', 'yss', 'noo', 'football', 'sign.jpg', 'sign.jpg', ' admitcard_pdf.pdf', ' allotmentmemo_pdf.pdf', 3),
('im_your_hari', 'Hari krishnan', '2023-01-13', 'passportsize.jpg', 'option2', 'wovenweb1@gmail.com', '+918157096325', 'India', 'Single', 'nil', 'malayalam', 'balu', 'dad', 'nil', 'KRISHNALAYAM H, PANAMUKKU , NEDUPUZHA P O', 'KRISHNALAYAM H, PANAMUKKU , NEDUPUZHA P O', '123', '12345', '1234', '876', '876', '123', '82.5', 'yes', 'no', 'f,s', 'sign.jpg', 'sign.jpg', ' admitcard_pdf.pdf', ' allotmentmemo_pdf.pdf', 4),
('qwertyuiop', 'Hariq', '0000-00-00', 'pass.png', 'option1', 'wovenweb1@gmail.com', '+918157096325', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'india.jpg', 'IMG_5036.JPG', ' admitcard_pdf.pdf', ' allotmentmemo_pdf.pdf', 5),
('test2', 'TEST TWO', '2023-02-02', '', 'option1', 'wovenweb1@gmail.com', '', 'India', 'Single', 'qwer', 'wert', 'qwert', 'werth', 'fg', 'KRISHNALAYAM H, PANAMUKKU , NEDUPUZHA P O', 'PANAMUKKU , NEDUPUZHA P O', '123', '34', '1234', '456', '234', '123', '123', 'qw', 'ert', 'qwe', '', '', ' ', ' ', 6),
('xcodelabs', 'Xcodelabs', '2023-01-01', '', 'option2', 'wovenweb1@gmail.com', '0', 'Indian', 'Single', 'No religion', 'Malayalam', 'Wovenwebs', 'Father', 'Nil', 'KRISHNALAYAM H', 'PANAMUKKU , NEDUPUZHA P O', '12345678', 'kem1234', '0987654', 'neet1234', '644766', '100', '99', 'yes', 'no', 'football', 'sign.jpg', 'sign.jpg', ' allotmentmemo_pdf.pdf', ' HARIKRISHNAN KB.pdf', 7);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(10) NOT NULL,
  `u_card` varchar(12) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_aadhar` varchar(12) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_email` text NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_state` varchar(12) NOT NULL,
  `u_dist` text NOT NULL,
  `u_village` text NOT NULL,
  `u_police` text NOT NULL,
  `u_pincode` text NOT NULL,
  `file` longblob NOT NULL,
  `u_mother` varchar(30) NOT NULL,
  `u_family` text NOT NULL,
  `staff_id` varchar(12) NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`, `u_village`, `u_police`, `u_pincode`, `file`, `u_mother`, `u_family`, `staff_id`, `image`, `uploaded`, `username`) VALUES
(104, 'ABCD12345677', 'Kush ', 'Singh', '', 'xxxxxxxxxxxx', '2021-01-22', 'Male', 'emmyluckytech@gmail.com', '1234567890', 'Himachal Pra', 'Rohtas', 'Dehri', 'Dehri', '111111111', '', '', '', '111111111111', 'Webp.net-resizeimage.jpg', '2021-01-16 13:06:03', NULL),
(105, '123123213131', 'avishith', 'pm', 'manoj', '12345678', '1234567', 'male', 'emmyluckytech@gmail.com', '8873651128', 'kerala', 'Dehri', '', '', '', '', 'asdklj;', '', '', 'Lavkush Kumar.jpg', '2021-07-17 17:32:40', NULL),
(107, 'sdfgsdfg', '', '', '', '', '', 'Choose', '', 'sfdgsdfg', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:15:55', NULL),
(108, 'fsdfgsdfg', 'sdfgsdfgsdfg', 'sdf', 'sdfgsgf', '', '', 'Choose', '', 'sdfgsdfg', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:16:58', NULL),
(109, 'f546456', 'dsfgsadfg45', 'sdf45g45', 'sdf45g', '', '', 'Choose', '', '564654654', 'Choose...', '', '', '', '', '', 'sdfg', '', '', '', '2021-07-18 12:19:02', NULL),
(110, 'lavkush k', 'lavkush', ' kumar', 'sinhgh', '', '', 'Choose', '', 'lavkush', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:20:38', NULL),
(111, '564654646', 'lavkush singh', 'singh', '', '', '', 'Choose', '', '4564654gf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:22:23', NULL),
(112, 'lavkush k', 'lavkush', ' kumar', 'sinhgh', '', '', 'Choose', '', 'lavkush', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:23:46', NULL),
(113, 'asdfasdf', 'adfasdfasdfasdf', 'asdfasdfasf', '', '', '', 'Choose', '', 'adsfasdfas', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:23:58', NULL),
(114, 'asdfasdf', 'adfasdfasdfasdf', 'asdfasdfasf', '', '', '', 'Choose', '', 'adsfasdfas', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:25:14', NULL),
(115, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:25:22', NULL),
(116, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:28:01', NULL),
(117, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:28:38', NULL),
(118, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:29:05', NULL),
(119, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:29:24', NULL),
(120, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:29:36', NULL),
(121, 'asdf', 'asdf', '', '', '', '', 'Choose', '', 'asdf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:30:55', NULL),
(122, '564654646', 'lavkush singh', 'singh', '', '', '', 'Choose', '', '4564654gf', 'Choose...', '', '', '', '', '', '', '', '', '', '2021-07-18 12:32:31', NULL),
(123, 'STD523696355', 'Coding ', 'Cush', 'Demo Data ', 'xxxxxxxxxxxx', '2021-12-12', 'Male', 'info@lexacademy.in', '1234567898', 'Uttar Prades', 'Gautam Buddha nagar', 'Harola', 'Sector - 16', '201301', '', 'Test Data', 'dummy text lorem ipsum ', 'STAFF1231233', 'IMG20221130132230.jpg', '2021-07-18 12:44:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'hari', '$2y$10$fwzsITSqkuASYd.sVvk2P.6JIfxfiOs.XirKLCDtpCR1tNFqhVSKe', '2022-12-31 15:13:41'),
(9, 'avi', '$2y$10$ef5VnQQE/EH.ae4rkt/k.uljHB6KJLUljc6vpfMfM7br340Yqd1/u', '2022-12-31 18:43:02'),
(12, 'abcd', '$2y$10$yOXyQfITjzi4OnkdZvpscuLj6B7GNHHZbZur1K.qwHNK.L4zCqDhC', '2023-01-01 18:03:40'),
(14, 'hari123', '$2y$10$UPw5NfdGbva8fpX0VsMpb.ezLRfxJnltc378RZ1BuB9jbmOug8bCS', '2023-01-01 18:12:00'),
(15, 'xcodelabs', '$2y$10$xajhxPG/dPRbY3wK8G0GleRqOCqX0jPxW3waAj0KzF7PvbG9UVHZG', '2023-01-05 21:04:53'),
(16, 'test1', '$2y$10$rPKcldn.vAreDc2fK1C/zOwq67NMFtXndxAMtfyr/6OX6xTRkRs26', '2023-01-07 18:02:42'),
(17, 'test2', '$2y$10$R4Lve4wlI3BMraUzmlPMJuu3Kf.Ux70/ZwapPO2Jl6kkQG3CNEUhi', '2023-01-07 18:12:00'),
(18, 'abcdefg', '$2y$10$wfZmxWi7zNtI/KliRNrUR.qsRHdwvBd/m198aMzJC5XqetYpK7ep6', '2023-01-07 21:52:33'),
(19, 'im_your_hari', '$2y$10$Rs1l2VNCCuB8Kirr/c.Z4.j7S66mGF1BNGSzLLa94Bu0G89AgvPqO', '2023-01-09 17:14:01'),
(21, 'adminhari', '$2y$10$c37efCep.FpsjmOfDsJrPeo0BhwylJplw0lOt4S2RC8Jx1x.A1/oS', '2023-01-13 00:41:32'),
(22, 'testing', '$2y$10$xGfZpx.Reuz2oUW.keInQu.nHHZWvVmGcaMaX6aspPaLsgRmCvHES', '2023-01-13 14:28:17'),
(24, 'test10', '$2y$10$Y9/T0ZBHyd0.cYYbDkUiA.pJDtxs.jsMbbB7ZG0JPZeZd4dqt2DzO', '2023-01-13 14:55:28'),
(26, 'new', '$2y$10$0Cf6MjUaCqrSYbmtDba45OQPn8KjiGUDmf0mb3Y.oyBvsQ.zAdDSO', '2023-01-13 20:07:26'),
(27, 'imhari', '$2y$10$N5NinjkSh1L0OdvDnIt4qu3SqPvo0FxBYXLIDZItcR9jMabNFHiLu', '2023-01-13 20:23:33'),
(28, 'abcda', '$2y$10$c5FNT73eFhN0qBbhJtux3u7Iq/opy5S1yS3wHHoXsocbt1Z5GOo4W', '2023-01-13 20:57:12'),
(29, 'qwertyuiop', '$2y$10$JKsrL5poy49x1y7Rm3YrJ.KJFK4lj3i675J/BdBSz03FllwZsfCNq', '2023-01-13 21:02:24'),
(30, 'amma', '$2y$10$n9WDdub/2IfQ9DDGTDK3aOLRJpk2oFQSCk6EXFocXQ.dqjMLEfXX6', '2023-01-14 06:07:47'),
(31, 'poi', '$2y$10$iz15.PBRTIxThdXRqmzOreYnHqp3ogCK7OjoDKwS8xhexsHDLZnWi', '2023-01-16 23:37:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_data`
--
ALTER TABLE `admission_data`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_data`
--
ALTER TABLE `admission_data`
  MODIFY `regno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
