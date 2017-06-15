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
-- Database: `gs_user_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67895 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'a', 'a', '一般者', 0, 1),
(2, 'B1', 'B1', '一般者', 0, 1),
(4, '１岡', 'あっs', '管理者', 0, 1),
(5, '橋下', 'hashi', 'hashi0923', 0, 0),
(6, 'test', 'test', 'test', 0, 0),
(7, 'temp', 'temp', 'temp', 0, 0),
(8, 'qq', 'qq', 'qq', 0, 0),
(9, 'dd', 'd', 'dd', 1, 0),
(10, '神奈川', 'kanagawa', 'kanagawa', 1, 1),
(11, 'tokyo', 'a', 'a', 1, 1),
(123, 'shinagawa', '123', '123', 1, 1),
(124, '使う', 'kokoko', 'kokoko', 1, 1),
(1236, '山岡', '１２３４５', '0909090', 1, 1),
(1237, '山岡まさや', '１２３４５', '０９０９０９０', 1, 1),
(1238, '山岡', '１２３４５', '０９０９０９０', 1, 1),
(1242, '使うやつ', 'hhhhhhhhhhhhhh', '1', 1, 1),
(1243, 'NG', 'hhhhhhhhhhhhhh', '1', 1, 1),
(1244, 'a', 'anb', 'a', 0, 0),
(1245, '西表', 'anb', 'a', 1, 1),
(1246, '中西', 'anb', 'a', 1, 1),
(1247, 'a', 'a', '一般者', 1, 1),
(1248, 'a', 'a', '一般者', 1, 1),
(1249, 'tokyo', 'a', '一般者', 1, 1),
(1250, '上野', 'a', '一般者', 1, 1),
(1251, '下総', 'a', '一般者', 1, 1),
(1252, '北海道', 'hashi', 'hashi0923', 1, 1),
(1253, 'ロシア', 'hashi', 'hashi0923', 1, 1),
(1254, 'ロシア', 'hashi', 'hashi0923', 1, 1),
(1255, '女川', 'a', '一般者', 1, 1),
(67890, '柏崎', '67890', 'plok', 1, 1),
(67891, '柏崎', '使う', 'plok', 1, 1),
(67892, '岡本', 'あっs', '管理者', 1, 1),
(67893, '日本', '日本', '日本', 1, 1),
(67894, 'あ', 'あ', 'あ', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67895;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
