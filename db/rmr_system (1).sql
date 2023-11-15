-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 08:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmr_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(255) DEFAULT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(NULL, 'admin', 'bsit4h');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_reservation`
--

CREATE TABLE `cancel_reservation` (
  `ID` varchar(255) NOT NULL,
  `GUEST_NAME` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(255) NOT NULL,
  `ADULT` varchar(255) NOT NULL,
  `KID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cottage`
--

CREATE TABLE `cottage` (
  `ID` int(11) NOT NULL,
  `COTTAGE_TYPE` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cottage`
--

INSERT INTO `cottage` (`ID`, `COTTAGE_TYPE`, `PRICE`, `STATUS`) VALUES
(10, 'NIPA AREA1', '400', 'AVAILABLE'),
(11, 'NIPA LONG COTTAGE', '800', 'AVAILABLE'),
(12, 'PAVILLION1', '500', 'AVAILABLE'),
(13, 'NIPA AREA2', '400', 'AVAILABLE'),
(14, 'NIPA AREA3', '400', 'AVAILABLE'),
(15, 'NIPA AREA4', '400', 'AVAILABLE'),
(16, 'PAVILLION2', '500', 'AVAILABLE'),
(17, 'PAVILLION3', '500', 'OCCUPIED'),
(18, 'PAVILLION4', '500', 'AVAILABLE'),
(19, 'VIEW DECK1', '400', 'AVAILABLE'),
(20, 'VIEW DECK2', '400', 'AVAILABLE'),
(21, 'VIEW DECK3', '400', 'AVAILABLE'),
(22, 'VIEW DECK4', '400', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive`
--

CREATE TABLE `exclusive` (
  `ID` int(255) NOT NULL,
  `PUBLIC_AREA_DAY` varchar(255) NOT NULL,
  `PUBLIC_AREA_NIGHT` varchar(255) NOT NULL,
  `PRIVATE_DAY` varchar(255) NOT NULL,
  `PRIVATE_NIGHT` varchar(255) NOT NULL,
  `PAVILLION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exclusive`
--

INSERT INTO `exclusive` (`ID`, `PUBLIC_AREA_DAY`, `PUBLIC_AREA_NIGHT`, `PRIVATE_DAY`, `PRIVATE_NIGHT`, `PAVILLION`) VALUES
(1, '12,000', '14,000', '8,000', '10,000', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `AGE` int(255) NOT NULL,
  `BDAY` int(11) NOT NULL,
  `CONTACTNUM` int(11) NOT NULL,
  `ADDRESS` int(11) NOT NULL,
  `DATE_ISSUED` int(11) NOT NULL,
  `CARD` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `NAME`, `AGE`, `BDAY`, `CONTACTNUM`, `ADDRESS`, `DATE_ISSUED`, `CARD`, `AMOUNT`) VALUES
(1, 'edna', 0, 0, 0, 0, 0, 0, 600),
(3, 'EDNALYN', 0, 0, 0, 0, 0, 0, 500),
(4, '', 0, 0, 0, 0, 0, 0, 500),
(5, 'EDNALYN', 89, 0, 987654321, 0, 11, 1163501553, 450),
(6, 'lastra', 20, 10, 2147483647, 0, 12, 1163501553, 500),
(7, 'ednalynlastra', 20, 10, 2147483647, 0, 12, 1286036786, 500),
(8, 'DENNIS', 26, 111123, 123456789, 0, 111111, 241229603, 500),
(9, 'dennis geromiano', 27, 0, 9876521, 0, 0, 108523217, 500);

-- --------------------------------------------------------

--
-- Table structure for table `new_reservation`
--

CREATE TABLE `new_reservation` (
  `ID` int(255) NOT NULL,
  `GUEST_NAME` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(255) NOT NULL,
  `ADULT` varchar(255) NOT NULL,
  `KID` varchar(255) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `TOTAL_PAX` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `COTTAGE_TYPE` varchar(255) NOT NULL,
  `CQUANTITY` varchar(255) NOT NULL,
  `ROOM_TYPE` varchar(255) NOT NULL,
  `RQUANTITY` varchar(255) NOT NULL,
  `EXCLUSIVE_TYPE` varchar(255) NOT NULL,
  `EXCLUSIVE_SCHED` varchar(255) NOT NULL,
  `DATE_RESERVED` varchar(255) NOT NULL,
  `FUNCTIONAL_HALL` varchar(255) NOT NULL,
  `VIDEOKE` varchar(255) NOT NULL,
  `CARD` varchar(255) NOT NULL,
  `TOTAL` varchar(255) NOT NULL,
  `BALANCE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_reservation`
--

INSERT INTO `new_reservation` (`ID`, `GUEST_NAME`, `CONTACT_NO`, `ADULT`, `KID`, `PWD`, `TOTAL_PAX`, `TYPE`, `ADDRESS`, `COTTAGE_TYPE`, `CQUANTITY`, `ROOM_TYPE`, `RQUANTITY`, `EXCLUSIVE_TYPE`, `EXCLUSIVE_SCHED`, `DATE_RESERVED`, `FUNCTIONAL_HALL`, `VIDEOKE`, `CARD`, `TOTAL`, `BALANCE`, `STATUS`) VALUES
(12, 'EDNALYN', '09103710552', '1', '1', '1', '4', 'DAY', 'SANJOSE', 'PAVILLION', '2', '2BED ROOM', '1', 'PRIVATE', 'NIGHT TIME', 'Wednesday, 26 October 2022', '', '', '', '13800', '', ''),
(17, 'hahahaha', '44', '1', '1', '1', '5', 'DAY', 'SANJOSE', 'NIPA', '1', '2BED ROOM', '1', 'PRIVATE', 'NIGHT TIME', 'Wednesday, 26 October 2022', '', '', '', '800', '', ''),
(18, 'angeline ', '036589', '1', '2', '1', '4', 'NIGHT', 'Double L', 'VIEW DECK2', '4', '1BED ROOM2', '1', 'PUBLIC', 'NIGHT', 'Thursday, 24 November 2022', '', '', '', '4300', '', ''),
(20, 'ELLA', '0987', '1', '1', '1', '3', 'DAY', 'SANJOSE', 'NIPA AREA3', '1', '1BED ROOM5', '1', 'PRIVATE', 'NIGHT TIME', 'Sunday, 16 October 2022', '', '', '', '5130', '', ''),
(22, 'dennis geromiano', '09103710552', '1', '1', '', '2', 'DAY', 'SANJOSE', 'NIPA AREA3', '1', '1BED ROOM5', '1', 'PUBLIC', 'DAY TIME', 'Saturday, 1 October 2022', '', '', '', '35150', '', ''),
(24, 'TRYYYYYYYYYYYYY', '12345', '11', '11', '1', '23', 'DAY', 'SANJOSE', 'NIPA AREA1', '1', '1BED ROOM1', '1', 'PUBLIC', 'DAY TIME', 'Saturday, 22 October 2022', '', '', '', '36130', '', ''),
(25, 'CARLODALISAY', '123456789', '1', '1', '1', '3', '', '', 'NIPA AREA1', '', '1BED ROOM1', '', 'PUBLIC', 'DAY TIME', 'Friday, 6 January 2023', '', '', '', '35080', '', ''),
(26, 'DANIELA', '09103710552', '1', '1', '1', '3', '', '', 'NIPA LONG COTTAGE', '', '1BED ROOM1', '', '', '', 'Wednesday, 26 October 2022', '', '', '', '730', '', ''),
(27, 'DANIELA', '09103710552', '1', '1', '1', '3', '', '', 'NIPA LONG COTTAGE', '', '', '', '', '', 'Saturday, 10 December 2022', '', '', '', '1670', '', ''),
(28, 'ORTOZAR', '09108684168', '2', '', '', '2', '', '', 'NIPA LONG COTTAGE', '', '', '', '', '', 'Friday, 6 January 2023', '', '', '', '200', '', ''),
(29, '1', '1', '1', '11', '1', '13', 'DAY', 'San Jose', 'NIPA LONG COTTAGE', '1', '1BED ROOM1', '1', 'PUBLIC', 'DAY TIME', 'Sunday, 9 October 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '680', '', ''),
(30, 'SDFGHJK', '124235', '1', '1', '1', '3', 'NIGHT', 'Double L', 'NIPA AREA1', '1', '1BED ROOM1', '1', 'PUBLIC', 'DAY TIME', 'Monday, 3 October 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '35220', '', ''),
(31, 'EDNALYNLASTRA', '09103710552', '1', '1', '1', '3', 'DAY', 'San Jose', 'NIPA LONG COTTAGE', '1', '1BED ROOM1', '1', 'PUBLIC', 'DAY TIME', 'Saturday, 29 October 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '35480', '', ''),
(32, 'CARLITA', '09103710552', '1', '1', '1', '3', 'NIGHT', 'San Jose', 'NIPA AREA1', '1', '1BED ROOM1', '1', 'PUBLIC', 'NIGHT TIME', 'Sunday, 30 October 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '37220', '', ''),
(33, 'JULIE', '09103710552', '1', '1', '1', '3', 'NIGHT', 'Double L', 'VIEW DECK3', '1', '1BED ROOM1', '1', 'PAVILLION', 'NIGHT TIME', 'Thursday, 1 September 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '22870', '', ''),
(34, 'ggggggggggg', '11111111111', '1', '1', '1', '3', 'DAY', 'San Jose', 'NIPA AREA1', '1', '1BED ROOM1', '1', 'PUBLIC', 'DAY TIME', 'Wednesday, 5 October 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '35080', '', ''),
(35, 'dddddddd', '222222222', '1', '1', '1', '3', 'NIGHT', 'San Jose', 'NIPA AREA1', '1', '1BED ROOM1', '1', 'PUBLIC', 'NIGHT TIME', 'Sunday, 4 September 2022', 'Functional Hall Rate', 'Videoke', 'USE CARD', '37220', '37220', '');

-- --------------------------------------------------------

--
-- Table structure for table `online_reservation`
--

CREATE TABLE `online_reservation` (
  `id` int(255) NOT NULL,
  `Guest_Name` varchar(255) NOT NULL,
  `Reserve_Date` varchar(255) NOT NULL,
  `Type_Reservation` varchar(255) NOT NULL,
  `Contact_Num` bigint(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_reservation`
--

INSERT INTO `online_reservation` (`id`, `Guest_Name`, `Reserve_Date`, `Type_Reservation`, `Contact_Num`, `Email`) VALUES
(1, 'ju', '2022-12-29', 'Function Hall', 943423462, 'avonjane718@gmail.com'),
(2, 'lee', '2022-12-30', 'Function Hall', 943423462, 'avonjane718@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_records`
--

CREATE TABLE `reservation_records` (
  `RESERVE_TYPE` varchar(255) NOT NULL,
  `RESERVE_DATE` int(255) NOT NULL,
  `AMOUNT` int(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `ROOM_TYPE` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `ROOM_TYPE`, `PRICE`, `STATUS`) VALUES
(6, '1BED ROOM1', '2000', 'AVAILABLE'),
(7, '1BED ROOM2', '2000', 'AVAILABLE'),
(8, '1BED ROOM3', '2000', 'AVAILABLE'),
(9, '1BED ROOM4', '2000', 'AVAILABLE'),
(10, '1BED ROOM5', '2000', 'AVAILABLE'),
(11, '2BED ROOM1', '3000', 'AVAILABLE'),
(13, '2BED W/O COMFORT', '2500', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TOTAL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `walk_in`
--

CREATE TABLE `walk_in` (
  `ID` int(255) NOT NULL,
  `GUEST_NAME` varchar(255) NOT NULL,
  `SCHEDULE` varchar(255) NOT NULL,
  `ADULT` varchar(255) NOT NULL,
  `KID` varchar(255) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `TOTAL_PAX` varchar(255) NOT NULL,
  `COTTAGE` varchar(255) NOT NULL,
  `CQUANTITY` varchar(255) NOT NULL,
  `ROOM` varchar(255) NOT NULL,
  `RQUANTITY` varchar(255) NOT NULL,
  `VIDEOKE` varchar(255) NOT NULL,
  `CARD` varchar(255) NOT NULL,
  `TOTAL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walk_in`
--

INSERT INTO `walk_in` (`ID`, `GUEST_NAME`, `SCHEDULE`, `ADULT`, `KID`, `PWD`, `TOTAL_PAX`, `COTTAGE`, `CQUANTITY`, `ROOM`, `RQUANTITY`, `VIDEOKE`, `CARD`, `TOTAL`) VALUES
(23, 'EDNALYN', 'NIGHT TIME', '1', '1', '1', '2', 'NIPA', '', '2BED W/O COMFORT', '1', '0', '', '3150'),
(24, 'daniela', 'DAY TIME', '2', '1', '1', '3', 'PAVILLION', '', '1BED ROOM1', '1', '0', '', '750'),
(25, 'edna', 'DAY TIME', '3', '2', '1', '5', 'PAVILLION', '', '1BED ROOM1', '1', '0', '', '900'),
(26, 'dddddd', 'DAY TIME', '2', '2', '1', '4', 'NIPA AREA1', '', '1BED ROOM1', '1', '0', '', '1600'),
(27, 'daaaaaaaaa', 'NIGHT TIME', '1', '1', '1', '2', 'NIPA LONG COTTAGE', '', '1BED ROOM1', '', '0', '', '3550'),
(28, 'shiela', 'DAY TIME', '12', '12', '1', '24', 'PAVILLION1', '', '1BED ROOM2', '', '0', '', '4800'),
(29, 'faaaaaaaaaaaa', 'DAY TIME', '3', '1', '1', '4', 'VIEW DECK1', '', '1BED ROOM3', '', '0', '', '3250'),
(30, 'maria', 'DAY TIME', '2', '1', '1', '3', 'NIPA AREA2', '', '1BED ROOM4', '', '0', '', '5150'),
(31, 'CARLA', 'NIGHT TIME', '1', '1', '1', '3', 'PAVILLION2', '', '1BED ROOM5', '', '0', '', '3370'),
(32, 'BUKNOY', 'NIGHT TIME', '1', '1', '1', '3', 'NIPA AREA3', '', '2BED ROOM1', '', '0', '', '4270'),
(33, 'DENNIS', 'NIGHT TIME', '1', '1', '1', '3', 'NIPA AREA4', '', '2BED W/O COMFORT', '', '0', '', '3770'),
(34, 'TRY', 'DAY TIME', '1', '1', '1', '3', 'PAVILLION3', '', '1BED ROOM1', '', '0', '', '1230'),
(35, 'BURTEK', 'DAY TIME', '1', '1', '1', '3', 'PAVILLION4', '', '1BED ROOM1', '', '0', '', '1230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cottage`
--
ALTER TABLE `cottage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exclusive`
--
ALTER TABLE `exclusive`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `new_reservation`
--
ALTER TABLE `new_reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `online_reservation`
--
ALTER TABLE `online_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `walk_in`
--
ALTER TABLE `walk_in`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cottage`
--
ALTER TABLE `cottage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `exclusive`
--
ALTER TABLE `exclusive`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new_reservation`
--
ALTER TABLE `new_reservation`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `online_reservation`
--
ALTER TABLE `online_reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `walk_in`
--
ALTER TABLE `walk_in`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
