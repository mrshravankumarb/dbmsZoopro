-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 03:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoom`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertanimal` (IN `ssn` VARCHAR(10), `aniid` INT(10), `aniname` VARCHAR(20), `sciname` VARCHAR(20), `aniclass` VARCHAR(20), `weight` VARCHAR(10), `age` INT(2), `adopted_by` VARCHAR(20), `date_of_arrival` DATE)  insert into animalz values(ssn,aniid,aniname,sciname,aniclass,weight,age,adopted_by,date_of_arrival)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ssn` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ssn`, `name`) VALUES
('1000', 'Shravan');

-- --------------------------------------------------------

--
-- Table structure for table `animalz`
--

CREATE TABLE `animalz` (
  `ssn` varchar(10) DEFAULT NULL,
  `aniid` decimal(10,0) NOT NULL,
  `aniname` varchar(20) DEFAULT NULL,
  `sciname` varchar(20) DEFAULT NULL,
  `aniclass` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `adopted_by` varchar(20) DEFAULT NULL,
  `date_of_arrival` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animalz`
--

INSERT INTO `animalz` (`ssn`, `aniid`, `aniname`, `sciname`, `aniclass`, `weight`, `age`, `adopted_by`, `date_of_arrival`) VALUES
('1000', '0', 'LALALA', 'kakak', 'Fish', '45', '12', 'oaoao', '2015-08-12'),
('1000', '987', 'ovi', 'Lacertilia', 'Reptiles', '1kg', '2', 'Loki', '2017-11-04'),
('1000', '1231', 'Syamala', 'Leo Panthera', 'Reptiles', '45kg', '40', 'Raj', '2015-08-12'),
('1000', '4001', 'Ananth', 'Leo Pantera', 'mammal', '125kg', '4', 'Darshan', '2012-12-10'),
('1000', '4578', 'Ranjith', 'Gorilla gorilla', 'mammal', '154kg', '40', 'Ranjith LP', '2010-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ssn` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `salary` decimal(10,0) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ssn`, `name`, `salary`, `designation`, `phone`, `address`, `doj`, `username`, `password`) VALUES
('1000', 'Shravan', '4500', 'Admin', '9874563210', 'Bangalore', '2001-02-08', 'kshravan20', 'qwerty'),
('1001', 'Ranjith', '45000', 'Staff', '9854763201', 'Mysuru', '2001-02-08', 'ranjith', 'ranju'),
('1020', 'RAVINDRA', '45000', 'Admin', '7412589630', 'BLORE', '2000-04-11', 'RAVI', 'RAVI');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `inslog` AFTER INSERT ON `employee` FOR EACH ROW INSERT INTO login (ssn,username,password, designation)
Values (new.ssn,new.username,new.password,new.designation)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `SSN` varchar(10) DEFAULT NULL,
  `USERNAME` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `DESIGNATION` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SSN`, `USERNAME`, `PASSWORD`, `DESIGNATION`) VALUES
('1000', 'kshravan20', 'qwerty', 'Admin'),
('1001', 'ranjith', 'ranju', 'Staff'),
('1020', 'RAVI', 'RAVI', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ssn` varchar(10) DEFAULT NULL,
  `sno` decimal(10,0) NOT NULL,
  `tno` decimal(10,0) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `modepayement` varchar(20) DEFAULT NULL,
  `tickettype` varchar(20) DEFAULT NULL,
  `amount` decimal(3,0) DEFAULT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ssn`, `sno`, `tno`, `name`, `gender`, `modepayement`, `tickettype`, `amount`, `category`) VALUES
('1001', '1', '1000', 'Harsha', 'Male', 'Debit Card', 'Walk', '500', 'Adult'),
('1001', '33', '33', 'lala', 'Female', 'Credit Card', 'Safari', '654', 'Adult'),
('1001', '44', '44', '44', 'Male', 'Debit Card', 'Walk', '44', 'Child'),
('1001', '45', '1054', 'Nagesh', 'Male', 'Cash', 'Grand Safari', '820', 'Adult'),
('1001', '454', '99', 'Laksh', 'Male', 'PayTm', 'Caddy Service', '789', 'Child'),
('1001', '1234', '4545', 'Karna', 'Female', 'Credit Card', 'Safari', '100', 'Adult'),
('1001', '40000', '54321', 'lohit', 'Male', 'Debit Card', 'Walk', '500', 'Adult'),
('1001', '45454', '879845', 'Kishan', 'Male', 'Cash', 'Caddy Service', '50', 'Child');

--
-- Triggers `ticket`
--
DELIMITER $$
CREATE TRIGGER `INSVIS` AFTER INSERT ON `ticket` FOR EACH ROW INSERT INTO VISITORS (SSN, SNO, NAME, CATEGORY,gender)
  VALUES (NEW.SSN,NEW.SNO,NEW.NAME,NEW.CATEGORY,NEW.GENDER)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `ssn` varchar(10) NOT NULL,
  `sno` decimal(10,0) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `age` decimal(2,0) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ssn`, `sno`, `name`, `category`, `age`, `gender`) VALUES
('1001', '1', 'Harsha', 'Adult', '35', 'Male'),
('1001', '40000', 'lohit', 'Adult', NULL, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `animalz`
--
ALTER TABLE `animalz`
  ADD PRIMARY KEY (`aniid`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`ssn`,`sno`),
  ADD KEY `sno` (`sno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `animalz`
--
ALTER TABLE `animalz`
  ADD CONSTRAINT `animalz_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE,
  ADD CONSTRAINT `visitors_ibfk_2` FOREIGN KEY (`sno`) REFERENCES `ticket` (`sno`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
