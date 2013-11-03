-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2013 at 03:30 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_10_01_105759_create_users_table', 1),
('2013_10_01_111115_create_uploads_table', 2),
('2013_10_12_091310_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `docDate` date NOT NULL,
  `docTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `docFilename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `docDate`, `docTitle`, `docFilename`, `comment`, `userId`, `created_at`, `updated_at`) VALUES
(23, '2021-11-11', 'doc3', 'test.docx', 'sdfsdf', 'dfsdf', '2013-10-06 00:04:31', '2013-10-06 00:04:31'),
(27, '2021-11-11', 'kh', 'test.xlsx', '', '', '2013-10-06 05:09:46', '2013-10-06 05:09:46'),
(31, '2021-11-12', 'hkh', 'test.ppt', 'hhhh j kjhn kj', '', '2013-10-06 05:11:32', '2013-10-06 05:11:32'),
(32, '2013-10-08', 'progress report', 'test.pdf', 'this is a comment\r\n', 'unknown', '2013-10-07 14:11:35', '2013-10-07 14:11:35'),
(33, '2013-10-08', 'progress report', 'test.pdf', 'this is a comment\r\n', 'unknown', '2013-10-07 14:11:35', '2013-10-07 14:11:35'),
(34, '2013-10-08', 'progress report', 'test.pdf', 'this is a comment\r\n', 'unknown', '2013-10-07 14:11:36', '2013-10-07 14:11:36'),
(35, '2013-10-08', 'progress report', 'test.pdf', 'this is a comment', 'unknown', '2013-10-07 14:13:04', '2013-10-07 14:13:04'),
(36, '2013-10-08', 'gfdsg', 'test.ppt', 'dgfdf', 'dgd', '2013-10-07 14:14:19', '2013-10-07 14:14:19'),
(37, '2013-10-01', 'ff', 'to-do.txt', 'ff', '', '2013-10-09 04:24:25', '2013-10-09 04:24:25'),
(39, '2013-01-01', 'test doc', 'to-do.txt', 'this is a final test', 'testuser', '2013-10-09 04:41:08', '2013-10-09 04:41:08'),
(46, '2013-11-01', 'progress report', 'Performance -Octo.ppt', 'test', 'asif', '2013-10-14 05:21:31', '2013-10-14 05:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `password`, `email`, `created_at`, `updated_at`) VALUES
('admin', 'Administrator', '$2y$08$EAdnirgk7wz.ZbuyQcLZreYubPhDYhitfMu6oInhw18rGv05yUzgu', 'admin@localhost.com', '0000-00-00 00:00:00', '2013-10-14 21:19:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
