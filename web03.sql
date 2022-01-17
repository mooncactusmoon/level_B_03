-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-17 01:46:22
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `web03`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL COMMENT '分級',
  `length` int(11) UNSIGNED NOT NULL COMMENT '長度',
  `ondate` date NOT NULL COMMENT '上映日',
  `publish` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '發行商',
  `director` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '導演',
  `trailer` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '預告片',
  `poster` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '預告海報',
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '簡介',
  `rank` int(11) UNSIGNED NOT NULL COMMENT '排序',
  `sh` tinyint(1) UNSIGNED NOT NULL COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES
(1, '預告片1', 1, 123, '2022-01-18', '院線片1發行', '院線片1導演', '03B01v.mp4', '03B01.png', '院線片1', 3, 1),
(2, '預告片2', 3, 123, '2022-01-20', '院線片2發行', '院線片2導演', '03B02v.mp4', '03B02.png', '院線片2', 2, 1),
(4, '預告片4', 1, 123, '2022-01-17', '院線片4發行', '院線片4導演', '03B04v.mp4', '03B04.png', '院線片4', 1, 0),
(5, '預告片5', 1, 123, '2022-01-15', '院線片5發行', '院線片5導演', '03B05v.mp4', '03B05.png', '院線片5', 5, 1),
(6, '預告片6', 1, 123, '2022-01-18', '院線片6發行', '院線片6導演', '03B06v.mp4', '03B06.png', '院線片6', 4, 1),
(7, '預告片7', 1, 123, '2022-01-16', '院線片7發行', '院線片7導演', '03B07v.mp4', '03B07.png', '院線片7', 6, 1),
(8, '預告片8', 1, 123, '2022-01-18', '院線片8發行', '院線片8導演', '03B08v.mp4', '03B08.png', '院線片8', 7, 1),
(9, '預告片9', 1, 123, '2022-01-17', '院線片9發行', '院線片9導演', '03B09v.mp4', '03B09.png', '院線片9', 8, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `ord`
--

CREATE TABLE `ord` (
  `id` int(11) UNSIGNED NOT NULL,
  `no` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '訂單編號',
  `movie` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電影名稱',
  `date` date NOT NULL COMMENT '觀賞日期',
  `session` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '場次',
  `qt` int(1) UNSIGNED NOT NULL COMMENT '票數',
  `seat` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '座位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(11) UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '檔案路徑',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '片名',
  `rank` int(5) NOT NULL COMMENT '排序',
  `sh` int(1) NOT NULL DEFAULT 1 COMMENT '顯示',
  `ani` int(1) NOT NULL DEFAULT 1 COMMENT '轉場動畫'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES
(1, '03A01.jpg', '預告片1', 2, 1, 1),
(3, '03A03.jpg', '預告片3', 9, 1, 3),
(4, '03A04.jpg', '預告片4', 7, 1, 1),
(5, '03A05.jpg', '預告片5', 1, 1, 2),
(6, '03A06.jpg', '預告片6', 3, 0, 3),
(7, '03A07.jpg', '預告片7', 4, 1, 2),
(8, '03A08.jpg', '預告片8', 5, 1, 2),
(9, '03A09.jpg', '預告片9', 6, 1, 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
