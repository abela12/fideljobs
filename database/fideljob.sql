-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 11:42 PM
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

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `jobseeker_id`, `country`, `city`, `phoneNumber`) VALUES
(1, 2, '', '', ''),
(4, 2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `jobseeker_cv` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `jobseeker_id`, `job_id`, `jobseeker_cv`, `status`, `date`) VALUES
(1, 36, 12, 'hello', 'Pending', '2021-09-02 18:14:30'),
(2, 41, 12, 'eski', 'Approve', '2021-09-02 18:20:42'),
(3, 42, 15, 'ashu', 'active', '2021-09-02 18:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_email` varchar(100) NOT NULL,
  `job_description` longtext NOT NULL,
  `job_tags` text NOT NULL,
  `job_experience` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `job_apply_type` varchar(50) NOT NULL,
  `job_experience_level` varchar(50) NOT NULL,
  `job_external_url` text DEFAULT NULL,
  `job_sector` varchar(255) NOT NULL,
  `job_salary_type` varchar(50) NOT NULL,
  `job_salary_currency` varchar(50) DEFAULT NULL,
  `job_salary_min` varchar(20) DEFAULT NULL,
  `job_salary_max` varchar(20) DEFAULT NULL,
  `job_career_level` varchar(100) NOT NULL,
  `job_qualifications` varchar(50) NOT NULL,
  `job_preferred_sex` varchar(20) NOT NULL,
  `job_location` varchar(200) DEFAULT NULL,
  `job_deadline` date NOT NULL,
  `job_post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `job_status` varchar(50) NOT NULL DEFAULT 'Opened'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `user_id`, `job_title`, `job_email`, `job_description`, `job_tags`, `job_experience`, `job_type`, `job_apply_type`, `job_experience_level`, `job_external_url`, `job_sector`, `job_salary_type`, `job_salary_currency`, `job_salary_min`, `job_salary_max`, `job_career_level`, `job_qualifications`, `job_preferred_sex`, `job_location`, `job_deadline`, `job_post_date`, `job_status`) VALUES
(12, 36, 'web development ', 'abelberhanu6@gmail.com', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'PHP,HTML,JavaScript,Wordpress,Software Architecture\r\n', '5 Years', 'Full Time', 'Internal', 'Junior', 'demo', 'Web Design', 'Negotiable', 'ETB Birr 🇪🇹', '23', '345', 'Officer', 'Certificate', 'Male', 'Addis Abeba', '2021-09-09', '2021-08-30 22:36:11', 'Closed'),
(13, 36, 'Software Engineer ', 'abelberhanu6@gmail.com', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'PHP,HTML,JavaScript,Wordpress,', '3 Years', 'Part Time', 'Internal', 'Senior', '', 'Graphics Design', 'Monthly', 'US-Dollar', '7878', '10000', 'Student', 'Masters Degree', 'Both👨‍🌾', 'Addis Abeba', '2021-09-16', '2021-09-02 16:53:02', 'delete'),
(14, 36, 'Graphics Designer', 'nati@gmail.com', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'JavaScript,Software Architecture\r\n,Angular JS\r\n\r\n\r\n,', '1 Years', 'Full Time', 'External URL', 'Senior', 'demo', 'Graphics Design', 'Monthly', 'Euro', '78', '8', 'Executive', 'PHD', 'Female', 'Bole', '2021-09-14', '2021-09-02 17:00:29', 'Closed'),
(15, 40, 'Mobile App Developer', 'abel0911309125@gmail.com', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'JavaScript,Software Architecture\r\n,Mysql\r\n,', '1 Years', 'Contractual', 'By Email', 'Senior', '', 'Graphics Design', 'Negotiable', '', '', '', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-21', '2021-09-02 17:17:27', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerbio`
--

CREATE TABLE `jobseekerbio` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `coverImage` varchar(200) NOT NULL,
  `profileImage` varchar(200) NOT NULL,
  `Title` varchar(244) NOT NULL,
  `aboutYourSelf` longtext NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseekerbio`
--

INSERT INTO `jobseekerbio` (`id`, `jobseeker_id`, `coverImage`, `profileImage`, `Title`, `aboutYourSelf`, `Sex`, `dateOfBirth`) VALUES
(75, 2, 'assets/images/jobseeker/1094559888abel.jpg', 'assets/images/jobseeker/292704142abel.png', 'web Developer two', 'one', 'male', '2021-08-05'),
(76, 45, '', '', '', 'aboutYourSelf', 'sex', '0000-00-00'),
(77, 4, 'assets/images/jobseeker/787971809abel.jpg', 'assets/images/jobseeker/1830767195abel.png', 'mobile Developer', 'demo', 'female', '2021-08-18'),
(78, 0, 'assets/images/jobseeker/1937072573abel.jpg', 'assets/images/jobseeker/1358786169abel.png', 'Full Stack Developer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.', 'male', '2021-08-11'),
(79, 0, 'assets/images/jobseeker/1625538801abel.jpg', 'assets/images/jobseeker/424462828abel.jpg', 'web Developer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.', 'male', '2021-08-18'),
(80, 0, 'assets/images/jobseeker/1602603037abel.jpg', 'assets/images/jobseeker/155334742abel.jpg', 'web Developer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.', 'male', '2021-08-19'),
(81, 14, 'assets/images/jobseeker/1573627972abel.jpg', 'assets/images/jobseeker/226788458abel.png', ' Web designer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.\r\n', 'male', '2021-08-24');

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

--
-- Dumping data for table `jobseekercertifications`
--

INSERT INTO `jobseekercertifications` (`id`, `jobseeker_id`, `certificationsName`, `certificationsLink`) VALUES
(16, 2, 'fb', 'fb.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekereducation`
--

CREATE TABLE `jobseekereducation` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `shoolName` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseekereducation`
--

INSERT INTO `jobseekereducation` (`id`, `jobseeker_id`, `shoolName`, `type`, `description`) VALUES
(1, 2, 'radical', 'type', 'description'),
(2, 2, 'demo', 'type', 'description');

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

--
-- Dumping data for table `jobseekerlanguages`
--

INSERT INTO `jobseekerlanguages` (`id`, `jobseeker_id`, `languageName`, `languageStatus`) VALUES
(19, 2, 'English', 'Intermediate'),
(20, 2, 'Amharic', 'Beginner'),
(21, 2, 'Amharic', 'Beginner'),
(22, 14, 'new', 'Expert');

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

--
-- Dumping data for table `jobseeker_highest_education`
--

INSERT INTO `jobseeker_highest_education` (`id`, `jobseeker_id`, `education_name`, `field_of_study`, `gpa`, `description`, `edu_status`) VALUES
(3, 2, 'Raguale Ketema', 'computer science', 6, 'demo', 'off');

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

--
-- Dumping data for table `jobseeker_social_media`
--

INSERT INTO `jobseeker_social_media` (`id`, `jobseeker_id`, `social_media_name`, `social_media_link`, `social_media_icon`) VALUES
(5, 2, 'facebook', 'fb.com', ''),
(6, 2, 'instagram', 'insta.com', ''),
(7, 2, 'linkedin', 'fb.com', ''),
(8, 2, 'youtube', 'https://www.youtube.com/watch?v=I4EWvMFj37g', ''),
(10, 14, 'facebook', 'fb.com', ''),
(15, 14, 'linkedin', 'link.com', ''),
(20, 14, 'instagram', 'demo', ''),
(21, 14, 'youtube', 'youtube.com', ''),
(22, 14, 'instagram', 'sdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_work_experience`
--

CREATE TABLE `jobseeker_work_experience` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `company_name` varchar(110) NOT NULL,
  `work_title` varchar(200) NOT NULL,
  `start_year` year(4) NOT NULL,
  `end_year` year(4) NOT NULL,
  `current_work` varchar(10) NOT NULL,
  `work_description` text NOT NULL,
  `work_status` varchar(15) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_work_experience`
--

INSERT INTO `jobseeker_work_experience` (`id`, `jobseeker_id`, `company_name`, `work_title`, `start_year`, `end_year`, `current_work`, `work_description`, `work_status`) VALUES
(1, 2, 'Ethiopia', 'web developer', 2003, 2005, 'on', 'hello', 'off'),
(2, 2, 'Caladrio', 'web developer', 2003, 2005, 'on', 'no', 'off'),
(3, 2, 'Caladrio', 'web developer', 2003, 2005, 'on', 'no', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_work_status`
--

CREATE TABLE `jobseeker_work_status` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `work_availability` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `senderId` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `msgStatus` varchar(20) NOT NULL DEFAULT 'active',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `senderId`, `receiver`, `title`, `message`, `msgStatus`, `date`) VALUES
(1, '1', 'employer', 'one Employer', 'Welcome To Fidel Jobs', 'active', '2021-08-04 15:00:01'),
(2, '1', 'employer', 'all employers', 'demo', 'active', '2021-09-02 13:36:25');

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
(2, 'jobseeker'),
(3, 'employer');

-- --------------------------------------------------------

--
-- Table structure for table `skill_category`
--

CREATE TABLE `skill_category` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_category`
--

INSERT INTO `skill_category` (`id`, `skill_name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'JavaScript'),
(4, 'Wordpress'),
(5, 'Software Architecture\r\n'),
(6, 'Mysql\r\n'),
(7, 'Python\r\n'),
(8, 'Java\r\n'),
(9, 'SEO\r\n'),
(10, 'Node Js\r\n'),
(11, 'C# Programming\r\n'),
(12, 'Linux\r\n'),
(13, 'React.js\r\n'),
(14, 'eCommerece\r\n'),
(15, 'Link Building\r\n'),
(16, 'c++ Programming\r\n\r\n'),
(17, 'c Programming\r\n\r\n'),
(18, 'Angular JS\r\n\r\n\r\n'),
(19, 'shopify'),
(20, 'Amazon Web Services');

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
  `code` mediumint(50) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `userPhoto`, `role_id`, `code`, `status`, `date`) VALUES
(1, 'alphacoder', 'alpha@gmail.com', 'alpha', 'offer11.jpg', 1, 0, 'active', '2021-07-09 15:54:20'),
(2, 'job', 'job@gmail.com', 'job123', 'no photo', 2, 0, 'active', '2021-07-16 14:46:05'),
(3, 'ashu', 'ash@gmail.com', 'ashu', 'ashu', 2, 0, 'active', '2021-08-05 16:37:41'),
(4, 'alpha', 'alpha@gmail.com', 'alpha', 'no photo', 2, 0, 'active', '2021-08-17 09:27:27'),
(6, 'job', 'abel@gmail.com', '465789', '', 2, 5, 'status', '2021-08-26 17:08:28'),
(14, 'job', 'natiking16@gmail.com', '$2y$10$vYjPDdtHLphigrgzWi2VouEcH1Wwu64h4hgFzUraaXFdAi2u2dSHq', '', 2, 0, 'verified', '2021-08-26 18:00:39'),
(17, 'job', 'abelberhanu6@gmail.com', '$2y$10$XHmjrNtikK0eMSbDxQccmenqEMOjVRCFBpukyRFikC.Ih832LNFfe', '', 2, 0, 'verified', '2021-08-26 21:32:00'),
(36, 'abel', 'alphacoder16@gmail.com', '$2y$10$z0.RiFQyAeWhxYV31n5In..E65x.sKxb.PSH/figte9D05wVt/jvm', '', 3, 0, 'verified', '2021-08-26 23:15:06'),
(37, 'hamuka', 'hamwogi3@gmail.com', '$2y$10$7rDPVG/f0t0f9d8TDAcVP.uF9utzcXrlHRj.xx3H3JtemI9/N8KQG', '', 2, 985549, 'verified', '2021-08-27 11:46:32'),
(38, 'job', 'abela@gmail.com', '$2y$10$TMMk1RZr8mO4WqjxYefrc.i1SAmlV7FNtvnNYtHwSRkG/haqsNDUu', '', 3, 421221, 'notverified', '2021-08-27 17:31:47'),
(39, 'ashuking', 'natnaelsmith@gmail.com', '$2y$10$XUYCf3f/jgXkYhIyMZONT.FL7XArFGQuJBX9P6Rr21i6XxJdEEm6K', '', 2, 0, 'verified', '2021-08-28 12:51:44'),
(40, 'ashu', 'ashulastkingj.r@gmail.com', '$2y$10$MmTqlzGV3ELujg801c8gN.vMiI06yu8fo4OugiYxB.EDOwB1WUcGi', '', 2, 0, 'verified', '2021-08-30 11:52:51'),
(41, 'eski', 'moeskiyas@gmail.com', '$2y$10$a9UFACkdN.PqudKpt0nJGORMYf6/gToDFLMxUtdMO/0JaJlKHSH4W', '', 2, 0, 'verified', '2021-08-30 11:55:19'),
(42, 'job', 'abelberhanu612@gmail.com', '$2y$10$vcKxMrieMX.fWsNi5mmnWuPOLISRZUq4BsJ9zI1Dwdcjx5ifbCU7i', '', 2, 606578, 'notverified', '2021-08-30 16:47:28'),
(43, 'job', 'abelberhanu6123@gmail.com', '$2y$10$Bp9D6rm7H0gWw3BaW/tzwOPKW/gV.dvMkjyxamPdl2HVTM5ELdRpC', '', 3, 0, 'verified', '2021-08-30 16:48:11'),
(44, 'demo', 'z7foa9hcr2@eposta.buzz', '$2y$10$NcWL2z30Bg5B0mJL35HkE.M/J/RsEEvXeeWuxfhL5mxtGpT2mrXFe', '', 2, 482334, 'notverified', '2021-09-04 16:49:15');

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
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job seeker id` (`jobseeker_id`),
  ADD KEY `job  id` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_category`
--
ALTER TABLE `skill_category`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobseekerbio`
--
ALTER TABLE `jobseekerbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `jobseekercertifications`
--
ALTER TABLE `jobseekercertifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobseekereducation`
--
ALTER TABLE `jobseekereducation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobseekerlanguages`
--
ALTER TABLE `jobseekerlanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobseeker_portfolio`
--
ALTER TABLE `jobseeker_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_social_media`
--
ALTER TABLE `jobseeker_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobseeker_work_experience`
--
ALTER TABLE `jobseeker_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill_category`
--
ALTER TABLE `skill_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `job  id` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`);

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
