-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 02:03 PM
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
-- Database: `chim`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `cid` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`cid`, `first_name`, `email`, `uid`, `birth_date`) VALUES
(3, 'Gigel', 'Gigel@gmail.com', 1, '2004-04-01'),
(6, 'Andro', 'Andro@gmail.com', 1, '2005-04-15'),
(11, 'Dorel', 'dorel@gmail.com', 3, '2004-04-01'),
(12, 'Bob', 'bob@arena.com', 1, '2025-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `images_paths`
--

CREATE TABLE `images_paths` (
  `id` int(11) NOT NULL,
  `memory_id` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `sequence_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `insertion_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`id`, `type`, `name`, `date`, `location`, `insertion_date`, `cid`) VALUES
(27, 'Alergy', 'peanuts', '2012-12-01', '', '2024-05-07 13:13:10', 11),
(28, 'Accident', 'car accident', '2003-02-25', 'there', '2024-05-07 19:03:29', 3);

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE `memories` (
  `id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_modification` datetime DEFAULT NULL,
  `title` varchar(256) NOT NULL,
  `text` mediumtext DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `pattern` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `first_name`, `last_name`, `email`, `password_hash`) VALUES
(1, 'Marius', 'Olaru', 'MJ@arena.com', '$2y$10$ol99TnrSi359yKq/FXcHhe/H6kQ7MmhBkyx/X/BSN7cnDnPHwSHUm'),
(2, 'Bors', 'Zeama', 'bors.cu.zeama@acasa.com', '$2y$10$Vt/HoLB7VfDuZW8P601EnOvns.20wFY6NvbzCtFQXlF4kVrAOlcbC'),
(3, 'Mamaia', 'Tataia', 'tataia@gmail.com', '$2y$10$AmTBAEg/u1fRTqKLFnUc6u0o3GuppGBDdylNDAvy5FEO0kd1fPip6'),
(4, 'test', 'test', 'test@gmail.com', '$2y$10$NJJf89W/GIju/CVJ0ZlBgeiK2FsVHrNrEaEQdtSn1yZt1QBom.9F.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `images_paths`
--
ALTER TABLE `images_paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`memory_id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `memories`
--
ALTER TABLE `memories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images_paths`
--
ALTER TABLE `images_paths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `memories`
--
ALTER TABLE `memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `children_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD CONSTRAINT `medical_records_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `children` (`cid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `memories`
--
ALTER TABLE `memories`
  ADD CONSTRAINT `memories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
