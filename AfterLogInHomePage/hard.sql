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
-- Table structure for table `hard`
--

CREATE TABLE `hard` (
  `Questions` varchar(5000) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `answers` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hard`
--

INSERT INTO `hard` (`Questions`, `a`, `b`, `c`, `d`, `answers`) VALUES
('20 ÷ 4', '5', '2', '8', '4', 'a'),
('24 ÷ 3', '6', '8', '12', '4', 'b'),
('100 ÷ 10', '20', '5', '10', '15', 'c'),
('3/4 ÷ 1/2', '1.5', '0.75', '1.25', '1.1', 'a'),
('7.5 ÷ 2.5', '3', '2', '2.5', '3.5', 'a'),
('-10 ÷ 2', '-5', '-2', '-4', '-3', 'a'),
('17 ÷ 4', '4', '3', '5', '4.25', 'd'),
('1 ÷ 3', '0.3333', '0.25', '0.5', '0.5555', 'a'),
('9 ÷ 1.5', '6', '3', '4', '5', 'a'),
('15 ÷ 1', '15', '10', '5', '20', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
