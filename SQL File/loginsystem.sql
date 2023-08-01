-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:06 AM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(10) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_role`) VALUES
(1, 'admin', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_description` varchar(200) NOT NULL,
  `job_location` varchar(30) NOT NULL,
  `contact_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_description`, `job_location`, `contact_email`) VALUES
(13, 'front end', 'to build a creative website', 'vizag', 'front@gmail.com'),
(14, 'Job 1', 'qwertyuiasdhjzxcvbn', 'vizag', 'abc@gmail.com'),
(15, 'job-1', 'asd', 'asq', 'zzdsdz@gmail.com'),
(16, 'job-2', 'aaaa', 'gfgh', 'fdzgz@gmail.com'),
(17, 'Software Development Engineer', 'A Software Development Engineer (SDE) is responsible for creating cross-platform applications and software systems, applying the principles of computer science, computer engineering, information techn', 'Vizag', 'sde@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `education` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `resume_references` text NOT NULL,
  `resumes` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `name`, `email`, `phone`, `summary`, `education`, `experience`, `skills`, `resume_references`, `resumes`) VALUES
(2, 'Harsha', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'asap', 'asap', 'asap', 'asap', '', NULL),
(3, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'ppppppp', 'ppppppp', 'pppppppp', 'ppppppp', 'pppppppp', NULL),
(4, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'ppppppp', 'ppppppp', 'pppppppp', 'ppppppp', 'pppppppp', NULL),
(5, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'ppppppp', 'ppppppp', 'pppppppp', 'ppppppp', 'pppppppp', NULL),
(6, 'kai', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', NULL),
(7, 'Kanimerakala.Harsha Vardhan', 'i3uwior@gmail.com', 4444555544, 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', NULL),
(8, 'Harsha', 'i3uwior@gmail.com', 4444555544, 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', 'ALTER TABLE resumes ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY;', NULL),
(9, 'harsha vardhan', 'yuko@gmail.com', 4444555544, 'aaaa', 'aaaaaaa', 'aaaaaa', 'aaaaa', 'aaaaa', NULL),
(10, 'Harsha', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'asap', 'asap', 'a', 'aa', 'a', NULL),
(11, 'Harsha', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'im a front end developer', 'bsc', '5years', 'frontend', '...', NULL),
(12, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'sadd', 'sda', 'asd', 'sdaaads', 'dsasd', NULL),
(13, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(14, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(15, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(16, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(17, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(18, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(19, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(20, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(21, 'harsha vardhan', 'kanimerakalaharshavardhan@gmail.com', 4444555544, 'qwass', 'asasas', 'asasasa', 'asas', 'asasasa', NULL),
(22, 'rst', 'srts@gmail.com', 0, 'srtrst', 'srtsrt', 'srttsr', 'srtsrt', 'srtrtsr', NULL),
(23, 'rst', 'srts@gmail.com', 0, 'srtrst', 'srtsrt', 'srttsr', 'srtsrt', 'srtrtsr', NULL),
(24, 'rst', 'srts@gmail.com', 0, 'srtrst', 'srtsrt', 'srttsr', 'srtsrt', 'srtrtsr', NULL),
(25, 'rst', 'srts@gmail.com', 0, 'srtrst', 'srtsrt', 'srttsr', 'srtsrt', 'srtrtsr', NULL),
(26, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'Sqasad', 'qeq', 'qaqeq', 'qsqs', 'qewq', NULL),
(27, 'kai', 'kaiuchiha@gmail.com', 4444555544, 'Sqasad', 'qeq', 'qaqeq', 'qsqs', 'qewq', NULL),
(28, 'harsha vardhan', 'i3uwior@gmail.com', 4444555544, 'sdfdf', 'dsfsdfs', 'dsfwdsdfsd', 'dsfsdfs', 'dsfdsafsa', NULL),
(29, 'harsha vardhan', 'i3uwior@gmail.com', 4444555544, 'sdfdf', 'dsfsdfs', 'dsfwdsdfsd', 'dsfsdfs', 'dsfdsafsa', NULL),
(30, 'Yatheswar', 'yathe@gmail.com', 9586320147, 'vgyuwudgfcyuvyuigvewfe yufgcyueugfvcyueryuyuqbfy', 'iebyucfbg v678ervcgbuifcergfyuvgb 8', 'iubfyuerwgb yc8bfgyuerbgtyucr3bgyu2ugcny8bog', 'gcyg3ryrgbnyut5gbnt78rubnuoi', 'gbbeciurgrbn8tygnvrytu8gtcuiwecgrnt wu9[gtuiershdgiuvqepbycg89pecuathr9pu', 0x31333662343865373333343766313930353435313234313063336531646362662e706466),
(31, 'kai', 'kaiuchiha@gmail.com', 4556425435, 'axgmjsdwaas', 'asasdahgdssjh', 'ahgsjasa', 'wsnhahjhs', 'asguwysuiywu', 0x31333662343865373333343766313930353435313234313063336531646362662e706466);

-- --------------------------------------------------------

--
-- Table structure for table `upload_resume`
--

CREATE TABLE `upload_resume` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_role` text DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`, `user_role`) VALUES
(16, 'harsha', 'vardhan', 'kanimerakalaharshavardhan@gmail.com', 'Harsha37', '4444444444', '2023-07-27 10:18:27', 'user'),
(17, 'Yathe', 'Eswar', 'yathe@gmail.com', 'Yathe12345', '8965210347', '2023-07-30 06:48:37', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
