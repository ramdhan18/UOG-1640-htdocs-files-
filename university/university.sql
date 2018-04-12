-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 12:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`dob`, `address`, `username`, `password`, `email`, `id`, `fullName`) VALUES
('2000-07-12', '45 Mandalay Road', 'ciutt.ciutt', '123456', 'oliviaasdar12@gmail.com', 4, 'Olivia Asdar'),
('2000-12-18', '5 Kim Keat Road', 'ramadhan18', '123456', 'ramadhanramli18@gmail.com', 5, 'Muhammad Ramadhan Ramli');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `afeedback`
--

CREATE TABLE `afeedback` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afeedback`
--

INSERT INTO `afeedback` (`id`, `fullName`, `number`, `email`, `file`, `feedback`) VALUES
(2, 'admin', '86934232', 'admin@gmail.com', 'photo8882-201700.jpg', 'Fnatic');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `file`, `comment`) VALUES
(9, 'ramadhan18', 'photo20a37a5170be54784f0b98fef2d69694--frogs-sad.jpg', 'RPU looks like frog'),
(10, 'ciutt.ciutt', 'photophp.jpg', 'PHP = Pemberi Harapan Palsu');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullName`, `number`, `email`, `file`, `feedback`, `likes`) VALUES
(38, 'ramadhan18', '94218332', 'ramadhanramli18@gmail.com', 'photo20a37a5170be54784f0b98fef2d69694--frogs-sad.jpg', 'RPU', 10),
(39, 'ramadhan18', '94218332', 'ramadhanramli18@gmail.com', 'photo1484991208584.jpg', 'RPU', 7),
(40, 'ramadhan18', '94218332', 'ramadhanramli18@gmail.com', 'photo381772_1.jpg', 'One piece', 2),
(41, 'ciutt.ciutt', '81702482', 'oliviaasdar12@gmail.com', 'photophp.jpg', 'PHP', 15),
(42, 'ciutt.ciutt', '81702482', 'oliviaasdar12@gmail.com', 'photoicon.php.png', 'PHP', 3),
(43, 'ciutt.ciutt', '94218332', 'oliviaasdar12@gmail.com', 'photo169830_10150098561681122_629911121_6337625_5802834_o.jpg', 'Swiper', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afeedback`
--
ALTER TABLE `afeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `afeedback`
--
ALTER TABLE `afeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
