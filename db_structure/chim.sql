-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:54 PM
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
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `insertion_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`id`, `type`, `name`, `date`, `location`, `insertion_date`) VALUES
(11, 'Alergy', 'peanuts', '2003-02-25', 'hospital (birth)', '2024-05-04 15:40:50'),
(12, 'Alergy', 'life', '2003-02-25', 'Brasov', '2024-05-04 15:41:18'),
(13, 'Alergy', 'snow', '2012-12-01', 'Home', '2024-05-04 15:41:32'),
(14, 'Desire', 'Cancer', '2023-12-12', 'Piatra Neamt', '2024-05-04 15:42:01'),
(15, 'Desire', 'Diabeties', '2024-04-12', 'here', '2024-05-04 15:42:21'),
(16, 'Alergy', 'car accident', '2008-08-13', 'Brasov', '2024-05-04 15:42:59'),
(17, 'Accident', 'snowboard party', '2012-12-01', 'Brasov', '2024-05-04 15:43:09'),
(18, 'Accident', 'Door smash', '2024-04-12', 'home', '2024-05-04 15:43:47'),
(19, 'Accident', 'Bike crash', '2012-12-01', 'woods', '2024-05-04 15:50:39'),
(20, 'Alergy', 'something bad', '2022-02-02', 'nowhere', '2024-05-06 16:44:51');

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
(2, 'Bors', 'Zeama', 'bors.cu.zeama@acasa.com', '$2y$10$Vt/HoLB7VfDuZW8P601EnOvns.20wFY6NvbzCtFQXlF4kVrAOlcbC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
