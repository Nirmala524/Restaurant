-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `fimg` varchar(255) NOT NULL,
  `simg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `title`, `desc`, `detail`, `date`, `contact`, `fimg`, `simg`, `created_at`, `updated_at`) VALUES
(1, 'About', 'Feliciano Restaurant', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2025-01-25', 9781234567, '1737785656.jpg', '1737785657.jpg', NULL, '2025-01-25 00:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `role` int(11) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `date`, `role`, `detail`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2025-01-01', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738648788.jpg', 1, '2025-02-04 00:29:49', '2025-02-04 00:29:49'),
(2, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2024-07-18', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738648920.jpg', 1, '2025-02-04 00:32:00', '2025-02-04 00:32:00'),
(3, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2024-04-16', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738648964.jpg', 1, '2025-02-04 00:32:44', '2025-02-04 00:32:44'),
(4, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2024-03-05', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738649032.jpg', 1, '2025-02-04 00:33:52', '2025-02-04 00:33:52'),
(5, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2025-01-08', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738649377.jpg', 1, '2025-02-04 00:39:37', '2025-02-04 00:39:37'),
(6, 'Taste the delicious foods in Asia', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '2025-02-01', 1, '<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p><p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p><p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p><p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p><p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>', '1738649440.jpg', 1, '2025-02-04 00:40:40', '2025-02-04 00:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `person` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `email`, `phone`, `date`, `time`, `person`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kajal Patel', 'kajal123@gmail.com', 9856234560, '2025-03-03', '10:01:00', 2, 1, '2025-02-08 01:27:05', '2025-02-10 02:43:43'),
(3, 'jinal', 'jinal123@gmail.com', 9856321456, '2025-02-28', '19:32:00', 1, 1, '2025-02-08 01:32:42', '2025-02-08 01:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `user`, `desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jason McClean', 'Customer', 'Far far away, behind the word mountains, far from the countries  Vokalia and Consonantia, there live the blind texts.', '1737708229.jpg', 1, '2025-01-24 02:53:54', '2025-01-24 03:13:49'),
(2, 'Mark Stevenson', 'Customer', 'Far far away, behind the word mountains, far from the countries  Vokalia and Consonantia, there live the blind texts.', '1737707257.jpg', 1, '2025-01-24 02:57:37', '2025-01-24 02:57:37'),
(3, 'Art Leonard', 'Customer', 'Far far away, behind the word mountains, far from the countries  Vokalia and Consonantia, there live the blind texts.', '1737707317.jpg', 1, '2025-01-24 02:58:37', '2025-01-24 02:58:37'),
(4, 'Rose Henderson', 'Customer', 'Far far away, behind the word mountains, far from the countries  Vokalia and Consonantia, there live the blind texts.', '1737707370.jpg', 1, '2025-01-24 02:59:30', '2025-01-24 02:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `custom_logins`
--

CREATE TABLE `custom_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_logins`
--

INSERT INTO `custom_logins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Vicky Mali', 'vickymali11@gmail.com', '$2y$12$GaCAOg./eylnq9kdD.RXw.TfQCc7HAmai53wSYEogWz0YNkn2334C', '2025-02-06 04:09:06', '2025-02-06 04:09:06'),
(2, 'Pooja  Saini', 'poojasaini11@gmail.com', '$2y$12$HDGpNrZgTQBFXhTi0QyELe7zZQonUsnZJuNkpAeVgtD/RokZ5aXNG', '2025-02-06 04:38:48', '2025-02-06 04:38:48'),
(3, 'Nirmala Parmar', 'nirmala11@gmail.com', '$2y$12$tuwGdMYDbJ1FP8y/EqTbSe6EyLkdwwq5Fx2ytC1TzvU1KxaYzi3VS', '2025-02-10 03:32:26', '2025-02-10 03:32:26'),
(5, 'xyz', 'xyz@gmail.com', '$2y$12$HhSTkke289i4c/ds7OIRJOOSwet8A/01ZcRez/OeOXL57MR9JrtXS', '2025-02-10 03:45:44', '2025-02-10 03:45:44'),
(6, 'test user', 'test11@gmail.com', '$2y$12$OSBKd66Emmk9fR0r0EZmiO1OjwGF6adVi7kM8cqiYW9Aw0XVMlPzK', '2025-02-11 00:30:52', '2025-02-11 00:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `title`, `price`, `menu_id`, `class`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Special Paratha', 'South Indian Dish Recipes', 150, 1, 'wUfPB', '1736486654.jpg', '1', '2025-01-09 01:55:28', '2025-01-18 01:12:36'),
(2, 'Royal Dosa', 'North  Indian Recipes', 250, 1, 'wUfPB', '1736407697.png', '1', '2025-01-09 01:58:17', '2025-01-18 01:13:56'),
(3, 'Khaman Dhokla', 'Indian recepies', 100, 1, 'wUfPB', '1736407819.jpg', '1', '2025-01-09 02:00:19', '2025-01-18 01:14:06'),
(4, 'Fafda Jalebi', 'Gujrati Special Dish', 200, 1, 'wUfPB', '1736408052.jpeg', '1', '2025-01-09 02:04:12', '2025-01-18 01:14:16'),
(5, 'Gujrati Special Ghughra', 'Gujrati Special', 210, 1, 'wUfPB', '1736414399.jpg', '1', '2025-01-09 03:49:59', '2025-01-18 01:14:24'),
(6, 'Khadvi', 'Gujrati Special Dish', 100, 1, 'wUfPB', '1736414458.jpg', '1', '2025-01-09 03:50:58', '2025-01-18 01:14:34'),
(7, 'Gujrati Special Dish Gota', 'Gujrati Special Dish', 400, 1, 'wUfPB', '1736488686.webp', '1', '2025-01-10 00:28:06', '2025-01-18 01:14:45'),
(8, 'Kachori Special', 'Gujrati Special Dish', 250, 1, 'wUfPB', '1736488737.avif', '1', '2025-01-10 00:28:57', '2025-01-18 01:14:58'),
(9, 'Gujrati Special Thali', 'Indian special dish', 1100, 2, 'gqGoH', '1736491370.jpg', '1', '2025-01-10 01:12:50', '2025-01-18 01:15:10'),
(10, 'South Indian Special Thali', 'Indian special dish', 700, 2, 'gqGoH', '1736491420.jpg', '1', '2025-01-10 01:13:41', '2025-01-18 01:15:48'),
(11, 'Indian Punjabi Special Dish', 'Indian Special Dish', 900, 2, 'gqGoH', '1736492083.jpg', '1', '2025-01-10 01:24:43', '2025-01-18 01:16:19'),
(12, 'West Indian Special Dish', 'Indian Special Dish', 800, 2, 'gqGoH', '1736492185.jpg', '1', '2025-01-10 01:26:25', '2025-01-18 01:16:30'),
(13, 'Gujrati Special Thali', 'Indian Special Thali', 1200, 2, 'gqGoH', '1736498830.jpg', '1', '2025-01-10 03:17:11', '2025-01-18 01:16:47'),
(14, 'West Indian Special Dish', 'Indian Special Dish', 1500, 2, 'gqGoH', '1736498932.jpg', '1', '2025-01-10 03:18:00', '2025-01-18 01:17:33'),
(15, 'South Indian Special Thali', 'Indian Special Thali', 1400, 2, 'gqGoH', '1736499051.avif', '1', '2025-01-10 03:20:51', '2025-01-18 01:21:25'),
(16, 'Gujrati Special Thali', 'Indian Special Thali', 1300, 2, 'gqGoH', '1736499121.jpg', '1', '2025-01-10 03:22:01', '2025-01-18 01:21:40'),
(17, 'Best Wine', 'Best Wines for Date Night', 2100, 6, 'RAgFb', '1736500378.jpeg', '1', '2025-01-10 03:42:58', '2025-01-18 01:17:53'),
(18, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 1400, 6, 'RAgFb', '1736500822.webp', '1', '2025-01-10 03:50:22', '2025-01-18 01:18:15'),
(19, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 1600, 6, 'RAgFb', '1736500946.jpg', '1', '2025-01-10 03:52:26', '2025-01-18 01:18:29'),
(20, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 5100, 6, 'RAgFb', '1736501021.jpg', '1', '2025-01-10 03:53:41', '2025-01-18 01:18:41'),
(21, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 2100, 6, 'RAgFb', '1736501049.jpg', '1', '2025-01-10 03:54:09', '2025-01-18 01:18:51'),
(22, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 2000, 6, 'RAgFb', '1736501252.jpg', '1', '2025-01-10 03:57:32', '2025-01-18 01:19:04'),
(23, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 4254, 6, 'RAgFb', '1736586636.jpeg', '1', '2025-01-11 03:40:36', '2025-01-18 01:19:20'),
(24, 'Wine Bottle Glass Grapes Stock', 'Wine Bottle Glass Grapes Stock', 5120, 6, 'RAgFb', '1737103037.jpg', '1', '2025-01-11 03:41:44', '2025-01-18 01:19:45'),
(25, 'Chocolate Dessert', 'Chocolate Dessert', 510, 5, 'BdnPi', '1736587868.jpg', '1', '2025-01-11 04:01:08', '2025-01-18 01:19:57'),
(26, 'Chocolate Dessert', 'Chocolate Dessert', 1100, 5, 'BdnPi', '1737178722.jpg', '1', '2025-01-18 00:08:43', '2025-01-18 00:08:43'),
(27, 'Best Restaurant Desserts', 'Best Restaurant Desserts', 520, 5, 'BdnPi', '1737178851.avif', '1', '2025-01-18 00:10:51', '2025-01-18 00:10:51'),
(28, 'Best Restaurant Desserts', 'Best Restaurant Desserts', 900, 5, 'BdnPi', '1737178879.avif', '1', '2025-01-18 00:11:19', '2025-01-18 00:11:19'),
(29, 'Chocolate Dessert', 'Best Restaurant Desserts', 599, 5, 'BdnPi', '1737178989.jpg', '1', '2025-01-18 00:13:09', '2025-01-18 00:13:09'),
(30, 'Best Restaurant Desserts', 'Best Restaurant Desserts', 599, 5, 'BdnPi', '1737179212.avif', '1', '2025-01-18 00:16:52', '2025-01-18 00:16:52'),
(31, 'Chocolate Dessert', 'Chocolate Dessert', 510, 5, 'BdnPi', '1737179664.jpg', '1', '2025-01-18 00:24:24', '2025-01-18 00:24:24'),
(32, 'Chocolate Dessert', 'Chocolate Dessert', 699, 5, 'BdnPi', '1737179693.jpg', '1', '2025-01-18 00:24:53', '2025-01-18 00:24:53'),
(33, 'Cocktail Bar Drinks', 'Cocktail Bar Drinks', 120, 4, 'szbRu', '1737179742.jpg', '1', '2025-01-18 00:25:42', '2025-01-18 00:25:42'),
(34, 'Cocktail Bar Drinks', 'Cocktail Bar Drinks', 510, 4, 'szbRu', '1737179761.jpg', '1', '2025-01-18 00:26:01', '2025-01-18 00:26:01'),
(35, 'Cocktail Bar Drinks', 'Cocktail Bar Drinks', 610, 4, 'szbRu', '1737179778.jpg', '1', '2025-01-18 00:26:18', '2025-01-18 00:26:18'),
(36, 'Cocktail Bar Drinks', 'Cocktail Bar Drinks', 210, 4, 'szbRu', '1737179827.jpg', '1', '2025-01-18 00:27:07', '2025-01-18 00:27:07'),
(37, 'soft drinks', 'Cocktail Bar Drinks', 110, 4, 'szbRu', '1737179864.jpg', '1', '2025-01-18 00:27:44', '2025-01-18 00:27:44'),
(38, 'Cocktail Bar Drinks', 'Cocktail Bar Drinks', 210, 4, 'szbRu', '1737179880.jpg', '1', '2025-01-18 00:28:00', '2025-01-18 00:28:00'),
(40, 'Vegetarian Indian Dinner Recipes', 'Vegetarian Indian Dinner Recipes', 1500, 3, 'lYZgd', '1738312923.jpg', '1', '2025-01-31 03:12:03', '2025-01-31 03:12:03'),
(41, 'Indian Dinner Recipes', 'Indian Dinner Recipes', 1100, 3, 'lYZgd', '1738312988.jpg', '1', '2025-01-31 03:13:08', '2025-01-31 03:13:08'),
(42, 'Indian Dinner Recipes', 'Indian Dinner Recipes', 2100, 3, 'lYZgd', '1738313035.jpg', '1', '2025-01-31 03:13:55', '2025-01-31 03:13:55'),
(43, 'Indian Punjabi Special Dish', 'Indian Punjabi Special Dish', 999, 3, 'lYZgd', '1738313066.jpg', '1', '2025-01-31 03:14:26', '2025-01-31 03:14:26'),
(44, 'Indian Special Thali', 'Indian Special Thali', 1200, 3, 'lYZgd', '1738313117.jpg', '1', '2025-01-31 03:15:17', '2025-01-31 03:15:17'),
(45, 'Indian Special Thali', 'Indian Special Thali', 1600, 3, 'lYZgd', '1738313145.jpg', '1', '2025-01-31 03:15:45', '2025-01-31 03:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `happies`
--

CREATE TABLE `happies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `happies`
--

INSERT INTO `happies` (`id`, `number`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 'Years of Experienced', '1', '2025-01-25 00:27:53', '2025-01-25 00:27:53'),
(2, 100, 'Menus/Dish', '1', '2025-01-25 00:28:07', '2025-01-25 00:28:07'),
(3, 50, 'Staffs', '1', '2025-01-25 00:28:23', '2025-01-25 00:28:23'),
(4, 15000, 'Happy Customers', '1', '2025-01-25 00:28:48', '2025-01-25 00:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `instagrams`
--

CREATE TABLE `instagrams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagrams`
--

INSERT INTO `instagrams` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1737969526.jpg', 1, '2025-01-27 03:48:46', '2025-01-27 03:48:46'),
(2, '1737969543.jpg', 1, '2025-01-27 03:49:03', '2025-01-27 03:49:03'),
(3, '1737969558.jpg', 1, '2025-01-27 03:49:18', '2025-01-27 03:49:18'),
(4, '1737969568.jpg', 1, '2025-01-27 03:49:28', '2025-01-27 03:49:28'),
(5, '1737969583.jpg', 1, '2025-01-27 03:49:43', '2025-01-27 03:49:43'),
(6, '1737969614.jpg', 1, '2025-01-27 03:50:14', '2025-01-27 03:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `class_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'wUfPB', 1, '2025-01-09 00:43:45', '2025-01-17 03:03:53'),
(2, 'Lunch', 'gqGoH', 1, '2025-01-09 00:44:34', '2025-01-17 03:03:58'),
(3, 'Dinner', 'lYZgd', 1, '2025-01-09 00:44:44', '2025-01-17 03:04:03'),
(4, 'Drinks', 'szbRu', 1, '2025-01-09 00:44:56', '2025-01-17 03:04:14'),
(5, 'Desserts', 'BdnPi', 1, '2025-01-09 00:45:12', '2025-01-17 03:04:20'),
(6, 'Wine', 'RAgFb', 1, '2025-01-09 00:45:20', '2025-01-17 03:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_07_073706_create_sliders_table', 2),
(7, '2025_01_08_091255_create_menus_table', 3),
(8, '2025_01_08_091624_create_dishes_table', 3),
(9, '2025_01_10_071748_addcolumn', 4),
(10, '2025_01_11_064215_addclass', 5),
(11, '2025_01_22_085847_create_services_table', 6),
(14, '2025_01_24_060704_create_teams_table', 8),
(15, '2025_01_24_065903_create_customers_table', 9),
(16, '2025_01_24_090056_create_ourservices_table', 10),
(17, '2025_01_25_053659_create_happies_table', 11),
(18, '2025_01_22_093123_create_abouts_table', 12),
(19, '2025_01_25_062200_create_titles_table', 13),
(20, '2025_01_27_062513_create_multis_table', 14),
(21, '2025_01_27_085050_create_instagrams_table', 15),
(22, '2025_01_28_062424_create_settings_table', 16),
(24, '2025_02_01_065029_create_blogs_table', 17),
(25, '2025_02_05_062133_addcolumn', 18),
(26, '2025_02_05_074403_create_books_table', 19),
(27, '2025_02_06_060513_create_custom_logins_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `multis`
--

CREATE TABLE `multis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multis`
--

INSERT INTO `multis` (`id`, `name`, `mname`, `sname`, `cname`, `bname`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About', 'Specialties', 'Blog', 'Contact', 'Book a Table', '1738310531.jpg', NULL, '2025-01-31 02:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'Catering Services', NULL, '2025-01-24 03:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('rohitmali@gmail.com', '$2y$12$ur4L/FQgYo1IfijW.hJoVebGQxfEcQupMcKW53L15hEZnXOypBEIm', '2025-02-05 00:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `desc`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Birthday Party', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-cake', 1, '2025-01-22 03:47:24', '2025-01-22 03:47:24'),
(2, 'Business Meetings', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-meeting', 1, '2025-01-22 03:49:47', '2025-01-22 03:49:47'),
(3, 'Wedding Party', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-tray', 1, '2025-01-22 03:55:07', '2025-01-22 03:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9HnWoQTt8K9mohBARYxDaO1nNQ6vrQZu6GGkhl3u', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZVFSTWFrdnE4a1pKRDh3TkVReTNiWG5SeVV1VXEzUEMyNWszVUFlOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1739781166),
('aGbajQ2F5wp6o4N2osUTJumKhH7sMhgwkmPwzy9g', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXhtMTZlQWFnaEJKaXFrTW5VUWo5UTRMWXVVTGM3M3BESjVRa2pjUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739521429),
('Bu3wV5lAB82b9Nuwq2knHlpeI7b2YOUlneT5vFVA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiYWFkdVh0WGRLQ3ByVktQMThWNWM4emlBRGRQYURSU25CbW9MYm5uVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXNlcnZhdGlvbiI7fXM6NToiZW1haWwiO3M6MjI6InBvb2phc2FpbmkxMUBnbWFpbC5jb20iO3M6NDoibmFtZSI7czoxMjoiUG9vamEgIFNhaW5pIjtzOjExOiJjdXN0b21lcl9pZCI7aToyO30=', 1739256554),
('hnW8B7rSX6wMtJTQzooweVeE8MqfFGAjoHRjUX0i', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo3OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NldHRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiY3dOUDUxZ3o3cFJaOTRHWm5XT0o2SUZvOWNtaVFVSEhCc3l6VUtlVyI7czo1OiJlbWFpbCI7czoyMjoicG9vamFzYWluaTExQGdtYWlsLmNvbSI7czo0OiJuYW1lIjtzOjEyOiJQb29qYSAgU2FpbmkiO3M6MTE6ImN1c3RvbWVyX2lkIjtpOjI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1739265816),
('lchwyAaE0LffjsBccpPdahkD4jPTn9xJnxnuSX9K', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY2s5enlBaFNoRTRrdHBYemtvRTZ3VnFnbTQ2YmFlSXczMlN0UmdkRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZW51Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1739943787);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `Open` varchar(255) NOT NULL,
  `openhours` text NOT NULL,
  `insname` varchar(255) NOT NULL,
  `newsletter` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `contact`, `name`, `desc`, `twitter`, `facebook`, `instagram`, `Open`, `openhours`, `insname`, `newsletter`, `detail`, `map`, `created_at`, `updated_at`) VALUES
(1, 'rohitmali@gmail.com', 9781234567, 'Feliciano', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'https://x.com/?lang=en', 'https://www.facebook.com/', 'https://www.instagram.com/', 'Open Hours', '<ul><li><a href=\" \">Monday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9:00 - 24:00</a></li><li><a href=\" \">Tuesday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00 - 24:00</a></li><li><a href=\" \">Wednesday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9:00 - 24:00</a></li><li><a href=\" \">Thursday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00 - 24:00</a></li><li><a href=\" \">Friday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00 - 02:00</a></li><li><a href=\" \">Saturday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9:00 - 02:00</a></li><li><a href=\" \">Sunday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00 - 02:00</a></li></ul>', 'Instagram', 'Newsletter', 'Far far away, behind the word mountains, far from the countries.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43449687.20699231!2d86.29726529094881!3d22.76853775982263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1738741163921!5m2!1sen!2sin', NULL, '2025-02-10 02:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Feliciano', 'Best Restaurant', '1736318772.jpg', 1, '2025-01-08 01:16:12', '2025-01-08 03:26:40'),
(2, 'Feliciano', 'Nutritious Tasty', '1736318810.jpg', 1, '2025-01-08 01:16:50', '2025-01-08 01:16:50'),
(3, 'Feliciano', 'Delicious Specialties', '1736318927.jpg', 1, '2025-01-08 01:18:47', '2025-01-08 01:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `twitter`, `facebook`, `google`, `instagram`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Smooth', 'Restaurant Owner', 'twitter', 'Facebook', 'google', 'instagram', '1737700312.jpg', 1, '2025-01-24 01:01:52', '2025-01-24 01:01:52'),
(2, 'Rebeca Welson', 'Head Chef', 'twitter', 'Facebook', 'google', 'instagram', '1737700356.jpg', 1, '2025-01-24 01:02:36', '2025-01-24 01:02:36'),
(3, 'Kharl Branyt', 'Chef', 'twitter', 'Facebook', 'google', 'instagram', '1737700390.jpg', 1, '2025-01-24 01:03:10', '2025-01-24 01:03:10'),
(4, 'Luke Simon', 'Chef', 'twitter', 'Facebook', 'google', 'instagram', '1737700416.jpg', 1, '2025-01-24 01:03:36', '2025-01-24 01:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `htitle` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `ftitle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `name`, `title`, `cname`, `ctitle`, `hname`, `htitle`, `bname`, `btitle`, `fname`, `ftitle`, `created_at`, `updated_at`) VALUES
(1, 'Specialties', 'Our Menu', 'Chef', 'Our Master Chef', 'Testimony', 'Happy Customer', 'Blog', 'Recent Posts', 'Book a table', 'Make Reservation', NULL, '2025-01-25 01:47:27');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rohit Mali', 'rohitmali@gmail.com', NULL, '$2y$12$iunaWxIotMJcZWO306pvEuvRhdV6dksPORjUcrWo1PLkcvb.gY3OG', NULL, '2025-01-07 02:02:55', '2025-01-07 02:02:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_logins`
--
ALTER TABLE `custom_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custom_logins_email_unique` (`email`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dishes_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `happies`
--
ALTER TABLE `happies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagrams`
--
ALTER TABLE `instagrams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multis`
--
ALTER TABLE `multis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `custom_logins`
--
ALTER TABLE `custom_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `happies`
--
ALTER TABLE `happies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instagrams`
--
ALTER TABLE `instagrams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `multis`
--
ALTER TABLE `multis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
