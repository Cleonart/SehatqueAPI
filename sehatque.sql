-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 12:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehatque`
--

-- --------------------------------------------------------

--
-- Table structure for table `enterpriser`
--

CREATE TABLE `enterpriser` (
  `enterpriser_id` int(11) NOT NULL,
  `enterpriser_name` varchar(200) NOT NULL,
  `enterpriser_email` varchar(100) NOT NULL,
  `enterpriser_password` varchar(100) NOT NULL,
  `enterpriser_telephone_number` varchar(20) DEFAULT NULL,
  `enterpriser_avatar` varchar(100) NOT NULL,
  `enterpriser_link_referral` varchar(100) DEFAULT NULL,
  `enterpriser_link_referee` varchar(100) NOT NULL,
  `enterpriser_email_confirmation` int(11) DEFAULT NULL,
  `enterpriser_number_confirmation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterpriser`
--

INSERT INTO `enterpriser` (`enterpriser_id`, `enterpriser_name`, `enterpriser_email`, `enterpriser_password`, `enterpriser_telephone_number`, `enterpriser_avatar`, `enterpriser_link_referral`, `enterpriser_link_referee`, `enterpriser_email_confirmation`, `enterpriser_number_confirmation`) VALUES
(12011, 'Benny Pandelaki', 'bennypandelaki@gmail.com', 'bennypandelaki', '999999', '', 'bennypandelaki', '-', NULL, NULL),
(3266073, 'John Doe', 'johndoe@gmail.com', 'johndoe', '000000', '', 'johndoe', '', NULL, NULL),
(5280284, 'Aldo Kindangen', 'aldokindangen@gmail.com', 'aldo', '08619291929', '', 'aldoganteng', '', NULL, NULL),
(5950631, 'Cleonart Dotulong', 'zredhard@gmail.com', '21212', '121212', '', 'cleonart', '', NULL, NULL),
(7131138, 'Cleonart Dotulong', 'zredhard@gmail.com', '1111', '1212121212', '', 'sehat', '', NULL, NULL),
(9539007, 'tesds', 'zredhard@gmail.com', 'erer', '12121', '', 'ere', '', NULL, NULL),
(9865418, 'Jane Doe', 'janedoe@gmail.com', 'janedoe', '08121212', '', 'janedoe', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterpriser`
--
ALTER TABLE `enterpriser`
  ADD PRIMARY KEY (`enterpriser_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
