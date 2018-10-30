-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 07:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `expenses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `expenses`, `revenue`, `description`, `amount`, `date1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Expense', '0', 'salary paid', 17000, '2018-07-18', 1, NULL, '2018-08-02 00:02:04'),
(2, 'Expense', '0', 'Rent Expense', 1200, '2018-07-18', 1, '2018-07-18 00:46:01', '2018-08-02 00:02:13'),
(3, 'Revenue', '0', 'Service', 3400, '2018-07-17', 1, '2018-07-18 00:46:59', '2018-08-02 00:02:37'),
(4, 'Revenue', '0', 'Guest Rent', 3000, '2018-07-12', 1, '2018-07-24 01:38:00', '2018-08-02 00:02:55'),
(5, 'Expense', '0', 'Rent Expense', 10000, '2018-08-02', 1, '2018-08-01 23:58:17', '2018-08-01 23:58:17'),
(6, 'Revenue', '0', 'Interest', 10000, '2018-07-04', 1, '2018-08-02 00:04:49', '2018-08-02 00:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `check_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_num` int(11) NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `client_id`, `check_in`, `check_out`, `room_num`, `room_type`, `status`, `created_at`, `updated_at`) VALUES
(11, 6, '2018-07-19', '2018-07-18', 5, 'AC', 1, '2018-07-15 01:05:50', '2018-07-15 21:49:21'),
(12, 4, '2018-07-24', '2018-07-25', 420, 'Non AC', 1, '2018-07-15 01:20:44', '2018-07-15 21:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrct_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `name`, `designation`, `date_of_birth`, `address`, `contrct_no`, `email`, `gender`, `marital_status`, `joining_date`, `bank_account_details`, `salary`, `schedule`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'wasim', 'khan', '2018-08-19', 'fafaf', '314', 'affiliatewasim@gmail.com', 'male', 'male', '2018-08-24', 'faaf', '2000', '123', '1533271279.jpg', '1', '2018-08-02 00:55:43', '2018-08-02 22:41:19'),
(12, 'dgf', 'dfdg', '2018-08-02', 'dfgfdg', '43534', 'affiliatewasim@gmail.com', 'male', 'male', '2018-08-02', 'twtwt', '45345', 'Day', '1533193926.jpg', '1', '2018-08-02 01:12:07', '2018-08-02 01:12:07'),
(13, 'afa', 'faf', 'afaf', 'faf', 'faa', 'afaf', 'afaf', 'faf', 'fafa', 'afaf', 'faa', 'night', 'fa', '1', NULL, NULL),
(14, 'afa', 'faf', 'afaf', 'faf', 'faa', 'afaf', 'afaf', 'faf', 'fafa', 'afaf', 'faa', 'night', 'fa', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enqs`
--

CREATE TABLE `enqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enqs`
--

INSERT INTO `enqs` (`id`, `name`, `phone`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aaa', '434', 'asd@fd.g', 'gk', '1', NULL, NULL),
(2, 'Malbub', '', 'malbub@gmail.com', 'Malbub Paji vari', '1', '2018-07-11 23:02:13', '2018-07-11 23:02:13'),
(3, 'Malbub1', '', 'malbub1@gmail.com', 'Malbub valo vari', '1', '2018-07-11 23:03:51', '2018-07-11 23:03:51'),
(4, 'aaa', '', 'aaa@gmail.com', 'aaa', '1', '2018-07-11 23:05:11', '2018-07-11 23:05:11'),
(5, 'ui[[', '', 'ali@modon.com', 'p[[', '1', '2018-07-11 23:07:10', '2018-07-11 23:07:10'),
(6, 'aaaa', '', 'bbb@fd.ghg', 'bbbb', '1', '2018-07-11 23:09:51', '2018-07-11 23:09:51'),
(7, 'asd', '', 'ali@gmail.com', 'sda', '1', '2018-07-11 23:11:05', '2018-07-11 23:11:05'),
(8, 'qqq', '', 'aaQ@fgsdg.gh', 'qqqq', '1', '2018-07-11 23:12:05', '2018-07-11 23:12:05'),
(9, 'aa', '', 'aaa@cfgh.fjf', 'a', '1', '2018-07-11 23:13:03', '2018-07-11 23:13:03'),
(10, 'asd', '', 'aaa@cfgh.fjf', 'a', '1', '2018-07-11 23:13:47', '2018-07-11 23:13:47'),
(11, 'hhh', '', 'ggg@fg.jgj', 'ggg', '1', '2018-07-11 23:15:45', '2018-07-11 23:15:45'),
(12, 'zzz', '', 'zzz@gmail.com', 'zzz xxxx yyy', '1', '2018-07-22 01:02:00', '2018-07-22 01:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `food_distributes`
--

CREATE TABLE `food_distributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `food_item1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost1` int(11) NOT NULL,
  `bati1` int(11) NOT NULL,
  `food_item2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost2` int(11) DEFAULT NULL,
  `bati2` int(11) NOT NULL,
  `food_item3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost3` int(11) DEFAULT NULL,
  `bati3` int(11) NOT NULL,
  `food_item4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost4` int(11) DEFAULT NULL,
  `bati4` int(11) NOT NULL,
  `food_item5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost5` int(11) DEFAULT NULL,
  `bati5` int(11) NOT NULL,
  `food_item6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost6` int(11) DEFAULT NULL,
  `bati6` int(11) NOT NULL,
  `food_item7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost7` int(11) DEFAULT NULL,
  `bati7` int(11) NOT NULL,
  `food_item8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost8` int(11) DEFAULT NULL,
  `bati8` int(11) NOT NULL,
  `food_item9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost9` int(11) DEFAULT NULL,
  `bati9` int(11) NOT NULL,
  `food_item10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost10` int(11) DEFAULT NULL,
  `bati10` int(11) NOT NULL,
  `cdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_distributes`
--

INSERT INTO `food_distributes` (`id`, `client_id`, `room_no`, `food_item1`, `cost1`, `bati1`, `food_item2`, `cost2`, `bati2`, `food_item3`, `cost3`, `bati3`, `food_item4`, `cost4`, `bati4`, `food_item5`, `cost5`, `bati5`, `food_item6`, `cost6`, `bati6`, `food_item7`, `cost7`, `bati7`, `food_item8`, `cost8`, `bati8`, `food_item9`, `cost9`, `bati9`, `food_item10`, `cost10`, `bati10`, `cdate`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 105, 'Murgi curry', 400, 1, 'shada vat', 150, 1, 'Roi', 100, 1, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, '2018-08-01', 1, '2018-07-30 01:24:33', '2018-07-31 22:20:39'),
(7, 2, 110, 'Go Mansho', 180, 2, 'shada vat', 150, 2, 'Murgi curry', 210, 3, 'vsd', 150, 3, 'Murgi curry', 210, 2, 'Roi', 100, 4, 'Beef', 150, 3, 'shada vat', 150, 2, 'Beef', 150, 3, 'Beef', 150, 5, '2018-07-17', 1, '2018-07-31 01:55:52', '2018-07-31 01:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` int(11) NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `address`, `contact`, `national_id`, `passport`, `client_image`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'aaa', '5555', 234, '4444', 'ass.jpg', NULL, '2018-07-15 01:42:04'),
(4, 'Aminul Islam', 'pabna', '17596221', 98787, '1112', 'abc.jpg', '2018-07-19 01:38:29', '2018-07-19 01:38:29'),
(5, 'Aminul Islam', 'pabna', '17596221', 98787, '1112', 'abc.jpg', '2018-07-19 01:39:30', '2018-07-19 01:39:30'),
(6, 'Aminul Islam', 'pabna', '17596221', 98787, '1112', 'abc.jpg', '2018-07-19 01:39:34', '2018-07-19 01:39:34'),
(9, 'Malbub Rahman', 'Norail, Jessore', '420420', 420420, '420420', '1533184914.jpg', '2018-08-01 22:38:56', '2018-08-01 22:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `hm_abouts`
--

CREATE TABLE `hm_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_abouts`
--

INSERT INTO `hm_abouts` (`id`, `title`, `descripation1`, `descripation2`, `image1`, `image2`, `image3`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Blue Sea Hotel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1532585958.jpg', '1532585959.jpg', '1532585960.jpg', 1, NULL, '2018-07-26 00:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `hm_cleaning_supps`
--

CREATE TABLE `hm_cleaning_supps` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_item` int(11) NOT NULL,
  `uses_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_item` int(11) NOT NULL,
  `item_washing_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_cleaning_supps`
--

INSERT INTO `hm_cleaning_supps` (`id`, `item_name`, `descripation`, `num_of_item`, `uses_item`, `stock_item`, `item_washing_date`, `receive_date`, `goods_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shop & Shampo', 'New product', 420, 'dfgfd', 11, '12-05-2018', '2018-07-14', '1532578059.jpeg', 1, NULL, '2018-07-25 22:07:39'),
(2, 'Tawell', 'New product', 1000, '0', 0, '', '2018-07-12', '1532578079.jpg', 1, '2018-07-12 00:23:53', '2018-07-25 22:07:59'),
(5, 'Pillow', 'New product', 10, '0', 0, '', '2018-07-17', '1532578100.jpg', 1, '2018-07-17 01:35:52', '2018-07-25 22:08:20'),
(6, 'Box', 'New product', 12, '0', 0, '', '2018-07-11', '1532578124.jpg', 1, '2018-07-25 09:36:32', '2018-07-25 22:08:44'),
(7, 'Cot', 'New product', 100, '0', 0, '', '2018-07-11', '1532578145.jpg', 1, '2018-07-25 11:47:03', '2018-07-25 22:09:05'),
(8, 'Mug', 'New product', 1200, '0', 0, '', '2018-07-28', '1532578180.jpg', 1, '2018-07-25 11:57:17', '2018-07-25 22:09:40'),
(9, 'Room Spray', 'New product', 1212, '0', 0, '', '2018-07-27', '1532578226.jpg', 1, '2018-07-25 12:15:05', '2018-07-25 22:10:26'),
(10, 'Bed sheet', 'New product', 200, '0', 0, '', '2018-07-25', '1532578248.jpg', 1, '2018-07-25 13:05:11', '2018-07-25 22:10:48'),
(11, 'Romantic Moshari', 'New product', 500, '0', 0, '', '2018-07-24', '1532578264.jpg', 1, '2018-07-25 13:08:05', '2018-07-25 22:11:04'),
(12, 'Shop & Shampo', 'Shop & Shampo', 80, '0', 0, '', '2018-08-01', '1533104087.jpg', 1, '2018-08-01 00:14:47', '2018-08-01 00:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `hm_cleaning_supps1`
--

CREATE TABLE `hm_cleaning_supps1` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_item` int(11) NOT NULL,
  `uses_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_item` int(11) NOT NULL,
  `item_washing_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_cleaning_supps1`
--

INSERT INTO `hm_cleaning_supps1` (`id`, `item_name`, `num_of_item`, `uses_item`, `stock_item`, `item_washing_date`, `receive_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 420, 'dfgfd', 11, '12-05-2018', '2018-07-14', 1, NULL, '2018-07-16 00:04:21'),
(2, 'Pillow', 1000, '0', 0, '', '2018-07-12', 1, '2018-07-12 00:23:53', '2018-07-12 00:23:53'),
(4, 'Pant', 20, '0', 0, '', '2018-07-17', 1, '2018-07-16 00:04:49', '2018-07-16 00:04:49'),
(5, 'Pillow', 10, '0', 0, '', '2018-07-17', 1, '2018-07-17 01:35:52', '2018-07-17 01:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `hm_food_items`
--

CREATE TABLE `hm_food_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_food_items`
--

INSERT INTO `hm_food_items` (`id`, `food_name`, `description`, `price`, `food_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'shada vat', 'Hari ta radha chikon shaddho chal111', '90', '1533102588.jpg', 1, NULL, '2018-07-31 23:49:48'),
(4, 'Go Mansho', 'Kosha, Vuna Hoba. Cooked by Faru', '180', '1533102607.jpg', 1, '2018-07-14 22:35:57', '2018-07-31 23:50:07'),
(6, 'Murgi curry', 'Murgir ALu Jhol. Shatha Dal Asa', '210', '1533102643.jpg', 1, '2018-07-15 01:24:42', '2018-07-31 23:50:43'),
(7, 'Beef', 'Kosha Beef', '150', '1533102663.jpg', 1, '2018-07-25 00:33:43', '2018-07-31 23:51:03'),
(8, 'vsd', 'sdfsf', '150', 'image_bif.jpg', 1, '2018-07-25 00:42:30', '2018-07-25 00:42:30'),
(10, 'Roi', 'asda', '100', 'macher_kalia01.jpg', 1, '2018-07-25 00:45:30', '2018-07-25 00:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `hm_front_bookings`
--

CREATE TABLE `hm_front_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `check_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_con` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_front_bookings`
--

INSERT INTO `hm_front_bookings` (`id`, `name`, `address`, `contact_no`, `check_in`, `check_out`, `email`, `bed_type`, `room_con`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nul', 'pabna', 17596221, '2018-07-22', '2018-07-29', 'roich@gmail.com', 'Double', 'AC', 0, '2018-07-18 23:54:03', '2018-07-19 01:43:32'),
(4, 'Aminul Islam', 'aa', 96, '2018-07-22', '2018-07-22', 'roich@gmail.com', 'Double', 'AC', 1, '2018-07-18 23:57:14', '2018-07-18 23:57:14'),
(5, 'Aminul Islam', 'asdf', 12222, '2018-07-22', '2018-07-22', 'roich@gmail.com', 'Double', 'None Ac', 1, '2018-07-19 00:08:10', '2018-07-19 00:08:10'),
(6, 'rosh', '197, Kazi PAra', 4343984, '2018-07-18', '2018-07-27', 'rosh@gmail.com', 'Single', 'AC', 1, '2018-07-19 00:48:07', '2018-07-19 00:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `hm_galleries`
--

CREATE TABLE `hm_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `descrip1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_galleries`
--

INSERT INTO `hm_galleries` (`id`, `descrip1`, `descrip2`, `descrip3`, `descrip4`, `descrip5`, `descrip6`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fffdfd rfrffedde', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', '1532751679.jpg', '1532751680.jpg', '1532751681.jpg', '1532751682.jpg', '1532751683.jpg', '1532751684.jpg', 1, NULL, '2018-07-27 22:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `hm_item_distributes`
--

CREATE TABLE `hm_item_distributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_dis` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `where` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_item_distributes`
--

INSERT INTO `hm_item_distributes` (`id`, `item_name`, `date_dis`, `quantity`, `status`, `where`, `descripation`, `created_at`, `updated_at`) VALUES
(1, 'Bed Sheet', '2018-07-08', 20, 'Receive', 'sl', 'sadfs', '2018-07-17 23:45:26', '2018-07-17 23:45:26'),
(3, 'Glass', '2018-07-20', 202, 'Waste', 'rps', 'fgds', '2018-07-18 00:16:14', '2018-07-18 00:16:14'),
(4, 'Bed sheet', '2018-07-25', 10, 'Distribution', 'rr', 'aaa', '2018-07-25 00:06:57', '2018-07-25 00:06:57'),
(5, 'Shop & Shampo', '2018-08-01', 20, 'distribution', 'Washing', 'Shop & Shampo', '2018-08-01 01:23:47', '2018-08-01 01:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `hm_laundries`
--

CREATE TABLE `hm_laundries` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_cloth` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `type_of_washing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cloth_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_laundries`
--

INSERT INTO `hm_laundries` (`id`, `client_id`, `order_date`, `delivery_date`, `number_of_cloth`, `service_charge`, `type_of_washing`, `cloth_type`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, '3', '2018-07-05', '2018-07-12', 1, 5, '4', 'hg', 'jhgj', 1, '2018-07-24 01:31:38', '2018-07-24 01:31:38'),
(3, '3', '2018-07-07', '2018-07-12', 57, 575, 'jk', 'kj', 'kjk', 1, '2018-07-24 01:32:10', '2018-07-24 01:32:10'),
(4, '425', '2018-07-11', '2018-07-07', 4, 45, 'lm', 'n', 'jk', 1, '2018-07-24 01:32:29', '2018-07-24 01:32:29'),
(5, '111', '2018-08-02', '2018-08-23', 5, 100, 'dry', 'shirt', 'aaa', 1, '2018-08-02 01:07:08', '2018-08-02 01:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `hm_offers`
--

CREATE TABLE `hm_offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripation3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_offers`
--

INSERT INTO `hm_offers` (`id`, `title1`, `title2`, `title3`, `descripation1`, `descripation2`, `descripation3`, `image1`, `image2`, `image3`, `status`, `created_at`, `updated_at`) VALUES
(1, 'cinema', 'Mal', 'sdfdsf', 'aaa', 'bbb', 'ccc', '1532497245.jpg', '1532497246.jpg', '1532497247.jpg', 1, '2018-07-22 22:09:29', '2018-07-24 23:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `hm_received_order`
--

CREATE TABLE `hm_received_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hm_transport_hires`
--

CREATE TABLE `hm_transport_hires` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `hire_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_transport_hires`
--

INSERT INTO `hm_transport_hires` (`id`, `client_id`, `hire_date`, `transport_id`, `location`, `cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '12-07-2018', 111, 'Dhaka', 5000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_10_051851_create_hm_food_items_table', 1),
(2, '2018_07_10_060527_create_slides_table', 2),
(3, '2018_07_10_061752_create_bookings_table', 3),
(4, '2018_07_10_063717_create_transports_table', 4),
(5, '2018_07_10_065018_create_employees_table', 5),
(6, '2018_07_10_072828_create_enquiries_table', 6),
(7, '2018_07_11_033531_create_clients_table', 7),
(8, '2018_07_11_040058_create_guests_table', 8),
(9, '2018_07_11_043731_create_hm_cleaning_supps_table', 9),
(10, '2018_07_11_045154_create_hm_laundries_table', 10),
(11, '2018_07_17_042643_create_users_table', 11),
(12, '2018_07_18_071149_create_payments_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` int(11) NOT NULL,
  `checkout_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_total` int(11) NOT NULL,
  `client_pay` int(11) NOT NULL,
  `client_due` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `client_id`, `client_status`, `client_date`, `room_no`, `checkout_date`, `client_total`, `client_pay`, `client_due`, `created_at`, `updated_at`) VALUES
(10, 1, 'Check In', '2018-07-24', 0, '2018-07-26', 3000, 2000, 1000, '2018-07-23 22:40:08', '2018-07-23 22:40:08'),
(11, 1, 'Check Out', '2018-07-24', 0, '2018-07-26', 3000, 1000, 0, '2018-07-23 22:40:58', '2018-07-23 22:40:58'),
(12, 2, 'Check In', '2018-07-24', 0, '2018-07-27', 4000, 1000, 3000, '2018-07-23 23:00:19', '2018-07-23 23:00:19'),
(13, 2, 'Check Out', '2018-07-24', 0, '2018-07-27', 4000, 3000, 0, '2018-07-24 01:00:16', '2018-07-24 01:00:16'),
(14, 3, 'Check In', '2018-07-24', 0, '2018-07-30', 6000, 2000, 4000, '2018-07-24 01:00:54', '2018-07-24 01:00:54'),
(15, 4, 'Check In', '2018-07-29', 101, '2018-07-31', 3000, 2000, 1000, '2018-07-28 22:39:28', '2018-07-28 22:39:28'),
(16, 4, 'Check In', '2018-07-29', 101, '2018-07-31', 3000, 1000, 0, '2018-07-28 22:43:10', '2018-07-28 22:43:10'),
(17, 5, 'Check In', '2018-07-26', 101, '2018-07-30', 16000, 2000, 14000, '2018-07-28 23:48:55', '2018-07-28 23:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `room_infos`
--

CREATE TABLE `room_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_infos`
--

INSERT INTO `room_infos` (`id`, `room_no`, `condition`, `room_status`, `created_at`, `updated_at`) VALUES
(1, '101', 'AC', 'BL', NULL, NULL),
(10, '110', 'Non AC', 'BL', NULL, '2018-07-28 00:58:52'),
(12, '105', 'Non AC', 'NBL', '2018-07-25 22:43:49', '2018-07-25 22:43:49'),
(13, '120', 'AC', 'NBL', '2018-07-25 22:44:11', '2018-07-28 00:58:17'),
(14, '305', 'AC', 'BL', '2018-07-25 23:49:01', '2018-07-25 23:49:01'),
(15, '405', 'Non AC', 'BL', '2018-07-27 23:14:39', '2018-07-28 01:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title1`, `title2`, `title3`, `image1`, `image2`, `image3`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'sss', 'ddd', '1532242158.jpg', '1532242159.jpg', '1532242160.jpg', 1, NULL, '2018-07-22 00:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(10) UNSIGNED NOT NULL,
  `transport_id` int(11) NOT NULL,
  `type_of_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `transport_id`, `type_of_transport`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bus', '1532752008.JPG', 'Ac and aits are flexible', 1, NULL, '2018-07-27 22:26:48'),
(2, 1616, 'auto', '1532752044.jpg', NULL, 1, '2018-07-11 01:12:07', '2018-07-27 22:27:24'),
(3, 420, 'gafi', '1532752070.jpg', NULL, 1, '2018-07-11 01:19:50', '2018-07-27 22:27:50'),
(5, 1886, 'Truck', '1532708154.jpg', 'vhjvb', 1, '2018-07-15 23:38:10', '2018-07-27 10:15:54'),
(6, 6, 'bike', '1532708205.jpg', 'high speed', 1, '2018-07-27 10:16:45', '2018-07-27 10:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'faru', NULL, 'faru@gmail.com', '$2y$10$Dl1F34r2zvlGLacjaEYwl.nKYz9Wa8Sq7OuF3LBqHs67IFex6z4l6', 'UMwieqVdjL5mKmq7q0iGuZ2CABP9vt05TWhY8EWDmxSKanNt8NQ2W6OkLBPy', '2018-07-16 22:56:47', '2018-07-16 22:56:47'),
(2, 'rosh', NULL, 'rosh@gmail.com', '$2y$10$Cb.OSg/ZcFQs2vXdIwPUvuu37OYHyWNWn5YizeIZZoQ9KTGgckN/6', 'LOUAIwn8ktQWoLBoAkV2VBjTW6pjWOxuJTGtluxvSOOa5320UCPBqNsRBIV6', '2018-07-16 22:58:14', '2018-07-16 22:58:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enqs`
--
ALTER TABLE `enqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_distributes`
--
ALTER TABLE `food_distributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_abouts`
--
ALTER TABLE `hm_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_cleaning_supps`
--
ALTER TABLE `hm_cleaning_supps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_cleaning_supps1`
--
ALTER TABLE `hm_cleaning_supps1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_food_items`
--
ALTER TABLE `hm_food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_front_bookings`
--
ALTER TABLE `hm_front_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_galleries`
--
ALTER TABLE `hm_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_item_distributes`
--
ALTER TABLE `hm_item_distributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_laundries`
--
ALTER TABLE `hm_laundries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_offers`
--
ALTER TABLE `hm_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_received_order`
--
ALTER TABLE `hm_received_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_transport_hires`
--
ALTER TABLE `hm_transport_hires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_infos`
--
ALTER TABLE `room_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enqs`
--
ALTER TABLE `enqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_distributes`
--
ALTER TABLE `food_distributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hm_abouts`
--
ALTER TABLE `hm_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hm_cleaning_supps`
--
ALTER TABLE `hm_cleaning_supps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hm_cleaning_supps1`
--
ALTER TABLE `hm_cleaning_supps1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hm_food_items`
--
ALTER TABLE `hm_food_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hm_front_bookings`
--
ALTER TABLE `hm_front_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hm_galleries`
--
ALTER TABLE `hm_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hm_item_distributes`
--
ALTER TABLE `hm_item_distributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hm_laundries`
--
ALTER TABLE `hm_laundries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hm_offers`
--
ALTER TABLE `hm_offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hm_received_order`
--
ALTER TABLE `hm_received_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hm_transport_hires`
--
ALTER TABLE `hm_transport_hires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room_infos`
--
ALTER TABLE `room_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
