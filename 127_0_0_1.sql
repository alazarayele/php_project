-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 12:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--
CREATE DATABASE IF NOT EXISTS `a` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `links` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `subtitle`, `description`, `links`) VALUES
(5, 'YouTube', 'a', '      h                    ', 'h'),
(3, 'YouTube', 'a', '       q                  ', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
CREATE TABLE IF NOT EXISTS `admintable` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(55) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`adminid`, `admin_name`, `admin_password`) VALUES
(1, 'alazar', 'alazar');

-- --------------------------------------------------------

--
-- Table structure for table `admintables`
--

DROP TABLE IF EXISTS `admintables`;
CREATE TABLE IF NOT EXISTS `admintables` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintables`
--

INSERT INTO `admintables` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(6, 'alazarayelegossaye', 'ictethiopia@snv.org', 'alazar', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bap`
--

DROP TABLE IF EXISTS `bap`;
CREATE TABLE IF NOT EXISTS `bap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bap_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `sefer` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `sira` varchar(50) NOT NULL,
  `meteria` varchar(50) NOT NULL,
  `tech` varchar(50) NOT NULL,
  `adega_teteri` varchar(50) NOT NULL,
  `adegateteri_slk` varchar(50) NOT NULL,
  `statuse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bap`
--

INSERT INTO `bap` (`id`, `fname`, `mname`, `lname`, `sex`, `bap_date`, `birth_date`, `sefer`, `phone`, `sira`, `meteria`, `tech`, `adega_teteri`, `adegateteri_slk`, `statuse`) VALUES
(2, 'a ', 'g', 'h', 'male', '2020-07-26', '2020-07-26', 'KolfeKeranio', '5', '', 'g', '', ' b', '', ''),
(3, ' ', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(4, 'v ', 'n', 'k', 'male', '2020-07-26', '2020-07-28', 'Yeka', '5', '', 'h', '', '', '8', ''),
(5, 'ab ', 'ba', 'bb', 'male', '2020-07-26', '2020-07-27', 'AddisKetema', '0911223344', '', 'tero', 'dagi', 'ase', '0922554411', ''),
(12, 'abebe ', 'kebebe', 'dad', 'male', '2020-07-29', '2020-07-29', 'NefasSilk ', '0977225588', 'student', 'gad', 'far', 'ff', '0977885544', 'BAPTISM'),
(13, 'fish ', 'mam', 'a', 'female', '2020-07-30', '2020-07-29', 'Kirkos', '+1251387279356', 'student', 'kol', 'as', 'op', '05', 'BAPTISM');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `hbret` varchar(50) NOT NULL,
  `yemenoria_sefer` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `class` varchar(50) NOT NULL,
  `adega_teteri` varchar(50) NOT NULL,
  `adegateteri_slk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `fname`, `mname`, `lname`, `sex`, `bdate`, `hbret`, `yemenoria_sefer`, `phone`, `age`, `class`, `adega_teteri`, `adegateteri_slk`) VALUES
(5, 'a ', 's', 'd', 'male', '2020-07-15', 'sjjg', 'Gullele', '465', 3, ' 7', 'd', '5'),
(6, 'abebe ', 'kebede', 'zenebe', 'male', '2020-07-29', 'bigg', 'NefasSilk ', '0911223344', 11, ' 5', 'tan', '09887744');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `image`) VALUES
(1, 'n2', 'n2', ''),
(2, 'n1', 'n1', '');

-- --------------------------------------------------------

--
-- Table structure for table `deptlist`
--

DROP TABLE IF EXISTS `deptlist`;
CREATE TABLE IF NOT EXISTS `deptlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depid` (`depid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptlist`
--

INSERT INTO `deptlist` (`id`, `depid`, `name`, `description`, `section`) VALUES
(1, 1, 'ba', 'ba corse', 'a'),
(2, 1, 'jornalism', 'journalism', 'b'),
(3, 2, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `availabilty` varchar(200) DEFAULT NULL,
  `carmodel` varchar(50) DEFAULT NULL,
  `cartype` varchar(55) DEFAULT NULL,
  `consumption` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `departuredate` date DEFAULT NULL,
  `drivername` varchar(55) DEFAULT NULL,
  `endingkilometer` float DEFAULT NULL,
  `finalplace` varchar(200) DEFAULT NULL,
  `finaltime` time DEFAULT NULL,
  `fuelgallon` float DEFAULT NULL,
  `fuel price` float DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `initialplace` varchar(50) DEFAULT NULL,
  `initialtime` time DEFAULT NULL,
  `kmreading` float DEFAULT NULL,
  `numberofpeople` int(50) DEFAULT NULL,
  `platenumber` varchar(55) DEFAULT NULL,
  `project` varchar(50) DEFAULT NULL,
  `rent` varchar(25) DEFAULT NULL,
  `returneddate` date DEFAULT NULL,
  `sex` varchar(55) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `yourname` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`availabilty`, `carmodel`, `cartype`, `consumption`, `date`, `departuredate`, `drivername`, `endingkilometer`, `finalplace`, `finaltime`, `fuelgallon`, `fuel price`, `id`, `initialplace`, `initialtime`, `kmreading`, `numberofpeople`, `platenumber`, `project`, `rent`, `returneddate`, `sex`, `status`, `yourname`) VALUES
(NULL, 'v8', 'pick_up', 100, '2019-11-15', '2019-11-17', 'jhon', 12500, 'JIMA', '03:30:00', NULL, NULL, 1, 'AA', '03:00:00', 12000, 2, '1448', 'liway', 'no', '2019-11-20', NULL, 'ACCEPTED', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-26', 'mola', 12500, 'JIMA', '03:30:00', NULL, NULL, 2, 'AA', '03:00:00', 12000, 6, '2056', 'nbpe+', 'no', '2019-11-30', NULL, 'DECLINE', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-26', 'jhon', 12500, 'JIMA', '03:30:00', NULL, NULL, 3, 'AA', '03:00:00', 12000, 6, '2056', 'liway', 'no', '2019-12-02', NULL, 'ACCEPTED', 'atr'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-25', 'samson', 23300, 'JIMA', '03:30:00', NULL, NULL, 4, 'AA', '03:00:00', 23000, 2, '1245', 'nbpe+', 'no', '2019-11-30', NULL, 'ACCEPTED', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-24', '2019-11-25', 'mola', 15500, 'Mekelle', '03:30:00', NULL, NULL, 5, 'AA', '03:00:00', 15000, 2, '2011', 'IT', 'no', '2019-11-28', NULL, 'ACCEPTED', 'Jerry'),
(NULL, 'v8', 'pick_up', 173, '2019-11-13', '2019-12-14', 'tariku', 26500, 'JIMA', '11:00:00', NULL, NULL, 6, 'AA', '09:00:00', 23000, 6, '2001', 'country', 'no', '2019-12-25', NULL, 'ACCEPTED', 'ato abrham');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

DROP TABLE IF EXISTS `faculity`;
CREATE TABLE IF NOT EXISTS `faculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desgination` varchar(25) NOT NULL,
  `description` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`id`, `name`, `desgination`, `description`, `file`, `visible`) VALUES
(7, 'alazarayele47@gmail.com', 'm', 'n', '', 0),
(15, 'alazarayele47@gmail.com', 'm', 'n', '2019 a new mezmur collection.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
CREATE TABLE IF NOT EXISTS `family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `first` varchar(50) DEFAULT NULL,
  `second` varchar(50) DEFAULT NULL,
  `third` varchar(50) DEFAULT NULL,
  `fourth` varchar(50) DEFAULT NULL,
  `fiveth` varchar(50) DEFAULT NULL,
  `sixth` varchar(50) DEFAULT NULL,
  `seventh` varchar(50) DEFAULT NULL,
  `eight` varchar(50) DEFAULT NULL,
  `nine` varchar(50) DEFAULT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `eleven` varchar(50) DEFAULT NULL,
  `twelve` varchar(50) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `fname`, `lname`, `first`, `second`, `third`, `fourth`, `fiveth`, `sixth`, `seventh`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `photo`) VALUES
(3, 'fish', 'mam', '', 'b', '', '', '', 'f', '', 'h', '', '', 'k', 'l', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `felloship`
--

DROP TABLE IF EXISTS `felloship`;
CREATE TABLE IF NOT EXISTS `felloship` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `leader` varchar(25) NOT NULL,
  `numberofpeople` int(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `place` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `felloship`
--

INSERT INTO `felloship` (`id`, `name`, `leader`, `numberofpeople`, `date`, `time`, `place`, `type`) VALUES
(4, 'alazar ayele', 'a', 6, 'saturday ', '09:00', 'church', 'teenagers'),
(2, 'none', 'none', 0, 'none', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carmodel` varchar(50) NOT NULL,
  `consumptionfuel` int(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fuelgallon` double DEFAULT NULL,
  `fuelprice` double DEFAULT NULL,
  `platenumber` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `carmodel`, `consumptionfuel`, `date`, `fuelgallon`, `fuelprice`, `platenumber`) VALUES
(2, 'v8', NULL, '2019-10-12', 20, 12, '1448');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
CREATE TABLE IF NOT EXISTS `gift` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `mid` bigint(50) NOT NULL,
  `s` varchar(15) NOT NULL,
  `oc` varchar(15) NOT NULL,
  `no` varchar(15) NOT NULL,
  `de` varchar(15) NOT NULL,
  `ja` varchar(15) NOT NULL,
  `fe` varchar(15) NOT NULL,
  `ma` varchar(15) NOT NULL,
  `ap` varchar(15) NOT NULL,
  `may` varchar(15) NOT NULL,
  `jun` varchar(15) NOT NULL,
  `jul` varchar(15) NOT NULL,
  `aug` varchar(15) NOT NULL,
  `restore` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `mid`, `s`, `oc`, `no`, `de`, `ja`, `fe`, `ma`, `ap`, `may`, `jun`, `jul`, `aug`, `restore`) VALUES
(11, 3, '', '', '', 'december', '', '', '', '', 'may', '', '', '', 'no'),
(12, 2, '', '', '', 'december', '', '', '', '', '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `itemdescription` varchar(50) NOT NULL,
  `initialqunatity` int(55) NOT NULL,
  `issuedamount` int(50) NOT NULL,
  `balance` int(55) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`itemdescription`, `initialqunatity`, `issuedamount`, `balance`, `id`) VALUES
('vvv', 6, 2, 2, 1),
('z', 4, 2, 0, 2),
('books', 100, 52, 0, 3),
('guest chair', 15, 12, 0, 4),
('guest chair', 3, 2, 0, 5),
('guest chair', 30, 12, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mer`
--

DROP TABLE IF EXISTS `mer`;
CREATE TABLE IF NOT EXISTS `mer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `male_fname` varchar(50) NOT NULL,
  `male_mname` varchar(50) NOT NULL,
  `male_lname` varchar(50) NOT NULL,
  `female_fname` varchar(50) NOT NULL,
  `female_mname` varchar(50) NOT NULL,
  `female_lname` varchar(50) NOT NULL,
  `male_age` int(5) NOT NULL,
  `female_age` int(5) NOT NULL,
  `male_where` varchar(50) NOT NULL,
  `female_where` varchar(50) NOT NULL,
  `male_phone` int(15) NOT NULL,
  `female_phone` int(15) NOT NULL,
  `date` date NOT NULL,
  `statuse` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mer`
--

INSERT INTO `mer` (`id`, `male_fname`, `male_mname`, `male_lname`, `female_fname`, `female_mname`, `female_lname`, `male_age`, `female_age`, `male_where`, `female_where`, `male_phone`, `female_phone`, `date`, `statuse`) VALUES
(1, 'q', 'q', 'q', 'e', 'w', 'x', 2, 4, 'a', ' f', 2, 3, '0000-00-00', 'FINISHED'),
(2, 'a', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(4, 'd', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(5, 'd', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(6, 'f', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(7, 'sa', 'as', 'aa', 'qw', 'wq', 'qq', 2, 3, 'a', ' a', 3, 3, '0000-00-00', 'FINISHED'),
(13, 'qw', 'wq', 'qq', 'df', 'ds', 'fd', 1, 4, 'a', ' d', 1, 5, '2020-07-24', 'FINISHED'),
(15, 'a', 'b', 'h', 't', 'b', 'h', 23, 23, 'kolfe', ' mul', 967, 9, '2020-08-05', 'FINISHED');

-- --------------------------------------------------------

--
-- Table structure for table `newbornagiann`
--

DROP TABLE IF EXISTS `newbornagiann`;
CREATE TABLE IF NOT EXISTS `newbornagiann` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `newborndate` date NOT NULL,
  `gender` text NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `maritialstatus` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `ephone` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `baptized` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbornagiann`
--

INSERT INTO `newbornagiann` (`id`, `fname`, `mname`, `lname`, `newborndate`, `gender`, `date`, `address`, `job`, `phonenumber`, `maritialstatus`, `street`, `ephone`, `house`, `baptized`) VALUES
(1, 'alazar', '', '', '2020-08-18', '', '2020-08-06', '', '', 912121, '', '', '', '', 'yes'),
(2, 'alalla', 'a', 'a', '2020-08-19', 'female', '2020-08-11', 'NefasSilk ', 'govermental', 911, 'widow(er)', 'kolfe', '09', 'with', 'yes'),
(4, 'alazar', '', '', '2020-08-05', 'male', '2020-08-05', '', '', 9, '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `nibret`
--

DROP TABLE IF EXISTS `nibret`;
CREATE TABLE IF NOT EXISTS `nibret` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `amonut` int(100) NOT NULL,
  `isssued` int(100) DEFAULT NULL,
  `increased` int(100) DEFAULT NULL,
  `balance` int(100) DEFAULT NULL,
  `itemdesc` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `status`, `date`) VALUES
(1, 'a', 'read', '2020-07-08 13:53:02'),
(2, 'ALAZAR', 'read', '2020-07-08 13:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `id` bigint(250) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` text,
  `bdate` date NOT NULL,
  `bplace` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phonenumber` int(50) DEFAULT NULL,
  `work` varchar(50) DEFAULT NULL,
  `house` varchar(50) DEFAULT NULL,
  `mdate` date NOT NULL,
  `wstatus` varchar(50) DEFAULT NULL,
  `wdate` date DEFAULT NULL,
  `nochildren` int(50) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `mtype` varchar(50) DEFAULT NULL,
  `leavestatus` varchar(25) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `alive` varchar(25) DEFAULT NULL,
  `felloship` int(25) DEFAULT NULL,
  `levelofschool` varchar(100) DEFAULT NULL,
  `schooltype` varchar(100) DEFAULT NULL,
  `dayspermonth` varchar(55) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `addressofstreet` varchar(100) NOT NULL,
  `economic` varchar(25) DEFAULT NULL,
  `emergency` varchar(100) DEFAULT NULL,
  `emergencyphonenumber` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `fname`, `mname`, `lname`, `gender`, `bdate`, `bplace`, `address`, `phonenumber`, `work`, `house`, `mdate`, `wstatus`, `wdate`, `nochildren`, `service`, `mtype`, `leavestatus`, `photo`, `alive`, `felloship`, `levelofschool`, `schooltype`, `dayspermonth`, `age`, `addressofstreet`, `economic`, `emergency`, `emergencyphonenumber`) VALUES
(1, 'a', 'a', 'a', '', '2020-06-09', '', '', 9, '', '', '2020-06-08', '', '2020-06-23', 0, '', '', 'no', '', 'no', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(2, 'alazar', 'ayele', 'gossaye', 'female', '2020-06-09', NULL, NULL, NULL, NULL, NULL, '2020-06-09', NULL, '2020-06-09', NULL, NULL, NULL, 'no', NULL, 'yes', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(3, 'alazar', 'ayele', 'gossaye', 'male', '2020-06-11', 'addis ababa', 'KolfeKeranio', 9, 'ngo', 'owner', '2020-06-10', 'single', '2020-06-17', 0, 'half', 'marraige', 'no', NULL, 'yes', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(7, 'alazar', 'ayele', 'gossaye', 'female', '2020-06-09', '', '', 9, '', '', '2020-06-25', '', '0001-01-01', 0, 'full', '', 'no', NULL, 'no', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(10, 'alazar', 'ayele', 'gossaye', 'male', '2020-06-17', 'addis ababa', 'AddisKetema', 2, 'ngo', 'with', '2020-06-03', 'married', '2020-06-10', 0, 'full', 'changing_living_place', 'yes', 'eden bags.jpg', 'yes', 1, 'Baptized', 'social_science', 'verygood', '2', 'fff', 'nj', 'j', 'hg'),
(11, 'fish', 'ayele', 'gossaye', 'male', '2020-07-01', 'addis ababa', 'Bole', 456, 'Privateowner', 'owner', '2020-07-08', 'married', '2020-07-01', 9, 'half', 'Chaning_church_membership', 'no', 'unnamed.jpg', 'yes', 1, 'is_not_membership_of_any_church', 'sport', 'good', '2', 'kolfe', 'nj', 'j', '0911305787'),
(12, 'alazar ', '', '', 'male', '2020-08-12', '', 'Kirkos', 78, 'govermental', 'rental', '2020-08-11', '', '2020-08-03', 2, 'full', 'changing_living_place', 'no', 'a.jpg', 'yes', 4, '', 'computer_science', '', '23', '', '', '', '0911');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

DROP TABLE IF EXISTS `req`;
CREATE TABLE IF NOT EXISTS `req` (
  `rq_id` int(11) NOT NULL AUTO_INCREMENT,
  `rq_laki_id` varchar(15) NOT NULL,
  `rq_des` varchar(5000) NOT NULL,
  `birr` int(100) NOT NULL,
  `statuse` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tekcbay` varchar(50) DEFAULT 'no',
  `date` date NOT NULL,
  `tekcbaydate` date DEFAULT NULL,
  PRIMARY KEY (`rq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serial_number`
--

DROP TABLE IF EXISTS `serial_number`;
CREATE TABLE IF NOT EXISTS `serial_number` (
  `id` int(11) NOT NULL,
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `se1` varchar(12) NOT NULL,
  `se2` varchar(12) NOT NULL,
  `se3` varchar(25) NOT NULL,
  `se4` varchar(25) NOT NULL,
  `se5` varchar(25) NOT NULL,
  `se6` varchar(25) NOT NULL,
  `se7` varchar(25) NOT NULL,
  `se8` varchar(25) NOT NULL,
  `se9` varchar(25) NOT NULL,
  `se10` varchar(25) NOT NULL,
  `se11` varchar(25) NOT NULL,
  `se12` varchar(15) NOT NULL,
  `se13` varchar(15) NOT NULL,
  `se14` varchar(15) NOT NULL,
  `se15` varchar(15) NOT NULL,
  `se16` varchar(15) NOT NULL,
  `se17` varchar(15) NOT NULL,
  `se18` varchar(15) NOT NULL,
  `se19` varchar(15) NOT NULL,
  `se20` varchar(15) NOT NULL,
  `se21` varchar(15) NOT NULL,
  `se22` varchar(15) NOT NULL,
  `se23` varchar(15) NOT NULL,
  `re1` varchar(15) NOT NULL,
  `re2` varchar(15) NOT NULL,
  `re3` varchar(15) NOT NULL,
  `re4` varchar(15) NOT NULL,
  `re5` varchar(15) NOT NULL,
  `re6` varchar(15) NOT NULL,
  `re7` varchar(15) NOT NULL,
  `re8` varchar(15) NOT NULL,
  `re9` varchar(15) NOT NULL,
  `re10` varchar(15) NOT NULL,
  `re11` varchar(15) NOT NULL,
  `re12` varchar(15) NOT NULL,
  `re13` varchar(15) NOT NULL,
  `re14` varchar(15) NOT NULL,
  `re15` varchar(15) NOT NULL,
  `re16` varchar(15) NOT NULL,
  `re17` varchar(15) NOT NULL,
  `re18` varchar(15) NOT NULL,
  `re19` varchar(15) NOT NULL,
  `re20` varchar(15) NOT NULL,
  `re21` varchar(15) NOT NULL,
  `re22` varchar(15) NOT NULL,
  `re23` varchar(15) NOT NULL,
  PRIMARY KEY (`ids`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serial_number`
--

INSERT INTO `serial_number` (`id`, `ids`, `se1`, `se2`, `se3`, `se4`, `se5`, `se6`, `se7`, `se8`, `se9`, `se10`, `se11`, `se12`, `se13`, `se14`, `se15`, `se16`, `se17`, `se18`, `se19`, `se20`, `se21`, `se22`, `se23`, `re1`, `re2`, `re3`, `re4`, `re5`, `re6`, `re7`, `re8`, `re9`, `re10`, `re11`, `re12`, `re13`, `re14`, `re15`, `re16`, `re17`, `re18`, `re19`, `re20`, `re21`, `re22`, `re23`) VALUES
(1, 1, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', 'a', '', 'alazar', 'alazar', '', '', 'alazar', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', '', ''),
(1, 2, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 3, '1', '1', '1', '1', '1', '2', '2', '2', '5cdf', '5cdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 4, 'qwe', 'qwer', 'qwert', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', ''),
(5, 5, '5cdf', '5cdf', '5cdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 6, 'a1', 'a2', 'a3', 'a4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abrham', 'abrham finance ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `fellow` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `mid` bigint(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `type`, `name`, `date`, `fellow`, `phonenumber`, `mid`) VALUES
(4, 'full', 'Paster', '2020-08-12', '1', '09111', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
CREATE TABLE IF NOT EXISTS `vacancy` (
  `topic` varchar(50) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`topic`, `title`, `image`, `id`) VALUES
('wendesday', 'there is only one god', '2019 a new mezmur collection.jpg', 2),
('wendesday', 'there is only one god', 'church7.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wechi`
--

DROP TABLE IF EXISTS `wechi`;
CREATE TABLE IF NOT EXISTS `wechi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `yetekefay_sm` int(50) DEFAULT NULL,
  `yeagelglot_zerf` varchar(100) NOT NULL,
  `fdate` date NOT NULL,
  `ldate` date NOT NULL,
  `tesatafi_bzat` int(50) NOT NULL,
  `andu_waga` int(50) NOT NULL,
  `teklala_waga` int(50) NOT NULL,
  `asteyayet` varchar(5000) NOT NULL,
  `tewekay_one` varchar(50) NOT NULL,
  `tewekay_fone` varchar(50) NOT NULL,
  `tewekay_two` varchar(50) NOT NULL,
  `tewekay_ftwo` varchar(50) NOT NULL,
  `tewekay_three` varchar(50) NOT NULL,
  `tewekay_fthree` varchar(50) NOT NULL,
  `agelglot_drshaone` varchar(50) NOT NULL,
  `agelglot_drshatwo` varchar(50) NOT NULL,
  `agelglot_drshathree` varchar(50) NOT NULL,
  `restore` varchar(25) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  KEY `yetekefay_sm` (`yetekefay_sm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deptlist`
--
ALTER TABLE `deptlist`
  ADD CONSTRAINT `deptlist_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `department` (`id`);

--
-- Constraints for table `gift`
--
ALTER TABLE `gift`
  ADD CONSTRAINT `gift_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`);

--
-- Constraints for table `serial_number`
--
ALTER TABLE `serial_number`
  ADD CONSTRAINT `serial_number_ibfk_1` FOREIGN KEY (`id`) REFERENCES `goods` (`id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`);

--
-- Constraints for table `wechi`
--
ALTER TABLE `wechi`
  ADD CONSTRAINT `wechi_ibfk_1` FOREIGN KEY (`yetekefay_sm`) REFERENCES `req` (`rq_id`);
--
-- Database: `pmanager`
--
CREATE DATABASE IF NOT EXISTS `pmanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pmanager`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `url`, `user_id`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 'alalla', 'ayele', 1, 1, 'Project', '2020-03-20 06:16:59', '2020-03-20 06:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'SNV', 'This is SNV 1 organization 4\r\n This is the organization This is the organization This is the organization This is the organization This is the organization This is the organization This is the organizationThis is the organization This is the organizationThis is the organization', 1, NULL, '2020-01-24 06:28:52'),
(3, 'LIWAY', 'LL LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce LIWAY IS THE BrANCH OFFI/ce', 2, NULL, '2020-02-08 03:21:46'),
(4, 'alazar', 'l', 1, '2020-02-06 06:08:35', '2020-02-06 06:08:35'),
(5, 'alazar', 'zxccccccccccccccc', 1, '2020-02-08 03:29:48', '2020-02-08 03:29:48'),
(6, 'alazar', 'vb', 1, '2020-02-08 03:38:22', '2020-02-08 03:38:22'),
(7, 'BNM', 'BNM', 1, '2020-02-08 03:39:12', '2020-02-08 03:39:12'),
(8, 'y', 'y', 1, '2020-02-08 03:51:53', '2020-02-08 03:51:53'),
(9, 'A', 'A', 3, '2020-02-08 06:32:37', '2020-02-08 06:32:37'),
(10, 'aaa', 'aaaaaaaaaaaaaaaaaaaaa', 1, '2020-02-14 07:59:04', '2020-02-14 07:59:04'),
(11, 'AQ', 'AQ', 2, '2020-02-14 08:09:06', '2020-02-14 08:09:06'),
(12, 'a', 'a', 2, '2020-02-19 07:30:47', '2020-02-19 07:30:47'),
(13, 'Q', 'Q', 1, '2020-02-20 08:48:27', '2020-02-20 08:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_03_183245_create_companies_table', 1),
(4, '2020_01_04_000230_create_projects_table', 1),
(5, '2020_01_06_225637_create_tasks_table', 1),
(6, '2020_01_08_184514_create_comments_table', 1),
(7, '2020_01_09_213809_create_roles_table', 1),
(8, '2020_01_09_215247_create_project_user_table', 1),
(9, '2020_01_09_215915_create_task_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `days` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  KEY `projects_company_id_foreign` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `company_id`, `user_id`, `days`, `created_at`, `updated_at`) VALUES
(1, 'ENergy', 'one of the basic fondation in  SNV one of the basic fondation in  SNV one of the basic fondation in  SNVvvone of the basic fondation in  SNVone of the basic fondation in  SNVone of the basic fondation in  SNVvvone of the basic fondation in  SNV', 1, 1, 10, '2020-01-22 01:58:11', NULL),
(2, 'Grad', 'Grad is one of the basic fondation in  SNVone of the basic fondation in  SNVone of the basic fondation in  SNVone of the basic fondation in  SNVone of the basic fondation in  SNV', 1, 1, 33, '2020-01-22 01:58:11', NULL),
(3, 'RAYE', 'RAYEIS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ceLIWAY IS THE BrANCH OFFI/ce', 3, 3, NULL, NULL, NULL),
(4, 'a', 'aaaaaaaa', NULL, 1, NULL, '2020-02-19 08:17:42', '2020-02-19 08:17:42'),
(5, 'bb', 'bb', NULL, 1, NULL, '2020-02-19 08:21:04', '2020-02-19 08:21:04'),
(6, 'bb', 'bb', NULL, 1, NULL, '2020-02-19 08:22:23', '2020-02-19 08:22:23'),
(7, 'bb', 'bb', NULL, 1, NULL, '2020-02-19 08:24:28', '2020-02-19 08:24:28'),
(8, 'bb', 'bb', NULL, 1, NULL, '2020-02-19 08:28:12', '2020-02-19 08:28:12'),
(9, 'b', 'b', NULL, 2, NULL, '2020-02-19 08:28:54', '2020-02-19 08:28:54'),
(10, 'bb', 'bb', NULL, 2, NULL, '2020-02-19 08:29:27', '2020-02-19 08:29:27'),
(11, 'bb', 'bb', NULL, 2, NULL, '2020-02-19 08:33:14', '2020-02-19 08:33:14'),
(12, 'b', 'bnm', NULL, 2, NULL, '2020-02-19 08:33:29', '2020-02-19 08:33:29'),
(13, 'b', 'bnm', NULL, 2, NULL, '2020-02-19 08:34:56', '2020-02-19 08:34:56'),
(14, 'b', 'bnm', NULL, 2, NULL, '2020-02-19 08:35:13', '2020-02-19 08:35:13'),
(15, 'b', 'bnm', NULL, 2, NULL, '2020-02-19 08:36:17', '2020-02-19 08:36:17'),
(16, 'mn', 'mnlo', NULL, 2, NULL, '2020-02-19 08:36:39', '2020-02-19 08:36:39'),
(17, '00', '00', NULL, 2, NULL, '2020-02-19 08:37:51', '2020-02-19 08:37:51'),
(18, '00', '00', NULL, 2, NULL, '2020-02-19 08:38:59', '2020-02-19 08:38:59'),
(19, '00', '00', NULL, 2, NULL, '2020-02-19 08:39:36', '2020-02-19 08:39:36'),
(20, '00', '00', NULL, 2, NULL, '2020-02-19 08:40:05', '2020-02-19 08:40:05'),
(21, '00', '00', NULL, 2, NULL, '2020-02-19 08:43:02', '2020-02-19 08:43:02'),
(22, '00', '00', NULL, 2, NULL, '2020-02-19 08:43:39', '2020-02-19 08:43:39'),
(23, '00', '00', NULL, 2, NULL, '2020-02-19 08:44:18', '2020-02-19 08:44:18'),
(24, '012', '012', NULL, 2, NULL, '2020-02-19 08:48:12', '2020-02-19 08:48:12'),
(25, '013', NULL, NULL, 2, NULL, '2020-02-19 08:48:29', '2020-02-19 08:48:29'),
(26, '013', '013', NULL, 2, NULL, '2020-02-19 08:48:43', '2020-02-19 08:48:43'),
(27, 'n', 'n', NULL, 2, NULL, '2020-02-19 08:49:15', '2020-02-19 08:49:15'),
(28, 'n', 'n', NULL, 2, NULL, '2020-02-19 08:49:56', '2020-02-19 08:49:56'),
(29, 'n', 'n', NULL, 2, NULL, '2020-02-19 08:50:08', '2020-02-19 08:50:08'),
(30, 'n', 'n', NULL, 2, NULL, '2020-02-19 08:53:32', '2020-02-19 08:53:32'),
(31, 'M', 'M', NULL, 1, NULL, '2020-02-20 06:06:55', '2020-02-20 06:06:55'),
(32, 'M1', 'M1', NULL, 1, NULL, '2020-02-20 06:23:42', '2020-02-20 06:23:42'),
(35, 'ENERGY Y', NULL, NULL, 1, NULL, '2020-02-20 08:47:45', '2020-02-20 08:47:45'),
(36, 'Q1', 'Q2', NULL, 1, NULL, '2020-02-20 08:48:47', '2020-02-20 08:48:47'),
(37, 'aaaa', 'asssssss', NULL, 1, NULL, '2020-02-20 08:49:48', '2020-02-20 08:49:48'),
(38, 'PO', 'PO', NULL, 1, NULL, '2020-02-25 05:41:41', '2020-02-25 05:41:41'),
(39, 'IOP', 'IOP', NULL, 1, NULL, '2020-02-25 05:53:53', '2020-02-25 05:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--

DROP TABLE IF EXISTS `project_user`;
CREATE TABLE IF NOT EXISTS `project_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_user_user_id_foreign` (`user_id`),
  KEY `project_user_project_id_foreign` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `days` int(10) UNSIGNED DEFAULT NULL,
  `hours` int(10) UNSIGNED DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  KEY `tasks_company_id_foreign` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

DROP TABLE IF EXISTS `task_user`;
CREATE TABLE IF NOT EXISTS `task_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_user_user_id_foreign` (`user_id`),
  KEY `task_user_task_id_foreign` (`task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `city`) VALUES
(1, 'alazar', 'alazarayele47@gmail.com', '$2y$10$ZfxYTfQGBL9VC7JpV1TtnughjV6UTOMoIK3gQfQB7zoYG8beqGOs.', 'o7ngUwLjRm3JKITNAs6rZIQGJ8sEw4VcPIZW31JUuL0lbavu7eWdr5LiyUnP', '2020-02-06 06:01:43', '2020-02-06 06:01:43', 3, NULL),
(2, 'atr', 'alazarayelee47@gmail.com', '$2y$10$OMN6agmduhqFHvMVk3vSBOFrlMzb5zUxgeKlnHfKMDLnUM4bobmn.', 'KttGoTpCR0JdK9nDlRyDdZato6j5nZ6e4mEd3i7bMyyFv7nl6nLi2PGJmsLi', '2020-02-12 08:20:13', '2020-02-12 08:20:13', 1, NULL);
--
-- Database: `snv`
--
CREATE DATABASE IF NOT EXISTS `snv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `snv`;

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
CREATE TABLE IF NOT EXISTS `admintable` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(55) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`adminid`, `admin_name`, `admin_password`) VALUES
(1, 'alazar', 'alazar');

-- --------------------------------------------------------

--
-- Table structure for table `admintables`
--

DROP TABLE IF EXISTS `admintables`;
CREATE TABLE IF NOT EXISTS `admintables` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintables`
--

INSERT INTO `admintables` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(6, 'alazarayelegossaye', 'ictethiopia@snv.org', 'alazar', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bap`
--

DROP TABLE IF EXISTS `bap`;
CREATE TABLE IF NOT EXISTS `bap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bap_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `sefer` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `sira` varchar(50) NOT NULL,
  `meteria` varchar(50) NOT NULL,
  `tech` varchar(50) NOT NULL,
  `adega_teteri` varchar(50) NOT NULL,
  `adegateteri_slk` varchar(50) NOT NULL,
  `statuse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bap`
--

INSERT INTO `bap` (`id`, `fname`, `mname`, `lname`, `sex`, `bap_date`, `birth_date`, `sefer`, `phone`, `sira`, `meteria`, `tech`, `adega_teteri`, `adegateteri_slk`, `statuse`) VALUES
(2, 'a ', 'g', 'h', 'male', '2020-07-26', '2020-07-26', 'KolfeKeranio', '5', '', 'g', '', ' b', '', ''),
(3, ' ', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(4, 'v ', 'n', 'k', 'male', '2020-07-26', '2020-07-28', 'Yeka', '5', '', 'h', '', '', '8', ''),
(5, 'ab ', 'ba', 'bb', 'male', '2020-07-26', '2020-07-27', 'AddisKetema', '0911223344', '', 'tero', 'dagi', 'ase', '0922554411', ''),
(12, 'abebe ', 'kebebe', 'dad', 'male', '2020-07-29', '2020-07-29', 'NefasSilk ', '0977225588', 'student', 'gad', 'far', 'ff', '0977885544', 'BAPTISM'),
(13, 'fish ', 'mam', 'a', 'female', '2020-07-30', '2020-07-29', 'Kirkos', '+1251387279356', 'student', 'kol', 'as', 'op', '05', 'BAPTISM'),
(14, 'fish ', 'mam', 'h', 'male', '2020-08-10', '2020-08-18', 'Lideta', '0945', 'govermental', 'kolfe', 'alazar', 'ala', '056', 'learning');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `hbret` varchar(50) NOT NULL,
  `yemenoria_sefer` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `class` varchar(50) NOT NULL,
  `adega_teteri` varchar(50) NOT NULL,
  `adegateteri_slk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `fname`, `mname`, `lname`, `sex`, `bdate`, `hbret`, `yemenoria_sefer`, `phone`, `age`, `class`, `adega_teteri`, `adegateteri_slk`) VALUES
(5, 'a ', 's', 'd', 'male', '2020-07-15', 'sjjg', 'Gullele', '465', 3, ' 7', 'd', '5'),
(6, 'abebe ', 'kebede', 'zenebe', 'male', '2020-07-29', 'bigg', 'NefasSilk ', '0911223344', 11, ' 5', 'tan', '09887744');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `image`) VALUES
(1, 'n2', 'n2', ''),
(2, 'n1', 'n1', '');

-- --------------------------------------------------------

--
-- Table structure for table `deptlist`
--

DROP TABLE IF EXISTS `deptlist`;
CREATE TABLE IF NOT EXISTS `deptlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depid` (`depid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptlist`
--

INSERT INTO `deptlist` (`id`, `depid`, `name`, `description`, `section`) VALUES
(1, 1, 'ba', 'ba corse', 'a'),
(2, 1, 'jornalism', 'journalism', 'b'),
(3, 2, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `availabilty` varchar(200) DEFAULT NULL,
  `carmodel` varchar(50) DEFAULT NULL,
  `cartype` varchar(55) DEFAULT NULL,
  `consumption` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `departuredate` date DEFAULT NULL,
  `drivername` varchar(55) DEFAULT NULL,
  `endingkilometer` float DEFAULT NULL,
  `finalplace` varchar(200) DEFAULT NULL,
  `finaltime` time DEFAULT NULL,
  `fuelgallon` float DEFAULT NULL,
  `fuel price` float DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `initialplace` varchar(50) DEFAULT NULL,
  `initialtime` time DEFAULT NULL,
  `kmreading` float DEFAULT NULL,
  `numberofpeople` int(50) DEFAULT NULL,
  `platenumber` varchar(55) DEFAULT NULL,
  `project` varchar(50) DEFAULT NULL,
  `rent` varchar(25) DEFAULT NULL,
  `returneddate` date DEFAULT NULL,
  `sex` varchar(55) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `yourname` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`availabilty`, `carmodel`, `cartype`, `consumption`, `date`, `departuredate`, `drivername`, `endingkilometer`, `finalplace`, `finaltime`, `fuelgallon`, `fuel price`, `id`, `initialplace`, `initialtime`, `kmreading`, `numberofpeople`, `platenumber`, `project`, `rent`, `returneddate`, `sex`, `status`, `yourname`) VALUES
(NULL, 'v8', 'pick_up', 100, '2019-11-15', '2019-11-17', 'jhon', 12500, 'JIMA', '03:30:00', NULL, NULL, 1, 'AA', '03:00:00', 12000, 2, '1448', 'liway', 'no', '2019-11-20', NULL, 'ACCEPTED', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-26', 'mola', 12500, 'JIMA', '03:30:00', NULL, NULL, 2, 'AA', '03:00:00', 12000, 6, '2056', 'nbpe+', 'no', '2019-11-30', NULL, 'DECLINE', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-26', 'jhon', 12500, 'JIMA', '03:30:00', NULL, NULL, 3, 'AA', '03:00:00', 12000, 6, '2056', 'liway', 'no', '2019-12-02', NULL, 'ACCEPTED', 'atr'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-22', '2019-11-25', 'samson', 23300, 'JIMA', '03:30:00', NULL, NULL, 4, 'AA', '03:00:00', 23000, 2, '1245', 'nbpe+', 'no', '2019-11-30', NULL, 'ACCEPTED', 'alazar'),
(NULL, 'toyota', 'pick_up', 100, '2019-11-24', '2019-11-25', 'mola', 15500, 'Mekelle', '03:30:00', NULL, NULL, 5, 'AA', '03:00:00', 15000, 2, '2011', 'IT', 'no', '2019-11-28', NULL, 'ACCEPTED', 'Jerry'),
(NULL, 'v8', 'pick_up', 173, '2019-11-13', '2019-12-14', 'tariku', 26500, 'JIMA', '11:00:00', NULL, NULL, 6, 'AA', '09:00:00', 23000, 6, '2001', 'country', 'no', '2019-12-25', NULL, 'ACCEPTED', 'ato abrham');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

DROP TABLE IF EXISTS `faculity`;
CREATE TABLE IF NOT EXISTS `faculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desgination` varchar(25) NOT NULL,
  `description` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`id`, `name`, `desgination`, `description`, `file`, `visible`) VALUES
(7, 'alazarayele47@gmail.com', 'm', 'n', '', 0),
(15, 'alazarayele47@gmail.com', 'm', 'n', '2019 a new mezmur collection.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
CREATE TABLE IF NOT EXISTS `family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `first` varchar(50) DEFAULT NULL,
  `second` varchar(50) DEFAULT NULL,
  `third` varchar(50) DEFAULT NULL,
  `fourth` varchar(50) DEFAULT NULL,
  `fiveth` varchar(50) DEFAULT NULL,
  `sixth` varchar(50) DEFAULT NULL,
  `seventh` varchar(50) DEFAULT NULL,
  `eight` varchar(50) DEFAULT NULL,
  `nine` varchar(50) DEFAULT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `eleven` varchar(50) DEFAULT NULL,
  `twelve` varchar(50) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `fname`, `lname`, `first`, `second`, `third`, `fourth`, `fiveth`, `sixth`, `seventh`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `photo`) VALUES
(3, 'fish', 'mam', '', 'b', '', '', '', 'f', '', 'h', '', '', 'k', 'l', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `felloship`
--

DROP TABLE IF EXISTS `felloship`;
CREATE TABLE IF NOT EXISTS `felloship` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `leader` varchar(25) NOT NULL,
  `numberofpeople` int(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `place` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `felloship`
--

INSERT INTO `felloship` (`id`, `name`, `leader`, `numberofpeople`, `date`, `time`, `place`, `type`) VALUES
(4, 'alazar ayele', 'a', 6, 'saturday ', '09:00', 'church', 'teenagers'),
(2, 'none', 'none', 0, 'none', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carmodel` varchar(50) NOT NULL,
  `consumptionfuel` int(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fuelgallon` double DEFAULT NULL,
  `fuelprice` double DEFAULT NULL,
  `platenumber` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `carmodel`, `consumptionfuel`, `date`, `fuelgallon`, `fuelprice`, `platenumber`) VALUES
(2, 'v8', NULL, '2019-10-12', 20, 12, '1448');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
CREATE TABLE IF NOT EXISTS `gift` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `mid` bigint(50) NOT NULL,
  `s` varchar(15) NOT NULL,
  `oc` varchar(15) NOT NULL,
  `no` varchar(15) NOT NULL,
  `de` varchar(15) NOT NULL,
  `ja` varchar(15) NOT NULL,
  `fe` varchar(15) NOT NULL,
  `ma` varchar(15) NOT NULL,
  `ap` varchar(15) NOT NULL,
  `may` varchar(15) NOT NULL,
  `jun` varchar(15) NOT NULL,
  `jul` varchar(15) NOT NULL,
  `aug` varchar(15) NOT NULL,
  `restore` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `mid`, `s`, `oc`, `no`, `de`, `ja`, `fe`, `ma`, `ap`, `may`, `jun`, `jul`, `aug`, `restore`) VALUES
(11, 3, '', '', '', 'december', '', '', '', '', 'may', '', '', '', 'no'),
(12, 3, 'september', '', 'november', '', '', '', '', '', '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `itemdescription` varchar(50) NOT NULL,
  `initialqunatity` int(55) NOT NULL DEFAULT '0',
  `issuedamount` int(50) NOT NULL DEFAULT '0',
  `balance` int(55) NOT NULL DEFAULT '0',
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`itemdescription`, `initialqunatity`, `issuedamount`, `balance`, `id`) VALUES
('vvv', 6, 2, 2, 1),
('z', 4, 2, 0, 2),
('books', 100, 52, 0, 3),
('guest chair', 15, 12, 0, 4),
('guest chair', 3, 2, 0, 5),
('guest chair', 30, 12, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mer`
--

DROP TABLE IF EXISTS `mer`;
CREATE TABLE IF NOT EXISTS `mer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `male_fname` varchar(50) NOT NULL,
  `male_mname` varchar(50) NOT NULL,
  `male_lname` varchar(50) NOT NULL,
  `female_fname` varchar(50) NOT NULL,
  `female_mname` varchar(50) NOT NULL,
  `female_lname` varchar(50) NOT NULL,
  `male_age` int(5) NOT NULL,
  `female_age` int(5) NOT NULL,
  `male_where` varchar(50) NOT NULL,
  `female_where` varchar(50) NOT NULL,
  `male_phone` int(15) NOT NULL,
  `female_phone` int(15) NOT NULL,
  `date` date NOT NULL,
  `statuse` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mer`
--

INSERT INTO `mer` (`id`, `male_fname`, `male_mname`, `male_lname`, `female_fname`, `female_mname`, `female_lname`, `male_age`, `female_age`, `male_where`, `female_where`, `male_phone`, `female_phone`, `date`, `statuse`) VALUES
(1, 'q', 'q', 'q', 'e', 'w', 'x', 2, 4, 'a', ' f', 2, 3, '0000-00-00', 'FINISHED'),
(2, 'a', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(4, 'd', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(5, 'd', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(6, 'f', '', '', '', '', '', 0, 0, '', ' ', 0, 0, '0000-00-00', 'FINISHED'),
(7, 'sa', 'as', 'aa', 'qw', 'wq', 'qq', 2, 3, 'a', ' a', 3, 3, '0000-00-00', 'FINISHED'),
(13, 'qw', 'wq', 'qq', 'df', 'ds', 'fd', 1, 4, 'a', ' d', 1, 5, '2020-07-24', 'FINISHED'),
(15, 'a', 'b', 'h', 't', 'b', 'h', 23, 23, 'kolfe', ' mul', 967, 9, '2020-08-05', 'FINISHED'),
(16, 'a', 'b', 'h', 't', 'b', 'h', 23, 23, 'kolfe', ' mul', 967, 9, '2020-08-13', 'learning');

-- --------------------------------------------------------

--
-- Table structure for table `newbornagiann`
--

DROP TABLE IF EXISTS `newbornagiann`;
CREATE TABLE IF NOT EXISTS `newbornagiann` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `newborndate` date NOT NULL,
  `gender` text NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `maritialstatus` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `ephone` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `baptized` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbornagiann`
--

INSERT INTO `newbornagiann` (`id`, `fname`, `mname`, `lname`, `newborndate`, `gender`, `date`, `address`, `job`, `phonenumber`, `maritialstatus`, `street`, `ephone`, `house`, `baptized`) VALUES
(1, 'alazar', '', '', '2020-08-18', '', '2020-08-06', '', '', 912121, '', '', '', '', 'yes'),
(2, 'alalla', 'a', 'a', '2020-08-19', 'female', '2020-08-11', 'NefasSilk ', 'govermental', 911, 'widow(er)', 'kolfe', '09', 'with', 'yes'),
(4, 'alazar', '', '', '2020-08-05', 'male', '2020-08-05', '', '', 9, '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `nibret`
--

DROP TABLE IF EXISTS `nibret`;
CREATE TABLE IF NOT EXISTS `nibret` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `amonut` int(100) NOT NULL,
  `isssued` int(100) DEFAULT NULL,
  `increased` int(100) DEFAULT NULL,
  `itemdesc` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nibret`
--

INSERT INTO `nibret` (`id`, `item`, `amonut`, `isssued`, `increased`, `itemdesc`) VALUES
(9, 'ala', 1, 3, 10, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `status`, `date`) VALUES
(1, 'a', 'read', '2020-07-08 13:53:02'),
(2, 'ALAZAR', 'read', '2020-07-08 13:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `id` bigint(250) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` text,
  `bdate` date NOT NULL,
  `bplace` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phonenumber` int(50) DEFAULT NULL,
  `work` varchar(50) DEFAULT NULL,
  `house` varchar(50) DEFAULT NULL,
  `mdate` date NOT NULL,
  `wstatus` varchar(50) DEFAULT NULL,
  `wdate` date DEFAULT NULL,
  `nochildren` int(50) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `mtype` varchar(50) DEFAULT NULL,
  `leavestatus` varchar(25) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `alive` varchar(25) DEFAULT NULL,
  `felloship` int(25) DEFAULT NULL,
  `levelofschool` varchar(100) DEFAULT NULL,
  `schooltype` varchar(100) DEFAULT NULL,
  `dayspermonth` varchar(55) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `addressofstreet` varchar(100) NOT NULL,
  `economic` varchar(25) DEFAULT NULL,
  `emergency` varchar(100) DEFAULT NULL,
  `emergencyphonenumber` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `fname`, `mname`, `lname`, `gender`, `bdate`, `bplace`, `address`, `phonenumber`, `work`, `house`, `mdate`, `wstatus`, `wdate`, `nochildren`, `service`, `mtype`, `leavestatus`, `photo`, `alive`, `felloship`, `levelofschool`, `schooltype`, `dayspermonth`, `age`, `addressofstreet`, `economic`, `emergency`, `emergencyphonenumber`) VALUES
(1, 'a', 'a', 'a', '', '2020-06-09', '', '', 9, '', '', '2020-06-08', '', '2020-06-23', 0, '', '', 'no', '', 'no', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(2, 'alazar', 'ayele', 'gossaye', 'female', '2020-06-09', NULL, NULL, NULL, NULL, NULL, '2020-06-09', NULL, '2020-06-09', NULL, NULL, NULL, 'no', NULL, 'yes', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(3, 'alazar', 'ayele', 'gossaye', 'male', '2020-06-11', 'addis ababa', 'KolfeKeranio', 9, 'ngo', 'owner', '2020-06-10', 'single', '2020-06-17', 0, 'half', 'marraige', 'no', NULL, 'yes', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(7, 'alazar', 'ayele', 'gossaye', 'female', '2020-06-09', '', '', 9, '', '', '2020-06-25', '', '0001-01-01', 0, 'full', '', 'no', NULL, 'no', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(10, 'alazar', 'ayele', 'gossaye', 'male', '2020-06-17', 'addis ababa', 'AddisKetema', 2, 'ngo', 'with', '2020-06-03', 'married', '2020-06-10', 0, 'full', 'changing_living_place', 'yes', 'eden bags.jpg', 'yes', 1, 'Baptized', 'social_science', 'verygood', '2', 'fff', 'nj', 'j', 'hg'),
(12, 'alazar ', '', '', 'male', '2020-08-12', '', 'Kirkos', 78, 'govermental', 'rental', '2020-08-11', '', '2020-08-03', 2, 'full', 'changing_living_place', 'no', 'a.jpg', 'yes', 4, '', 'computer_science', '', '23', '', '', '', '0911'),
(13, 'fish', 'mam', 'h', 'male', '2020-08-10', 'addis ababa', 'Bole', 5, 'student', 'rental', '2020-08-17', 'married', '2020-08-04', 2, 'none', 'New_Christian', 'no', '2019 a new mezmur collection.jpg', 'yes', 4, 'degree', 'computer_science', 'verygood', '23', 'kolfe', 'yes', 'j', '09784545');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

DROP TABLE IF EXISTS `req`;
CREATE TABLE IF NOT EXISTS `req` (
  `rq_id` int(11) NOT NULL AUTO_INCREMENT,
  `rq_laki_id` varchar(15) NOT NULL,
  `rq_des` varchar(5000) NOT NULL,
  `birr` int(100) NOT NULL,
  `statuse` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tekcbay` varchar(50) DEFAULT 'no',
  `date` date NOT NULL,
  `tekcbaydate` date DEFAULT NULL,
  PRIMARY KEY (`rq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`rq_id`, `rq_laki_id`, `rq_des`, `birr`, `statuse`, `name`, `tekcbay`, `date`, `tekcbaydate`) VALUES
(1, 'alazar', 'gh', 1200, 'ACCEPT', 'name', 'no', '2021-01-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `serial_number`
--

DROP TABLE IF EXISTS `serial_number`;
CREATE TABLE IF NOT EXISTS `serial_number` (
  `id` int(11) NOT NULL,
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `se1` varchar(12) NOT NULL,
  `se2` varchar(12) NOT NULL,
  `se3` varchar(25) NOT NULL,
  `se4` varchar(25) NOT NULL,
  `se5` varchar(25) NOT NULL,
  `se6` varchar(25) NOT NULL,
  `se7` varchar(25) NOT NULL,
  `se8` varchar(25) NOT NULL,
  `se9` varchar(25) NOT NULL,
  `se10` varchar(25) NOT NULL,
  `se11` varchar(25) NOT NULL,
  `se12` varchar(15) NOT NULL,
  `se13` varchar(15) NOT NULL,
  `se14` varchar(15) NOT NULL,
  `se15` varchar(15) NOT NULL,
  `se16` varchar(15) NOT NULL,
  `se17` varchar(15) NOT NULL,
  `se18` varchar(15) NOT NULL,
  `se19` varchar(15) NOT NULL,
  `se20` varchar(15) NOT NULL,
  `se21` varchar(15) NOT NULL,
  `se22` varchar(15) NOT NULL,
  `se23` varchar(15) NOT NULL,
  `re1` varchar(15) NOT NULL,
  `re2` varchar(15) NOT NULL,
  `re3` varchar(15) NOT NULL,
  `re4` varchar(15) NOT NULL,
  `re5` varchar(15) NOT NULL,
  `re6` varchar(15) NOT NULL,
  `re7` varchar(15) NOT NULL,
  `re8` varchar(15) NOT NULL,
  `re9` varchar(15) NOT NULL,
  `re10` varchar(15) NOT NULL,
  `re11` varchar(15) NOT NULL,
  `re12` varchar(15) NOT NULL,
  `re13` varchar(15) NOT NULL,
  `re14` varchar(15) NOT NULL,
  `re15` varchar(15) NOT NULL,
  `re16` varchar(15) NOT NULL,
  `re17` varchar(15) NOT NULL,
  `re18` varchar(15) NOT NULL,
  `re19` varchar(15) NOT NULL,
  `re20` varchar(15) NOT NULL,
  `re21` varchar(15) NOT NULL,
  `re22` varchar(15) NOT NULL,
  `re23` varchar(15) NOT NULL,
  PRIMARY KEY (`ids`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serial_number`
--

INSERT INTO `serial_number` (`id`, `ids`, `se1`, `se2`, `se3`, `se4`, `se5`, `se6`, `se7`, `se8`, `se9`, `se10`, `se11`, `se12`, `se13`, `se14`, `se15`, `se16`, `se17`, `se18`, `se19`, `se20`, `se21`, `se22`, `se23`, `re1`, `re2`, `re3`, `re4`, `re5`, `re6`, `re7`, `re8`, `re9`, `re10`, `re11`, `re12`, `re13`, `re14`, `re15`, `re16`, `re17`, `re18`, `re19`, `re20`, `re21`, `re22`, `re23`) VALUES
(1, 1, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', 'a', '', 'alazar', 'alazar', '', '', 'alazar', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', '', ''),
(1, 2, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 3, '1', '1', '1', '1', '1', '2', '2', '2', '5cdf', '5cdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 4, 'qwe', 'qwer', 'qwert', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', ''),
(5, 5, '5cdf', '5cdf', '5cdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alazar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 6, 'a1', 'a2', 'a3', 'a4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abrham', 'abrham finance ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `fellow` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `mid` bigint(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `type`, `name`, `date`, `fellow`, `phonenumber`, `mid`) VALUES
(4, 'full', 'Paster', '2020-08-12', '1', '09111', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
CREATE TABLE IF NOT EXISTS `vacancy` (
  `topic` varchar(50) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`topic`, `title`, `image`, `id`) VALUES
('wendesday', 'there is only one god', '2019 a new mezmur collection.jpg', 2),
('wendesday', 'there is only one god', 'church7.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wechi`
--

DROP TABLE IF EXISTS `wechi`;
CREATE TABLE IF NOT EXISTS `wechi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `yetekefay_sm` int(50) DEFAULT NULL,
  `yeagelglot_zerf` varchar(100) NOT NULL,
  `fdate` date NOT NULL,
  `ldate` date NOT NULL,
  `tesatafi_bzat` int(50) NOT NULL,
  `andu_waga` int(50) NOT NULL,
  `teklala_waga` int(50) NOT NULL,
  `asteyayet` varchar(5000) NOT NULL,
  `tewekay_one` varchar(50) NOT NULL,
  `tewekay_fone` varchar(50) NOT NULL,
  `tewekay_two` varchar(50) NOT NULL,
  `tewekay_ftwo` varchar(50) NOT NULL,
  `tewekay_three` varchar(50) NOT NULL,
  `tewekay_fthree` varchar(50) NOT NULL,
  `agelglot_drshaone` varchar(50) NOT NULL,
  `agelglot_drshatwo` varchar(50) NOT NULL,
  `agelglot_drshathree` varchar(50) NOT NULL,
  `restore` varchar(25) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  KEY `yetekefay_sm` (`yetekefay_sm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deptlist`
--
ALTER TABLE `deptlist`
  ADD CONSTRAINT `deptlist_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `department` (`id`);

--
-- Constraints for table `gift`
--
ALTER TABLE `gift`
  ADD CONSTRAINT `gift_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`);

--
-- Constraints for table `serial_number`
--
ALTER TABLE `serial_number`
  ADD CONSTRAINT `serial_number_ibfk_1` FOREIGN KEY (`id`) REFERENCES `goods` (`id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`);

--
-- Constraints for table `wechi`
--
ALTER TABLE `wechi`
  ADD CONSTRAINT `wechi_ibfk_1` FOREIGN KEY (`yetekefay_sm`) REFERENCES `req` (`rq_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
