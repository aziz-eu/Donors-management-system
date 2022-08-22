-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2022 at 06:11 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upazila` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `blood_group`, `gender`, `age`, `weight`, `email`, `phone`, `address`, `division`, `city`, `upazila`, `username`, `password`) VALUES
(1, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'hira.atova@gmail.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'jhondoe@example.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'jhondoe@example.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'jhondoe@example.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'jhondoe@example.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'jhondoe@example.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'noakhali', 'noakhali', 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'asdfa', 'Joya', 'A-Positive', 'male', '25', '80', 'hira.atova@gmail.com', '0124566565', 'Bir Kamotkhali', 'Dhaka', 'dhaka', 'cumilla', 'root', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

DROP TABLE IF EXISTS `request_blood`;
CREATE TABLE IF NOT EXISTS `request_blood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(2) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upazila` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_history` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`id`, `patient_name`, `blood_group`, `unit`, `gender`, `age`, `hospital_name`, `hospital_address`, `division`, `city`, `upazila`, `contact_person_name`, `contact_person_phone`, `patient_history`) VALUES
(1, 'masdk', 'A-Positive', 5, 'm', '15', 'sdfg', 'sdfg', 'dhaka', 'noakhali', 'noakhali', 'noakhali', '015464646546', 'noakhali');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
