-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2015 at 07:34 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`product-id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `e-mail` varchar(30) NOT NULL,
`id` int(10) unsigned NOT NULL COMMENT 'user-id',
  `uname` varchar(16) DEFAULT NULL COMMENT 'neme of user',
  `pwd` varchar(16) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
`num` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='save email addresses for newsletters' AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `order-detail`
--

CREATE TABLE IF NOT EXISTS `order-detail` (
`order-number` int(11) NOT NULL,
  `product-id` int(11) NOT NULL,
  `member-id` int(11) NOT NULL,
  `order-date` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` enum('delivered','pending') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='used to save order details ans status' AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product-id` int(11) NOT NULL,
  `img-link` varchar(100) DEFAULT NULL COMMENT 'link of the image stored on server',
  `product-name` varchar(60) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` enum('mobile','tablet') DEFAULT NULL,
  `manufacture` enum('nokia','apple','qmobile','samsung','voice','htc','sony','huwawei') DEFAULT NULL,
  `discription` varchar(1000) DEFAULT NULL COMMENT 'discription of the image',
  `spes` varchar(5000) NOT NULL COMMENT 'stores specation table to be disp;lyed',
  `sales` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`product-id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `e-mail` (`e-mail`), ADD KEY `id` (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`num`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order-detail`
--
ALTER TABLE `order-detail`
 ADD PRIMARY KEY (`order-number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product-id`), ADD KEY `product-id` (`product-id`), ADD KEY `product-id_2` (`product-id`), ADD KEY `product-id_3` (`product-id`), ADD KEY `product-id_4` (`product-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `product-id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'user-id',AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `num` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `order-detail`
--
ALTER TABLE `order-detail`
MODIFY `order-number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product-id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
