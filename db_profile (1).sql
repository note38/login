-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 06:34 PM
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
-- Database: `db_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `lastname`, `email`, `password`, `image`) VALUES
(22, 'Chardie12331', 'Gotis21321', 'admin@123', '$2y$10$bFKhaBEYAwMvxOdwOs/0WeqQJdiKH2M9PVUGe22SQVYeqPL5bV5q.', '352798768_1627087024421670_3661821227738388090_n.jpg'),
(23, 'sccdsfd', 'chardie', 'vi@gmail.com', '$2y$10$UMaLf3761KbLA9/1HEu7SeC55NW9qS7tjBHK6pkjCjOCe7C5RpLKC', ''),
(24, 'kupal', 'ka', 'wer@wer.com', '$2y$10$h9Ryu56fHPzWvEIORKM3s.nJMWtzE/8e66Xxw/z6SvxA9s23kVtqC', ''),
(25, 'vivian', 'ganda', 'kupalkakupalka47@gmail.com', '$2y$10$vn72U/e0u4tHJYLM7fefUe0CmXkjr/2gzEzbh3rCjqRQuTBxFbzxm', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
