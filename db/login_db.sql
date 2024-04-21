-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 03:49 PM
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
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `password_hash` varchar(225) NOT NULL,
  `session_id` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `first_name`, `last_name`, `password_hash`, `session_id`) VALUES
('mamaia@gmail.com', 'eeee', 'mamaia', '$2y$10$N4YrWHZLoysbXxTRoZkHAOjBlTL.ouE8rz/RC.XaMF.PIVL7FBuEC', NULL),
('mariuselu@gmail.com', 'wqwqwq', 'mariuselu', '$2y$10$yUFWmCss7H4iPmCz9qORHe.p71ZgawUFgAAXuvV1Q4IjnEijiLiB2', NULL),
('tataia@gmail.com', 'eeee', 'tataia', '$2y$10$YHxnLAALCRcEFfbBAUyOD.n2qeC/SmRF6/I0B6SrPkeNwZOk6CFRe', 't2o3n8s6a9c09gdmq23pok3d05'),
('test@gmail.com', 'asdf', 'dxfcgv', '$2y$10$dHSRv0mhEBVZLgmY/wpREu6.jKHtlp1GOkBvXcPO2siqSTabSub8q', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
