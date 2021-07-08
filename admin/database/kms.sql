-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 03:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(140) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(99) NOT NULL,
  `woreda` varchar(99) NOT NULL,
  `kebele` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL,
  `jobLocation` varchar(100) NOT NULL,
  `userPhoto` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `phoneNumber`, `age`, `nationality`, `woreda`, `kebele`, `role`, `jobLocation`, `userPhoto`, `username`, `password`, `date`, `status`) VALUES
(2, 'abebe berhanu', '0911309125', 34, 'Ethiopia', 'wereda 8', '03', 'chairMan', 'Kebel One', 'Ep-2.jpg', 'abela', '123', '2021-06-28 19:10:28', 'active'),
(4, 'Ashenafi Tewelde General', '0911309125', 50, 'Ethiopia', 'wereda 8', '09 ', 'systemadministrator', 'Kebel One', '404 error.PNG', ' admin', ' admin', '2021-06-30 11:47:20', 'active'),
(5, 'Natnael Debebe ', '0911309125', 34, 'Ethiopia', 'wereda 7', '444  ', 'resident', 'Kebel One', 'telegram.png', '  nati', '  nari', '2021-06-30 13:23:32', 'active'),
(7, 'Elsa Berhanu Akirso', '094562174', 50, 'Ethiopia', 'woreda 12', '24', 'recordOfficer', 'Kebel One', 'quiz.PNG', 'record', 'record', '2021-06-30 16:16:53', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
