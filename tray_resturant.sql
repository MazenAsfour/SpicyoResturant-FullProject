-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tray resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `image5` varchar(200) NOT NULL,
  `image6` varchar(200) NOT NULL,
  `image7` varchar(200) NOT NULL,
  `image8` varchar(200) NOT NULL,
  `image9` varchar(200) NOT NULL,
  `image10` varchar(200) NOT NULL,
  `image11` varchar(200) NOT NULL,
  `image12` varchar(200) NOT NULL,
  `image13` varchar(200) NOT NULL,
  `image14` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `image11`, `image12`, `image13`, `image14`) VALUES
('Website Logo.png', 'Slide 2.png', 'Slide1.png', 'Slide 3.png', 'Recipe 1.png', 'rs3.png', 'Recipe 3.png', 'Recipe 4.png', 'Recipe 5.png', 'images/About.jpg', 'About.jpg', 'Client 1.jpg', 'Client 2.jpg', 'Client 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `nameresturant` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`nameresturant`, `contact`, `phone`, `email`, `location`) VALUES
('Tray Resturant', 'Contact Us', 2147483647, 'info@clevermindpob.org', 'Amman-Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `link3` varchar(1001) NOT NULL,
  `link4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link1`, `link2`, `link3`, `link4`) VALUES
('Homes', 'About us', 'Recipe It', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `trayvalues`
--

CREATE TABLE `trayvalues` (
  `value1` varchar(300) NOT NULL,
  `value2` varchar(500) NOT NULL,
  `value3` varchar(300) NOT NULL,
  `value4` varchar(500) NOT NULL,
  `value5` varchar(400) NOT NULL,
  `value6` varchar(400) NOT NULL,
  `value7` varchar(100) NOT NULL,
  `value8` varchar(100) NOT NULL,
  `value9` varchar(20) NOT NULL,
  `value10` varchar(100) NOT NULL,
  `value11` varchar(20) NOT NULL,
  `value12` varchar(100) NOT NULL,
  `value13` varchar(20) NOT NULL,
  `value14` varchar(100) NOT NULL,
  `value15` varchar(20) NOT NULL,
  `value16` varchar(100) NOT NULL,
  `value17` varchar(20) NOT NULL,
  `value18` varchar(500) NOT NULL,
  `value19` varchar(500) NOT NULL,
  `value20` varchar(500) NOT NULL,
  `value21` varchar(500) NOT NULL,
  `value22` varchar(500) NOT NULL,
  `value23` varchar(200) NOT NULL,
  `value24` varchar(200) NOT NULL,
  `value25` varchar(200) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `name1dec` varchar(500) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `name2dec` varchar(500) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `name3dec` varchar(500) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trayvalues`
--

INSERT INTO `trayvalues` (`value1`, `value2`, `value3`, `value4`, `value5`, `value6`, `value7`, `value8`, `value9`, `value10`, `value11`, `value12`, `value13`, `value14`, `value15`, `value16`, `value17`, `value18`, `value19`, `value20`, `value21`, `value22`, `value23`, `value24`, `value25`, `name1`, `name1dec`, `name2`, `name2dec`, `name3`, `name3dec`, `id`) VALUES
('The Best Ingredients make the Flavor better always', 'We are the first in our place, Try us!', 'the flavor is making us very  fast', 'We are the first in our place, Try us.', 'Our Chefs are the best', 'We are the first in our place, Try us.', 'Order Now', 'Nodless', '20', 'Egg', '10', 'Homemade', '10', 'Fish', '10', 'meat', '10', 'About Our Food & Restaurant', 'Order food from hundreds of Flavors. we are placed since 2005, with amazing places and chefs from all\r\nover the world, the best you can find it here. we make food with love passion and great hands always help.', 'Best Food', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard', 'Ourclient', '', '', '', 'Joay Mory', 'They Are The Best in Town.', 'Mari Jami', 'The flavor is talking', 'Emma Wati', 'They have a great shift', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link1`);

--
-- Indexes for table `trayvalues`
--
ALTER TABLE `trayvalues`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
