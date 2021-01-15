-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilmar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `age`, `gender`, `status`, `date_added`) VALUES
(1, 'users', '$2y$10$pcZi9KCAigDL1L1VkYiEROKOc6BdCQYby.XkArsVXhUMT3RlcbJPi', 'Willmarrr', 'Vanzuela', 21, 'Female', 1, '2021-01-12'),
(2, 'opetss', '$2y$10$uMQkHZGNrCe5HrWDIaHJNOxVyHathSrTMcaRdyJDZj5rotuBdcBAi', 'John', 'Doe', 55, 'Male', 1, '2021-01-12'),
(3, 'tests', '$2y$10$JeeVbHPwuAn3dWyOGWDq5eXGQnItwxO4FFIrUpwVXmg4Nfee9i2Ky', 'wimar2', 'Vanzuela', 44, 'Male', 1, '2021-01-13'),
(4, 'wilmar', '$2y$10$1jeveN/oVAKdbZad6o9ixOMvrZgO7pV1SxIj7Q0bf15cR2mrb7ZiC', 'Wilmar', 'Vanziela', 22, 'Male', 1, '2021-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
