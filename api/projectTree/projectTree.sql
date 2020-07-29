-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2020 at 02:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectTree`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(14) NOT NULL,
  `dob` datetime NOT NULL,
  `doj` datetime DEFAULT current_timestamp(),
  `active` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `dob`, `doj`, `active`) VALUES
(8, 'deepanshu', 'deepanshu@gmail.com', 'password', 5656656556, '2020-07-29 00:00:00', '2020-07-29 02:45:47', 1),
(10, 'deepanshu', 'deepanshuq@gmail.com', 'password', 55656656556, '2020-07-29 00:00:00', '2020-07-29 02:47:52', 1),
(11, 'deepanshu', 'deepanshuqhlj@gmail.com', 'password', 556556656556, '2020-07-29 00:00:00', '2020-07-29 02:53:12', 1),
(13, 'deepanshu', 'deepansdfgdhdhuqhlj@gmail.com', 'password', 55655688556, '2020-07-29 00:00:00', '2020-07-29 03:00:30', 1),
(14, 'deepanshu', 'fwrf@gmail.com', 'password', 5655655688556, '2020-07-29 00:00:00', '2020-07-29 03:09:42', 1),
(15, 'deepanshu', 'fwrthrf@gmail.com', 'password', 5655655556, '2020-07-29 00:00:00', '2020-07-29 03:18:14', 1),
(16, 'Deepanshu', 'deepanshu2@gmail.com', 'password', 9654765835, '2020-07-26 00:00:00', '2020-07-29 03:32:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
