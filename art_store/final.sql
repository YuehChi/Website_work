-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2019 年 01 月 05 日 06:58
-- 伺服器版本: 5.7.23
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cno` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(20) DEFAULT NULL,
  `pno` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cno`,`id`,`pno`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `name`, `account`, `password`, `sex`, `email`, `phone`, `address`, `birthday`) VALUES
(1, '月月', 'moonmoon', 'little moon', 'female', 'fffff@jojfas.com', '0977846155', 'asdfasdf', ''),
(5, '我是一隻魚', 'fishfish', 'fffddiiie', 'male', 'ajfdoajo@cdsadjao.com', '0904884655', '', ''),
(6, '催恩餘額不足', 'fishname', 'gdsgfgfgsd', 'female', 'sdggfddfj@ejfwodx.com', '0904884987', '高雄市鼓山區連戰路155號', '87/05/24'),
(7, '課金寶寶', 'thekoreanperson', 'money', 'male', 'wantmoney@gmail.com', 'bang', 'the rich place', '1999-10-10');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `cno` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(20) DEFAULT NULL,
  `pno` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `order`
--

INSERT INTO `order` (`oid`, `cno`, `id`, `amount`, `pno`) VALUES
(1, 'c3029', 'moonmoon', 3, 'card05'),
(2, 'c8740', 'moonmoon', 44, 'card04'),
(3, 'c4697', 'moonmoon', 19, 'card09'),
(4, 'c1973', 'moonmoon', 1, 'sticker02'),
(5, 'c5815', 'moonmoon', 1, 'card03');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pno` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `catelog` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`pno`, `pname`, `price`, `catelog`) VALUES
('n01', 'card01', '50.00', 'card'),
('n02', 'card02', '50.00', 'card'),
('n03', 'card03', '50.00', 'card'),
('n04', 'card04', '50.00', 'card'),
('n05', 'card05', '50.00', 'card'),
('n06', 'card06', '50.00', 'card'),
('n07', 'card07', '50.00', 'card'),
('n08', 'card08', '50.00', 'card'),
('n09', 'card09', '50.00', 'card'),
('n10', 'card10', '50.00', 'card'),
('n11', 'card11', '50.00', 'card'),
('n12', 'card12', '50.00', 'card'),
('n13', 'card13', '50.00', 'card'),
('n14', 'card14', '50.00', 'card'),
('n15', 'card15', '50.00', 'card'),
('n16', 'sticker01', '50.00', 'sticker'),
('n17', 'sticker02', '50.00', 'sticker'),
('n18', 'sticker03', '50.00', 'sticker'),
('n19', 'mt01', '50.00', 'mt'),
('n20', 'mt02', '50.00', 'mt'),
('n21', 'mt03', '50.00', 'mt'),
('n22', 'mt04', '50.00', 'mt'),
('n23', 'mt05', '50.00', 'mt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
