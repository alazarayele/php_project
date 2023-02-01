DROP TABLE about;

CREATE TABLE `about` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `links` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO about VALUES("5","YouTube","a","      h                    ","h");
INSERT INTO about VALUES("3","YouTube","a","       q                  ","n");



DROP TABLE admintable;

CREATE TABLE `admintable` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(55) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO admintable VALUES("1","alazar","alazar");



DROP TABLE admintables;

CREATE TABLE `admintables` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO admintables VALUES("6","alazarayelegossaye","ictethiopia@snv.org","alazar","admin");



DROP TABLE bap;

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

INSERT INTO bap VALUES("2","a ","g","h","male","2020-07-26","2020-07-26","KolfeKeranio","5","","g",""," b","","");
INSERT INTO bap VALUES("3"," ","","","","0000-00-00","0000-00-00","","","","","","","","");
INSERT INTO bap VALUES("4","v ","n","k","male","2020-07-26","2020-07-28","Yeka","5","","h","","","8","");
INSERT INTO bap VALUES("5","ab ","ba","bb","male","2020-07-26","2020-07-27","AddisKetema","0911223344","","tero","dagi","ase","0922554411","");
INSERT INTO bap VALUES("12","abebe ","kebebe","dad","male","2020-07-29","2020-07-29","NefasSilk ","0977225588","student","gad","far","ff","0977885544","BAPTISM");
INSERT INTO bap VALUES("13","fish ","mam","a","female","2020-07-30","2020-07-29","Kirkos","+1251387279356","student","kol","as","op","05","BAPTISM");



DROP TABLE child;

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

INSERT INTO child VALUES("5","a ","s","d","male","2020-07-15","sjjg","Gullele","465","3"," 7","d","5");
INSERT INTO child VALUES("6","abebe ","kebede","zenebe","male","2020-07-29","bigg","NefasSilk ","0911223344","11"," 5","tan","09887744");



DROP TABLE department;

CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO department VALUES("1","n2","n2","");
INSERT INTO department VALUES("2","n1","n1","");



DROP TABLE deptlist;

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

INSERT INTO deptlist VALUES("1","1","ba","ba corse","a");
INSERT INTO deptlist VALUES("2","1","jornalism","journalism","b");
INSERT INTO deptlist VALUES("3","2","a","a","a");



DROP TABLE driver;

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

INSERT INTO driver VALUES("","v8","pick_up","100","2019-11-15","2019-11-17","jhon","12500","JIMA","03:30:00","","","1","AA","03:00:00","12000","2","1448","liway","no","2019-11-20","","ACCEPTED","alazar");
INSERT INTO driver VALUES("","toyota","pick_up","100","2019-11-22","2019-11-26","mola","12500","JIMA","03:30:00","","","2","AA","03:00:00","12000","6","2056","nbpe+","no","2019-11-30","","DECLINE","alazar");
INSERT INTO driver VALUES("","toyota","pick_up","100","2019-11-22","2019-11-26","jhon","12500","JIMA","03:30:00","","","3","AA","03:00:00","12000","6","2056","liway","no","2019-12-02","","ACCEPTED","atr");
INSERT INTO driver VALUES("","toyota","pick_up","100","2019-11-22","2019-11-25","samson","23300","JIMA","03:30:00","","","4","AA","03:00:00","23000","2","1245","nbpe+","no","2019-11-30","","ACCEPTED","alazar");
INSERT INTO driver VALUES("","toyota","pick_up","100","2019-11-24","2019-11-25","mola","15500","Mekelle","03:30:00","","","5","AA","03:00:00","15000","2","2011","IT","no","2019-11-28","","ACCEPTED","Jerry");
INSERT INTO driver VALUES("","v8","pick_up","173","2019-11-13","2019-12-14","tariku","26500","JIMA","11:00:00","","","6","AA","09:00:00","23000","6","2001","country","no","2019-12-25","","ACCEPTED","ato abrham");



DROP TABLE faculity;

CREATE TABLE `faculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desgination` varchar(25) NOT NULL,
  `description` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO faculity VALUES("7","alazarayele47@gmail.com","m","n","","0");
INSERT INTO faculity VALUES("15","alazarayele47@gmail.com","m","n","2019 a new mezmur collection.jpg","0");



DROP TABLE family;

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

INSERT INTO family VALUES("3","fish","mam","","b","","","","f","","h","","","k","l","a.jpg");



DROP TABLE felloship;

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

INSERT INTO felloship VALUES("4","alazar ayele","a","6","saturday ","09:00","church","teenagers");
INSERT INTO felloship VALUES("2","none","none","0","none","none","none","none");



DROP TABLE fuel;

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

INSERT INTO fuel VALUES("2","v8","","2019-10-12","20","12","1448");



DROP TABLE gift;

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

INSERT INTO gift VALUES("11","3","","","","december","","","","","may","","","","no");
INSERT INTO gift VALUES("12","2","","","","december","","","","","","","","","no");



DROP TABLE goods;

CREATE TABLE `goods` (
  `itemdescription` varchar(50) NOT NULL,
  `initialqunatity` int(55) NOT NULL,
  `issuedamount` int(50) NOT NULL,
  `balance` int(55) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO goods VALUES("vvv","6","2","2","1");
INSERT INTO goods VALUES("z","4","2","0","2");
INSERT INTO goods VALUES("books","100","52","0","3");
INSERT INTO goods VALUES("guest chair","15","12","0","4");
INSERT INTO goods VALUES("guest chair","3","2","0","5");
INSERT INTO goods VALUES("guest chair","30","12","0","6");



DROP TABLE mer;

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

INSERT INTO mer VALUES("1","q","q","q","e","w","x","2","4","a"," f","2","3","0000-00-00","FINISHED");
INSERT INTO mer VALUES("2","a","","","","","","0","0",""," ","0","0","0000-00-00","FINISHED");
INSERT INTO mer VALUES("4","d","","","","","","0","0",""," ","0","0","0000-00-00","FINISHED");
INSERT INTO mer VALUES("5","d","","","","","","0","0",""," ","0","0","0000-00-00","FINISHED");
INSERT INTO mer VALUES("6","f","","","","","","0","0",""," ","0","0","0000-00-00","FINISHED");
INSERT INTO mer VALUES("7","sa","as","aa","qw","wq","qq","2","3","a"," a","3","3","0000-00-00","FINISHED");
INSERT INTO mer VALUES("13","qw","wq","qq","df","ds","fd","1","4","a"," d","1","5","2020-07-24","FINISHED");
INSERT INTO mer VALUES("15","a","b","h","t","b","h","23","23","kolfe"," mul","967","9","2020-08-05","FINISHED");



DROP TABLE newbornagiann;

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

INSERT INTO newbornagiann VALUES("1","alazar","","","2020-08-18","","2020-08-06","","","912121","","","","","yes");
INSERT INTO newbornagiann VALUES("2","alalla","a","a","2020-08-19","female","2020-08-11","NefasSilk ","govermental","911","widow(er)","kolfe","09","with","yes");
INSERT INTO newbornagiann VALUES("4","alazar","","","2020-08-05","male","2020-08-05","","","9","","","","","no");



DROP TABLE nibret;

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




DROP TABLE notification;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO notification VALUES("1","a","read","2020-07-08 13:53:02");
INSERT INTO notification VALUES("2","ALAZAR","read","2020-07-08 13:53:13");



DROP TABLE records;

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

INSERT INTO records VALUES("1","a","a","a","","2020-06-09","","","9","","","2020-06-08","","2020-06-23","0","","","no","","no","1","","","","","","","","");
INSERT INTO records VALUES("2","alazar","ayele","gossaye","female","2020-06-09","","","","","","2020-06-09","","2020-06-09","","","","no","","yes","","","","","","","","","");
INSERT INTO records VALUES("3","alazar","ayele","gossaye","male","2020-06-11","addis ababa","KolfeKeranio","9","ngo","owner","2020-06-10","single","2020-06-17","0","half","marraige","no","","yes","1","","","","","","","","");
INSERT INTO records VALUES("7","alazar","ayele","gossaye","female","2020-06-09","","","9","","","2020-06-25","","0001-01-01","0","full","","no","","no","1","","","","","","","","");
INSERT INTO records VALUES("10","alazar","ayele","gossaye","male","2020-06-17","addis ababa","AddisKetema","2","ngo","with","2020-06-03","married","2020-06-10","0","full","changing_living_place","yes","eden bags.jpg","yes","1","Baptized","social_science","verygood","2","fff","nj","j","hg");
INSERT INTO records VALUES("11","fish","ayele","gossaye","male","2020-07-01","addis ababa","Bole","456","Privateowner","owner","2020-07-08","married","2020-07-01","9","half","Chaning_church_membership","no","unnamed.jpg","yes","1","is_not_membership_of_any_church","sport","good","2","kolfe","nj","j","0911305787");
INSERT INTO records VALUES("12","alazar ","","","male","2020-08-12","","Kirkos","78","govermental","rental","2020-08-11","","2020-08-03","2","full","changing_living_place","no","a.jpg","yes","4","","computer_science","","23","","","","0911");



DROP TABLE req;

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




DROP TABLE serial_number;

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

INSERT INTO serial_number VALUES("1","1","a","a","","","","","","","","","","","","","","","","","","","","","","alazar","a","","alazar","alazar","","","alazar","","","","","","","","","","","alazar","","","","");
INSERT INTO serial_number VALUES("1","2","a","a","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO serial_number VALUES("3","3","1","1","1","1","1","2","2","2","5cdf","5cdf","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO serial_number VALUES("4","4","qwe","qwer","qwert","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","alazar","","","");
INSERT INTO serial_number VALUES("5","5","5cdf","5cdf","5cdf","","","","","","","","","","","","","","","","","","","","","alazar","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO serial_number VALUES("6","6","a1","a2","a3","a4","","","","","","","","","","","","","","","","","","","","abrham","abrham finance ","","","","","","","","","","","","","","","","","","","","","");



DROP TABLE service;

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

INSERT INTO service VALUES("4","full","Paster","2020-08-12","1","09111","3");



DROP TABLE vacancy;

CREATE TABLE `vacancy` (
  `topic` varchar(50) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO vacancy VALUES("wendesday","there is only one god","2019 a new mezmur collection.jpg","2");
INSERT INTO vacancy VALUES("wendesday","there is only one god","church7.jpg","3");



DROP TABLE wechi;

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




