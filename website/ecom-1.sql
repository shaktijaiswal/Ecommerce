-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 02:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `date`) VALUES
(1, 'Electronics', 'this is electronics category here.', '2021-06-02 09:12:12'),
(2, 'Women Clothes', 'Women Clothes', '2021-06-02 09:12:50'),
(3, 'Men Clothes', 'Men Clothes', '2021-06-02 09:12:59'),
(4, 'Baby Clothes', 'demo', '2021-06-02 13:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `order_id` varchar(64) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `city`, `address`, `number`, `order_id`, `date`) VALUES
(1, 'sfsdfsd', 'sdfsdfsdf', 'sdfsf', 'sdfsdsd', '', '2021-06-02 12:41:23'),
(2, 'fsafsdf', 'sdfsdf', 'sdfsdf', 'sfdsdfsf', '1411', '2021-06-02 12:42:28'),
(3, 'fsafsdf', 'sdfsdf', 'sdfsdf', 'sfdsdfsf', '1411', '2021-06-02 12:44:26'),
(4, 'dfgdgd', 'gdgdfg', 'dfgdfg', 'dgdfgdf', '14118', '2021-06-02 13:00:57'),
(5, 'sdfsdf', 'sdfdsfsd', 'fsdfsd', 'dsfsdf', '14118', '2021-06-02 13:03:28'),
(6, 'Sanjeev Kumar', 'Mughalsarai', 'Mughalsarai', '8299708052', '14118', '2021-06-02 13:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `category` int(10) DEFAULT NULL,
  `rprice` int(20) DEFAULT NULL,
  `sprice` int(20) DEFAULT NULL,
  `file` varchar(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `rprice`, `sprice`, `file`, `date`) VALUES
(5, 'Check Shirt ', 3, 800, 700, 'upload/12.jpg', '2021-06-02 09:18:53'),
(6, 'Black Shirt', 3, 2000, 1400, 'upload/25.jpg', '2021-06-02 09:19:12'),
(7, 'Half Shirt', 3, 8000, 6000, 'upload/451.png', '2021-06-02 09:19:37'),
(8, 'Blue Shirt', 3, 8000, 6000, 'upload/784.jpg', '2021-06-02 09:19:59'),
(9, 'Maxi', 2, 800, 400, 'upload/5645.jpg', '2021-06-02 09:20:29'),
(10, 'Stylish Men T-Shirt', 3, 7000, 5000, 'upload/5654.jpg', '2021-06-02 09:20:56'),
(11, 'Red Top and Paint', 2, 4000, 3000, 'upload/8789.jpg', '2021-06-02 09:21:34'),
(12, 'Middi', 2, 100, 50, 'upload/5465456.jpg', '2021-06-02 09:21:55'),
(13, 'Blue Middi', 2, 100000, 10000, 'upload/5789754.jpg', '2021-06-02 09:22:25'),
(14, 'HP Laptop', 1, 45000, 43000, 'upload/567546.jpg', '2021-06-02 09:22:54'),
(15, 'Apple Mac', 1, 120000, 118000, 'upload/867879.jpg', '2021-06-02 09:23:22'),
(16, 'Dell Laptop ', 1, 45000, 42000, 'upload/4897987.jfif', '2021-06-02 09:23:52'),
(17, 'Asus', 1, 80000, 75000, 'upload/8679846.jpg', '2021-06-02 09:24:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
