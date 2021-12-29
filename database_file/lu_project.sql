-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 07:34 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lu_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_lucc_users`
--

CREATE TABLE `table_lucc_users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_lucc_users`
--

INSERT INTO `table_lucc_users` (`id`, `user_id`, `email`, `password`, `group_name`, `title`, `created`) VALUES
(1, 'hakim', 'hakim@gmail.com', '123', 'group_name', '', '2021-11-23 19:01:46'),
(2, 'azizul', 'hakim@gmail.com', '123', 'LUCC', '', '2021-11-23 19:03:13'),
(3, 'kamrul', 'kamrul@gamil.com', '1234', 'LUCC', '', '2021-11-23 19:06:52'),
(4, 'nayeem ', 'hassan@lus.ac.bd', '123654', 'LUCC', '', '2021-11-24 20:02:44'),
(5, 'nazmul', 'nuzmul@lus.ac.bd', '147', 'LUCC', 'group_member', '2021-11-25 18:24:12'),
(6, 'Aman Ullah', 'aman@lus.ac.bd', '098', 'LUDC', 'group_member', '2021-11-30 17:56:51'),
(7, 'Aman Ullah', 'aman@lus.ac.bd', '098', 'LUDC', 'group_member', '2021-11-30 17:57:49'),
(8, 'Fahim Chowdhoury', 'fahim@lus.ac.bd', '765', 'LUDC', 'group_member', '2021-11-30 18:16:13'),
(9, 'azizul hakim', 'hakim@lus.ac.bd', '53112', 'LUDC', 'group_member', '2021-12-21 19:31:58'),
(10, 'hakim', 'abc@lus.ac.bd', '123', 'LUCC', 'group_member', '2021-12-21 19:33:08'),
(11, 'xyz', 'xyz@lus.ac.bd', '321', 'LUDC', 'group_member', '2021-12-21 19:34:17'),
(12, 'suzon', 'suzon11@lus.ac.bd', 'abc', 'LUDC', 'group_member', '2021-12-23 07:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `table_post`
--

CREATE TABLE `table_post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `person_email` varchar(250) NOT NULL,
  `post_person` varchar(100) NOT NULL,
  `person_title` varchar(200) NOT NULL,
  `describtion` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_post`
--

INSERT INTO `table_post` (`id`, `title`, `person_email`, `post_person`, `person_title`, `describtion`, `image`, `topic`, `created`) VALUES
(14, 'Notice', 'polas@lus.ac.bd', 'polas', 'super_admin', '<p>This example comes from a startup that implemented a radical email-free, meetings-free, manager-free culture. It replaced meetings with asynchronous, text-based communication via team chat, arguing that programmers need uninterrupted mornings and afternoons to focus on producing code.</p><p><a href=\"https://mfbt.ca/what-i-hear-when-you-tell-me-your-company-doesnt-do-meetings-dfbb57a038d6\">What I hear when you tell me your company doesn’t do meetings</a></p><p>So why have meetings at all? Wouldn\'t everyone save gobs of time in a meetings-free culture? The answer has to do with context sharing, narrative,&nbsp;and alignment. Those are crucial to getting&nbsp;people working together, and if meetings at your company aren\'t achieving that, you might be doing them wrong.</p>', 'image/bill1.jpg', 'Meeting', '2021-11-29 21:49:53'),
(17, 'Notice', 'polas@lus.ac.bd', 'polas', 'super_admin', '<p>I Need a Developer for design a single page Application. I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;</p>', 'image/bannerImg.png', 'Notice', '2021-11-30 15:54:27'),
(18, 'Notice', 'polas@lus.ac.bd', 'polas', 'super_admin', '<p>I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;</p>', 'image/react.jpg', 'Notice', '2021-11-30 15:57:13'),
(19, 'Notice', 'hassan@lus.ac.bd', 'nayeem ', 'LUCC_admin', '<p>I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;I Need a Developer for design a single page Application.&nbsp;</p>', 'image/flutter.png', 'Notice', '2021-11-30 15:59:44'),
(22, 'Social Admin Post Something', 'mamul@lus.ac.bd', 'Md Mamur Rahsid', 'SOCIAL_admin', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'image/chat.jpg', 'Notice', '2021-12-04 20:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `table_social`
--

CREATE TABLE `table_social` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_social`
--

INSERT INTO `table_social` (`id`, `user_id`, `email`, `password`, `group_name`, `title`, `created`) VALUES
(1, 'Md Suzon Ahmed', 'suzon@lus.ac.bd', 'abc', 'social_group', 'group_member', '2021-12-04 18:36:11'),
(3, 'Md Mamur Rahsid', 'mamul@lus.ac.bd', 'mamun', 'social_group', 'group_member', '2021-12-04 18:44:01'),
(4, 'karim Ullah', 'karim@lus.ac.bd', 'abc', 'social_group', 'group_member', '2021-12-12 17:52:58'),
(5, 'minan', 'minan@lus.ac.bd', 'abcd', 'social_group', 'group_member', '2021-12-12 17:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `name` varchar(120) NOT NULL,
  `batch` varchar(120) NOT NULL,
  `section` varchar(120) NOT NULL,
  `department` varchar(120) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `user_id`, `email`, `password`, `title`, `group_name`, `name`, `batch`, `section`, `department`, `address`, `contact`, `image`, `created`) VALUES
(12, 'polas', 'polas@lus.ac.bd', '789', 'super_admin', 'ALL_Group_Member', '', '', '', '', '', '', '', '2021-11-23 16:07:41'),
(15, 'nayeem ', 'hassan@lus.ac.bd', '123654', 'LUCC_admin', 'LUCC', '', '', '', '', '', '', '', '2021-11-24 20:02:45'),
(16, 'nazmul', 'nuzmul@lus.ac.bd', '147', 'group_member', 'LUCC', '', '', '', '', '', '', '', '2021-11-25 18:24:12'),
(21, 'Aman Ullah', 'aman@lus.ac.bd', '098', 'LUDC_admin', 'LUDC', '', '', '', '', '', '', '', '2021-11-30 17:57:50'),
(22, 'Fahim Chowdhoury', 'fahim@lus.ac.bd', '765', 'group_member', 'LUDC', 'FAHIM', '17th', 'A', 'computer science & engineering', 'mymensingh', '01860738239', 'image/bill3.jpg', '2021-11-30 18:16:13'),
(25, 'Md Mamur Rahsid', 'mamul@lus.ac.bd', 'mamun', 'SOCIAL_admin', 'social_group', '', '', '', '', '', '', '', '2021-12-04 18:44:01'),
(27, 'minan', 'minan@lus.ac.bd', 'abcd', 'group_member', 'social_group', '', '', '', '', '', '', '', '2021-12-12 17:53:55'),
(28, 'azizul hakim', 'hakim@lus.ac.bd', '53112', 'group_member', 'LUDC', '', '', '', '', '', '', '', '2021-12-21 19:31:58'),
(29, 'hakim', 'abc@lus.ac.bd', '123', 'group_member', 'LUCC', '', '', '', '', '', '', '', '2021-12-21 19:33:09'),
(30, 'xyz', 'xyz@lus.ac.bd', '321', 'group_member', 'LUDC', '', '', '', '', '', '', '', '2021-12-21 19:34:17'),
(31, 'suzon', 'suzon11@lus.ac.bd', 'abc', 'group_member', 'LUDC', '', '', '', '', '', '', '', '2021-12-23 07:45:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_lucc_users`
--
ALTER TABLE `table_lucc_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_post`
--
ALTER TABLE `table_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_social`
--
ALTER TABLE `table_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_lucc_users`
--
ALTER TABLE `table_lucc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_post`
--
ALTER TABLE `table_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `table_social`
--
ALTER TABLE `table_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
