-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 01:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungrykya`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_temp`
--

CREATE TABLE `cart_temp` (
  `order_id` int(11) NOT NULL,
  `item_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `price`) VALUES
(1, 'pizza', 400),
(2, 'pasta', 310),
(3, 'icecream', 170),
(4, 'beverage', 220),
(5, 'hungrykya', 550);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `item_name` varchar(11) DEFAULT NULL,
  `base` varchar(50) DEFAULT NULL,
  `topping` varchar(50) DEFAULT NULL,
  `sauce` varchar(50) DEFAULT NULL,
  `garnish` varchar(50) DEFAULT NULL,
  `confirm` int(11) DEFAULT '1',
  `order_DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` varchar(255) DEFAULT 'order placed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_uid`, `quantity`, `price`, `item_name`, `base`, `topping`, `sauce`, `garnish`, `confirm`, `order_DateTime`, `order_status`) VALUES
(154, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:31:09', 'order placed'),
(155, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-29 16:29:37', 'placed'),
(156, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:33:02', 'order placed'),
(157, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:33:08', 'order placed'),
(158, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:42:57', 'order placed'),
(159, 'diya_w', 1, 220, 'beverage', 'watermelon', 'kiwi', NULL, 'mintleaves', 1, '2018-10-21 13:48:20', 'order placed'),
(160, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:49:51', 'order placed'),
(161, 'diya_w', 1, 310, 'pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:50:00', 'order placed'),
(162, 'diya_w', 1, 550, 'hungrykya_s', 'veg', NULL, NULL, NULL, 1, '2018-10-21 13:50:19', 'order placed'),
(163, 'diya_w', 1, 170, 'icecream', 'chocolate', 'rainbowsprinkles', 'chocolatesyrup', NULL, 1, '2018-10-21 13:50:33', 'order placed'),
(164, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:52:16', 'order placed'),
(165, 'diya_w', 1, 310, 'pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 13:52:37', 'order placed'),
(166, 'diya_w', 1, 170, 'icecream', 'chocolate', 'rainbowsprinkles', 'chocolatesyrup', NULL, 1, '2018-10-21 13:52:48', 'order placed'),
(167, 'diya_w', 1, 550, 'hungrykya_s', 'veg', NULL, NULL, NULL, 1, '2018-10-21 13:53:17', 'order placed'),
(168, 'diya_w', 1, 220, 'beverage', 'watermelon', 'kiwi', NULL, 'mintleaves', 1, '2018-10-21 13:53:23', 'order placed'),
(169, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 14:07:19', 'order placed'),
(170, 'diya_w', 1, 400, 'pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-21 14:11:23', 'order placed'),
(171, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:32:55', 'order placed'),
(172, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:32:59', 'order placed'),
(173, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:00', 'order placed'),
(174, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:00', 'order placed'),
(175, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:01', 'order placed'),
(176, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:01', 'order placed'),
(177, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:01', 'order placed'),
(178, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:18', 'order placed'),
(179, 'divya', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:33:44', 'order placed'),
(180, 'divya', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:37:36', 'order placed'),
(181, 'divya', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:38:16', 'order placed'),
(182, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:38:23', 'order placed'),
(183, 'divya', 1, 400, 'Pizza', 'normal', 'tomato capcicum', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:53:15', 'order placed'),
(184, 'divya', 1, 310, 'Pasta', 'plain', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:56:19', 'order placed'),
(185, 'divya', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-22 03:56:34', 'order placed'),
(186, 'lata_w', 1, 400, 'Pizza', 'stuffed', 'capcicum onion', 'BBQ_sauce', 'cheddar', 1, '2018-10-22 04:34:59', 'order placed'),
(187, 'shawn', 1, 100, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-03 05:13:10', 'order placed'),
(188, 'shawn', 1, 100, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-03 05:13:10', 'order placed'),
(189, 'shawn', 1, 100, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-03 05:13:10', 'order placed'),
(193, 'monica', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-10-30 15:29:43', 'order placed'),
(194, 'flying_cat_from_space', 5, 850, 'Icecream', 'blackcurrent', 'gummybears', 'whippedcream', NULL, 1, '2018-11-02 16:11:43', 'order placed'),
(195, 'flying_cat_from_space', 1, 170, 'Icecream', 'chocolate', 'rainbowsprinkles', 'chocolatesyrup', NULL, 1, '2018-11-02 16:14:35', 'order placed'),
(196, 'diya_w', 1, 400, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-02 16:34:30', 'order placed'),
(197, 'shawn', 1, 100, 'Pizza', 'stuffed', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-03 05:13:10', 'order placed'),
(198, 'shawn', 1, -80, 'Beverage', 'watermelon', 'kiwi', NULL, 'mintleaves', 1, '2018-11-03 05:13:10', 'order placed'),
(199, 'shawn', 1, 100, 'Pizza', 'normal', 'tomato', 'tomato_sauce', 'mozzarella', 1, '2018-11-03 05:13:10', 'order placed'),
(200, 'shawn', 1, 20, 'Beverage', 'watermelon', 'kiwi', NULL, 'mintleaves', 1, '2018-11-03 05:16:17', 'order done'),
(201, 'shawn', 1, 300, 'Pizza', 'thincrust', 'tomato capcicum', 'hungrykya_sauce', 'lowfat', 1, '2018-11-03 05:13:10', 'order placed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_address` varchar(256) NOT NULL,
  `user_ph` bigint(20) NOT NULL,
  `user_wallet` int(11) NOT NULL DEFAULT '0',
  `user_pwd` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_address`, `user_ph`, `user_wallet`, `user_pwd`) VALUES
(2, 'Anish', 'Wadhwani', '62.anish@gmail.com', 'flying_cat_from_space', 'space', 7507924024, 0, '$2y$10$lWQW8R4GF6aVLJB//5DcwuO4M2W8SkPOUTCSi7BFWRBzurhzP0nGW'),
(5, 'priyanka', 'tarachandani', '2016.priyanka.tarachandani@ves.ac.in', 'priyanka_t', 'kalyan', 9004404775, 0, '$2y$10$ZqwAL3EJJsfQZi3zYBxCPO0K7eMTqi2UGLdmOimX.MR2caNl73gTe'),
(10, 'sonal', 'wadhwani', 'sonalwadhwani@gmail.com', 'sonal', 'kalyan', 9004404775, 0, '$2y$10$c5UxrbwFDwqszqk38lqqOuqD2R3JccbF1DfZTHtkZKOKWV76t8ige'),
(13, 'monica', 'panjwani', 'monica@gmail.com', 'monica', 'ulhasnagar', 9004404775, 0, '$2y$10$Rtqji63JTTl9Yy6igwPr5uUYi5Hh4TRFNTh82eJVYtf5RyA6.arP.'),
(15, 'shawn', 'mendes', 'shawn@gmail.com', 'shawn', 'thane', 9004404775, 120, '$2y$10$e3cbaB3KSRP7UDdlAXlq1.F.k221gkyWGIAhTCKT/qiq4kOR6gyEi'),
(16, 'diya', 'wadhwani', '2016.diya.wadhwani@ves.ac.in', 'diya_w', 'kalyan', 7507924024, 0, '$2y$10$lv4C7DefUH84QBh4IgEw3umF40vtUwH.tLXxrGt2LtTsi/V9l1Jzi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
