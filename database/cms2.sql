-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 05:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(75) NOT NULL,
  `menu_id` int(11) UNSIGNED DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL,
  `user_role_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `menu_id`, `page`, `user_role_id`) VALUES
(1, 'Home', NULL, 'home.php', 0),
(2, 'Create Menu', 4, 'create_menu.php', 0),
(3, 'Assign Menu', 4, 'assign_menu.php', 0),
(4, 'Menu Management', NULL, NULL, 0),
(5, 'New User', NULL, 'new_user.php', 0),
(6, 'Inventory Management', NULL, NULL, 0),
(7, 'New Inventory', 6, 'new_inventory.php', 0),
(8, 'New Inventory Line', 6, 'new_inv_line.php', 0),
(9, 'New Inventory Rack', 6, 'new_inv_rack.php', 0),
(10, 'New Sports Entry', NULL, 'sports_list.php', 0),
(11, 'Inventory Equipment Entry', 6, 'new_Inv_equipment.php', 0),
(12, 'New Equipment Entry', NULL, 'equipment_list.php', 0),
(13, 'Booking Management', NULL, NULL, 0),
(14, 'Book Sports Equipment', 13, 'booking.php', 0),
(15, 'View Booking Request', 13, 'view_booking_requests.php', 0),
(16, 'View Accepted Bookings', 13, 'view_bookings_accepted.php', 0),
(17, 'Return Equipment', 6, 'return_equipment.php', 0),
(18, 'New Field Entry', NULL, 'new_field.php', 0),
(19, 'Book Indoor Field', 13, 'indoor_booking.php', 0),
(20, 'Book Outdoor Field', 13, 'outdoor_booking.php', 0),
(21, 'View Feld Booking Request', 13, 'view_field_booking_requests.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment_info`
--

CREATE TABLE `tbl_equipment_info` (
  `id` int(100) NOT NULL,
  `sport_id` int(100) NOT NULL,
  `equip_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_equipment_info`
--

INSERT INTO `tbl_equipment_info` (`id`, `sport_id`, `equip_name`) VALUES
(1, 2, 'football'),
(2, 2, 'goalpost net'),
(3, 2, 'whistle'),
(4, 3, 'handball'),
(5, 4, 'carrom pieces'),
(6, 4, 'carrom board'),
(7, 1, 'bat'),
(8, 1, 'ball');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields_info`
--

CREATE TABLE `tbl_fields_info` (
  `id` int(11) NOT NULL,
  `field_name` varchar(100) NOT NULL,
  `indoor/outdoor` varchar(30) NOT NULL,
  `booking_status` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fields_info`
--

INSERT INTO `tbl_fields_info` (`id`, `field_name`, `indoor/outdoor`, `booking_status`) VALUES
(1, 'President Hall', 'indoor', 'Y'),
(2, 'Basket Ball Court', 'outdoor', 'Y'),
(3, 'Futsal Court', 'outdoor', 'N'),
(4, 'Long Tennis Court', 'outdoor', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_booking`
--

CREATE TABLE `tbl_field_booking` (
  `id` int(11) NOT NULL,
  `field_name` varchar(100) NOT NULL,
  `booking_startdate` date NOT NULL,
  `booking_starttime` time NOT NULL,
  `booking_enddate` date NOT NULL,
  `booking_endtime` time NOT NULL,
  `book_req_by` varchar(100) NOT NULL,
  `request_accepted` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_booking`
--

INSERT INTO `tbl_field_booking` (`id`, `field_name`, `booking_startdate`, `booking_starttime`, `booking_enddate`, `booking_endtime`, `book_req_by`, `request_accepted`) VALUES
(3, 'President Hall', '2019-04-05', '08:40:00', '2019-04-05', '08:40:00', 'alavi', 'Y'),
(6, 'Basket Ball Court', '2019-04-05', '08:41:00', '2019-04-05', '08:41:00', 'alavi', 'Y'),
(7, 'Long Tennis Court', '2019-04-05', '08:41:00', '2019-04-05', '08:41:00', 'alavi', 'Y'),
(8, 'Futsal Court', '2019-04-05', '08:41:00', '2019-04-05', '08:41:00', 'alavi', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_equipment`
--

CREATE TABLE `tbl_inventory_equipment` (
  `id` int(11) NOT NULL,
  `equip_name` varchar(100) NOT NULL,
  `sport_name` varchar(100) NOT NULL,
  `rack_name` varchar(100) NOT NULL,
  `book_status` varchar(1) NOT NULL,
  `entry_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_by` varchar(200) NOT NULL,
  `num_of_equipments` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_equipment`
--

INSERT INTO `tbl_inventory_equipment` (`id`, `equip_name`, `sport_name`, `rack_name`, `book_status`, `entry_time`, `entry_by`, `num_of_equipments`) VALUES
(8, 'carrom pieces', 'Carrom', 'InvNilai_L1_CarromRack', '', '2019-04-05 15:27:17', 'alavi', 106),
(12, 'ball', 'Snooker', 'InvNilai_L2_CarromRack', '', '2019-03-22 17:28:25', 'alavi', 6),
(13, 'goalpost net', 'Futsal', 'InvNilai_L2_CarromRack', '', '2019-04-05 12:30:49', 'alavi', 21),
(15, 'carrom board', 'Carrom', 'InvNilai_L1_CarromRack', '', '2019-04-02 13:29:40', 'alavi', 4),
(18, 'whistle', 'Futsal', 'InvNilai_L2_CricketRack', '', '2019-04-05 15:27:21', 'alavi', 2),
(23, 'bat', 'Cricket', 'InvNilai_L2_CarromRack', '', '2019-04-05 12:57:13', 'alavi', 5),
(25, 'handball', 'Tchoukball', 'InvNilai_L2_CricketRack', '', '2019-04-05 12:59:00', 'alavi', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_info`
--

CREATE TABLE `tbl_inventory_info` (
  `id` int(100) NOT NULL,
  `inventory_name` varchar(100) NOT NULL,
  `inventory_address` varchar(300) NOT NULL,
  `Inventory_Manager` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_info`
--

INSERT INTO `tbl_inventory_info` (`id`, `inventory_name`, `inventory_address`, `Inventory_Manager`) VALUES
(18, 'Inventory Nilai', 'Nilai', 1),
(19, 'Inventory Nilai 2', 'Nilai', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_lines`
--

CREATE TABLE `tbl_inventory_lines` (
  `id` int(100) NOT NULL,
  `inventoryCode` varchar(100) NOT NULL,
  `lineName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_lines`
--

INSERT INTO `tbl_inventory_lines` (`id`, `inventoryCode`, `lineName`) VALUES
(12, 'Inventory Nilai', 'InvNilai_L1'),
(13, 'Inventory Nilai', 'InvNilai_L2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_racks`
--

CREATE TABLE `tbl_inventory_racks` (
  `id` int(100) NOT NULL,
  `inventoryCode` varchar(100) NOT NULL,
  `lineCode` varchar(100) NOT NULL,
  `rackName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_racks`
--

INSERT INTO `tbl_inventory_racks` (`id`, `inventoryCode`, `lineCode`, `rackName`) VALUES
(11, 'Inventory Nilai', 'InvNilai_L1', 'InvNilai_L1_CarromRack'),
(12, 'Inventory Nilai', 'InvNilai_L2', 'InvNilai_L2_CarromRack'),
(13, 'Inventory Nilai', 'InvNilai_L1', 'InvNilai_L2_CricketRack');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `id` int(11) NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `user_role_id` int(11) UNSIGNED NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_permission`
--

INSERT INTO `tbl_role_permission` (`id`, `menu_id`, `menu_title`, `user_role_id`, `user_role`) VALUES
(1, 1, '1-- Home', 1, '1-- admin'),
(9, 1, '1-- Home', 2, '2-- moderator'),
(10, 1, '1-- Home', 3, '3-- student'),
(11, 1, '1-- Home', 4, '4-- observer'),
(12, 4, '4-- Menu Management', 1, '1-- admin'),
(13, 2, '2-- Create Menu', 1, '1-- admin'),
(14, 3, '3-- Assign Menu', 1, '1-- admin'),
(15, 5, '5-- New User', 1, '1-- admin'),
(16, 6, '6-- Inventory Management', 1, '1-- admin'),
(17, 7, '7-- New Inventory', 1, '1-- admin'),
(18, 8, '8-- New Inventory Line', 1, '1-- admin'),
(19, 9, '9-- New Inventory Rack', 1, '1-- admin'),
(20, 10, '10-- New Sports Entry', 1, '1-- admin'),
(21, 11, '11-- New Equipment Entry', 1, '1-- admin'),
(22, 12, '12-- New Equipment Entry', 1, '1-- admin'),
(23, 13, '13-- Booking Management', 1, '1-- admin'),
(24, 13, '13-- Booking Management', 2, '2-- moderator'),
(25, 13, '13-- Booking Management', 3, '3-- student'),
(26, 14, '14-- Book Sports Equipment', 1, '1-- admin'),
(27, 14, '14-- Book Sports Equipment', 2, '2-- moderator'),
(28, 14, '14-- Book Sports Equipment', 3, '3-- student'),
(29, 15, '15-- View Booking Request', 1, '1-- admin'),
(30, 15, '15-- View Booking Request', 2, '2-- moderator'),
(31, 16, '16-- View Accepted Bookings', 1, '1-- admin'),
(32, 16, '16-- View Accepted Bookings', 2, '2-- moderator'),
(33, 16, '16-- View Accepted Bookings', 3, '3-- student'),
(34, 16, '16-- View Accepted Bookings', 4, '4-- observer'),
(35, 17, '17-- Return Equipment', 1, '1-- admin'),
(36, 17, '17-- Return Equipment', 2, '2-- moderator'),
(37, 18, '18-- New Field Entry', 1, '1-- admin'),
(38, 18, '18-- New Field Entry', 2, '2-- moderator'),
(39, 19, '19-- Book Indoor Field', 1, '1-- admin'),
(40, 19, '19-- Book Indoor Field', 2, '2-- moderator'),
(41, 19, '19-- Book Indoor Field', 3, '3-- student'),
(42, 20, '20-- Book Outdoor Field', 1, '1-- admin'),
(43, 20, '20-- Book Outdoor Field', 2, '2-- moderator'),
(44, 20, '20-- Book Outdoor Field', 3, '3-- student'),
(45, 21, '21-- View Feld Booking Request', 1, '1-- admin'),
(46, 21, '21-- View Feld Booking Request', 2, '2-- moderator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sports_info`
--

CREATE TABLE `tbl_sports_info` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sports_info`
--

INSERT INTO `tbl_sports_info` (`id`, `sport_name`) VALUES
(4, 'Carrom'),
(1, 'Cricket'),
(2, 'Futsal'),
(5, 'Snooker'),
(6, 'Table Tennis'),
(3, 'Tchoukball');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tmp_booking`
--

CREATE TABLE `tbl_tmp_booking` (
  `id` int(11) NOT NULL,
  `sports_name` varchar(100) NOT NULL,
  `equip_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `booking_startdate` date NOT NULL,
  `booking_starttime` time NOT NULL,
  `booking_enddate` date NOT NULL,
  `booking_endtime` time NOT NULL,
  `book_req_by` varchar(100) NOT NULL,
  `request_accepted` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tmp_booking`
--

INSERT INTO `tbl_tmp_booking` (`id`, `sports_name`, `equip_name`, `quantity`, `booking_startdate`, `booking_starttime`, `booking_enddate`, `booking_endtime`, `book_req_by`, `request_accepted`) VALUES
(22, 'Carrom', 'carrom pieces', 2, '2019-04-05', '05:03:00', '2019-04-05', '05:03:00', 'alavi', 'Y'),
(23, 'Carrom', 'whistle', 6, '2019-04-12', '05:03:00', '2019-04-05', '05:03:00', 'alavi', 'Y'),
(24, 'Cricket', 'football', 5, '2019-04-05', '05:03:00', '2019-04-05', '05:03:00', 'alavi', 'Y'),
(25, 'Futsal', 'carrom pieces', 4, '2019-04-05', '05:04:00', '2019-04-05', '05:04:00', 'alavi', NULL),
(26, 'Cricket', 'whistle', 2, '2019-04-05', '05:19:00', '2019-04-05', '05:19:00', 'alavi', NULL),
(28, 'Cricket', 'whistle', 3, '2019-04-05', '09:25:00', '2019-04-05', '09:25:00', 'alavi', NULL),
(29, 'Carrom', 'football', 3, '2019-04-05', '09:25:00', '2019-04-05', '09:26:00', 'alavi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 1, 'alavi', 'sristi', 'alavi_sristi@example.com', '111'),
(2, 2, 'ahsan', 'zameer', 'ahsan@example.com', '111'),
(3, 3, 'sarah', 'khan', 'sarah@example.com', '111'),
(4, 4, 'salman', 'ahmed', 'salman@example.com', '111'),
(5, 3, 'ishraque', 'iltemus', 'alavitabassum@gmail.com', '111'),
(6, 1, 'adnan', 'shikder', 'adnan@gmail.com', '111'),
(7, 3, 'saeef', 'khan', 'alavitabassum@gmail.com', '111'),
(8, 2, 'ishraque', 'shikder', 'alavitabassum@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'student'),
(4, 'observer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_equipment_info`
--
ALTER TABLE `tbl_equipment_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equip_name` (`equip_name`);

--
-- Indexes for table `tbl_fields_info`
--
ALTER TABLE `tbl_fields_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `field_name` (`field_name`);

--
-- Indexes for table `tbl_field_booking`
--
ALTER TABLE `tbl_field_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory_equipment`
--
ALTER TABLE `tbl_inventory_equipment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equip_name` (`equip_name`);

--
-- Indexes for table `tbl_inventory_info`
--
ALTER TABLE `tbl_inventory_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_name` (`inventory_name`);

--
-- Indexes for table `tbl_inventory_lines`
--
ALTER TABLE `tbl_inventory_lines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lineName` (`lineName`);

--
-- Indexes for table `tbl_inventory_racks`
--
ALTER TABLE `tbl_inventory_racks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rackName` (`rackName`);

--
-- Indexes for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sports_info`
--
ALTER TABLE `tbl_sports_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sport_name` (`sport_name`);

--
-- Indexes for table `tbl_tmp_booking`
--
ALTER TABLE `tbl_tmp_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_equipment_info`
--
ALTER TABLE `tbl_equipment_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_fields_info`
--
ALTER TABLE `tbl_fields_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_field_booking`
--
ALTER TABLE `tbl_field_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_inventory_equipment`
--
ALTER TABLE `tbl_inventory_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_inventory_info`
--
ALTER TABLE `tbl_inventory_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_inventory_lines`
--
ALTER TABLE `tbl_inventory_lines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_inventory_racks`
--
ALTER TABLE `tbl_inventory_racks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_sports_info`
--
ALTER TABLE `tbl_sports_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_tmp_booking`
--
ALTER TABLE `tbl_tmp_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
