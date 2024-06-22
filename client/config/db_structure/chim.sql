-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 11:28 AM
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
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `cid` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `email_notification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images_paths`
--

CREATE TABLE `images_paths` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `memory_id` int(11) DEFAULT NULL,
  `path` longtext NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE `memories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `last_modification` datetime DEFAULT NULL,
  `title` varchar(256) NOT NULL,
  `text` mediumtext DEFAULT NULL,
  `pattern` varchar(255) NOT NULL,
  `isCoreMemory` tinyint(1) NOT NULL
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
  `password_hash` varchar(255) NOT NULL,
  `email_notification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos_paths`
--

CREATE TABLE `videos_paths` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `memory_id` int(11) DEFAULT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `cid` (`cid`);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `memory_id` (`memory_id`);

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
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `PK` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos_paths`
--
ALTER TABLE `videos_paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `memory_id` (`memory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `images_paths`
--
ALTER TABLE `images_paths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `memories`
--
ALTER TABLE `memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD CONSTRAINT `calendar_event_master_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `children` (`cid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `children_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `images_paths`
--
ALTER TABLE `images_paths`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `images_paths_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `images_paths_ibfk_2` FOREIGN KEY (`memory_id`) REFERENCES `memories` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

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

--
-- Constraints for table `videos_paths`
--
ALTER TABLE `videos_paths`
  ADD CONSTRAINT `videos_paths_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `videos_paths_ibfk_2` FOREIGN KEY (`memory_id`) REFERENCES `memories` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
