-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 01:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codixs`
--

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `Questions` varchar(5000) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `answers` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`Questions`, `a`, `b`, `c`, `d`, `answers`) VALUES
('8x4', '23', '40', '32', '44', 'c'),
('7x5', '24', '51', '23', '35', 'd'),
('9x2', '18', '33', '62', '27', 'a'),
('4x3', '23', '12', '52', '69', 'b'),
('5x6', '40', '26', '30', '80', 'c'),
('6x2', '12', '53', '26', '42', 'a'),
('3x9', '45', '12', '27', '98', 'c'),
('2 * 3?', '4', '5', '6', '7', 'c'),
('5 * 6?', '25', '30', '35', '40', 'b'),
('8 * 9?', '64', '72', '80', '88', 'b'),
('7 * 4?', '21', '25', '28', '30', 'c'),
('10 * 10?', '90', '100', '110', '120', 'b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
