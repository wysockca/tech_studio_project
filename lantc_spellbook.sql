-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2018 at 06:32 PM
-- Server version: 5.5.61-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lantc_spellbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `image`) VALUES
(1, 'Apprentice', ''),
(2, 'Magician', ''),
(3, 'Sorcerer', ''),
(4, 'Grand Wizard', '');

-- --------------------------------------------------------

--
-- Table structure for table `spellentry`
--

CREATE TABLE `spellentry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `spell1` varchar(11) NOT NULL,
  `spell2` varchar(11) NOT NULL,
  `spell3` varchar(11) NOT NULL,
  `spell4` varchar(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spellentry`
--

INSERT INTO `spellentry` (`id`, `name`, `email`, `username`, `password`, `spell1`, `spell2`, `spell3`, `spell4`, `level_id`) VALUES
(1, 'user', 'user@user.com', 'user', 'user', '1', '1', '1', '1', 0),
(2, 'user2', 'user2@user2.com', 'user2', 'user2', '1', '1', '1', '1', 0),
(5, 'Carly', 'wysockca@sheridancollege.ca', 'wysockca', 'p@ssw0rd', '1', '1', '1', '1', 0),
(9, 'test', 'test@email.com', 'test', 'test', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `spell1` int(11) NOT NULL,
  `spell2` int(11) NOT NULL,
  `spell3` int(11) NOT NULL,
  `spell4` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `username`, `password`, `spell1`, `spell2`, `spell3`, `spell4`, `level_id`) VALUES
(1, 'user', 'user@user.com', 'user', 'user', 1, 1, 1, 1, 1),
(2, 'user2', 'user2@user2.com', 'user2', 'user2', 1, 1, 1, 1, 2),
(14, 'test', 'test@email.com', 'test', 'test', 0, 0, 0, 0, 0),
(15, 'Carly', 'wysockca@sheridancollege.ca', 'wysockca', 'password', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spellentry`
--
ALTER TABLE `spellentry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INDEXED` (`level_id`) USING BTREE;

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INDEXED` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spellentry`
--
ALTER TABLE `spellentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
