-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 02:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `status`) VALUES
(1, 'sachin', '9140920656', 'raj@gmail.com', '555', '1');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `university` text NOT NULL,
  `course` text NOT NULL,
  `book_name` text NOT NULL,
  `author` text NOT NULL,
  `price` varchar(110) NOT NULL,
  `available_quantity` int(250) NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `medium` text NOT NULL,
  `created` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `university`, `course`, `book_name`, `author`, `price`, `available_quantity`, `image`, `type`, `medium`, `created`, `status`) VALUES
(1, '1', '1', 'P- 5B Health Physical and Yoga education.(H)	', 'Laxmi Publication', '440', 5, 'backg.jpg', 'AFTE', 'Hindi', '2024-04-22', '1'),
(2, '1', '1', 'P-5 A Gender School And Society[H]	', 'Laxmi Publication', '700', 14, '51OVjRiJ+ZL.jpg', 'AFTE', 'Hindi', '2024-04-22', '1'),
(3, '2', '2', 'P-4 Pedagogy of Hindi Language	', 'Dr.Gopal Sing', '500', 33, 'images.jpeg', 'AFTE', 'Hindi', '2024-04-22', '1'),
(4, '2', '2', 'P-3 Creating an Inclusive School [H]	', 'Dr.Anil Kumar', '345', 0, 'course.png', 'AFTE', 'Hindi', '2024-04-22', '1'),
(5, '3', '3', 'P-5 A Gender School And Society[H]	', 'Dr.Gopal Sing', '440', 5, 'Sun Set Illustration.jpg', 'AFTE', 'Hindi', '2024-04-22', '1'),
(6, '3', '7', 'bed 3rd year books', 'Dr.Anil Kumar', '700', 0, '51OVjRiJ+ZL.jpg', 'AFTE', 'English', '2024-04-22', '1'),
(7, '1', '4', 'Chemistry s', 'kk singh', '150 ', 1, 'download (4).jpeg', 'AFTE', 'Hindi', '2024-04-26', '1'),
(8, '1', '4', 'physics', 'Dr.Gopal Sing', '345', 0, 'images (1).jpeg', 'AFTE', 'English', '2024-04-26', '1'),
(9, '1', '4', 'maths', 'kk dsfckm', '700', 0, '51OVjRiJ+ZL.jpg', 'Select Type', 'Hindi', '2024-04-26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `book_sets`
--

CREATE TABLE `book_sets` (
  `id` int(11) NOT NULL,
  `university` int(55) NOT NULL,
  `course` int(55) NOT NULL,
  `name` varchar(110) NOT NULL,
  `booksets` text NOT NULL,
  `createdate` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_sets`
--

INSERT INTO `book_sets` (`id`, `university`, `course`, `name`, `booksets`, `createdate`, `status`) VALUES
(7, 3, 7, '24-B.Ed-3rd[CRSU]', '[\"6\"]', '2024-04-23', '1'),
(8, 1, 1, '24-B.Ed-1st[MDU]', '[\"1\",\"2\"]', '2024-04-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `book_stock`
--

CREATE TABLE `book_stock` (
  `id` int(11) NOT NULL,
  `book_id` int(55) NOT NULL,
  `stock_quantity` text NOT NULL,
  `remark` text NOT NULL,
  `bill` text NOT NULL,
  `add_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_stock`
--

INSERT INTO `book_stock` (`id`, `book_id`, `stock_quantity`, `remark`, `bill`, `add_date`, `status`) VALUES
(1, 5, '5', '', '', '2024-04-23', '1'),
(2, 1, '2', 'uytrdsa', '', '2024-04-23', '1'),
(3, 2, '12', 'cheq', '', '2024-04-23', '1'),
(4, 3, '33', 'test', '', '2024-04-23', '1'),
(5, 4, '11', 'cheq', '', '2024-04-23', '1'),
(6, 7, '1', 'test', '', '2024-04-26', '1'),
(7, 4, '-11', '', '', '2024-04-26', '1'),
(8, 2, '2', '', '', '2024-04-26', '1'),
(9, 1, '3', 'deijcbhiasdhuclia', '', '2024-04-27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `session` text NOT NULL,
  `year` text NOT NULL,
  `course` text NOT NULL,
  `created` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `university_id`, `course_name`, `session`, `year`, `course`, `created`, `status`) VALUES
(1, 1, '24-B.Ed-1st', '24', '1st', 'B.Ed', '2024-04-22', '0'),
(2, 2, '24-M.Ed-2nd', '24', '2nd', 'M.Ed', '2024-04-22', '1'),
(3, 3, '24-D.El.Ed-1st', '24', '1st', 'D.El.Ed', '2024-04-22', '1'),
(4, 1, '24-CTET-1st', '24', '1st', 'CTET', '2024-04-22', '1'),
(5, 2, '24-DSSSB (TGT,PGT,PRT)-1stSem', '24', '1stSem', 'DSSSB (TGT,PGT,PRT)', '2024-04-22', '1'),
(6, 1, '24-B.Ed-2nd', '24', '2nd', 'B.Ed', '2024-04-22', '1'),
(7, 3, '24-B.Ed-3rd', '24', '3rd', 'B.Ed', '2024-04-22', '1'),
(8, 3, '24-PRT-5th', '24', '5th', 'PRT', '2024-04-22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(55) NOT NULL,
  `setname` text NOT NULL,
  `issuedate` date NOT NULL,
  `remark` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `registration_no`, `setname`, `issuedate`, `remark`, `type`, `status`) VALUES
(1, '18-HBY-6718', '5', '2024-04-23', ' issue done', 'return', '0'),
(2, '18-HBY-6728', '6', '2024-04-24', ' second', 'issue', '1'),
(3, '18-HBY-036', '8', '2024-04-24', ' new', 'issue', '1'),
(4, '18-HBY-054', '6', '2024-04-24', ' gfdf', 'issue', '1'),
(5, '18-HBY-038', '8', '2024-04-25', ' iouydf', 'issue', '1'),
(6, '18-HBY-051', '7', '2024-04-26', ' ds', 'return', '1'),
(7, '18-HBY-6718', '7', '2024-04-26', ' dsd', 'return', '1');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `university_name` text NOT NULL,
  `created` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `university_name`, `created`, `status`) VALUES
(1, 'MDU ( Maharishi Dayanand university )', '2024-04-22', 1),
(2, 'MP Board', '2024-04-22', 1),
(3, 'CRSU (Chaudhary Ranveer Singh University )	', '2024-04-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_sets`
--
ALTER TABLE `book_sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_stock`
--
ALTER TABLE `book_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_sets`
--
ALTER TABLE `book_sets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book_stock`
--
ALTER TABLE `book_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
