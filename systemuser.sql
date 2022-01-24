-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 06:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `NIC` varchar(12) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`NIC`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
('199835714520', 'shashika', 'nethruwan', 'shashika@gmail.com', 'shashika'),
('199869854235', 'chamodi', 'weerasinghe', 'chamodi@gmail.com', '85214'),
('199955556874', 'janith', 'chandula', 'janith@gmail.com', 'mnbvc'),
('199985236584', 'sajana', 'peris', 'sajana@gmail.com', '78945'),
('200356987452', 'methini', 'matheesha', 'methini@gmail.com', '12365');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIC` varchar(12) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIC`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
('199568523456', 'chirani', 'devindi', 'chirani@gmail.com', '78789'),
('199658247563', 'malith', 'menaka', 'malith@gmail.com', '36985'),
('199835710332', 'malindu', 'jethaka', 'malindujethaka@gmail.com', '23641'),
('199852523636', 'chanuka', 'gunasekara', 'chanuka@gmail.com', 'asdfg'),
('199856874125', 'pawan', 'nadeera', 'pawan@gmail.com', '23651'),
('199865235874', 'wishwa', 'gamagee', 'wishwa@gmail.com', 'qwert'),
('200165987456', 'kavindu', 'perera', 'kavindu@gmail.com', 'lkjhg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
