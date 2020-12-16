-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(100) NOT NULL,
  `Subjects` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `Subjects`) VALUES
(1, 'Python'),
(2, 'Java'),
(3, 'Java2'),
(4, 'Ruby on rails'),
(5, 'cobol'),
(6, 'Ruby_on_rails');

-- --------------------------------------------------------

--
-- Table structure for table `cobol`
--

CREATE TABLE `cobol` (
  `col_1` varchar(255) NOT NULL,
  `col_2` varchar(255) NOT NULL,
  `col_3` varchar(255) NOT NULL,
  `col_4` varchar(255) NOT NULL,
  `col_5` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `col_1` varchar(255) NOT NULL,
  `col_2` varchar(255) NOT NULL,
  `col_3` varchar(255) NOT NULL,
  `col_4` varchar(255) NOT NULL,
  `col_5` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`col_1`, `col_2`, `col_3`, `col_4`, `col_5`, `ans`) VALUES
('Correct statement for print anything in java', 'system.print(\"Hello World\");', 'system.out.print(\"Hello World\");', 'system.out.println(\"Hello World\");', 'Both b and c', 'Both b and c'),
('Does java supports OOPs concept', 'Yes', 'No ', 'Both a and b', 'None of the above', 'Yes'),
('Features of java', 'Platform Independent', 'Prvide Multithreading', 'Both a and b', 'None of the above', 'Both a and b'),
('Java is a platfrom dependent', 'Yes', 'no', 'Some Cases', 'In all cases', 'Yes'),
('Java support GUI', 'Yes by using applets', 'No', 'Never', 'None of the above', 'Yes by using applets'),
('Select the correct one', 'Without class java program cannot be run', 'It can be run', 'No one is correct', 'Option 1 is correct', 'Option 1 is correct'),
('What is java', 'Programming Language', 'Machine Language ', 'Object oriented', 'None of the above', 'Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `java2`
--

CREATE TABLE `java2` (
  `col_1` varchar(255) NOT NULL,
  `col_2` varchar(255) NOT NULL,
  `col_3` varchar(255) NOT NULL,
  `col_4` varchar(255) NOT NULL,
  `col_5` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java2`
--

INSERT INTO `java2` (`col_1`, `col_2`, `col_3`, `col_4`, `col_5`, `ans`) VALUES
('Correct statement for print anything in java', 'system.print(\"Hello World\");', 'system.out.print(\"Hello World\");', 'system.out.println(\"Hello World\");', 'Both b and c', 'Both b and c'),
('Does java supports OOPs concept', 'Yes', 'No ', 'Both a and b', 'None of the above', 'Yes'),
('Features of java', 'Platform Independent', 'Prvide Multithreading', 'Both a and b', 'None of the above', 'Both a and b'),
('Java is a platfrom dependent', 'Yes', 'no', 'Some Cases', 'In all cases', 'Yes'),
('Select the correct one', 'Without class java program cannot be run', 'It can be run', 'No one is correct', 'Option 1 is correct', 'Option 1 is correct'),
('What is java', 'Programming Language', 'Machine Language ', 'Object oriented', 'None of the above', 'Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `col_1` varchar(255) NOT NULL,
  `col_2` varchar(255) NOT NULL,
  `col_3` varchar(255) NOT NULL,
  `col_4` varchar(255) NOT NULL,
  `col_5` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`col_1`, `col_2`, `col_3`, `col_4`, `col_5`, `ans`) VALUES
('In Python 3, the maximum value for an integer is 263 - 1:', 'FALSE', 'TRUE', '-', '-', 'FALSE'),
('Is Python case sensitive when dealing with identifiers?', 'yes', 'no', 'machine dependent', 'none of the mentioned', 'yes'),
('What is python?', 'Programming Language', 'Knowledge Language', 'High level Programming Language', 'Low level Programming Language', 'High level Programming Language'),
('What is the default value of encoding in encode()?', 'ascii', 'qwerty', 'utf-8', 'utf-16', 'utf-8'),
('What is the maximum possible length of an identifier?', '31 characters', '63 characters', '79 characters', 'none of the mentioned', 'none of the mentioned'),
('What python do?', 'Task', 'Knowledge Language', 'High level Programming Language', 'Low level Programming Language', 'Based on what you input'),
('Which of the following is an invalid variable?', 'my_string_1', '1st_string', 'foo', '_', '1st_string'),
('Which of the following is invalid?', 'a = 1', '__a = 1', '__str__ = 1', 'none of the mentioned', 'none of the mentioned');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `quiz_name` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `total_questions` varchar(100) NOT NULL,
  `user_attempt` varchar(100) NOT NULL,
  `total_score` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_name`, `quiz_name`, `date_time`, `total_questions`, `user_attempt`, `total_score`) VALUES
(1, 'Harshit Bhardwaj', 'Java', '2020-12-16 11:50:12', '7', '6', '3'),
(2, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:53:35', '4', '3', '2'),
(3, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:56:32', '4', '3', '2'),
(4, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:57:06', '4', '3', '2'),
(5, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:57:23', '4', '3', '2'),
(6, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:57:38', '4', '3', '2'),
(7, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:57:45', '4', '3', '2'),
(8, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:58:39', '4', '3', '2'),
(9, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:58:47', '4', '3', '2'),
(10, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:58:58', '4', '3', '2'),
(11, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:59:07', '4', '3', '2'),
(12, 'Harshit Bhardwaj', 'Python', '2020-12-16 11:59:51', '4', '3', '2'),
(13, 'Harshit Bhardwaj', 'Java2', '2020-12-16 12:01:13', '7', '7', '4'),
(14, 'Kanhaiya Bhayana', 'Python', '2020-12-16 12:39:48', '8', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ruby_on_rails`
--

CREATE TABLE `ruby_on_rails` (
  `col_1` varchar(255) NOT NULL,
  `col_2` varchar(255) NOT NULL,
  `col_3` varchar(255) NOT NULL,
  `col_4` varchar(255) NOT NULL,
  `col_5` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `u_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fname`, `uname`, `email`, `phone_no`, `course`, `pass`, `u_role`) VALUES
(1, 'Alivendar Singh Kaur', 'Al', 'al@gamil.com', '123456789', 'B.tech', 'Alsingh@1234', 'admin'),
(2, 'Harshit Bhardwaj', 'harshit', 'hb@gamil.com', '123456789', 'B.tech', 'hb1234', 'user'),
(3, 'Kanhaiya Bhayana', 'kanhaiya', 'kanhaiyabhayana1@gmail.com', '7983889899', 'B.tech', '12345', 'user'),
(4, 'Sashi Bala', 'sashi', 'bala1@gmail.com', '10101010', 'BCA', 'bala', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cobol`
--
ALTER TABLE `cobol`
  ADD UNIQUE KEY `col_1` (`col_1`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD UNIQUE KEY `col_1` (`col_1`);

--
-- Indexes for table `java2`
--
ALTER TABLE `java2`
  ADD UNIQUE KEY `col_1` (`col_1`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD UNIQUE KEY `col_1` (`col_1`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruby_on_rails`
--
ALTER TABLE `ruby_on_rails`
  ADD UNIQUE KEY `col_1` (`col_1`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
