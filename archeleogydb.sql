-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 08:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archeleogydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allpic`
--

CREATE TABLE `allpic` (
  `id` int(11) NOT NULL,
  `small_picurl` varchar(500) NOT NULL,
  `picurl` varchar(500) NOT NULL,
  `foldername` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allpic`
--

INSERT INTO `allpic` (`id`, `small_picurl`, `picurl`, `foldername`, `created_at`, `created_user`) VALUES
(1, 'images/menu/w-576/ardour-logo.png', 'images/menu/ardour-logo.png', 'menu', '2024-10-29 08:50:24', 0),
(2, 'images/category/w-576/card119.png', 'images/category/card119.png', 'category', '2024-10-29 08:57:55', 0),
(3, 'images/category/w-576/8-9.png', 'images/category/8-9.png', 'category', '2024-10-29 08:58:06', 0),
(4, 'images/product/w-576/0fc876f18495e2dc1cc90e0ad209f1b11.png', 'images/product/0fc876f18495e2dc1cc90e0ad209f1b11.png', 'product', '2024-10-29 09:58:38', 0),
(5, 'images/product/w-576/1-11.png', 'images/product/1-11.png', 'product', '2024-10-29 09:58:39', 0),
(6, 'images/news/category/w-576/1-11.png', 'images/news/category/1-11.png', 'category', '2024-10-29 14:36:16', 0),
(7, 'images/news/category/w-576/0fc876f18495e2dc1cc90e0ad209f1b11.png', 'images/news/category/0fc876f18495e2dc1cc90e0ad209f1b11.png', 'category', '2024-10-29 14:38:05', 0),
(8, 'images/book/category/w-576/view.png', 'images/book/category/view.png', 'category', '2024-10-29 14:41:31', 0),
(9, '', 'images/test/facebook.png', 'test', '2024-10-29 14:45:05', 0),
(10, '', 'images/test/ardour-logo.png', 'test', '2024-10-29 14:49:00', 0),
(11, '', 'images/test/en.png', 'test', '2024-10-30 01:03:54', 0),
(12, '', 'images/test/down.png', 'test', '2024-10-30 01:06:55', 0),
(13, '', 'images/test/ardour-logo.png', 'test', '2024-10-30 01:09:32', 0),
(14, 'images/menu/w-576/archeleogy-logo.png', 'images/menu/archeleogy-logo.png', 'menu', '2024-11-01 03:46:48', 0),
(15, 'images/menu/w-576/1685454398_02.jpg', 'images/menu/1685454398_02.jpg', 'menu', '2024-11-01 03:47:50', 0),
(16, 'images/menu/w-576/1717693936_barilga.jpeg', 'images/menu/1717693936_barilga.jpeg', 'menu', '2024-11-01 03:48:50', 0),
(17, 'images/menu/w-576/Screenshot_2024-08-07_163313.png', 'images/menu/Screenshot_2024-08-07_163313.png', 'menu', '2024-11-01 03:49:54', 0),
(18, 'images/menu/w-576/1685359345_01.jpg', 'images/menu/1685359345_01.jpg', 'menu', '2024-11-01 03:50:09', 0),
(19, 'images/menu/w-576/1717694181_logn2.jpeg', 'images/menu/1717694181_logn2.jpeg', 'menu', '2024-11-01 03:50:32', 0),
(20, 'images/news/w-576/1685454398_021.jpg', 'images/news/1685454398_021.jpg', 'slider', '2024-11-01 03:52:49', 0),
(21, 'images/category/w-576/1685359606_05.jpg', 'images/category/1685359606_05.jpg', 'category', '2024-11-01 03:58:54', 0),
(22, 'images/category/w-576/fe1be98d0cce8ed40f5664f82629c40.jpg', 'images/category/fe1be98d0cce8ed40f5664f82629c40.jpg', 'category', '2024-11-01 04:02:08', 0),
(23, 'images/category/w-576/1717693817_led2.jpeg', 'images/category/1717693817_led2.jpeg', 'category', '2024-11-01 04:03:53', 0),
(24, 'images/news/w-576/1685359345_011.jpg', 'images/news/1685359345_011.jpg', 'slider', '2024-11-04 05:50:06', 0),
(25, 'images/news/w-576/1685359664_061.jpg', 'images/news/1685359664_061.jpg', 'slider', '2024-11-04 05:51:47', 0),
(26, 'images/menu/w-576/1685359664_06.jpg', 'images/menu/1685359664_06.jpg', 'menu', '2024-11-04 06:04:41', 0),
(27, 'images/menu/w-576/1685359345_011.jpg', 'images/menu/1685359345_011.jpg', 'menu', '2024-11-05 05:52:57', 0),
(28, 'images/menu/w-576/1685359664_061.jpg', 'images/menu/1685359664_061.jpg', 'menu', '2024-11-05 05:54:28', 0),
(29, 'images/menu/w-576/1685359664_062.jpg', 'images/menu/1685359664_062.jpg', 'menu', '2024-11-05 06:02:40', 0),
(30, 'images/menu/w-576/1685454874_11.jpg', 'images/menu/1685454874_11.jpg', 'menu', '2024-11-05 06:03:18', 0),
(31, 'images/menu/w-576/1685362329_16.jpg', 'images/menu/1685362329_16.jpg', 'menu', '2024-11-05 06:04:15', 0),
(32, 'images/menu/w-576/1717693516_zarlan.jpeg', 'images/menu/1717693516_zarlan.jpeg', 'menu', '2024-11-05 06:05:30', 0),
(33, 'images/menu/w-576/1717694413_printer1.jpeg', 'images/menu/1717694413_printer1.jpeg', 'menu', '2024-11-05 06:06:39', 0),
(34, 'images/news/w-576/1685359345_013.jpg', 'images/news/1685359345_013.jpg', 'slider', '2024-11-06 05:59:11', 0),
(35, 'images/menu/w-576/1685359345_012.jpg', 'images/menu/1685359345_012.jpg', 'menu', '2024-11-06 06:50:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE `banned` (
  `id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banned`
--

INSERT INTO `banned` (`id`, `ip`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, '100.10.25.40', '2015-05-19 16:37:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, '91.220.13.30', '2015-05-19 16:38:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0549375ef6cfb3e7eafe972bffae11234b8fbb85', '::1', 1486732301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363733323232383b64656661756c745f6c616e677c733a323a22726f223b7365745f6c616e67756167657c733a323a22726f223b6c616e675f736c75677c733a303a22223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343432333139363834223b),
('0frt7t7uu0o7v3g557qa9p9blcitdve1', '::1', 1730860986, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836303938363b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('0i3477p1jhjvj87kep1g7qoa637cqaaq', '::1', 1730345879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303334353837393b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a333a226d6e2f223b),
('0un79a8tfpr3aq3m9tfsga7u8r51hdje', '::1', 1730860298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836303239383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b),
('20ohvum8go2si6k3ep9j55l18084gnbl', '::1', 1730864551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836343535313b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('63qi1g96pnuq99annn56nlj9ij3ultfq', '::1', 1730875288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303837353238383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('8skpen53m0khrg9nsi0fmuo2piiv0g4k', '::1', 1730346442, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303334363434323b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('8voslq8a8pifgmcicobehcevbjkulkcu', '::1', 1730864160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836343136303b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('a99b329a4cb21ab8c87ada2965edf5609d030356', '::1', 1486732266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363733323233333b64656661756c745f6c616e677c733a323a22726f223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a333a22656e2f223b),
('dha1404slh68on1p0p82mfk6f78ejeo0', '::1', 1730705792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303730353739323b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a333a226d6e2f223b),
('gh7k9t5m8a8hknnsjkh1p9c564cglhmd', '::1', 1730857882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303835373838323b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a333a22656e2f223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b),
('hrb2fugma71r85jo53g0rncqmf0kkv7s', '::1', 1730865478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836353437383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('hsrdocdq7v2h2nbhn0c9rr38l1n53e06', '::1', 1730862848, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836323834383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('i65ebbm68crkekd3sqoj83422imrpnh9', '::1', 1730376478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303337363437383b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('iaomt0umbs84o35nhgqee9912a37hq2m', '::1', 1730861293, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836313239333b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('iken5sosq57c9edi2f22hfvssc3fmemc', '::1', 1730356627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303335363632373b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('jbidjk70a9a4lpijclilvso56j0cji06', '::1', 1730865781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836353738313b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('jqvpl5faff7lk5d5vmi8psvvv2uoujnk', '::1', 1730876965, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303837363930383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('kig4ptmt17d473f4gqt9irta97a1r6br', '::1', 1730363282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303336333238323b706f7374616c7c613a303a7b7d64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('lb2olquihd4lu7677u0pm68qsm32pdjj', '::1', 1730864870, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836343837303b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('ljhu4d5v4o45na1r29114i6parlcssda', '::1', 1730705792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303730353739323b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a333a226d6e2f223b),
('mr5qjq4ah3190hbt5s00kmqg6tq29bvl', '::1', 1730870737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303837303733373b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('ndcdkfli7cp6llflotsahv6oh7a02h4l', '::1', 1730363282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303336333238323b706f7374616c7c613a303a7b7d64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('nqs3oggeu269hogkag2sk1hdhvp8qmie', '::1', 1730347225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303334373034393b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b),
('pb45ps6280oss521sl524qgo3b3fjuea', '::1', 1730865171, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836353137313b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('pj2tguj41d4m8tjr33ffrlo71929c8gc', '::1', 1730876908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303837363930383b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('qjmudi2f9g9retf8mca22p6hvj39osoi', '::1', 1730874663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303837343636333b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('rd27grbagesdjrtb93ca3vl8tmm0rjc8', '::1', 1730861627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836313632373b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('uhmsj5e8t5u7no8fou87m1g3q9acdm8k', '::1', 1730860656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836303635363b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b),
('v1m0tkooq03oqi741rjib2ckaobo1qdl', '::1', 1730869713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303836393731333b64656661756c745f6c616e677c733a323a226d6e223b7365745f6c616e67756167657c733a323a226d6e223b6c616e675f736c75677c733a303a22223b72656469726563745f746f7c733a32373a22687474703a2f2f6c6f63616c686f73742f63696d6c2f61646d696e223b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231373330383536393331223b706f7374616c7c613a303a7b7d),
('vnd3n9gdhhv4o5k17aq2cs9af13qojvh', '::1', 1730347049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733303334373034393b64656661756c745f6c616e677c733a323a22656e223b7365745f6c616e67756167657c733a323a22656e223b6c616e675f736c75677c733a303a22223b);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `content_type` varchar(100) NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `featured_image` varchar(255) NOT NULL,
  `order` int(4) UNSIGNED NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `content_type`, `parent_id`, `featured_image`, `order`, `published`, `published_at`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(31, 'page', 0, '', 0, 0, '2024-11-05 08:21:32', '2024-11-05 07:37:21', '2024-11-05 08:21:47', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_translations`
--

CREATE TABLE `content_translations` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `teaser` mediumtext NOT NULL,
  `content` longtext,
  `page_title` varchar(100) DEFAULT NULL,
  `page_description` varchar(170) DEFAULT NULL,
  `page_keywords` varchar(255) DEFAULT NULL,
  `rake` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_translations`
--

INSERT INTO `content_translations` (`id`, `content_id`, `language_slug`, `title`, `short_title`, `teaser`, `content`, `page_title`, `page_description`, `page_keywords`, `rake`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(27, 31, 'mn', 'test', 'short title', '', '', 'test', '', '', 0, '2024-11-05 07:37:21', '2024-11-05 08:21:28', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `word` varchar(255) NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `noise` tinyint(1) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`id`, `parent_id`, `word`, `language_slug`, `noise`, `verified`) VALUES
(1324, 0, 'en', 'en', 0, 0),
(1325, 0, 'title', 'en', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators'),
(2, 'members', 'Members');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `content_type` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `width` int(5) NOT NULL DEFAULT '0',
  `height` int(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keyphrases`
--

CREATE TABLE `keyphrases` (
  `id` int(11) NOT NULL,
  `content_type` varchar(100) NOT NULL,
  `content_id` int(10) UNSIGNED NOT NULL,
  `phrase_id` int(10) UNSIGNED NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `score` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `content_id` int(10) UNSIGNED NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `word_id` int(10) UNSIGNED NOT NULL,
  `appearances` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language_name` varchar(100) NOT NULL,
  `slug` varchar(10) NOT NULL,
  `language_directory` varchar(100) NOT NULL,
  `language_code` varchar(20) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `slug`, `language_directory`, `language_code`, `default`) VALUES
(1, 'Mongolian', 'mn', 'mongolian', 'mn_MN', 1),
(2, 'English', 'en', 'english', 'en_US', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuname` varchar(100) NOT NULL,
  `menudesc` varchar(500) NOT NULL,
  `location` varchar(20) NOT NULL,
  `viewtype` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `parentid` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `small_picurl` varchar(200) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `language` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menuname`, `menudesc`, `location`, `viewtype`, `status`, `parentid`, `link`, `picurl`, `small_picurl`, `sort`, `language`, `created_at`, `created_user`, `update_at`, `update_user`) VALUES
(1, 'Бидний тухай', 'Бидний тухай тайлбар хэсэг энд байна', '1', 'newsview', '1', 0, '', 'images/menu/ardour-logo.png', 'images/menu/w-576/ardour-logo.png', 1, 'mn', '2024-10-29 08:50:24', NULL, NULL, NULL),
(2, 'Мэндчилгээ', 'Мэндчилгээ тайлбар оруулах', '1', 'newsview', '1', 1, '', 'images/menu/1685454398_02.jpg', 'images/menu/w-576/1685454398_02.jpg', 3, 'mn', '2024-10-29 08:51:06', NULL, NULL, NULL),
(3, 'Танилцуулга', 'Танилцуулга тайлбар оруулах', '1', 'picview', '1', 1, '', 'images/menu/archeleogy-logo.png', 'images/menu/w-576/archeleogy-logo.png', 2, 'mn', '2024-10-29 08:51:31', NULL, NULL, NULL),
(4, 'Бүтэц, зохион байгуулалт', 'Бүтэц, зохион байгуулалт тайлбар оруулах', '1', 'newsview', '1', 1, '', 'images/menu/1717693936_barilga.jpeg', 'images/menu/w-576/1717693936_barilga.jpeg', 4, 'mn', '2024-10-29 08:52:01', NULL, NULL, NULL),
(5, '\'Эрдмийн зөвлөл', '\'Эрдмийн зөвлөл тайлбар оруулах', '1', 'newsview', '1', 1, '', 'images/menu/Screenshot_2024-08-07_163313.png', 'images/menu/w-576/Screenshot_2024-08-07_163313.png', 5, 'mn', '2024-10-29 08:52:20', NULL, NULL, NULL),
(6, 'Стратеги зорилт', 'Стратеги зорилт тайлбар оруулах', '1', 'picview', '1', 1, '', 'images/menu/1685359345_01.jpg', 'images/menu/w-576/1685359345_01.jpg', 6, 'mn', '2024-10-29 08:52:43', NULL, NULL, NULL),
(7, 'Судалгааны тэргүүлэх болон үндсэн чиглэл', 'Судалгааны тэргүүлэх болон үндсэн чиглэл тайлбар оруулах', '1', 'accordionview', '1', 1, '', 'images/menu/1685359664_06.jpg', 'images/menu/w-576/1685359664_06.jpg', 7, 'mn', '2024-10-29 08:53:05', NULL, NULL, NULL),
(12, 'Greetings', 'Greetings Description', '1', 'listview', '1', 11, '', 'images/menu/1685359664_061.jpg', 'images/menu/w-576/1685359664_061.jpg', 12, 'en', '2024-11-05 05:54:07', NULL, NULL, NULL),
(11, 'About Us', 'asss', '1', 'picview', '1', 0, '', 'images/menu/1685359345_011.jpg', 'images/menu/w-576/1685359345_011.jpg', 11, 'en', '2024-11-05 04:59:22', NULL, NULL, NULL),
(13, 'Introduction', 'Introduction Description', '1', 'listview', '1', 11, '', 'images/menu/1685359664_062.jpg', 'images/menu/w-576/1685359664_062.jpg', 13, 'en', '2024-11-05 06:01:50', NULL, NULL, NULL),
(14, 'Structure and Organization', 'Structure and organization descrioption', '1', 'listview', '1', 11, '', 'images/menu/1685454874_11.jpg', 'images/menu/w-576/1685454874_11.jpg', 14, 'en', '2024-11-05 06:02:29', NULL, NULL, NULL),
(15, 'Academic Council', 'Academic Council desc', '1', 'listview', '1', 11, '', 'images/menu/1685362329_16.jpg', 'images/menu/w-576/1685362329_16.jpg', 15, 'en', '2024-11-05 06:04:15', NULL, NULL, NULL),
(16, 'Strategic and Goal', 'Strategic and Goal desc', '1', 'listview', '1', 11, '', 'images/menu/1717693516_zarlan.jpeg', 'images/menu/w-576/1717693516_zarlan.jpeg', 16, 'en', '2024-11-05 06:05:30', NULL, NULL, NULL),
(17, 'Priorities and Main Areas of Research', 'Priorities and Main Areas of Research desc', '1', 'listview', '1', 11, '', 'images/menu/1717694413_printer1.jpeg', 'images/menu/w-576/1717694413_printer1.jpeg', 17, 'en', '2024-11-05 06:06:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'top-menu', '2015-05-04 12:25:23', '2024-10-31 08:28:27', NULL, 1, 1, 0),
(3, 'left-menu', '2024-10-31 08:25:07', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `order` int(4) UNSIGNED NOT NULL,
  `styling` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `parent_id`, `order`, `styling`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(13, 1, 12, 0, '', '2024-11-06 04:46:45', '2024-11-06 04:47:21', NULL, 1, 1, 0),
(12, 1, 0, 0, '', '2024-11-06 04:45:20', '2024-11-06 04:45:44', NULL, 1, 1, 0),
(14, 1, 12, 0, '', '2024-11-06 04:49:38', '2024-11-06 04:49:54', NULL, 1, 1, 0),
(15, 1, 12, 0, '', '2024-11-06 04:54:16', '2024-11-06 08:07:53', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_item_translations`
--

CREATE TABLE `menu_item_translations` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `absolute_path` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_item_translations`
--

INSERT INTO `menu_item_translations` (`id`, `item_id`, `language_slug`, `title`, `url`, `absolute_path`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(23, 12, 'mn', 'Бидний тухай', 'about_us', NULL, '2024-11-06 04:45:20', NULL, NULL, 1, 0, 0),
(24, 12, 'en', 'About Us', 'about_us/en', NULL, '2024-11-06 04:45:44', NULL, NULL, 1, 0, 0),
(25, 13, 'mn', 'Танилцуулга', 'introduction', NULL, '2024-11-06 04:46:45', NULL, NULL, 1, 0, 0),
(26, 13, 'en', 'Introduction', 'introduction', NULL, '2024-11-06 04:47:21', NULL, NULL, 1, 0, 0),
(27, 14, 'mn', 'Мэндчилгээ', 'greetings', NULL, '2024-11-06 04:49:38', NULL, NULL, 1, 0, 0),
(28, 14, 'en', 'Greetings', 'greetings', NULL, '2024-11-06 04:49:54', NULL, NULL, 1, 0, 0),
(33, 15, 'mn', 'Бүтэц Зохион байгуулалт', 'structure', NULL, '2024-11-06 08:07:53', NULL, NULL, 1, 0, 0),
(32, 15, 'en', 'Structure and Organization', 'structure', NULL, '2024-11-06 07:24:11', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_content`
--

CREATE TABLE `news_content` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` text NOT NULL,
  `readcount` int(11) NOT NULL DEFAULT '0',
  `menuid` int(11) NOT NULL,
  `highlight` int(11) NOT NULL DEFAULT '0',
  `picurl` varchar(500) NOT NULL,
  `small_picurl` varchar(500) NOT NULL,
  `language` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_content`
--

INSERT INTO `news_content` (`id`, `title`, `description`, `info`, `readcount`, `menuid`, `highlight`, `picurl`, `small_picurl`, `language`, `created_at`, `created_user`, `updated_at`, `updated_user`) VALUES
(1, 'Мэндчилгээ Тэст мэдээлэл орууллаа', 'Мэндчилгээ .Товч мэдээ', '<p>Мэндчилгээ Тэст мэдээлэл орууллаа. Дэлгэрэнгүй мэдээлэл</p>\r\n', 0, 2, 0, 'images/news/1685359345_013.jpg', 'images/news/w-576/1685359345_013.jpg', 'mn', '2024-11-01 03:52:49', NULL, '2024-11-06 06:59:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phrases`
--

CREATE TABLE `phrases` (
  `id` int(11) NOT NULL,
  `phrase` varchar(255) NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `last_check` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL,
  `content_type` varchar(150) NOT NULL,
  `content_id` int(11) NOT NULL,
  `translation_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `url` varchar(255) NOT NULL,
  `redirect` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `content_type`, `content_id`, `translation_id`, `language_slug`, `url`, `redirect`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(50, 'page', 31, 27, 'mn', 'test', 0, '2024-11-05 07:37:21', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$G0h47xFzvBDD3DjwWD13XeCfwGuZgqtSodh5ARhDJLLWPRv0jSgfG', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1730875615, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `title` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `admin_email` varchar(200) NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `modified_by` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`title`, `page_title`, `status`, `admin_email`, `contact_email`, `modified_by`) VALUES
('CI site', 'CI site', 1, 'avenir.ro@gmail.com', 'avenir.ro@gmail.com', '1'),
('CI site', 'CI site', 1, 'avenir.ro@gmail.com', 'avenir.ro@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allpic`
--
ALTER TABLE `allpic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banned`
--
ALTER TABLE `banned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_translations`
--
ALTER TABLE `content_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`content_id`);

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyphrases`
--
ALTER TABLE `keyphrases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item_translations`
--
ALTER TABLE `menu_item_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `news_content`
--
ALTER TABLE `news_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phrases`
--
ALTER TABLE `phrases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allpic`
--
ALTER TABLE `allpic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `banned`
--
ALTER TABLE `banned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `content_translations`
--
ALTER TABLE `content_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1326;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keyphrases`
--
ALTER TABLE `keyphrases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_item_translations`
--
ALTER TABLE `menu_item_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phrases`
--
ALTER TABLE `phrases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
