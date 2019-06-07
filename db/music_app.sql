-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2019 at 05:18 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` int(11) NOT NULL,
  `album_cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `albums_artist_id_foreign` (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist_id`, `album_cover`, `description`, `created_at`, `updated_at`) VALUES
(2, 'American Teen', 1, 'https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg', NULL, '2019-06-06 22:03:45', '2019-06-06 22:03:45'),
(3, 'Live in Texas', 9, 'https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg', NULL, '2019-06-06 22:30:06', '2019-06-06 22:30:06'),
(4, 'Spider-Man: Into the Spider-Verse', 7, 'https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg', NULL, '2019-06-06 22:33:16', '2019-06-06 22:33:16'),
(5, 'Happier', 4, 'https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg', NULL, '2019-06-07 09:47:48', '2019-06-07 09:47:48'),
(6, 'Cosmic', 6, 'https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg', NULL, '2019-06-07 09:49:54', '2019-06-07 09:49:54'),
(7, 'Lauv EP: JAPAN EDITION', 8, 'https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg', NULL, '2019-06-07 09:56:16', '2019-06-07 09:56:16'),
(8, 'True', 10, 'https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png', NULL, '2019-06-07 10:08:57', '2019-06-07 10:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `career_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `career_name`, `first_name`, `last_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Khalid', 'Khalid', 'Khalid', 'https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg', '2019-06-04 09:37:44', '2019-06-04 09:37:44'),
(7, 'Post Melon', 'Post Melon', 'Post Melon', 'https://i.ebayimg.com/images/i/382536121893-0-1/s-l1000.jpg', '2019-06-06 18:24:11', '2019-06-06 18:24:11'),
(6, 'Bazzi', 'Bazzi', 'Bazzi', 'https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg', '2019-06-06 18:19:23', '2019-06-06 18:19:23'),
(4, 'Marshmello', 'Marshmello', 'Marshmello', 'https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg', '2019-06-04 19:47:20', '2019-06-04 19:47:20'),
(8, 'Lauv', 'Lauv', 'Lauv', 'https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg', '2019-06-06 18:27:44', '2019-06-06 18:27:44'),
(9, 'Linkin Park', 'Linkin Park', 'Linkin Park', 'https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg', '2019-06-06 18:28:26', '2019-06-06 18:28:26'),
(10, 'Avicii', 'Avicii', 'Avicii', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png', '2019-06-06 19:05:38', '2019-06-06 19:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 2),
(13, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2019_06_02_121717_create_songs_table', 2),
(9, '2019_06_04_035346_update_songs_table', 1),
(15, '2019_06_04_062244_create_albums_table', 2),
(16, '2019_06_04_062252_create_artists_table', 2),
(18, '2019_06_07_042527_add_artist_to_table_album', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(292) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` int(10) UNSIGNED NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `songs_cover_foreign` (`cover`),
  KEY `songs_artist_id_foreign` (`artist_id`),
  KEY `songs_album_id_foreign` (`album_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `cover`, `url`, `artist_id`, `album_id`, `duration`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Better', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c', 1, 2, NULL, 0, '2019-06-07 08:56:40', '2019-06-07 08:56:40'),
(2, 'Happier', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a', 4, 5, NULL, 0, '2019-06-07 09:53:10', '2019-06-07 09:53:10'),
(3, 'I like me better', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588', 8, 7, NULL, 0, '2019-06-07 09:57:13', '2019-06-07 09:57:13'),
(4, 'In the end', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FIn%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=d44f863d-d834-48ce-9391-b22494ba19ed', 9, 3, NULL, 0, '2019-06-07 10:02:47', '2019-06-07 10:02:47'),
(5, 'Mine', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FBazzi%20%E2%80%93%20Mine%20(Lyrics)%20%F0%9F%8E%B5.mp3?alt=media&token=8af98424-42da-4599-b0c3-30babb10a61e', 6, 6, NULL, 0, '2019-06-07 10:04:35', '2019-06-07 10:04:35'),
(6, 'Sunflower', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f', 7, 4, NULL, 0, '2019-06-07 10:05:25', '2019-06-07 10:05:25'),
(7, 'Young dumb and broke', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f', 1, 2, NULL, 0, '2019-06-07 10:06:49', '2019-06-07 10:06:49'),
(8, 'Wake Me Up', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FAvicii%20-%20Wake%20Me%20Up%20(Lyric%20Video)%20-%20YouTube.mp3?alt=media&token=3f4ee641-751c-4eb8-a5ca-0be76e5a2d0b', 10, 8, NULL, 0, '2019-06-07 10:18:06', '2019-06-07 10:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
