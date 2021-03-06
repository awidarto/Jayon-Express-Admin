-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2011 at 07:58 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vdpi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `periodicals`
--

CREATE TABLE IF NOT EXISTS `periodicals` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `periodical_name` varchar(128) NOT NULL,
  `controller` varchar(128) NOT NULL,
  `action` varchar(128) NOT NULL,
  `param` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `periodicals`
--

INSERT INTO `periodicals` (`id`, `periodical_name`, `controller`, `action`, `param`) VALUES
(2, 'Download Reports', 'download', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skey` varchar(128) NOT NULL,
  `val_txt` varchar(255) NOT NULL,
  `val_int` bigint(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `skey`, `val_txt`, `val_int`, `name`) VALUES
(1, 'smtp_server', 'ssl://smtp.googlemail.com', 0, 'SMTP Server'),
(2, 'smtp_port', '', 465, 'SMTP Port'),
(3, 'smtp_user', 'bolongsox', 0, 'SMTP Username'),
(4, 'smtp_pass', 'masukajadeh', 0, 'SMTP Password');

-- --------------------------------------------------------

--
-- Table structure for table `thresholds`
--

CREATE TABLE IF NOT EXISTS `thresholds` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `threshold_name` varchar(128) NOT NULL,
  `app` varchar(128) NOT NULL,
  `table_name` varchar(128) NOT NULL,
  `column_name` varchar(128) NOT NULL,
  `is_sum` tinyint(1) NOT NULL,
  `time_interval` bigint(20) NOT NULL,
  `min` bigint(20) NOT NULL,
  `max` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `thresholds`
--

INSERT INTO `thresholds` (`id`, `threshold_name`, `app`, `table_name`, `column_name`, `is_sum`, `time_interval`, `min`, `max`) VALUES
(1, 'Test', '2', 'icmpv6s', '', 0, 10000, 235, 1000),
(2, 'Threshold 2', '1', 'arps', '', 0, 300000, 234, 10000);
