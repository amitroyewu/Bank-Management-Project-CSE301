-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 09:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_number` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `banker_id` int(20) NOT NULL,
  `account_type` varchar(40) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `balance` int(11) NOT NULL,
  `account_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_number`, `customer_id`, `banker_id`, `account_type`, `branch_name`, `balance`, `account_password`) VALUES
(10101016, 20202016, 2017360084, 'Savings account', 'Banasree', 2000, '016'),
(10101018, 20202018, 2017360021, 'Student account', 'Motijheel', 1700, '018'),
(10101020, 20202020, 2017360067, 'Savings account', 'Segunbagicha', 1000, '020');

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `account_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`account_type`) VALUES
('Checking account'),
('Savings account'),
('Money market account'),
('Certificate of deposit (CD)'),
('Individual retirement arrangement (IRA)'),
('Brokerage account'),
('Student account');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
(789, 123);

-- --------------------------------------------------------

--
-- Table structure for table `banker_information`
--

CREATE TABLE `banker_information` (
  `banker_id` int(20) NOT NULL,
  `banker_name` varchar(40) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `banker_email` varchar(30) NOT NULL,
  `banker_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banker_information`
--

INSERT INTO `banker_information` (`banker_id`, `banker_name`, `branch_name`, `banker_email`, `banker_password`) VALUES
(2017360021, 'Amit Roy', 'Motijheel', 'amitroy@gmail.com', '021'),
(2017360067, 'Arif', 'Segunbagicha', 'arif@gmail.com', '067'),
(2017360084, 'Sharika Tasnim Arshi', 'Banasree', 'arshi@gmail.com', '084');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_name` varchar(30) NOT NULL,
  `branch_city` varchar(30) NOT NULL,
  `branch_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_name`, `branch_city`, `branch_code`) VALUES
('Banasree', 'Dhaka', 1216),
('Motijheel', 'Dhaka', 1000),
('Segunbagicha', 'Dhaka', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `account_number` int(20) NOT NULL,
  `credit_card_number` int(20) NOT NULL,
  `credit_card_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`account_number`, `credit_card_number`, `credit_card_password`) VALUES
(10101020, 80808020, '020');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(40) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nid` int(20) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_id`, `email_id`, `gender`, `date_of_birth`, `nid`, `street`, `city`, `zip`) VALUES
('Mahfuzur Rahman', 20202018, 'mahfuzurrahman@gmail.com', 'Male', '1983-06-01', 90909018, 'B Block', 'Dhaka', 1200),
('Nahian Ferdous Mohua', 20202016, 'mohua@gmail.com', 'Female', '2001-03-04', 90909016, 'jigatola', 'Dhaka', 1100),
('Asem', 20202020, 'asem@gmail.com', 'Male', '1998-06-01', 90909020, 'Uttara', 'Dhaka', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `debit_card`
--

CREATE TABLE `debit_card` (
  `account_number` int(20) NOT NULL,
  `debit_card_number` int(20) NOT NULL,
  `debit_card_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit_card`
--

INSERT INTO `debit_card` (`account_number`, `debit_card_number`, `debit_card_password`) VALUES
(10101018, 70707018, '018');

-- --------------------------------------------------------

--
-- Table structure for table `depositor`
--

CREATE TABLE `depositor` (
  `account_number` int(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `depositor_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

INSERT INTO `depositor` (`account_number`, `amount`, `depositor_name`) VALUES
(10101016, 200, 'Ataur');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender`) VALUES
('Male'),
('Female'),
('Other');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `account_number` int(20) NOT NULL,
  `loan_number` int(20) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`account_number`, `loan_number`, `branch_name`, `amount`) VALUES
(10101016, 30303016, 'Banasree', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `account_number` int(20) NOT NULL,
  `nominee_name` varchar(40) NOT NULL,
  `nominee_gender` varchar(20) NOT NULL,
  `nominee_relation` varchar(20) NOT NULL,
  `nominee_date_of_birth` date NOT NULL,
  `nominee_nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`account_number`, `nominee_name`, `nominee_gender`, `nominee_relation`, `nominee_date_of_birth`, `nominee_nid`) VALUES
(10101016, 'Ataur Rahman', 'Male', 'Father', '1969-08-31', 90909011);

-- --------------------------------------------------------

--
-- Table structure for table `nominee_relation`
--

CREATE TABLE `nominee_relation` (
  `nominee_relation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee_relation`
--

INSERT INTO `nominee_relation` (`nominee_relation`) VALUES
('Father'),
('Mother'),
('Daughter'),
('Son'),
('Husband'),
('Wife'),
('Sister'),
('Brother');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `banker_id` (`banker_id`);

--
-- Indexes for table `banker_information`
--
ALTER TABLE `banker_information`
  ADD PRIMARY KEY (`banker_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`banker_id`) REFERENCES `banker_information` (`banker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `account` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
