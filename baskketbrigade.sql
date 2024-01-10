-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2023 at 05:38 PM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baskketbrigade`
--

-- --------------------------------------------------------

--
-- Table structure for table `borough`
--

CREATE TABLE `borough` (
  `id` int NOT NULL,
  `borogh_name` varchar(255) NOT NULL,
  `basket_limit` int NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `priority` int NOT NULL COMMENT '1 to 33',
  `wave` varchar(100) NOT NULL,
  `limit_percentage` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkin_prepration`
--

CREATE TABLE `checkin_prepration` (
  `id` int NOT NULL,
  `volunteer_id` int NOT NULL,
  `submission_id` int NOT NULL,
  `unique_token` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `no_of_children` int NOT NULL,
  `children_details` int NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `is_driving` smallint NOT NULL,
  `wave` varchar(100) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `is_sms_sent` smallint NOT NULL,
  `is_email_sent` smallint NOT NULL,
  `checkin_status` int NOT NULL,
  `timeslot` varchar(100) NOT NULL,
  `is_training_done` smallint NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `unique_token` varchar(255) NOT NULL,
  `volunteer_id` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crew_registration`
--

CREATE TABLE `crew_registration` (
  `id` int NOT NULL,
  `submission_id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `v_id` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csr_company`
--

CREATE TABLE `csr_company` (
  `id` int NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paid_status` smallint NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_registration`
--

CREATE TABLE `organization_registration` (
  `id` int NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `contact_fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `no_of_recipient` int NOT NULL,
  `recipient_id` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qr_checkin`
--

CREATE TABLE `qr_checkin` (
  `id` int NOT NULL,
  `volunteer_id` int NOT NULL,
  `submission_id` int NOT NULL,
  `checkin_time` timestamp NOT NULL,
  `checkin_id` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipient_registration`
--

CREATE TABLE `recipient_registration` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `no_of_family` int NOT NULL,
  `diet` varchar(100) NOT NULL,
  `type` text NOT NULL COMMENT 'veg/nonveg',
  `borogh` varchar(100) NOT NULL,
  `wave` int NOT NULL,
  `org` text NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tshirt_color` text NOT NULL,
  `hat_color` text NOT NULL,
  `start_time` timestamp NOT NULL,
  `elf_hat` smallint NOT NULL,
  `visual_band` smallint NOT NULL,
  `radio` smallint NOT NULL,
  `type` text NOT NULL COMMENT 'ELF,Randeer,Santaslay',
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_registration`
--

CREATE TABLE `volunteer_registration` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` int NOT NULL,
  `submision_id` varchar(255) NOT NULL,
  `unique_token` varchar(255) NOT NULL,
  `is_driving` smallint NOT NULL,
  `car_registration` varchar(255) NOT NULL,
  `is_ULEZ` smallint NOT NULL,
  `is_delivering_basket` smallint NOT NULL,
  `have_delivered` smallint NOT NULL,
  `basket_count` int NOT NULL,
  `basket_amount` int NOT NULL,
  `gift_aid` int NOT NULL,
  `home_add` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `deliver_more` int NOT NULL,
  `delivery_choice` varchar(255) NOT NULL,
  `delivery_choice1` varchar(255) NOT NULL,
  `delivery_choice2` varchar(255) NOT NULL,
  `delivery_choice3` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_transaction` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borough`
--
ALTER TABLE `borough`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkin_prepration`
--
ALTER TABLE `checkin_prepration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew_registration`
--
ALTER TABLE `crew_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csr_company`
--
ALTER TABLE `csr_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_registration`
--
ALTER TABLE `organization_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_checkin`
--
ALTER TABLE `qr_checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipient_registration`
--
ALTER TABLE `recipient_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borough`
--
ALTER TABLE `borough`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkin_prepration`
--
ALTER TABLE `checkin_prepration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crew_registration`
--
ALTER TABLE `crew_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csr_company`
--
ALTER TABLE `csr_company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_registration`
--
ALTER TABLE `organization_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qr_checkin`
--
ALTER TABLE `qr_checkin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipient_registration`
--
ALTER TABLE `recipient_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
