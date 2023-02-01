-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: snv
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `links` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (5,'YouTube','a','      h                    ','h'),(3,'YouTube','a','       q                  ','n');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admintable` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(55) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admintable`
--

LOCK TABLES `admintable` WRITE;
/*!40000 ALTER TABLE `admintable` DISABLE KEYS */;
INSERT INTO `admintable` VALUES (1,'alazar','alazar');
/*!40000 ALTER TABLE `admintable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admintables`
--

DROP TABLE IF EXISTS `admintables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admintables` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admintables`
--

LOCK TABLES `admintables` WRITE;
/*!40000 ALTER TABLE `admintables` DISABLE KEYS */;
INSERT INTO `admintables` VALUES (6,'alazarayelegossaye','ictethiopia@snv.org','alazar','admin');
/*!40000 ALTER TABLE `admintables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bap`
--

DROP TABLE IF EXISTS `bap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bap` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bap`
--

LOCK TABLES `bap` WRITE;
/*!40000 ALTER TABLE `bap` DISABLE KEYS */;
INSERT INTO `bap` VALUES (2,'a ','g','h','male','2020-07-26','2020-07-26','KolfeKeranio','5','','g','',' b','',''),(3,' ','','','','0000-00-00','0000-00-00','','','','','','','',''),(4,'v ','n','k','male','2020-07-26','2020-07-28','Yeka','5','','h','','','8',''),(5,'ab ','ba','bb','male','2020-07-26','2020-07-27','AddisKetema','0911223344','','tero','dagi','ase','0922554411',''),(12,'abebe ','kebebe','dad','male','2020-07-29','2020-07-29','NefasSilk ','0977225588','student','gad','far','ff','0977885544','BAPTISM'),(13,'fish ','mam','a','female','2020-07-30','2020-07-29','Kirkos','+1251387279356','student','kol','as','op','05','BAPTISM');
/*!40000 ALTER TABLE `bap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child`
--

LOCK TABLES `child` WRITE;
/*!40000 ALTER TABLE `child` DISABLE KEYS */;
INSERT INTO `child` VALUES (5,'a ','s','d','male','2020-07-15','sjjg','Gullele','465',3,' 7','d','5'),(6,'abebe ','kebede','zenebe','male','2020-07-29','bigg','NefasSilk ','0911223344',11,' 5','tan','09887744');
/*!40000 ALTER TABLE `child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'n2','n2',''),(2,'n1','n1','');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deptlist`
--

DROP TABLE IF EXISTS `deptlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deptlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depid` (`depid`),
  CONSTRAINT `deptlist_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deptlist`
--

LOCK TABLES `deptlist` WRITE;
/*!40000 ALTER TABLE `deptlist` DISABLE KEYS */;
INSERT INTO `deptlist` VALUES (1,1,'ba','ba corse','a'),(2,1,'jornalism','journalism','b'),(3,2,'a','a','a');
/*!40000 ALTER TABLE `deptlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver`
--

LOCK TABLES `driver` WRITE;
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
INSERT INTO `driver` VALUES (NULL,'v8','pick_up',100,'2019-11-15','2019-11-17','jhon',12500,'JIMA','03:30:00',NULL,NULL,1,'AA','03:00:00',12000,2,'1448','liway','no','2019-11-20',NULL,'ACCEPTED','alazar'),(NULL,'toyota','pick_up',100,'2019-11-22','2019-11-26','mola',12500,'JIMA','03:30:00',NULL,NULL,2,'AA','03:00:00',12000,6,'2056','nbpe+','no','2019-11-30',NULL,'DECLINE','alazar'),(NULL,'toyota','pick_up',100,'2019-11-22','2019-11-26','jhon',12500,'JIMA','03:30:00',NULL,NULL,3,'AA','03:00:00',12000,6,'2056','liway','no','2019-12-02',NULL,'ACCEPTED','atr'),(NULL,'toyota','pick_up',100,'2019-11-22','2019-11-25','samson',23300,'JIMA','03:30:00',NULL,NULL,4,'AA','03:00:00',23000,2,'1245','nbpe+','no','2019-11-30',NULL,'ACCEPTED','alazar'),(NULL,'toyota','pick_up',100,'2019-11-24','2019-11-25','mola',15500,'Mekelle','03:30:00',NULL,NULL,5,'AA','03:00:00',15000,2,'2011','IT','no','2019-11-28',NULL,'ACCEPTED','Jerry'),(NULL,'v8','pick_up',173,'2019-11-13','2019-12-14','tariku',26500,'JIMA','11:00:00',NULL,NULL,6,'AA','09:00:00',23000,6,'2001','country','no','2019-12-25',NULL,'ACCEPTED','ato abrham');
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculity`
--

DROP TABLE IF EXISTS `faculity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desgination` varchar(25) NOT NULL,
  `description` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculity`
--

LOCK TABLES `faculity` WRITE;
/*!40000 ALTER TABLE `faculity` DISABLE KEYS */;
INSERT INTO `faculity` VALUES (7,'alazarayele47@gmail.com','m','n','',0),(15,'alazarayele47@gmail.com','m','n','2019 a new mezmur collection.jpg',0);
/*!40000 ALTER TABLE `faculity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `family` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `family`
--

LOCK TABLES `family` WRITE;
/*!40000 ALTER TABLE `family` DISABLE KEYS */;
INSERT INTO `family` VALUES (3,'fish','mam','','b','','','','f','','h','','','k','l','a.jpg');
/*!40000 ALTER TABLE `family` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `felloship`
--

DROP TABLE IF EXISTS `felloship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `felloship` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `felloship`
--

LOCK TABLES `felloship` WRITE;
/*!40000 ALTER TABLE `felloship` DISABLE KEYS */;
INSERT INTO `felloship` VALUES (4,'alazar ayele','a',6,'saturday ','09:00','church','teenagers'),(2,'none','none',0,'none','none','none','none');
/*!40000 ALTER TABLE `felloship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carmodel` varchar(50) NOT NULL,
  `consumptionfuel` int(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fuelgallon` double DEFAULT NULL,
  `fuelprice` double DEFAULT NULL,
  `platenumber` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuel`
--

LOCK TABLES `fuel` WRITE;
/*!40000 ALTER TABLE `fuel` DISABLE KEYS */;
INSERT INTO `fuel` VALUES (2,'v8',NULL,'2019-10-12',20,12,'1448');
/*!40000 ALTER TABLE `fuel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gift` (
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
  KEY `mid` (`mid`),
  CONSTRAINT `gift_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift`
--

LOCK TABLES `gift` WRITE;
/*!40000 ALTER TABLE `gift` DISABLE KEYS */;
INSERT INTO `gift` VALUES (11,3,'','','','december','','','','','may','','','','no'),(12,2,'','','','december','','','','','','','','','no');
/*!40000 ALTER TABLE `gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `itemdescription` varchar(50) NOT NULL,
  `initialqunatity` int(55) NOT NULL,
  `issuedamount` int(50) NOT NULL,
  `balance` int(55) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES ('vvv',6,2,2,1),('z',4,2,0,2),('books',100,52,0,3),('guest chair',15,12,0,4),('guest chair',3,2,0,5),('guest chair',30,12,0,6);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mer`
--

DROP TABLE IF EXISTS `mer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mer` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mer`
--

LOCK TABLES `mer` WRITE;
/*!40000 ALTER TABLE `mer` DISABLE KEYS */;
INSERT INTO `mer` VALUES (1,'q','q','q','e','w','x',2,4,'a',' f',2,3,'0000-00-00','FINISHED'),(2,'a','','','','','',0,0,'',' ',0,0,'0000-00-00','FINISHED'),(4,'d','','','','','',0,0,'',' ',0,0,'0000-00-00','FINISHED'),(5,'d','','','','','',0,0,'',' ',0,0,'0000-00-00','FINISHED'),(6,'f','','','','','',0,0,'',' ',0,0,'0000-00-00','FINISHED'),(7,'sa','as','aa','qw','wq','qq',2,3,'a',' a',3,3,'0000-00-00','FINISHED'),(13,'qw','wq','qq','df','ds','fd',1,4,'a',' d',1,5,'2020-07-24','FINISHED'),(15,'a','b','h','t','b','h',23,23,'kolfe',' mul',967,9,'2020-08-05','FINISHED');
/*!40000 ALTER TABLE `mer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newbornagiann`
--

DROP TABLE IF EXISTS `newbornagiann`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newbornagiann` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newbornagiann`
--

LOCK TABLES `newbornagiann` WRITE;
/*!40000 ALTER TABLE `newbornagiann` DISABLE KEYS */;
INSERT INTO `newbornagiann` VALUES (1,'alazar','','','2020-08-18','','2020-08-06','','',912121,'','','','','yes'),(2,'alalla','a','a','2020-08-19','female','2020-08-11','NefasSilk ','govermental',911,'widow(er)','kolfe','09','with','yes'),(4,'alazar','','','2020-08-05','male','2020-08-05','','',9,'','','','','no');
/*!40000 ALTER TABLE `newbornagiann` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nibret`
--

DROP TABLE IF EXISTS `nibret`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nibret` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `amonut` int(100) NOT NULL,
  `isssued` int(100) DEFAULT NULL,
  `increased` int(100) DEFAULT NULL,
  `balance` int(100) DEFAULT NULL,
  `itemdesc` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nibret`
--

LOCK TABLES `nibret` WRITE;
/*!40000 ALTER TABLE `nibret` DISABLE KEYS */;
/*!40000 ALTER TABLE `nibret` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (1,'a','read','2020-07-08 13:53:02'),(2,'ALAZAR','read','2020-07-08 13:53:13');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (1,'a','a','a','','2020-06-09','','',9,'','','2020-06-08','','2020-06-23',0,'','','no','','no',1,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),(2,'alazar','ayele','gossaye','female','2020-06-09',NULL,NULL,NULL,NULL,NULL,'2020-06-09',NULL,'2020-06-09',NULL,NULL,NULL,'no',NULL,'yes',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),(3,'alazar','ayele','gossaye','male','2020-06-11','addis ababa','KolfeKeranio',9,'ngo','owner','2020-06-10','single','2020-06-17',0,'half','marraige','no',NULL,'yes',1,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),(7,'alazar','ayele','gossaye','female','2020-06-09','','',9,'','','2020-06-25','','0001-01-01',0,'full','','no',NULL,'no',1,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),(10,'alazar','ayele','gossaye','male','2020-06-17','addis ababa','AddisKetema',2,'ngo','with','2020-06-03','married','2020-06-10',0,'full','changing_living_place','yes','eden bags.jpg','yes',1,'Baptized','social_science','verygood','2','fff','nj','j','hg'),(11,'fish','ayele','gossaye','male','2020-07-01','addis ababa','Bole',456,'Privateowner','owner','2020-07-08','married','2020-07-01',9,'half','Chaning_church_membership','no','unnamed.jpg','yes',1,'is_not_membership_of_any_church','sport','good','2','kolfe','nj','j','0911305787'),(12,'alazar ','','','male','2020-08-12','','Kirkos',78,'govermental','rental','2020-08-11','','2020-08-03',2,'full','changing_living_place','no','a.jpg','yes',4,'','computer_science','','23','','','','0911');
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `req`
--

DROP TABLE IF EXISTS `req`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `req` (
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `req`
--

LOCK TABLES `req` WRITE;
/*!40000 ALTER TABLE `req` DISABLE KEYS */;
/*!40000 ALTER TABLE `req` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serial_number`
--

DROP TABLE IF EXISTS `serial_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serial_number` (
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
  KEY `id` (`id`),
  CONSTRAINT `serial_number_ibfk_1` FOREIGN KEY (`id`) REFERENCES `goods` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serial_number`
--

LOCK TABLES `serial_number` WRITE;
/*!40000 ALTER TABLE `serial_number` DISABLE KEYS */;
INSERT INTO `serial_number` VALUES (1,1,'a','a','','','','','','','','','','','','','','','','','','','','','','alazar','a','','alazar','alazar','','','alazar','','','','','','','','','','','alazar','','','',''),(1,2,'a','a','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(3,3,'1','1','1','1','1','2','2','2','5cdf','5cdf','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(4,4,'qwe','qwer','qwert','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','alazar','','',''),(5,5,'5cdf','5cdf','5cdf','','','','','','','','','','','','','','','','','','','','','alazar','','','','','','','','','','','','','','','','','','','','','',''),(6,6,'a1','a2','a3','a4','','','','','','','','','','','','','','','','','','','','abrham','abrham finance ','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `serial_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `fellow` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `mid` bigint(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  CONSTRAINT `service_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `records` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (4,'full','Paster','2020-08-12','1','09111',3);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacancy` (
  `topic` varchar(50) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacancy`
--

LOCK TABLES `vacancy` WRITE;
/*!40000 ALTER TABLE `vacancy` DISABLE KEYS */;
INSERT INTO `vacancy` VALUES ('wendesday','there is only one god','2019 a new mezmur collection.jpg',2),('wendesday','there is only one god','church7.jpg',3);
/*!40000 ALTER TABLE `vacancy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wechi`
--

DROP TABLE IF EXISTS `wechi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wechi` (
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
  KEY `yetekefay_sm` (`yetekefay_sm`),
  CONSTRAINT `wechi_ibfk_1` FOREIGN KEY (`yetekefay_sm`) REFERENCES `req` (`rq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wechi`
--

LOCK TABLES `wechi` WRITE;
/*!40000 ALTER TABLE `wechi` DISABLE KEYS */;
/*!40000 ALTER TABLE `wechi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-18  6:28:05
