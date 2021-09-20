-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 06:57 AM
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
(4, 2, '', '', ''),
(9, 41, 'Ethiopia', 'Bole', '0911309125'),
(20, 51, 'us', 'Adis Abeba', '0911309125');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `attachment_file_id` int(11) NOT NULL,
  `cover_letter` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `jobseeker_id`, `job_id`, `attachment_file_id`, `cover_letter`, `status`, `date`) VALUES
(6, 41, 12, 7, 'demo', 'Approve', '2021-09-10 08:08:46'),
(8, 46, 23, 9, 'hello hello', 'Approve', '2021-09-10 09:27:30'),
(9, 41, 24, 7, 'hello i just seen you job', 'Pending', '2021-09-11 12:18:41'),
(10, 41, 26, 7, 'Hi There, I have just seen your job posting and found that you need an Applying for digital sales.', 'Pending', '2021-09-11 15:10:47'),
(11, 51, 26, 22, 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby, and inhaling a wide variety of potentially useless', 'Pending', '2021-09-11 15:22:01'),
(12, 51, 27, 22, 'We’re JTI, Japan Tobacco International and we believe in freedom. We think that the possibilities are limitless when you’re free to choose. ', 'Approve', '2021-09-11 15:32:34'),
(13, 41, 22, 21, 'sjkdlfhasdjfhljsdhfljdsk', 'Pending', '2021-09-13 10:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_email` varchar(100) NOT NULL,
  `job_short_description` text NOT NULL,
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

INSERT INTO `job` (`id`, `user_id`, `job_title`, `job_email`, `job_short_description`, `job_description`, `job_tags`, `job_experience`, `job_type`, `job_apply_type`, `job_experience_level`, `job_external_url`, `job_sector`, `job_salary_type`, `job_salary_currency`, `job_salary_min`, `job_salary_max`, `job_career_level`, `job_qualifications`, `job_preferred_sex`, `job_location`, `job_deadline`, `job_post_date`, `job_status`) VALUES
(12, 36, 'web development ', 'abelberhanu6@gmail.com', 'We’re looking to hire a full-time full-stack developer for our company that would be remote based but would be committed to adhering to deadlines.  Our mission is simple; to bring to market applications that fulfils the holistic industry’s needs. We already have our own in house project that has beed Developed that is  for which we need a full-time developer and other projects at hand. ', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'PHP,HTML,JavaScript,Wordpress,Software Architecture\r\n', '5 Years', 'Full Time', 'Internal', 'Junior', 'demo', 'Web Design', 'Negotiable', 'ETB Birr 🇪🇹', '23', '345', 'Officer', 'Certificate', 'Male', 'Addis Abeba', '2021-09-09', '2021-08-30 22:36:11', 'Closed'),
(13, 36, 'Software Engineer ', 'abelberhanu6@gmail.com', 'We looking  full-stack developer having a demonstrated experience in JavaScript,Typescript, React, Redux, HTML,CSS, Node and MongoDB.  Its preferred that the applicant should have previous experience working on spring framework and browser extensions but its not highly required. The applicant is required  to show at least one practical project.  Salary is negotiable .', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'PHP,HTML,JavaScript,Wordpress,', '3 Years', 'Part Time', 'Internal', 'Senior', '', 'Graphics Design', 'Monthly', 'US-Dollar', '7878', '10000', 'Student', 'Masters Degree', 'Both👨‍🌾', 'Addis Abeba', '2021-09-16', '2021-09-02 16:53:02', 'delete'),
(14, 36, 'Graphics Designer', 'nati@gmail.com', 'software engineering/computer science degree from a known institute,  2 years experience is enough,  basic knowledge on python java C C# and flutter, familiar with mobile developing, Gender: Both Location Welosefer Addis Ababa, Salary 10k', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'JavaScript,Software Architecture\r\n,Angular JS\r\n\r\n\r\n,', '1 Years', 'Full Time', 'External URL', 'Senior', 'https://wakatime.com/dashboard', 'Graphics Design', 'Monthly', 'Euro', '78', '8', 'Executive', 'PHD', 'Female', 'Bole', '2021-09-14', '2021-09-02 17:00:29', 'Closed'),
(15, 40, 'Mobile App Developer', 'abel0911309125@gmail.com', 'We want a Structural Engineer in our team who can learn and study about these technologies to make structural designs of our projects.', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'JavaScript,Software Architecture\r\n,Mysql\r\n,', '1 Years', 'Contractual', 'By Email', 'Senior', '', 'Graphics Design', 'Negotiable', '', '', '', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-21', '2021-09-02 17:17:27', 'Closed'),
(16, 36, 'Junior accountant', 'abel0911309125@gmail.com', 'We are looking to hire a professional Production manager with a minimum of a year experience.', '<h3><span style=\"background-color: rgb(255, 255, 0);\"><b>Description</b></span>:</h3><h3> Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can&nbsp;</h3><p><br></p><h3>- compile daily weekly and monthly financial reports&nbsp;</h3><h3>- follow up and Collect receivables&nbsp;</h3><h3>-compile, confirm and deposit daily sales cash&nbsp;</h3><h3>- follow up with check deposit&nbsp;</h3><h3>- prepare team salary for senior Accountant’s approval and pay accordingly&nbsp;</h3><h3>- compile and prepare customs reports for senior accountants approval and do the report</h3><div><br></div><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Part Time', 'Internal', 'Junior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Degree Bachelor', 'Male', 'Addis Abeba', '2021-09-20', '2021-09-05 17:01:20', 'delete'),
(17, 36, 'Web Developer', 'abel0911309125@gmail.com', 'Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can ', '<h3><span style=\"background-color: rgb(255, 255, 0);\"><b>Description</b></span>:</h3><h3> Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can&nbsp;</h3><p><br></p><h3>- compile daily weekly and monthly financial reports&nbsp;</h3><h3>- follow up and Collect receivables&nbsp;</h3><h3>-compile, confirm and deposit daily sales cash&nbsp;</h3><h3>- follow up with check deposit&nbsp;</h3><h3>- prepare team salary for senior Accountant’s approval and pay accordingly&nbsp;</h3><h3>- compile and prepare customs reports for senior accountants approval and do the report</h3><div><br></div><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Part Time', 'Internal', 'Junior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Degree Bachelor', 'Male', 'Addis Abeba', '2021-09-20', '2021-09-05 17:01:53', 'Opened'),
(18, 36, 'Junior accountant', 'abel0911309125@gmail.com', 'Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can ', '<h3><span style=\"background-color: rgb(255, 255, 0);\"><b>Description</b></span>:</h3><h3> Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can&nbsp;</h3><p><br></p><h3>- compile daily weekly and monthly financial reports&nbsp;</h3><h3>- follow up and Collect receivables&nbsp;</h3><h3>-compile, confirm and deposit daily sales cash&nbsp;</h3><h3>- follow up with check deposit&nbsp;</h3><h3>- prepare team salary for senior Accountant’s approval and pay accordingly&nbsp;</h3><h3>- compile and prepare customs reports for senior accountants approval and do the report</h3><div><br></div><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Part Time', 'Internal', 'Junior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Degree Bachelor', 'Male', 'Addis Abeba', '2021-09-20', '2021-09-05 17:02:03', 'Opened'),
(19, 36, 'Junior accountant', 'abel0911309125@gmail.com', 'Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can ', '<h3><span style=\"background-color: rgb(255, 255, 0);\"><b>Description</b></span>:</h3><h3> Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can&nbsp;</h3><p><br></p><h3>- compile daily weekly and monthly financial reports&nbsp;</h3><h3>- follow up and Collect receivables&nbsp;</h3><h3>-compile, confirm and deposit daily sales cash&nbsp;</h3><h3>- follow up with check deposit&nbsp;</h3><h3>- prepare team salary for senior Accountant’s approval and pay accordingly&nbsp;</h3><h3>- compile and prepare customs reports for senior accountants approval and do the report</h3><div><br></div><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Part Time', 'Internal', 'Junior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Degree Bachelor', 'Male', 'Addis Abeba', '2021-09-20', '2021-09-05 17:02:06', 'Opened'),
(20, 36, 'Junior accountant', 'abel0911309125@gmail.com', 'Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can ', '<h3><span style=\"background-color: rgb(255, 255, 0);\"><b>Description</b></span>:</h3><h3> Our company is a firm engaged in both service and trade. We are currently looking for a competitive team member who can&nbsp;</h3><p><br></p><h3>- compile daily weekly and monthly financial reports&nbsp;</h3><h3>- follow up and Collect receivables&nbsp;</h3><h3>-compile, confirm and deposit daily sales cash&nbsp;</h3><h3>- follow up with check deposit&nbsp;</h3><h3>- prepare team salary for senior Accountant’s approval and pay accordingly&nbsp;</h3><h3>- compile and prepare customs reports for senior accountants approval and do the report</h3><div><br></div><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Internship', 'Internal', 'Junior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Degree Bachelor', 'Male', 'Addis Abeba', '2021-09-20', '2021-09-05 17:02:08', 'Opened'),
(21, 36, 'Business plan developer', 'natiking16@gmail.com', 'Coffee go in a newly developing business group, we are working on selling the best kind of coffee in the market, so we are looking for a skilled business plan developer who can write down our vision and goal in a bright and leading way and who have a background experience.\r\nWe will be paying 15,000.00 etb							', '<h3>Job Description</h3>\r\nWhat is the job about? Enter the overall description of your job.\r\n<h3>Benefits</h3>\r\n<ul>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n 	<li>What can candidates get from the position?</li>\r\n</ul>\r\n<h3>Job Requirements</h3>\r\n<ol>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n 	<li>Detailed requirement for the vacancy.?</li>\r\n</ol>\r\n<h3>How To Apply</h3>\r\nHow candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.\r\n												\r\n													', 'ArrayWordpress,Software Architecture\r\n,', '0 Years', 'Internship', 'Internal', 'Junior', '', 'Web Design', 'Yearly', 'ETB Birr 🇪🇹', '345', '4655', 'Student', 'PHD', 'Male', 'Addis Abeba', '2021-09-01', '2021-09-05 22:50:52', 'Opened'),
(22, 36, ' ርዕሰ መምህርት ለመዋዕለ ህፃናት  (Directress for Kindergarten )', 'alphacoder16@gmail.com', 'DEBORAH SCHOOL is a private school determined to offer quality education to young Ethiopians at Kindergarten, Primary, Secondary and College Preparatory School levels (Kindergarten - Gr. 12) in Addis Ababa - Summit Area. To meet our goal, we would like to incorporate strong, capable and dedicated professionals who could contribute their best to young students.', '<h3>DEBORAH SCHOOL is a private school determined to offer quality education to young Ethiopians at Kindergarten, Primary, Secondary, and College Preparatory School levels (Kindergarten - Gr. 12) in Addis Ababa - Summit Area. To meet our goal, we would like to incorporate strong, capable and dedicated professionals who could contribute their best to young students. Hence, we invite qualified applicants to submit their curriculum vitae and copies of credentials for the following positions.</h3><h3><br></h3><h3>Job Title: ርዕሰ መምህርት ለመዋዕለ ህፃናት&nbsp; (Directress for Kindergarten )</h3><h3><br></h3><h3>Qualification: Certificate/Diploma/Degree in Preschool Education from recognized institutions.</h3><h3>&nbsp;</h3><h3>Experience:- 2 years and above working in administrative positions in kindergarten division</h3><h3><br></h3><h3>Salary: - Very Attractive and negotiable</h3><h3><br></h3><h3>Required No:1</h3><h3><br></h3><h3>Application Dead Line: - From the date of its publication up to 10 consecutive working days.</h3><h3><br></h3><h3>Additional skills: English proficiency, good handwriting,&nbsp; computer literacy, organizational skills, excellent communication skills</h3><h3></h3>', 'Mysql\r\n,Java\r\n,', '4 Years', 'Temporary', 'Internal', 'Manager', '', 'Graphics Design', 'Negotiable', '', '', '', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-21', '2021-09-08 19:10:44', 'Opened'),
(23, 36, 'LSSYA Internships', 'moeskiyas@gmail.com', 'We are LSSYA. LSSYA is an online counselling platform that connects users with psychologists virtually. We are working towards becoming the first company to provide such services in Ethiopia at the client’s convenience.\r\n', '<h3>We are LSSYA. LSSYA is an online counselling platform that connects users with psychologists virtually. We are working towards becoming the first company to provide such services in Ethiopia at the client’s convenience.</h3><h3><br></h3><h3>We have opened our intern enrollment season yet again, which aims to add new team mates that can fit our company culture and work towards the same vision with us. We are interested in adding people who can bring the brain, the right attitude and motivation to work.</h3><h3><br></h3><h3>Our current openings are:</h3><h3><br></h3><h3>~ Full Stack Developer Intern</h3><h3>~ Video Editor Intern</h3><h3>~ Graphics Designer Intern</h3><h3>~ Administrative Assistant Intern</h3><h3>~ Assistant Legal Intern</h3><h3><br></h3><h3>Please check bit.ly/LSSYAVacancy for the job requirements and descriptions.&nbsp;</h3><h3><br></h3><h3>If you find a role that you qualify for and are passionate about then apply using the button below and make sure to follow the application format.</h3><h3><br></h3><h3>Looking forward to working with you!</h3><h3></h3>', 'HTML,JavaScript,Wordpress,', '4 Years', 'freelancer', 'External URL', 'Manager', 'https://telegra.ph/LSSYA-Vacancy-Post-09-09', 'Graphics Design', 'Monthly', 'ETB Birr 🇪🇹', '566', '4100', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-04', '2021-09-10 08:36:00', 'Opened'),
(24, 36, 'HR and Admin Manager', 'abelberhanu6@gmail.com', 'We are looking for a competent Human Resources and Administration Manager who has exceptional skills in designing and monitoring HR department goals and objectives. \r\nMajor Responsibility 								\r\n													', '<h3>- Manage all HR functions including recruitment, selection, onboarding, performance management, training and development, compensation, retention, and separation;&nbsp;</h3><h3>- Design a suitable induction plan for new joiners and ensure the proper delivery in the same manner;&nbsp;&nbsp;</h3><h3>- Handle periodical resource auditing and identify gaps to fill vacant positions ahead of time;&nbsp;</h3><h3>- Conduct periodical training needs assessment and set appropriate budget to build the team capacity at each level;&nbsp;</h3><h3>- Encourage employees to accomplish roles in high performance and serve as a facilitator on performance management;&nbsp;&nbsp;</h3><h3>- Design an HR policy and manuals that could fit with the company strategy and Ethiopian labor law;&nbsp;</h3><h3>- Develop and implement payment and reward policies and practices which fits the company and industry trend;&nbsp;</h3><h3>- Crafting incentive schemes for employees in order to motivate and enable them to work harder.&nbsp; &nbsp;</h3><h3>- Ensure Staff Health and Safety procedures are implemented as per the SHE policy and procedures;&nbsp;</h3><h3>- Ensure all HR documentation and data management is in line with internal control procedures and company guidelines;&nbsp;</h3><h3>- Identifies legal requirements and government reporting regulations that affect human resources functions;&nbsp;</h3><h3>- Consolidate exit interviews for all separated staff and provide a consolidated report for the management input;&nbsp;</h3><h3>- Ensure employment contract agreements are up-to-date and renewals are made in a timely manner;&nbsp;</h3><h3>- Other tasks as required and assigned by the line manager;&nbsp;</h3><h3>&nbsp;</h3><h3>&nbsp;</h3><h3>-&nbsp; &nbsp; &nbsp; Strong technical &amp; analytical skills;&nbsp;</h3><h3>- Excellent communication and leadership skills;&nbsp;</h3><h3>- Proved experience in coordinating &amp; managing multidisciplinary employees&nbsp;</h3><h3>- Excellent interpersonal, negotiation, and conflict resolution skills.&nbsp;</h3><h3>- Ability to act with integrity, professionalism, and confidentiality.&nbsp;</h3><h3>- Excellent leadership skills;&nbsp;</h3><h3>Academic Qualification:&nbsp;</h3><h3>• Bachelor/Master’s degree in Human Resources, Management, Business Administration, or related fields&nbsp;</h3><h3>&nbsp;</h3><h3>Experience:&nbsp;</h3><h3>• 8 -10+ Years of proven work experience.&nbsp;</h3><h3>• 5+ years of experience on managerial Position is mandatory.</h3><h3></h3>', 'PHP,JavaScript,Wordpress,', '3 Years', 'Full Time', 'Internal', 'Senior', '', 'Graphics Design', 'Monthly', 'ETB Birr 🇪🇹', '5000', '1500', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-23', '2021-09-11 12:12:37', 'Opened'),
(25, 36, 'Website development', 'natiking16@gmail.com', 'We are an IT company that primarily develops and promotes our own products. Every so often though we get website development service requests which we would like to engage in by outsourcing the development of the website to an external freelancer who is skilled in the following development technologies:				', '<p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">We are an IT company that primarily develops and promotes our own products. Every so often though we get website development service requests which we would like to engage in by outsourcing the development of the website to an external freelancer who is skilled in the following development technologies:</p><ol style=\"border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Joomla 4 and various essential extensions and theme that makes up for a great website</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Able to elicit requirements through writing</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Build upon gathered requirements a roadmap towards a website</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Implement along with the roadmap</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Deliver a final website to us</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Has own development infrastructure such as laptop and internet connectivity</li></ol><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">If you have +1 years of experience in working with the above and this is of interest to you please we would like to hear from you with the following</p><ol style=\"border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Your CV</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Active and working links to websites you have developed and you feel represent your capacity. Let us know what parts of each website you have developed, ex technical implementation, graphical content development, textual content development, branding, graphical design</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">A half-page proposal detailing your approach in implementing a basic website consisting of the below-listed pages. Please do include the timeline, cost, and requirements/inputs you need from us/ to get the work done<br style=\"border-radius: 0px;\">3.1. home page,<br style=\"border-radius: 0px;\">3.2. about us,<br style=\"border-radius: 0px;\">3.3. team,<br style=\"border-radius: 0px;\">3.4. products,<br style=\"border-radius: 0px;\">3.5. services, and<br style=\"border-radius: 0px;\">3.6. contact us.</li></ol><h3></h3>', 'HTML,JavaScript,Wordpress,Software Architecture\r\n,Link Building\r\n,', '1 Years', 'Permanent', 'Internal', 'Senior', '', 'Web Design', 'Negotiable', '', '', '', 'Manager', 'Certificate', 'Male', 'Addis Abeba', '2021-09-05', '2021-09-11 20:44:50', 'Opened'),
(26, 50, 'Digital Marketing Sales Representative', 'abel0911309125@gmail.com', 'Identify and establish contact with potential customers', '<h3>&nbsp;Identify and establish contact with potential customers</h3><h3><br></h3><h3>• Schedule and perform product demonstrations with potential customers</h3><h3><br></h3><h3>• Develop and maintain relationships with existing customers</h3><h3><br></h3><h3>• Attend targeted industry events to identify potential sales leads and make meaningful contact with potential customers</h3><h3><br></h3><h3>• Follow industry trends to identify new opportunities for potential sales</h3><h3><br></h3><h3>• Recommend marketing strategies to target a specific region or demographic</h3><h3><br></h3><h3>• Generate and submit sales reports to management</h3><h3><br></h3><h3>Skills:&nbsp;</h3><h3><br></h3><h3>• Excellent communication, writing and listening skills Amharic and English.&nbsp; bilingual candidates fluent in Oromiffa highly considered.&nbsp;</h3><h3><br></h3><h3>• Excellent customer service skills</h3><h3><br></h3><h3>• Self-motivated and able to work through difficulties situations and tasks</h3><h3><br></h3><h3>• Efficient &amp; capable of value-added solution sales</h3><h3><br></h3><h3>• We are looking for product and forward-thinking individuals, capable of shopping initiative and drive.&nbsp;</h3><h3>&nbsp; &nbsp;</h3><h3>An ideal potential employee will be able to promote the company’s services and solutions efficiently and effectively to potential clients.</h3><h3><br></h3><h3>Benefit: Attractive salary + Commission</h3><h3><br></h3><h3>Workplace: Addis Ababa</h3><h3><br></h3><h3>Application Process: Please submit both resume/CV and academic documents by email only.</h3><h3></h3>', '', '2 Years', 'Remote', 'Internal', 'Senior', '', 'Graphics Design', 'Monthly', 'ETB Birr 🇪🇹', '7878', '10000', 'Executive', 'Degree Bachelor', 'Both👨‍🌾', 'Addis Abeba', '2021-09-22', '2021-09-11 23:01:34', 'Closed'),
(27, 36, 'Logistics Manager', 'abel0911309125@gmail.com', 'We’re JTI, Japan Tobacco International and we believe in freedom. We think that the possibilities are limitless when you’re free to choose. In fact, we’ve spent the last 20 years innovating, creating new and better products for our consumers to choose from. It’s how we’ve grown to be present in 130 countries.', '<p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">We’re JTI, Japan Tobacco International and&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">we believe in freedom</span>. We think that the possibilities are limitless when you’re free to choose. In fact, we’ve spent the last 20 years innovating, creating new and better products for our&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">consumers to choose from</span>. It’s how we’ve grown to be present in 130 countries.</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">But our business isn’t just business. Our business is our people. Their talent. Their potential. We believe&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">when they’re free</span>&nbsp;to be themselves, grow, travel and develop,&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">amazing things can happen for our business</span>.&nbsp;</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">That’s why our employees, from around the world, choose to be a part of JTI. It’s why&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">9 out of 10 would recommend us to a friend</span>. And why we’ve been awarded&nbsp;<span style=\"border-radius: 0px; font-weight: 700;\">Global Top Employer status, six years running</span>.&nbsp;</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">So when you’re ready to choose a career you’ll love, in a company you’ll love, feel free to #JoinTheIdea.&nbsp;</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><span style=\"border-radius: 0px; font-weight: 700;\">Learn more:&nbsp;</span><a href=\"https://www.jti.com/\" target=\"_blank\" style=\"border-radius: 0px; color: rgb(114, 192, 44); outline-style: initial !important; outline-width: 0px !important;\">jti.com</a></p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">The ideal candidate will&nbsp;lead&nbsp;logistics operations&nbsp;by ensuring its efficiency,&nbsp;partner &amp; liaise&nbsp;with internal,&nbsp;external stakeholders&nbsp;and&nbsp;logistics service providers for all import&nbsp;and&nbsp;export&nbsp;business activities&nbsp;to ensure on-time&nbsp;shipment and&nbsp;delivery, as well as&nbsp;facilitating&nbsp;the timely customs clearance of goods.</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">&nbsp;</p><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><span style=\"border-radius: 0px; font-weight: 700;\">Main Areas of Responsibility:</span></p><ul style=\"border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Request vessel schedule&nbsp;and&nbsp;ensure timely delivery of import &amp; export&nbsp;goods and materials&nbsp;at optimal cost.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Ensure strong follow-up process&nbsp;in order to&nbsp;avoid extra warehouse cost, containers&nbsp;demurrage cost, penalties.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Ensure compliance to internal and external regulations.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Ensure timely payments&nbsp;settlement to the service providers.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Maintain import-export &amp; logistics databases, documents and reporting.&nbsp;Organize and ensure timely collection of final declarations&nbsp;and&nbsp;final bank settlements.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Ensure weekly &amp; monthly logistics performance&nbsp;and&nbsp;status update reports&nbsp;with detailed cost &amp; saving breakdowns.</li></ul><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><span style=\"border-radius: 0px; font-weight: 700;\">Required Academic Qualification &amp; Experience:</span></p><ul style=\"border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">BA Degree in supply chain management, management, business administration, accounting &amp; related fields</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Minimum 6 years relevant working experience in the global supply chain, logistics, inventory management.</li></ul><p style=\"border-radius: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><span style=\"border-radius: 0px;\"><b>Required Skills:</b></span></p><ul style=\"border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\"><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Advanced knowledge of English (verbal and written)</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Excellent knowledge, with proven experience, of Microsoft Office applications including Microsoft Outlook, Excel, Word and PowerPoint</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Logistics, warehouse and inventory management.</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Proven experience in people management is advantageous</li><li style=\"border-radius: 0px; color: rgb(85, 85, 85);\">Strong organization and leadership skills</li></ul><h3></h3>', 'Software Architecture\r\n,Python\r\n,shopify,', '3 Years', 'Contractual', 'Internal', 'Senior', '', 'Graphics Design', 'Monthly', 'ETB Birr 🇪🇹', '566', '4100', 'Officer', 'Associate', 'Both👨‍🌾', 'Addis Abeba', '2021-09-22', '2021-09-11 23:26:42', 'Opened');

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
(81, 14, 'assets/images/jobseeker/1573627972abel.jpg', 'assets/images/jobseeker/226788458abel.png', ' Web designer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.\r\n', 'male', '2021-08-24'),
(82, 41, 'assets/images/jobseeker/1247637367abel.jpg', 'assets/images/jobseeker/1149629001abel.jpg', ' fashion designer', ' bnccccccccccccbvvvvvvvvvvvvvvvvvv', 'male', '0000-00-00'),
(83, 51, 'assets/images/jobseeker/116808655abel.jpg', 'assets/images/jobseeker/1670542503abel.jpg', 'Full Stack Developer', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.', 'male', '2021-09-01');

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
(16, 2, 'fb', 'fb.com'),
(17, 41, 'nb', 'bn');

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
(2, 2, 'demo', 'type', 'description'),
(3, 41, '', 'type', 'description');

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
  `file_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_attachment_file`
--

INSERT INTO `jobseeker_attachment_file` (`id`, `jobseeker_id`, `file_path`, `file_title`) VALUES
(7, 41, 'assets/cvs/2055711206eski.docx', 'tv design'),
(9, 46, 'assets/cvs/635544723avel coder.docx', 'web design'),
(21, 41, 'cvs_path', 'file_title'),
(22, 51, 'assets/cvs/446552805ashu_king.pdf', 'web design'),
(23, 41, 'assets/cvs/144439032eski.docx', 'app design');

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
  `categoryId` int(11) NOT NULL,
  `portfolio_title` varchar(200) NOT NULL,
  `portfolio_skill` text NOT NULL,
  `portfolio_image` varchar(200) NOT NULL,
  `portfolio_description` text NOT NULL,
  `post_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_skill`
--

CREATE TABLE `jobseeker_skill` (
  `id` int(11) NOT NULL,
  `jobseeker_id` text NOT NULL,
  `skill_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_skill`
--

INSERT INTO `jobseeker_skill` (`id`, `jobseeker_id`, `skill_name`) VALUES
(32, '41', 'Wordpress,Mysql\r\n,PHP,C# Programming\r\n'),
(33, '51', 'JavaScript,Wordpress,Software Architecture\r\n,Mysql\r\n,Java\r\n');

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
(22, 14, 'instagram', 'sdf', ''),
(23, 41, 'linkedin', 'gb', ''),
(24, 51, 'facebook', 'fb.com', ''),
(25, 51, 'linkedin', 'abel', ''),
(26, 41, 'facebook', 'fb.com/eski', ''),
(27, 41, 'youtube', 'eskicoder', '');

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
(3, 2, 'Caladrio', 'web developer', 2003, 2005, 'on', 'no', 'off'),
(4, 41, 'Alpha', 'Web Design', 0000, 0000, 'on', 'helo', 'off'),
(5, 41, 'Caladrio', 'web developer', 0000, 0000, 'on', 'hello', 'off'),
(6, 51, 'Caladrio', 'web developer', 2005, 2010, 'on', 'I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.', 'off');

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

--
-- Dumping data for table `jobseeker_work_status`
--

INSERT INTO `jobseeker_work_status` (`id`, `jobseeker_id`, `work_availability`, `job_type`) VALUES
(1, 41, 'More then 30 hrs/week', 'Remote'),
(2, 51, 'As needed- open to offers', 'freelancer');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
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
(2, '1', 'employer', 'all employers', 'A company can view all those\r\nwho have applied for a job\r\nvacancyA company can view all those\r\nwho have applied for a job\r\nvacancyA company can view all those\r\nwho have applied for a job\r\nvacancy', 'active', '2021-09-02 13:36:25'),
(3, '1', 'employer', 'hey bro', 'demo', 'active', '2021-09-02 13:36:25'),
(4, '1', 'employer', 'selam endet  bro', 'demo', 'active', '2021-09-02 13:36:25'),
(5, '1', 'employer', 'alew endet  bro', 'demo', 'active', '2021-09-02 13:36:25'),
(6, '1', 'employer', 'gerami endet  bro', 'demo', 'active', '2021-09-02 13:36:25');

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
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `userPhoto` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` varchar(150) NOT NULL,
  `account_status` varchar(30) NOT NULL DEFAULT 'active',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `username`, `email`, `password`, `userPhoto`, `role_id`, `code`, `status`, `account_status`, `date`) VALUES
(1, '', '', 'alphacoder', 'alpha@gmail.com', 'alpha', 'offer11.jpg', 1, 0, 'active', 'active', '2021-07-09 15:54:20'),
(2, '', '', 'job', 'job@gmail.com', 'job123', 'no photo', 2, 0, 'active', 'active', '2021-07-16 14:46:05'),
(3, '', '', 'ashu', 'ash@gmail.com', 'ashu', 'ashu', 2, 0, 'active', 'active', '2021-08-05 16:37:41'),
(4, '', '', 'alpha', 'alpha@gmail.com', 'alpha', 'no photo', 2, 0, 'active', 'active', '2021-08-17 09:27:27'),
(6, '', '', 'job', 'abel@gmail.com', '465789', '', 2, 5, 'status', 'active', '2021-08-26 17:08:28'),
(14, '', '', 'job', 'natiking16@gmail.com', '$2y$10$vYjPDdtHLphigrgzWi2VouEcH1Wwu64h4hgFzUraaXFdAi2u2dSHq', '', 2, 0, 'verified', 'active', '2021-08-26 18:00:39'),
(17, '', '', 'job', 'abelberhanu65@gmail.com', '$2y$10$XHmjrNtikK0eMSbDxQccmenqEMOjVRCFBpukyRFikC.Ih832LNFfe', '', 2, 0, 'verified', 'active', '2021-08-26 21:32:00'),
(36, '', '', 'abel', 'alphacoder16@gmail.com', '$2y$10$z0.RiFQyAeWhxYV31n5In..E65x.sKxb.PSH/figte9D05wVt/jvm', '', 3, 0, 'verified', 'active', '2021-08-26 23:15:06'),
(37, '', '', 'hamuka', 'hamwogi3@gmail.com', '$2y$10$7rDPVG/f0t0f9d8TDAcVP.uF9utzcXrlHRj.xx3H3JtemI9/N8KQG', '', 2, 985549, 'verified', 'active', '2021-08-27 11:46:32'),
(38, '', '', 'job', 'abela@gmail.com', '$2y$10$TMMk1RZr8mO4WqjxYefrc.i1SAmlV7FNtvnNYtHwSRkG/haqsNDUu', '', 3, 421221, 'notverified', 'active', '2021-08-27 17:31:47'),
(39, '', '', 'ashuking', 'natnaelsmith@gmail.com', '$2y$10$XUYCf3f/jgXkYhIyMZONT.FL7XArFGQuJBX9P6Rr21i6XxJdEEm6K', '', 2, 0, 'verified', 'active', '2021-08-28 12:51:44'),
(40, '', '', 'ashu', 'ashulastkingj.r@gmail.com', '$2y$10$MmTqlzGV3ELujg801c8gN.vMiI06yu8fo4OugiYxB.EDOwB1WUcGi', '', 2, 0, 'verified', 'active', '2021-08-30 11:52:51'),
(41, '', '', 'eski', 'moeskiyas@gmail.com', '$2y$10$a9UFACkdN.PqudKpt0nJGORMYf6/gToDFLMxUtdMO/0JaJlKHSH4W', '', 2, 0, 'verified', 'active', '2021-08-30 11:55:19'),
(42, '', '', 'job', 'abelberhanu612@gmail.com', '$2y$10$vcKxMrieMX.fWsNi5mmnWuPOLISRZUq4BsJ9zI1Dwdcjx5ifbCU7i', '', 2, 606578, 'notverified', 'active', '2021-08-30 16:47:28'),
(43, '', '', 'job', 'abelberhanu6123@gmail.com', '$2y$10$Bp9D6rm7H0gWw3BaW/tzwOPKW/gV.dvMkjyxamPdl2HVTM5ELdRpC', '', 3, 0, 'verified', 'active', '2021-08-30 16:48:11'),
(44, '', '', 'demo', 'z7foa9hcr2@eposta.buzz', '$2y$10$NcWL2z30Bg5B0mJL35HkE.M/J/RsEEvXeeWuxfhL5mxtGpT2mrXFe', '', 2, 482334, 'notverified', 'active', '2021-09-04 16:49:15'),
(46, '', '', 'avel coder', 'avelabebe3@gmail.com', '$2y$10$FMnn0FiFtUIeaMUGlUsG/.mgl0kKyEG/kkIK/jLEmeHVH9QlyXnRK', '', 2, 0, 'verified', 'active', '2021-09-06 17:40:22'),
(47, '', '', 'tsegaw', 'tsegabelgoha@gmail.com', '$2y$10$S5jRPkt6ZV1gNX/8q6ThfezaDy.oroDT6dmb27abMgdtq.gmxL0/q', '', 2, 0, 'verified', 'active', '2021-09-06 17:54:16'),
(48, 'abel', 'berhanu', 'jobb', 'zhimtoe90x@eposta.buzz', '$2y$10$ldm/pz71PsdHgtR5mkC1FO5.V35Ez4IZU2YgGCcmL4DhtKkfkDoRa', '', 2, 0, 'verified', 'active', '2021-09-07 23:29:12'),
(49, 'Mark', 'Simpson', 'dawitendashaw', 'twytr1fedr@eposta.buzz', '$2y$10$YYK2wL2tF/yWruSF4Q3ou.KaIonrD4jCCzdIMsupWyuYY5XZrdeLS', '', 2, 297622, 'notverified', 'active', '2021-09-07 23:36:32'),
(50, 'ashenafi', 'tewelde', 'ashu_king', 'abelberhanu2@gmail.com', '$2y$10$7JPfcNyPJ2u2GoTD4SKZAemOMOmFfZP7VlBj5gUV.iskMBPRCUHqC', '', 3, 0, 'verified', 'active', '2021-09-11 15:00:15'),
(51, 'ashenafi', 'tewelde', 'ashu_king', 'abelberhanu6@gmail.com', '$2y$10$O/qRKKX3UyUmxnl4MwutKuEAlimUOpmppQMjOgczbdDr9KOlALL4y', '', 2, 0, 'verified', 'active', '2021-09-11 15:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `views_count`
--

CREATE TABLE `views_count` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views_count`
--

INSERT INTO `views_count` (`id`, `job_id`, `views`) VALUES
(1, 24, 10),
(2, 25, 20),
(3, 26, 6),
(4, 27, 17),
(5, 17, 0),
(6, 17, 10);

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
  ADD KEY `job  id` (`job_id`),
  ADD KEY `job seeker attachment file id` (`attachment_file_id`);

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
-- Indexes for table `jobseeker_skill`
--
ALTER TABLE `jobseeker_skill`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_status` (`jobseeker_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `views_count`
--
ALTER TABLE `views_count`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobseekerbio`
--
ALTER TABLE `jobseekerbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `jobseekercertifications`
--
ALTER TABLE `jobseekercertifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobseekereducation`
--
ALTER TABLE `jobseekereducation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobseekerlanguages`
--
ALTER TABLE `jobseekerlanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobseeker_attachment_file`
--
ALTER TABLE `jobseeker_attachment_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- AUTO_INCREMENT for table `jobseeker_skill`
--
ALTER TABLE `jobseeker_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobseeker_social_media`
--
ALTER TABLE `jobseeker_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobseeker_work_experience`
--
ALTER TABLE `jobseeker_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobseeker_work_status`
--
ALTER TABLE `jobseeker_work_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `views_count`
--
ALTER TABLE `views_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `job  id` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `job seeker attachment file id` FOREIGN KEY (`attachment_file_id`) REFERENCES `jobseeker_attachment_file` (`id`) ON DELETE NO ACTION;

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
  ADD CONSTRAINT `attachmentfile_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION;

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

--
-- Constraints for table `views_count`
--
ALTER TABLE `views_count`
  ADD CONSTRAINT `job id` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
