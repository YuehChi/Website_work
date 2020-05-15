-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2018-12-22 07:37:55
-- 伺服器版本: 5.7.21
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `movie_shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `cName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cSex` enum('F','M') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `cBirthday` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cPhone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cAddr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`cID`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES
(01, '簡奉君', 'F', '1987-04-04', 'elven@superstar.com', '0922988876', '台中市濟洲北路12號'),
(02, '黃靖輪', 'M', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓'),
(03, '潘四敬', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓'),
(04, '賴勝恩', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓'),
(05, '黎楚寧', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓'),
(06, '蔡中穎', 'M', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號'),
(07, '徐佳螢', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號'),
(08, '林雨媗', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號'),
(09, '林心儀', 'F', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號'),
(10, '王燕博', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號'),
(11, '我不知道', 'M', '1999-12-05', 'iii@gmail.com', '0966486597', 'djdjijidjisjfosafjjdiafodfosfjidsjfid');

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `mNo` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mPrice` decimal(10,2) DEFAULT NULL,
  `catalog` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `movie`
--

INSERT INTO `movie` (`mNo`, `mName`, `mPrice`, `catalog`) VALUES
('m01', '你的名字', '300.00', 'DVD'),
('m02', '狼的孩子雨和雪', '250.00', 'DVD'),
('m03', '名偵探柯南：零之執行人', '500.00', '藍光DVD'),
('m04', '聲之形', '200.00', 'DVD'),
('m05', '夏目友人帳-緣結空蟬', '450.00', '藍光DVD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
