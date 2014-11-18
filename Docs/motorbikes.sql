-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2014 at 07:34 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motorbikes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` int(25) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE IF NOT EXISTS `cartitems` (
  `CBatchNo` int(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `Quantity` int(25) NOT NULL,
  `SBNo` int(25) NOT NULL,
  PRIMARY KEY (`CBatchNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `C_id` int(25) NOT NULL,
  `SC_BatchNo` int(25) NOT NULL,
  `CreditCardNo` int(25) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_id` int(25) NOT NULL,
  `Joining_Date` int(25) NOT NULL,
  `Salary` int(25) NOT NULL,
  PRIMARY KEY (`Employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marketingemployee`
--

CREATE TABLE IF NOT EXISTS `marketingemployee` (
  `M_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marketinglog`
--

CREATE TABLE IF NOT EXISTS `marketinglog` (
  `MarketingType` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `M_id` int(11) NOT NULL,
  PRIMARY KEY (`M_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone no` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `BatchNo` int(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `BrandName` varchar(25) NOT NULL,
  `ModelNo` int(25) NOT NULL,
  `Cart_batch_No` int(25) NOT NULL,
  PRIMARY KEY (`BatchNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_empoyee`
--

CREATE TABLE IF NOT EXISTS `sales_empoyee` (
  `S_id` int(25) NOT NULL,
  PRIMARY KEY (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_log`
--

CREATE TABLE IF NOT EXISTS `sales_log` (
  `TotalSoldItems` int(11) NOT NULL,
  `DealeeName` int(11) NOT NULL,
  `Sales_id` int(11) NOT NULL,
  PRIMARY KEY (`Sales_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `count` int(25) NOT NULL,
  `SCBatchNo` int(25) NOT NULL,
  PRIMARY KEY (`SCBatchNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
