-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 04:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `place` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `place`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$YAa6d6WOaZKe5KNuL79XR.uGH7FK1xPnd6ViDhSWjbU1YfX1InXDu', 56674893, 'calicut', 'admin', NULL, '2023-07-24 14:09:14', '2023-07-24 14:09:14'),
(10, 'jaya', 'jaya@gmail.com', NULL, '$2y$10$kYAvcB6EggDFKhWvCt5CGOApPL31bYwIKJc9NJkkiOfSeydygZz76', 12345678, 'calicut', 'user', NULL, '2023-07-26 01:37:02', '2023-07-26 01:37:02'),
(11, 'sayu', 'sayu@gmail.com', NULL, '$2y$10$srsjpbvdEP/U7N31eUXcpuOwVMQNtODJHqZBzv0eb7Cz0iDVm75z.', 3456789, 'kollam', 'user', NULL, '2023-07-26 01:38:08', '2023-07-26 01:38:08'),
(12, 'Nivi', 'nivi@gmail.com', NULL, '$2y$10$zhBYctSAdPBt6NIMFBeIAeUQUtvT3s8CKFfIot.heRT/yckNto5/e', 4567890, 'Trivandrum', 'user', NULL, '2023-07-26 01:39:42', '2023-07-26 01:39:42'),
(13, 'sarath', 'sarath@gmail.com', NULL, '$2y$10$FRHR9bUwwE54i9TNqdRvVOjusnBWqdT61h0EJaYgg3lenMfvp8W4O', 234567, 'kakkodi', 'customer', NULL, '2023-07-26 01:42:11', '2023-07-26 01:42:11'),
(14, 'Meena', 'meena@gmail.com', NULL, '$2y$10$ucSJNB07EYAO.n9usMuUHuu2PQIbxzX8rlfIHBkMre79WoSwf1ZhK', 4567890, 'kozhikode', 'customer', NULL, '2023-07-26 01:44:13', '2023-07-26 01:44:13'),
(15, 'manu', 'manu@gmail.com', NULL, '$2y$10$6Uu5zgtJZCNnR5r9v5vC.eoj2D1Xu9fK/crrTxTKl3U6mF75ONCzW', 56789009, 'calicut', 'customer', NULL, '2023-07-26 01:45:20', '2023-07-26 01:45:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
