-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 12:00 PM
-- Server version: 10.3.29-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcacademy_abcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchs`
--

CREATE TABLE `batchs` (
  `b_id` int(11) NOT NULL,
  `b_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_couse` int(11) DEFAULT NULL,
  `b_creation_date` text DEFAULT NULL,
  `b_day` text DEFAULT NULL,
  `b_month` text DEFAULT NULL,
  `b_year` text DEFAULT NULL,
  `b_class_on_week` int(11) DEFAULT NULL,
  `bc_duration` text DEFAULT NULL,
  `b_end_day` varchar(11) DEFAULT NULL,
  `b_end_month` varchar(11) DEFAULT NULL,
  `b_end_year` varchar(11) DEFAULT NULL,
  `b_class_time` varchar(11) DEFAULT NULL,
  `b_class_time_ampm` varchar(11) DEFAULT NULL,
  `b_mentor` varchar(11) DEFAULT NULL,
  `b_on_day_saturday` varchar(11) DEFAULT NULL,
  `b_on_day_sunday` varchar(11) DEFAULT NULL,
  `b_on_day_tuesday` varchar(11) DEFAULT NULL,
  `b_on_day_wednesday` varchar(11) DEFAULT NULL,
  `b_on_day_thursday` varchar(11) DEFAULT NULL,
  `b_on_day_friday` varchar(11) DEFAULT NULL,
  `b_on_day_monday` varchar(11) DEFAULT NULL,
  `b_terget` int(11) DEFAULT NULL,
  `b_visibility` int(11) DEFAULT NULL,
  `b_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchs`
--

INSERT INTO `batchs` (`b_id`, `b_name`, `b_couse`, `b_creation_date`, `b_day`, `b_month`, `b_year`, `b_class_on_week`, `bc_duration`, `b_end_day`, `b_end_month`, `b_end_year`, `b_class_time`, `b_class_time_ampm`, `b_mentor`, `b_on_day_saturday`, `b_on_day_sunday`, `b_on_day_tuesday`, `b_on_day_wednesday`, `b_on_day_thursday`, `b_on_day_friday`, `b_on_day_monday`, `b_terget`, `b_visibility`, `b_status`) VALUES
(3, '310', 9, '2021-04-20 14:47:37', '24', '04', '2021', 2, '2m', '26', '06', '2021', '3.00', 'PM', 'Zahidul', '1', '0', '1', '0', '0', '0', '0', 30, 1, 1),
(4, '311', 9, '2021-04-20 14:59:06', '22', '04', '2021', 2, '2m', '24', '06', '2021', '9.00', 'PM', 'Zahidul', '0', '0', '0', '0', '1', '0', '1', 30, 1, 1),
(5, '312', 9, '2021-04-20 15:11:00', '01', '05', '2021', 2, '2m', '24', '07', '2021', '11.00', 'AM', 'Salmantushe', '1', '0', '1', '0', '0', '0', '0', 30, 1, 1),
(6, '248', 6, '2021-04-20 15:25:15', '24', '04', '2021', 2, '2m', '19', '06', '2021', '9.00', 'PM', 'Sabbir', '1', '0', '1', '0', '0', '0', '0', 30, 1, 1),
(7, '118', 10, '2021-04-20 15:26:58', '29', '04', '2021', 2, '2m', '24', '06', '2021', '9.00', 'PM', 'Maruf', '0', '0', '0', '0', '1', '0', '1', 40, 1, 1),
(8, '410', 11, '2021-05-16 01:21:53', '01', '05', '2021', 2, '2m', '01', '07', '2021', '9', 'AM', 'Masrur', '1', '0', '0', '0', '0', '0', '1', 65, 1, 1),
(9, '411', 11, '2021-04-25 12:48:51', '01', '05', '2021', 2, '2m', '01', '07', '2021', '9', 'AM', 'Masrur', '0', '1', '0', '1', '0', '0', '0', 30, 1, 1),
(10, '314', 9, '2021-04-28 22:49:56', '03', '05', '2021', 2, '2m', '28', '06', '2021', '9.00', 'PM', 'Salmantushe', '0', '0', '0', '0', '1', '0', '1', 40, 1, 1),
(11, '210', 12, '2021-04-29 13:21:17', '08', '05', '2021', 2, '1m', '05', '06', '2021', '9.00', 'PM', 'Fahim', '0', '0', '0', '0', '1', '0', '1', 40, 1, 1),
(12, '249', 6, '2021-05-02 21:06:18', '08', '05', '2021', 2, '2m', '10', '07', '2021', '9.00', 'PM', 'Sabbir', '1', '0', '1', '0', '0', '0', '0', 40, 1, 1),
(13, '360', 13, '2021-05-04 18:31:49', '10', '10', '2021', 2, '1m', '14', '06', '2021', '9.00', 'PM', 'Masrur', '0', '0', '0', '0', '1', '0', '1', 40, 1, 1),
(14, '119', 10, '2021-05-07 15:16:46', '19', '05', '2021', 2, '2m', '21', '07', '2021', '9.00', 'PM', 'Maruf', '0', '1', '0', '1', '0', '0', '0', 40, 1, 1),
(15, '316', 9, '2021-05-09 02:13:07', '22', '05', '2021', 2, '2m', '24', '07', '2021', '11.00', 'PM', 'Salmantushe', '1', '0', '1', '0', '0', '0', '0', 40, 1, 1),
(16, '220', 10, '2021-05-16 01:14:19', '22', '05', '2021', 2, '2m', '24', '07', '2021', '9.00', 'PM', 'Maruf', '1', '0', '1', '0', '0', '0', '0', 40, 1, 1),
(17, '317', 9, '2021-05-16 01:17:43', '20', '05', '2021', 2, '2m', '22', '07', '2021', '9.00', 'PM', 'Zahidul', '0', '0', '0', '0', '1', '0', '1', 40, 1, 1),
(18, '315', 9, '2021-05-16 01:21:01', '11', '05', '2021', 2, '2m', '20', '07', '2021', '9.00', 'PM', 'Salmantushe', '1', '0', '1', '0', '0', '0', '0', 40, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_session` varchar(50) NOT NULL,
  `ins_mc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_session`, `ins_mc_id`) VALUES
(332, '99UZ5NW8WC', 21),
(333, 'oNN7pcc8ix', 22),
(334, 'oNN7pcc8ix', 21),
(335, '2qFSdGHw4w', 23),
(336, 'jGudGViXHv', 22);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `course_category` varchar(100) NOT NULL,
  `course_tag` varchar(100) NOT NULL,
  `course_image` varchar(200) NOT NULL COMMENT 'thumbnail link',
  `course_price` float NOT NULL,
  `course_discount_price` float NOT NULL,
  `course_video_level` varchar(50) NOT NULL,
  `course_language` varchar(50) NOT NULL,
  `course_requirements` text NOT NULL,
  `course_outcome` text NOT NULL,
  `course_link` varchar(200) NOT NULL,
  `course_meta_keywords` text NOT NULL,
  `course_meta_description` text NOT NULL,
  `course_short_description` text CHARACTER SET utf8 NOT NULL,
  `course_long_description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_title`, `course_category`, `course_tag`, `course_image`, `course_price`, `course_discount_price`, `course_video_level`, `course_language`, `course_requirements`, `course_outcome`, `course_link`, `course_meta_keywords`, `course_meta_description`, `course_short_description`, `course_long_description`) VALUES
(1, 'pt22fzEftu', ' এসো ঘরে বসে শিখি', 'Graphics Design', 'desin and development', 'images/154657059_437017704046352_2859249758630180166_n.png', 15000, 12000, '', 'Bangla', '', '', '', '', '', 'এই কোর্স শিখে আপনারা অনলাইন থেকে আয় করতে পারবেন।', ''),
(2, 'pt34las6q', 'English Lekha Pora Shob', 'IELTS Spoken', 'ILETS', 'images/154657059_437017704046352_2859249758630180166_n.png', 18000, 15000, '', 'English', '', '', '', '', '', '', ''),
(3, 'ptdfadf23', 'কথা কম কাজ হবে বেশি', 'IELTS Spoken', 'ILETS', 'images/154657059_437017704046352_2859249758630180166_n.png', 18000, 15000, '', 'English', '', '', '', '', '', 'সে অনেক দিন আগের কথা , ভুলবো না আমি', ''),
(4, 'ptdfadf23', 'গ্রাফিক্স ডিজাইন', 'IELTS Spoken', 'ILETS', 'images/154657059_437017704046352_2859249758630180166_n.png', 18000, 15000, '', 'English', '', '', '', '', '', 'সে অনেক দিন আগের কথা , ভুলবো না আমি', ''),
(5, 'ptdfadf23', 'ওয়েব ডিজাইন', 'IELTS Spoken', 'ILETS', 'images/154657059_437017704046352_2859249758630180166_n.png', 18000, 15000, '', 'English', '', '', '', '', '', 'সে অনেক দিন আগের কথা , ভুলবো না আমি', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`c_id`, `c_name`) VALUES
(1, 'Office Fundamental'),
(2, 'Graphic Design'),
(3, 'Web Design'),
(4, 'Web Development'),
(5, 'Data Entry'),
(6, 'Digital Marketing'),
(7, 'Advance Youtube Marketing'),
(8, 'Wordpress Theme Development'),
(9, 'Wordpress Development'),
(10, 'Search Engine Optimization (SEO)'),
(11, 'Logo Design'),
(12, 'Facebook Marketing'),
(13, 'Android Apps Development'),
(14, 'Blogging & Google Adsense'),
(15, 'Advance CPA Marketing'),
(16, 'Video Editing');

-- --------------------------------------------------------

--
-- Table structure for table `desiganation`
--

CREATE TABLE `desiganation` (
  `d_id` int(11) NOT NULL,
  `d_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desiganation`
--

INSERT INTO `desiganation` (`d_id`, `d_name`) VALUES
(1, 'Mentor'),
(2, 'Accounts manager'),
(3, 'General manager'),
(4, 'Call Manager'),
(5, 'Admin'),
(6, 'Hardware Executive'),
(7, 'Administrator'),
(8, 'Supporet'),
(11, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `enroll_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ex_id` int(11) NOT NULL,
  `ex_name` text DEFAULT NULL,
  `ex_amount` text DEFAULT NULL,
  `ex_type` text DEFAULT NULL,
  `ex_date` text DEFAULT NULL,
  `ex_day` text DEFAULT NULL,
  `ex_month` text DEFAULT NULL,
  `ex_year` text DEFAULT NULL,
  `ex_description` text DEFAULT NULL,
  `ex_save` int(11) DEFAULT NULL,
  `ex_for` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ex_id`, `ex_name`, `ex_amount`, `ex_type`, `ex_date`, `ex_day`, `ex_month`, `ex_year`, `ex_description`, `ex_save`, `ex_for`) VALUES
(5, 'Office Advance', '15000', 'House-Rent', '2021-04-28 19:56:29', '28', '04', '2021', '', NULL, 'Abc-Acadamy'),
(6, 'Stationary', '200', 'Stationary-Cost', '2021-04-28 19:56:57', '28', '04', '2021', '', NULL, 'Abc-Acadamy'),
(7, 'Cashout cost', '266', 'Office-Expense', '2021-04-28 19:57:40', '28', '04', '2021', '', NULL, 'Abc-Acadamy'),
(8, 'Mobail cost ', '240', 'Mobile-Cost', '2021-04-28 20:06:25', '28', '04', '2021', '', NULL, 'Abc-Acadamy'),
(9, 'boosting ', '5100', 'Boosting-Cost', '2021-04-29 16:31:08', '29', '04', '2021', '', NULL, 'Abc-Acadamy'),
(10, 'boosting', '8200', 'Boosting-Cost', '2021-05-02 17:52:29', '02', '05', '2021', '', NULL, 'Abc-Acadamy'),
(11, 'Mobail cost 29/04/2021 To 05/04/2021', '710', 'Mobile-Cost', '2021-05-06 02:53:36', '06', '05', '2021', '', NULL, 'Abc-Acadamy'),
(12, 'Boosting 05/05/2020', '4100', 'Boosting-Cost', '2021-05-06 02:55:03', '06', '05', '2021', '', NULL, 'Abc-Acadamy'),
(13, 'boosting 09/05/2021', '4100', 'Boosting-Cost', '2021-05-09 13:58:04', '09', '05', '2021', '', NULL, 'Abc-Acadamy'),
(14, 'shibly Salary', '1900', 'Salary', '2021-05-12 00:09:11', '12', '05', '2021', 'Salary withdrawn Amounts TK.1900 (May)', NULL, 'Sibli.abc'),
(15, 'Arman', '1000', 'Salary', '2021-05-12 00:09:42', '12', '05', '2021', 'Salary withdrawn Amounts TK.1000 (May)', NULL, 'Arman.abc'),
(16, 'Jalal Mahi', '335', 'Salary', '2021-05-12 00:10:06', '12', '05', '2021', 'Salary withdrawn Amounts TK.335 (May)', NULL, 'Jalalmahi'),
(17, 'Nazmul', '665', 'Salary', '2021-05-12 00:11:15', '12', '05', '2021', 'Salary withdrawn Amounts TK.665 (May)', NULL, 'Nazmul.abc');

-- --------------------------------------------------------

--
-- Table structure for table `featured_companies`
--

CREATE TABLE `featured_companies` (
  `fc_id` int(11) NOT NULL,
  `fc_title` varchar(256) NOT NULL,
  `fc_image` varchar(256) NOT NULL,
  `fc_link` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_companies`
--

INSERT INTO `featured_companies` (`fc_id`, `fc_title`, `fc_image`, `fc_link`) VALUES
(1, 'Walton', 'walton.png', 'https://waltonbd.com/'),
(2, 'Ecstasy', 'eastasy.png', 'https://ecstasybd.com/'),
(3, 'Samsung', 'samsung.png', 'https://www.samsung.com/in/'),
(4, 'Huda Beauty', 'huda.png', 'https://hudabeauty.com/en_BD/home?changeCountry=true'),
(5, 'Asus', 'asus.png', 'https://www.asus.com/bd/');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ins_id` int(11) NOT NULL,
  `ins_name` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_pass` text DEFAULT NULL,
  `ins_phone` text DEFAULT NULL,
  `ins_email` varchar(50) DEFAULT NULL,
  `ins_sex` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ins_nid` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ins_dob` varchar(100) NOT NULL,
  `ins_education` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_joining_date` date DEFAULT NULL,
  `ins_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_desiganation` text DEFAULT NULL,
  `ins_online_offline` tinyint(4) DEFAULT NULL,
  `ins_address` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_discription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_photo` text DEFAULT NULL,
  `ins_type` int(11) DEFAULT NULL,
  `ins_verified` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ins_id`, `ins_name`, `ins_pass`, `ins_phone`, `ins_email`, `ins_sex`, `ins_nid`, `ins_dob`, `ins_education`, `ins_joining_date`, `ins_facebook`, `ins_desiganation`, `ins_online_offline`, `ins_address`, `ins_notes`, `ins_discription`, `ins_photo`, `ins_type`, `ins_verified`) VALUES
(40, 'Sayed Amin2', 'inFAl6sAG8F4U', '01911059426', 'saidamin07@gmail.com', 'পুরুষ', '234123456440', '07-01-1994', 'HSC2', '2021-05-09', 'Sayed Amin2', NULL, NULL, 'nuton bazar, Khulna2', NULL, NULL, NULL, NULL, 1),
(41, 'Aslam Mamud', 'in.wPLySZw5vc', '01521310261', 'aslam@yahoo.com', 'পুরুষ', '', '1996-07-12', 'BSc in CSE', '2021-05-10', 'https://www.facebook.com/anonymous.mamud', NULL, NULL, 'Mohammedpur, Dhaka', NULL, NULL, NULL, NULL, 1),
(42, 'Ovi Sheikh', 'inikDFh.6am7U', '01911686324', 'ovi0088@gmail.com', 'পুরুষ', '252589858', '1993-12-25', 'MBA', '2021-05-10', 'https://www.facebook.com/ovisheikh007/', NULL, NULL, 'Dhanmondi 27', NULL, NULL, NULL, NULL, 1),
(43, 'Abdullah Al Masrur', 'in4dDRDP2qYPg', '01611780548', 'mashrur867@gmail.com', 'পুরুষ', '8669440953', '1996-05-10', 'MBA', '2021-05-10', 'https://www.facebook.com/Almashrur', NULL, NULL, '167/1-F East Kafrul, Dhaka Cantonment, Dhaka 1206', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_made_courses`
--

CREATE TABLE `instructor_made_courses` (
  `ins_mc_id` int(11) NOT NULL,
  `ins_mc_instrc_id` int(11) NOT NULL,
  `ins_mc_title` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_catg_id` int(11) DEFAULT NULL,
  `ins_mc_sub_catg_id` int(11) DEFAULT NULL,
  `ins_mc_meta_keys` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_meta_desc` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_code` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_image` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_free` tinyint(4) DEFAULT NULL,
  `ins_mc_orginal_fee` int(11) DEFAULT NULL,
  `ins_mc_offer_fee` int(11) DEFAULT NULL,
  `ins_mc_discount_till_date` date DEFAULT NULL,
  `ins_mc_discount_type` tinyint(4) DEFAULT NULL COMMENT '0==% | 1==fixed',
  `ins_mc_discount` int(11) DEFAULT NULL,
  `ins_mc_cls_total` int(11) DEFAULT NULL,
  `ins_mc_cls_duration` tinyint(4) DEFAULT NULL,
  `ins_mc_short_desc` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_long_desc` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_level` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_language` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_vd_provider` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_vid_link` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_url` varchar(256) DEFAULT NULL,
  `ins_mc_module` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_outcomes` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_requirements` text CHARACTER SET utf8 DEFAULT NULL,
  `ins_mc_enrolled` int(11) NOT NULL DEFAULT 0,
  `ins_mc_priority` tinyint(4) NOT NULL DEFAULT 0,
  `ins_mc_step` tinyint(4) NOT NULL DEFAULT 0,
  `ins_mc_visibility` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1 == visible | 0 == not'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_made_courses`
--

INSERT INTO `instructor_made_courses` (`ins_mc_id`, `ins_mc_instrc_id`, `ins_mc_title`, `ins_mc_catg_id`, `ins_mc_sub_catg_id`, `ins_mc_meta_keys`, `ins_mc_meta_desc`, `ins_mc_code`, `ins_mc_image`, `ins_mc_free`, `ins_mc_orginal_fee`, `ins_mc_offer_fee`, `ins_mc_discount_till_date`, `ins_mc_discount_type`, `ins_mc_discount`, `ins_mc_cls_total`, `ins_mc_cls_duration`, `ins_mc_short_desc`, `ins_mc_long_desc`, `ins_mc_level`, `ins_mc_language`, `ins_mc_vd_provider`, `ins_mc_vid_link`, `ins_mc_url`, `ins_mc_module`, `ins_mc_outcomes`, `ins_mc_requirements`, `ins_mc_enrolled`, `ins_mc_priority`, `ins_mc_step`, `ins_mc_visibility`) VALUES
(23, 41, 'বাংলা গ্রাফিকস হিরো', 14, 2, '', '', '', '', 1, 1800, 1200, '2021-05-15', 0, 0, 0, 0, '', '', 'Intermediate', 'বাংলা', '', '', 'l3lw0csd', '', 'D, , E, F', 'A, , B, C', 0, 1, 2, 0),
(22, 42, 'Facebook Marketing for Beginner', 11, NULL, 'best facebook marketing course', 'best facebook marketing course', '', '1620637693-520.png', 0, 3000, 299, '0000-00-00', 0, 0, 0, 0, 'স্যার অনলাইনে এত সুন্দর ভাবে কাউকে বোঝানো যায় সেটা আমি আপনার ক্লাস না করলে হয়তো বা বুঝতে পারতাম না।\r\nসত্যিই অসাধারণ ছিল আপনার ক্লাসটি\r\nআপনাকে অনেক ধন্যবাদ [MD.Saidul Islam]', 'Proven Facebook Marketing Strategy to super-charge your Facebook Ads &amp; Facebook Advertising.\r\nEffortlessly grow customer reach through smarter Facebook Marketing &amp; Facebook Advertising.\r\nThe Facebook Marketing algorithm – explained – so you can turn it to your advantage in Facebook Ads.\r\nUse video in your Facebook Ads– create engaging movies for your Facebook Marketing &amp; Facebook Advertising.\r\nSuccess blueprints - Real examples you can follow to boost your Facebook Ads performance &amp; benefit from the Facebook Marketing algorithm.\r\nLearn how to create the right kind of value added “good” content to achieve maximum reach &amp; engagement in your Facebook Ads &amp; Facebook Marketing.', '1', 'বাংলা', 'vimeo', 'https://www.youtube.com/watch?v=N-OS31j610w', 'facebook-marketing-begginer', '', 'Who want to sale products online, , who wants facebook marketing , Who want to develop online carrer ', 'Open & Positive Mind., , Basic understanding of Facebook marketing., No experience of Facebook Advertising needed.', 0, 0, 0, 1),
(21, 40, 'Web Design Course', 14, NULL, 'web,design,ourse,dhaka', 'Responsive Web Design Course', '', '1620562801-978.webp', 0, 20000, 1000, '0000-00-00', 0, 0, 0, 0, 'Responsive Web Design Course', '✅ Website design with cross browser compatibility\r\n✅ Web 2.0 &amp; Web 3.0 based web designing\r\n✅ Designing websites with W3C Validation\r\n✅ Quality Controlling and Assuring for website\r\n✅ Professional, eye-catching and concept relevant websites.\r\n✅ Websites designing with User friendly operation and Simple navigation.\r\n✅ On time delivery with competitive pricing.\r\n✅ SEO Semantic and neat &amp; clean coding structure.', '1', 'বাংলা', 'youtube', 'https://www.youtube.com/watch?v=1aOgDKQtIwg', 'web-design-course-dhaka', '', '✅ Website design with cross browser compatibility, ✅ Web 2.0 & Web 3.0 based web designing, ✅ Designing websites with W3C Validation, ✅ Quality Controlling and Assuring for website\r\n', '✅ ওয়ার্ল্ড ভেরিফাইড সার্টিফিকেট, ✅ফ্রিল্যান্সিং কনসালটেন্সি, ✅আইটি সেক্টর ক্যারিয়ার গড়ার পরামর্শ।, ✅ ই-কমার্স স্টার্টআপ কনসালটেন্সি এবং', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_notification`
--

CREATE TABLE `instructor_notification` (
  `nt_id` int(11) NOT NULL,
  `nt_date` text DEFAULT NULL,
  `nt_for_user` text DEFAULT NULL,
  `nt_type` text DEFAULT NULL,
  `nt_msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nt_status` int(11) DEFAULT NULL,
  `nt_priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_notification`
--

INSERT INTO `instructor_notification` (`nt_id`, `nt_date`, `nt_for_user`, `nt_type`, `nt_msg`, `nt_status`, `nt_priority`) VALUES
(11, '2021-04-30 18:19:06', '34', 'warning', 'Requested to verify instructor application.', 0, 0),
(12, '2021-04-30 18:19:06', '34', 'success', 'Your instructor profile is successfully verified by the system.', 0, 0),
(14, '2021-05-02 00:48:25', '34', 'success', 'Created a new course: গ্রাফিক্স কোর্স হিরো', 0, 0),
(18, '2021-05-02 15:48:27', '34', 'warning', 'Successfully updated your profile!  2021-05-02 03:05:27', 0, 0),
(19, '2021-05-02 15:48:35', '34', 'success', 'Successfully updated your profile!  2021-05-02 03:05:35', 0, 0),
(20, '2021-05-02 17:16:27', '34', 'success', 'Successfully updated your profile!  2021-05-02 05:05:27', 0, 0),
(21, '2021-05-02 17:16:36', '34', 'success', 'Successfully updated your profile!  2021-05-02 05:05:36', 0, 0),
(22, '2021-05-02 17:51:10', '38', 'success', 'Requested to verify instructor application.', 0, 0),
(23, '2021-05-05 00:19:43', '34', 'success', 'Created a new course: ??????????? ??????????? ', 0, 0),
(24, '2021-05-05 00:21:07', '34', 'success', 'Created a new course: ওয়ার্ডপ্রেস ডেভেলপমেন্ট ', 0, 0),
(25, '2021-05-05 00:21:35', '34', 'success', 'Created a new course: ওয়ার্ডপ্রেস ডেভেলপমেন্ট ', 0, 0),
(26, '2021-05-05 00:24:48', '34', 'success', 'Created a new course: ওয়ার্ডপ্রেস ডেভেলপমেন্ট ', 0, 0),
(27, '2021-05-05 00:25:35', '34', 'success', 'Created a new course: Course 2', 0, 0),
(28, '2021-05-05 00:46:38', '34', 'success', 'Created a new course: crs', 0, 0),
(29, '2021-05-05 01:00:53', '34', 'success', 'Created a new course: course new test', 0, 0),
(30, '2021-05-05 01:02:34', '34', 'success', 'Created a new course: course new test', 0, 0),
(31, '2021-05-09 17:37:00', '40', 'success', 'Successfully updated your profile!  2021-05-09 05:05:00', 0, 0),
(32, '2021-05-09 17:41:24', '40', 'success', 'Requested to verify instructor application.', 0, 0),
(33, '2021-05-09 18:20:01', '40', 'success', 'Created a new course: Web Design Course', 0, 0),
(34, '2021-05-10 08:05:47', '41', 'success', 'Requested to verify instructor application.', 0, 0),
(35, '2021-05-10 08:49:06', '41', 'success', 'Requested to verify instructor application.', 0, 0),
(36, '2021-05-10 14:43:25', '42', 'success', 'Requested to verify instructor application.', 0, 0),
(37, '2021-05-10 15:08:13', '42', 'success', 'Created a new course: Facebook Marketing for Beginner', 0, 0),
(38, '2021-05-10 17:43:28', '43', 'success', 'Requested to verify instructor application.', 0, 0),
(39, '2021-05-11 06:42:39', '41', 'success', 'Successfully created a new course.', 0, 0),
(40, '2021-05-11 06:56:52', '41', 'success', 'Successfully created a new course.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_req`
--

CREATE TABLE `instructor_req` (
  `req_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `ins_nid_front` varchar(256) NOT NULL,
  `ins_nid_back` varchar(256) NOT NULL,
  `ins_skillset` text CHARACTER SET utf8 NOT NULL,
  `ins_comment` text CHARACTER SET utf8 NOT NULL,
  `ins_certificate` varchar(256) NOT NULL,
  `ins_verification_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_req`
--

INSERT INTO `instructor_req` (`req_id`, `ins_id`, `ins_nid_front`, `ins_nid_back`, `ins_skillset`, `ins_comment`, `ins_certificate`, `ins_verification_status`) VALUES
(19, 42, '1620636205-935.png', '1620636205-137.png', '', '', '1620636205-214.jpg', 0),
(20, 43, '1620647008-824.png', '1620647008-972.jpg', 'ডিজিটাল মার্কেটিং', '', '1620647008-194.png', 0),
(18, 41, '1620614946-838.png', '1620614946-304.png', 'গ্রাফিক্স ডিজাইন, ওয়েব ডেভেলপমেন্ট, ডিজিটাল মার্কেটিং', '', '1620614946-800.png', 0),
(16, 40, '1620560482-795.jpg', '1620560482-630.jpg', '', 'হাই গাইস ', '1620560482-138.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_savings_account`
--

CREATE TABLE `instructor_savings_account` (
  `sav_acc_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `sav_payable` int(11) NOT NULL,
  `sav_total` int(11) NOT NULL,
  `sav_transac_count` int(11) NOT NULL COMMENT 'increase by 1 on every transaction ',
  `sav_transac_date` date NOT NULL DEFAULT current_timestamp(),
  `sav_acc_no` int(11) NOT NULL,
  `sav_acc_type` tinyint(4) NOT NULL COMMENT '0==offline | 1==online',
  `sav_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_savings_account`
--

INSERT INTO `instructor_savings_account` (`sav_acc_id`, `ins_id`, `sav_payable`, `sav_total`, `sav_transac_count`, `sav_transac_date`, `sav_acc_no`, `sav_acc_type`, `sav_status`) VALUES
(1, 40, 0, 0, 0, '2021-05-10', 0, 0, 0),
(2, 41, 0, 0, 0, '2021-05-10', 0, 0, 0),
(3, 42, 0, 0, 0, '2021-05-10', 0, 0, 0),
(4, 43, 0, 0, 0, '2021-05-10', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_video_categories`
--

CREATE TABLE `instructor_video_categories` (
  `ins_catg_id` int(11) NOT NULL,
  `ins_catg_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `ins_catg_image` varchar(100) NOT NULL,
  `ins_catg_desc` text CHARACTER SET utf8 NOT NULL,
  `ins_catg_status` tinyint(4) NOT NULL,
  `ins_catg_link` varchar(200) NOT NULL,
  `ins_catg_count` int(11) NOT NULL,
  `ins_catg_type` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_video_categories`
--

INSERT INTO `instructor_video_categories` (`ins_catg_id`, `ins_catg_title`, `ins_catg_image`, `ins_catg_desc`, `ins_catg_status`, `ins_catg_link`, `ins_catg_count`, `ins_catg_type`) VALUES
(2, 'Apps Development', '', '', 0, '', 0, ''),
(3, 'Business', '', '', 0, '', 0, ''),
(4, 'Competition', '', '', 0, '', 0, ''),
(0, 'Graphic Design', '', '', 0, '', 0, ''),
(7, 'Lifestyle', '', '', 0, '', 0, ''),
(8, 'Marketplace', '', '', 0, '', 0, ''),
(9, 'Music', '', '', 0, '', 0, ''),
(10, 'Religion', '', '', 0, '', 0, ''),
(11, 'SEO & Digital Marketing', '', '', 0, '', 0, ''),
(12, 'Video', '', '', 0, '', 0, ''),
(13, 'Web Design', '', '', 0, '', 0, ''),
(14, 'Web Development', '', '', 0, '', 0, ''),
(15, 'Writing', '', '', 0, '', 0, ''),
(16, 'Bank Job Preparation', '', '', 0, '', 0, ''),
(17, 'Govt Job Preparation', '', '', 0, '', 0, ''),
(23, 'Academic', '1620247037-174.', 'Academic', 0, '', 0, 'ইংরেজি'),
(24, 'Hardware', '1620561194-561.png', 'Hardware ', 0, '', 0, 'বাংলা');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_video_sub_cat`
--

CREATE TABLE `instructor_video_sub_cat` (
  `ins_vdo_sb_ct_id` int(11) NOT NULL,
  `ins_vdo_ct_id` int(11) DEFAULT NULL,
  `ins_vdo_sb_ct_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `ins_vdo_sb_ct_image` varchar(100) NOT NULL,
  `ins_vdo_sb_ct_desc` text CHARACTER SET utf8 NOT NULL,
  `ins_vdo_sb_ct_status` tinyint(4) NOT NULL,
  `ins_vdo_ct_link` varchar(200) NOT NULL,
  `ins_vdo_sb_ct_count` int(11) NOT NULL,
  `ins_vdo_sb_ct_type` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_video_sub_cat`
--

INSERT INTO `instructor_video_sub_cat` (`ins_vdo_sb_ct_id`, `ins_vdo_ct_id`, `ins_vdo_sb_ct_title`, `ins_vdo_sb_ct_image`, `ins_vdo_sb_ct_desc`, `ins_vdo_sb_ct_status`, `ins_vdo_ct_link`, `ins_vdo_sb_ct_count`, `ins_vdo_sb_ct_type`) VALUES
(1, 0, 'গ্রাফিক্স ডিজাইন', '', '', 0, '', 0, ''),
(2, 14, 'ওয়েব ডেভেলপমেন্ট', '', '', 0, '', 0, ''),
(3, 11, 'ডিজিটাল মার্কেটিং', '', '', 0, '', 0, ''),
(4, 3, 'অফিস এপ্লিকেশন', '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ins_mc_section`
--

CREATE TABLE `ins_mc_section` (
  `section_id` int(11) NOT NULL,
  `ins_mc_id` int(11) NOT NULL,
  `section_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `section_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ins_mc_section`
--

INSERT INTO `ins_mc_section` (`section_id`, `ins_mc_id`, `section_title`, `section_status`) VALUES
(1, 10, 'Introduction Class', 0),
(2, 10, 'Gettig Started Resource Setup', 0),
(4, 21, 'INtro Class', 0),
(5, 22, 'Class 1', 0),
(6, 22, 'Class -2', 1),
(7, 22, 'Class-3', 1),
(8, 22, 'Class-4', 1),
(9, 22, 'Class 5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ins_mc_sec_class`
--

CREATE TABLE `ins_mc_sec_class` (
  `sec_class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sec_class_title` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_class_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_class_duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_class_time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_class_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_class_vid_link` varchar(256) NOT NULL,
  `sec_class_locked` tinyint(4) NOT NULL DEFAULT 0,
  `sec_class_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ins_mc_sec_class`
--

INSERT INTO `ins_mc_sec_class` (`sec_class_id`, `section_id`, `sec_class_title`, `sec_class_desc`, `sec_class_duration`, `sec_class_time`, `sec_class_type`, `sec_class_vid_link`, `sec_class_locked`, `sec_class_status`) VALUES
(1, 1, 'Class 01: Print Hello World', 'GOOD VERY GOOD', '2 Hours', '', 'বাংলা', 'https://youtu.be/aCQ1X68QRig', 0, 1),
(2, 2, 'Download Resources', 'You have to download from the url', '15 min', '', 'বাংলা', 'res.link.vid.com', 0, 1),
(5, 1, 'Class 01: Print Hello World', 'GOOD VERY GOOD', '2 Hours', '', 'বাংলা', 'https://youtu.be/aCQ1X68QRig', 0, 1),
(6, 2, 'Download Resources', 'You have to download from the url', '15 min', '', 'বাংলা', 'res.link.vid.com', 0, 1),
(7, 1, 'Class 01: Print Hello World', 'GOOD VERY GOOD', '2 Hours', '', 'বাংলা', 'https://youtu.be/aCQ1X68QRig', 0, 1),
(8, 1, 'Class 01: Print Hello World', 'GOOD VERY GOOD', '2 Hours', '', 'বাংলা', 'https://youtu.be/aCQ1X68QRig', 0, 1),
(9, 1, 'Class 01: Print Hello World', 'GOOD VERY GOOD', '2 Hours', '', 'বাংলা', 'https://youtu.be/aCQ1X68QRig', 0, 1),
(10, 5, 'Create facebook page', 'Facebook\r\nPixel ad\r\nYoutube Ad', '1', '', 'বাংলা', 'https://www.youtube.com/watch?v=hcDrO4uWc2U', 0, 1),
(11, 6, 'Pixel Setup', 'test', '0.30.0', '', 'বাংলা', 'https://www.youtube.com/watch?v=RQDHCaHOtvQ&amp;t=15s', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `live_courses`
--

CREATE TABLE `live_courses` (
  `live_cid` int(11) NOT NULL,
  `live_c_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `live_c_meta_keys` text CHARACTER SET utf8 NOT NULL,
  `live_c_meta_desc` text CHARACTER SET utf8 NOT NULL,
  `live_c_code` varchar(30) NOT NULL,
  `live_c_image` varchar(256) NOT NULL,
  `live_c_sch_no` int(11) NOT NULL,
  `live_c_sch_no_left` int(11) NOT NULL,
  `live_c_sch_status` tinyint(4) NOT NULL,
  `live_c_orginal_fee` int(11) NOT NULL,
  `live_c_offer_fee` int(11) NOT NULL,
  `live_c_discount_type` tinyint(4) NOT NULL COMMENT '0==% | 1==fixed',
  `live_c_discount` int(11) NOT NULL,
  `live_c_cls_total` int(11) NOT NULL,
  `live_c_cls_time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `live_c_cls_duration` varchar(100) CHARACTER SET utf8 NOT NULL,
  `live_c_venue` varchar(100) CHARACTER SET utf8 NOT NULL,
  `live_c_short_desc` text CHARACTER SET utf8 NOT NULL,
  `live_c_module` text CHARACTER SET utf8 NOT NULL,
  `live_c_certificate_avl` tinyint(4) NOT NULL COMMENT '1==available 0==not',
  `live_c_seats` int(11) NOT NULL,
  `live_c_completed` int(11) NOT NULL,
  `live_c_visibility` tinyint(4) NOT NULL COMMENT '1 == visible | 0 == not'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_courses`
--

INSERT INTO `live_courses` (`live_cid`, `live_c_title`, `live_c_meta_keys`, `live_c_meta_desc`, `live_c_code`, `live_c_image`, `live_c_sch_no`, `live_c_sch_no_left`, `live_c_sch_status`, `live_c_orginal_fee`, `live_c_offer_fee`, `live_c_discount_type`, `live_c_discount`, `live_c_cls_total`, `live_c_cls_time`, `live_c_cls_duration`, `live_c_venue`, `live_c_short_desc`, `live_c_module`, `live_c_certificate_avl`, `live_c_seats`, `live_c_completed`, `live_c_visibility`) VALUES
(4, 'ওয়েব ডেভেলপমেন্ট এবং এবং ফ্রিল্যান্সিং কোর্স', 'Web, Web Development, Freelancing, Freelance on web', 'N/A', 'WEB-F-101', 'graphic design.jpg', 10, 0, 1, 12000, 10000, 0, 30, 24, '22:00 TO 00:00', '2', 'Pixel IT Institute', 'একটি ইন্টারেক্টিভ, মসৃণ এবং সহজে অ্যাক্সেস করা ওয়েবসাইট দর্শকদের একটি জটিল কোড স্টাফড অ ক্রিয়েটিভ ওয়েবসাইটের চেয়ে বেশি সময় ধরে ধরে রাখতে পারে। প্রতিটি ওয়েবসাইটের জন্য গ্রাহক ট্র্যাফিকের ভাল সংখ্যাই মূল বিষয় এবং প্রতি মিনিটের দর্শনার্থীরা ওয়েবসাইট গণনা করে থাকে, এর অর্থ এই যে ওয়েবসাইটের জন্য ভাল র‌্যাঙ্কের কারণ হিসাবে বেশি দর্শকরা বেশি থাকবেন। মূলত কোনও ওয়েব বিকাশকারীকে ওয়েব ডিজাইনারের বিপুল চাহিদার পেছনের মূল কারণটি হ\'ল প্রথমটি একজন নন প্রযুক্তিবিদ ব্যক্তি হতে পারে এই বিষয়টি উপেক্ষা করে সামনের দিকের নকশা চোখের আকর্ষণীয় এবং সহজেই অ্যাক্সেসযোগ্য রাখা।', '<p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; background-color: rgb(248, 249, 250);\"><span style=\"font-weight: bolder;\">Course outline :&nbsp;</span><span style=\"font-weight: bolder;\">Class 01:</span></p><ul style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 1.25em; list-style: none; padding: 0px; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\"><li style=\"list-style: none;\">Introduction to web design</li><li style=\"list-style: none;\">Introduction to web design</li></ul><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\">Class 02:</span><span style=\"color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\"></span><ul style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 1.25em; list-style: none; padding: 0px; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\"><li style=\"list-style: none;\">Introduction to web design</li><li style=\"list-style: none;\"><br></li></ul> ', 0, 11, 256, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nt_id` int(11) NOT NULL,
  `nt_date` text DEFAULT NULL,
  `nt_for_user` text DEFAULT NULL,
  `nt_type` text DEFAULT NULL,
  `nt_msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nt_status` int(11) DEFAULT NULL,
  `nt_priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nt_id`, `nt_date`, `nt_for_user`, `nt_type`, `nt_msg`, `nt_status`, `nt_priority`) VALUES
(1, '2021-04-27 03:25:26', 'Abc-Acadamy', '0', 'Salary January', 0, 0),
(2, '2021-04-27 03:26:57', 'Abdurrohim', '0', 'Salary January', 0, 0),
(3, '2021-04-27 03:27:45', 'Abc.admission', '0', 'Salary January', 0, 0),
(4, '2021-04-27 13:56:38', 'Mosaddikur', '0', 'Salary January', 0, 0),
(5, '2021-04-27 14:19:07', 'Abc-Acadamy', '0', 'AD Expence', 0, 0),
(6, '2021-04-28 19:56:29', 'Abc-Acadamy', '0', 'Office Advance', 0, 0),
(7, '2021-04-28 19:56:57', 'Abc-Acadamy', '0', 'Stationary', 0, 0),
(8, '2021-04-28 19:57:40', 'Abc-Acadamy', '0', 'Cashout cost', 0, 0),
(9, '2021-04-28 20:06:25', 'Abc-Acadamy', '0', 'Mobail cost ', 0, 0),
(10, '2021-04-29 16:31:08', 'Abc-Acadamy', '0', 'boosting ', 0, 0),
(11, '2021-05-02 17:52:29', 'Abc-Acadamy', '0', 'boosting', 0, 0),
(12, '2021-05-06 02:53:49', 'Abc-Acadamy', '0', 'Mobail cost 29/04/2021 To 05/04/2021', 0, 0),
(13, '2021-05-06 02:55:05', 'Abc-Acadamy', '0', 'Boosting 05/05/2020', 0, 0),
(14, '2021-05-09 13:58:04', 'Abc-Acadamy', '0', 'boosting 09/05/2021', 0, 0),
(15, '2021-05-12 00:09:11', 'Sibli.abc', '0', 'Salary withdrawn Amounts TK.1900 (May)', 0, 0),
(16, '2021-05-12 00:09:42', 'Arman.abc', '0', 'Salary withdrawn Amounts TK.1000 (May)', 0, 0),
(17, '2021-05-12 00:10:06', 'Jalalmahi', '0', 'Salary withdrawn Amounts TK.335 (May)', 0, 0),
(18, '2021-05-12 00:11:15', 'Nazmul.abc', '0', 'Salary withdrawn Amounts TK.665 (May)', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `online_courses`
--

CREATE TABLE `online_courses` (
  `oc_id` int(11) NOT NULL,
  `oc_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oc_name_short` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oc_short_discription` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oc_duration` text DEFAULT NULL,
  `oc_orginal_fee` int(11) DEFAULT NULL,
  `oc_discunt_fee` int(11) DEFAULT NULL,
  `oc_discunt_percent` text DEFAULT NULL,
  `oc_date` text DEFAULT NULL,
  `oc_status` int(11) DEFAULT NULL,
  `oc_visibility` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_courses`
--

INSERT INTO `online_courses` (`oc_id`, `oc_name`, `oc_name_short`, `oc_short_discription`, `oc_duration`, `oc_orginal_fee`, `oc_discunt_fee`, `oc_discunt_percent`, `oc_date`, `oc_status`, `oc_visibility`) VALUES
(6, 'ওয়েব ডিজাইন (৯০%)', 'ওয়েব ডিজাইন', NULL, '2m', 10000, 1000, '90', '2020-12-01 03:47:59', 1, 1),
(9, 'গ্রাফিক্স ডিজাইন (৯০%)', 'গ্রাফিক্স ডিজাইন ', NULL, '2m', 10000, 1000, '90', '2020-12-12 13:02:21', 1, 1),
(10, 'ডিজিটাল মার্কেটিং (৯০%)', 'ডিজিটাল মার্কেটিং', NULL, '2m', 15000, 1500, '90', '2020-12-12 13:03:44', 1, 1),
(11, 'ফেসবুক মার্কেটিং (৯০%)', 'ফেসবুক মার্কেটিং', NULL, '1m', 5000, 500, '90', '2020-12-12 13:03:44', 1, 1),
(12, 'ভিডিও এডিটিং (৯০%)', 'ভিডিও এডিটিং', NULL, '1m', 10000, 1000, '90', '2020-12-12 13:03:44', 1, 1),
(13, 'ডেটা এন্ট্রি (৭৫%)', 'ডেটা এন্ট্রি', NULL, '15d', 2000, 500, '75', '2020-12-12 13:03:44', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_students`
--

CREATE TABLE `online_students` (
  `st_id` int(11) NOT NULL,
  `st_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_father_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_mother_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_email` text DEFAULT NULL,
  `st_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_pass` text DEFAULT NULL,
  `st_join_date` text DEFAULT NULL,
  `st_join_day` text DEFAULT NULL,
  `st_join_month` text DEFAULT NULL,
  `st_join_year` text DEFAULT NULL,
  `st_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_division` text DEFAULT NULL,
  `st_region` text DEFAULT NULL,
  `st_db` text DEFAULT NULL,
  `st_nid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_course_name` text DEFAULT NULL,
  `st_course_duration` text DEFAULT NULL,
  `st_time_shdl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `st_it_firm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `st_course_result` int(11) DEFAULT NULL,
  `st_sex` int(11) DEFAULT NULL,
  `st_note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_batch_number` int(11) DEFAULT NULL,
  `st_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_payment_method` text DEFAULT NULL,
  `st_payment_paid` int(11) DEFAULT NULL,
  `st_payment_fullpaid` int(11) DEFAULT NULL,
  `st_payment_status` int(11) DEFAULT NULL,
  `st_payment_invoice` int(11) DEFAULT NULL,
  `st_education` text DEFAULT NULL,
  `st_certificate` text DEFAULT NULL,
  `st_registration_number` int(15) DEFAULT NULL,
  `st_reference_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_students`
--

INSERT INTO `online_students` (`st_id`, `st_name`, `st_father_name`, `st_mother_name`, `st_email`, `st_phone`, `st_pass`, `st_join_date`, `st_join_day`, `st_join_month`, `st_join_year`, `st_address`, `st_division`, `st_region`, `st_db`, `st_nid`, `st_course_name`, `st_course_duration`, `st_time_shdl`, `st_it_firm`, `st_course_result`, `st_sex`, `st_note`, `st_batch_number`, `st_facebook`, `st_payment_method`, `st_payment_paid`, `st_payment_fullpaid`, `st_payment_status`, `st_payment_invoice`, `st_education`, `st_certificate`, `st_registration_number`, `st_reference_name`, `st_photo`) VALUES
(3, 'Md Mijanur Rahman', 'golam Mustafa', '', NULL, '01911059426', NULL, '2021-03-31 16:00:16', '31', '03', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '', '', NULL, 1, NULL, 0, 'Sayeed', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9503, 'Masrur', NULL),
(4, 'Saifuddin Ahmed', 'golam Mustafa', '', NULL, '01721815968', NULL, '2021-03-31 16:10:38', '31', '03', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sayed Amin', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9504, 'Masrur', NULL),
(5, 'Alex Jones', 'golam Mustafa', '', '', '0191105942623', NULL, '2021-04-25 00:13:46', '25', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'others', NULL, 1, 'sdsda', 118, 'Sayed Amin', 'dbbl', 0, 0, 0, NULL, '0', 'Home', 9505, 'Abc.admission', NULL),
(6, 'Alex Jones', 'golam Mustafa', '', NULL, '017586598956', NULL, '2021-03-31 19:18:56', '31', '03', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sayed Amin', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9506, 'Masrur', NULL),
(7, 'ovi', 'ashraful alam', '', NULL, '01911686324', NULL, '', '', '', '', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'ovi sheikh', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9507, 'Masrur', NULL),
(8, 'Md Mijanur Rahman', 'golam Mustafa', '', NULL, '019113594263', NULL, '2021-04-04 20:01:20', '04', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sayed Amin', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9508, 'Masrur', NULL),
(9, 'ovi', 'ashraful', '', NULL, '01911686324', NULL, '2021-04-04 20:01:32', '04', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'ovi sheikh', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9509, 'Masrur', NULL),
(10, 'Jinat Jahan Calyx', 'Jiarul Islam', '', NULL, '01681539324', NULL, '2021-04-04 20:03:31', '04', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'ovi sheikh', 'nexus', NULL, NULL, NULL, NULL, '0', 'Home', 9510, 'Masrur', NULL),
(11, 'Abdullah Al Masrur', 'Mizanur Rahman', '', NULL, '1751792668', NULL, '2021-04-13 15:55:57', '13', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Al Mashrur', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9511, 'Sibli.abc', NULL),
(12, 'Nazmul Hasan ', 'Mahfuzar Rahman', '', NULL, '01753795412', NULL, '2021-04-13 17:45:29', '13', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Nazmul Hasan ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9512, 'Nazmul.abc', NULL),
(13, 'Ahammed Sajib ', 'Haji MD Sahabuddin ', '', '', '01863921227', NULL, '2021-04-20 13:39:14', '20', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '7TO9PM', 'abc', NULL, 1, '', 310, 'Ahammed Sajib ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9513, 'Nazmul.abc', NULL),
(14, 'Raj roy Tulesh', 'Sunil Chandra Roy', '', '', '01796791995', NULL, '2021-04-23 20:04:49', '23', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, '1440 to by bkash 0548', 118, 'Raj roy Tulesh', 'bkash', 0, 0, 1, NULL, '0', 'Home', 9514, 'Arman.abc', NULL),
(15, 'Sohel Rana', 'Abed Ali', '', '', '01739658513', NULL, '2021-04-21 17:33:27', '21', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, '', 0, 'مجمد سهيل احمد', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9515, 'Arman.abc', NULL),
(16, 'Tules ray ', 'Bhombol ray', '', '', '01315718460', NULL, '2021-04-21 22:31:04', '21', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '4TO6PM', 'abc', NULL, 1, '', 0, 'ST Tules Roy', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9516, 'Arman.abc', NULL),
(17, 'Dipto kumar', 'Joydev kumar', '', '', '01799833224', NULL, '2021-04-22 11:37:55', '22', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'others', NULL, 1, '', 311, 'Dipto kumar', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9517, 'Nazmul.abc', NULL),
(18, 'Abdullah al mashrur', 'Mizanur rahaman', '', NULL, '01751792668', NULL, '2021-04-22 12:20:53', '22', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Al Masrur', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9518, 'Abc-Acadamy', NULL),
(19, 'Test', 'test', '', NULL, '01915854625', NULL, '2021-04-22 12:34:05', '22', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Afrid Ahmed', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9519, 'Abc-Acadamy', NULL),
(20, 'Md Jakaria', 'Mohizoddin', '', '', '01680090785', NULL, '2021-04-25 00:28:45', '25', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'others', NULL, 1, 'bkash by 0785 to 0548', 248, 'Md Jakaria', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9520, 'Nazmul.abc', NULL),
(21, 'Apurbo Areng', 'Ankur chambugong ', '', '', '01840174806', NULL, '2021-04-25 00:29:44', '25', '04', '2021', '0', NULL, NULL, '3-9-2002', '', '6', '', '9TO11PM', 'others', NULL, 1, '3816 to by bkash 0548', 248, 'Apurbo Areng', 'bkash', 1000, 1, 1, NULL, 'H.S.C', 'Home', 9521, 'Arman.abc', NULL),
(22, 'হৃদয় হোসেন ', 'জিন্নাত আলী', '', NULL, '01799308082', NULL, '2021-04-22 14:30:59', '22', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Hridoy Ahammed Raj ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9522, 'Sibli.abc', NULL),
(23, 'মোঃ মাহমুদুল ইসলাম সা আদ', 'মৃত নজরুল ইসলাম', '', '', '01614819764', NULL, '2021-04-25 00:30:24', '25', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '4TO6PM', 'others', NULL, 1, 'Rocket 7641 to 5480', 310, 'Md Saad Islam', 'rocket', 1000, 1, 1, NULL, '0', 'Home', 9523, 'Nazmul.abc', NULL),
(24, 'মোঃ রাকিবুল ইসলাম', 'মোঃ আব্দুল লতিফ', '', NULL, '০১৩১৫৭১৮৭৩৯', NULL, '2021-04-22 22:37:16', '22', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'M.B.Rakib Hasan', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9524, 'Abc.admission', NULL),
(25, 'Mehedi Hasan Shakib', 'Ayavur Rahman', '', '', '01798521556', NULL, '2021-04-25 00:31:58', '25', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, '6246 to by bkash 80548', 118, 'নিস্ততব্ধ আরোহীন', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9525, 'Arman.abc', NULL),
(26, 'Mahia Rahman ', 'Md Zahidur Rahman ', '', '', '01304530335', NULL, '2021-04-25 00:32:46', '25', '04', '2021', 'Kushtia', NULL, NULL, '25.06.2000', '', '9', '', '9TO11PM', 'abc', NULL, 0, '0335 to by bkash 0548', 311, 'Mahia Rahman ', 'bkash', 1000, 1, 1, NULL, 'BBA Honours', 'Home', 9526, 'Arman.abc', NULL),
(27, ' নুর আলম সিদ্দিক ', ' আব্দুস সালাম ', '', NULL, ' 01731752369', NULL, '2021-04-23 02:04:16', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Ns Nur Alam Siddik', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9527, 'Sibli.abc', NULL),
(28, 'Washim Akram', 'Nannu Mia', '', '', '01601120985', NULL, '2021-04-25 00:44:47', '25', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 1, 'Bkash 4316 to 0548', 248, 'Washim Akram', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9528, 'Sibli.abc', NULL),
(29, 'মোঃ সিয়াম', 'তাজুল ইসলাম', '', NULL, '০১৬২৭৫৫০১১১', NULL, '2021-04-23 11:22:49', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'md siam ahmed', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9529, 'Sibli.abc', NULL),
(30, 'সুরাইম', 'মহি উদ্দিন ', '', NULL, '০১৮৭৩৭২৪৫৫৬', NULL, '2021-04-23 11:58:52', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'দুর্জয় লেখক', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9530, 'Sibli.abc', NULL),
(31, 'kawsar ahmad', 'md shahjahan', '', '', '01863111645', NULL, '2021-04-23 15:37:29', '23', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 411, 'kawsar ahmad kawsar ahmad', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9531, 'Jalalmahi', NULL),
(32, 'Ilma Jahan', 'Md. Zinnat Ali Khan ', '', '', '01671750636', NULL, '2021-04-25 00:47:34', '25', '04', '2021', '0', NULL, NULL, '0', '', '10', '2m', '9TO11PM', 'abc', NULL, 0, 'BKash From 0505 to 0548', 118, 'Ilma Jahan', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9532, 'Sibli.abc', NULL),
(33, 'Monsur Alam Maruf. ', 'Abdur Rahman. ', '', '', '01623163941', NULL, '2021-04-25 00:33:54', '25', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'others', NULL, 1, 'Bkash by 1831 to 0548', 248, 'Maruf Alam', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9533, 'Nazmul.abc', NULL),
(34, 'নুরে রহমাত সাইফুল্লাহ', 'শেখ হানিফুর রহমান', '', NULL, '০১৭৯৭২৯২৯৫৩', NULL, '2021-04-23 18:49:38', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'নীল তরঙ্গ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9534, 'Arman.abc', NULL),
(35, 'MD ABDUR ROB', 'MD ZALAL MALITHA', '', '', '01725342573', NULL, '2021-05-08 20:03:49', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing\r\nbikash from 2573 to 0548', 410, 'Md Abdur Rob ', 'bkash', 410, 0, 1, NULL, '0', 'Home', 9535, 'Sibli.abc', NULL),
(36, 'Dharmendra Singhs', 'Biplob Singha', '', NULL, '01977110891', NULL, '2021-04-23 21:42:36', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'Dharmendra Singh Khiladi', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9536, 'Sibli.abc', NULL),
(37, 'OMAR FARUQUE', 'HARUN UR RASHID', '', NULL, '01904469790', NULL, '2021-04-23 23:59:27', '23', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '4TO6PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, NULL, 0, 'Omar Faruque', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9537, 'Sibli.abc', NULL),
(38, 'মোঃএনামুল হক ', 'মোঃআবুল কাশেম ', '', '', '01709375506', NULL, '2021-04-25 00:49:47', '25', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, 'Nagad From 5506 to 0548', 311, 'Anamul Haque ', 'nagad', 500, 0, 1, NULL, '0', 'Home', 9538, 'Sibli.abc', NULL),
(39, 'Md. Likhon Mia', 'Md. Yeakub Ali', '', NULL, '01779522088', NULL, '2021-04-24 11:53:38', '24', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Likhon Prokrity', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9539, 'Sibli.abc', NULL),
(40, 'Ratul roy', 'Jotindro roy', '', '', '01873657373', NULL, '2021-04-24 22:42:00', '24', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '7373 to by nagad 80548', 410, 'Robir alo ratul', 'nagad', 0, 0, 1, NULL, '0', 'Home', 9540, 'Arman.abc', NULL),
(41, 'Mosharof Hossain', 'Saidul Islam', '', '', '01793765500', NULL, '2021-04-25 16:23:48', '25', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, 'grapics digine \r\nBikash from 9279 to 0548 ', 311, 'Mosharof Hossain', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9541, 'Sibli.abc', NULL),
(42, 'MD Sajid Hasan Emon', 'MD Shaha Buddin', '', '', '01625737675', NULL, '2021-04-24 20:56:02', '24', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '7TO9PM', 'abc', NULL, 1, '', 248, 'Sajid Hasan', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9542, 'Nazmul.abc', NULL),
(43, 'Md Mazharul Islam', 'Md Mofizur Rahman', '', '', '01300337120', NULL, '2021-04-25 22:08:03', '25', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '7120 to by nagad 80548 ', 410, 'Mazharul Parvez', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9543, 'Arman.abc', NULL),
(44, 'দিপংকর ', 'রনজিত', '', '', '০১৮৩৭২৩৩৫০০', NULL, '2021-04-24 23:17:16', '24', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '4TO6PM', 'others', NULL, 1, '', 0, 'DIPONKAR CHANDRA DAS', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9544, 'Sibli.abc', NULL),
(45, 'মোঃ নাঈম শরীফ', 'মোঃ দরছ মিয়া', '', '', '01737526775', NULL, '2021-04-25 14:40:29', '25', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Digital marketing\r\nbikash from 7774 to 0548 ', 118, 'মোঃ নাঈম শরীফ', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9545, 'Sibli.abc', NULL),
(46, 'Md nayan islam ', 'Md Atikur Rahman ', '', NULL, '01318947810', NULL, '2021-04-25 08:47:24', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md nayan islam ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9546, 'Sibli.abc', NULL),
(47, 'মোঃ মোকছেদুল ইসলাম', 'মোঃ আশরাফ আলী', '', '', '01304646348', NULL, '2021-04-25 09:42:03', '25', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, '', 0, 'MD Moksadul Islam khokon', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9547, 'Sibli.abc', NULL),
(48, 'সুমন কুমার বিশ্বাস', 'স্বপন কুমার বিশ্বাস', '', '', '01913402967', NULL, '2021-04-25 12:49:48', '25', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing\r\nroket from 2732 to 5480', 410, 'Sumon Biswas', 'rocket', 500, 1, 1, NULL, '0', 'Home', 9548, 'Sibli.abc', NULL),
(49, 'Md Hasan mahmud. ', 'Abdul Alim. ', '', '', '01771978714', NULL, '2021-04-26 23:22:37', '26', '04', '2021', '0', NULL, NULL, '0', '', '10', '2m', '9TO11PM', 'abc', NULL, 1, 'Bkash By 8714 to 0548', 118, 'Md Hasan Mahmud ', 'nagad', 500, 0, 1, NULL, '0', 'Home', 9549, 'Jalalmahi', NULL),
(50, 'মাহমুদুল হাসান ', 'মোবারক হোসেন ', '', '', '01798773684', NULL, '2021-04-25 13:21:55', '25', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, 'Bkash by 3684 to 0548', 410, 'Mahmudul hasan', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9550, 'Abc.admission', NULL),
(51, 'Md.Mahedi Hassan ', 'Gaffar Mridha ', '', '', '01733156580', NULL, '2021-05-01 16:40:59', '01', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'from 6580 to 0548', 410, 'মেহেদী মৃধা ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9551, 'Jalalmahi', NULL),
(52, 'Shohanul Shahid Shuvo', 'Mamunul Hassan Faruquee', '', '', '01753989142', NULL, '2021-05-08 04:10:13', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash from 142  to 0548', 410, 'Shohan Shahid', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9552, 'Abc.admission', NULL),
(53, 'MD. RIDOY SHORDER', 'ABDUL AFAZ', '', '', '01920061413', NULL, '2021-05-09 21:49:25', '09', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '9981 to bkash', 410, 'JUSTIY X RIDOY', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9553, 'Jalalmahi', NULL),
(54, 'md. khalid hasan', 'Md.Abul kasem', '', '', '01797826065', NULL, '2021-04-26 17:51:58', '26', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, '6065 to by bkash 80548', 118, 'Md khalid hasan', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9554, 'Arman.abc', NULL),
(55, 'Farzana Hasin ', 'Foyzul Alam', '', '', ' 01933521833', NULL, '2021-04-25 15:18:49', '25', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, '', 410, 'Nafisha Tahmidee Radiyah', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9555, 'Arman.abc', NULL),
(56, 'md.mahmud', 'md.babu', '', NULL, '01406559816', NULL, '2021-04-25 15:59:04', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'https://www.facebook.com/profile.php?id=100045717888951', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9556, 'Sibli.abc', NULL),
(57, 'Md Towhid ', 'Md Saiful Islam ', '', '', '01703661505', NULL, '2021-04-25 19:34:41', '25', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, '', 311, 'MD Towhidul Islam ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9557, 'Arman.abc', NULL),
(58, 'Shariful islam', 'nurul islam', '', NULL, '01924732706', NULL, '2021-04-25 19:42:15', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '4TO6PM', 'others', NULL, 1, NULL, 0, 'shariful islam', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9558, 'Jalalmahi', NULL),
(59, 'Sifat Binte Kashem ', 'Abul kashem', '', '', '01756411166', NULL, '2021-04-27 14:57:33', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '1m', '9TO11PM', 'abc', NULL, 0, '', 410, 'Sifat Binte Kashem ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9559, 'Jalalmahi', NULL),
(60, 'Ajaharul Islam Noman', 'Kamal uddin ', '', NULL, '01965761658', NULL, '2021-04-25 20:32:26', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '4TO6PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, NULL, 0, 'Ajaharul Islam Noman', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9560, 'Sibli.abc', NULL),
(61, 'iftiar hossan', 'MD imran', '', '', '01953705239', NULL, '2021-04-26 14:54:48', '26', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'digital marketing\r\nbikash from 5239 to 0548 ', 118, 'iftiar hossain ', 'bkash', 750, 0, 1, NULL, '0', 'Home', 9561, 'Sibli.abc', NULL),
(62, 'Easin Shopon ', 'Jahangir Alam ', '', NULL, '01300378737', NULL, '2021-04-25 21:49:50', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Easin Shopon ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9562, 'Nazmul.abc', NULL),
(63, 'সাইফুল ইসলাম  ', 'শহিদুল্লাহ মজুমদার  ', '', NULL, '০১৮৬৮২২৯১২৪', NULL, '2021-04-25 22:24:15', '25', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'MD Saiful islam', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9563, 'Sibli.abc', NULL),
(64, 'মুকুল চৌধুরী', 'মোঃ আব্দুল লতিফ চৌধুরী', '', '', '01916-519461', NULL, '2021-04-27 12:13:32', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 2080 to 0548 ', 410, 'Mokul Chowdhury ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9564, 'Abc.admission', NULL),
(65, 'Md. Zahangir Alam', 'Md. Abdul Jalil', '', '', '01733156130', NULL, '2021-04-26 18:29:02', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Rocket  by 3006 to 0548', 410, 'zahangir alam', 'rocket', 500, 1, 1, NULL, '0', 'Home', 9565, 'Abc.admission', NULL),
(66, 'Md Jabed Hossain ', 'Sirajul Islam', '', '', '01861280904', NULL, '2021-04-26 16:03:29', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 0904 to 0548', 410, 'Md Jabed Hossain ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9566, 'Abc.admission', NULL),
(67, 'মোঃ আমিমুল হাসান (রীতু)', 'মোঃ আলহাজ্ব আবুল কালাম আজাদ', '', NULL, '০১৯০৭-৮৩৮৪৪৪', NULL, '2021-04-26 04:21:15', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'AmiMul HaSan RiTu', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9567, 'Abc.admission', NULL),
(68, 'Md Roni Mia', 'Abdur Rajjak', '', NULL, '01708993143', NULL, '2021-04-26 04:24:32', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Roni Return', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9568, 'Abc.admission', NULL),
(69, 'মোছাঃ ছাবেকুন নাহার', 'মোঃ ইয়াসিন আলী', '', '', '০১৩০৩৫১৬৪৬৪', NULL, '2021-04-29 20:09:34', '29', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, 'From 7097 To 5480', 410, 'Sabekun Naher', 'rocket', 500, 1, 1, NULL, '0', 'Home', 9569, 'Jalalmahi', NULL),
(70, 'Kabir Ahmmed', 'Md Habibur Rahman', '', '', '01719364720', NULL, '2021-05-01 05:03:57', '01', '05', '2021', '0', NULL, NULL, '410', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 4720 to 0548', 410, 'Kabir Ahmmed Rubel', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9570, 'Abc.admission', NULL),
(71, 'Kazi mehedi hasan ', 'Kazi abul khair', '', '', '01903742377', NULL, '2021-04-26 12:45:53', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '2377 to by bkash 80548', 410, 'Nazi Mehedi Hasan ovro', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9571, 'Arman.abc', NULL),
(72, 'মোঃ নাসিম', 'মোঃফরজুল হক', '', NULL, '01893428058', NULL, '2021-04-26 13:47:31', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Md Nasim', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9572, 'Sibli.abc', NULL),
(73, 'Md.Saiful Islam', 'Md. Azir Bakhsha', '', '', '01728344991', NULL, '2021-04-26 14:07:40', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 4991 to 0548', 410, 'Md.Saiful Islam', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9573, 'Abc.admission', NULL),
(74, 'Alamin', 'Abulkashem', '', NULL, '01871381490', NULL, '2021-04-26 14:48:55', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, ' alamin Sheikh ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9574, 'Nazmul.abc', NULL),
(75, 'Md imtiaz hossen', 'Md Ismail hossen', '', '', '01958403338', NULL, '2021-04-26 14:49:30', '26', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, '', 0, 'Md imtiaz hossen', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9575, 'Sibli.abc', NULL),
(76, 'Sheuly Sarker ', 'Chittya Ronzon Sarker', '', '', '1743402166 ', NULL, '2021-04-26 16:17:13', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '1m', '9TO11PM', 'abc', NULL, 0, 'Bkash by 2166 to 0548', 410, 'SB Sarna', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9576, 'Abc.admission', NULL),
(77, 'Jalal uddin', 'Md Osman goni', '', '', '01311683888', NULL, '2021-04-30 00:18:53', '30', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'bkash by 0737 to 0548', 410, 'Jalal uddin', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9577, 'Abc.admission', NULL),
(78, 'মোঃ আসিব হাসান শ্রাবন', 'মোঃ আসাদুজ্জামান', '', NULL, '01797625516', NULL, '2021-04-26 19:27:47', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Asib Hassan Srabon', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9578, 'Jalalmahi', NULL),
(79, 'রায়হান', 'শাকিল আহমেদ ', '', '', '01317046533', NULL, '2021-05-03 03:01:17', '03', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 1, 'From 8117 to 0548', 249, 'A M Raihan', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9579, 'Jalalmahi', NULL),
(80, 'Habib Hosen ', 'Nur Mohammad ', '', '', '01885914611', NULL, '2021-04-27 13:04:34', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '7083 to by bkash 80548', 410, 'Habib Sagor ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9580, 'Arman.abc', NULL),
(81, 'কামরুন্নাহার কনা', 'আবুল কাশেম মিয়া', '', NULL, '01736-189215', NULL, '2021-04-26 19:53:27', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 2, NULL, 0, 'Kamrunnahar Kona', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9581, 'Sibli.abc', NULL),
(82, 'Abir Malik', 'Jentu Malik', '', '', '01632723480', NULL, '2021-04-26 20:31:46', '26', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 7038 to 0548', 410, 'Abir Malik', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9582, 'Abc.admission', NULL),
(83, 'মুজাহিদুল ইসলাম ', 'মু.শামসুদ্দিন ', '', NULL, '০১৮৪০৪৩৭৬৫৭', NULL, '2021-04-26 20:22:34', '26', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'mojahedul islam mojahedul ialam', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9583, 'Abc.admission', NULL),
(84, 'Most. Mahfuja Khatun', 'Md. Mojibur Rahman', '', '', '01313567995', NULL, '2021-04-26 22:45:15', '26', '04', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 0, '79954 to by rocket 7805480', 311, 'HB Mahfuja Rahman Bithi', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9584, 'Arman.abc', NULL),
(85, 'Sabbir Ahmed', 'Md. Safiar Rahman', '', NULL, '01714206361', NULL, '2021-04-27 00:11:17', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sabbir ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9585, 'Abc.admission', NULL),
(86, 'Khandoker Reyadus Salehin', 'Md Asadud Doulla Khandoker', '', NULL, '01776900695', NULL, '2021-04-27 02:52:40', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Reyadus Salehin', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9586, 'Jalalmahi', NULL),
(87, 'Ambiya khatun  ', 'Bozlur Rahman ', '', '', '01771648691', NULL, '2021-04-27 14:12:35', '27', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 0, '3534 to by bkash 80548 ', 248, 'Ambiya Sultana Topu', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9587, 'Arman.abc', NULL),
(88, 'Mohammad Jobair ', 'Mohammad Alam', '', NULL, '01831560679', NULL, '2021-04-27 14:03:18', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Mohammad Jobair', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9588, 'Jalalmahi', NULL),
(89, 'Fysal Ahmed ', 'Tofazzal Hossain', '', '', '01778178107', NULL, '2021-04-27 14:10:01', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, 'Bkash by 8107 to 0548', 410, 'Fysalahmed', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9589, 'Abc.admission', NULL),
(90, 'Fahim Morshed', 'Idrish Ali', '', '', '01705993110', NULL, '2021-04-27 20:01:33', '27', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Digital marketing\r\nbikash from 8813 to 0548 ', 118, 'Fahim Morshed', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9590, 'Sibli.abc', NULL),
(91, 'Kousik Ahmed', 'Md. Belal', '', '', '+8801748549063', NULL, '2021-04-27 15:34:05', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Note by 1371 to 0548', 410, 'Kousik Ahmed  (https://www.facebook.com/kousik.ahmed/) ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9591, 'Nazmul.abc', NULL),
(92, 'MD.Robiul islam ', ' MD.soleman', '', NULL, '01840740652', NULL, '2021-04-27 15:24:39', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'RM Robiul Islam Miraj', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9592, 'Sibli.abc', NULL),
(93, 'Abdullah Sajid', 'Jakir hosen', '', '', '01309607852', NULL, '2021-04-27 15:38:38', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '1m', '4TO6PM', 'abc', NULL, 1, '', 410, 'Abdullah Sajid', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9593, 'Abc.admission', NULL),
(94, 'Hira khanam', 'Md. Khaja shaikh', '', '', '01966904982', NULL, '2021-04-29 20:39:20', '29', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 0, 'Bkash by 6237 to 0548', 118, 'Hira khanam', 'nagad', 500, 0, 1, NULL, '0', 'Home', 9594, 'Nazmul.abc', NULL),
(95, 'MOHAMMAD JAHIRUL ISLAM SIKDER    ', 'NUR AHMED SIKDER ', '', NULL, '01829325685', NULL, '2021-04-27 16:24:37', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'MD.JAHIRUL ISLAM SIKDER   ', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9595, 'Sibli.abc', NULL),
(96, 'chaity nath', 'chaity nath', '', '', '01836119169', NULL, '2021-04-27 19:43:37', '27', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'others', NULL, 0, '', 0, 'Arthi nath', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9596, 'Sibli.abc', NULL),
(97, 'Md Roni Uddin', 'Md Shadidul islam', '', '', '01317768942', NULL, '2021-05-08 00:18:01', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'By Bkash from 1060 to 0458', 410, 'Md Roni uddin', 'bkash', 300, 0, 1, NULL, '0', 'Home', 9597, 'Abc.admission', NULL),
(98, 'Tonoy Krishna Barmon ', 'Badal Krishna Barmon ', '', '', '01872446562', NULL, '2021-04-29 20:38:28', '29', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 9555 to 0548', 410, 'Tonoy Barmon Tonoy Barmon ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9598, 'Nazmul.abc', NULL),
(99, 'Sonia Jafrin', 'Enamor Rahman', '', NULL, '01749418764', NULL, '2021-04-27 23:10:41', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 2, NULL, 0, 'Sonia Jafrin Shorna', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9599, 'Sibli.abc', NULL),
(100, 'Mujahid Hasan Abid', 'Mokajjal Hossain Raju', '', NULL, '01609862250', NULL, '2021-04-27 23:37:20', '27', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'MH Shanto Khan', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9600, 'Abc.admission', NULL),
(101, 'কৃষ্ণ সরকার', 'মৃঃ বিমল কৃষ্ণ সরকার', '', '', '01791424257', NULL, '2021-04-28 01:27:20', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing\r\nbikash from 4257 to 0548 ', 410, 'Krishna sarker', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9601, 'Sibli.abc', NULL),
(102, 'Md. Tayef Hossain ', 'Md. Abdhul Lotif', '', NULL, '01828252628', NULL, '2021-04-28 12:50:27', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'Md. Tayef Hossain Akand ', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9602, 'Sibli.abc', NULL),
(103, 'মুশফিকুর রহিম ', 'আব্দুর সাত্তার ', '', '', '০১৭৩০৭৪১৬৫১', NULL, '2021-04-28 13:08:54', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 118, 'মুশফিকুর রহিম ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9603, 'Jalalmahi', NULL),
(104, 'সাগর আহমেদ ', 'দেলোয়ার হোসেন ', '', '', '০১৮৯৩৪৭৪৩৭৭', NULL, '2021-04-29 19:22:14', '29', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 6798 to 0548', 118, 'Sagor Chowdhury ', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9604, 'Nazmul.abc', NULL),
(105, 'Syed Aslamul Kibria ', 'Syed Ahsanul Kibria ', '', '', '01773123123', NULL, '2021-04-28 15:10:51', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'others', NULL, 1, '', 410, 'Syedkibriajadree@gmail.com', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9605, 'Abc.admission', NULL),
(106, 'মোঃজিহাদ', 'সূযত আলী', '', NULL, '০১৮২৯০৯২২৫৯', NULL, '2021-04-28 15:53:05', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'xm hirdoy', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9606, 'Nazmul.abc', NULL),
(107, 'Sheikh Roufur Rahim', 'Sheikh Razu Ahmed', '', '', '01766320220', NULL, '2021-04-28 16:19:02', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 0220 to 0548', 410, 'Sheikh Roufur Rahim', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9607, 'Abc.admission', NULL),
(108, 'Nazmulhaider', 'Md Noab', '', '', '01630570275', NULL, '2021-04-28 16:26:06', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash  by 0275 to  0548 ', 410, 'Nazmulhaider', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9608, 'Abc.admission', NULL),
(109, 'Shanto pal paul', 'শান্ত পাল', '', '', '০১৪০৫২৫৪০৩০', NULL, '2021-05-08 00:10:28', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'By bkash from 4030 to 0548 ', 410, ' Shanto pal paul', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9609, 'Abc.admission', NULL),
(110, 'Md. Tayef Hossain', ' Md. Abdhul Lotif', '', NULL, '01828252628', NULL, '2021-04-28 16:56:14', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md. Tayef Hossain Akand', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9610, 'Sibli.abc', NULL),
(111, 'Masud khandoker', 'Abdul kuddus khandoker ', '', NULL, '01317128745', NULL, '2021-04-28 19:44:22', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'M k Masud khandoker', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9611, 'Sibli.abc', NULL),
(112, 'ফাতেমা', 'মাইন উদ্দীন', '', '', '01768342005', NULL, '2021-04-28 22:25:05', '28', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, 'facebook marketing \r\nbikash from 2070 to 0548 ', 410, 'Fatema Tuz Zohora', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9612, 'Sibli.abc', NULL),
(113, 'Nazmul Hasan Nokib', 'Abul Kalam', '', NULL, '01910229119', NULL, '2021-04-28 23:33:50', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Nazmul Hasan Nokib', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9613, 'Arman.abc', NULL),
(114, 'Nazmul Hasan Nokib', 'Abul Kalam', '', NULL, '01910229119', NULL, '2021-04-28 23:45:46', '28', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Nazmul Hasan Nokib', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9614, 'Nazmul.abc', NULL),
(115, 'MANIK  MURMU', 'MOTAI  MUMU', '', '', '01722430102', NULL, '2021-04-29 11:17:06', '29', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'digital marketing \r\nroket from 1017 to 5480 ', 118, 'Manik Murmu', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9615, 'Sibli.abc', NULL),
(116, 'MANIK  MURMU', 'MOTAI  MUMU', '', '', '01722430102', NULL, '2021-04-29 11:26:32', '29', '04', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 1, 'web digine\r\n roket from 1027 to 5480 ', 248, 'Manik Murmu', 'rocket', 1000, 1, 1, NULL, '0', 'Home', 9616, 'Sibli.abc', NULL),
(117, 'MANIK  MURMU', 'MOTAI  MUMU', '', '', '01722430102', NULL, '2021-04-29 13:23:41', '29', '04', '2021', '0', NULL, NULL, '0', '', '12', '', '9TO11PM', 'abc', NULL, 1, 'video editing \r\nroket from 1027 to 5480', 210, 'Manik Murmu', 'rocket', 1000, 1, 1, NULL, '0', 'Home', 9617, 'Sibli.abc', NULL),
(118, 'Md.Shamim ', 'Md.Fazlul Haque', '', '', '01771970919', NULL, '2021-04-29 11:44:51', '29', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, 'digital marketing \r\nnogod from 4548 to 0548 ', 118, 'Md Shamim Almamun', 'nagad', 500, 0, 1, NULL, '0', 'Home', 9618, 'Sibli.abc', NULL),
(119, 'MD Mamun Hasan', 'MD Jahirul Islam', '', '', '01635563302', NULL, '2021-04-29 13:26:57', '29', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'digital marketing \r\nbikash from 3302 to 0548', 118, 'MD Mamun Hasan', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9619, 'Sibli.abc', NULL),
(120, 'Fatema Oneq', 'Md. kamruzzaman', '', '', '01521584546', NULL, '2021-04-30 00:22:15', '30', '04', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 0, 'From 7322 TO 0548', 118, 'Fatema Zaman Oneq', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9620, 'Jalalmahi', NULL),
(121, 'Md Shakil Alam', 'Md Jashim Uddin', '', '', '01619497302', NULL, '2021-04-30 00:23:34', '30', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'bkash by 7302 to 0548', 410, 'Md Shakil Alam', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9621, 'Abc.admission', NULL),
(122, 'সুজন কুমার দাস', 'মনিন্দ্র দাস', '', '', '০১৭৬৩৬১৬৮৭১', NULL, '2021-04-29 21:14:27', '29', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '16871 to by nagad 80548 ', 410, 'sujon kumar', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9622, 'Arman.abc', NULL),
(123, 'Md Imran Mridha ', 'Abdul Mannan Mridha ', '', '', '01404966670', NULL, '2021-05-03 21:24:17', '03', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Rocket by 7490 to 0548', 410, 'Imran Mridha ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9623, 'Abc.admission', NULL),
(124, 'মোঃ শাকিল ', 'মোঃ জয়নাল আবেদীন ', '', NULL, '01753991367', NULL, '2021-04-29 23:35:07', '29', '04', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'MD.Tanvir Shakil', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9624, 'Arman.abc', NULL),
(125, 'মোঃ তারেকুজ্জামান', 'মোঃ শামশুল আলম', '', NULL, 'অনোয়ারা বেগম', NULL, '2021-04-30 00:14:45', '30', '04', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Md tarakquzzman', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9625, 'Jalalmahi', NULL),
(126, 'মোঃ মজিবুর রহমান ', 'মোঃ হাছেন আলী', '', '', '০১৭৭০৯০৫৪৮৬', NULL, '2021-04-30 19:26:36', '30', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing \r\nbikash from 0757 to 0548', 410, 'মোঃ মজিবুর রহমান ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9626, 'Sibli.abc', NULL),
(127, 'A. B. M. Anisur Rahman ', 'Abdur Rahim Khan', '', '', '01715280905', NULL, '2021-04-30 18:09:19', '30', '04', '2021', '0', NULL, NULL, '0', '', '11', '', '4TO6PM', 'abc', NULL, 1, 'Bkash by 6375 to 0548', 410, 'https://www.facebook.com/profile.php?id=100010349465075', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9627, 'Abc.admission', NULL),
(128, 'Samiul', 'Samsul', '', NULL, '01773505689', NULL, '2021-05-01 01:34:26', '01', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '4TO6PM', 'others', NULL, 1, NULL, 0, 'Sani ahmed', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9628, 'Sibli.abc', NULL),
(129, 'আশিক উল্লাহ', 'জাকের হোছাইন', '', '', '০১৮৭১৬৭৪০০৩', NULL, '2021-05-01 19:44:54', '01', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, 'digital marketing\r\nbikash from 8555 to 0548', 118, 'Ashik Ullah', 'bkash', 820, 0, 1, NULL, '0', 'Home', 9629, 'Sibli.abc', NULL),
(130, 'Mizanur Rahman ', 'Md jamal Hawlader ', '', NULL, '০1861578215', NULL, '2021-05-01 08:59:53', '01', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Mizanur Rahman sadin', 'dbbl', NULL, NULL, NULL, NULL, '0', 'Home', 9630, 'Abc.admission', NULL),
(131, 'Md.shahin alam', 'Md.sayod ali', '', NULL, '01768884526', NULL, '2021-05-01 11:38:55', '01', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'Md. Shahin Alam', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9631, 'Jalalmahi', NULL),
(132, 'Swapan chanda', 'Ranjit Chanda', '', '', '01931319562', NULL, '2021-05-01 20:20:44', '01', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing \r\nnogod from 9562 to 0548', 410, 'স্বপন চন্দ', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9632, 'Sibli.abc', NULL),
(133, 'Rifat Tasfia', 'Let.Ruhul Amin', '', '', '01869006680', NULL, '2021-05-01 15:56:55', '01', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, 'facebook marketing \r\nnogod from 7887 to 0548', 410, 'Rifat Tasfia', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9633, 'Sibli.abc', NULL),
(134, 'Md rozibul', 'Md anowar', '', '', '01988596397', NULL, '2021-05-15 22:29:22', '15', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, 'Facebook ,marketing\r\n Bkash from 1764 to 0548', 410, 'Md rozibul', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9634, 'Sibli.abc', NULL),
(135, 'Tarikul Islam Fahad', 'Abdul Kuddus Hawlader', '', NULL, '01779047298', NULL, '2021-05-01 17:28:26', '01', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Ahmed Fahad', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9635, 'Jalalmahi', NULL),
(136, 'Mihir Sarker', 'Nimai Sakrer', '', '', '01770753900', NULL, '2021-05-01 19:34:23', '01', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '3900 to by 80548 ', 410, 'Mihir Sarker', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9636, 'Arman.abc', NULL),
(137, 'md sujan islam', 'md sha alom ', '', '', '01906669885', NULL, '2021-05-02 12:56:43', '02', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, '699 to by bkash 0548 ', 410, 'shondhan tolove ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9637, 'Arman.abc', NULL),
(138, 'Ashik', 'Ayub Ali', '', '', '01790079952', NULL, '2021-05-01 23:07:03', '01', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 410, 'Md Ashik', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9638, 'Arman.abc', NULL),
(139, 'মিজু', 'আবেদ আলী ', '', '', '01732260905', NULL, '2021-05-02 11:19:09', '02', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'facebook marketing \r\nfrom 0815 to 0548', 410, 'MD mizu khan ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9639, 'Sibli.abc', NULL),
(140, 'Shanta moni', 'Sekh sukur ali', '', NULL, '01720011495', NULL, '2021-05-02 10:08:58', '02', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'others', NULL, 2, NULL, 0, 'Mb sumon', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9640, 'Abc.admission', NULL),
(141, 'Shanta moni', 'Sekh sukur ali', '', NULL, '01313852246', NULL, '2021-05-02 10:15:32', '02', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'others', NULL, 2, NULL, 0, 'Mb sumon', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9641, 'Sibli.abc', NULL),
(142, 'মুহাম্মদ দিদারুল আলম', 'মুহাম্মদ কবির আহমদ  ', '', '', '০১৮৭৯৩০৮৩৩৩', NULL, '2021-05-02 13:55:58', '02', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '4306 to by bkash 0548', 410, 'MD Didarul Alam', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9642, 'Arman.abc', NULL),
(143, 'Saniya', 'Md :Hadis Mia', '', '', '01302860747', NULL, '2021-05-05 19:42:42', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, '3029 to by bkash 80548', 410, 'অবুজ পাখী', 'rocket', 500, 1, 1, NULL, '0', 'Home', 9643, 'Arman.abc', NULL),
(144, 'Sabuj Roy ', 'Kailash Chandra Roy ', '', '', '01823271834', NULL, '2021-05-03 11:28:23', '03', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, '1843 to by bkash 80548', 410, 'Sabuj Roy ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9644, 'Arman.abc', NULL),
(145, 'MD Raju islam', 'Fazlu sikder', '', NULL, '01910273759', NULL, '2021-05-02 22:21:32', '02', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '4TO6PM', 'abc', NULL, 2, NULL, 0, 'MD Raju islam', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9645, 'Sibli.abc', NULL),
(146, 'MD Raju islam', 'Fazlu sikder', '', NULL, '01910273759', NULL, '2021-05-02 22:23:37', '02', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 2, NULL, 0, 'MD Raju islam', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9646, 'Sibli.abc', NULL),
(147, 'সুমী আক্তার ', 'মো.সিরাজ মোল্লা ', '', '', '০১৬২০৮৯১৯২৬', NULL, '2021-05-03 09:39:58', '03', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 0, 'facebook marketing\r\nroket from 3317 to 5480', 410, 'Sanjida Shumi ', 'rocket', 500, 1, 1, NULL, '0', 'Home', 9647, 'Sibli.abc', NULL),
(148, 'sheik rasel', 'MD. SHAHIDUL ISLAM', '', NULL, '01916868324', NULL, '2021-05-03 10:44:49', '03', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Rahat Rasel', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9648, 'Sibli.abc', NULL),
(149, 'Habib', 'Abdul ohab', '', '', '01873477892', NULL, '2021-05-03 15:23:34', '03', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, 'Digital marketing\r\nBikash from 9456 to 0548', 118, 'Habib chawdhary', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9649, 'Sibli.abc', NULL),
(150, 'Md Habibur Rahman', 'Md Oyadud Ali', '', NULL, '+8801766464916', NULL, '2021-05-03 15:51:33', '03', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md Habibur Rahman', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9650, 'Jalalmahi', NULL),
(151, 'মোঃ নাজমুল হোসেন', 'আবু বকর সিদ্দিক', '', '', '০১৮৬৮৪৮০৫৫২', NULL, '2021-05-03 16:37:02', '03', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, '6616 to by bkash 80548', 248, 'Najmul hussain', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9651, 'Arman.abc', NULL),
(152, 'জলি বেগম', 'মোঃমতিজ আলী', '', '', '০১৭৮৬-৮১৪৬৯৪', NULL, '2021-05-05 11:33:40', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, 'from 7747 to Bkash', 410, 'JolyJoly', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9652, 'Jalalmahi', NULL),
(153, 'Md. Bilayet Khan ', 'Md. Babu Khan ', '', '', '01710809188', NULL, '2021-05-05 11:13:58', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 9188 to 0548', 410, 'Bilayet khan', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9653, 'Abc.admission', NULL),
(154, 'এফ এ লিমন ', 'শামছুর রহমান', '', '', '01645390136', NULL, '2021-05-06 19:39:15', '06', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, 'digital marketing \r\nroket from 3977 to 00548', 118, 'F A Limon ', 'rocket', 1100, 0, 1, NULL, '0', 'Home', 9654, 'Sibli.abc', NULL),
(155, 'মো মাহফুজ', 'আ.সাততার মাদবোর', '', NULL, '০১৭০৫৯৪৯১৮৩', NULL, '2021-05-04 21:58:08', '04', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Md Mahfuj tonmoy', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9655, 'Sibli.abc', NULL),
(156, 'MD MAHFUJ', 'MD SATTAR', '', '', '01704949183', NULL, '2021-05-06 22:22:42', '06', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, 'digital marketing \r\nbikash from 5753 to 0548', 118, 'Md mahfuj tonmoy', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9656, 'Sibli.abc', NULL),
(157, 'Akash sarkar', 'Sikta shekhar sarkar', '', NULL, '01947132469', NULL, '2021-05-04 22:15:28', '04', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Akash sarkar', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9657, 'Sibli.abc', NULL),
(158, 'Habibur rahman', 'Mojibur rahman', '', NULL, '01931495212', NULL, '2021-05-04 22:31:51', '04', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Jr Ayan rahman', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9658, 'Jalalmahi', NULL),
(159, 'Abdullah Al Araf ', 'Md. Nazmul Hasan ', '', '', '01794377128', NULL, '2021-05-05 23:06:20', '05', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'From 7128 to bkash', 360, 'Abdullah Al Araf ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9659, 'Jalalmahi', NULL),
(160, 'Munshi Mohammad Tarek ', 'Moslem Munshi', '', '', '01956299667', NULL, '2021-05-05 11:26:14', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 410, 'Dhrubo tarek (banglay)', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9660, 'Arman.abc', NULL),
(161, 'Mottasim Billah Tamim', 'Ibrahim', '', NULL, '01785585409', NULL, '2021-05-05 11:30:19', '05', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Mottasim Billah tamim', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9661, 'Arman.abc', NULL),
(162, 'Mohammed Bin Tutul', 'Md. Abdul Matin', '', '', '01811990097', NULL, '2021-05-05 12:05:25', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash by 0097 to 0548', 410, 'Mohammad Bin Tutul', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9662, 'Abc.admission', NULL),
(163, 'Md Jaglur Rahman', 'Azhar Ali', '', '', '01321056679', NULL, '2021-05-05 19:43:50', '05', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '4TO6PM', 'abc', NULL, 1, 'Digital marketing \r\nBikash from 6903 to 0548', 118, 'Md Zaglur Rahman', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9663, 'Sibli.abc', NULL),
(164, 'Md Roni Uddin', 'Md Shadidul islam', '', '', '01317768942', NULL, '2021-05-06 22:05:05', '06', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'Nagad by 8942 to 0548', 360, 'Md Roni Uddin', 'nagad', 300, 0, 1, NULL, '0', 'Home', 9664, 'Abc.admission', NULL),
(165, 'মোঃনাদিম হাওলাদার', 'মোঃ আঃ মান্নান হাওলাদার', '', '', '০১৮১৮১১১৯৮৩', NULL, '2021-05-05 17:42:25', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '4TO6PM', 'abc', NULL, 1, '1330 to by nagad 80548', 410, 'Md Nadim howlader', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9665, 'Arman.abc', NULL),
(166, 'Emdadul Ahmed ', 'Jamal Hossain ', '', '', '01575090038 ', NULL, '2021-05-05 13:45:05', '05', '05', '2021', '0', NULL, NULL, '0', '', '13', '15d', '9TO11PM', 'abc', NULL, 1, '', 310, 'Emdad Ahmed Nil ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9666, 'Arman.abc', NULL),
(167, 'Md Arman Ali', 'Md Najrul islam', '', '', '01773855257', NULL, '2021-05-05 13:48:44', '05', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 410, 'FaArman', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9667, 'Arman.abc', NULL),
(168, 'সুপেন খাড়িয়া ', 'ফাগু খাড়িয়া', '', NULL, '01704414848', NULL, '2021-05-05 14:01:29', '05', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Supen Kharia ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9668, 'Sibli.abc', NULL),
(169, 'Afza Hosain', 'Mostafijur Rahman', '', NULL, '01756104443', NULL, '2021-05-05 14:50:48', '05', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Md Afza hosain', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9669, 'Sibli.abc', NULL),
(170, 'মোঃ সুরখান উদ্দিন ', 'মোঃ জামির উদ্দিন', '', '', '01783205701', NULL, '2021-05-06 22:00:27', '06', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, '3303 to by bkash 80548', 360, 'মোঃ আউয়াল ', 'nagad', 500, 1, 1, NULL, '0', 'Home', 9670, 'Arman.abc', NULL),
(171, 'Nushrat Jahan', 'Md Rafiq', '', '', '01883551458', NULL, '2021-05-05 20:39:08', '05', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 0, '', 310, 'Nushrat Jahan Nishi', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9671, 'Arman.abc', NULL),
(172, 'MD:Nasir Uddin ', 'MD:Abdul Salam', '', NULL, '01734017422', NULL, '2021-05-05 23:13:54', '05', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Nasir Uddin ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9672, 'Sibli.abc', NULL),
(173, 'Sabbir Ahmed shuvo  ', 'Md Ibrahim hossain ', '', NULL, '01881841848', NULL, '2021-05-05 23:57:19', '05', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sabbir Ahmed Shuvo   ', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9673, 'Sibli.abc', NULL);
INSERT INTO `online_students` (`st_id`, `st_name`, `st_father_name`, `st_mother_name`, `st_email`, `st_phone`, `st_pass`, `st_join_date`, `st_join_day`, `st_join_month`, `st_join_year`, `st_address`, `st_division`, `st_region`, `st_db`, `st_nid`, `st_course_name`, `st_course_duration`, `st_time_shdl`, `st_it_firm`, `st_course_result`, `st_sex`, `st_note`, `st_batch_number`, `st_facebook`, `st_payment_method`, `st_payment_paid`, `st_payment_fullpaid`, `st_payment_status`, `st_payment_invoice`, `st_education`, `st_certificate`, `st_registration_number`, `st_reference_name`, `st_photo`) VALUES
(174, 'Rafi', 'Asadul Haque', '', '', '01715483823', NULL, '2021-05-06 19:49:16', '06', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 1, 'web disign \r\nbikash from 4005 to 0548', 248, 'Al Zabir Hussain Rafi', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9674, 'Sibli.abc', NULL),
(175, 'Nahid Hasan Apon', 'Md:Abdul Lotif mia', '', '', '01580979260', NULL, '2021-05-11 12:19:41', '11', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Digital marketing\r\nBikash from 2024 to 0548', 119, 'Nahid Hasan Apon', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9675, 'Sibli.abc', NULL),
(176, 'SADID SHARIF', 'SHARIF ULLAH', '', '', '01754066673', NULL, '2021-05-07 17:15:32', '07', '05', '2021', '0', NULL, NULL, '0', '', '12', '', '9TO11PM', 'abc', NULL, 1, 'video editing |\r\nnogod from 6867 to 0548', 210, 'SADID', 'nagad', 1000, 1, 1, NULL, '0', 'Home', 9676, 'Sibli.abc', NULL),
(177, 'Laila Tabassum ', 'Md Abdul Latif', '', '', '01870454543', NULL, '2021-05-06 19:17:30', '06', '05', '2021', '0', NULL, NULL, '0', '', '11', '1m', '9TO11PM', 'abc', NULL, 0, '6704 to by bkash 0548', 410, 'Laila Tabassum ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9677, 'Arman.abc', NULL),
(178, 'Sonia Afrin ', 'Md Gaffar ', '', '', '01933266328', NULL, '2021-05-07 21:37:09', '07', '05', '2021', '0', NULL, NULL, '118', '', '10', '', '9TO11PM', 'abc', NULL, 0, 'Digital Marketing \r\nBikash from 7016 to 0548', 119, 'Sonia Afrin ', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9678, 'Sibli.abc', NULL),
(179, 'মো:নাইম মিয়া মিলন ', 'মো:হিরাজ মিয়া ', '', NULL, '০১৭৭৬৬৯৬৬৯৫', NULL, '2021-05-06 13:01:21', '06', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'Ahmed Milon', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9679, 'Sibli.abc', NULL),
(180, 'Sajib Paul', 'Satindra Paul', '', '', '01747639942', NULL, '2021-05-07 14:33:35', '07', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'from 9942 to Bkash', 118, 'Sajib Paul', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9680, 'Jalalmahi', NULL),
(181, 'Abdul Mannan ', 'Md. Shahidul Islam', '', '', '01750179364 ', NULL, '2021-05-08 00:21:24', '08', '05', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, '9364 to bkash', 312, 'Md.Mannan Khan ', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9681, 'Jalalmahi', NULL),
(182, 'Md.Shorif Miah', 'Md.Aslam Miah', '', '', '01763335599', NULL, '2021-05-07 11:18:10', '07', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '4TO6PM', 'abc', NULL, 1, 'Data entry \r\nbikash from 5599 to 0548', 360, 'Md.Shorif Miah', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9682, 'Sibli.abc', NULL),
(183, 'বিদর্শন চাকমা', 'চিকনচান চাকমা', '', NULL, '০১৪৪৪৯৯৬৮৬৩', NULL, '2021-05-07 10:25:02', '07', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '7TO9PM', 'others', NULL, 1, NULL, 0, 'Bidar changma', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9683, 'Sibli.abc', NULL),
(184, 'Shaon halder', 'Sudhangshu halder', '', '', '01874990306', NULL, '2021-05-07 12:24:45', '07', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, '', 410, 'Shaon halder', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9684, 'Arman.abc', NULL),
(185, 'Elias Hossain ', 'Rafiqul Islam  ', '', '', '01747446955', NULL, '2021-05-07 14:24:00', '07', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '4TO6PM', 'others', NULL, 1, '', 410, 'Elias Hossain ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9685, 'Arman.abc', NULL),
(186, 'Tanim ahmed', 'Motlabe alli', '', '', '01781056710', NULL, '2021-05-07 15:50:14', '07', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '9TO11PM', 'abc', NULL, 1, '56710 to by nagad 0548', 248, 'https://www.facebook.com/justicetanim', 'nagad', 1000, 1, 1, NULL, '0', 'Home', 9686, 'Arman.abc', NULL),
(187, 'মাছুম আহমদ', 'আবুল ফয়েজ ', '', NULL, '01775306015', NULL, '2021-05-07 16:31:25', '07', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'Md masum ahmod', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9687, 'Jalalmahi', NULL),
(188, 'মুহাম্মদ, রায়হান', 'বাচ্চু মিয়া', '', '', '01810476305', NULL, '2021-05-07 17:43:55', '07', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '', 410, 'hafej Rayhan uddin', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9688, 'Arman.abc', NULL),
(189, 'Priyangshu Banik', 'Late Chitta Ranjan Banik', '', '', '01796923511', NULL, '2021-05-07 18:07:49', '07', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Facebook marketing \r\nbikash from 6035 to 0548 ', 410, 'Priyangshu Banik', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9689, 'Sibli.abc', NULL),
(190, 'মোহম্মদ, জীম রহমান', 'ফুলমিয়া ', '', NULL, '01567961296', NULL, '2021-05-07 18:03:55', '07', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'tamim iqbal jim', 'rocket', NULL, NULL, NULL, NULL, '0', 'Home', 9690, 'Abc.admission', NULL),
(191, 'M A Emran', 'Shohedul Islam', '', NULL, '01744638339', NULL, '2021-05-07 19:51:56', '07', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'M A Emran Hussain', 'nexus', NULL, NULL, NULL, NULL, '0', 'Home', 9691, 'Sibli.abc', NULL),
(192, 'Md Shahadot Hossain', 'Md Amir Hossain', '', NULL, '01707467006', NULL, '2021-05-07 22:18:54', '07', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '4TO6PM', 'কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?', NULL, 1, NULL, 0, 'আমরা বন্ধু ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9692, 'Abc.admission', NULL),
(193, 'Imran Hossen ', 'Ab.Rasid Howlader', '', '', '01610437423', NULL, '2021-05-08 17:37:09', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '7423 to by bkash 0548', 410, 'Imran Hossen ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9693, 'Arman.abc', NULL),
(194, 'Shakhaoat Hossin ', 'Motaleb ', '', NULL, '01315170531', NULL, '2021-05-08 01:20:06', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'Prince Sayem', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9694, 'Sibli.abc', NULL),
(195, 'মো:আবদুর রউফ ', 'মো:সাহিনুর', '', NULL, '০১৭২১৯০৮০০২', NULL, '2021-05-08 11:05:24', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Tiple R Shorts', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9695, 'Sibli.abc', NULL),
(196, 'Md. Mahatab hawlader', 'Md. Mostafa Hawlader', '', '', '01993688857', NULL, '2021-05-10 15:09:31', '10', '05', '2021', '0', NULL, NULL, '0', '', '9', '', '9TO11PM', 'abc', NULL, 1, 'Grapics disign \r\nBikash from 8857 to 0548', 316, 'Mahatab Hawlader', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9696, 'Sibli.abc', NULL),
(197, 'Mizanur Rahman', 'Mir kashem', '', NULL, '01825132126', NULL, '2021-05-08 13:15:25', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'Mizanur Rahman', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9697, 'Sibli.abc', NULL),
(198, 'Imran Khan', 'Md mozzarella ', '', '', '01956531008', NULL, '2021-05-10 19:40:45', '10', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 0, 'Data entry \r\nBikash from 5325 to 0548', 360, 'Imran Khan', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9698, 'Sibli.abc', NULL),
(199, 'Mohammad Taohied Islam Sojib ', 'Md. Amanur Islam', '', '', '01940236662', NULL, '2021-05-08 15:15:51', '08', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '7TO9PM', 'abc', NULL, 1, 'Facebook marketing\r\nBikash from 6662 to 0548', 410, 'মোহাম্মদ তাওহীদ ইসলাম সজীব ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9699, 'Sibli.abc', NULL),
(200, 'Sharmin Sultana ', 'Zakir Hossain', '', '', '01721489109', NULL, '2021-05-08 17:05:40', '08', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 0, '9109 to by bkash 0548', 118, 'Zerin Jahan ', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9700, 'Arman.abc', NULL),
(201, 'মোঃ ইয়াকুবআলী ', 'মোঃ আফছার আলী', '', NULL, '০১৭৪০৮৮১৪৫৮', NULL, '2021-05-08 19:31:02', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'others', NULL, 2, NULL, 0, 'আমি সেই আলোর প্রদীপ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9701, 'Jalalmahi', NULL),
(202, 'MD Sajjad hosen', 'MD Mofejul islam', '', NULL, '01755349462', NULL, '2021-05-08 20:32:55', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Sajjadhosen Shawon', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9702, 'Jalalmahi', NULL),
(203, 'Md sumon mia', 'Md chan mia', '', NULL, '01930433221', NULL, '2021-05-08 21:24:41', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'https://www.facebook.com/profile.php?id=100023824650418', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9703, 'Sibli.abc', NULL),
(204, 'Md Mehedi Hasan', 'Md Zahidul Islam', '', NULL, '01720218716', NULL, '2021-05-08 21:27:42', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'https://www.facebook.com/profile.php?id=100033630857218', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9704, 'Sibli.abc', NULL),
(205, 'Arifa Nasrin Any', 'Auib Ali', '', NULL, '01648826362', NULL, '2021-05-08 22:06:27', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 2, NULL, 0, 'Arifa Nasrin Any', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9705, 'Sibli.abc', NULL),
(206, 'Arifa Nasrin Any ', 'Auib Ali', '', NULL, '01648826362', NULL, '2021-05-08 22:11:36', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '7TO9PM', 'abc', NULL, 2, NULL, 0, 'Arifa Nasrin Any ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9706, 'Sibli.abc', NULL),
(207, 'md mithu khan mithu', 'Md babul mia', '', NULL, '01779172698', NULL, '2021-05-08 22:15:35', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '9TO11PM', 'others', NULL, 2, NULL, 0, 'Md mithu khan mithu', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9707, 'Abc.admission', NULL),
(208, 'Md saiful islam', 'Md A. Rahman', '', NULL, '01760681878', NULL, '2021-05-08 22:45:23', '08', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md. Saiful Islam Anik', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9708, 'Sibli.abc', NULL),
(209, 'Md. Asif Ahmmed Raj', 'Md. Ayub Ali', '', '', '01721602325', NULL, '2021-05-09 13:45:18', '09', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '2325 to by bkash 0548', 410, 'Asif Ahmmed Raj', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9709, 'Arman.abc', NULL),
(210, 'Aminul islam ', 'Ishaq mia', '', '', '01940903235', NULL, '2021-05-09 15:46:28', '09', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, '8111 tto by bkash 0548', 119, 'Aminul islam ', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9710, 'Arman.abc', NULL),
(211, 'Ashikur Rahman', 'MD Shofiqul islam mirza', '', '', '01939479619', NULL, '2021-05-10 14:40:12', '10', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '4TO6PM', 'others', NULL, 1, '7777 to by nagad 0548\r\n', 248, 'Md Ashikur Rahman ', 'nagad', 500, 0, 1, NULL, '0', 'Home', 9711, 'Arman.abc', NULL),
(212, 'Miraz  Mahmud', 'Mir Mosharraf Hossain ', '', '', '01737143433', NULL, '2021-05-09 17:42:24', '09', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, '8757 to by bkash 0548', 410, 'Miraz Mahmud', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9712, 'Arman.abc', NULL),
(213, 'Md Minal mominen', 'Md Monirul Islam ', '', '', '01774045272', NULL, '2021-05-09 18:25:05', '09', '05', '2021', '0', NULL, NULL, '0', '', '12', '', '4TO6PM', 'abc', NULL, 1, '8128 to by bkash 0548', 210, 'MD Minal Mominin', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9713, 'Arman.abc', NULL),
(214, 'Md shohidul islam', 'Edress pedda', '', NULL, '01709312218', NULL, '2021-05-09 18:33:46', '09', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md Shohidul Islam', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9714, 'Sibli.abc', NULL),
(215, 'Tahiya', 'Md.Habibur Rahman', '', '', '01719781422', NULL, '2021-05-09 20:56:23', '09', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 0, 'Digital marketing \r\nBikash from 1422 to 0548', 119, 'Tahiya tuba', 'bkash', 1500, 1, 1, NULL, '0', 'Home', 9715, 'Sibli.abc', NULL),
(216, 'Jakir Hossain ', 'Falu miah', '', NULL, '01746150662', NULL, '2021-05-09 20:41:55', '09', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Jakir Hossain ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9716, 'Sibli.abc', NULL),
(217, 'Md Nazmul Islam ', 'Abdur Razzaq ', '', NULL, '01765703108', NULL, '2021-05-09 23:33:54', '09', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md Nazmul ', 'nexus', NULL, NULL, NULL, NULL, '0', 'Home', 9717, 'Arman.abc', NULL),
(218, 'Md nayem ', 'Jahangir alom', '', '', '01309569637', NULL, '2021-05-10 15:01:43', '10', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Digital marketing\r\nbIKASH FROM 1261 TO 0548', 118, 'Md nayem ', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9718, 'Sibli.abc', NULL),
(219, 'Badhon Ray', 'Atul Chandra Ray', '', '', '01787986348', NULL, '2021-05-11 23:45:11', '11', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, '1166 to Bkash', 119, 'Badhon Ray', 'bkash', 500, 0, 1, NULL, '0', 'Home', 9719, 'Jalalmahi', NULL),
(220, 'khadiza akter', 'abdur Rauf Miah', '', '', '01819406744', NULL, '2021-05-10 12:46:11', '10', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '4TO6PM', 'abc', NULL, 0, '1194 to Bkash', 360, 'khadiza akter', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9720, 'Jalalmahi', NULL),
(221, 'Tahmina akhter', 'Md.mokter hossen', '', NULL, '01796078156', NULL, '2021-05-10 08:53:41', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 2, NULL, 0, 'Tahmina ruma', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9721, 'Sibli.abc', NULL),
(222, 'Tarek Anam ', 'Md. Rofikul Islam ', '', NULL, '01730403281', NULL, '2021-05-10 10:48:41', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Tarek Anam ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9722, 'Sibli.abc', NULL),
(223, 'Prosenjit barmon', 'Sunil barmon', '', NULL, '01760658599', NULL, '2021-05-10 12:11:41', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'Prosenjit barmon ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9723, 'Sibli.abc', NULL),
(224, 'Mahamud Kibrea', 'Mohidul Islam', '', NULL, '01771009362', NULL, '2021-05-10 12:35:13', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '13', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'শাহরিয়ার মাহামুদ কিবরিয়া', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9724, 'Sibli.abc', NULL),
(225, 'Shuvo Roy  ', 'Noresh Chandra Roy  ', '', '', '01747518909', NULL, '2021-05-10 19:27:32', '10', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'Data entry\r\nbikash from 8909 to 0548', 360, ' Shuvo Roy ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9725, 'Sibli.abc', NULL),
(226, 'MST.RAFIYA SULTANA', 'MD.ROFIQUL ISLAM', '', '', '01912779951', NULL, '2021-05-10 14:53:55', '10', '05', '2021', '0', NULL, NULL, '0', '', '9', '', '7TO9PM', 'abc', NULL, 0, '8EA3DUT5U - Bkash', 314, 'Md.rezvy', 'bkash', 1000, 1, 1, NULL, '0', 'Home', 9726, 'Jalalmahi', NULL),
(227, 'Papon kumar', 'Badol kumar', '', '', '01580548635', NULL, '2021-05-10 19:25:22', '10', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'Data Entry\r\nBikash from 4199 to 0548\r\n', 360, 'Pap oN', 'bkash', 200, 0, 1, NULL, '0', 'Home', 9727, 'Sibli.abc', NULL),
(228, 'Md.Abdul Kader Jelany', 'Abdul  Aziz', '', 'Mohammadabdulkader681@gmail.com', '01611443348', NULL, '2021-05-10 15:22:17', '10', '05', '2021', '0', NULL, NULL, '0', '', '10', '2m', '4TO6PM', 'abc', NULL, 1, '', 119, 'Kader Mahmud ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9728, 'Arman.abc', NULL),
(229, 'Md Ibrahim hasan', 'Abdur salan gaji', '', NULL, '01720941191', NULL, '2021-05-10 15:37:37', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md Ibrahim Hasan', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9729, 'Sibli.abc', NULL),
(230, 'Liana akter', 'Mosaref sikder', '', '', '01889656231', NULL, '2021-05-10 17:38:08', '10', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 0, '', 0, 'Liana sikder', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9730, 'Jalalmahi', NULL),
(231, 'Yeashin Arafat Shifat', 'Ali Akkas', '', NULL, '01867147259', NULL, '2021-05-10 18:00:37', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'tasnim Jannat', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9731, 'Jalalmahi', NULL),
(232, 'Ruksana Akter ', 'Foysol Ahmod', '', '', '01307479849', NULL, '2021-05-10 20:47:00', '10', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, '9849 to by bkash 0548', 410, 'Ruksana Akter ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9732, 'Arman.abc', NULL),
(233, 'স্বপন দাস ', 'বীরেন্দ্র দাস', '', NULL, '০১৯১২৬৬৯৬৬২', NULL, '2021-05-10 21:14:08', '10', '05', '2021', '0', NULL, NULL, '0', NULL, '9', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'S D Roy', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9733, 'Sibli.abc', NULL),
(234, 'মো সাজ্জাদ হোসেন', 'সাহাব উদ্দিন', '', NULL, '01865892521', NULL, '2021-05-11 04:38:55', '11', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '4TO6PM', 'abc', NULL, 1, NULL, 0, 'MD Shajjad hossain', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9734, 'Sibli.abc', NULL),
(235, 'MD. SAMSUZZAMAN PRODHANSIFAT', 'MD. NURUZZAM PRODHAN', '', '', '01405021035', NULL, '2021-05-11 13:23:43', '11', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '9TO11PM', 'abc', NULL, 1, 'Digital marketing\r\nNOGOD FROM 1035 TO 0548', 119, 'Sifat', 'nagad', 1500, 1, 1, NULL, '0', 'Home', 9735, 'Sibli.abc', NULL),
(236, 'Jeon Mro', 'Langpung Mro', '', NULL, '01818025572', NULL, '2021-05-11 10:07:40', '11', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '7TO9PM', 'abc', NULL, 1, NULL, 0, 'Jeon Min', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9736, 'Sibli.abc', NULL),
(237, 'Md. Eunus Ali ', 'Md. Elahi Box', '', '', '+8801753731172', NULL, '2021-05-11 11:52:30', '11', '05', '2021', '0', NULL, NULL, '0', '', '10', '', '7TO9PM', 'abc', NULL, 1, '9500 to by bkash 0548', 119, 'Md Eunus Ali ', 'bkash', 1000, 0, 1, NULL, '0', 'Home', 9737, 'Arman.abc', NULL),
(238, 'MMostafa ali', 'Asraf ali', '', NULL, '01571241874', NULL, '2021-05-11 12:53:25', '11', '05', '2021', '0', NULL, NULL, '0', NULL, '6', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'MMohammod Mmostafa', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9738, 'Sibli.abc', NULL),
(239, 'Mohammad Nuruzzaman ', 'Ali Hayder', '', '', '01833384588', NULL, '2021-05-11 19:45:48', '11', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 1, 'Bkash from 4588 to 0548', 410, 'MN Rakib ', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9739, 'Abc.admission', NULL),
(240, 'Sonaton roy', 'Goeash chandra roy', '', '', '01723657790', NULL, '2021-05-12 22:13:49', '12', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'data entry \r\n bikash from8909 to 0548', 360, 'sonaton chandra roy', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9740, 'Sibli.abc', NULL),
(241, 'Darshan chakma', 'Gulo kana chakma', '', '', '01644615515', NULL, '2021-05-11 20:16:45', '11', '05', '2021', '0', NULL, NULL, '0', '', '11', '1m', '7TO9PM', 'others', NULL, 1, '', 410, 'Alane walker', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9741, 'Arman.abc', NULL),
(242, 'Md.Rasel Biswas', 'Md. Maznu Biswas ', '', '', '01710759494', NULL, '2021-05-12 18:00:06', '12', '05', '2021', '0', NULL, NULL, '0', '', '11', '1m', '4TO6PM', 'abc', NULL, 1, '7667 to by bkash 0548', 410, 'Md Rasel Biswas', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9742, 'Arman.abc', NULL),
(243, 'রাকিব', 'হাতেম', '', NULL, '০১৭৭০৫৮২২১৯', NULL, '2021-05-11 22:39:17', '11', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'others', NULL, 1, NULL, 0, 'Md. Rakib Hasan', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9743, 'Sibli.abc', NULL),
(244, 'Md Rahul Bhuiyan ', 'Md Ratan Bhuiyan ', '', NULL, '01955605354', NULL, '2021-05-11 23:18:08', '11', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '7TO9PM', 'others', NULL, 1, NULL, 0, 'https://www.facebook.com/mdrahul.bhuiyan.14', 'nagad', NULL, NULL, NULL, NULL, '0', 'Home', 9744, 'Sibli.abc', NULL),
(245, 'Anup roy', 'Monivison roy', '', '', '01315289150', NULL, '2021-05-12 22:10:11', '12', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'data emtry \r\n bikash from 0451 to 0548', 360, 'Anup roy', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9745, 'Sibli.abc', NULL),
(246, 'কাঞ্চন কুমার রায়', 'ধীরেন্দ্র নাথ রায়', '', '', '০১৭৫১০৯০৪৫১', NULL, '2021-05-12 22:08:34', '12', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, 'data entry\r\nbikash  0451 to 0548', 360, 'Kanchan RoY', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9746, 'Sibli.abc', NULL),
(247, 'নূর ই জান্নাত ', 'মোঃ আশরাফুল ইসলাম ', '', '', '01687234717', NULL, '2021-05-12 12:31:26', '12', '05', '2021', '0', NULL, NULL, '0', '', '13', '1m', '4TO6PM', 'abc', NULL, 0, '4717 to by bkash 0548', 360, 'https://www.facebook.com/smrity.jannat.5', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9747, 'Arman.abc', NULL),
(248, ' মেহরিমা সুলতানা ', 'আব্দুল বারেক প্রধান ', '', '', '০১৬২৮৪০৭০৪২', NULL, '2021-05-12 22:44:58', '12', '05', '2021', '0', NULL, NULL, '0', '', '11', '', '9TO11PM', 'abc', NULL, 0, '7042 to by bkash 0548', 410, 'Meharima Sulatana', 'bkash', 500, 1, 1, NULL, '0', 'Home', 9748, 'Arman.abc', NULL),
(249, 'মো: রহমত উল্লাহ', 'মো: আইয়ুব আলী ', '', '', '01750899626', NULL, '2021-05-13 12:48:02', '13', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '9TO11PM', 'abc', NULL, 1, '', 360, 'MD ROHMOT ULLA ', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9749, 'Arman.abc', NULL),
(250, 'মোছাঃশারমিন আক্তার ', 'মোঃসফিউল আলম', '', '', '০১৭২২৯০৫৪৪১', NULL, '2021-05-13 14:21:06', '13', '05', '2021', '0', NULL, NULL, '0', '', '13', '', '4TO6PM', 'abc', NULL, 0, 'data entry \r\nbikash from 5441 to 0548', 360, 'S Sharmin Akther', 'bkash', 250, 0, 1, NULL, '0', 'Home', 9750, 'Sibli.abc', NULL),
(251, 'Md Bellal Hossen', 'Md Nure Alam', '', NULL, '01725422636', NULL, '2021-05-13 21:52:17', '13', '05', '2021', '0', NULL, NULL, '0', NULL, '10', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Md  Bellal Hossen', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9751, 'Sibli.abc', NULL),
(252, 'Israt Farzana Sumi', 'Md.Shaheedul Islam', '', '', '01622688016', NULL, '2021-05-15 17:37:04', '15', '05', '2021', '0', NULL, NULL, '0', '', '6', '', '7TO9PM', 'others', NULL, 0, 'Web disgin \r\nRoket from 8016 to 0548', 249, 'sumi moni', 'rocket', 1000, 1, 1, NULL, '0', 'Home', 9752, 'Sibli.abc', NULL),
(253, 'Masud Rana', 'Md. Bachchu mia', '', NULL, '01310862560', NULL, '2021-05-16 13:18:38', '16', '05', '2021', '0', NULL, NULL, '0', NULL, '11', NULL, '9TO11PM', 'abc', NULL, 1, NULL, 0, 'Masud rana', 'bkash', NULL, NULL, NULL, NULL, '0', 'Home', 9753, 'Afsanasumiya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_std_id` int(10) NOT NULL,
  `order_payment_id` int(11) NOT NULL,
  `order_token` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `order_pay_status` tinyint(4) NOT NULL DEFAULT 0,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_std_id`, `order_payment_id`, `order_token`, `order_date`, `order_pay_status`, `order_status`) VALUES
(58, 1, 21, '99UZ5NW8WC', '2021-05-09', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pay_log`
--

CREATE TABLE `pay_log` (
  `pl_id` int(11) NOT NULL,
  `pl_student` int(11) DEFAULT NULL,
  `pl_amount` text DEFAULT NULL,
  `pl_author` text DEFAULT NULL,
  `pl_date` text DEFAULT NULL,
  `pl_day` text DEFAULT NULL,
  `pl_month` text DEFAULT NULL,
  `pl_year` text DEFAULT NULL,
  `pl_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_log`
--

INSERT INTO `pay_log` (`pl_id`, `pl_student`, `pl_amount`, `pl_author`, `pl_date`, `pl_day`, `pl_month`, `pl_year`, `pl_notes`) VALUES
(2, 14, '500', 'Arman.abc', '2021-04-25 00:24:44', '25', '04', '2021', 'Paid (500) Note (1440 to by bkash 0548)'),
(3, 20, '1000', 'Nazmul.abc', '2021-04-25 00:28:45', '25', '04', '2021', 'Paid (1000) Note (bkash by 0785 to 0548)'),
(4, 21, '500', 'Arman.abc', '2021-04-25 00:29:44', '25', '04', '2021', 'Paid (500) Note (3816 to by bkash 0548)'),
(5, 23, '1000', 'Nazmul.abc', '2021-04-25 00:30:24', '25', '04', '2021', 'Paid (1000) Note (Rocket 7641 to 5480)'),
(6, 25, '1000', 'Arman.abc', '2021-04-25 00:31:58', '25', '04', '2021', 'Paid (1000) Note (1556 to by bkash 80548)'),
(7, 26, '1000', 'Arman.abc', '2021-04-25 00:32:46', '25', '04', '2021', 'Paid (1000) Note (0335 to by bkash 0548)'),
(8, 33, '500', 'Nazmul.abc', '2021-04-25 00:33:54', '25', '04', '2021', 'Paid (500) Note (Bkash by 1831 to 0548)'),
(9, 28, '1000', 'Sibli.abc', '2021-04-25 00:44:47', '25', '04', '2021', 'Paid (1000) Note (Bkash 4316 to 0548)'),
(10, 32, '1500', 'Sibli.abc', '2021-04-25 00:47:34', '25', '04', '2021', 'Paid (1500) Note (BKash From 0505 to 0548)'),
(11, 38, '500', 'Sibli.abc', '2021-04-25 00:49:47', '25', '04', '2021', 'Paid (500) Note (Nagad From 5506 to 0548)'),
(12, 48, '500', 'Sibli.abc', '2021-04-25 12:49:48', '25', '04', '2021', 'Paid (500) Note (facebook marketing\r\nroket from 2732 to 5480)'),
(13, 50, '500', 'Nazmul.abc', '2021-04-25 13:21:55', '25', '04', '2021', 'Paid (500) Note (Bkash by 3684 to 0548)'),
(14, 45, '1000', 'Sibli.abc', '2021-04-25 14:40:29', '25', '04', '2021', 'Paid (1000) Note (Digital marketing\r\nbikash from 7774 to 0548 )'),
(15, 41, '1000', 'Sibli.abc', '2021-04-25 16:23:48', '25', '04', '2021', 'Paid (1000) Note (grapics digine \r\nBikash from 9279 to 0548 )'),
(16, 43, '500', 'Arman.abc', '2021-04-25 22:08:03', '25', '04', '2021', 'Paid (500) Note (7120 to by nagad 80548 )'),
(17, 71, '500', 'Arman.abc', '2021-04-26 12:45:53', '26', '04', '2021', 'Paid (500) Note (2377 to by bkash 80548)'),
(18, 73, '500', 'Abc.admission', '2021-04-26 14:07:40', '26', '04', '2021', 'Paid (500) Note (Bkash by 4991 to 0548)'),
(19, 61, '750', 'Sibli.abc', '2021-04-26 14:54:48', '26', '04', '2021', 'Paid (750) Note (digital marketing\r\nbikash from 5239 to 0548 )'),
(20, 66, '500', 'Abc.admission', '2021-04-26 16:03:29', '26', '04', '2021', 'Paid (500) Note (Bkash by 0904 to 0548)'),
(21, 76, '500', 'Abc.admission', '2021-04-26 16:17:13', '26', '04', '2021', 'Paid (500) Note (Bkash by 2166 to 0548)'),
(22, 54, '1000', 'Arman.abc', '2021-04-26 17:51:58', '26', '04', '2021', 'Paid (1000) Note (6065 to by bkash 80548)'),
(23, 65, '500', 'Abc.admission', '2021-04-26 18:29:02', '26', '04', '2021', 'Paid (500) Note (Rocket  by 3006 to 0548)'),
(24, 82, '500', 'Abc.admission', '2021-04-26 20:31:46', '26', '04', '2021', 'Paid (500) Note (Bkash by 7038 to 0548)'),
(25, 84, '500', 'Arman.abc', '2021-04-26 22:45:15', '26', '04', '2021', 'Paid (500) Note (6147 to by bkash 0548 )'),
(26, 49, '500', 'Jalalmahi', '2021-04-26 23:22:37', '26', '04', '2021', 'Paid (500) Note (Bkash By 8714 to 0548)'),
(27, 64, '500', 'Abc.admission', '2021-04-27 12:13:32', '27', '04', '2021', 'Paid (500) Note (Bkash by 2080 to 0548 )'),
(28, 80, '500', 'Arman.abc', '2021-04-27 13:04:34', '27', '04', '2021', 'Paid (500) Note (7083 to by bkash 80548)'),
(29, 89, '500', 'Abc.admission', '2021-04-27 14:10:01', '27', '04', '2021', 'Paid (500) Note (Bkash by 8107 to 0548)'),
(30, 87, '1000', 'Arman.abc', '2021-04-27 14:12:35', '27', '04', '2021', 'Paid (1000) Note (3534 to by bkash 80548 )'),
(31, 59, '500', 'Jalalmahi', '2021-04-27 14:57:33', '27', '04', '2021', 'Paid (500) Note ()'),
(32, 91, '500', 'Nazmul.abc', '2021-04-27 15:34:05', '27', '04', '2021', 'Paid (500) Note (Note by 1371 to 0548)'),
(33, 90, '1000', 'Sibli.abc', '2021-04-27 20:01:33', '27', '04', '2021', 'Paid (1000) Note (Digital marketing\r\nbikash from 8813 to 0548 )'),
(34, 101, '500', 'Sibli.abc', '2021-04-28 01:27:20', '28', '04', '2021', 'Paid (500) Note (facebook marketing\r\nbikash from 4257 to 0548 )'),
(35, 107, '500', 'Abc.admission', '2021-04-28 16:19:02', '28', '04', '2021', 'Paid (500) Note (Bkash by 0220 to 0548)'),
(36, 108, '500', 'Abc.admission', '2021-04-28 16:26:06', '28', '04', '2021', 'Paid (500) Note (Bkash  by 0275 to  0548 )'),
(37, 112, '500', 'Sibli.abc', '2021-04-28 22:25:05', '28', '04', '2021', 'Paid (500) Note (facebook marketing \r\nbikash from 2070 to 0548 )'),
(38, 115, '1500', 'Sibli.abc', '2021-04-29 11:17:06', '29', '04', '2021', 'Paid (1500) Note (digital marketing \r\nroket from 1017 to 5480 )'),
(39, 116, '1000', 'Sibli.abc', '2021-04-29 11:26:32', '29', '04', '2021', 'Paid (1000) Note (web digine\r\n roket from 1027 to 5480 )'),
(40, 118, '500', 'Sibli.abc', '2021-04-29 11:44:51', '29', '04', '2021', 'Paid (500) Note (digital marketing \r\nnogod from 4548 to 0548 )'),
(41, 117, '1000', 'Sibli.abc', '2021-04-29 13:23:41', '29', '04', '2021', 'Paid (1000) Note (video editing \r\nroket from 1027 to 5480)'),
(42, 119, '1500', 'Sibli.abc', '2021-04-29 13:26:57', '29', '04', '2021', 'Paid (1500) Note (digital marketing \r\nbikash from 3302 to 0548)'),
(43, 104, '500', 'Nazmul.abc', '2021-04-29 19:22:14', '29', '04', '2021', 'Paid (500) Note (Bkash by 6798 to 0548)'),
(44, 69, '500', 'Jalalmahi', '2021-04-29 20:09:34', '29', '04', '2021', 'Paid (500) Note (From 7097 To 5480)'),
(45, 98, '500', 'Nazmul.abc', '2021-04-29 20:38:28', '29', '04', '2021', 'Paid (500) Note (Bkash by 9555 to 0548)'),
(46, 94, '500', 'Nazmul.abc', '2021-04-29 20:39:20', '29', '04', '2021', 'Paid (500) Note (Bkash by 6237 to 0548)'),
(47, 122, '500', 'Arman.abc', '2021-04-29 21:14:27', '29', '04', '2021', 'Paid (500) Note (16871 to by nagad 80548 )'),
(48, 77, '500', 'Abc.admission', '2021-04-30 00:18:53', '30', '04', '2021', 'Paid (500) Note (bkash by 0737 to 0548)'),
(49, 120, '1000', 'Jalalmahi', '2021-04-30 00:22:15', '30', '04', '2021', 'Paid (1000) Note (From 7322 TO 0548)'),
(50, 121, '500', 'Abc.admission', '2021-04-30 00:23:34', '30', '04', '2021', 'Paid (500) Note (bkash by 7302 to 0548)'),
(51, 127, '500', 'Abc.admission', '2021-04-30 18:09:19', '30', '04', '2021', 'Paid (500) Note (Bkash by 6375 to 0548)'),
(52, 126, '500', 'Sibli.abc', '2021-04-30 19:26:36', '30', '04', '2021', 'Paid (500) Note (facebook marketing \r\nbikash from 0757 to 0548)'),
(53, 70, '500', 'Abc.admission', '2021-05-01 05:03:57', '01', '05', '2021', 'Paid (500) Note (Bkash by 4720 to 0548)'),
(55, 133, '500', 'Sibli.abc', '2021-05-01 15:56:55', '01', '05', '2021', 'Paid (500) Note (facebook marketing \r\nnogod from 7887 to 0548)'),
(56, 51, '500', 'Jalalmahi', '2021-05-01 16:40:59', '01', '05', '2021', 'Paid (500) Note (from 6580 to 0548)'),
(57, 136, '500', 'Arman.abc', '2021-05-01 19:34:23', '01', '05', '2021', 'Paid (500) Note (3900 to by 80548 )'),
(58, 129, '820', 'Sibli.abc', '2021-05-01 19:44:54', '01', '05', '2021', 'Paid (820) Note (digital marketing\r\nbikash from 8555 to 0548)'),
(59, 132, '500', 'Sibli.abc', '2021-05-01 20:20:44', '01', '05', '2021', 'Paid (500) Note (facebook marketing \r\nnogod from 9562 to 0548)'),
(60, 139, '500', 'Sibli.abc', '2021-05-02 11:19:09', '02', '05', '2021', 'Paid (500) Note (facebook marketing \r\nfrom 0815 to 0548)'),
(61, 137, '500', 'Arman.abc', '2021-05-02 12:56:43', '02', '05', '2021', 'Paid (500) Note (699 to by bkash 0548 )'),
(62, 142, '500', 'Arman.abc', '2021-05-02 13:55:58', '02', '05', '2021', 'Paid (500) Note (4306 to by bkash 0548)'),
(63, 79, '1000', 'Jalalmahi', '2021-05-03 03:01:17', '03', '05', '2021', 'Paid (1000) Note (From 8117 to 0548)'),
(64, 147, '500', 'Sibli.abc', '2021-05-03 09:39:58', '03', '05', '2021', 'Paid (500) Note (facebook marketing\r\nroket from 3317 to 5480)'),
(65, 144, '500', 'Arman.abc', '2021-05-03 11:28:23', '03', '05', '2021', 'Paid (500) Note (1843 to by bkash 80548)'),
(66, 149, '500', 'Sibli.abc', '2021-05-03 15:23:34', '03', '05', '2021', 'Paid (500) Note (Digital marketing\r\nBikash from 9456 to 0548)'),
(67, 151, '500', 'Arman.abc', '2021-05-03 16:37:02', '03', '05', '2021', 'Paid (500) Note (6616 to by bkash 0548)'),
(68, 123, '500', 'Abc.admission', '2021-05-03 21:24:17', '03', '05', '2021', 'Paid (500) Note (Rocket by 7490 to 0548)'),
(69, 153, '500', 'Abc.admission', '2021-05-05 11:13:58', '05', '05', '2021', 'Paid (500) Note (Bkash by 9188 to 0548)'),
(70, 152, '500', 'Jalalmahi', '2021-05-05 11:33:40', '05', '05', '2021', 'Paid (500) Note (from 7747 to Bkash)'),
(71, 162, '500', 'Abc.admission', '2021-05-05 12:05:25', '05', '05', '2021', 'Paid (500) Note (Bkash by 0097 to 0548)'),
(72, 165, '500', 'Arman.abc', '2021-05-05 17:42:25', '05', '05', '2021', 'Paid (500) Note (1330 to by nagad 80548)'),
(73, 143, '500', 'Arman.abc', '2021-05-05 19:42:42', '05', '05', '2021', 'Paid (500) Note (3029 to by bkash 80548)'),
(74, 163, '1000', 'Sibli.abc', '2021-05-05 19:43:50', '05', '05', '2021', 'Paid (1000) Note (Digital marketing \r\nBikash from 6903 to 0548)'),
(75, 159, '500', 'Jalalmahi', '2021-05-05 23:06:20', '05', '05', '2021', 'Paid (500) Note (From 7128 to bkash)'),
(76, 177, '500', 'Arman.abc', '2021-05-06 19:17:30', '06', '05', '2021', 'Paid (500) Note (6704 to by bkash 0548)'),
(77, 154, '1100', 'Sibli.abc', '2021-05-06 19:39:15', '06', '05', '2021', 'Paid (1100) Note (digital marketing \r\nroket from 3977 to 00548)'),
(78, 174, '1000', 'Sibli.abc', '2021-05-06 19:49:16', '06', '05', '2021', 'Paid (1000) Note (web disign \r\nbikash from 4005 to 0548)'),
(79, 170, '500', 'Arman.abc', '2021-05-06 22:00:27', '06', '05', '2021', 'Paid (500) Note (3303 to by bkash 80548)'),
(80, 164, '300', 'Abc.admission', '2021-05-06 22:05:05', '06', '05', '2021', 'Paid (300) Note (Nagad by 8942 to 0548)'),
(81, 156, '500', 'Sibli.abc', '2021-05-06 22:22:42', '06', '05', '2021', 'Paid (500) Note (digital marketing \r\nbikash from 5753 to 0548)'),
(82, 182, '500', 'Sibli.abc', '2021-05-07 11:18:10', '07', '05', '2021', 'Paid (500) Note (Data entry \r\nbikash from 5599 to 0548)'),
(83, 180, '1000', 'Jalalmahi', '2021-05-07 14:33:35', '07', '05', '2021', 'Paid (1000) Note (from 9942 to Bkash)'),
(84, 186, '1000', 'Arman.abc', '2021-05-07 15:50:14', '07', '05', '2021', 'Paid (1000) Note (56710 to by nagad 0548)'),
(85, 176, '500', 'Sibli.abc', '2021-05-07 17:15:32', '07', '05', '2021', 'Paid (500) Note (Video editing\r\n Nogod from 6867 to 0548)'),
(86, 189, '500', 'Sibli.abc', '2021-05-07 18:07:49', '07', '05', '2021', 'Paid (500) Note (Facebook marketing \r\nbikash from 6035 to 0548 )'),
(87, 25, '500', 'Arman.abc', '2021-05-07 20:09:00', '07', '05', '2021', 'Paid (500) Note (6246 to by bkash 80548)'),
(88, 178, '1500', 'Sibli.abc', '2021-05-07 21:37:09', '07', '05', '2021', 'Paid (1500) Note (Digital Marketing \r\nBikash from 7016 to 0548)'),
(89, 109, '500', 'Abc.admission', '2021-05-08 00:10:28', '08', '05', '2021', 'Paid (500) Note (By bkash from 4030 to 0548 )'),
(90, 97, '300', 'Abc.admission', '2021-05-08 00:18:01', '08', '05', '2021', 'Paid (300) Note (By Bkash from 1060 to 0458)'),
(91, 181, '500', 'Jalalmahi', '2021-05-08 00:21:24', '08', '05', '2021', 'Paid (500) Note (9364 to bkash)'),
(92, 52, '500', 'Abc.admission', '2021-05-08 04:10:13', '08', '05', '2021', 'Paid (500) Note (Bkash from 142  to 0548)'),
(93, 199, '500', 'Sibli.abc', '2021-05-08 15:15:51', '08', '05', '2021', 'Paid (500) Note (Facebook marketing\r\nBikash from 6662 to 0548)'),
(94, 151, '500', 'Arman.abc', '2021-05-08 15:45:05', '08', '05', '2021', 'Paid (500) Note (6616 to by bkash 80548)'),
(95, 200, '1000', 'Arman.abc', '2021-05-08 17:05:40', '08', '05', '2021', 'Paid (1000) Note (9109 to by bkash 0548)'),
(96, 193, '500', 'Arman.abc', '2021-05-08 17:37:09', '08', '05', '2021', 'Paid (500) Note (7423 to by bkash 0548)'),
(97, 35, '410', 'Sibli.abc', '2021-05-08 20:03:49', '08', '05', '2021', 'Paid (410) Note (facebook marketing\r\nbikash from 2573 to 0548)'),
(98, 84, '500', 'Arman.abc', '2021-05-09 11:55:15', '09', '05', '2021', 'Paid (500) Note (79954 to by rocket 7805480)'),
(99, 209, '500', 'Arman.abc', '2021-05-09 13:45:18', '09', '05', '2021', 'Paid (500) Note (2325 to by bkash 0548)'),
(100, 210, '1500', 'Arman.abc', '2021-05-09 15:46:28', '09', '05', '2021', 'Paid (1500) Note (8111 tto by bkash 0548)'),
(101, 212, '500', 'Arman.abc', '2021-05-09 17:42:24', '09', '05', '2021', 'Paid (500) Note (8757 to by bkash 0548)'),
(102, 213, '1000', 'Arman.abc', '2021-05-09 18:25:05', '09', '05', '2021', 'Paid (1000) Note (8128 to by bkash 0548)'),
(103, 215, '300', 'Sibli.abc', '2021-05-09 20:56:23', '09', '05', '2021', 'Paid (300) Note (digital marketing\r\nbikash from 1422 to 0548)'),
(104, 53, '500', 'Jalalmahi', '2021-05-09 21:49:25', '09', '05', '2021', 'Paid (500) Note (9981 to bkash)'),
(105, 220, '500', 'Jalalmahi', '2021-05-10 12:46:11', '10', '05', '2021', 'Paid (500) Note (1194 to Bkash)'),
(106, 176, '500', 'Sibli.abc', '2021-05-10 13:50:27', '10', '05', '2021', 'Paid (500) Note (video editing |\r\nnogod from 6867 to 0548)'),
(107, 211, '500', 'Arman.abc', '2021-05-10 14:40:12', '10', '05', '2021', 'Paid (500) Note (7777 to by nagad 0548\r\n)'),
(108, 226, '1000', 'Jalalmahi', '2021-05-10 14:53:55', '10', '05', '2021', 'Paid (1000) Note (8EA3DUT5U - Bkash)'),
(109, 218, '1000', 'Sibli.abc', '2021-05-10 15:01:43', '10', '05', '2021', 'Paid (1000) Note (Digital marketing\r\nbIKASH FROM 1261 TO 0548)'),
(110, 196, '1000', 'Sibli.abc', '2021-05-10 15:09:31', '10', '05', '2021', 'Paid (1000) Note (Grapics disign \r\nBikash from 8857 to 0548)'),
(111, 227, '200', 'Sibli.abc', '2021-05-10 19:25:22', '10', '05', '2021', 'Paid (200) Note (Data Entry\r\nBikash from 4199 to 0548\r\n)'),
(112, 225, '500', 'Sibli.abc', '2021-05-10 19:27:32', '10', '05', '2021', 'Paid (500) Note (Data entry\r\nbikash from 8909 to 0548)'),
(113, 198, '500', 'Sibli.abc', '2021-05-10 19:40:45', '10', '05', '2021', 'Paid (500) Note (Data entry \r\nBikash from 5325 to 0548)'),
(114, 232, '500', 'Arman.abc', '2021-05-10 20:47:00', '10', '05', '2021', 'Paid (500) Note (9849 to by bkash 0548)'),
(115, 237, '1000', 'Arman.abc', '2021-05-11 11:52:30', '11', '05', '2021', 'Paid (1000) Note (9500 to by bkash 0548)'),
(116, 175, '500', 'Sibli.abc', '2021-05-11 12:19:41', '11', '05', '2021', 'Paid (500) Note (Digital marketing\r\nBikash from 2024 to 0548)'),
(117, 235, '1500', 'Sibli.abc', '2021-05-11 13:23:43', '11', '05', '2021', 'Paid (1500) Note (Digital marketing\r\nNOGOD FROM 1035 TO 0548)'),
(118, 239, '500', 'Abc.admission', '2021-05-11 19:45:48', '11', '05', '2021', 'Paid (500) Note (Bkash from 4588 to 0548)'),
(119, 219, '500', 'Jalalmahi', '2021-05-11 23:45:11', '11', '05', '2021', 'Paid (500) Note (1166 to Bkash)'),
(120, 247, '500', 'Arman.abc', '2021-05-12 12:31:26', '12', '05', '2021', 'Paid (500) Note (4717 to by bkash 0548)'),
(121, 215, '1200', 'Sibli.abc', '2021-05-12 15:04:31', '12', '05', '2021', 'Paid (1200) Note (Digital marketing \r\nBikash from 1422 to 0548)'),
(122, 242, '500', 'Arman.abc', '2021-05-12 18:00:06', '12', '05', '2021', 'Paid (500) Note (7667 to by bkash 0548)'),
(123, 246, '500', 'Sibli.abc', '2021-05-12 22:08:34', '12', '05', '2021', 'Paid (500) Note (data entry\r\nbikash  0451 to 0548)'),
(124, 245, '500', 'Sibli.abc', '2021-05-12 22:10:11', '12', '05', '2021', 'Paid (500) Note (data emtry \r\n bikash from 0451 to 0548)'),
(125, 240, '500', 'Sibli.abc', '2021-05-12 22:13:49', '12', '05', '2021', 'Paid (500) Note (data entry \r\n bikash from8909 to 0548)'),
(126, 248, '500', 'Arman.abc', '2021-05-12 22:44:58', '12', '05', '2021', 'Paid (500) Note (7042 to by bkash 0548)'),
(127, 250, '250', 'Sibli.abc', '2021-05-13 14:21:06', '13', '05', '2021', 'Paid (250) Note (data entry \r\nbikash from 5441 to 0548)'),
(128, 252, '1000', 'Sibli.abc', '2021-05-15 17:37:04', '15', '05', '2021', 'Paid (1000) Note (Web disgin \r\nRoket from 8016 to 0548)'),
(129, 134, '500', 'Sibli.abc', '2021-05-15 22:29:22', '15', '05', '2021', 'Paid (500) Note (Facebook ,marketing\r\n Bkash from 1764 to 0548)');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `ins_mc_id` int(11) NOT NULL,
  `review_title` varchar(256) NOT NULL,
  `review_details` text NOT NULL,
  `review_points` tinyint(4) NOT NULL,
  `review_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `std_id`, `ins_mc_id`, `review_title`, `review_details`, `review_points`, `review_status`) VALUES
(1, 21, 22, 'About crs 1', 'Very satisfactory experience. Thanks to ABC academy', 2, 1),
(2, 21, 21, 'About crs 1', 'Very satisfactory experience. Thanks to ABC academy', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `skill_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `skill_status` tinyint(4) NOT NULL,
  `skill_count` int(11) NOT NULL,
  `skill_type` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_category`, `skill_title`, `skill_status`, `skill_count`, `skill_type`) VALUES
(1, '', 'গ্রাফিক্স ডিজাইন', 0, 0, ''),
(2, '', 'ওয়েব ডেভেলপমেন্ট', 0, 0, ''),
(3, '', 'ডিজিটাল মার্কেটিং', 0, 0, ''),
(4, '', 'অফিস এপ্লিকেশন', 0, 0, ''),
(0, '', 'এক্সেল এপ্লিকেশন', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `stf_user_id` int(11) NOT NULL,
  `stf_id` varchar(20) NOT NULL,
  `stf_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stf_pass` text DEFAULT NULL,
  `stf_type` int(11) DEFAULT NULL,
  `stf_phone` text DEFAULT NULL,
  `stf_email` text DEFAULT NULL,
  `stf_sex` int(11) DEFAULT NULL,
  `stf_joining_date` text DEFAULT NULL,
  `stf_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stf_desiganation` text DEFAULT NULL,
  `stf_online_offline` int(11) NOT NULL,
  `stf_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stf_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stf_discription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stf_photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stf_user_id`, `stf_id`, `stf_name`, `stf_pass`, `stf_type`, `stf_phone`, `stf_email`, `stf_sex`, `stf_joining_date`, `stf_facebook`, `stf_desiganation`, `stf_online_offline`, `stf_address`, `stf_notes`, `stf_discription`, `stf_photo`) VALUES
(14, 'Abc-Acadamy', 'Abc-Acadamy', '4ec08d10778fce4cfe56ac08a3dc63be20f4b8ed', 2, '01611659713', 'admin@abc.com', 1, '', '', '5', 0, '', '', NULL, NULL),
(31, 'Abc.admission', 'Abdullah', 'ab7845##', 1, '01751792668', 'abcitlimited@gmail.com', 1, '2021-04-01', 'abdullah al mashrur', '4', 0, '167/1-F East Kafrul, Dhaka Cantonment, Dhaka 1206', 'Own Admission panel ', NULL, NULL),
(33, 'Abdurrohim', 'Abdur Rohim Sakil', 'abr8912@', 2, '0170777688', 'abdurrahim1bd36@gmail.com', 1, '2021-24-04', 'Abdur Rohim Sakil', '8', 1, 'Khulna, Rupsha', '', NULL, NULL),
(35, 'Afsanasumiya', 'Afsana Sumiya', 'Afsana@ABC', 1, '018695121427', 'afsanasumaiya0@gmail.com', 0, '2021-05-11', 'Afsana Akter Sumiya', '4', 1, '#Block- B , Section 12 , Plot- 81, Kalshi road , Pallabi 1216', 'CRO ', NULL, NULL),
(23, 'Arman.abc', 'MD. ARMAN HOSSAIN ', 'Abc123@', 1, '01754421302', 'akashsk21302@gmail.com', 1, '2021-04-01', 'Arman Hossain Akash', '4', 1, 'Address: 121 East razabarzar, farmgate  Dhaka', '', NULL, NULL),
(34, 'Fahim', 'Fahim Ahmed', 'fahim0088', 2, '01914055664', 'fahimoo88@gmail.com', 1, '01/05/2021', 'Fahim Ahmed', '1', 1, 'Dhaka', 'Active', NULL, NULL),
(32, 'Jalalmahi', 'Jalal Mahi', 'Abc123@', 1, '01871154821', 'jalalmahi49@gmail.com', 1, '2021-04-24', 'Jalal Mahi', '4', 1, '88/1-A Dinnath sen road, Gandaria,Dhaka', 'Active ', NULL, NULL),
(30, 'Maruf', 'Maruf Hossain', 'maruf', 2, '01914055664', 'marufdigitalit@gmail.com', 1, '20/04/2021', 'Md. Maruf Hossain', '1', 1, 'kustia', 'Active', NULL, NULL),
(18, 'Masrur', 'Al Masrur', 'masrur11233', 2, '01914055664', 'masrur@gmail.com', 1, '01/01/2021', 'Al Masrur', '1', 1, 'Mirpur, Dhaka', '', NULL, NULL),
(26, 'Mosaddikur', 'Mosaddikur Rahman', 'mosaddikurabc123', 2, '01914055664', 'Mosaddikur@gmail.com', 1, '20/04/2021', 'borno rifat', '1', 1, 'Dhaka', 'Active', NULL, NULL),
(25, 'Nazmul.abc', 'MD.Nazmul Hasan', 'Abc123@~~~~~~~~~~~', 2, '01753795412', 'nazmulsourov72@gmail.com', 1, '2021-04-01', 'Nazmul Hasan', '4', 1, 'chapra mosjid,60 feet road,Mirpur 2,Dhaka', '', NULL, NULL),
(29, 'Sabbir', 'Sabbir Hossain', 'sabbirabc2323`', 2, '01914055664', 'sabbirabc@gamil.com', 1, '20/04/2021', 'Sabbir Hossain', '1', 1, 'Dhaka', 'Active', NULL, NULL),
(28, 'Salmantusher', 'Salman Tusher', 'tusherabc23231', 2, '01914055664', 'salmanabc@gamil.com', 1, '20/04/2021', 'salman tusher', '1', 1, 'Dhaka', 'Active', NULL, NULL),
(24, 'Sibli.abc', 'Md Sibli Sadiq', 'Abc123@', 1, '01852645802', 'siblisadiqofficials@gmail.com', 1, '2021-04-01', 'Sibli Sadiq', '4', 1, 'Akkasur Rahman Akhi Hall, Govt Titumir College,  Dhaka', '', NULL, NULL),
(27, 'Zahidul', 'Zahidul Islam', 'zahidulabc123', 2, '01914055664', 'zahidulabc@gmail.com', 1, '20/04/2021', 'zahidul Islam', '1', 1, 'dhaka', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_notification`
--

CREATE TABLE `student_notification` (
  `nt_id` int(11) NOT NULL,
  `nt_date` text DEFAULT NULL,
  `nt_for_user` text DEFAULT NULL,
  `nt_type` text DEFAULT NULL,
  `nt_msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nt_status` int(11) DEFAULT NULL,
  `nt_priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_notification`
--

INSERT INTO `student_notification` (`nt_id`, `nt_date`, `nt_for_user`, `nt_type`, `nt_msg`, `nt_status`, `nt_priority`) VALUES
(31, '2021-05-10', '1', 'success', 'Created your account successfully.', NULL, NULL),
(32, '2021-05-07 01:11:14', '1', 'success', 'Successfully updated your profile!  2021-05-07 01:05:14', 0, 0),
(33, '2021-05-07 01:13:47', '1', 'success', 'Successfully updated your profile!  2021-05-07 01:05:47', 0, 0),
(34, '2021-05-07 02:09:04', '1', 'success', 'Successfully updated your password!  2021-05-07 02:05:04', 0, 0),
(35, '2021-05-08 23:14:15', '1', 'success', 'Successfully updated your profile!  2021-05-08 11:05:15', 0, 0),
(36, '2021-05-09 19:09:11', '1', 'success', 'Successfully updated your profile!  2021-05-09 07:05:11', 0, 0),
(37, '2021-05-10 19:55:06', '1', 'success', 'Successfully updated your profile picture!  2021-05-10 07:05:06', 0, 0),
(38, '2021-05-10 19:56:22', '1', 'success', 'Successfully updated your profile picture!  2021-05-10 07:05:22', 0, 0),
(39, '2021-05-10 19:57:35', '1', 'success', 'Successfully updated your profile picture!  2021-05-10 07:05:35', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_pass` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_email_token` text NOT NULL,
  `user_email_ver` int(11) NOT NULL,
  `user_pass_recovered` text NOT NULL,
  `user_join_date` text NOT NULL,
  `user_about` text NOT NULL,
  `user_tagline` text NOT NULL,
  `user_skill` text NOT NULL,
  `user_location` text NOT NULL,
  `user_city` text NOT NULL,
  `user_region` int(11) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_phone_ver` varchar(30) NOT NULL,
  `user_type` text NOT NULL,
  `user_verified` int(11) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_image`, `user_pass`, `user_email`, `user_email_token`, `user_email_ver`, `user_pass_recovered`, `user_join_date`, `user_about`, `user_tagline`, `user_skill`, `user_location`, `user_city`, `user_region`, `user_phone`, `user_phone_ver`, `user_type`, `user_verified`, `user_level`) VALUES
(1, 'Aslam Mamud', '1620655055-729.jpg', 'abJ97nGY62MoE', 'aslam@gmail.com', '', 1, '', '', 'I am a web developer.', '', '', 'Mohammedpur', '', 1, '01521310261', '', 'student', 1, 1),
(2, 'ovi sheikh', '', 'absf4w5tddxNQ', 'user2@customer.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01911686324', '1', 'student', 0, 1),
(3, 'Rajib Islam', '', 'abmNK51HCSoRQ', 'user3@customer.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01756310517', '1', 'student', 0, 1),
(7, 'shimanto khan', '', 'abLowV4Lc/PF6', 'user4@student.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01979313012', '1', 'student', 0, 1),
(8, 'Admin', '', 'abVky3nOnTUn.', 'user5@student.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01302509844', '1', 'admin', 0, 1),
(9, 'AR Shakil', '', 'abjRhxheGJIWI', 'user6@student.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01707331688', '1', 'student', 0, 1),
(10, 'Ovi Sheikh', '', 'absf4w5tddxNQ', 'user7@student.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01681539324', '1', 'student', 0, 1),
(11, 'Sayed Amin', '', 'abnA6RlyQ7Q86', 'user8@student.com', '', 0, '', '', '', '', '', '', 'Dhaka', 0, '01911059426', '1', 'student', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `why_ch_us_videos`
--

CREATE TABLE `why_ch_us_videos` (
  `wcu_vid_id` int(11) NOT NULL,
  `wcu_vid_title` varchar(256) NOT NULL,
  `wcu_vid_meta_keys` text NOT NULL,
  `wcu_vid_meta_desc` text NOT NULL,
  `wcu_vid_image` varchar(100) NOT NULL,
  `wcu_vid_link` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchs`
--
ALTER TABLE `batchs`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `desiganation`
--
ALTER TABLE `desiganation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `featured_companies`
--
ALTER TABLE `featured_companies`
  ADD PRIMARY KEY (`fc_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ins_id`),
  ADD UNIQUE KEY `UQ_instructor_email` (`ins_email`);

--
-- Indexes for table `instructor_made_courses`
--
ALTER TABLE `instructor_made_courses`
  ADD PRIMARY KEY (`ins_mc_id`),
  ADD UNIQUE KEY `UQ_instructor_made_courses_ins_mc_url` (`ins_mc_url`);

--
-- Indexes for table `instructor_notification`
--
ALTER TABLE `instructor_notification`
  ADD PRIMARY KEY (`nt_id`),
  ADD KEY `notification_id` (`nt_id`);

--
-- Indexes for table `instructor_req`
--
ALTER TABLE `instructor_req`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `instructor_savings_account`
--
ALTER TABLE `instructor_savings_account`
  ADD PRIMARY KEY (`sav_acc_id`),
  ADD UNIQUE KEY `UQ_instructor_sav_ac_ins_id` (`ins_id`);

--
-- Indexes for table `instructor_video_categories`
--
ALTER TABLE `instructor_video_categories`
  ADD PRIMARY KEY (`ins_catg_id`);

--
-- Indexes for table `instructor_video_sub_cat`
--
ALTER TABLE `instructor_video_sub_cat`
  ADD PRIMARY KEY (`ins_vdo_sb_ct_id`);

--
-- Indexes for table `ins_mc_section`
--
ALTER TABLE `ins_mc_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `ins_mc_sec_class`
--
ALTER TABLE `ins_mc_sec_class`
  ADD PRIMARY KEY (`sec_class_id`);

--
-- Indexes for table `live_courses`
--
ALTER TABLE `live_courses`
  ADD PRIMARY KEY (`live_cid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nt_id`),
  ADD KEY `notification_id` (`nt_id`);

--
-- Indexes for table `online_courses`
--
ALTER TABLE `online_courses`
  ADD PRIMARY KEY (`oc_id`);

--
-- Indexes for table `online_students`
--
ALTER TABLE `online_students`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pay_log`
--
ALTER TABLE `pay_log`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`stf_id`),
  ADD UNIQUE KEY `stf_id` (`stf_id`),
  ADD UNIQUE KEY `stf_user_id` (`stf_user_id`);

--
-- Indexes for table `student_notification`
--
ALTER TABLE `student_notification`
  ADD PRIMARY KEY (`nt_id`),
  ADD KEY `notification_id` (`nt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UQ_user_user_phone` (`user_phone`),
  ADD UNIQUE KEY `UQ_user_user_email` (`user_email`);

--
-- Indexes for table `why_ch_us_videos`
--
ALTER TABLE `why_ch_us_videos`
  ADD PRIMARY KEY (`wcu_vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchs`
--
ALTER TABLE `batchs`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `desiganation`
--
ALTER TABLE `desiganation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `featured_companies`
--
ALTER TABLE `featured_companies`
  MODIFY `fc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `instructor_made_courses`
--
ALTER TABLE `instructor_made_courses`
  MODIFY `ins_mc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `instructor_notification`
--
ALTER TABLE `instructor_notification`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `instructor_req`
--
ALTER TABLE `instructor_req`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `instructor_savings_account`
--
ALTER TABLE `instructor_savings_account`
  MODIFY `sav_acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructor_video_categories`
--
ALTER TABLE `instructor_video_categories`
  MODIFY `ins_catg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `instructor_video_sub_cat`
--
ALTER TABLE `instructor_video_sub_cat`
  MODIFY `ins_vdo_sb_ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ins_mc_section`
--
ALTER TABLE `ins_mc_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ins_mc_sec_class`
--
ALTER TABLE `ins_mc_sec_class`
  MODIFY `sec_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `live_courses`
--
ALTER TABLE `live_courses`
  MODIFY `live_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `online_courses`
--
ALTER TABLE `online_courses`
  MODIFY `oc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `online_students`
--
ALTER TABLE `online_students`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pay_log`
--
ALTER TABLE `pay_log`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `stf_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student_notification`
--
ALTER TABLE `student_notification`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `why_ch_us_videos`
--
ALTER TABLE `why_ch_us_videos`
  MODIFY `wcu_vid_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
