-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 29, 2024 at 05:31 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`user_id`, `user_name`, `user_password`, `user_age`) VALUES
(1, 'chaigare', '111111', 18),
(2, 'peeto', '222222', 20),
(3, 'GayTH', '333333', 25),
(4, 'Yuuki', '555555', 10),
(5, 'Emi Fukada', '666666', 30),
(6, 'Sora Aoi', '789789', 35),
(7, 'Seven', '777777', 70),
(8, 'Ahhhh', 'abcdefg', 55),
(9, 'ramanine', '999999+', 89),
(10, 'siaOrimsra', '101010', 72),
(11, 'Mr.Red', 'tumma', 66),
(12, 'FlamingoP', '123456', 19),
(13, 'Ju Yhai', '565656', 21),
(14, 'yodchai', '123654', 20),
(15, 'kumpong', '789456', 89),
(20, 'Lion', '147895', 10),
(21, 'dog', 'dog1234', 2),
(23, 'cat', 'cat123', 2),
(24, 'capybara', 'capybarano1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
