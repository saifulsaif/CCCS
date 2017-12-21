-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:02 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `user_id` int(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `department`, `user_id`) VALUES
(4, 'saif', 'saif', 'pubilc', 3),
(6, 'saiful', 'saiful', 'government', 5),
(7, 'admin@gmail.com', 'admin', 'pubilc', 6);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
`car_id` int(22) NOT NULL,
  `car_number` varchar(33) NOT NULL,
  `car_name` varchar(22) NOT NULL,
  `color` varchar(33) NOT NULL,
  `category` varchar(55) NOT NULL,
  `cc` int(33) NOT NULL,
  `chasis_number` varchar(44) NOT NULL,
  `body_type` varchar(33) NOT NULL,
  `mnu_date` varchar(22) NOT NULL,
  `reg_date` varchar(33) NOT NULL,
  `fuel_type` varchar(55) NOT NULL,
  `horse_power` varchar(44) NOT NULL,
  `photo` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_number`, `car_name`, `color`, `category`, `cc`, `chasis_number`, `body_type`, `mnu_date`, `reg_date`, `fuel_type`, `horse_power`, `photo`) VALUES
(5, '1', 'ferari', 'Black', 'private', 1500, '4444', 'Small', '2013-08-19', '2015-08-19', '0', '32434234', 'http://localhost/cccs/assets/imag'),
(6, '0012', 'BMW', 'Red', 'private', 1500, '4444s', 'Small', '2013-08-19', '2015-08-19', 'Patrol ', '32434234', 'http://localhost/cccs/assets/imag'),
(8, '11201', 'TOYATA', 'Silver', 'public', 3232, '4444', 'Large', '2013-08-22', '2015-08-06', 'Patrol ', '32434234', 'http://localhost/cccs/assets/imag');

-- --------------------------------------------------------

--
-- Table structure for table `car_owner`
--

CREATE TABLE IF NOT EXISTS `car_owner` (
`user_id` int(11) NOT NULL,
  `name` varchar(22) CHARACTER SET latin1 NOT NULL,
  `password` varchar(22) CHARACTER SET latin1 NOT NULL,
  `email` varchar(22) CHARACTER SET latin1 NOT NULL,
  `address` varchar(22) CHARACTER SET utf8 NOT NULL,
  `number` varchar(22) CHARACTER SET latin1 NOT NULL,
  `about` text CHARACTER SET latin1 NOT NULL,
  `department` varchar(22) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `car_owner`
--

INSERT INTO `car_owner` (`user_id`, `name`, `password`, `email`, `address`, `number`, `about`, `department`) VALUES
(1, 'fsdfd', 'sdf', 'saifulsaif5854@gmail.c', 'Barai,Gopinathpor,Kasb', '01759998001', 'fsdfsdf', 'pubilc'),
(2, 'saiful', '09876532', 'saifulsaif5854@gmail.c', 'Barai,Gopinathpor,Kasb', '01759998001', 'fsdfsdf', 'pubilc'),
(5, 'saiful', 'sajib', 'saifulsaif5854@gmail.c', '?????????', '01759998001', '1wsssssd', 'pubilc'),
(6, 'admin', 'admin', 'admin@gmail.com', 'panthpathah,Dhaka 1212', '01759998001', 'Good Luck', 'pubilc');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE IF NOT EXISTS `case` (
`case_id` int(22) NOT NULL,
  `car_number` varchar(23) NOT NULL,
  `location` varchar(23) NOT NULL,
  `reason` varchar(23) NOT NULL,
  `fine` double(15,2) NOT NULL,
  `date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_id`, `car_number`, `location`, `reason`, `fine`, `date`) VALUES
(3, '1', 'Khilgoan', 'Driving with out safety', 350.00, '11-12-2017'),
(4, '1', 'Khilgoan', 'general', 100.00, '11-12-2017'),
(5, '1', 'Select Occurrence Locat', 'deny_order', 500.00, '11-12-2017'),
(6, '1', 'New Market', 'accident', 300.00, '11-12-2017'),
(7, '1', 'Khilgoan', 'accident', 300.00, '11-12-2017'),
(8, '1', 'Kolabagan', 'accident', 300.00, '11-12-2017'),
(9, '1', 'Kolabagan', 'general', 100.00, '11-12-2017'),
(10, '0012', 'Tajgoan', 'accident', 300.00, '11-12-2017'),
(11, '0012', 'Tajgoan', 'general', 100.00, '11-12-2017'),
(12, '1', 'Banani', 'accident', 300.00, '11-12-2017'),
(13, '1', 'Banani', 'Driving with out safety', 350.00, '11-12-2017'),
(14, '1', 'Banani', 'smoke', 450.00, '11-12-2017'),
(15, '11201', 'Danmondi', 'general', 100.00, '12-12-2017'),
(16, '11201', 'Danmondi', 'deny_order', 500.00, '12-12-2017'),
(17, '11201', 'Khilkhat', 'smoke', 450.00, '12-12-2017'),
(19, '0012', 'MohammodPur', 'general', 100.00, '12-12-2017'),
(20, '0012', 'Motijil', 'deny_order', 500.00, '12-12-2017');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`payment_id` int(22) NOT NULL,
  `case_id` int(22) NOT NULL,
  `car_number` varchar(111) NOT NULL,
  `amount` double(15,2) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `case_id`, `car_number`, `amount`, `date`) VALUES
(1, 3, '1', 250.00, '11-12-2017'),
(2, 16, '11201', 400.00, '12-12-2017'),
(4, 19, '0012', 100.00, ''),
(20, 20, '0012', 0.00, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_owner`
--
ALTER TABLE `car_owner`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
 ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
MODIFY `car_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `car_owner`
--
ALTER TABLE `car_owner`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
MODIFY `case_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
