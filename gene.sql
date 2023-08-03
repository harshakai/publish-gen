-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 12:43 PM
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
-- Database: `gene`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `adminid` text DEFAULT NULL,
  `createat` date DEFAULT current_timestamp(),
  `role` varchar(50) DEFAULT 'admin',
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `adminid`, `createat`, `role`, `password`) VALUES
(1, 'Sridhar', 'sridhar@gmail.com', '8324569710', 'b8ffc58940677d1498a66ad0c38c0e02', '2023-08-03', 'admin', '12345'),
(2, 'Vijay ', 'vijay@gmail.com', '9576320148', 'eec54536091ae33188ae299b8a4138e3', '2023-08-03', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `jobid` text DEFAULT NULL,
  `createdat` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `location`, `email`, `jobid`, `createdat`) VALUES
(1, 'Software Develpoer', 'Excellent knowledge of relational databases, SQL and ORM technologies (JPA2, Hibernate)\r\n\r\nExperience developing web applications using at least one popular web framework (JSF, Wicket, GWT, Spring MVC)\r\n\r\nExperience with test-driven development\r\n\r\nRequirements:\r\n\r\nProficiency in software engineering tools\r\n\r\nAbility to document requirements and specifications\r\n\r\nBSc degree in Computer Science, Engineering or relevant field', 'Hyderabad', 'genesis@gmail.com', '21d924e92f401ec3df4b74840a520779', '2023-08-03'),
(2, 'Web Developer', 'The ideal candidate is a creative problem solver who will work in coordination with cross-functional teams to design, develop, and maintain our next generation websites and web tools. You must be comfortable working as part of a team while taking the initiative to take lead on new innovations and projects.\r\n\r\nResponsibilities\r\n• Revise, edit, proofread & optimize web content\r\n• Perform code reviews, unit testing, and continuous integration\r\n• Work cross-functionally to enhance overall user experience of our platforms\r\n• Own various design tasks involved in the web development life cycle from start to finish\r\n\r\nQualifications\r\n• Bachelor\'s degree or equivalent experience in Computer Science\r\n• 3+ years\' of experience using HTML, CSS, and JavaScript\r\n• Proficiency in at least one server-side technology (Java, PHP, NodeJS, Python, Ruby)\r\n• Ability to multi-task, organize, and prioritize work\r\n', 'Visakhapatnam', 'pravishree@gmail.com', 'f0798093cc71fdcac8e1c767a6cf8d99', '2023-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `userid` text DEFAULT NULL,
  `createdat` date NOT NULL DEFAULT current_timestamp(),
  `role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `userid`, `createdat`, `role`) VALUES
(1, 'Yatheswar', 'Ethalapaka', 'yatheswar546@gmail.com', '8374178359', 'Yathe12345', 'f4c107415c06badece96304a18b40c0b', '2023-08-03', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
