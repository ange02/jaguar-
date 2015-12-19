-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 09:10 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaguar`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'ange', 'ange1@gmail.com', '221');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `seatno` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `from_plc` varchar(50) NOT NULL,
  `to_plc` varchar(50) NOT NULL,
  `departure_tm` varchar(50) NOT NULL,
  `arrival_tm` varchar(50) NOT NULL,
  `date` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `fname`, `sname`, `seatno`, `gender`, `email`, `phone`, `address`, `from_plc`, `to_plc`, `departure_tm`, `arrival_tm`, `date`) VALUES
(49, '', '', 0, '', '', '', '', '', '', '', '', 0),
(50, 'John', 'Peter', 66, 'male', 'gwqq@gmail.com', '65757', 'Lubaga', 'kampala', 'kigali', '12h', '6h', 12),
(51, 'Ange', 'MUTONI', 34, 'Female', 'angewa@gmail.com', '0986867745', 'Gikondo', 'Kigali', 'Kampala', '6AM', '10A.M', 312),
(57, 'SAAA', 'ASSS', 2, 'male', 'AV@YAHOO.FR', '0786', 'KIGALI', 'UGANDA', 'BUKAVU', '6', '9', 77),
(58, '', '', 0, '', '', '', '', '', '', '', '', 0);
