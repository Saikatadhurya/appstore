-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 09:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(11) NOT NULL,
  `app_name` text NOT NULL,
  `category` text NOT NULL,
  `size` text NOT NULL,
  `app_version` text NOT NULL,
  `downloads` text NOT NULL,
  `price` text NOT NULL,
  `about` text NOT NULL,
  `rating` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `image` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `app_name`, `category`, `size`, `app_version`, `downloads`, `price`, `about`, `rating`, `keyword`, `image`, `company`) VALUES
(1, 'Adobe Reader', 'mobile', '', '', '', '', '', 0, 'adobe reader pdf', 'adobereader.png', 'Adobe'),
(2, 'MS Word', 'mobile desktop', '', '', '', '', '', 0, 'ms word microsoft docx', 'word.png', 'Microsoft Co-orporation'),
(3, 'Facebook', 'mobile', '', '', '', '', '', 0, 'facebook fb ', 'facebook.png', 'Facebook'),
(4, 'WhatsApp Messenger', 'mobile desktop', '', '', '', '', '', 0, 'whatsapp messenger wp whtsapp', 'whatsapp.png', 'WhatsApp Inc.'),
(5, 'Messenger - Text and Video Chat for Free', 'mobile desktop', '', '', '', '', '', 0, 'fb messenger video chat chatting text calling facebook', 'fbmessenger.png', 'Facebook');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `pass`, `created`) VALUES
(16, 'sagar', 'sag@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-04-04 03:51:30'),
(17, 'Nishant', 'nis@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-04-05 02:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
