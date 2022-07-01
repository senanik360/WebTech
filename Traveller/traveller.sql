-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 07:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveller`
--

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(11) NOT NULL,
  `vehicle_type` enum('bus','train','plane','lonch') NOT NULL,
  `vehicle_name` varchar(220) NOT NULL,
  `from_location` varchar(150) DEFAULT NULL,
  `to_destination` varchar(150) DEFAULT NULL,
  `rent_per_seat` int(11) NOT NULL,
  `contact_no` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `vehicle_type`, `vehicle_name`, `from_location`, `to_destination`, `rent_per_seat`, `contact_no`) VALUES
(1, 'bus', 'Hanif', 'Dhaka', 'Khulna', 500, NULL),
(2, 'bus', 'Ena', 'sylhet', 'dhaka', 301, '1221'),
(3, 'bus', 'Ena', 'sylhet', 'dhaka', 301, '1221'),
(4, 'bus', 'SR', 'sylhet', 'Dhaka', 203, '122222'),
(5, 'lonch', 'Nabil', 'kuakata', 'Dhaka', 500, '11234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
