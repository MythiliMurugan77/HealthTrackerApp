-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 11:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `calorie`
--

CREATE TABLE `calorie` (
  `Sno` int(255) NOT NULL,
  `FoodItem` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Calories` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calorie`
--

INSERT INTO `calorie` (`Sno`, `FoodItem`, `Quantity`, `Calories`) VALUES
(1, 'Banana ', '1 small', 117),
(2, 'Mixed Whole Pulses', '1 bowl', 244),
(3, 'milk', '1 glass', 168),
(4, 'steamed rice', '1 small bowl', 120),
(5, 'salt and pepper vegetables', '1 bowl', 191),
(6, 'Mosambi juice', '1 glass', 94),
(7, 'Tea with milk and sugar', '1 glass', 73),
(8, 'apple', '1 large', 131),
(9, 'peas roasted', '100 grams', 340);

-- --------------------------------------------------------

--
-- Table structure for table `dieitian`
--

CREATE TABLE `dieitian` (
  `Sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dieitian`
--

INSERT INTO `dieitian` (`Sno`, `name`, `specialization`, `email`) VALUES
(1, 'Rahul', 'weight loss', 'rahul87@gmail.com'),
(2, 'Sridhar', 'Diabetes', 'Dietiansri@yahoo.com'),
(3, 'Pooja', 'Weight gain', 'eatright@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mealplanner`
--

CREATE TABLE `mealplanner` (
  `Meal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplanner`
--

INSERT INTO `mealplanner` (`Meal`) VALUES
('Banana '),
('Mixed Whole Pulses'),
('Mosambi juice');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `username` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `dietian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`username`, `bmi`, `dietian`) VALUES
('Mythili', '20', ''),
('Mythili', '20', 'Pooja'),
('Nandhini', '89', 'Pooja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calorie`
--
ALTER TABLE `calorie`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Sno` (`Sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
