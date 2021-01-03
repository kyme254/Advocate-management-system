-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 07:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advocate`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `motive` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `tittle`, `contact`, `motive`, `date`, `notes`) VALUES
(1, 'shamba', '0707333776', 'ygythuyhj', '2020-12-28 22:20:38', 'yggytyu'),
(2, 'kesi maungu', '070787676', '<p>heloo</p>', '2021-01-02 13:21:44', '<p>jjkjkjk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `casestudy`
--

CREATE TABLE `casestudy` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `case_category` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casestudy`
--

INSERT INTO `casestudy` (`id`, `tittle`, `case_category`, `notes`, `result`) VALUES
(1, 'shamba', 'criminal', 'drgttyyuyuuyu', 'ffgg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `identification_number` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `full_name`, `phone_number`, `identification_number`, `residence`, `email`, `gender`, `username`, `password`, `photo`) VALUES
(1, 'kim', '0708466678', '279697400', 'voi', 'http://localhost/advocatemanagementsystem/uploads/files/houwrq6n72l8g4z.jpg', 'Male', 'kim', '$2y$10$BVSHbDafsYID6fmhvxHCc.8XR37cS97UZutddOqfphJGjv119YT/y', ''),
(2, 'kik', '0707454556', '243445454', 'voi', 'kimz@gmail.com', 'Male', 'kimz', '$2y$10$eFmcaIboXQiA02Expqdt/eRsjq.SYguqQDl3X/wHMEcvXTI/dv5Ky', 'http://localhost/advocatemanagementsystem/uploads/files/8kib43c7dsthg9_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `tittle`, `content`, `date`) VALUES
(1, 'cv', 'http://localhost/advocatemanagementsystem/uploads/files/CURRICULUM VITAE - SAUMU.docx', '2020-12-28 23:37:32'),
(2, 'approved', 'hgyhjhujhn', '2020-12-28 23:37:32'),
(3, 'doc', 'http://localhost/advocatemanagementsystem/uploads/files/e2k5vwrc1hmu8in.docx', '2020-12-28 21:58:33'),
(4, 'jrgfgnfmgnvfjgnfjbgjgn', 'http://localhost/advocatemanagementsystem/uploads/files/b_kvx78pajm3log.docx', '2020-12-28 22:05:08'),
(5, 'kra pin', 'http://localhost/advocatemanagementsystem/uploads/files/xcv8b4owfrlug3h.xlsx', '2020-12-28 23:48:44'),
(6, 'id no', 'http://localhost/advocatemanagementsystem/uploads/files/2zef8mjnxa39_yh.docx', '2020-12-31 17:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `mytask`
--

CREATE TABLE `mytask` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `related_to` varchar(255) NOT NULL,
  `started_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` timestamp NOT NULL DEFAULT current_timestamp(),
  `priority` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytask`
--

INSERT INTO `mytask` (`id`, `task_name`, `related_to`, `started_date`, `deadline`, `priority`, `status`) VALUES
(4, 'travel', 'yhkjikjkjm', '2020-12-31 09:00:00', '2020-12-31 21:00:00', 'low', 'done'),
(6, 'case', 'civil', '2020-12-27 15:58:00', '2021-01-14 21:00:00', 'high', 'overdue');

-- --------------------------------------------------------

--
-- Table structure for table `newcase`
--

CREATE TABLE `newcase` (
  `id` int(11) NOT NULL,
  `case_tittle` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `court_category` varchar(255) NOT NULL,
  `court` varchar(255) NOT NULL,
  `case_category` varchar(255) NOT NULL,
  `case_stage` varchar(255) NOT NULL,
  `act` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filling_date` varchar(255) NOT NULL,
  `hearing_date` datetime DEFAULT NULL,
  `opposite_lawyer` varchar(255) NOT NULL,
  `total_fees` varchar(255) NOT NULL,
  `respondent` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `installment_one` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newcase`
--

INSERT INTO `newcase` (`id`, `case_tittle`, `case_no`, `client_name`, `location`, `court_category`, `court`, `case_category`, `case_stage`, `act`, `description`, `filling_date`, `hearing_date`, `opposite_lawyer`, `total_fees`, `respondent`, `customer_mobile`, `installment_one`) VALUES
(1, 'shamba', '001', 'kimtech', 'voi', 'subordinate courts', 'voi court', 'civil', 'Detention & custody', '234', 'dghfdfghgh', '2020-12-28', '2020-12-28 00:00:00', 'mwizi', '90', 'mutua', '0707333776', '2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phone`, `email`, `residence`, `introduction`, `photo`, `relationship`, `gender`, `username`, `password`) VALUES
(1, 'kyme', '0707333776', 'kimanzitech254@gmail.com', 'voi', '<p>thereree</p>', 'http://localhost/advocatemanagementsystem/uploads/files/43nftej2_5g6ary.jpg', 'widowed', 'Male', 'pama', '$2y$10$AAzTu8Qfz8Na/d3vFrq1COYcPGAWJTBzNxWGWgwF.6UWfmtFVGium'),
(2, 'ki', '0708676767', 'kim@gmail.com', 'voi', 'hcvbvfvbfh', 'http://localhost/advocatemanagementsystem/uploads/files/yntim7268vlgd4b.jpg', 'single', 'Male', 'kim', '$2y$10$c.wtKOxTtnGFVzDqrb5EoeJW562NYUNRkBivPO/5zSgjwlGQX7PBK');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `notification_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `name`, `description`, `notification_date`) VALUES
(1, 'attending meeting', 'meeting of our client voi townlodge', '2020-12-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2021-04-02 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `account_status` varchar(255) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `photo`, `email`, `address`, `phone`, `username`, `password`, `role`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `account_status`) VALUES
(1, 'kim', 'http://localhost/advocatemanagementsystem/uploads/files/yau19o485gbvfez.jpg', 'jemo@gmail.com', 'voi', '0707333776', 'jemo', '$2y$10$UFHietMHhkx/nXDsQHQb6O1GdEAnfZWZTishpfGwSOI0Yr2SWjrqq', 'Staff', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Pending'),
(2, 'kim', 'http://localhost/advocatemanagementsystem/uploads/files/oz6u3l20bdt8rev.jpg', 'kim@gmail.com', 'voi', '0707333667', 'kimz', '$2y$10$eL5DTBnhYRNl.7TEuRU1eu7JIF//OFMxz5S.3t6j6hG4APWekhPsq', 'Admin', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Pending'),
(5, 'mwizi', 'uploads/files/ipetz_4smdugfq1.jpg', 'mwizi@gmail.com', 'voi', '0722345678', 'mwizi', '$2y$10$fZxfRnEuQAYhS1qFJCEWse8N8888WF4gnZ4OUofEcNhfrOGaP6mVa', 'Client', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Pending'),
(6, 'jey', 'uploads/files/iwozj5fscyr_72b.jpg', 'kallybkim@gmail.com', 'boi', '0707333776', 'jay', '$2y$10$ilXzhFm2uRNoCUj.HdLqU.wWjPHFjzszGE7vsUL.puurPwW9QGXby', 'Users', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Active'),
(7, 'sam', 'uploads/files/me7d6hg13v29xw4.jpg', 'jemo1@gmail.com', 'voi', '07074456', 'sam', '$2y$10$OSM6OO02ugzGegK5is8f4O0mn9wHNIN9jUDW9UCDhh8h4Z.c8yvk6', 'Admin', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Pending'),
(8, 'kimtech', 'uploads/files/g6_7zifh1dkq8pc.jpg', 'kim254@gmail.com', 'voi', '07074456', 'kimtech', '$2y$10$sqqAQPYXtsgRgxxAlDoUKOKI4P.1Zkf5mWnrsKCvPFlZKGjqI6BHe', 'Admin', NULL, NULL, '2021-04-02 00:00:00', NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casestudy`
--
ALTER TABLE `casestudy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytask`
--
ALTER TABLE `mytask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newcase`
--
ALTER TABLE `newcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `casestudy`
--
ALTER TABLE `casestudy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mytask`
--
ALTER TABLE `mytask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newcase`
--
ALTER TABLE `newcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
