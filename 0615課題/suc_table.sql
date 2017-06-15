-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 6 月 11 日 15:00
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suc_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `suc_table`
--

CREATE TABLE IF NOT EXISTS `suc_table` (
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `industry` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `suc_table`
--

INSERT INTO `suc_table` (`company`, `industry`, `job`, `comment`, `indate`) VALUES
('1', '2', '3', '4', '2017-06-04 15:46:57'),
('1', '2', '3', '4', '2017-06-04 15:50:13'),
('1', '3', '4', '4', '2017-06-05 21:16:56'),
('a', 'a', 'a', 'a', '2017-06-09 21:25:25'),
('a', 'a', 'a', 'a', '2017-06-09 21:38:20'),
('日産', '自動車業界', 'エンジニア', '人事部長、いい感じ', '2017-06-09 21:39:08'),
('google', 'IT', 'Enginner', 'good', '2017-06-09 21:40:35'),
('e', 'e', 'e', 'e', '2017-06-09 21:46:03'),
('aaaa', 'aaaa', 'aaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-06-09 21:53:08'),
('山手物産', '商社', '営業', '人事担当、不在', '2017-06-09 22:51:38'),
('あ', 'あ', 'あ', 'あ', '2017-06-10 14:06:20'),
('1', '2', '2', '2', '2017-06-10 16:53:54'),
('1', '2', '3', '3', '2017-06-10 16:56:59'),
('１', '２', '２', '２', '2017-06-10 16:58:58'),
('a', 'a', 'a', 'a', '2017-06-10 20:58:02'),
('あ', 'あ', 'あ', 'あ', '2017-06-10 21:34:26'),
('a', 'a', 'aaaa', 'a', '2017-06-11 12:12:30'),
('1', '2', '2３', '2', '2017-06-11 14:20:44'),
('東京物産', '商社', '営業', '人事担当', '2017-06-11 15:21:02'),
('', '', '', '', '2017-06-11 15:23:22'),
('1', '2', '3', '333', '2017-06-11 15:41:36'),
('a', 'a', 'aaaa', 'a', '2017-06-11 16:59:26'),
('test', 'test', 'test', 'test\r\n', '2017-06-11 17:01:05'),
('test', 'test', 'test', 'test\r\n', '2017-06-11 17:02:12'),
('', '', '', '', '2017-06-11 17:02:35'),
('パナソニック', 'パナソニック', 'パナソニック', 'パナソニック', '2017-06-11 17:03:45'),
('テンプスタッフ', '人材', '派遣コーデ', 'いいね', '2017-06-11 17:07:12'),
('a', 'a', 'a', 'a', '2017-06-11 17:08:41'),
('1', '2', '3', '4', '2017-06-11 17:25:26'),
('高山物産', '１', '', '', '2017-06-11 17:26:20'),
('高山物産', '使う', '使う', '使う', '2017-06-11 17:26:30'),
('１', '１', '１', '１', '2017-06-11 17:28:30'),
('ミンティア', '1234', '1234', '1234', '2017-06-11 17:29:05'),
('test', 'test', 'test', 'test', '2017-06-11 17:30:04'),
('a', 'a', 'a', 'a', '2017-06-11 17:40:07'),
('東京タワー物産', '商社', '営業', 'good', '2017-06-11 19:05:53'),
('a', 'a', 'a', 'a', '2017-06-11 19:06:11'),
('test', 'tes', 'te', 'te', '2017-06-11 19:07:19'),
('s', 's', 's', 's', '2017-06-11 19:17:33'),
('a', '', '', '', '2017-06-11 19:33:24'),
('test', 'test', 'test', 'test', '2017-06-11 20:17:25'),
('アメリカ', 'アメリカ', 'アメリカ', 'アメリカ', '2017-06-11 21:48:34'),
('インドネシア', 'インドネシア', 'インドネシア', 'インドネシア', '2017-06-11 21:49:14'),
('岐阜', '岐阜', '岐阜', '岐阜', '2017-06-11 21:53:29'),
('鳥取', '鳥取', '鳥取', '鳥取', '2017-06-11 21:54:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suc_table`
--
ALTER TABLE `suc_table`
 ADD FULLTEXT KEY `comment` (`comment`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
