-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 01:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhcform`
--

-- --------------------------------------------------------

--
-- Table structure for table `hhc_form`
--

CREATE TABLE `hhc_form` (
  `id` int(11) NOT NULL,
  `p_name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `p_nat_id` int(10) NOT NULL,
  `healthfile` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `p_phone_num` int(10) DEFAULT NULL,
  `p_referred_hospital` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `p_nat` enum('saudi','non-saudi') COLLATE utf8mb4_bin DEFAULT NULL,
  `p_gender` enum('meal','female') COLLATE utf8mb4_bin DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `p_comp_dura` text COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `hhc_form`
--

INSERT INTO `hhc_form` (`id`, `p_name`, `p_nat_id`, `healthfile`, `p_phone_num`, `p_referred_hospital`, `p_nat`, `p_gender`, `p_date`, `p_comp_dura`) VALUES
(34, 'Mohammed Trad', 1105557324, 'healthFiles/1658012898_Kingdom of Saudi Arabia.pdf', 595798118, '3', 'saudi', 'meal', '2022-07-19', 'Hello Db');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hhc_form`
--
ALTER TABLE `hhc_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hhc_form`
--
ALTER TABLE `hhc_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
