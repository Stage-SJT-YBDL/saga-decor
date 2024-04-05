-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saga_decor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_pseudo` varchar(25) NOT NULL,
  `admin_first_name` text NOT NULL,
  `admin_last_name` text NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `admin_avatar` varchar(1000) DEFAULT NULL,
  `admin_email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pseudo`, `admin_first_name`, `admin_last_name`, `admin_password`, `admin_avatar`, `admin_email`) VALUES
(1, 'jeandecor', 'jean', 'valjean', '', NULL, NULL),
(2, 'jeandecor', 'jean', 'valjean', '', NULL, NULL),
(3, 'tsubi', 'Luca', 'Malacie', '$2y$10$Xsv8nxN9SHNUfhtM562qheZi4ARqrjppP1lbhaR71cN7NrUKRgVHa', NULL, 'tsubasa.clarity@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `title` varchar(120) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `image` blob DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `author` varchar(300) DEFAULT NULL,
  `edit_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`title`, `id`, `image`, `description`, `status`, `author`, `edit_time`) VALUES
('ariana grande', 5, NULL, 'arianaaaaaaaaaaaaaa', NULL, NULL, '2024-04-05 13:09:09'),
('test', 6, NULL, 'testttttttttttttt', NULL, NULL, '2024-04-05 13:13:01'),
('test', 7, NULL, 'testttttttttttttt', NULL, NULL, '2024-04-05 13:21:56'),
('test', 8, NULL, 'test', NULL, NULL, '2024-04-05 13:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `title` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) DEFAULT NULL,
  `object` mediumtext DEFAULT NULL,
  `author` varchar(300) DEFAULT NULL,
  `delivered_time` date DEFAULT NULL,
  `view_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `primary_color` geometry NOT NULL,
  `secondary_color` geometry NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
