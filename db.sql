-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 24, 2021 at 02:47 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `todo_list`
--
-- --------------------------------------------------------

--
-- Table structure for table `todo_items`
--

CREATE TABLE `todo_items` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo_items`
--

INSERT INTO `todo_items` (`id`, `title`, `date`, `description`, `completed`, `created_date`) VALUES
(1, 'Book Parking ', '06/07/2021', 'Picnic parking', 1, '2021-07-23 09:19:27'),
(4, 'Learn Science', '08/07/2021', 'Module 1&2', 0, '2021-07-23 10:13:57'),
(5, 'Shopping', '12/07/2021', 'Grocery', 0, '2021-07-24 00:12:07'),
(7, 'Yoga Class', '15/07/2021', '@ YMCA', 0, '2021-07-24 00:14:53'),
(9, 'Send Email', '14/07/2021', '', 1, '2021-07-24 00:19:53'),
(10, 'Swimming Session', '14/07/2021', 'Aquatic Centre', 1, '2021-07-24 00:21:13'),
(12, 'Lunch Meeting', '27/07/2021', 'Lunch with M!', 0, '2021-07-24 06:27:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_items`
--
ALTER TABLE `todo_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_items`
--
ALTER TABLE `todo_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
