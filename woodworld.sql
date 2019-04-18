-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 01:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `receives`
--

CREATE TABLE `receives` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `size_id` int(11) NOT NULL,
  `jm_qty` varchar(255) NOT NULL,
  `bt_qty` varchar(255) NOT NULL,
  `ct_qty` varchar(255) NOT NULL,
  `cg_qty` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receives`
--

INSERT INTO `receives` (`id`, `order_id`, `size_id`, `jm_qty`, `bt_qty`, `ct_qty`, `cg_qty`, `created_at`, `created_by`) VALUES
(20, '5cb794f59d3a4', 10, '12', '234', '45', '645', '2019-04-17 21:04:53', ''),
(21, '5cb7977837217', 9, '55', '45', '88', '8', '2019-04-17 21:15:36', ''),
(22, '5cb7a22ac44f3', 9, '11', '22', '345', '15', '2019-04-17 22:01:14', ''),
(23, '5cb7a22ac44f3', 10, '12', '87', '86', '678', '2019-04-17 22:01:14', ''),
(24, '5cb7aadd633a8', 9, '12', '22', '44', '56', '2019-04-17 22:38:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `receive_old`
--

CREATE TABLE `receive_old` (
  `id` int(10) UNSIGNED NOT NULL,
  `size1_qty_1` varchar(255) NOT NULL,
  `size1_qty_per_door_1` varchar(255) NOT NULL,
  `size2_qty_2` varchar(255) NOT NULL,
  `size2_qty_per_door_2` varchar(255) NOT NULL,
  `size3_qty_3` varchar(255) NOT NULL,
  `size3_qty_per_door_3` varchar(255) NOT NULL,
  `size4_qty_4` varchar(255) NOT NULL,
  `size4_qty_per_door_4` varchar(255) NOT NULL,
  `size5_qty_5` varchar(255) NOT NULL,
  `size5_qty_per_door_5` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receive_old`
--

INSERT INTO `receive_old` (`id`, `size1_qty_1`, `size1_qty_per_door_1`, `size2_qty_2`, `size2_qty_per_door_2`, `size3_qty_3`, `size3_qty_per_door_3`, `size4_qty_4`, `size4_qty_per_door_4`, `size5_qty_5`, `size5_qty_per_door_5`, `created_at`, `updated_at`) VALUES
(8, '60', '16', '88', '19', '225', '45', '145', '36', '8', '2', '2019-04-09 20:43:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_date` varchar(255) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `biller` varchar(255) NOT NULL,
  `ware_house` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `order_tax` varchar(255) NOT NULL,
  `order_discount` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `attach_document` varchar(255) NOT NULL,
  `sale_status` varchar(255) NOT NULL,
  `payment_term` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `sale_note` text NOT NULL,
  `staff_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_date`, `reference_no`, `biller`, `ware_house`, `customer`, `order_tax`, `order_discount`, `shipping`, `attach_document`, `sale_status`, `payment_term`, `payment_status`, `sale_note`, `staff_note`) VALUES
(7, '2/3/19', '123', 'Press', 'Press', 'Press', '3', '0', 'Dhaka, Mirpur-1', '', 'Paid', 'null', 'Cash On Delivery', '<p>dd</p>', ''),
(8, '2/3/19', '123', 'Press', 'Press', 'Press', '3', '0', 'Dhaka, Mirpur-1', '', 'Paid', 'null', 'Cash On Delivery', '<p>ddd</p>', '<p>fff</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `description`) VALUES
(9, 'size-1', '---'),
(10, 'size-2', '--'),
(11, 'size-3', '---');

-- --------------------------------------------------------

--
-- Table structure for table `wood_names`
--

CREATE TABLE `wood_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `wood_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wood_names`
--

INSERT INTO `wood_names` (`id`, `wood_name`, `description`) VALUES
(1, 'demos', 'ddd'),
(3, 'name', '---');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receives`
--
ALTER TABLE `receives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_old`
--
ALTER TABLE `receive_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wood_names`
--
ALTER TABLE `wood_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receives`
--
ALTER TABLE `receives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `receive_old`
--
ALTER TABLE `receive_old`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wood_names`
--
ALTER TABLE `wood_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
