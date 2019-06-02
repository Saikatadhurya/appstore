-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 08:35 AM
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
  `sizepc` int(11) NOT NULL,
  `sizemob` int(11) NOT NULL,
  `app_version_pc` text NOT NULL,
  `app_version_mob` text NOT NULL,
  `downloads` text NOT NULL,
  `price` text NOT NULL,
  `about` text NOT NULL,
  `rating` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `image` text NOT NULL,
  `company` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `app_name`, `category`, `sizepc`, `sizemob`, `app_version_pc`, `app_version_mob`, `downloads`, `price`, `about`, `rating`, `keyword`, `image`, `company`, `description`) VALUES
(1, 'Adobe Reader', 'mobile', 0, 20, 'None', '12.0.1', '', '', '', 9, 'adobe reader pdf', 'adobereader.png', 'Adobe', 'Adobe Acrobat is a family of application software and Web services developed by Adobe Inc. to view, create, manipulate, print and manage files in Portable Document Format. The family comprises Acrobat Reader, Acrobat and Acrobat.com.'),
(2, 'MS Word', 'mobile desktop', 700, 100, '8.1.2', '12.2.1', '', '', '', 8, 'ms word microsoft docx', 'word.png', 'Microsoft Co-orporation', 'Microsoft Word is a word processor developed by Microsoft. It was first released on October 25, 1983 under the name Multi-Tool Word for Xenix systems.'),
(3, 'Facebook', 'mobile', 300, 80, 'None', '8.2.6', '', '', '', 10, 'facebook fb ', 'facebook.png', 'Facebook', 'Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes. '),
(4, 'WhatsApp Messenger', 'mobile desktop', 20, 100, '2.1.4', '8.6.4', '', '', '', 10, 'whatsapp messenger wp whtsapp', 'whatsapp.png', 'WhatsApp Inc.', 'WhatsApp Messenger is a freeware, cross-platform messaging and Voice over IP service owned by Facebook. It allows sending of text messages and voice messages, making voice and video calls as well as sharing images, documents, user location and other media.'),
(5, 'Messenger - Text and Video Chat for Free', 'mobile desktop', 200, 100, '14.11.1', '16.11.4', '', '', '', 9, 'fb messenger video chat chatting text calling facebook', 'fbmessenger.png', 'Facebook', 'Facebook Messenger is a messaging app and platform. Originally developed as Facebook Chat in 2008, the company revamped its messaging service in 2010, and subsequently released standalone iOS and Android apps in August 2011.');

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
(17, 'Nishant', 'nis@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-04-05 02:23:13'),
(18, 'nishant', 'nishant@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-06-01 13:59:41');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
