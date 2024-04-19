-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 01:42 PM
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
-- Database: `teanso_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_to_state`
--

CREATE TABLE `country_to_state` (
  `id` int(10) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_to_state`
--

INSERT INTO `country_to_state` (`id`, `country`, `state`) VALUES
(1, 'india', 'Andhra Pradesh'),
(2, 'india', 'Arunachal Pradesh'),
(3, 'india', 'Assam'),
(4, 'india', 'Bihar'),
(5, 'india', 'Chhattisgarh                                              '),
(6, 'india', 'Goa'),
(7, 'india', 'Gujarat'),
(8, 'india', 'Haryana'),
(9, 'india', 'Himachal Pradesh'),
(10, 'india', 'Jharkhand'),
(11, 'india', 'Karnataka'),
(12, 'india', 'Kerala'),
(13, 'india', 'Madhya Pradesh'),
(14, 'india', 'Maharashtra'),
(15, 'india', 'Manipur'),
(16, 'india', 'Meghalaya'),
(17, 'india', 'Mizoram'),
(18, 'india', 'Nagaland'),
(19, 'india', 'Odisha'),
(20, 'india', 'Punjab'),
(21, 'india', 'Rajasthan'),
(22, 'india', 'Sikkim'),
(23, 'india', 'Tamil Nadu'),
(24, 'india', 'Telangana'),
(25, 'india', 'Tripura'),
(26, 'india', 'Uttar Pradesh'),
(27, 'india', 'Uttarakhand'),
(28, 'india', 'West Bengal'),
(29, 'india', 'Andaman and Nicobar Island'),
(30, 'india', 'Chandigarh'),
(31, 'india', 'Dadra and Nagar Haveli and Daman and Diu'),
(32, 'india', 'Delhi'),
(33, 'india', 'Ladakh'),
(34, 'india', 'Lakshadweep'),
(35, 'india', 'Jammu and Kashmir'),
(36, 'india', 'Puducherry');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ph_number` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `ph_number`, `gender`, `country`, `state`) VALUES
(1, 'Subash', 'Jeyaram', 'jeyaramsubash41@gmail.com', '1234566', '7868767867', 'male', 'india', 'Maharashtra'),
(2, 'Subash', 'Jeyaram', 'subashjeyaram380@gmail.com', '1234566', '7868767867', 'male', 'india', 'Maharashtra'),
(3, 'Subash', 'Jeyaram', 'leoneymar1226@gamil.com', '1234566', '7868767867', 'male', 'india', 'Maharashtra'),
(4, 'Subash', 'Jeyaram', 'Ronaldo@mail.com', '1234566', '7868767867', 'male', 'india', 'Jharkhand'),
(5, 'dfsf', 'sdfssdfv', 'virat@mail.com', '1234566', '7868767867', 'male', 'india', 'Jharkhand'),
(6, 'Virat', 'Kholi', 'viratkholi@gmail.com', 'subash', '8787878787', 'male', 'india', 'Delhi'),
(7, 'Neymar', 'Junior', 'neymarjr@gmail.com', 'messi', '5656565656', 'male', 'india', 'Gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_to_state`
--
ALTER TABLE `country_to_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_to_state`
--
ALTER TABLE `country_to_state`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
