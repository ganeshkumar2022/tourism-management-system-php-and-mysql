-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--


CREATE TABLE `admin` (
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `useremail` varchar(30) DEFAULT NULL,
  `package_name` varchar(30) DEFAULT NULL,
  `package_price` varchar(30) DEFAULT NULL,
  `from_date` varchar(20) DEFAULT NULL,
  `to_date` varchar(20) DEFAULT NULL,
  `booking_date` varchar(30) DEFAULT NULL,
  `result` varchar(30) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `username`, `useremail`, `package_name`, `package_price`, `from_date`, `to_date`, `booking_date`, `result`) VALUES
(1, 'nishitha', 'nishitha@gmail.com', 'Goa Wonders & Beautiful places', 'RS.25,000', '2022-12-31', '2023-01-02', '31-12-2022 08:44:36pm', 'booking confirmed'),
(2, 'ganesh', 'ganesh@gmail.com', 'Kerala Wonders & Kerala Cultur', 'RS.13,000', '2023-01-31', '2023-02-04', '01-01-2023 12:53:10pm', 'booking confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobileno` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobileno`, `description`) VALUES
(1, 'ganesh', 'ganesh@gmail.com', '1111111111', 'hi i want the full details of kerala tour');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `package_location` varchar(30) DEFAULT NULL,
  `package_price` varchar(30) DEFAULT NULL,
  `package_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `package_name`, `package_type`, `package_location`, `package_price`, `package_image`) VALUES
(1, 'Kerala Wonders & Kerala Cultures', 'family package', 'Tamilnadu', 'RS.13,000', 'tourimages/kerala.jfif'),
(2, 'Goa Wonders & Beautiful places', 'couple package', 'India', 'RS.25,000', 'tourimages/goa.jfif'),
(3, 'Ooty Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.15,000', 'tourimages/ooty.jfif'),
(4, 'Czech Republic Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.75,000', 'tourimages/czech.jfif'),
(5, 'America Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.1,25,000', 'tourimages/america.jfif'),
(6, 'Switzerland Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.97,000', 'tourimages/switz.jfif'),
(7, 'Kodaikanal Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.19,000', 'tourimages/kodaikanal.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobileno` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobileno`, `password`) VALUES
(4, 'ramya kutty', 'ramya@gmail.com', '1234646567', '123'),
(5, 'ganesh', 'ganesh@gmail.com', '9876543210', '123'),
(6, 'nishitha', 'nishitha@gmail.com', '1536773324', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
