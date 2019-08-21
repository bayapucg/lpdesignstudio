-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2019 at 05:38 AM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lparka_lpdesign`
--
CREATE DATABASE IF NOT EXISTS `lparka_lpdesign` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lparka_lpdesign`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content`, `image`) VALUES
(1, 'Award Winning Interior Design', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '61d3d3d90e0679b36f7d0e3b9f066568.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'admin', 'admin@lpdesign.com', 'admin', '0987654345');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(2, 'a', 'a@gmail.com', 'aa', 'a', '0000-00-00'),
(6, 's', 's@gmail.com', 'd', 'd', '2019-08-13'),
(7, 's', 's@gmail.com', '87654', 'hgfd', '2019-08-13'),
(8, 's', 's@gmail.com', '87654', 'hgfd', '2019-08-13'),
(9, 'a', 'shramishthapatel2016@gmail.com', '987654345', 'fds', '2019-08-13'),
(10, 's', 'shramishthapatel2016@gmail.com', '98765432', 'few', '2019-08-13'),
(11, 's', 'shramishthapatel2016@gmail.com', '98765432', 'few', '2019-08-13'),
(12, 'Shiva', 'shiva.arkainfoteck@gmail.com', '1234567890', 'sdc bn', '2019-08-13'),
(13, 'zasxmj', 'shiva.arkainfoteck@gmail.com', '1234567890', 'smk', '2019-08-13'),
(14, 'adcfas', 'shiva.arkainfoteck@gmail.com', '9452274905', 'de[\'', '2019-08-13'),
(15, 'shrami', 'shramishthapatel2016@gmail.com', '9452274905', 'kjhgfds', '2019-08-13'),
(16, 'shrami', 'shramishthapatel2016@gmail.com', '9452274905', 'asd', '2019-08-13'),
(17, 'shrami', 'shramishthapatel2016@gmail.com', '9452274905', 'addasdxswd', '2019-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `web` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `open_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `email`, `address`, `web`, `phone1`, `phone2`, `open_time`) VALUES
(1, 'info@lpdesignstudio.org', 'I Labs,hyderabad Technology Park, Level 2,Oval Building,Plot No.18,Inorbit mall Road ,Hyderabad-500081', '+91-9154065252', '+91-9154065253', '+91-9154065252', 'Monday - Saturday 10:00 - 18:00');

-- --------------------------------------------------------

--
-- Table structure for table `ourprocess`
--

CREATE TABLE `ourprocess` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourprocess`
--

INSERT INTO `ourprocess` (`id`, `title`, `content`) VALUES
(1, 'MEET & AGREE', '<p>Meet &amp; agree</p>\r\n'),
(2, 'IDEA & CONCEPT', '<p>Idea &amp; concept</p>\r\n'),
(3, 'DESIGN & CREATE', '<p>Design &amp; create</p>\r\n'),
(4, 'BUILD & INSTALL', '<p>Build &amp; install</p>\r\n'),
(5, 'EMI', '<p>Coming Soon...</p>\r\n'),
(6, 'Choose Design', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title1`, `title2`, `image`) VALUES
(1, 'OUR EXPERTISE FOR', 'INTERIOR DESIGN', 'b21d49042ecefdffbe0542d65111bcac.jpg'),
(2, 'FEATURED PROJECT', 'GREEN INTERIOR', 'e3400975f26829a8d114c64b7254b6dc.jpg'),
(3, 'INTERIOR REMODELING TO MAKES', 'YOUR LIFE EASIER', '9c8b0a544cd2318bc130fc23e0f9d833.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `profession`, `content`) VALUES
(2, 'Petrick', 'Customer', '<p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip..</p>\r\n'),
(3, 'James', 'Customer', '<p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>\r\n'),
(4, 'John', 'Customer', '<p>I&#39;m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>\r\n'),
(5, 'Michel', 'Customer', '<p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo`
--

CREATE TABLE `whatwedo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatwedo`
--

INSERT INTO `whatwedo` (`id`, `title`, `image`, `content`) VALUES
(1, 'RESIDENTIAL', 'ade45a7854f5454625034a49e746d77f.jpg', '<p>Residential designers combine technical skill and creativity to develop plans for homes that improve the levels of functionality, efficiency, comfort, and appearance. Explore the education needed to become a residential designer, and get more info about their job duties and certification options.&nbsp;</p>\r\n'),
(2, 'OFFICE', '69f313bbde04de9378092cc035e5d258.jpg', '<p>Office designers combine technical skill to develop plans for offices that improve efficiency, comfort, and appearance. This professional will guide you selecting the materials, layout, space distribution, interior walls arrangement and serve as a liaison between all related professionals working in the construction project.</p>\r\n'),
(3, 'COMMERCIAL', '9d11e7034e03df55ec442a4f471f9d9a.jpg', '<p>Commercial designer is the professional who will create and direct the construction or renovation of commercial spaces. This professional will guide you selecting the materials, layout, space distribution, interior walls arrangement and serve as liaison between all related professionals working in the construction project.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourprocess`
--
ALTER TABLE `ourprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourprocess`
--
ALTER TABLE `ourprocess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
