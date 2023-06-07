-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 06:45 AM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_storage`
--

CREATE TABLE `blood_storage` (
  `bid` int(11) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_storage`
--

INSERT INTO `blood_storage` (`bid`, `blood_type`, `amount`, `city`) VALUES
(58, 'O-', 10, 'Pune'),
(59, 'A+', 10, 'Pune'),
(60, 'A-', 10, 'Pune'),
(61, 'B+', 10, 'Pune'),
(62, 'B-', 10, 'Pune'),
(63, 'AB+', 10, 'Pune'),
(64, 'AB-', 10, 'Pune'),
(65, 'O+', 10, 'Bengaluru'),
(66, 'O-', 10, 'Bengaluru'),
(67, 'A+', 10, 'Bengaluru'),
(68, 'A-', 10, 'Bengaluru'),
(69, 'B+', 10, 'Bengaluru'),
(70, 'B-', 10, 'Bengaluru'),
(71, 'AB+', 10, 'Bengaluru'),
(72, 'AB-', 10, 'Bengaluru'),
(73, 'O+', 10, 'Mumbai'),
(74, 'O-', 10, 'Mumbai'),
(75, 'A+', 10, 'Mumbai'),
(76, 'A-', 10, 'Mumbai'),
(77, 'B+', 10, 'Mumbai'),
(78, 'B-', 10, 'Mumbai'),
(79, 'AB+', 10, 'Mumbai'),
(80, 'AB-', 10, 'Mumbai'),
(81, 'O+', 10, 'Chennai'),
(83, 'A+', 40, 'Chennai'),
(84, 'A-', 10, 'Chennai'),
(85, 'B+', 10, 'Chennai'),
(86, 'B-', 10, 'Chennai'),
(87, 'AB+', 10, 'Chennai'),
(88, 'AB-', 10, 'Chennai'),
(89, 'O+', 10, 'Hyderabad'),
(90, 'O-', 10, 'Hyderabad'),
(91, 'A+', 10, 'Hyderabad'),
(92, 'A-', 10, 'Hyderabad'),
(93, 'B+', 10, 'Hyderabad'),
(94, 'B-', 10, 'Hyderabad'),
(95, 'AB+', 10, 'Hyderabad'),
(96, 'AB-', 10, 'Hyderabad'),
(97, 'O+', 10, 'Kochi'),
(98, 'O-', 10, 'Kochi'),
(99, 'A+', 20, 'Kochi'),
(100, 'A-', 10, 'Kochi'),
(101, 'B+', 10, 'Kochi'),
(102, 'B-', 10, 'Kochi'),
(103, 'AB+', 10, 'Kochi'),
(104, 'AB-', 10, 'Kochi'),
(105, 'O+', 10, 'Mangaluru'),
(106, 'O-', 10, 'Mangaluru'),
(107, 'A+', 10, 'Mangaluru'),
(108, 'A-', 10, 'Mangaluru'),
(109, 'B+', 10, 'Mangaluru'),
(110, 'B-', 10, 'Mangaluru'),
(111, 'AB+', 10, 'Mangaluru'),
(112, 'AB-', 10, 'Mangaluru');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `did` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `last_date` varchar(10) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`did`, `first_name`, `last_name`, `email`, `phone`, `blood`, `last_date`, `user_address`, `city`, `age`, `gender`) VALUES
(1, 'Chaitanya', 'Thekkunja', 'chait@gmail.com', 123456789, 'A-', '2019-12-04', '123 House, ABC Road', 'Mangaluru', 22, 'MALE'),
(3, 'Prajna ', 'Shetty', 'prajshet@email.com', 765890745, 'O+', '2020-01-09', '12 House, POI Road', 'Pune', 21, 'FEMALE'),
(4, 'Arjun', 'A', 'arjun@gmail.com', 987456214, 'A-', '2020-03-06', 'ABC House', 'Pune', 34, 'MALE'),
(6, 'Ajay ', 'Kishan', 'ajay@yahoo.com', 978568584, 'AB-', '2019-10-25', 'POI House', 'Chennai', 24, 'MALE'),
(7, 'Name', 'Last Name', 'email@gmail.com', 876868678, 'A-', '2020-07-03', 'Addess', 'Kochi', 33, 'FEMALE'),
(8, 'Gagan', 'Kini', 'kinikini@gmail.com', 989898988, 'B+', '2018-02-06', 'Kini Palace', 'Hyderabad', 50, 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `first_name`, `last_name`, `email`, `phone`, `blood`, `amount`, `user_address`, `city`) VALUES
(2, 'Chaitanya', 'Thekkunja', 'chai@gmail.com', 987654321, 'O+', 2, '123 House, ABC Street, 506060', 'Mangaluru'),
(3, 'Yashaswi', 'G P', 'yash@gmail.com', 987657890, 'A+', 5, '98 House, QWERTY Street 555888', 'Chennai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_storage`
--
ALTER TABLE `blood_storage`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_storage`
--
ALTER TABLE `blood_storage`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
