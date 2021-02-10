-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `ID` int(11) NOT NULL,
  `U_id` varchar(10) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Url` varchar(30) NOT NULL,
  `content` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Publish_at` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`ID`, `U_id`, `Title`, `Url`, `content`, `Image`, `Publish_at`, `created_at`, `updated_at`) VALUES
(1, '5', 'IT', 'www.demo.com', 'It is a demo website', '', '2021-02-10', '2021-02-10 16:15:03', '2021-02-10 16:15:03'),
(2, '5', 'Health', 'www.demo.com', 'This another demo website', '', '2021-02-09', '2021-02-09 16:37:20', '2021-02-09 16:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `P_Id` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `M_Title` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `P_Id`, `Title`, `M_Title`, `Url`, `Content`, `Created_at`, `Updated_at`) VALUES
(1, 'C101', 'Health', 'Description about health and h', 'www.gooogle.com', 'It is about health.', '2021-02-10 15:51:56', '2021-02-10 15:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `Post_id` varchar(30) NOT NULL,
  `Category_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Prefix` varchar(5) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Last_login` datetime NOT NULL,
  `Information` varchar(255) NOT NULL,
  `Created_At` datetime NOT NULL,
  `Updated_At` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Prefix`, `First_name`, `Last_name`, `Mobile`, `Email`, `Password`, `Last_login`, `Information`, `Created_At`, `Updated_At`) VALUES
(1, 'Mr', 'Pratik', 'Jha', '8755682223', 'p@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-02-10 07:43:52', 'I am a programmer.', '2021-02-10 07:43:52', '2021-02-10 07:43:52'),
(2, 'Mr', 'Pinak', 'Kushakiya', '8755682223', 'hsddsh@gmail.com', '2b24d495052a8ce66358eb576b8912c8', '2021-02-10 07:50:10', 'hiii', '2021-02-10 07:50:10', '2021-02-10 07:50:10'),
(3, 'Dr.', 'Shristi', 'Jha', '74859632', 'shristi@gmail.com', '3153be13ca91e847668fbf430757a0b5', '2021-02-10 08:08:47', 'MD physian', '2021-02-10 08:08:47', '2021-02-10 08:08:47'),
(4, 'Dr.', 'Sonal', 'Pal', '7845986112', 'sonal@gmail.com', '2e4c54a60ae5156c6082797a6816e067', '2021-02-10 08:13:21', 'Doctor', '2021-02-10 08:13:21', '2021-02-10 08:13:21'),
(5, 'Dr.', 'Rahul', 'Shah', '8745552111', 'r@gmail.com', '439ed537979d8e831561964dbbbd7413', '2021-02-10 16:41:49', 'doctor', '2021-02-10 08:32:49', '2021-02-10 08:32:49'),
(6, 'Mr', 'Vikas', 'dubey', '4587589663', 'd@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', '2021-02-10 14:00:14', 'Hello', '2021-02-10 09:04:53', '2021-02-10 09:04:53'),
(7, 'Miss', 'Riya', 'Jha', '9696969696', 'riya@gmail.com', '3153be13ca91e847668fbf430757a0b5', '2021-02-10 16:41:36', 'helooooo', '2021-02-10 09:26:23', '2021-02-10 09:26:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
