-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 06:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `type`) VALUES
(1, 'Razib Hossen', 'razibhossen8566@gmail.com', 'pass', 'supper'),
(3, 'raju', 'ra@gmail.com', 'pass', 'cricket'),
(4, 'Ratul', 'ratul@gmail.com', 'pass', 'volleyball'),
(5, 'a', 'r@gmail.com', 'pass', 'badminton'),
(6, 'Akram', 'akram@gmail.com', 'pass', 'cricket'),
(7, 'akram', 'akram5034@gmail.com', '5034', 'supper'),
(8, 'Naimur Rahman Nahid', 'mdnaeem.ahmed258@gmail.com', 'roseisred', 'supper');

-- --------------------------------------------------------

--
-- Table structure for table `ad_type`
--

CREATE TABLE `ad_type` (
  `ad_id` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_type`
--

INSERT INTO `ad_type` (`ad_id`, `type`) VALUES
(1, 'supper'),
(2, 'cricket'),
(3, 'basketball'),
(4, 'football'),
(5, 'badminton'),
(6, 'volleyball'),
(7, 'kabadi');

-- --------------------------------------------------------

--
-- Table structure for table `badminton`
--

CREATE TABLE `badminton` (
  `bad_id` int(11) NOT NULL,
  `bad_team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bad_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bad_result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badminton`
--

INSERT INTO `badminton` (`bad_id`, `bad_team`, `bad_date`, `bad_result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `basketball`
--

CREATE TABLE `basketball` (
  `bas_id` int(11) NOT NULL,
  `bas_team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bas_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bas_result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basketball`
--

INSERT INTO `basketball` (`bas_id`, `bas_team`, `bas_date`, `bas_result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `cham_id` int(11) NOT NULL,
  `cham_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `runners_up` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` int(11) NOT NULL,
  `sports` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`cham_id`, `cham_name`, `runners_up`, `dates`, `sports`) VALUES
(3, 'CSE', 'Endglish', 2018, 'Football'),
(5, 'CSE', 'Endglish', 2018, 'Cricket'),
(8, 'CSE', 'Endglish', 2018, 'Badminton'),
(9, 'CSE', 'Endglish', 2019, 'Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE `cricket` (
  `c_id` int(11) NOT NULL,
  `c_team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_result` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`c_id`, `c_team`, `c_date`, `c_result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `names`) VALUES
(1, 'CSE'),
(4, 'LAW'),
(5, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `id` int(11) NOT NULL,
  `Team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`id`, `Team`, `date`, `result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kabadi`
--

CREATE TABLE `kabadi` (
  `kabadi_id` int(11) NOT NULL,
  `Team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabadi`
--

INSERT INTO `kabadi` (`kabadi_id`, `Team`, `date`, `result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `live_id` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`live_id`, `url`) VALUES
(1, 'https://stackoverflow.com/questions/18364114/get-time-from-mysql-and-echo-it-in-any-format-we-want-php'),
(2, 'https://www.w3resource.com/mysql/date-and-time-functions/mysql-time-function.php'),
(3, 'http://localhost/phpmyadmin/tbl_operations.php?db=gbsports&table=volleyball');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `player_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_batch` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_roll` int(11) NOT NULL,
  `player_gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_phone` int(11) NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `player_name`, `player_department`, `player_batch`, `player_roll`, `player_gender`, `sports`, `player_phone`, `terms`) VALUES
(1, 'Razib Hossen', 'CSE', '23rd', 856, 'Male', '', 1848178478, ''),
(6, 'ddd', 'CSE', 'dddd', 45, 'Female', '', 157858555, ''),
(15, 'Razib', 'CSE', '23th', 266, 'Male', 'Football,Cricket,Volleyball', 1848178478, ''),
(17, 'akram', 'CSE', '21', 748, 'Male', 'Football,Cricket,Volleyball', 2147483647, 'ok'),
(18, 'ddd', 'LAW', '23', 830, 'Girl', 'Cricket,Volleyball,Basketball', 1848178478, 'ok'),
(19, 'Farhan Ahmed', 'BBA', '22', 350, 'Boy', 'Football,Volleyball,Kabadi', 1487887877, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sports_id` int(11) NOT NULL,
  `sports_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_id`, `sports_name`) VALUES
(1, 'Football'),
(2, 'Cricket'),
(3, 'Volleyball'),
(4, 'Basketball'),
(5, 'Badminton'),
(7, 'Kabadi');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tou_id` int(11) NOT NULL,
  `tou_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tou_id`, `tou_name`) VALUES
(1, 'Inter Department Tournament'),
(2, 'Akram');

-- --------------------------------------------------------

--
-- Table structure for table `volleyball`
--

CREATE TABLE `volleyball` (
  `vol_id` int(11) NOT NULL,
  `vol_team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vol_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vol_result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volleyball`
--

INSERT INTO `volleyball` (`vol_id`, `vol_team`, `vol_date`, `vol_result`, `dates`, `times`) VALUES
(1, 'CSE VS LAW', 'Inter Department Tournament', '', '2020-03-03', '16:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ad_type`
--
ALTER TABLE `ad_type`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `badminton`
--
ALTER TABLE `badminton`
  ADD PRIMARY KEY (`bad_id`);

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`bas_id`);

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`cham_id`);

--
-- Indexes for table `cricket`
--
ALTER TABLE `cricket`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabadi`
--
ALTER TABLE `kabadi`
  ADD PRIMARY KEY (`kabadi_id`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`live_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tou_id`);

--
-- Indexes for table `volleyball`
--
ALTER TABLE `volleyball`
  ADD PRIMARY KEY (`vol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ad_type`
--
ALTER TABLE `ad_type`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `badminton`
--
ALTER TABLE `badminton`
  MODIFY `bad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basketball`
--
ALTER TABLE `basketball`
  MODIFY `bas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `champions`
--
ALTER TABLE `champions`
  MODIFY `cham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cricket`
--
ALTER TABLE `cricket`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kabadi`
--
ALTER TABLE `kabadi`
  MODIFY `kabadi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `live_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volleyball`
--
ALTER TABLE `volleyball`
  MODIFY `vol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
