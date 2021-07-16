-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 04:15 AM
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
-- Database: `fideljob`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerbio`
--

CREATE TABLE `jobseekerbio` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `coverImage` varchar(200) NOT NULL,
  `profileImage` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `aboutYourSelf` text NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseekercertifications`
--

CREATE TABLE `jobseekercertifications` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `certificationsName` varchar(200) NOT NULL,
  `certificationsLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseekereducation`
--

CREATE TABLE `jobseekereducation` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `shoolName` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `areaOfStudy` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerlanguages`
--

CREATE TABLE `jobseekerlanguages` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `languageName` varchar(100) NOT NULL,
  `languageStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_attachment_file`
--

CREATE TABLE `jobseeker_attachment_file` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `file title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_experiences`
--

CREATE TABLE `jobseeker_experiences` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `experience_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_highest_education`
--

CREATE TABLE `jobseeker_highest_education` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `education_name` varchar(200) NOT NULL,
  `field_of_study` varchar(200) NOT NULL,
  `gpa` int(11) NOT NULL,
  `description` text NOT NULL,
  `edu_status` varchar(30) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_portfolio`
--

CREATE TABLE `jobseeker_portfolio` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `portfolio_title` varchar(200) NOT NULL,
  `portfolio_skill` text NOT NULL,
  `portfolio_image` varchar(200) NOT NULL,
  `portfolio_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_social_media`
--

CREATE TABLE `jobseeker_social_media` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `social_media_name` varchar(200) NOT NULL,
  `social_media_link` varchar(200) NOT NULL,
  `social_media_icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_work_experience`
--

CREATE TABLE `jobseeker_work_experience` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `work_country` varchar(100) NOT NULL,
  `work_title` varchar(200) NOT NULL,
  `start_year` year(4) NOT NULL,
  `end_year` year(4) NOT NULL,
  `current_work` varchar(10) NOT NULL,
  `work_description` text NOT NULL,
  `work_status` varchar(15) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_work_status`
--

CREATE TABLE `jobseeker_work_status` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `work_availability` varchar(100) NOT NULL,
  `work_experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `roleType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roleType`) VALUES
(1, 'admin'),
(2, 'jobseeker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `userPhoto` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `userPhoto`, `role_id`, `status`, `date`) VALUES
(1, 'alphacoder', 'alpha@gmail.com', 'alpha', 'offer11.jpg', 1, 'active', '2021-07-09 15:54:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_id` (`jobseeker_id`);

--
-- Indexes for table `jobseekerbio`
--
ALTER TABLE `jobseekerbio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job seeker id` (`jobseeker_id`);

--
-- Indexes for table `jobseekercertifications`
--
ALTER TABLE `jobseekercertifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Certifications_id` (`jobseeker_id`);

--
-- Indexes for table `jobseekereducation`
--
ALTER TABLE `jobseekereducation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Education_id` (`jobseeker_id`);

--
-- Indexes for table `jobseekerlanguages`
--
ALTER TABLE `jobseekerlanguages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Language_jd` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_attachment_file`
--
ALTER TABLE `jobseeker_attachment_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentfile_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_experiences`
--
ALTER TABLE `jobseeker_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Experiences_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_highest_education`
--
ALTER TABLE `jobseeker_highest_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `HEducation_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_portfolio`
--
ALTER TABLE `jobseeker_portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_social_media`
--
ALTER TABLE `jobseeker_social_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Socail_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_work_experience`
--
ALTER TABLE `jobseeker_work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_id` (`jobseeker_id`);

--
-- Indexes for table `jobseeker_work_status`
--
ALTER TABLE `jobseeker_work_status`
  ADD KEY `work_status` (`jobseeker_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseekerbio`
--
ALTER TABLE `jobseekerbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseekercertifications`
--
ALTER TABLE `jobseekercertifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseekereducation`
--
ALTER TABLE `jobseekereducation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseekerlanguages`
--
ALTER TABLE `jobseekerlanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_attachment_file`
--
ALTER TABLE `jobseeker_attachment_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_experiences`
--
ALTER TABLE `jobseeker_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_highest_education`
--
ALTER TABLE `jobseeker_highest_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_portfolio`
--
ALTER TABLE `jobseeker_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_social_media`
--
ALTER TABLE `jobseeker_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_work_experience`
--
ALTER TABLE `jobseeker_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseekerbio`
--
ALTER TABLE `jobseekerbio`
  ADD CONSTRAINT `job seeker id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseekercertifications`
--
ALTER TABLE `jobseekercertifications`
  ADD CONSTRAINT `Certifications_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseekereducation`
--
ALTER TABLE `jobseekereducation`
  ADD CONSTRAINT `Education_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseekerlanguages`
--
ALTER TABLE `jobseekerlanguages`
  ADD CONSTRAINT `Language_jd` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_attachment_file`
--
ALTER TABLE `jobseeker_attachment_file`
  ADD CONSTRAINT `attachmentfile_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_experiences`
--
ALTER TABLE `jobseeker_experiences`
  ADD CONSTRAINT `Experiences_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_highest_education`
--
ALTER TABLE `jobseeker_highest_education`
  ADD CONSTRAINT `HEducation_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_portfolio`
--
ALTER TABLE `jobseeker_portfolio`
  ADD CONSTRAINT `portfolio_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_social_media`
--
ALTER TABLE `jobseeker_social_media`
  ADD CONSTRAINT `Socail_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_work_experience`
--
ALTER TABLE `jobseeker_work_experience`
  ADD CONSTRAINT `work_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobseeker_work_status`
--
ALTER TABLE `jobseeker_work_status`
  ADD CONSTRAINT `work_status` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
