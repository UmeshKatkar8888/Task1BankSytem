-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(60) DEFAULT NULL,
  `customer_phone` int(10) DEFAULT NULL,
  `customer_email` varchar(60) DEFAULT NULL,
  `acc_balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `acc_balance`) VALUES
(111, 'Rohan Parekh', 656876848, 'rohanparekh@gmail.com', 6770),
(112, 'Milan Pandya', 786987564, 'milanpandya@gmai.com', 3000),
(113, 'Beena Singh', 567567894, 'beenasingh@gmail.com', 7411),
(114, 'Suraj Patel', 567895432, 'surajpatel@gmail.com', 6000),
(115, 'Sheena Seth', 887799675, 'sheena89seth@gmail.com', 8633),
(116, 'Vipul Chudhary', 567894679, 'Vipulchudhary578@gmail.com', 9700),
(117, 'Saurabh Gaikwad', 879864541, 'saurabhgaikwad@gmail.com', 8100),
(118, 'Yukti Kapoor', 686875768, 'yuktikapoor88@gmail.com', 9600),
(119, 'Dimpal Yadav', 789065410, 'dimpalyadav67@gmail.com', 7798),
(120, 'Gopal Marathe', 879649355, 'gopalmarathe456@gmail.com', 5999);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `reciver` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `reciver`, `amount`) VALUES
(1, 'Rohan Parekh', 'Beena Singh', 20),
(2, 'Sheena Seth', 'Saurabh Gaikwad', 800),
(3, 'Vipul Chudhary', 'Saurabh Gaikwad', 2000),
(4, 'Suraj Patel', 'Sheena Seth', 9000),
(5, 'Sheena Seth', 'Suraj Patel', 6000),
(6, 'Beena Singh', 'Saurabh Gaikwad', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
