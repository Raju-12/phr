-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 06:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phr`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_prescription`
--

CREATE TABLE `d_prescription` (
  `pinfo` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_prescription`
--

INSERT INTO `d_prescription` (`pinfo`, `id`, `paid`) VALUES
('ww', 4, 0),
('a', 5, 0),
('ghgh', 6, 45),
('as', 13, 55),
('m', 15, 55),
('asssssssss', 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_registration`
--

CREATE TABLE `d_registration` (
  `did` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dphone` int(11) NOT NULL,
  `dgender` varchar(255) NOT NULL,
  `dmaritual` varchar(255) NOT NULL,
  `demail` varchar(255) NOT NULL,
  `dpwd` varchar(255) NOT NULL,
  `dcomment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_registration`
--

INSERT INTO `d_registration` (`did`, `dname`, `dphone`, `dgender`, `dmaritual`, `demail`, `dpwd`, `dcomment`) VALUES
(1, 'raju', 12122, 'Male', 'Unmarried', 'ra@gmail.com', '1234', '12qw'),
(2, 'Belayat', 1736436076, 'Male', 'Unmarried', 'belayet23@gmail.com', 'gmail.com', 'Tangail'),
(7, 'k', 9, 'Female', 'Unmarried', 'we@gmail.com', 'zx', 'k'),
(17, 'w', 12122, 'Male', 'Married', 'a@gmail.com', '222', '12'),
(18, 'kkkkk', 9, 'Male', 'Married', 'aaa@gmail.com', '123', 'kkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `d_surgery`
--

CREATE TABLE `d_surgery` (
  `id` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `paname` varchar(200) NOT NULL,
  `pproblem` varchar(200) NOT NULL,
  `psolution` varchar(200) NOT NULL,
  `pdate` date NOT NULL,
  `pstime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_surgery`
--

INSERT INTO `d_surgery` (`id`, `paid`, `paname`, `pproblem`, `psolution`, `pdate`, `pstime`) VALUES
(4, 55, 'f', 'd', 'd', '2020-07-05', '00:00:03'),
(5, 444, 'tt', 'tt', '55', '2020-07-09', '00:00:04'),
(6, 115, 'sagor', 'chest pain', 'operation', '2020-07-16', '02:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `phrregister`
--

CREATE TABLE `phrregister` (
  `id` int(11) NOT NULL,
  `uid` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `upassword` varchar(200) NOT NULL,
  `uaddress` varchar(200) NOT NULL,
  `ukey` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phrregister`
--

INSERT INTO `phrregister` (`id`, `uid`, `uname`, `uemail`, `upassword`, `uaddress`, `ukey`) VALUES
(4, '233', 'raju', 'rr@gmail.com', 'www', 'durgapur', '8txDW5wK'),
(5, '7', 'anada', 'anad@gmail.com', 'gmail.com', 'tangail', 'LhQUAks7');

-- --------------------------------------------------------

--
-- Table structure for table `p_appoinment`
--

CREATE TABLE `p_appoinment` (
  `appoinment_no` int(11) NOT NULL,
  `paitent_id` int(11) NOT NULL,
  `paitent_name` varchar(255) NOT NULL,
  `ldo_visit` date NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appoinment_date` date NOT NULL,
  `problem_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_appoinment`
--

INSERT INTO `p_appoinment` (`appoinment_no`, `paitent_id`, `paitent_name`, `ldo_visit`, `doctor_name`, `appoinment_date`, `problem_description`) VALUES
(1, 1, 'raju', '2020-06-26', 'raju', '2020-07-02', 'fffff'),
(4, 0, 'as', '2020-03-19', 'as', '2020-03-26', 'as'),
(5, 1, 'raju', '2020-06-03', 'raju', '2020-06-23', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `p_operation`
--

CREATE TABLE `p_operation` (
  `pa_id` int(11) NOT NULL,
  `opreport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_operation`
--

INSERT INTO `p_operation` (`pa_id`, `opreport`) VALUES
(1, 'success'),
(112, 'success'),
(113, 'success'),
(114, 'failure');

-- --------------------------------------------------------

--
-- Table structure for table `p_registration`
--

CREATE TABLE `p_registration` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pphone` int(11) NOT NULL,
  `pgender` varchar(255) NOT NULL,
  `pmaritual` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `ppwd` varchar(255) NOT NULL,
  `pcomment` text NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_registration`
--

INSERT INTO `p_registration` (`pid`, `pname`, `pphone`, `pgender`, `pmaritual`, `pemail`, `ppwd`, `pcomment`, `paid`) VALUES
(112, 'tt', 55, 'Female', 'Married', 'aaa@gmail.com', '123', 'e', 444),
(113, 'd', 2, '', '', '@gmail.com', 'ttt', 'tt', 55),
(114, 'kkk', 15423764, 'Male', 'Unmarried', 'rr@gmail.com', 'www', 'uu', 0),
(115, 'sagor', 1934659374, 'Male', 'Married', 'sagor23@gmail.com', 'gmail.com', 'Tangail', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_prescription`
--
ALTER TABLE `d_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_registration`
--
ALTER TABLE `d_registration`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `d_surgery`
--
ALTER TABLE `d_surgery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phrregister`
--
ALTER TABLE `phrregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_appoinment`
--
ALTER TABLE `p_appoinment`
  ADD PRIMARY KEY (`appoinment_no`);

--
-- Indexes for table `p_operation`
--
ALTER TABLE `p_operation`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `p_registration`
--
ALTER TABLE `p_registration`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_prescription`
--
ALTER TABLE `d_prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `d_registration`
--
ALTER TABLE `d_registration`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `d_surgery`
--
ALTER TABLE `d_surgery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phrregister`
--
ALTER TABLE `phrregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_appoinment`
--
ALTER TABLE `p_appoinment`
  MODIFY `appoinment_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_operation`
--
ALTER TABLE `p_operation`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `p_registration`
--
ALTER TABLE `p_registration`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
