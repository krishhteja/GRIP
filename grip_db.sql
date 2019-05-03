-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2019 at 08:49 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grip`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `coursecode` varchar(5) NOT NULL,
  `id` varchar(12) NOT NULL,
  `curyear` varchar(5) NOT NULL,
  `section` varchar(3) NOT NULL,
  `IyIsmar` varchar(5) NOT NULL,
  `IyIsper` varchar(7) NOT NULL,
  `IyIsbck` varchar(3) NOT NULL,
  `IyIIsmar` varchar(5) NOT NULL,
  `IyIIsper` varchar(7) NOT NULL,
  `IyIIsbck` varchar(3) NOT NULL,
  `IIyIsmar` varchar(5) NOT NULL,
  `IIyIsper` varchar(7) NOT NULL,
  `IIyIsbck` varchar(3) NOT NULL,
  `IIyIIsmar` varchar(5) NOT NULL,
  `IIyIIsper` varchar(7) NOT NULL,
  `IIyIIsbck` varchar(3) NOT NULL,
  `IIIyIsmar` varchar(5) NOT NULL,
  `IIIyIsper` varchar(7) NOT NULL,
  `IIIyIsbck` varchar(3) NOT NULL,
  `IIIyIIsmar` varchar(5) NOT NULL,
  `IIIyIIsper` varchar(7) NOT NULL,
  `IIIyIIsbck` varchar(3) NOT NULL,
  `IVyIsmar` varchar(5) NOT NULL,
  `IVyIsper` varchar(7) NOT NULL,
  `IVyIsbck` varchar(3) NOT NULL,
  `IVyIIsmar` varchar(5) NOT NULL,
  `IVyIIsper` varchar(7) NOT NULL,
  `IVyIIsbck` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `academicyear`
--

CREATE TABLE `academicyear` (
  `coursecode` varchar(3) DEFAULT NULL,
  `id` varchar(10) NOT NULL DEFAULT '',
  `curyear` int(3) DEFAULT NULL,
  `section` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` varchar(12) NOT NULL DEFAULT '',
  `subcode` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `dept` varchar(8) NOT NULL,
  `year` varchar(6) NOT NULL,
  `section` varchar(5) NOT NULL,
  `updatedby` varchar(72) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_reference`
--

CREATE TABLE `attendance_reference` (
  `subject` varchar(55) NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `count_mins` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `year` varchar(5) NOT NULL,
  `section` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `faculty` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attenmembers`
--

CREATE TABLE `attenmembers` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `salt` varchar(150) NOT NULL,
  `encemail` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ACCNO` int(11) DEFAULT NULL,
  `ACCNO_to` int(11) DEFAULT NULL,
  `TITLE` varchar(200) DEFAULT NULL,
  `AUTH1` varchar(100) DEFAULT NULL,
  `AUTH2` varchar(100) DEFAULT NULL,
  `AUTH3` varchar(100) DEFAULT NULL,
  `PUBLISHER` varchar(100) DEFAULT NULL,
  `DEPT1` varchar(50) DEFAULT NULL,
  `DEPT2` varchar(50) DEFAULT NULL,
  `DEPT3` varchar(50) DEFAULT NULL,
  `DEPT4` varchar(50) DEFAULT NULL,
  `DEPT5` varchar(50) DEFAULT NULL,
  `SUBJ1` varchar(100) DEFAULT NULL,
  `SUBJ2` varchar(100) DEFAULT NULL,
  `SUBJ3` varchar(100) DEFAULT NULL,
  `SUBJ4` varchar(100) DEFAULT NULL,
  `SUBJ5` varchar(100) DEFAULT NULL,
  `ISSUEDATE` datetime DEFAULT NULL,
  `RETURNDATE` datetime DEFAULT NULL,
  `YEAR` varchar(50) DEFAULT NULL,
  `COST` int(7) DEFAULT NULL,
  `CODE` varchar(50) DEFAULT NULL,
  `SHELF` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `RESERVATION` varchar(50) DEFAULT NULL,
  `SUBTITLE` varchar(50) DEFAULT NULL,
  `EDITION` varchar(50) DEFAULT NULL,
  `PLACE` varchar(50) DEFAULT NULL,
  `PAGES` int(7) DEFAULT NULL,
  `SERIES` varchar(50) DEFAULT NULL,
  `VOLUME` varchar(50) DEFAULT NULL,
  `ISBN` varchar(100) DEFAULT NULL,
  `SOURCE` varchar(50) DEFAULT NULL,
  `BILLNO` varchar(50) DEFAULT NULL,
  `BILLDATE` varchar(50) DEFAULT NULL,
  `FOPRICE` varchar(50) DEFAULT NULL,
  `WITHDRAWL` varchar(50) DEFAULT NULL,
  `COPIES` int(5) DEFAULT NULL,
  `TYPE` varchar(50) DEFAULT NULL,
  `REMARKS` varchar(50) DEFAULT NULL,
  `CALLNO` varchar(50) DEFAULT NULL,
  `YROFPUB` varchar(50) DEFAULT NULL,
  `FINYEAR` varchar(50) DEFAULT NULL,
  `VERIFIED` varchar(50) DEFAULT NULL,
  `VERDATE` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booksearch`
--

CREATE TABLE `booksearch` (
  `ACCNO` int(7) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `copies` int(5) DEFAULT NULL,
  `auth` varchar(150) DEFAULT NULL,
  `subj` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `pages` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `btech1`
--

CREATE TABLE `btech1` (
  `rollno` varchar(10) DEFAULT NULL,
  `name` varchar(43) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `section` varchar(2) DEFAULT NULL,
  `rank` varchar(16) DEFAULT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `cat` varchar(5) DEFAULT NULL,
  `fname` varchar(41) DEFAULT NULL,
  `gen` varchar(2) DEFAULT NULL,
  `phone1` varchar(12) DEFAULT NULL,
  `phone2` varchar(16) DEFAULT NULL,
  `phone3` varchar(12) DEFAULT NULL,
  `inter` decimal(18,14) DEFAULT NULL,
  `cbse` varchar(6) DEFAULT NULL,
  `ssc` varchar(18) DEFAULT NULL,
  `secondarysch` varchar(28) DEFAULT NULL,
  `mail` varchar(37) DEFAULT NULL,
  `address1` varchar(38) DEFAULT NULL,
  `address2` varchar(47) DEFAULT NULL,
  `street` varchar(38) DEFAULT NULL,
  `area` varchar(24) DEFAULT NULL,
  `city` varchar(18) DEFAULT NULL,
  `pin` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(12) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `mocc` varchar(15) NOT NULL,
  `hno` varchar(30) NOT NULL,
  `street` varchar(40) NOT NULL,
  `village` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `pstreet` varchar(40) NOT NULL,
  `pvillage` varchar(40) NOT NULL,
  `pdistrict` varchar(40) NOT NULL,
  `pstate` varchar(30) NOT NULL,
  `ppin` varchar(10) NOT NULL,
  `phone1` varchar(14) NOT NULL,
  `phone2` varchar(14) NOT NULL,
  `phone3` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE `cse` (
  `A` varchar(10) DEFAULT NULL,
  `coursecode` varchar(3) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `curyear` int(3) DEFAULT NULL,
  `section` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` varchar(15) NOT NULL,
  `event` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `sub` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `mondate` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examlogin`
--

CREATE TABLE `examlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `salt` varchar(150) NOT NULL,
  `encemail` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facgen`
--

CREATE TABLE `facgen` (
  `id` varchar(10) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gen` varchar(6) NOT NULL,
  `sname` varchar(60) NOT NULL,
  `fatname` varchar(50) NOT NULL,
  `hno` varchar(30) NOT NULL,
  `street` varchar(40) NOT NULL,
  `village` varchar(40) NOT NULL,
  `dist` varchar(40) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facmembers`
--

CREATE TABLE `facmembers` (
  `id` int(5) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `encemail` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facprof`
--

CREATE TABLE `facprof` (
  `id` varchar(10) NOT NULL,
  `qual` varchar(75) NOT NULL,
  `desig` varchar(30) NOT NULL,
  `pp1` varchar(50) NOT NULL,
  `pp2` varchar(50) NOT NULL,
  `pp3` varchar(505) NOT NULL,
  `pp4` varchar(50) NOT NULL,
  `pp5` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `acayear` varchar(15) NOT NULL,
  `tutfee` varchar(9) NOT NULL,
  `trans` varchar(9) NOT NULL,
  `lib` varchar(9) NOT NULL,
  `univ` varchar(9) NOT NULL,
  `other` varchar(9) NOT NULL,
  `special` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `rollno` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `DEPT` varchar(50) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `CATEGORY` varchar(100) DEFAULT NULL,
  `YEAR` int(5) DEFAULT NULL,
  `TUTIONFEE` int(7) DEFAULT NULL,
  `tf1` int(7) DEFAULT NULL,
  `tf2` int(7) DEFAULT NULL,
  `tf3` int(7) DEFAULT NULL,
  `tf4` int(7) DEFAULT NULL,
  `Reimbursement` int(7) DEFAULT NULL,
  `rf1` int(7) DEFAULT NULL,
  `rf2` int(7) DEFAULT NULL,
  `rf3` int(7) DEFAULT NULL,
  `rf4` int(7) DEFAULT NULL,
  `BUSFEE` int(7) DEFAULT NULL,
  `bf1` int(7) DEFAULT NULL,
  `bf2` int(7) DEFAULT NULL,
  `bf3` int(7) DEFAULT NULL,
  `bf4` int(7) DEFAULT NULL,
  `LIBRARYFEE` int(7) DEFAULT NULL,
  `lf1` int(7) DEFAULT NULL,
  `lf2` int(7) DEFAULT NULL,
  `lf3` int(7) DEFAULT NULL,
  `lf4` int(7) DEFAULT NULL,
  `UNIVERSITYFEE` int(7) DEFAULT NULL,
  `uf1` int(7) DEFAULT NULL,
  `uf2` int(7) DEFAULT NULL,
  `uf3` int(7) DEFAULT NULL,
  `uf4` int(7) DEFAULT NULL,
  `OTHERFEE` int(7) DEFAULT NULL,
  `of1` int(7) DEFAULT NULL,
  `of2` int(7) DEFAULT NULL,
  `of3` int(7) DEFAULT NULL,
  `of4` int(7) DEFAULT NULL,
  `SPECIALFEE` int(7) DEFAULT NULL,
  `sf1` int(7) DEFAULT NULL,
  `sf2` int(7) DEFAULT NULL,
  `sf3` int(7) DEFAULT NULL,
  `sf4` int(7) DEFAULT NULL,
  `TotalFee` int(7) DEFAULT NULL,
  `ttl1` int(7) DEFAULT NULL,
  `ttl2` int(7) DEFAULT NULL,
  `ttl3` int(7) DEFAULT NULL,
  `ttl4` int(7) DEFAULT NULL,
  `RECEIPTNO` varchar(50) DEFAULT NULL,
  `rno1` varchar(100) DEFAULT NULL,
  `rno2` varchar(100) DEFAULT NULL,
  `rno3` varchar(100) DEFAULT NULL,
  `rno4` varchar(100) DEFAULT NULL,
  `RECEIPTDATE` varchar(100) DEFAULT NULL,
  `rdt1` varchar(100) DEFAULT NULL,
  `rdt2` varchar(100) DEFAULT NULL,
  `rdt3` varchar(100) DEFAULT NULL,
  `rdt4` varchar(100) DEFAULT NULL,
  `AppliTokenNo` varchar(100) DEFAULT NULL,
  `Caste` varchar(50) DEFAULT NULL,
  `Inst1_yr1` int(7) DEFAULT NULL,
  `DtPr1_yr1` varchar(100) DEFAULT NULL,
  `Inst2_yr1` int(7) DEFAULT NULL,
  `DtPr2_yr1` varchar(100) DEFAULT NULL,
  `Inst3_yr1` int(7) DEFAULT NULL,
  `DtPr3_yr1` varchar(100) DEFAULT NULL,
  `Inst4_yr1` int(7) DEFAULT NULL,
  `DtPr4_yr1` varchar(100) DEFAULT NULL,
  `SchSpFee_yr1` int(7) DEFAULT NULL,
  `SchOthFee_yr1` int(7) DEFAULT NULL,
  `SchTtlFee_yr1` int(9) DEFAULT NULL,
  `Inst1_yr2` int(7) DEFAULT NULL,
  `DtPr1_yr2` varchar(100) DEFAULT NULL,
  `Inst2_yr2` int(7) DEFAULT NULL,
  `DtPr2_yr2` varchar(100) DEFAULT NULL,
  `Inst3_yr2` int(7) DEFAULT NULL,
  `DtPr3_yr2` varchar(100) DEFAULT NULL,
  `Inst4_yr2` int(7) DEFAULT NULL,
  `DtPr4_yr2` varchar(100) DEFAULT NULL,
  `SchSpFee_yr2` int(7) DEFAULT NULL,
  `SchOthFee_yr2` int(7) DEFAULT NULL,
  `SchTtlFee_yr2` int(9) DEFAULT NULL,
  `Inst1_yr3` int(7) DEFAULT NULL,
  `DtPr1_yr3` varchar(100) DEFAULT NULL,
  `Inst2_yr3` int(7) DEFAULT NULL,
  `DtPr2_yr3` varchar(100) DEFAULT NULL,
  `Inst3_yr3` int(7) DEFAULT NULL,
  `DtPr3_yr3` varchar(100) DEFAULT NULL,
  `Inst4_yr3` int(7) DEFAULT NULL,
  `DtPr4_yr3` varchar(100) DEFAULT NULL,
  `SchSpFee_yr3` int(7) DEFAULT NULL,
  `SchOthFee_yr3` int(7) DEFAULT NULL,
  `SchTtlFee_yr3` int(9) DEFAULT NULL,
  `Inst1_yr4` int(7) DEFAULT NULL,
  `DtPr1_yr4` varchar(100) DEFAULT NULL,
  `Inst2_yr4` int(7) DEFAULT NULL,
  `DtPr2_yr4` varchar(100) DEFAULT NULL,
  `Inst3_yr4` int(7) DEFAULT NULL,
  `DtPr3_yr4` varchar(100) DEFAULT NULL,
  `Inst4_yr4` int(7) DEFAULT NULL,
  `DtPr4_yr4` varchar(100) DEFAULT NULL,
  `SchSpFee_yr4` int(7) DEFAULT NULL,
  `SchOthFee_yr4` int(7) DEFAULT NULL,
  `SchTtlFee_yr4` int(9) DEFAULT NULL,
  `tfc` varchar(10) DEFAULT NULL,
  `ppmt` varchar(10) DEFAULT NULL,
  `lftc` varchar(10) NOT NULL DEFAULT 'no',
  `dtnd` varchar(10) NOT NULL DEFAULT 'no',
  `datemodifide` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grietbranches`
--

CREATE TABLE `grietbranches` (
  `id` int(1) NOT NULL,
  `coursecode` varchar(2) NOT NULL,
  `branchcode` varchar(4) NOT NULL DEFAULT '',
  `branchname` varchar(100) NOT NULL DEFAULT '',
  `branchsname` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grietstudentdetails`
--

CREATE TABLE `grietstudentdetails` (
  `id` int(4) DEFAULT NULL,
  `ayear` varchar(7) DEFAULT NULL,
  `regulation` varchar(4) DEFAULT NULL,
  `coursecode` varchar(1) DEFAULT NULL,
  `branchcode` int(2) DEFAULT NULL,
  `rollno` varchar(10) DEFAULT NULL,
  `name` varchar(43) DEFAULT NULL,
  `fname` varchar(41) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `adminq` varchar(10) DEFAULT NULL,
  `admint` varchar(8) DEFAULT NULL,
  `admine` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grietsubjectmaster`
--

CREATE TABLE `grietsubjectmaster` (
  `id` int(10) NOT NULL,
  `subjectcode` varchar(10) NOT NULL DEFAULT '',
  `subjectsname` varchar(10) NOT NULL DEFAULT '',
  `subjectname` varchar(100) NOT NULL DEFAULT '',
  `bos` varchar(10) NOT NULL,
  `subjecttype` varchar(1) NOT NULL,
  `subjectgroup` varchar(10) NOT NULL,
  `minint` varchar(3) NOT NULL DEFAULT '',
  `maxint` varchar(3) NOT NULL DEFAULT '',
  `minext` varchar(3) NOT NULL DEFAULT '',
  `maxext` varchar(3) NOT NULL DEFAULT '',
  `passmark` varchar(3) NOT NULL DEFAULT '',
  `total` varchar(3) NOT NULL DEFAULT '',
  `credits` varchar(2) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grietsubjectmastersemcodes`
--

CREATE TABLE `grietsubjectmastersemcodes` (
  `id` int(5) NOT NULL,
  `subjectcode` varchar(10) NOT NULL,
  `l` int(1) DEFAULT NULL,
  `t` int(1) DEFAULT NULL,
  `p` int(1) DEFAULT NULL,
  `A01` varchar(10) NOT NULL,
  `A02` varchar(10) NOT NULL,
  `A03` varchar(10) NOT NULL,
  `A04` varchar(10) NOT NULL,
  `A05` varchar(10) NOT NULL,
  `A11` varchar(10) NOT NULL,
  `A12` varchar(10) NOT NULL,
  `A23` varchar(10) NOT NULL,
  `D21` varchar(10) NOT NULL,
  `D25` varchar(10) NOT NULL,
  `D43` varchar(10) NOT NULL,
  `D52` varchar(10) NOT NULL,
  `D55` varchar(10) NOT NULL,
  `D57` varchar(10) NOT NULL,
  `D58` varchar(10) NOT NULL,
  `E00` varchar(10) NOT NULL,
  `F00` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `libissueret`
--

CREATE TABLE `libissueret` (
  `sno` int(11) DEFAULT NULL,
  `rollno` varchar(100) DEFAULT NULL,
  `staffid` int(7) DEFAULT NULL,
  `accno` int(11) NOT NULL,
  `issuedate` date DEFAULT NULL,
  `returndate` date DEFAULT '0000-00-00',
  `remarks` varchar(200) DEFAULT NULL,
  `issuetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `libmembers`
--

CREATE TABLE `libmembers` (
  `id` int(5) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `encemail` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(12) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `ppwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `encemail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentlink`
--

CREATE TABLE `mentlink` (
  `student` varchar(10) DEFAULT NULL,
  `mentid` int(4) DEFAULT NULL,
  `dept` varchar(3) DEFAULT NULL,
  `Year` varchar(3) DEFAULT NULL,
  `Section` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mentorstudent`
--

CREATE TABLE `mentorstudent` (
  `student` varchar(10) DEFAULT NULL,
  `mentid` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `msgid` int(35) NOT NULL,
  `id` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `sentby` varchar(60) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otheract`
--

CREATE TABLE `otheract` (
  `id` varchar(12) NOT NULL,
  `event` varchar(25) NOT NULL,
  `college` varchar(10) NOT NULL,
  `place` varchar(6) NOT NULL,
  `project` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` varchar(12) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `midname` varchar(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(2) NOT NULL,
  `category` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hno` varchar(10) NOT NULL,
  `street` varchar(30) NOT NULL,
  `village` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `gap10` varchar(3) NOT NULL,
  `gapinter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preadm`
--

CREATE TABLE `preadm` (
  `id` varchar(12) NOT NULL,
  `secsch` varchar(60) NOT NULL,
  `secadd` varchar(60) NOT NULL,
  `secboard` varchar(15) NOT NULL,
  `secjoin` varchar(15) NOT NULL,
  `secpass` varchar(15) NOT NULL,
  `secmar` varchar(6) NOT NULL,
  `secper` varchar(6) NOT NULL,
  `twesch` varchar(30) NOT NULL,
  `tweadd` varchar(60) NOT NULL,
  `tweboard` varchar(15) NOT NULL,
  `twejoin` varchar(15) NOT NULL,
  `twepass` varchar(15) NOT NULL,
  `twemar` varchar(6) NOT NULL,
  `tweper` varchar(15) NOT NULL,
  `gapsscint` varchar(150) NOT NULL,
  `gapintdeg` varchar(150) NOT NULL,
  `qual` varchar(20) NOT NULL,
  `rankqual` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previousdata`
--

CREATE TABLE `previousdata` (
  `id` int(10) NOT NULL,
  `ayear` varchar(10) NOT NULL,
  `regulation` varchar(10) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `branchcode` varchar(10) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `inter` varchar(10) NOT NULL,
  `ssc` varchar(10) NOT NULL,
  `stream` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remfee`
--

CREATE TABLE `remfee` (
  `type` varchar(25) NOT NULL,
  `money` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remunaration`
--

CREATE TABLE `remunaration` (
  `id` varchar(15) NOT NULL,
  `type` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) NOT NULL,
  `money` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `sno` int(11) DEFAULT NULL,
  `rollno` varchar(100) DEFAULT NULL,
  `staffid` int(7) DEFAULT NULL,
  `accno` int(11) NOT NULL,
  `issuedate` date DEFAULT NULL,
  `returndate` date DEFAULT '0000-00-00',
  `remarks` varchar(200) DEFAULT NULL,
  `issuetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` varchar(12) NOT NULL,
  `name` varchar(18) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `cheque` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semsub`
--

CREATE TABLE `semsub` (
  `id` int(5) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `A01` varchar(10) NOT NULL,
  `A02` varchar(10) NOT NULL,
  `A03` varchar(10) NOT NULL,
  `A04` varchar(10) NOT NULL,
  `A05` varchar(10) NOT NULL,
  `A11` varchar(10) NOT NULL,
  `A12` varchar(10) NOT NULL,
  `A23` varchar(10) NOT NULL,
  `D21` varchar(10) NOT NULL,
  `D25` varchar(10) NOT NULL,
  `D43` varchar(10) NOT NULL,
  `D52` varchar(10) NOT NULL,
  `D55` varchar(10) NOT NULL,
  `D57` varchar(10) NOT NULL,
  `D58` varchar(10) NOT NULL,
  `E00` varchar(10) NOT NULL,
  `F00` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(20) NOT NULL,
  `branch` varchar(10) NOT NULL DEFAULT '',
  `category` varchar(10) NOT NULL DEFAULT '',
  `level` varchar(10) NOT NULL DEFAULT '',
  `uid` varchar(10) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `login` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `ar` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(10) NOT NULL,
  `ayear` varchar(10) NOT NULL DEFAULT '',
  `regulation` varchar(6) NOT NULL DEFAULT '',
  `coursecode` varchar(2) NOT NULL DEFAULT '',
  `branchcode` varchar(2) NOT NULL DEFAULT '',
  `rollno` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `fname` varchar(100) NOT NULL DEFAULT '',
  `mname` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `bgroup` varchar(5) NOT NULL,
  `gender` varchar(1) NOT NULL DEFAULT '',
  `adminq` varchar(10) NOT NULL DEFAULT '',
  `admint` varchar(10) NOT NULL DEFAULT '',
  `admine` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(12) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testment`
--

CREATE TABLE `testment` (
  `student` varchar(12) NOT NULL,
  `mentid` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `dept` varchar(3) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `year` int(3) DEFAULT NULL,
  `section` varchar(1) DEFAULT NULL,
  `day` varchar(9) DEFAULT NULL,
  `subject` varchar(9) DEFAULT NULL,
  `subname` varchar(8) DEFAULT NULL,
  `duration` int(3) DEFAULT NULL,
  `from_time` time DEFAULT NULL,
  `to_time` time DEFAULT NULL,
  `faculty` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `name` varchar(25) DEFAULT NULL,
  `branch` varchar(11) DEFAULT NULL,
  `stop` varchar(18) DEFAULT NULL,
  `rollno` varchar(16) DEFAULT NULL,
  `route` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academicyear`
--
ALTER TABLE `academicyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`,`subcode`,`date`);

--
-- Indexes for table `attendance_reference`
--
ALTER TABLE `attendance_reference`
  ADD PRIMARY KEY (`subject`,`dept`,`section`,`date`);

--
-- Indexes for table `attenmembers`
--
ALTER TABLE `attenmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`sub`);

--
-- Indexes for table `facgen`
--
ALTER TABLE `facgen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facmembers`
--
ALTER TABLE `facmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grietbranches`
--
ALTER TABLE `grietbranches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `grietsubjectmaster`
--
ALTER TABLE `grietsubjectmaster`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `subjectcode` (`subjectcode`),
  ADD KEY `subjectname` (`subjectname`);

--
-- Indexes for table `grietsubjectmastersemcodes`
--
ALTER TABLE `grietsubjectmastersemcodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `libmembers`
--
ALTER TABLE `libmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `preadm`
--
ALTER TABLE `preadm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previousdata`
--
ALTER TABLE `previousdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `remunaration`
--
ALTER TABLE `remunaration`
  ADD PRIMARY KEY (`id`,`date`,`time`);

--
-- Indexes for table `semsub`
--
ALTER TABLE `semsub`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `uid` (`uid`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `rollno` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attenmembers`
--
ALTER TABLE `attenmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facmembers`
--
ALTER TABLE `facmembers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grietbranches`
--
ALTER TABLE `grietbranches`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grietsubjectmaster`
--
ALTER TABLE `grietsubjectmaster`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grietsubjectmastersemcodes`
--
ALTER TABLE `grietsubjectmastersemcodes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `libmembers`
--
ALTER TABLE `libmembers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `msgid` int(35) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previousdata`
--
ALTER TABLE `previousdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semsub`
--
ALTER TABLE `semsub`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
