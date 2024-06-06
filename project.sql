-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2024 at 02:32 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password_hash`) VALUES
(1, 'Danila', '$2y$10$X.Pi6kwjVWzV3Tctc8Tq/.9/Lj6rLk3AfT0xGMWt3M9X6P2EY5di6');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `fueltype` varchar(255) DEFAULT NULL,
  `engine` varchar(255) DEFAULT NULL,
  `cartype` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `photo` blob,
  `gearbox` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `year`, `fueltype`, `engine`, `cartype`, `price`, `photo`, `gearbox`) VALUES
(37, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x646f6467652e6a7067, 'manual'),
(40, 'Dodge', 'Challenger', 2003, 'benzin', '4.0', 'sedans', NULL, 0x646f6467653232322e6a7067, 'manual'),
(41, 'BMW', 'I8', 2003, 'Benzins', '3.0', 'Sedans', NULL, 0x6a70672e6a7067, 'Automats');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`) VALUES
(51, 'Ja krutoy'),
(52, 'Ja krutoy'),
(53, 'Ja krutoy'),
(54, 'Ja krutoy'),
(55, 'Ja krutoy');

-- --------------------------------------------------------

--
-- Table structure for table `comments_bmw`
--

CREATE TABLE `comments_bmw` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments_bmw`
--

INSERT INTO `comments_bmw` (`id`, `text`, `created_at`) VALUES
(1, 'Uh ti', '2024-06-05 20:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments_mercedes`
--

CREATE TABLE `comments_mercedes` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments_mercedes`
--

INSERT INTO `comments_mercedes` (`id`, `text`, `created_at`) VALUES
(1, 'Vau!!', '2024-06-05 20:22:25'),
(2, 'Kruta!!!!!', '2024-06-05 21:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments_volkswagen`
--

CREATE TABLE `comments_volkswagen` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Daniils', 'danila.makarov1905@gmail.com', 'ada', '2024-06-03 17:31:43'),
(2, 'Daniils', 'danila.makarov1905@gmail.com', 'ada', '2024-06-03 17:31:45'),
(3, 'Daniils', 'danila.makarov1905@gmail.com', 'ada', '2024-06-03 17:31:45'),
(4, 'Daniils', 'danila.makarov1905@gmail.com', 'ada', '2024-06-03 17:31:45'),
(5, 'Daniils', 'danila.makarov1905@gmail.com', 'adadw', '2024-06-03 17:31:50'),
(6, 'Daniils', 'danila.makarov1905@gmail.com', 'adadw', '2024-06-03 17:32:10'),
(7, 'Daniils', 'danila.makarov1905@gmail.com', 'adadw', '2024-06-03 17:33:01'),
(8, 'Я пидорас!', 'danila.makarov1999@gmail.com', 'Pidoras!!', '2024-06-03 17:41:28'),
(9, 'Danila', 'danila.makarov1999@gmail.com', '????', '2024-06-03 20:38:07'),
(10, 'dqddq', 'dqwddqdq@g.com', 'wdqwdwqd', '2024-06-03 20:40:47'),
(11, 'qwdqwdd', 'dqwddd@g.com', 'dqwdqwdwqd', '2024-06-03 20:41:46'),
(12, 'Danila', 'dqwdkqdqd@gmail.com', 'Japaravoz', '2024-06-05 21:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'neitralsX', '$2y$10$rFl0cscCjE1ohkzh1pdBfeczgrh0jhxDyOwSh8I9mUnrEl2Xxdsp2'),
(7, 'Danila', '$2y$10$NaeZ5ARprduzcTraiurLzOunEVH1quEPFd9xcIGz3KvG/8uM48bga'),
(8, 'Danila2.0', '$2y$10$62tkwn5rwUrkl3fNQ34Ev.xY/KJ1TchffG5AE3PKu4qNGms2ULVky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments_bmw`
--
ALTER TABLE `comments_bmw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments_mercedes`
--
ALTER TABLE `comments_mercedes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments_volkswagen`
--
ALTER TABLE `comments_volkswagen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comments_bmw`
--
ALTER TABLE `comments_bmw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments_mercedes`
--
ALTER TABLE `comments_mercedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments_volkswagen`
--
ALTER TABLE `comments_volkswagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
