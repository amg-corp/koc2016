-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 09:24 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koc`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `PostalAddress` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `checkboxes` varchar(500) NOT NULL,
  `DiateryRequirement` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `role`, `PostalAddress`, `mobile`, `Email`, `checkboxes`, `DiateryRequirement`) VALUES
(1, 'Aritra Mondal', 'Student', 'Near Allahabad Bank', '09432921768', 'sayankarmakar7sk.sk@gmail.com', '1', 'Veg'),
(3, 'Arijit Karmakar', 'Opticians', 'Plot1, MGP Sailash Vila, Gold House\r\nTHRUVALLUR ST, OKIYYAMPETTAI\r\nTHURAIPAKKAM', '09432349014', 'karmakararijit02@gmail.com', '2', 'Veg'),
(4, 'Avjeet Banerjee', 'Corporate', '4/22 Seth Bagaan Road\r\nDum Dum Jn', '09941162374', 'avijeet.banerjee@gmail.com', '3', 'Veg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
