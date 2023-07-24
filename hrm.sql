-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `print_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sign_two` varchar(255) NOT NULL,
  `print_name_two` varchar(255) NOT NULL,
  `date_two` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `is_call` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `privacy_policy` varchar(255) NOT NULL,
  `opt_out` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE `education_history` (
  `id` int(11) NOT NULL,
  `uu_id` bigint(20) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `starting_from` varchar(255) NOT NULL,
  `end_to` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `financial_history`
--

CREATE TABLE `financial_history` (
  `id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `court` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `employer_address` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `address_proof` varchar(255) NOT NULL,
  `address_proof_two` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `insurance_no` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `other_position` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `passport_expiry_date` varchar(255) NOT NULL,
  `insurance_proof` varchar(255) NOT NULL,
  `passport_proof` varchar(255) NOT NULL,
  `valid_frontline_licence` varchar(255) NOT NULL,
  `licence_type` varchar(255) NOT NULL,
  `licence_no` varchar(255) NOT NULL,
  `licence_expiry_date` varchar(255) NOT NULL,
  `licence_proof` varchar(255) NOT NULL,
  `licence_type_two` varchar(255) NOT NULL,
  `licence_no_two` varchar(255) NOT NULL,
  `licence_expiry_date_two` varchar(255) NOT NULL,
  `licence_proof_two` varchar(255) NOT NULL,
  `other_info` varchar(255) NOT NULL,
  `leisure` varchar(255) NOT NULL,
  `criminal_record` varchar(255) NOT NULL,
  `chest_size` varchar(255) NOT NULL,
  `waist_size` varchar(255) NOT NULL,
  `inside_leg_size` varchar(255) NOT NULL,
  `collar_size` varchar(255) NOT NULL,
  `shoes_size` varchar(255) NOT NULL,
  `days_not_work` varchar(255) NOT NULL,
  `hours_not_work` varchar(255) NOT NULL,
  `shift_not_work` varchar(255) NOT NULL,
  `account_holder` varchar(255) NOT NULL,
  `bank_code` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `emergency_person` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `emergency_no` varchar(255) NOT NULL,
  `has_vehicle` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `driving_licence` varchar(255) NOT NULL,
  `driving_licence_no` varchar(255) NOT NULL,
  `driving_licence_expiry` varchar(255) NOT NULL,
  `driving_licence_authority` varchar(255) NOT NULL,
  `motoring_offences` varchar(255) NOT NULL,
  `motoring_offences_detail` varchar(255) NOT NULL,
  `driving_licence_proof` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work_history`
--

CREATE TABLE `work_history` (
  `id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `employer_address` varchar(255) NOT NULL,
  `employer_email` varchar(255) NOT NULL,
  `nature_of_job` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `contact_person_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `reason_of_leaving` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_history`
--
ALTER TABLE `education_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_history`
--
ALTER TABLE `financial_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_history`
--
ALTER TABLE `work_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education_history`
--
ALTER TABLE `education_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `financial_history`
--
ALTER TABLE `financial_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_history`
--
ALTER TABLE `work_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
