-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 09:12 AM
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
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ID` int(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Email` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `Verify` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ID`, `Name`, `Password`, `Date`, `Email`, `code`, `Verify`) VALUES
(0, 'admin', 'adminadmin123', '2024-03-06 10:19:12', 'admin@gmail.com', '', 'admin'),
(82, 'bob', '123456', '2024-03-05 14:54:21', 'bob@gmail.com', '', 'Ok'),
(83, 'joshua', 'joshua123', '2024-03-06 02:32:30', 'joshuanielb@gmail.com', '', 'me'),
(85, 'gig de lana', 'gigi1234', '2024-03-11 08:26:34', 'gigi@gmail.com', '', 'Yema');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` varchar(255) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `Questions` varchar(5000) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `answers` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `Questions`, `a`, `b`, `c`, `d`, `answers`) VALUES
('65e7414c7c10d', '65e7c45919790', 'hak?', 'dog', 'hot', 'huy', 'weqr', 'a'),
('65e7414c7c10d', '65e7d32bd34d4', 'father - d, mother -_', 'm', 'd', 's', 'v', 'd'),
('65e7414c7c10d', '65e7d352d553b', 'top 1 cat', 'lion', 'jaguar', 'leopard', 'tiger', 'a'),
('65eea3f961a2c', '65eea78c8bede', 'public class QuizQuestion1 {\n    public static void main(String[] args) {\n        int a = 5;\n        int b = 2;\n        System.out.println(a % b);\n    }\n}\n', '1', '8', 'True', 'Error', 'a'),
('65eea3f961a2c', '65eea8f05e314', 'public class QuizQuestion2 {\n    public static void main(String[] args) {\n        int x = 10;\n        System.out.println(--x);\n    }\n}\n', '9', '10', '11', 'Compilation Error', 'a'),
('65eea3f961a2c', '65eea96a74fef', 'public class QuizQuestion3 {\n    public static void main(String[] args) {\n        String s1 = \"Java\";\n        String s2 = \"Java\";\n        System.out.println(s1.equals(s2));\n    }\n}\n', 'true', 'false', ' Compilation Error', ' Runtime Error', 'b'),
('65eea3f961a2c', '65eea9b01dad2', 'public class QuizQuestion4 {\n    public static void main(String[] args) {\n        int x = 15;\n        System.out.println(x >> 1);\n    }\n}\n', '7', '8', '15', 'Error', 'a'),
('65eea3f961a2c', '65eea9e9538d0', 'public class QuizQuestion5 {\n    public static void main(String[] args) {\n        double a = 10.0 / 3.0;\n        System.out.println(String.format(\"%.2f\", a));\n    }\n}\n', '3.00', '3.33', '3.0', '3', 'b'),
('65eeaa78466a2', '65eeab256128e', 'public class Main {\n    public static void main(String[] args) {\n        int x = 5;\n        int y = 10;\n        System.out.println(++x * y--);\n    }\n}\n', '60', '50', '55', '45', 'c'),
('65eeaa78466a2', '65eeab6e92a28', 'public class Main {\n    public static void main(String[] args) {\n        String str1 = \"Hello\";\n        String str2 = \"World\";\n        System.out.println(str1.concat(str2));\n    }\n}\n', 'HelloWorld', 'Hello World', ' HelloWorld', ' Compile error', 'a'),
('65eeaa78466a2', '65eeab9996714', 'public class Main {\n    public static void main(String[] args) {\n        int[] array = {1, 2, 3, 4, 5};\n        System.out.println(array[2]);\n    }\n}\n', '2', '3', '4', 'Error', 'b'),
('65eeaa78466a2', '65eeabb9bc713', 'public class Main {\n    public static void main(String[] args) {\n        String str = \"Java Programming\";\n        System.out.println(str.substring(5, 12));\n    }\n}\n', 'Program', 'Programming', 'Java', 'grammin', 'b'),
('65eeaa78466a2', '65eeabe41528c', 'public class Main {\n    public static void main(String[] args) {\n        int num = 16;\n        System.out.println(Math.sqrt(num));\n    }\n}\n', '4.0', '4', '16', '18', 'a'),
('65eeac3922b94', '65eeacc6317f0', 'public class Main {\n    public static void main(String[] args) {\n        int[][] array = {{1, 2, 3}, {4, 5, 6}};\n        System.out.println(array[1][2]);\n    }\n}\n', '1', '2', '3', '6', 'd'),
('65eeac3922b94', '65eead22a5061', 'public class Main {\n    public static void main(String[] args) {\n        String str = \"hello\";\n        System.out.println(str.substring(1, 4));\n    }\n}\n', 'hell', 'ello', 'ell', 'llo', 'c'),
('65eeac3922b94', '65eead4f81ffd', 'public class Main {\n    public static void main(String[] args) {\n        int x = 5;\n        System.out.println(x++ + ++x);\n    }\n}\n', '11', '12', '13', '10', 'c'),
('65eeac3922b94', '65eead7499b1c', 'public class Main {\n    public static void main(String[] args) {\n        String[] array = {\"a\", \"b\", \"c\"};\n        for (String s : array) {\n            System.out.print(s);\n        }\n    }\n}\n', 'abc', 'acb', 'bac', 'cab', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` varchar(255) NOT NULL,
  `ID` int(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `diff` varchar(255) NOT NULL,
  `quizname` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `ID`, `Name`, `diff`, `quizname`, `visibility`) VALUES
('65e7414c7c10d', 82, 'bob', 'Hard', 'Bye Bye', 'Public'),
('65e7c1cfdb09d', 82, 'bob', 'Medium', 'Joshua', 'Public'),
('65e7c37c05e30', 82, 'bob', 'Hard', 'Bob', 'Private'),
('65eea3f961a2c', 0, 'admin', 'Easy', 'Java for Beginners quiz', 'Public'),
('65eeaa78466a2', 0, 'admin', 'Medium', 'java Quiz for Intermediates', 'Public'),
('65eeac3922b94', 0, 'admin', 'Hard', 'Java for Advanced Learners', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_results`
--

CREATE TABLE `quiz_results` (
  `ID` int(50) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `eid` varchar(250) NOT NULL,
  `score` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_results`
--

INSERT INTO `quiz_results` (`ID`, `Name`, `eid`, `score`, `total_questions`, `points`) VALUES
(82, 'bob', '65e7414c7c10d', 3, 3, 8089),
(0, 'admin', '65eea3f961a2c', 0, 1, 500),
(85, 'gig de lana', '65eea3f961a2c', 4, 5, 16017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UC_list` (`Email`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
