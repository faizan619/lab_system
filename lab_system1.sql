-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 12:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab_system1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user`, `pass`) VALUES
(1, 'akhil_admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE IF NOT EXISTS `amount` (
  `a_id` int(50) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `p_id` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `paid_amount` int(50) NOT NULL,
  `other_charge` int(50) NOT NULL,
  `discount` int(50) NOT NULL,
  `ref_discount` float NOT NULL,
  `ref_dis_xray` float NOT NULL,
  `ref_dis_sono` float NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `ref_center` varchar(100) NOT NULL,
  `ref_doc` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`a_id`, `date`, `p_id`, `total`, `balance`, `paid_amount`, `other_charge`, `discount`, `ref_discount`, `ref_dis_xray`, `ref_dis_sono`, `pay_type`, `ref_center`, `ref_doc`) VALUES
(1, '2018-10-04', 3, 200, 50, 150, 0, 0, 35, 35, 0, 'Cash', 'Self Center', 'Self'),
(2, '2018-10-04', 5, 500, 100, 400, 0, 0, 35, 0, 0, 'Cash', 'shidarth hospital', 'Rajendra Prasad'),
(3, '2018-10-05', 6, 1000, 300, 700, 0, 0, 87.5, 0, 0, 'Cash', 'shrayes hospital', 'Rajendra Prasad'),
(4, '2018-10-06', 7, 1120, 120, 1000, 0, 0, 0, 0, 0, 'Cash', 'shrayes hospital', 'rajiv rai'),
(5, '2018-10-06', 8, 750, 250, 500, 0, 0, 87.5, 200, 0, 'Cash', 'shidarth hospital', 'Rajendra Prasad'),
(6, '2018-10-06', 9, 650, 150, 500, 0, 0, 122.5, 0, 0, 'Cash', 'shrayes hospital', 'Rajendra Prasad'),
(7, '2018-10-06', 10, 560, 60, 500, 0, 0, 200, 0, 0, 'Cash', 'Self Center', 'Self'),
(8, '2018-10-08', 11, 500, 0, 500, 0, 0, 10, 0, 0, 'Cash', 'Sai Medical', 'Self'),
(9, '2018-10-08', 13, 600, 50, 550, 0, 0, 350, 10, 0, 'Cash', 'Sai Medical', 'Self'),
(10, '2018-10-08', 14, 530, 30, 500, 0, 0, 325, 0, 0, 'Cash', 'Sai Medical', 'Rajendra Prasad'),
(11, '2018-10-08', 15, 600, 0, 600, 0, 0, 395, 78, 0, 'Cash', 'Sai Medical', 'rajiv rai'),
(12, '2018-10-09', 16, 1220, 220, 1000, 0, 0, 700, 0, 0, 'Cash', 'Sai Medical', 'Rajendra Prasad'),
(13, '2018-10-09', 17, 1400, 0, 1400, 0, 0, 122.5, 0, 280, 'Cash', 'Sai Medical', 'Self'),
(14, '2018-10-10', 18, 1050, 50, 1000, 0, 0, 367.5, 0, 280, 'Cash', 'Sai Medical', 'rajiv rai'),
(15, '2018-10-11', 19, 1050, 0, 1050, 0, 0, 280, 0, 280, 'Cash', 'Sai Medical', 'Self'),
(17, '2018-10-11', 20, 1050, 50, 1000, 0, 0, 280, 0, 0, 'Cash', 'Sai Medical', 'rajiv rai'),
(28, '2018-10-12', 22, 1050, 50, 1000, 0, 0, 367.5, 100, 687, 'Cash', '', 'bipin'),
(31, '2018-10-12', 23, 1050, 50, 1000, 0, 0, 367.5, 87.5, 280, 'Cash', '', 'bipin'),
(32, '2018-10-12', 24, 1050, 50, 1000, 0, 0, 367.5, 87.5, 280, 'Cash', '', 'bipin'),
(33, '2018-10-12', 25, 1550, 0, 1550, 0, 0, 542.5, 262.5, 280, 'Cash', '', 'bipin'),
(34, '2018-10-12', 26, 1550, 50, 1500, 0, 0, 542.5, 262.5, 280, 'Cash', '', 'bipin'),
(35, '2018-10-12', 27, 1850, 850, 1000, 0, 0, 280, 87.5, 560, 'Cash', 'Sai Medical', 'rajiv rai'),
(36, '2018-10-13', 28, 2200, 200, 2000, 0, 0, 770, 402.5, 560, 'Cash', 'Sai Medical', 'rajiv rai'),
(37, '2018-10-13', 29, 1050, 0, 1050, 0, 0, 367.5, 87.5, 280, 'Cash', 'Sai Medical', 'Rajendra Prasad'),
(38, '2018-10-15', 30, 1050, 50, 1000, 0, 0, 367.5, 90, 280, 'Cash', 'Sai Medical', 'Rajendra Prasad'),
(39, '2018-10-15', 31, 1150, 50, 1100, 0, 0, 402.5, 122.5, 280, 'Cash', 'Sai Medical', 'Self'),
(40, '2018-10-15', 32, 2200, 200, 2000, 0, 0, 770, 210, 560, 'Cash', 'Sai Medical', 'Self'),
(41, '2018-10-22', 33, 2900, 0, 2900, 0, 0, 1015, 455, 560, 'Cash', 'Sai Medical', 'rajiv rai'),
(42, '2018-10-24', 34, 1850, 0, 1850, 0, 0, 647.5, 87.5, 560, 'Cash', 'Sai Medical', 'bipin'),
(43, '2018-10-25', 36, 950, 0, 950, 0, 0, 332.5, 332.5, 0, 'Cash', 'Sai Medical', 'rajiv rai'),
(44, '2018-10-26', 40, 250, 0, 250, 0, 0, 87.5, 87.5, 0, 'Cash', 'Sai Medical', 'bipin'),
(45, '2018-10-26', 41, 700, 0, 700, 0, 0, 245, 245, 0, 'Cash', 'Sai Medical', 'bipin'),
(46, '2018-10-26', 42, 800, 0, 800, 0, 0, 280, 210, 280, 'Cash', 'Sai Medical', 'bipin'),
(47, '2018-10-26', 43, 250, 0, 0, 0, 0, 87.5, 87.5, 0, 'Cash', 'Sai Medical', 'bipin'),
(48, '2018-10-26', 44, 350, 0, 350, 0, 0, 0, 0, 0, 'Cash', 'Sai Medical', 'rajiv rai'),
(49, '2018-10-26', 45, 250, 0, 250, 0, 0, 87.5, 87.5, 0, 'Cash', 'Sai Medical', 'bipin'),
(50, '2018-10-26', 46, 1050, 700, 350, 0, 0, 367.5, 87.5, 280, 'Cash', 'Sai Medical', 'rajiv rai'),
(51, '2018-10-26', 47, 1050, 0, 1050, 0, 0, 0, 0, 0, 'Cash', 'Sai Medical', 'bipin');

-- --------------------------------------------------------

--
-- Table structure for table `auto_id`
--

CREATE TABLE IF NOT EXISTS `auto_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mydate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auto_id`
--

INSERT INTO `auto_id` (`id`, `name`, `mydate`) VALUES
(1, 'alkhilesh', '2018-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_test`
--

CREATE TABLE IF NOT EXISTS `cancel_test` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `p_id` int(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `cancel_time` varchar(50) NOT NULL,
  `selec` varchar(15) NOT NULL,
  `panaadhar` varchar(15) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mob1` varchar(12) NOT NULL,
  `mob2` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `blood` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `center_ref`
--

CREATE TABLE IF NOT EXISTS `center_ref` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(100) NOT NULL,
  `sort_name` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `mob1` varchar(15) NOT NULL,
  `mob2` varchar(15) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `center_ref`
--

INSERT INTO `center_ref` (`c_id`, `center_name`, `sort_name`, `addres`, `mob1`, `mob2`) VALUES
(1, 'shrayes hospital', 'shrayes', 'vasai', '12542115', '1'),
(2, 'shidarth hospital', 'shidarth', 'naigaon', '1244245', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `dept_name`) VALUES
(1, 'main_department'),
(2, 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_ref`
--

CREATE TABLE IF NOT EXISTS `doctor_ref` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mob` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `doc_special` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctor_ref`
--

INSERT INTO `doctor_ref` (`id`, `name`, `mob`, `email`, `addres`, `doc_special`) VALUES
(1, 'Rajendra Prasad', '12454545', '', 'mumbai', 'dentist'),
(2, 'rajiv rai', '123454124', '', '', 'Cardiologists '),
(3, 'bipin', '', '', '', ''),
(4, 'akhilesh', '24515421', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `help_value`
--

CREATE TABLE IF NOT EXISTS `help_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `help_v` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass1` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `user`, `pass`, `pass1`) VALUES
(1, 'Akhilesh chauhan', 'akhil', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `pending_paid`
--

CREATE TABLE IF NOT EXISTS `pending_paid` (
  `a_id` int(50) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `p_id` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `paid_amount` int(50) NOT NULL,
  `other_charge` int(50) NOT NULL,
  `discount` int(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `ref_center` varchar(100) NOT NULL,
  `ref_doc` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pending_paid`
--

INSERT INTO `pending_paid` (`a_id`, `date`, `p_id`, `total`, `balance`, `paid_amount`, `other_charge`, `discount`, `pay_type`, `ref_center`, `ref_doc`) VALUES
(1, '2018-10-06', 9, 650, 0, 150, 0, 0, 'Cash', 'shrayes hospital', 'Rajendra Prasad');

-- --------------------------------------------------------

--
-- Table structure for table `petient_registration`
--

CREATE TABLE IF NOT EXISTS `petient_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` date DEFAULT NULL,
  `selec` varchar(100) DEFAULT NULL,
  `panaadhar` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mob1` varchar(12) DEFAULT NULL,
  `mob2` varchar(12) DEFAULT NULL,
  `addres` varchar(255) DEFAULT NULL,
  `blood` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `petient_registration`
--

INSERT INTO `petient_registration` (`id`, `date_time`, `selec`, `panaadhar`, `title`, `fname`, `mname`, `lname`, `age`, `dob`, `gender`, `mob1`, `mob2`, `addres`, `blood`, `email`, `area`) VALUES
(3, '2018-10-04', 'Aadhar Card', '', 'Mr', 'akhilesh', '', '', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(5, '2018-10-04', '', '', 'Mr', 'raju', '', '', '19', '1999-01-01', 'Male', '', '', '', '', '', 'naigaon'),
(6, '2018-10-05', 'Aadhaar Card', '', 'Mr', 'rahul', '', 'gupta', '19', '1999-01-01', 'Male', '', '', '', '', '', ''),
(7, '2018-10-06', 'Aadhar Card', '', 'Mr', 'Rakesh', '', 'chauhan', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(8, '2018-10-06', 'Aadhar Card', '', 'Mr', 'pranav', '', 'singh', '11', '2007-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(9, '2018-10-06', '', '', 'Mr', 'pintu', '', '', '19', '1999-01-01', 'Male', '', '', '', '', '', ''),
(10, '2018-10-06', 'Aadhar Card', '', 'Mr', 'akshay', '', 'humare', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(11, '2018-10-08', 'Aadhar Card', '', 'Mr', 'nitesh', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(12, '2018-10-08', 'Aadhar Card', '', 'Mr', 'md saikh', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(13, '2018-10-08', 'Aadhar Card', '', 'Mr', 'anjit', '', 'chauhan', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(14, '2018-10-08', 'Aadhar Card', '', 'Mr', 'rohit', '', 'roy', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(15, '2018-10-08', 'Aadhar Card', '', 'Mr', 'priyanka', '', 'chauhan', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(16, '2018-10-09', 'Aadhar Card', '', 'Mr', 'sandeep ', 'singh', 'rai', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(17, '2018-10-09', 'Aadhar Card', '', 'Mr', 'pankaj', '', 'singh', '18', '1999-12-01', 'Male', '', '', '', 'Blood Group', '', ''),
(18, '2018-10-10', 'Aadhar Card', '', 'Mr', 'vipin', '', '', '19', '1999-01-01', 'Male', '', '', 'nalasopara', 'Blood Group', '', ''),
(19, '2018-10-11', 'Aadhar Card', '', 'Mr', 'muhammad shaikh', '', '', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(20, '2018-10-11', 'Aadhar Card', '', 'Mr', 'surya', '', 'singhaniya', '30', '1988-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(21, '2018-10-12', 'Aadhar Card', '', 'Mr', 'priya', '', '', '18', '1999-12-01', 'Male', '', '', '', 'Blood Group', '', ''),
(22, '2018-10-12', 'Aadhar Card', '', 'Mr', 'rohite', '', '', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(23, '2018-10-12', 'Aadhar Card', '', 'Mr', 'asdadsa', '', '', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(24, '2018-10-12', 'Aadhar Card', '', 'Mr', 'pradeep', '', '', '19', '1999-01-01', 'Male', '', '', 'aa', 'Blood Group', '', ''),
(25, '2018-10-12', 'Aadhar Card', '', 'Mr', 'devendra', '', 'chauhan', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(26, '2018-10-12', 'Aadhar Card', '2345235345', 'Mr', 'ranswarup', '', '', '19', '1999-01-01', 'Male', '', '', 'vasai', 'AB-', '', 'naigaon'),
(27, '2018-10-12', 'Aadhar Card', '', 'Mr', 'priyanka', '', '', '18', '1999-12-01', 'Female', '', '', '', 'Blood Group', '', ''),
(28, '2018-10-13', 'Aadhar Card', '', 'Mr', 'praveen', '', '', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(29, '2018-10-13', 'Aadhar Card', '', 'Mr', 'mobin ', '', 'shaikh', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(30, '2018-10-15', 'Aadhar Card', '', 'Mr', 'pritam', '', 'singh', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(31, '2018-10-15', 'Aadhar Card', '', 'Mr', 'prakash', '', 'yadav', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(32, '2018-10-15', 'Aadhar Card', '', 'Mr', 'anjana', '', 'singh', '19', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(33, '2018-10-22', 'Pan Card', '1545424545', 'Mr', 'ramesh', '', 'yadav', '19', '1999-01-01', 'Male', '', '', 'vasai', 'Blood Group', '', 'naigaon'),
(34, '2018-10-24', 'Aadhar Card', '', 'Mr', 'pooja', '', 'singh', '19', '1999-01-01', 'Female', '', '', '', 'Blood Group', '', ''),
(35, '2018-10-25', 'Aadhar Card', '', 'Mr', 'priti', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(36, '2018-10-25', 'Aadhar Card', '', 'Mr', 'TRICHA', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(37, '2018-10-25', 'Aadhar Card', '', 'Mr', 'prdeep', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(38, '2018-10-25', 'Aadhar Card', '', 'Mr', 'raamu', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(39, '2018-10-26', 'Aadhar Card', '', 'Mr', 'priyansu', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(40, '2018-10-26', 'Aadhar Card', '', 'Mr', 'priyansu', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(41, '2018-10-26', 'Aadhar Card', '', 'Mr', 'pintua', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(42, '2018-10-26', 'Aadhar Card', '', 'Mr', 'asas', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(43, '2018-10-26', 'Aadhar Card', '', 'Mr', 'lala ji', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(44, '2018-10-26', 'Aadhar Card', '', 'Mr', 'pappu', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(45, '2018-10-26', 'Aadhar Card', '', 'Mr', 'pappi ji', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(46, '2018-10-26', 'Aadhar Card', '', 'Mr', 'pappa', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', ''),
(47, '2018-10-26', 'Aadhar Card', '', 'Mr', 'sony', '', '', '', '1999-01-01', 'Male', '', '', '', 'Blood Group', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE IF NOT EXISTS `refund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `paid` int(20) NOT NULL,
  `refund` int(20) NOT NULL,
  `date` date NOT NULL,
  `ref_center` varchar(200) NOT NULL,
  `ref_doc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(100) NOT NULL,
  `comp_pen` varchar(100) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `p_id`, `comp_pen`) VALUES
(1, 3, 'Pending'),
(2, 4, 'Pending'),
(3, 5, 'Pending'),
(4, 6, 'Pending'),
(5, 7, 'Pending'),
(6, 8, 'Pending'),
(7, 9, 'Pending'),
(8, 10, 'Pending'),
(9, 11, 'Pending'),
(10, 12, 'Pending'),
(11, 13, 'Pending'),
(12, 14, 'Pending'),
(13, 15, 'Pending'),
(14, 16, 'Pending'),
(15, 17, 'Pending'),
(16, 18, 'Pending'),
(17, 19, 'Pending'),
(18, 20, 'Pending'),
(19, 21, 'Pending'),
(20, 22, 'Pending'),
(21, 23, 'Pending'),
(22, 24, 'Pending'),
(23, 25, 'Pending'),
(24, 26, 'Pending'),
(25, 27, 'Pending'),
(26, 28, 'Pending'),
(27, 29, 'Pending'),
(28, 30, 'Pending'),
(29, 31, 'Pending'),
(30, 32, 'Pending'),
(31, 33, 'Pending'),
(32, 34, 'Pending'),
(33, 35, 'Pending'),
(34, 36, 'Pending'),
(35, 37, 'Pending'),
(36, 38, 'Pending'),
(37, 39, 'Pending'),
(38, 40, 'Pending'),
(39, 41, 'Pending'),
(40, 42, 'Pending'),
(41, 43, 'Pending'),
(42, 44, 'Pending'),
(43, 45, 'Pending'),
(44, 46, 'Pending'),
(45, 47, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sub_department`
--

CREATE TABLE IF NOT EXISTS `sub_department` (
  `s_id` int(100) NOT NULL AUTO_INCREMENT,
  `dept_id` int(100) NOT NULL,
  `sub_dept_name` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sub_department`
--

INSERT INTO `sub_department` (`s_id`, `dept_id`, `sub_dept_name`) VALUES
(9, 2, 'X-ray'),
(10, 2, 'Sonography');

-- --------------------------------------------------------

--
-- Table structure for table `sub_test`
--

CREATE TABLE IF NOT EXISTS `sub_test` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `t_id` int(100) NOT NULL,
  `sub_test_name` varchar(200) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `help_value` varchar(200) NOT NULL,
  `normal` text NOT NULL,
  `min` varchar(50) NOT NULL,
  `max` varchar(50) NOT NULL,
  `decimal_point` varchar(15) NOT NULL,
  `test_footer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_values`
--

CREATE TABLE IF NOT EXISTS `sub_values` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `sub_test` varchar(50) NOT NULL,
  `sub_value` varchar(50) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `t_id` int(100) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(100) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `tech_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `sub_dept_id` int(100) NOT NULL,
  `center_id` int(100) NOT NULL,
  `saprate` varchar(10) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `test_name`, `short_name`, `tech_name`, `price`, `sub_dept_id`, `center_id`, `saprate`) VALUES
(29, 'CHEST PA VIEW', 'CHEST PA VIEW', 'CHEST PA VIEW', 250, 9, 0, '001'),
(30, 'CHEST OBLIQUE VIEW', 'CHEST OBLIQUE VIEW', 'CHEST OBLIQUE VIEW', 250, 9, 0, ''),
(31, 'CHEST LORDOTIC VIEW', 'CHEST LORDOTIC VIEW', 'CHEST LORDOTIC VIEW', 250, 9, 0, ''),
(32, 'RIBS', 'RIBS', 'RIBS', 250, 9, 0, ''),
(33, 'DORSAL SPINE AP AND LATERAL', 'DORSAL SPINE AP AND LATERAL', 'DORSAL SPINE AP AND LATERAL', 500, 9, 0, ''),
(34, 'WHOLE ABDOMEN', 'WHOLE ABDOMEN', 'WHOLE ABDOMEN', 1000, 10, 0, ''),
(35, 'LOWER ABDOMEN', 'LOWER ABDOMEN', 'LOWER ABDOMEN', 1000, 10, 0, '001'),
(36, 'UPPER ABDOMEN', 'UPPER ABDOMEN', 'UPPER ABDOMEN', 800, 10, 0, '001'),
(37, 'PELVIS', 'PELVIS', 'PELVIS', 800, 10, 0, ''),
(38, 'KUB', 'KUB', 'KUB', 800, 10, 0, ''),
(39, 'TESTIS', 'TESTIS', 'TESTIS', 800, 10, 0, ''),
(40, 'GRAVID UTERUS', 'GRAVID UTERUS', 'GRAVID UTERUS', 800, 10, 0, ''),
(41, 'EARLY PREGNANCY', 'EARLY PREGNANCY', 'EARLY PREGNANCY', 800, 10, 0, ''),
(42, 'BREAST', 'BREAST', 'BREAST', 800, 10, 0, ''),
(43, 'BOTH BREAST', 'BOTH BREAST', 'BOTH BREAST', 1600, 10, 0, ''),
(44, 'SKULL AP / LAT', 'SKULL AP / LAT', 'SKULL AP / LAT', 500, 9, 0, ''),
(45, 'CERVICAL SPINE AP LAT', 'CERVICAL SPINE AP LAT', 'CERVICAL SPINE AP LAT', 500, 9, 0, ''),
(46, 'WATER VIEW ', 'WATER VIEW ', 'WATER VIEW ', 250, 9, 0, ''),
(47, 'CALDWEL VIEW', 'CALDWEL VIEW', 'CALDWEL VIEW', 250, 9, 0, ''),
(48, 'PNS', 'PNS', 'PNS', 500, 9, 0, ''),
(49, 'DORSOLUMBER SPINE AP LAT', 'DORSOLUMBER SPINE AP LAT', 'DORSOLUMBER SPINE AP LAT', 500, 9, 0, ''),
(50, 'LUMBER SPINE AP LAT', 'LUMBER SPINE AP LAT', 'LUMBER SPINE AP LAT', 500, 9, 0, ''),
(51, 'EXTENTION VIEW ', 'EXTENTION VIEW ', 'EXTENTION VIEW ', 250, 9, 0, ''),
(52, 'FLEXION VIEW', 'FLEXION VIEW', 'FLEXION VIEW', 250, 9, 0, ''),
(53, 'PBH', 'PBH', 'PBH', 250, 9, 0, ''),
(54, 'HIP LATERAL', 'HIP LATERAL', 'HIP LATERAL', 250, 9, 0, ''),
(55, 'THIGH AP', 'THIGH AP', 'THIGH AP', 250, 9, 0, ''),
(56, 'KNEE A/L', 'KNEE A/L', 'KNEE A/L', 350, 9, 0, ''),
(57, 'BOTH KNEE JOINT AP LAT', 'BOTH KNEE JOINT AP LAT', 'BOTH KNEE JOINT AP LAT', 700, 9, 0, ''),
(58, 'LEG AP LAT', 'LEG AP LAT', 'LEG AP LAT', 350, 9, 0, ''),
(59, 'ANKLE AP LAT', 'ANKLE AP LAT', 'ANKLE AP LAT', 350, 9, 0, ''),
(60, 'FOOT AP LAT', 'FOOT AP LAT', 'FOOT AP LAT', 350, 9, 0, ''),
(61, 'FINGER AP LAT', 'FINGER AP LAT', 'FINGER AP LAT', 350, 9, 0, ''),
(62, 'HEEL AP LAT', 'HEEL AP LAT', 'HEEL AP LAT', 350, 9, 0, ''),
(63, 'SHOULDER AP LAT', 'SHOULDER AP LAT', 'SHOULDER AP LAT', 500, 9, 0, ''),
(64, 'SHOULDER AP', 'SHOULDER AP', 'SHOULDER AP', 250, 9, 0, ''),
(65, 'HUMARUS AP LAT', 'HUMARUS AP LAT', 'HUMARUS AP LAT', 500, 9, 0, ''),
(66, 'ELBOW AP LAT', 'ELBOW AP LAT', 'ELBOW AP LAT', 350, 9, 0, ''),
(67, 'FOREARM AP LAT', 'FOREARM AP LAT', 'FOREARM AP LAT', 350, 9, 0, ''),
(68, 'WRIST AP LAT', 'WRIST AP LAT', 'WRIST AP LAT', 350, 9, 0, ''),
(69, 'HAND AP LAT', 'HAND AP LAT', 'HAND AP LAT', 350, 9, 0, ''),
(70, 'ABDOMEN', 'ABDOMEN', 'ABDOMEN', 250, 9, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `test_status`
--

CREATE TABLE IF NOT EXISTS `test_status` (
  `t_stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `com_pen` varchar(100) NOT NULL,
  PRIMARY KEY (`t_stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test_value`
--
 
CREATE TABLE IF NOT EXISTS `test_value`(
  `v_id` int(55) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(55) NOT NULL,
  `test_price` varchar(100) NOT NULL,
  `t_value` varchar(55) NOT NULL,
  `p_id` int(55) NOT NULL,
  `t_id` int(50) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `test_value`
--

INSERT INTO `test_value` (`v_id`, `test_name`, `test_price`, `t_value`, `p_id`, `t_id`) VALUES
(2, 'RIBS', '100', '', 3, 32),
(3, 'PELVIS', '500', '', 5, 37),
(4, 'CHEST PA VIEW', '250', '', 6, 29),
(5, 'RIBS', '250', '', 6, 32),
(6, 'SKULL AP / LAT', '500', '', 6, 44),
(7, 'CHEST PA VIEW', '300', '', 7, 29),
(8, 'EARLY PREGNANCY', '820', '', 7, 41),
(9, 'CHEST PA VIEW', '250', '', 8, 29),
(10, 'SKULL AP / LAT', '500', '', 8, 44),
(11, 'HAND AP LAT', '350', '', 9, 69),
(12, 'HEEL AP LAT', '300', '', 9, 62),
(13, 'ABDOMEN', '260', '', 10, 70),
(14, 'ANKLE AP LAT', '300', '', 10, 59),
(15, 'ABDOMEN', '200', '', 11, 70),
(16, 'ANKLE AP LAT', '300', '', 11, 59),
(17, 'ABDOMEN', '300', '', 13, 70),
(18, 'ANKLE AP LAT', '300', '', 13, 59),
(19, 'ABDOMEN', '230', '', 14, 70),
(20, 'ANKLE AP LAT', '300', '', 14, 59),
(21, 'CHEST PA VIEW', '250', '', 15, 29),
(22, 'ELBOW AP LAT', '350', '', 15, 66),
(23, 'ABDOMEN', '270', '', 16, 70),
(24, 'ANKLE AP LAT', '350', '', 16, 59),
(25, 'BOTH KNEE JOINT AP LAT', '600', '', 16, 57),
(26, 'ELBOW AP LAT', '350', '', 17, 66),
(28, 'UPPER ABDOMEN', '800', '', 17, 36),
(29, 'CHEST PA VIEW', '250', '', 18, 29),
(30, 'PELVIS', '800', '', 18, 37),
(31, 'ABDOMEN', '250', '', 19, 70),
(32, 'PELVIS', '800', '', 19, 37),
(33, 'CHEST PA VIEW', '250', '', 17, 29),
(42, 'ABDOMEN', '250', '', 20, 70),
(43, 'PELVIS', '800', '', 20, 37),
(51, 'ABDOMEN', '250', '', 21, 70),
(63, 'ABDOMEN', '250', '', 22, 70),
(69, 'ABDOMEN', '250', '', 23, 70),
(70, 'PELVIS', '800', '', 23, 37),
(71, 'ABDOMEN', '250', '', 24, 70),
(72, 'PELVIS', '800', '', 24, 37),
(73, 'ABDOMEN', '250', '', 25, 70),
(74, 'SKULL AP / LAT', '500', '', 25, 44),
(75, 'PELVIS', '800', '', 25, 37),
(76, 'ABDOMEN', '250', '', 26, 70),
(77, 'TESTIS', '800', '', 26, 39),
(78, 'PNS', '500', '', 26, 48),
(79, 'PELVIS', '800', '', 27, 37),
(80, 'CHEST PA VIEW', '250', '', 27, 29),
(81, 'TESTIS', '800', '', 27, 39),
(82, 'ABDOMEN', '250', '', 28, 70),
(83, 'ANKLE AP LAT', '350', '', 28, 59),
(84, 'PELVIS', '800', '', 28, 37),
(85, 'UPPER ABDOMEN', '800', '', 28, 36),
(86, 'ABDOMEN', '250', '', 29, 70),
(87, 'PELVIS', '800', '', 29, 37),
(88, 'ABDOMEN', '250', '', 30, 70),
(89, 'TESTIS', '800', '', 30, 39),
(90, 'ANKLE AP LAT', '350', '', 31, 59),
(91, 'PELVIS', '800', '', 31, 37),
(92, 'ABDOMEN', '250', '', 32, 70),
(93, 'ANKLE AP LAT', '350', '', 32, 59),
(94, 'GRAVID UTERUS', '800', '', 32, 40),
(95, 'PELVIS', '800', '', 32, 37),
(96, 'ABDOMEN', '250', '', 33, 70),
(97, 'ANKLE AP LAT', '350', '', 33, 59),
(98, 'BOTH BREAST', '1600', '', 33, 43),
(99, 'BOTH KNEE JOINT AP LAT', '700', '', 33, 57),
(100, 'ABDOMEN', '250', '', 34, 70),
(101, 'BOTH BREAST', '1600', '', 34, 43),
(102, 'ABDOMEN', '250', '', 36, 70),
(103, 'BOTH KNEE JOINT AP LAT', '700', '', 36, 57),
(104, 'ABDOMEN', '250', '', 40, 70),
(105, 'BOTH KNEE JOINT AP LAT', '700', '', 41, 57),
(106, 'ABDOMEN', '250', '', 42, 70),
(107, 'ANKLE AP LAT', '350', '', 42, 59),
(108, 'BREAST', '800', '', 42, 42),
(109, 'ABDOMEN', '250', '', 43, 70),
(110, 'ANKLE AP LAT', '350', '', 44, 59),
(111, 'ABDOMEN', '250', '', 45, 70),
(112, 'PELVIS', '800', '', 46, 37),
(113, 'ABDOMEN', '250', '', 46, 70),
(114, 'ABDOMEN', '250', '', 47, 70),
(115, 'PELVIS', '800', '', 47, 37);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_log`
--

CREATE TABLE IF NOT EXISTS `user_login_log` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `login_date_time` varchar(20) NOT NULL,
  `logout_date_time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=215 ;

--
-- Dumping data for table `user_login_log`
--

INSERT INTO `user_login_log` (`id`, `username`, `login_date_time`, `logout_date_time`) VALUES
(1, 'akhil', '2018-03-12 13:57:33', '2018-03-12 13:57:52'),
(2, 'akhil', '2018-03-12 13:57:58', '2018-03-12 13:58:42'),
(3, 'akhil', '2018-03-12 13:58:49', '2018-03-12 15:28:42'),
(4, 'akhil', '2018-03-12 15:28:49', '2018-03-12 15:28:49'),
(5, 'akhil', '2018-03-12 16:25:42', '2018-03-13 11:23:09'),
(6, 'akhil', '2018-03-13 11:23:18', '2018-03-13 12:53:24'),
(7, 'akhil', '2018-03-13 12:53:31', '2018-03-13 12:58:41'),
(8, 'akhil', '2018-03-13 12:58:53', '2018-03-13 12:58:53'),
(9, 'akhil', '2018-03-13 13:32:57', '2018-03-13 13:32:57'),
(10, 'akhil', '2018-03-13 15:30:36', '2018-03-13 15:30:36'),
(11, 'akhil', '2018-03-14 11:25:40', '2018-03-14 11:25:40'),
(12, 'akhil', '2018-03-14 13:27:29', '2018-03-14 13:27:29'),
(13, 'akhil', '2018-03-14 13:27:29', '2018-03-14 13:27:29'),
(14, 'akhil', '2018-03-15 14:25:34', '2018-03-15 14:25:34'),
(15, 'akhil', '2018-03-16 11:32:55', '2018-03-16 11:32:55'),
(16, 'akhil', '2018-03-16 15:14:31', '2018-03-16 15:14:38'),
(17, 'akhil', '2018-03-17 11:34:53', '2018-03-17 14:45:45'),
(18, 'akhil', '2018-03-17 14:46:20', '2018-03-17 14:46:20'),
(19, 'akhil', '2018-03-17 16:42:16', '2018-03-17 16:42:18'),
(20, 'akhil', '2018-03-19 11:31:23', '2018-03-19 11:31:23'),
(21, 'akhil', '2018-03-20 11:39:30', '2018-03-20 14:27:38'),
(22, 'akhil', '2018-03-20 14:27:43', '2018-03-20 14:27:43'),
(23, 'akhil', '2018-03-20 15:31:52', '2018-03-20 15:31:52'),
(24, 'akhil', '2018-03-20 16:26:06', '2018-03-20 16:51:13'),
(25, 'akhil', '2018-03-20 16:51:18', '2018-03-20 16:51:18'),
(26, 'akhil', '2018-03-21 11:28:13', '2018-03-21 11:28:13'),
(27, 'akhil', '2018-03-21 16:00:44', '2018-03-21 16:00:44'),
(28, 'akhil', '2018-03-22 11:33:52', '2018-03-22 11:33:52'),
(29, 'akhil', '2018-03-22 12:11:19', '2018-03-22 12:11:19'),
(30, 'akhil', '2018-03-23 11:30:01', '2018-03-23 11:30:01'),
(31, 'akhil', '2018-03-23 16:01:57', '2018-03-23 16:01:57'),
(32, 'akhil', '2018-03-23 16:05:38', '2018-03-23 16:11:07'),
(33, 'akhil', '2018-03-23 16:11:14', '2018-03-23 16:11:14'),
(34, 'akhil', '2018-03-24 11:35:21', '2018-03-24 11:35:21'),
(35, 'akhil', '2018-03-24 15:33:41', '2018-03-24 16:54:53'),
(36, 'akhil', '2018-03-26 11:33:50', '2018-03-26 11:33:50'),
(37, 'akhil', '2018-03-26 13:03:15', '2018-03-26 13:03:17'),
(38, 'akhil', '2018-03-27 11:32:24', '2018-03-27 11:32:24'),
(39, 'akhil', '2018-03-27 12:09:10', '2018-03-27 16:17:10'),
(40, 'akhil', '2018-03-28 11:42:24', '2018-03-28 11:42:24'),
(41, 'akhil', '2018-03-29 11:56:25', '2018-03-29 11:56:25'),
(42, 'akhil', '2018-03-29 16:57:05', '2018-03-29 16:57:05'),
(43, 'akhil', '2018-03-30 11:19:00', '2018-03-30 11:19:00'),
(44, 'akhil', '2018-03-30 11:53:23', '2018-03-30 11:53:23'),
(45, 'akhil', '2018-03-30 12:23:05', '2018-03-30 12:23:05'),
(46, 'akhil', '2018-03-30 12:23:05', '2018-03-30 12:23:05'),
(47, 'akhil', '2018-03-31 11:30:50', '2018-03-31 13:04:37'),
(48, 'akhil', '2018-03-31 13:04:42', '2018-03-31 13:04:42'),
(49, 'akhil', '2018-04-02 11:26:49', '2018-04-02 11:26:49'),
(50, 'akhil', '2018-04-02 13:39:55', '2018-04-02 13:39:55'),
(51, 'akhil', '2018-04-03 11:42:18', '2018-04-03 11:42:18'),
(52, 'akhil', '2018-04-04 11:59:27', '2018-04-04 11:59:27'),
(53, 'akhil', '2018-04-04 11:59:27', '2018-04-04 12:02:05'),
(54, 'akhil', '2018-04-04 12:02:12', '2018-04-04 12:02:12'),
(55, 'akhil', '2018-04-05 11:35:24', '2018-04-05 11:35:24'),
(56, 'akhil', '2018-04-05 14:44:27', '2018-04-05 14:44:27'),
(57, 'akhil', '2018-04-06 11:42:15', '2018-04-06 11:42:15'),
(58, 'akhil', '2018-04-06 12:23:40', '2018-04-06 12:23:40'),
(59, 'akhil', '2018-04-06 13:18:10', '2018-04-06 16:30:00'),
(60, 'akhil', '2018-04-06 16:37:24', '2018-04-06 16:37:51'),
(61, 'akhil', '2018-04-07 11:42:11', '2018-04-07 11:42:11'),
(62, 'akhil', '2018-04-07 12:25:51', '2018-04-07 12:25:51'),
(63, 'akhil', '2018-04-07 12:36:39', '2018-04-07 12:36:39'),
(64, 'akhil', '2018-04-07 12:44:23', '2018-04-07 12:44:23'),
(65, 'akhil', '2018-04-07 14:44:39', '2018-04-07 14:44:39'),
(66, 'akhil', '2018-04-09 11:46:31', '2018-04-09 11:46:31'),
(67, 'akhil', '2018-04-09 14:03:02', '2018-04-09 14:03:02'),
(68, 'akhil', '2018-04-10 11:37:29', '2018-04-10 12:36:53'),
(69, 'akhil', '2018-04-10 12:37:04', '2018-04-10 12:37:04'),
(70, 'akhil', '2018-04-11 11:50:14', '2018-04-11 11:50:14'),
(71, 'akhil', '2018-04-12 11:32:17', '2018-04-12 12:23:39'),
(72, 'akhil', '2018-04-12 12:23:45', '2018-04-12 12:28:16'),
(73, 'akhil', '2018-04-12 12:28:20', '2018-04-12 12:28:20'),
(74, 'akhil', '2018-04-12 15:10:46', '2018-04-12 15:10:46'),
(75, 'akhil', '2018-04-14 11:30:47', '2018-04-14 12:45:31'),
(76, 'akhil', '2018-04-14 12:45:35', '2018-04-14 12:45:35'),
(77, 'akhil', '2018-04-14 13:06:51', '2018-04-14 13:07:30'),
(78, 'akhil', '2018-04-14 13:07:40', '2018-04-14 17:00:10'),
(79, 'akhil', '2018-04-16 11:32:13', '2018-04-16 11:32:13'),
(80, 'akhil', '2018-04-16 14:50:31', '2018-04-16 15:19:53'),
(81, 'akhil', '2018-04-16 15:20:20', '2018-04-16 16:07:45'),
(82, 'akhil', '2018-04-16 16:08:10', '2018-04-16 16:08:10'),
(83, 'akhil', '2018-04-17 11:47:58', '2018-04-17 11:47:58'),
(84, 'akhil', '2018-04-17 12:21:47', '2018-04-17 12:21:47'),
(85, 'akhil', '2018-04-18 11:34:39', '2018-04-18 11:34:39'),
(86, 'akhil', '2018-04-18 15:15:13', '2018-04-18 15:15:13'),
(87, 'akhil', '2018-04-18 16:16:41', '2018-04-18 16:16:41'),
(88, 'akhil', '2018-04-19 11:31:16', '2018-04-19 11:31:21'),
(89, 'akhil', '2018-04-19 11:31:42', '2018-04-19 11:31:46'),
(90, 'akhil', '2018-04-19 11:37:14', '2018-04-19 12:00:54'),
(91, 'akhil', '2018-04-19 12:01:14', '2018-04-19 12:01:14'),
(92, 'akhil', '2018-04-19 12:32:43', '2018-04-19 13:29:16'),
(93, 'akhil', '2018-04-19 13:30:04', '2018-04-19 13:30:04'),
(94, 'akhil', '2018-04-20 11:33:51', '2018-04-20 11:33:51'),
(95, 'akhil', '2018-04-20 12:01:10', '2018-04-20 12:01:10'),
(96, 'akhil', '2018-04-20 12:27:28', '2018-04-20 12:27:28'),
(97, 'akhil', '2018-04-20 14:53:11', '2018-04-20 16:49:29'),
(98, 'akhil', '2018-04-21 11:23:36', '2018-04-21 11:23:36'),
(99, 'akhil', '2018-04-23 11:35:43', '2018-04-23 11:35:43'),
(100, 'akhil', '2018-04-23 13:30:27', '2018-04-23 13:30:27'),
(101, 'akhil', '2018-04-23 14:23:33', '2018-04-23 16:32:11'),
(102, 'akhil', '2018-04-23 16:32:57', '2018-04-23 16:32:57'),
(103, 'akhil', '2018-04-24 12:46:10', '2018-04-24 13:07:39'),
(104, 'akhil', '2018-04-24 13:07:44', '2018-04-24 13:07:44'),
(105, 'akhil', '2018-04-25 11:48:36', '2018-04-25 11:48:36'),
(106, 'akhil', '2018-04-25 11:58:08', '2018-04-25 11:58:08'),
(107, 'akhil', '2018-04-25 13:08:02', '2018-04-25 13:08:02'),
(108, 'akhil', '2018-04-27 12:13:53', '2018-04-30 12:11:13'),
(109, 'akhil', '2018-04-30 12:11:34', '2018-04-30 12:11:34'),
(110, 'akhil', '2018-04-30 13:24:40', '2018-04-30 13:24:40'),
(111, 'akhil', '2018-05-02 11:33:02', '2018-05-02 11:33:02'),
(112, 'akhil', '2018-05-02 16:08:40', '2018-05-02 16:08:40'),
(113, 'akhil', '2018-05-03 11:40:19', '2018-05-03 12:14:41'),
(114, 'akhil', '2018-05-03 12:16:50', '2018-05-03 12:17:27'),
(115, 'akhil', '2018-05-03 12:17:53', '2018-05-03 12:56:21'),
(116, 'akhil', '2018-05-03 12:56:44', '2018-05-03 14:20:31'),
(117, 'ram', '2018-05-03 14:22:26', '2018-05-03 14:22:26'),
(118, 'akhil', '2018-05-04 11:30:33', '2018-05-04 11:43:46'),
(119, 'akhil', '2018-05-04 11:44:18', '2018-05-04 11:44:18'),
(120, 'akhil', '2018-05-04 13:30:52', '2018-05-04 13:30:52'),
(121, 'akhil', '2018-05-04 15:01:38', '2018-05-04 15:01:38'),
(122, 'akhil', '2018-05-05 11:25:04', '2018-05-05 11:25:04'),
(123, 'akhil', '2018-05-07 11:32:29', '2018-05-07 11:32:29'),
(124, 'akhil', '2018-05-07 13:42:59', '2018-05-07 13:42:59'),
(125, 'akhil', '2018-05-08 11:23:02', '2018-05-08 11:23:02'),
(126, 'akhil', '2018-05-09 11:46:33', '2018-05-09 11:46:33'),
(127, 'akhil', '2018-05-10 11:32:53', '2018-05-10 11:32:53'),
(128, 'akhil', '2018-05-11 11:27:47', '2018-05-11 11:27:47'),
(129, 'akhil', '2018-05-11 14:07:48', '2018-05-11 16:56:00'),
(130, 'akhil', '2018-05-12 11:40:49', '2018-05-12 11:40:49'),
(131, 'akhil', '2018-05-14 11:23:46', '2018-05-14 13:46:00'),
(132, 'akhil', '2018-05-14 13:46:04', '2018-05-14 13:46:04'),
(133, 'akhil', '2018-05-14 14:46:17', '2018-05-14 14:46:17'),
(134, 'akhil', '2018-05-14 14:46:50', '2018-05-14 14:46:50'),
(135, 'akhil', '2018-05-14 14:47:01', '2018-05-14 14:47:01'),
(136, 'akhil', '2018-05-14 14:47:33', '2018-05-14 14:47:33'),
(137, 'akhil', '2018-05-14 15:01:10', '2018-05-14 15:01:10'),
(138, 'akhil', '2018-05-14 15:04:07', '2018-05-14 15:04:07'),
(139, 'akhil', '2018-05-14 15:04:47', '2018-05-14 15:04:47'),
(140, 'akhil', '2018-05-14 15:06:34', '2018-05-14 15:06:34'),
(141, 'akhil', '2018-05-14 15:27:56', '2018-05-14 15:27:56'),
(142, 'akhil', '2018-05-14 15:28:31', '2018-05-14 15:28:31'),
(143, 'akhil', '2018-05-14 15:29:29', '2018-05-14 15:33:09'),
(144, 'akhil', '2018-05-14 15:33:15', '2018-05-14 15:33:15'),
(145, 'akhil', '2018-05-14 15:35:25', '2018-05-14 15:35:25'),
(146, 'akhil', '2018-05-14 15:36:17', '2018-05-14 15:36:17'),
(147, 'akhil', '2018-05-14 15:36:37', '2018-05-14 15:36:37'),
(148, 'akhil', '2018-05-14 15:37:42', '2018-05-14 15:37:42'),
(149, 'akhil', '2018-05-14 15:38:38', '2018-05-14 16:56:10'),
(150, 'akhil', '2018-05-15 11:47:29', '2018-05-15 11:47:29'),
(151, 'akhil', '2018-05-15 13:00:56', '2018-05-15 13:00:56'),
(152, 'akhil', '2018-05-15 13:01:32', '2018-05-15 13:01:32'),
(153, 'akhil', '2018-05-15 13:14:59', '2018-05-15 16:19:39'),
(154, 'akhil', '2018-05-15 16:20:06', '2018-05-15 16:47:07'),
(155, 'akhil', '2018-05-15 16:47:47', '2018-05-15 16:47:47'),
(156, 'akhil', '2018-05-16 11:41:57', '2018-05-16 11:41:57'),
(157, 'akhil', '2018-05-18 11:31:45', '2018-05-18 16:44:35'),
(158, 'akhil', '2018-05-19 12:41:33', '2018-05-19 12:41:33'),
(159, 'akhil', '2018-05-21 15:22:58', '2018-05-21 15:22:58'),
(160, 'akhil', '2018-05-22 16:25:04', '2018-05-22 16:25:04'),
(161, 'akhil', '2018-05-22 16:38:31', '2018-05-22 16:38:31'),
(162, 'akhil', '2018-05-23 12:51:25', '2018-05-23 12:51:25'),
(163, 'akhil', '2018-05-24 12:07:56', '2018-05-24 12:07:56'),
(164, 'akhil', '2018-05-25 11:35:13', '2018-05-25 11:35:13'),
(165, 'akhil', '2018-05-26 11:53:03', '2018-05-26 11:53:03'),
(166, 'akhil', '2018-05-26 12:00:21', '2018-05-26 12:00:21'),
(167, 'akhil', '2018-05-26 12:01:03', '2018-05-26 12:01:03'),
(168, 'akhil', '2018-05-26 12:03:17', '2018-05-26 12:03:17'),
(169, 'akhil', '2018-05-28 11:44:44', '2018-05-28 11:44:44'),
(170, 'akhil', '2018-05-29 11:32:52', '2018-05-29 11:46:19'),
(171, 'akhil', '2018-05-29 15:12:45', '2018-05-29 15:12:45'),
(172, 'akhil', '2018-05-30 11:56:46', '2018-05-30 11:56:46'),
(173, 'akhil', '2018-05-30 12:20:35', '2018-05-30 12:20:35'),
(174, 'akhil', '2018-05-30 13:26:07', '2018-05-30 13:26:07'),
(175, 'akhil', '2018-05-31 14:34:12', '2018-05-31 14:34:12'),
(176, 'akhil', '2018-05-31 14:41:24', '2018-05-31 14:41:24'),
(177, 'akhil', '2018-06-01 14:21:26', '2018-06-01 14:21:26'),
(178, 'akhil', '2018-07-18 10:53:45', '2018-07-18 10:53:45'),
(179, 'akhil', '2018-07-18 10:56:37', '2018-07-18 11:22:24'),
(180, 'akhil', '2018-07-18 11:25:42', '2018-07-18 11:25:42'),
(181, 'akhil', '2018-07-18 11:26:29', '2018-07-18 11:26:29'),
(182, 'akhil', '2018-07-18 11:27:50', '2018-07-18 11:29:16'),
(183, 'akhil', '2018-07-18 11:30:07', '2018-07-18 11:30:07'),
(184, 'akhil', '2018-07-18 11:30:21', '2018-07-18 11:30:21'),
(185, 'akhil', '2018-07-18 11:31:06', '2018-07-18 11:31:06'),
(186, 'akhil', '2018-10-04 12:17:16', '2018-10-04 12:17:16'),
(187, 'akhil', '2018-10-04 12:18:00', '2018-10-04 12:18:00'),
(188, 'akhil', '2018-10-05 10:49:23', '2018-10-05 10:49:23'),
(189, 'akhil', '2018-10-06 11:39:05', '2018-10-06 12:43:54'),
(190, 'akhil', '2018-10-06 12:44:13', '2018-10-06 12:44:13'),
(191, 'akhil', '2018-10-06 14:30:55', '2018-10-06 14:30:55'),
(192, 'akhil', '2018-10-08 12:03:25', '2018-10-08 12:03:25'),
(193, 'akhil', '2018-10-08 12:34:01', '2018-10-08 12:34:01'),
(194, 'akhil', '2018-10-08 12:47:51', '2018-10-08 12:47:51'),
(195, 'akhil', '2018-10-08 12:56:52', '2018-10-09 12:26:17'),
(196, 'akhil', '2018-10-09 12:26:42', '2018-10-09 12:26:42'),
(197, 'akhil', '2018-10-09 14:33:07', '2018-10-09 14:33:07'),
(198, 'akhil', '2018-10-09 14:33:22', '2018-10-09 14:33:22'),
(199, 'akhil', '2018-10-09 16:58:58', '2018-10-10 12:15:07'),
(200, 'akhil', '2018-10-10 12:20:43', '2018-10-10 12:20:43'),
(201, 'akhil', '2018-10-10 13:14:40', '2018-10-10 13:14:40'),
(202, 'akhil', '2018-10-11 11:06:48', '2018-10-11 14:02:57'),
(203, 'akhil', '2018-10-11 14:03:10', '2018-10-11 14:03:10'),
(204, 'akhil', '2018-10-12 12:15:11', '2018-10-12 12:15:11'),
(205, 'akhil', '2018-10-13 10:57:06', '2018-10-13 10:57:06'),
(206, 'akhil', '2018-10-22 11:47:24', '2018-10-22 11:47:24'),
(207, 'akhil', '2018-10-22 14:43:29', '2018-10-22 14:43:29'),
(208, 'akhil', '2018-10-24 12:02:16', '2018-10-24 12:02:16'),
(209, 'akhil', '2018-10-24 12:16:38', '2018-10-24 12:16:38'),
(210, 'akhil', '2018-10-24 13:38:15', '2018-10-24 13:38:15'),
(211, 'akhil', '2018-10-25 12:17:46', '2018-10-25 12:17:46'),
(212, 'akhil', '2018-10-25 12:40:00', '2018-10-25 12:40:00'),
(213, 'akhil', '2018-10-25 16:17:09', '2018-10-25 16:17:09'),
(214, 'akhil', '2018-10-26 12:18:07', '2018-10-26 12:18:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
