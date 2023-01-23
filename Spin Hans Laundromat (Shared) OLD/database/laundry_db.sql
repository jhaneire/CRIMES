-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2022 at 02:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'admin@sample.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'admin', 'sample', 'Male', '2022-12-30', '09123456789', 'Nashik', 'favicon.png', '2018-04-30', 1),
(7, 'user', 'janelvenh@gmail.com', 'fd340cf6b11daecdf87f3740526df052e90da5dc945316843522aff5f781748d', 'Jan Elven', 'Hongayo', 'Male', '2001-01-11', '09270088408', 'Sucat', '280213917_4970238083053941_595639239353113760_n.jpg', '2022-12-30', 2),
(8, 'user', 'enricopenaflor@gmail.com', 'fd340cf6b11daecdf87f3740526df052e90da5dc945316843522aff5f781748d', 'Enrico', 'Penaflor', 'Male', '2001-12-30', '09123456789', 'Muntinlupa', '295576896_2280012962148480_4824415362908334900_n.jpg', '2022-12-30', 3),
(10, 'user', 'juan_delacruz@gmail.com', 'fd340cf6b11daecdf87f3740526df052e90da5dc945316843522aff5f781748d', 'Juan', 'Dela Cruz', 'Male', '2000-01-26', '09123456789', 'Manila City', '295576896_2280012962148480_4824415362908334900_n.jpg', '2022-12-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `customertype` varchar(100) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `customertype`, `contact`, `address`) VALUES
(16, 'Lay Bare Waxing Salon Megamall', 'Business', '09123456789', 'EDIT ADDRESS HERE'),
(17, 'Lay Bare Waxing Salon Pasig', 'Business', '09123456789', 'EDIT ADDRESS HERE'),
(18, 'Lay Bare Waxing Salon Vista Mall', 'Business', '09123456789', 'EDIT ADDRESS HERE'),
(21, 'Juan Dela Cruz', 'Individual', '09123456789', 'Manila City');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'Spin - Hans Laundromat', 'Spin - Hans Dashboard', 'Spin-Hans Website Logo.png', '© 2023 Spin - Hans: Laundromat. All rights reserved.', '', '', 'favicon.png', '', '1091 - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `week` varchar(200) NOT NULL,
  `todays_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `linen` int(200) NOT NULL,
  `towel` int(255) NOT NULL,
  `pillowcase` int(255) NOT NULL,
  `robe` int(255) NOT NULL,
  `rug` int(255) NOT NULL,
  `facetowel` int(255) NOT NULL,
  `pillow` int(255) NOT NULL,
  `weight` double(255,1) NOT NULL,
  `perkg` int(255) NOT NULL,
  `prizes` int(255) NOT NULL,
  `delivery_status` tinyint(4) NOT NULL,
  `total` double(255,2) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `fname`, `month`, `week`, `todays_date`, `delivery_date`, `linen`, `towel`, `pillowcase`, `robe`, `rug`, `facetowel`, `pillow`, `weight`, `perkg`, `prizes`, `delivery_status`, `total`, `sname`) VALUES
(442, '16', 'DECEMBER', 'Week 5', '2022-12-30', '2023-01-01', 1, 0, 0, 0, 0, 0, 0, 8.0, 30, 0, 0, 240.00, ''),
(444, '21', 'DECEMBER', 'Week 5', '2022-12-30', '2023-01-01', 10, 9, 8, 7, 6, 5, 4, 8.0, 30, 0, 1, 240.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `prize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `sname`, `prize`) VALUES
(4, 'washing', '50'),
(14, 'rollpessing', '160'),
(15, 'ironing', '100'),
(16, 'Ironing', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

CREATE TABLE `tbl_email_config` (
  `e_id` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, '<Laundry Management> ', 'mail.gmail.com', 587, 'ndbhalerao91@gmail.com', 'x(ilz?cWumI2', 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'Manager', 'A person responsible for controlling or administering all or part of a company or similar organization.'),
(3, 'Receptionist', 'A receptionist is an employee taking an office or administrative support position.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id`, `name`, `display_name`, `operation`) VALUES
(1, 'manage_user', 'Manage User', 'manage_user'),
(2, 'add_user', 'Add User', 'add_user'),
(3, 'edit_user', 'Edit User', 'edit_user'),
(4, 'delete_user', 'Delete User', 'delete_user'),
(5, 'add_order', 'Add Laundry', 'add_order'),
(6, 'edit_order', 'Edit Laundry', 'edit_order'),
(7, 'delete_order', 'Delete Laundry', 'delete_order'),
(8, 'edit_custome', 'Edit Client', 'edit_customer'),
(9, 'delete_customer', 'Delete Client', 'delete_customer'),
(10, 'add_services', 'Website Management', 'add_services'),
(11, 'delete_services', '', 'delete_services');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_role`
--

CREATE TABLE `tbl_permission_role` (
  `id` int(30) NOT NULL,
  `permission_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_role`
--

INSERT INTO `tbl_permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(25, 1, 4),
(26, 2, 4),
(27, 3, 4),
(28, 4, 4),
(39, 1, 5),
(40, 2, 5),
(41, 3, 5),
(42, 4, 5),
(43, 5, 5),
(44, 6, 5),
(45, 7, 5),
(46, 8, 5),
(47, 9, 5),
(48, 10, 5),
(49, 11, 5),
(52, 1, 6),
(63, 1, 2),
(64, 2, 2),
(65, 3, 2),
(66, 5, 2),
(67, 6, 2),
(68, 7, 2),
(69, 8, 2),
(70, 9, 2),
(71, 10, 2),
(72, 11, 2),
(73, 5, 3),
(74, 6, 3),
(75, 8, 3),
(76, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_config`
--

CREATE TABLE `tbl_sms_config` (
  `smsid` int(20) NOT NULL,
  `senderid` int(20) NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(20) NOT NULL,
  `auth_key` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_config`
--

INSERT INTO `tbl_sms_config` (`smsid`, `senderid`, `sms_username`, `sms_password`, `auth_key`) VALUES
(1, 101, 'username', 'password', 'authkey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
