-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 07:47 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crs`
--
CREATE DATABASE IF NOT EXISTS `crs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crs`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `first_name`, `last_name`, `profile_photo`) VALUES
('yuguyg', 'hjvjh', 'gfuhg', 'upload/2015-12-31-09-38-43-409.jpg'),
('admin', 'Admin', 'Walker', 'upload/2015-12-29-13-14-57-809.jpg'),
('admin', 'Admin', 'Walker', 'upload/2015-12-31-09-38-43-409.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fir_details`
--

CREATE TABLE IF NOT EXISTS `fir_details` (
  `F_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `crime_id` int(10) unsigned NOT NULL,
  `id_proof` varchar(45) NOT NULL,
  `id_proof_no` int(10) unsigned NOT NULL,
  `crimephoto1` varchar(255) DEFAULT NULL,
  `crimephoto2` varchar(255) DEFAULT NULL,
  `crimelocation` varchar(45) NOT NULL,
  `reg_id` int(10) unsigned NOT NULL,
  `claim_id` int(10) unsigned NOT NULL,
  `victim_id` int(10) unsigned NOT NULL,
  `dt_time` datetime DEFAULT NULL,
  `area_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`F_id`),
  KEY `FK_fir_details_1` (`crime_id`),
  KEY `FK_fir_details_2` (`reg_id`),
  KEY `FK_fir_details_3` (`claim_id`),
  KEY `FK_fir_details_4` (`victim_id`),
  KEY `FK_fir_details_5` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fir_details`
--

INSERT INTO `fir_details` (`F_id`, `date`, `time`, `description`, `status`, `crime_id`, `id_proof`, `id_proof_no`, `crimephoto1`, `crimephoto2`, `crimelocation`, `reg_id`, `claim_id`, `victim_id`, `dt_time`, `area_id`) VALUES
(1, '2016-10-12', '0000-00-00 00:00:00', 'Laptop stolen', '0', 3, 'National ID Card', 454545, NULL, NULL, 'Angwan Lambu phase2', 66, 67, 66, '2016-10-12 11:00:00', 1),
(2, '2016-10-06', '0000-00-00 00:00:00', 'Sleeping in Class', '0', 4, 'Voter''s Card', 223432, 'upload/b0.jpg', 'upload/b0.jpg', 'Behind FRSC office', 67, 68, 66, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fir_forward`
--

CREATE TABLE IF NOT EXISTS `fir_forward` (
  `F_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `description` varchar(45) NOT NULL,
  `dt_time` date DEFAULT NULL,
  `from` varchar(45) NOT NULL,
  PRIMARY KEY (`F_id`),
  KEY `FK_fir_forward_1` (`username`),
  KEY `FK_fir_forward_2` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fir_forward`
--

INSERT INTO `fir_forward` (`F_id`, `username`, `status`, `description`, `dt_time`, `from`) VALUES
(1, 'ablaku', '1', '     Please look into this case.             ', '2016-10-23', 'sandy'),
(2, 'Cynthia', '1', '           Please take charge. I am ill.     ', '2016-10-24', 'sandy');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_area`
--

CREATE TABLE IF NOT EXISTS `mstr_area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(45) NOT NULL,
  `pincode` int(10) unsigned DEFAULT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `FK_mstr_area_1` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mstr_area`
--

INSERT INTO `mstr_area` (`area_id`, `area_name`, `pincode`, `city_id`) VALUES
(1, 'Angwan Lambu', 380000, 1),
(2, 'Sabon Gari', 380052, 1),
(3, 'Angwan Kaje', 380006, 1),
(4, 'BCG', 252525, 1),
(5, 'GRA', 245645, 1),
(6, 'Yarkade', 400002, 1),
(7, 'Yelwa', 223344, 1),
(8, 'Dadin kowa', 667766, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_city`
--

CREATE TABLE IF NOT EXISTS `mstr_city` (
  `city_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mstr_city`
--

INSERT INTO `mstr_city` (`city_id`, `city_name`) VALUES
(1, 'Keffi');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_crimetype`
--

CREATE TABLE IF NOT EXISTS `mstr_crimetype` (
  `crime_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `crime_type` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mstr_crimetype`
--

INSERT INTO `mstr_crimetype` (`crime_id`, `crime_type`, `description`) VALUES
(2, 'Lost Property', 'Propery that is missing, left in a public place or missing from home.'),
(3, 'Phone harrassment', ''),
(4, 'Theft', 'Property known to be stolen.'),
(5, 'Identity theft', 'Suspect knowingly obtains, posseses, uses or transfers identification of financial information of another person.'),
(6, 'Fraud', 'Intentional deception to gain access to information.'),
(7, 'Forgery', 'Making copies of fake documents or items in order to deceive.');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_designation`
--

CREATE TABLE IF NOT EXISTS `mstr_designation` (
  `desi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desi_name` varchar(45) NOT NULL,
  PRIMARY KEY (`desi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mstr_designation`
--

INSERT INTO `mstr_designation` (`desi_id`, `desi_name`) VALUES
(1, 'Police Inspector'),
(2, 'Corporal'),
(3, 'Seargent'),
(4, 'Constable');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_login`
--

CREATE TABLE IF NOT EXISTS `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_logindatetime` date DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

INSERT INTO `mstr_login` (`username`, `password`, `type`, `status`, `last_logindatetime`) VALUES
('abimiku', 'abimiku', 'user', NULL, '2016-10-23'),
('ablaku', 'ablaku', 'Police Officer', NULL, NULL),
('admin', 'admin', 'Admin', NULL, '2016-10-26'),
('Cynthia', 'Cynthia', 'Police Officer', NULL, NULL),
('dave', 'dave', 'user', '1', '2010-04-03'),
('ene', 'ene', 'user', NULL, '2016-10-23'),
('james', 'james', 'Police Officer', NULL, NULL),
('Liz', 'Liz', 'Police Officer', NULL, '2016-10-26'),
('Lois', 'Lois', 'Police Officer', '1', NULL),
('Majid', 'Majid', 'Police Officer', NULL, NULL),
('mercy', 'mercy', 'Police Officer', NULL, NULL),
('missy', 'missy', 'user', NULL, '2016-10-25'),
('moses', 'moses', 'user', '1', '2010-04-05'),
('param', 'patel', 'Police Officer', NULL, NULL),
('rahab', 'rahab', 'user', NULL, '2016-10-19'),
('sandy', 'sandy', 'Police Officer', NULL, NULL),
('yahaya', 'yahaya', 'user', NULL, '2016-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_missingcitizens`
--

CREATE TABLE IF NOT EXISTS `mstr_missingcitizens` (
  `missing_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gander` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  `special_clue` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`missing_id`),
  KEY `FK_mstr_missingcitizens_1` (`city_id`),
  KEY `FK_mstr_missingcitizens_2` (`area_id`),
  KEY `FK_mstr_missingcitizens_3` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mstr_officer`
--

CREATE TABLE IF NOT EXISTS `mstr_officer` (
  `username` varchar(45) NOT NULL,
  `Jdate` date NOT NULL,
  `Ldate` date NOT NULL,
  `desi_id` int(10) unsigned NOT NULL,
  `poilcestation_id` int(10) unsigned NOT NULL,
  KEY `FK_mstr_officer_1` (`username`),
  KEY `FK_mstr_officer_2` (`desi_id`),
  KEY `FK_mstr_officer_3` (`poilcestation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_officer`
--

INSERT INTO `mstr_officer` (`username`, `Jdate`, `Ldate`, `desi_id`, `poilcestation_id`) VALUES
('sandy', '2011-12-09', '0000-00-00', 2, 49),
('james', '2013-02-05', '0000-00-00', 4, 49),
('ablaku', '0000-00-00', '0000-00-00', 3, 51),
('Cynthia', '0000-00-00', '0000-00-00', 4, 51),
('Liz', '0000-00-00', '0000-00-00', 3, 54);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_policestation`
--

CREATE TABLE IF NOT EXISTS `mstr_policestation` (
  `poilcestation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(10) unsigned NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `starting_date` date NOT NULL,
  `policestation_name` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`poilcestation_id`),
  KEY `FK_mstr_policestation_1` (`area_id`),
  KEY `FK_mstr_policestation_2` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `mstr_policestation`
--

INSERT INTO `mstr_policestation` (`poilcestation_id`, `area_id`, `address`, `contact_no`, `Email_id`, `contact_person`, `starting_date`, `policestation_name`, `city_id`) VALUES
(49, 5, 'Adjacent New Keffi hotel, keffi ', 4294967295, 'area_c@yahoo.com', 'Lois', '0000-00-00', 'Area Command', 1),
(51, 1, 'Opposite Oando filling station, keffi', 4294967295, 'al_ps@yahoo.com', 'Dave', '0000-00-00', 'Angwan Lambu Police Station', 1),
(53, 2, 'Sabon gari Police Station,Near ECWA Church.', 4294967295, 'sabon_ps@yahoo.com', 'Mercy', '0000-00-00', 'Sabon Gari Police ', 1),
(54, 7, 'Keffi', 812356776, 'yel_ps', 'Sandra', '0000-00-00', 'Yelwa Police Station', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_profile`
--

CREATE TABLE IF NOT EXISTS `mstr_profile` (
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(15) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `Dob` datetime DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `emailid` varchar(255) NOT NULL,
  `profile_photo` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pincode` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mstr_profile_1` (`username`),
  KEY `FK_mstr_profile_2` (`city_id`),
  KEY `FK_mstr_profile_3` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `mstr_profile`
--

INSERT INTO `mstr_profile` (`first_name`, `middle_name`, `last_name`, `gender`, `Dob`, `address`, `contact_no`, `emailid`, `profile_photo`, `username`, `city_id`, `id`, `pincode`, `area_id`) VALUES
('Mercy', 'I', 'Jackson', 'Female', NULL, 'Angwan Lambu, Keffi', '08134546733', 'lois67@yahoo.com', NULL, 'mercy', 1, 57, 0, NULL),
('Rahab', 'S', 'Moses', 'Female', '1993-12-11 00:00:00', 'Keffi', '0819323383', 'uyu@gmail.com', 'upload/2016-01-01-17-26-23-452.jpg', 'rahab', 1, 58, 0, NULL),
('David', 'T', 'Idzi', 'Male', NULL, 'Yarkade', '0818757677', 'tit@yahoo.com', NULL, 'dave', 1, 59, 122322, NULL),
('Iniobong', 'Micah', 'Meg', 'Female', NULL, 'Keffi', '', '', NULL, 'dave', 1, 60, 475675, NULL),
('Sandra', 'O', 'Moses', 'Female', NULL, 'Keffi', '09026737383', 'soo@yahoo.com', NULL, 'sandy', 1, 61, 565456, NULL),
('John', 'E', 'James', 'Male', NULL, 'Keffi', '08182823654', 'jj@yahoo.com', NULL, 'james', 1, 62, 300000, NULL),
('Ablaku', 'J', 'Kudu', 'Male', NULL, 'Keffi', '09074967295', 'abl@yahoo.com', NULL, 'ablaku', 1, 63, 300000, NULL),
('Cynthia', 'John', 'Mark', 'Female', NULL, 'Keffi', '09034343456', 'abl@yahoo.com', NULL, 'Cynthia', 1, 64, 300000, NULL),
('Majid', '', 'Michel', 'Male', NULL, 'Keffi', '08146436364', 'lizzy@gmail.com', NULL, 'Majid', 1, 65, 300000, NULL),
('Yahaya', 'S', 'Musa', 'Male', '1994-05-09 00:00:00', 'Sabon gari', '08123457898', 'tit@yahoo.com', 'upload/2016-01-28-14-30-10-375.jpg', 'yahaya', 1, 66, 465894, NULL),
('Abimiku', '', 'Moses', 'Male', '0000-00-00 00:00:00', 'Keffi', '08182823654', 'uyu@gmail.com', 'upload/2016-03-14-16-54-12-470.jpg', 'abimiku', 1, 67, 465745, NULL),
('Ene ', '', 'Blessing', 'Female', '1976-10-10 00:00:00', 'Dadin Kowa', '08123454343', 'lois.idzi@gmail.com', 'upload/2015-12-20-18-31-58-731.jpg', 'ene', 1, 68, 0, NULL),
('Liz', '', 'Benson', 'Male', '0000-00-00 00:00:00', 'Bauchi road, Keffi', '0816156533', 'lois.idzi@gmail.com', 'upload/2015-12-20-18-29-22-482.jpg', 'missy', 1, 70, 0, NULL),
('Lois', '', 'Tom', 'Female', NULL, 'Keffi', '0816156533', 'liz@yahoo.com', NULL, 'Liz', 1, 71, 0, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fir_details`
--
ALTER TABLE `fir_details`
  ADD CONSTRAINT `FK_fir_details_1` FOREIGN KEY (`crime_id`) REFERENCES `mstr_crimetype` (`crime_id`),
  ADD CONSTRAINT `FK_fir_details_2` FOREIGN KEY (`reg_id`) REFERENCES `mstr_profile` (`id`),
  ADD CONSTRAINT `FK_fir_details_3` FOREIGN KEY (`claim_id`) REFERENCES `mstr_profile` (`id`),
  ADD CONSTRAINT `FK_fir_details_4` FOREIGN KEY (`victim_id`) REFERENCES `mstr_profile` (`id`),
  ADD CONSTRAINT `FK_fir_details_5` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`);

--
-- Constraints for table `fir_forward`
--
ALTER TABLE `fir_forward`
  ADD CONSTRAINT `FK_fir_forward_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  ADD CONSTRAINT `FK_fir_forward_2` FOREIGN KEY (`from`) REFERENCES `mstr_login` (`username`);

--
-- Constraints for table `mstr_area`
--
ALTER TABLE `mstr_area`
  ADD CONSTRAINT `FK_mstr_area_1` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`);

--
-- Constraints for table `mstr_missingcitizens`
--
ALTER TABLE `mstr_missingcitizens`
  ADD CONSTRAINT `FK_mstr_missingcitizens_1` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`),
  ADD CONSTRAINT `FK_mstr_missingcitizens_2` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`),
  ADD CONSTRAINT `FK_mstr_missingcitizens_3` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`);

--
-- Constraints for table `mstr_officer`
--
ALTER TABLE `mstr_officer`
  ADD CONSTRAINT `FK_mstr_officer_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  ADD CONSTRAINT `FK_mstr_officer_2` FOREIGN KEY (`desi_id`) REFERENCES `mstr_designation` (`desi_id`),
  ADD CONSTRAINT `FK_mstr_officer_3` FOREIGN KEY (`poilcestation_id`) REFERENCES `mstr_policestation` (`poilcestation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_policestation`
--
ALTER TABLE `mstr_policestation`
  ADD CONSTRAINT `FK_mstr_policestation_1` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`),
  ADD CONSTRAINT `FK_mstr_policestation_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`);

--
-- Constraints for table `mstr_profile`
--
ALTER TABLE `mstr_profile`
  ADD CONSTRAINT `FK_mstr_profile_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  ADD CONSTRAINT `FK_mstr_profile_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`),
  ADD CONSTRAINT `FK_mstr_profile_3` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
