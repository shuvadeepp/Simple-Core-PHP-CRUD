-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 04:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core_php_crud_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbemployeelist`
--

CREATE TABLE `dbemployeelist` (
  `id` int(11) NOT NULL,
  `dbname` varchar(45) DEFAULT NULL,
  `dbemployee` varchar(45) DEFAULT NULL,
  `dbsalary` varchar(45) DEFAULT NULL,
  `dbgender` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbemployeelist`
--

INSERT INTO `dbemployeelist` (`id`, `dbname`, `dbemployee`, `dbsalary`, `dbgender`) VALUES
(1, 'admin', 'adminEmp', '15000', 'male'),
(2, 'supAdmin', 'supAdminEmp', '5000', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbemployeelist`
--
ALTER TABLE `dbemployeelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbemployeelist`
--
ALTER TABLE `dbemployeelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
