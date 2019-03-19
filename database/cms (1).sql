-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 11:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
(9, 'New Inventory Rack', 6, 'new_inv_rack.php', 0);

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
(10, 'Dhaka Inventory 1', 'dhaka', 0),
(11, 'Sylhet Inventory 1', 'sylhet', 0),
(12, 'Chittagong Inventory 1', 'chittagong', 0),
(13, 'Khula Inventory 1', 'khulna', 0),
(14, 'gazipur', 'gazipur', 0),
(15, 'I1', 'my', 2),
(16, 'weq', 'wqeqw', 2),
(17, 'adefad', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_lines`
--

CREATE TABLE `tbl_inventory_lines` (
  `id` int(100) NOT NULL,
  `inventoryCode` int(100) NOT NULL,
  `lineName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_lines`
--

INSERT INTO `tbl_inventory_lines` (`id`, `inventoryCode`, `lineName`) VALUES
(1, 10, 'dhkLine1'),
(2, 10, 'dhkLine2'),
(3, 11, 'SylLine1'),
(4, 11, 'SylLine2'),
(5, 12, 'ctgLine1'),
(6, 12, 'ctgLine2'),
(7, 13, 'khuLine1'),
(8, 14, 'gL1'),
(9, 16, 'www');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_racks`
--

CREATE TABLE `tbl_inventory_racks` (
  `id` int(100) NOT NULL,
  `inventoryCode` int(100) NOT NULL,
  `lineCode` int(100) NOT NULL,
  `rackName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_racks`
--

INSERT INTO `tbl_inventory_racks` (`id`, `inventoryCode`, `lineCode`, `rackName`) VALUES
(1, 10, 1, 'dhkL1R1'),
(2, 10, 1, 'dhkL1R2'),
(3, 10, 2, 'dhkL2R1'),
(4, 11, 3, 'SylL1R1'),
(5, 11, 4, 'SylL2R1'),
(6, 12, 5, 'ctgL1R1'),
(7, 12, 6, 'ctgL2R2'),
(8, 13, 7, 'khuL1R1'),
(9, 14, 8, 'gL1R1'),
(10, 14, 8, 'wwwwrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory_user`
--

CREATE TABLE `tbl_inventory_user` (
  `id` int(100) NOT NULL,
  `inventoryName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `inventory_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory_user`
--

INSERT INTO `tbl_inventory_user` (`id`, `inventoryName`, `userName`, `user_id`, `inventory_id`) VALUES
(1, '2', 'E0014closed', 0, 0),
(2, 'test', 'roich', 0, 0),
(3, 'qqq', 'nesar', 0, 0),
(4, 'fdgf', 'shahela', 0, 0),
(5, 'nawshin', 'sarkar60', 0, 0),
(6, 'Dhaka Inventory 1', 'nawshin', 516, 10),
(7, 'Sylhet Inventory 1', 'nawshin', 516, 11),
(8, 'Chittagong Inventory 1', 'nawshin', 516, 12),
(9, 'Khula Inventory 1', 'nawshin', 516, 13),
(10, 'gazipur', 'nawshin', 516, 14);

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
(19, 9, '9-- New Inventory Rack', 1, '1-- admin');

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
-- Indexes for table `tbl_inventory_info`
--
ALTER TABLE `tbl_inventory_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory_lines`
--
ALTER TABLE `tbl_inventory_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventoryCode` (`inventoryCode`);

--
-- Indexes for table `tbl_inventory_racks`
--
ALTER TABLE `tbl_inventory_racks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventoryCode` (`inventoryCode`),
  ADD KEY `lineCode` (`lineCode`);

--
-- Indexes for table `tbl_inventory_user`
--
ALTER TABLE `tbl_inventory_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_inventory_info`
--
ALTER TABLE `tbl_inventory_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_inventory_lines`
--
ALTER TABLE `tbl_inventory_lines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_inventory_racks`
--
ALTER TABLE `tbl_inventory_racks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_inventory_user`
--
ALTER TABLE `tbl_inventory_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_inventory_lines`
--
ALTER TABLE `tbl_inventory_lines`
  ADD CONSTRAINT `tbl_inventory_lines_ibfk_1` FOREIGN KEY (`inventoryCode`) REFERENCES `tbl_inventory_info` (`id`);

--
-- Constraints for table `tbl_inventory_racks`
--
ALTER TABLE `tbl_inventory_racks`
  ADD CONSTRAINT `tbl_inventory_racks_ibfk_1` FOREIGN KEY (`inventoryCode`) REFERENCES `tbl_inventory_info` (`id`),
  ADD CONSTRAINT `tbl_inventory_racks_ibfk_2` FOREIGN KEY (`lineCode`) REFERENCES `tbl_inventory_lines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
