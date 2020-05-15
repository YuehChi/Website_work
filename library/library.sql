-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2019 at 08:14 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `callNumber` varchar(7) NOT NULL DEFAULT 'b000000',
  `title` varchar(15) NOT NULL,
  `authorName` varchar(12) NOT NULL,
  `publisherName` varchar(10) NOT NULL,
  `publisherPhone` varchar(10) NOT NULL DEFAULT '08000000',
  `publisherAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`callNumber`, `title`, `authorName`, `publisherName`, `publisherPhone`, `publisherAddress`) VALUES
('b000001', 'Apple pie', 'Janet', 'Sun', '08000070', '高雄市三民區新興街一號'),
('b000002', 'Bimo', 'Adam', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000003', 'Jake', 'Lin', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000004', 'Polly and Mary', 'Doris', 'Mini', '08032000', '高雄市鹽埕區新樂街214號'),
('b000005', '減肥聖經', 'Bunny', 'Volcano', '08007770', '高雄市前金區河東路188號'),
('b000006', '魚魚的生活', 'Chui', 'Mini', '08032000', '高雄市鹽埕區新樂街214號'),
('b000007', '情緒管理', 'Jane', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000008', '如何情緒勒索', 'Anlin', 'Tuo', '08000099', '高雄市鹽埕區大仁路6號'),
('b000009', 'Pancake', 'Janet', 'Sun', '08000070', '高雄市三民區新興街一號'),
('b000010', '溝通過程', 'Cathy', 'Tuo', '08000099', '高雄市鹽埕區大仁路6號'),
('b000011', 'Baking', 'Janet', 'Sun', '08000070', '高雄市三民區新興街一號'),
('b000012', '怎麼當網美', 'Nina', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000013', 'Cookie', 'Janet', 'Sun', '08000070', '高雄市三民區新興街一號'),
('b000014', 'Photograph', 'Jack', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000015', '居家整理', 'Tina', 'Volcano', '08007770', '高雄市前金區河東路188號'),
('b000016', '小豬很快樂', 'Piggy', 'Mini', '08032000', '高雄市鹽埕區新樂街214號'),
('b000017', '收納', 'Tina', 'Volcano', '08007770', '高雄市前金區河東路188號'),
('b000018', '健身飲食', 'Jerry', 'Volcano', '08007770', '高雄市前金區河東路188號'),
('b000019', 'Little Red Hen', 'Doris', 'Mini', '08032000', '高雄市鹽埕區新樂街214號'),
('b000020', '習慣失敗', 'David', 'Tuo', '08000099', '高雄市鹽埕區大仁路6號'),
('b000021', '小狗狗', 'Timmy', 'Mini', '08032000', '高雄市鹽埕區新樂街214號'),
('b000022', 'Katze', 'Daisy', 'Moon', '08000750', '高雄市苓雅區三多二路75號'),
('b000023', 'Hund', 'Cara', 'Moon', '08000750', '高雄市苓雅區三多二路75號');

-- --------------------------------------------------------

--
-- Table structure for table `Bookcopy`
--

CREATE TABLE `Bookcopy` (
  `seqNum` varchar(9) NOT NULL DEFAULT 't00000000',
  `callNumber` varchar(7) NOT NULL DEFAULT 'b000000',
  `buyDate` varchar(10) NOT NULL DEFAULT '2010-01-01',
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bookcopy`
--

INSERT INTO `Bookcopy` (`seqNum`, `callNumber`, `buyDate`, `location`) VALUES
('t00000001', 'b000001', '2015-10-01', 'l001'),
('t00000002', 'b000001', '2010-10-01', 'l003'),
('t00000003', 'b000005', '2016-12-10', 'l003'),
('t00000004', 'b000003', '2016-12-10', 'l004'),
('t00000005', 'b000004', '2014-05-15', 'l004'),
('t00000006', 'b000005', '2016-05-17', 'l005'),
('t00000007', 'b000005', '2016-05-17', 'l008'),
('t00000008', 'b000007', '2014-03-23', 'l011'),
('t00000009', 'b000008', '2013-02-05', 'l016'),
('t00000010', 'b000010', '2014-03-12', 'l010'),
('t00000011', 'b000010', '2016-01-05', 'l016'),
('t00000012', 'b000013', '2013-05-05', 'l015'),
('t00000013', 'b000018', '2014-06-04', 'l012'),
('t00000014', 'b000007', '2014-03-04', 'l008'),
('t00000015', 'b000005', '2013-10-05', 'l011'),
('t00000016', 'b000016', '2013-03-12', 'l010'),
('t00000017', 'b000014', '2016-04-05', 'l013'),
('t00000018', 'b000006', '2013-01-08', 'l017'),
('t00000019', 'b000010', '2016-03-02', 'l014'),
('t00000020', 'b000010', '2014-03-25', 'l019'),
('t00000021', 'b000020', '2015-02-05', 'l008'),
('t00000022', 'b000022', '2014-02-13', 'l022');

-- --------------------------------------------------------

--
-- Table structure for table `Borrows`
--

CREATE TABLE `Borrows` (
  `seqNum` varchar(9) NOT NULL DEFAULT 't00000000',
  `borrowDate` varchar(10) NOT NULL DEFAULT '2010-01-01',
  `dueDate` varchar(10) NOT NULL DEFAULT '2010-01-01',
  `borrowPerson` varchar(7) NOT NULL DEFAULT 'a000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Borrows`
--

INSERT INTO `Borrows` (`seqNum`, `borrowDate`, `dueDate`, `borrowPerson`) VALUES
('t00000001', '2010-04-20', '2010-05-22', 'a000015'),
('t00000001', '2018-02-03', '2010-03-05', 'a000014'),
('t00000002', '2010-02-03', '2010-03-05', 'a000004'),
('t00000002', '2010-04-05', '2010-05-07', 'a000005'),
('t00000002', '2010-04-22', '2010-05-24', 'a000006'),
('t00000003', '2010-03-07', '2010-04-09', 'a000010'),
('t00000003', '2010-04-05', '2010-05-07', 'a000021'),
('t00000004', '2010-03-08', '2010-04-10', 'a000006'),
('t00000004', '2010-04-10', '2010-05-12', 'a000015'),
('t00000005', '2010-04-10', '2010-05-12', 'a000012'),
('t00000006', '2010-04-13', '2010-05-15', 'a000009'),
('t00000006', '2010-04-24', '2010-05-26', 'a000005'),
('t00000007', '2010-04-02', '2010-05-04', 'a000019'),
('t00000007', '2010-04-15', '2010-05-17', 'a000004'),
('t00000009', '2010-04-16', '2010-05-18', 'a000012'),
('t00000010', '2010-04-18', '2010-05-20', 'a000014'),
('t00000011', '2010-04-26', '2010-05-28', 'a000007'),
('t00000012', '2010-04-28', '2010-05-30', 'a000009'),
('t00000013', '2010-04-25', '2010-05-27', 'a000017'),
('t00000014', '2010-04-25', '2010-05-27', 'a000008'),
('t00000017', '2010-04-28', '2010-05-30', 'a000017'),
('t00000020', '2010-04-30', '2010-06-01', 'a000008');

-- --------------------------------------------------------

--
-- Table structure for table `Librarybranch`
--

CREATE TABLE `Librarybranch` (
  `branchName` varchar(8) NOT NULL DEFAULT 'l000',
  `branchAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Librarybranch`
--

INSERT INTO `Librarybranch` (`branchName`, `branchAddress`) VALUES
('l001', '高雄市新興區六合一路113號'),
('l002', '高雄市鼓山區捷興一街3號'),
('l003', '高雄市苓雅區海邊路33號'),
('l004', '高雄市前金區中正四路259號'),
('l005', '高雄市苓雅區四維三路2號'),
('l006', '高雄市苓雅區安康路22號'),
('l007', '高雄市鼓山區明誠三路586號'),
('l008', '高雄市苓雅區福德二路77號3樓'),
('l009', '高雄市三民區大順二路468號'),
('l010', '高雄市左營區立信路22號'),
('l011', '高雄市苓雅區三多一路168號'),
('l012', '高雄市左營區立信路22號'),
('l013', '高雄市鳳山區武營路361號'),
('l014', '高雄市三民區鼎力路125號'),
('l015', '高雄市三民區民壯路22號'),
('l016', '高雄市鳳山區光復路二段132號'),
('l017', '高雄市鳳山區國泰路二段136號'),
('l018', '高雄市鳳山區曹公路55之1號'),
('l019', '高雄市鳳山區經武路36號'),
('l020', '高雄市前金區成功一路428號'),
('l021', '高雄市左營區自由三路1號'),
('l022', '高雄市三民區鼎山街660號'),
('l023', '高雄市三民區哈爾濱街215號');

-- --------------------------------------------------------

--
-- Table structure for table `Patron`
--

CREATE TABLE `Patron` (
  `patronId` varchar(7) NOT NULL DEFAULT 'a000000',
  `name` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL DEFAULT '0900000000',
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Patron`
--

INSERT INTO `Patron` (`patronId`, `name`, `phone`, `address`) VALUES
('a000001', 'Hi', '0900000330', '高雄市三民區哈爾濱街215號'),
('a000002', 'Bonson', '0926500000', '高雄市鼓山區捷興一街3號'),
('a000003', 'Lin', '0900023870', '高雄市新興區六合一路130號'),
('a000004', 'Kin', '0900234000', '高雄市前鎮區中一路4號'),
('a000005', 'Vicky', '0900560000', '高雄市前金區自強二路52號'),
('a000006', 'Betty', '0900034560', '高雄市新興區七賢一路386號'),
('a000007', 'Vic', '0900000756', '高雄市鼓山區鼓山一路107號'),
('a000008', 'Ted', '0902530000', '高雄市苓雅區海邊路50號'),
('a000009', 'Tim', '0900423000', '高雄市三民區哈爾濱街118號'),
('a000010', 'Chen', '0907834000', '高雄市三民區同盟一路367號'),
('a000011', 'Zheng', '0900000560', '高雄市前鎮區和平二路227巷22號'),
('a000012', 'Dainiel', '0902980000', '高雄市前鎮區和平二路227巷22號'),
('a000013', 'Gabie', '0912000000', '高雄市前金區中正四路261號'),
('a000014', 'Becky', '0900008900', '高雄市左營區富民路356號'),
('a000015', 'Ryan', '0900783670', '高雄市前金區中正四路211號'),
('a000016', 'Linda', '0900049500', '高雄市鼓山區登山街16號'),
('a000017', 'Helen', '0900782340', '高雄市鼓山區鼓山二路166號'),
('a000018', 'Dennis', '0903248700', '高雄市鹽埕區大安街3號'),
('a000019', 'Ricky', '0923497000', '高雄市左營區博愛三路268號'),
('a000020', 'Eddie', '0998663400', '高雄市鼓山區九如四路636號'),
('a000021', 'William', '0998798700', '高雄市前金區民生二路60號'),
('a000022', 'Amy', '0987983245', '高雄市三民區同盟三路430號');

-- --------------------------------------------------------

--
-- Table structure for table `Reserves`
--

CREATE TABLE `Reserves` (
  `seqNum` varchar(9) NOT NULL DEFAULT 't000',
  `reserveTime` varchar(10) NOT NULL DEFAULT '2010-01-01',
  `reservePerson` varchar(7) NOT NULL DEFAULT 'a000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reserves`
--

INSERT INTO `Reserves` (`seqNum`, `reserveTime`, `reservePerson`) VALUES
('t00000003', '2015-01-05', 'a000002'),
('t00000001', '2015-03-03', 'a000003'),
('t00000013', '2017-03-28', 'a000003'),
('t00000015', '2017-03-30', 'a000003'),
('t00000004', '2015-03-06', 'a000005'),
('t00000010', '2017-03-22', 'a000005'),
('t00000008', '2017-02-13', 'a000006'),
('t00000002', '2017-04-12', 'a000007'),
('t00000005', '2016-04-12', 'a000007'),
('t00000005', '2017-03-20', 'a000008'),
('t00000009', '2017-03-26', 'a000008'),
('t00000002', '2010-04-05', 'a000009'),
('t00000002', '2017-03-15', 'a000009'),
('t00000011', '2017-03-25', 'a000010'),
('t00000001', '2017-03-21', 'a000011'),
('t00000004', '2017-04-06', 'a000011'),
('t00000007', '2017-03-16', 'a000011'),
('t00000009', '2017-03-15', 'a000015'),
('t00000014', '2017-03-29', 'a000015'),
('t00000004', '2010-04-03', 'a000020'),
('t00000006', '2010-04-01', 'a000021'),
('t00000007', '2017-04-13', 'a000022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD UNIQUE KEY `callNumber` (`callNumber`);

--
-- Indexes for table `Bookcopy`
--
ALTER TABLE `Bookcopy`
  ADD PRIMARY KEY (`seqNum`),
  ADD UNIQUE KEY `seqNum` (`seqNum`,`callNumber`),
  ADD KEY `bookcopy_ibfk_1` (`callNumber`),
  ADD KEY `bookcopy_ibfk_2` (`location`);

--
-- Indexes for table `Borrows`
--
ALTER TABLE `Borrows`
  ADD PRIMARY KEY (`seqNum`,`borrowDate`),
  ADD KEY `borrows_ibfk_3` (`borrowPerson`);

--
-- Indexes for table `Librarybranch`
--
ALTER TABLE `Librarybranch`
  ADD PRIMARY KEY (`branchName`);

--
-- Indexes for table `Patron`
--
ALTER TABLE `Patron`
  ADD PRIMARY KEY (`patronId`),
  ADD UNIQUE KEY `patronId` (`patronId`);

--
-- Indexes for table `Reserves`
--
ALTER TABLE `Reserves`
  ADD PRIMARY KEY (`seqNum`,`reserveTime`),
  ADD KEY `reserves_ibfk_1` (`reservePerson`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bookcopy`
--
ALTER TABLE `Bookcopy`
  ADD CONSTRAINT `bookcopy_ibfk_1` FOREIGN KEY (`callNumber`) REFERENCES `Book` (`callNumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bookcopy_ibfk_2` FOREIGN KEY (`location`) REFERENCES `Librarybranch` (`branchName`) ON UPDATE CASCADE;

--
-- Constraints for table `Borrows`
--
ALTER TABLE `Borrows`
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`seqNum`) REFERENCES `Bookcopy` (`seqNum`) ON UPDATE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_3` FOREIGN KEY (`borrowPerson`) REFERENCES `Patron` (`patronId`) ON UPDATE CASCADE;

--
-- Constraints for table `Reserves`
--
ALTER TABLE `Reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`reservePerson`) REFERENCES `Patron` (`patronId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`seqNum`) REFERENCES `Bookcopy` (`seqNum`) ON UPDATE CASCADE;
