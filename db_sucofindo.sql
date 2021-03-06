-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2017 at 09:43 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sucofindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbm`
--

CREATE TABLE `bbm` (
  `bbm_id` int(11) NOT NULL,
  `bbm_name` varchar(100) NOT NULL,
  `bbm_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bunker`
--

CREATE TABLE `bunker` (
  `id` int(10) UNSIGNED NOT NULL,
  `bunker_name` varchar(100) NOT NULL,
  `bunker_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunker`
--

INSERT INTO `bunker` (`id`, `bunker_name`, `bunker_type`) VALUES
(2, 'asdfasdfa', 'sdasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(5) NOT NULL,
  `username` varchar(35) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `photo` text NOT NULL,
  `password` text NOT NULL,
  `client` varchar(100) NOT NULL,
  `base_page` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_user_id` int(11) NOT NULL,
  `edited_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_user_id` int(11) NOT NULL,
  `deleted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `firstname`, `lastname`, `email`, `phone_number`, `photo`, `password`, `client`, `base_page`, `active`, `created_date`, `created_user_id`, `edited_date`, `edited_user_id`, `deleted_date`, `deleted_user_id`) VALUES
(1, 'admin', 'Andi', 'Firmansyah', 'admin@gmail.com', '089663159652', 'fajar.png', '21232f297a57a5a743894a0e4a801fc3', 'PT. PERTAMINA (Persero)', 'pertamina', 1, '2017-10-02 18:44:16', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'wawan', 'Wawan', 'Kurniawan', 'admin@xpose.com', '089777878897', 'fajar.png', '21232f297a57a5a743894a0e4a801fc3', 'Pelayaran Nasional Indonesia (Pelni)', 'pelni', 1, '2017-10-02 18:44:23', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'wisnu', 'wisnu', 'agung', 'admin@mediasi.com', '089777878897', 'fajar.png', '21232f297a57a5a743894a0e4a801fc3', 'PT. PLN (Persero)', 'pln', 1, '2017-10-02 18:44:29', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_link` text,
  `sort_number` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_user_id` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `sort_number`, `parent_id`, `created_date`, `created_user_id`, `modified_date`, `modified_user_id`) VALUES
(21, '<i class=''fa fa-bar-chart''></i> Dashboard', 'http://localhost/index.php/dashboard', 0, 0, '2017-09-28 15:17:14', 1, '0000-00-00 00:00:00', NULL),
(22, '<i class=''fa fa-desktop''></i> Project', 'http://localhost/index.php/project', 0, 0, '2017-09-28 15:17:46', 1, '0000-00-00 00:00:00', NULL),
(23, '<i class=''fa fa-th''></i> Report', 'http://localhost/index.php/report', 0, 0, '2017-09-28 15:18:25', 1, '0000-00-00 00:00:00', NULL),
(24, '<i class=''fa fa-cogs''></i> Setting', '#', 0, 0, '2017-09-28 15:11:06', 1, '0000-00-00 00:00:00', NULL),
(25, '<i class=''fa fa-user-circle''></i> User Management', 'http://localhost/index.php/user', 0, 24, '2017-09-28 15:19:24', 1, '0000-00-00 00:00:00', NULL),
(26, '<i class=''fa fa-database''></i> Data Source', '#', 0, 0, '2017-09-28 15:11:45', 1, '0000-00-00 00:00:00', NULL),
(27, 'Vessel', 'http://localhost/index.php/vessel', 0, 26, '2017-09-28 15:18:41', NULL, '0000-00-00 00:00:00', NULL),
(28, 'Barge', 'http://localhost/index.php/bunker', 0, 26, '2017-09-28 15:18:50', 1, '0000-00-00 00:00:00', NULL),
(29, 'Port', 'http://localhost/index.php/port', 0, 26, '2017-09-28 15:19:00', 1, '0000-00-00 00:00:00', NULL),
(30, 'Project Category', 'http://localhost/index.php/projcat', 0, 24, '2017-09-28 15:19:10', 1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id` int(10) UNSIGNED NOT NULL,
  `port_name` varchar(100) NOT NULL,
  `port_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`id`, `port_name`, `port_type`) VALUES
(1, 'PELABUHAN RATU', 'ECSX');

-- --------------------------------------------------------

--
-- Table structure for table `projcat`
--

CREATE TABLE `projcat` (
  `projcat_id` int(2) NOT NULL,
  `projcat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projcat`
--

INSERT INTO `projcat` (`projcat_id`, `projcat_name`) VALUES
(1, 'Survey Cargos'),
(2, 'Inspeksi Rig'),
(3, 'OCTG'),
(4, 'Kalibrasi'),
(5, 'Konsultasi');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_description` text NOT NULL,
  `project_uri` varchar(50) NOT NULL,
  `projcat_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_description`, `project_uri`, `projcat_id`) VALUES
(1, 'Pelni', 'Proyek prioritas BBM monitoring', '/pelni', 1),
(2, 'PLN', 'Proyek monitoring BBM', '/BBM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_user_id` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `slug`, `controller`, `created_date`, `created_user_id`, `modified_date`, `modified_user_id`) VALUES
(25, 'about-us', 'about', '2017-05-22 17:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 'survey-cargo', 'survey_cargo', '2017-05-23 08:50:48', 0, '0000-00-00 00:00:00', 0),
(28, 'inspeksi-rig', 'inspeksi_rig', '2017-05-23 08:54:04', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(50) NOT NULL,
  `setting_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'app_name', 'Sucofindo'),
(2, 'cover_image', 'http://static.panoramio.com/photos/original/61071142.jpg'),
(4, 'login_title', 'Pertamina Monitoring System'),
(5, 'brand_height', '65px'),
(6, 'brand_width', '170px'),
(7, 'brand_logo', 'http://cv-bga.co.id/wp-content/uploads/2015/10/LOGO-Sucofindo.png'),
(8, 'logo_weight', '190px'),
(9, 'logo_height', '40px'),
(10, 'logo_image', 'http://cv-bga.co.id/wp-content/uploads/2015/10/LOGO-Sucofindo.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(35) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `photo` text NOT NULL,
  `password` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_user_id` int(11) NOT NULL,
  `edited_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_user_id` int(11) NOT NULL,
  `deleted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `phone_number`, `photo`, `password`, `active`, `created_date`, `created_user_id`, `edited_date`, `edited_user_id`, `deleted_date`, `deleted_user_id`) VALUES
(1, 'admin', 'Fajar Rizki Dwi P.', '', 'admin@gmail.com', '089663159652', 'fajar.png', '21232f297a57a5a743894a0e4a801fc3', 1, '2017-09-28 10:01:19', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'wawan', 'Wawan Kurniawan', '', 'wawan@gmail.com', '089777878897', 'fajar.png', '21232f297a57a5a743894a0e4a801fc3', 1, '2017-05-25 18:04:53', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE `vessel` (
  `id` int(11) UNSIGNED NOT NULL,
  `vessel_name` varchar(100) NOT NULL,
  `vessel_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vessel`
--

INSERT INTO `vessel` (`id`, `vessel_name`, `vessel_type`) VALUES
(1, 'PELNI 2', 'PSG'),
(2, 'FERY', 'PSG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbm`
--
ALTER TABLE `bbm`
  ADD PRIMARY KEY (`bbm_id`);

--
-- Indexes for table `bunker`
--
ALTER TABLE `bunker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projcat`
--
ALTER TABLE `projcat`
  ADD PRIMARY KEY (`projcat_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel`
--
ALTER TABLE `vessel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbm`
--
ALTER TABLE `bbm`
  MODIFY `bbm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bunker`
--
ALTER TABLE `bunker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projcat`
--
ALTER TABLE `projcat`
  MODIFY `projcat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
