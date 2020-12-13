-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2017 at 04:47 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `housing`
--
CREATE DATABASE IF NOT EXISTS `housing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `housing`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `msg` longtext NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sn`, `email`, `msg`, `name`) VALUES
(1, 'abhijais98@gmail.com', '6465ffh4', 'Abhishek '),
(2, 'nis@gmaiu.ck', 'gjht oig hior', 'Nishany'),
(3, 'nis@gmaiu.ck', 'gjht oig hior', 'Nishany'),
(4, 'nis@gmaiu.ck', 'gjht oig hior', 'Nishany'),
(5, 'abhijais98@gmail.com', 'mast', 'Diwakar Okja'),
(6, 'abhijais98@gmail.com', 'Hi this awesome!!', 'Abhishek ');

-- --------------------------------------------------------

--
-- Table structure for table `postads`
--

CREATE TABLE IF NOT EXISTS `postads` (
  `ads_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `area` int(50) NOT NULL,
  `catg` varchar(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `descr` longtext NOT NULL,
  `price` varchar(10) NOT NULL,
  `yname` varchar(50) NOT NULL,
  `city` varchar(200) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photonme` varchar(500) NOT NULL,
  `csize` varchar(30) NOT NULL,
  `bedroom` varchar(30) NOT NULL,
  `bathroom` varchar(30) NOT NULL,
  `balcony` varchar(30) NOT NULL,
  `water` varchar(30) NOT NULL,
  `electricity` varchar(50) NOT NULL,
  `wifi` varchar(5) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `adsapproval` int(1) NOT NULL,
  `postedtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `postads`
--

INSERT INTO `postads` (`ads_id`, `area`, `catg`, `title`, `descr`, `price`, `yname`, `city`, `mob`, `email`, `photonme`, `csize`, `bedroom`, `bathroom`, `balcony`, `water`, `electricity`, `wifi`, `locality`, `adsapproval`, `postedtime`) VALUES
(6, 200, 'Flat', 'room for rrent', 'g dfg sfd', '2000', 'Abhishek Jaiwal', 'Allahabad', '9161857458', 'abhijais98@gmail.com', '51820F1 - 02.jpg', '1 BHK', '2 Bedrooms', '1 Bathroom', '1 Balcony', '24 Hours Available', 'Always', 'No', 'Bai Ka bagh', 1, '2017-04-20 09:00:06'),
(7, 200, 'Flat', 'room for rrent', 'g dfg sfd', '2000', 'Abhishek Jaiwal', 'Allahabad', '9161857458', 'abhijais98@gmail.com', '63099F1 - 02.jpg', '1 BHK', '2 Bedrooms', '1 Bathroom', '1 Balcony', '24 Hours Available', 'Always', 'No', 'Bai Ka bagh', 1, '2017-04-20 09:00:52'),
(8, 800, 'Flat', 'Flat for sell', 'Awesome locality beautiful interiror', '200000', 'Abhishek ', 'Allahabad', '9161857458', 'abhijais98@gmail.com', '8599763337deluxe.png', '1 BHK', '2 Bedrooms', '1 Bathroom', '1 Balcony', '24 Hours Available', 'Always', 'Yes', 'Bai ka bagh', 1, '2017-04-23 18:29:52'),
(10, 2000, 'Flat', '3BHK Flat for rent', 'awesome flat with in civil line', '10000', 'Abhishek ', 'Allahabad', '9161857458', 'abhijais98@gmail.com', '5982714532Hollywoodbets_Refer_a_Friend_Promotion.png', '3 BHK', '3 Bedrooms', '2 Bathroom', '2 Balconies', '24 Hours Available', 'Always', 'Yes', 'Civil-line', 1, '2017-04-23 19:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE IF NOT EXISTS `registeruser` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `joiningdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`name`, `email`, `mob`, `pass`, `joiningdate`) VALUES
('Abhishek ', 'abhi@gmail.com', '8574528909', 'abhi', '2017-04-23 20:06:13'),
('Abhishek ', 'abhijais98@gmail.com', '9161857458', 'abhi', '2017-04-22 08:47:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
