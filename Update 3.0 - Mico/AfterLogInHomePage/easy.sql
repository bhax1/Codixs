-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 01:36 AM
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
-- Table structure for table `easy`
--

CREATE TABLE `easy` (
  `Questions` varchar(5000) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `answers` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `easy`
--

INSERT INTO `easy` (`Questions`, `a`, `b`, `c`, `d`, `answers`) VALUES
('4+3?', '4', '7', '2', '6', 'b'),
('8-2?', '4', '7', '2', '6', 'd'),
('1+1?', '4', '7', '2', '6', 'c'),
('2x2?', '4', '7', '2', '6', 'a'),
('2x1?', '4', '7', '2', '6', 'c'),
('5-3', '1', '2', '6', '5', 'b'),
('4+2', '1', '7', '4', '6', 'd'),
('3+6', '5', '9', '2', '5', 'b'),
('8-6', '8', '4', '3', '2', 'd'),
('9-3', '7', '2', '6', '5', 'c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
