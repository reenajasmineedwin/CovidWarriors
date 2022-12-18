-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2022 at 03:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidwarriors`
--
CREATE DATABASE IF NOT EXISTS `covidwarriors` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `covidwarriors`;

-- --------------------------------------------------------

--
-- Table structure for table `FEEDBACK`
--

DROP TABLE IF EXISTS `FEEDBACK`;
CREATE TABLE `FEEDBACK` (
  `Fname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Rating` varchar(10) DEFAULT NULL,
  `Mess_Text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FEEDBACK`
--

INSERT INTO `FEEDBACK` (`Fname`, `Email`, `Phone`, `Aadhar`, `Rating`, `Mess_Text`) VALUES
('Reena Jasmine Edwin', 'reenajasmineedwin@gmail.com', '9620840489', '111222333444', 'Excellent', 'Very Good Website, All Thanks for the always updated information,i could save my friend'),
('Sai Brinda', 'saibrinda@gmail.com', '9782673561', '123456789012', 'Excellent', 'always up to date data!'),
('Keerthana K', 'keerthanak@gmail.com', '8923783628', '234567890123', 'Very Good', 'good job!'),
('Jason', 'jasonofficial1998@gmail.com', '89673568913', '345678901234', 'Very Good', 'Trust-worthy availability details of Remdesivir and oxygen cylinders'),
('Mark Paul', 'markpaul2000@gmail.com', '9678347640', '456372829163', 'Good', 'useful'),
('Andrew Ken', 'andrewken@gmail.com', '7856789045', '678901234567', 'Very Good', 'Valid Details straight from Hospitals!'),
('Henderson', 'henderson1998@gmailcom', '9448767876', '765432198765', 'Excellent', 'thanks alot!saved a life'),
('David Watson', 'davidwatson83@gmail.com', '9731665267', '768492018353', 'Excellent', 'Authentic Information.Excellent Job!!'),
('John', 'john1978official@gmail.com', '7890345672', '890123456789', 'Excellent', 'saved my loved one life!'),
('Leena Jennifer Edwin', 'leenajenniferedwin@gmail.com', '9448523678', '987654321098', 'Excellent', 'Continue this good work!');

-- --------------------------------------------------------

--
-- Table structure for table `HOSPITAL`
--

DROP TABLE IF EXISTS `HOSPITAL`;
CREATE TABLE `HOSPITAL` (
  `Hosp_id` varchar(5) NOT NULL,
  `HName` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Contact` varchar(13) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `HPassword` varchar(15) DEFAULT NULL,
  `Qt_O2` int(11) DEFAULT NULL,
  `Qt_Remdesivir` int(11) DEFAULT NULL,
  `HAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HOSPITAL`
--

INSERT INTO `HOSPITAL` (`Hosp_id`, `HName`, `City`, `Website`, `Contact`, `Email`, `HPassword`, `Qt_O2`, `Qt_Remdesivir`, `HAddress`) VALUES
('H01', 'Apollo Hospital, Seshadripuram', 'Bengaluru', 'www.apollohospitalsseshadripuram.com', '9620804098', 'apollohospitalsseshadripuram@gmail.com', '12345', 67, 76, 'Old No. 28, 1, Platform Rd, Near Mantri Square Mall, Seshadripuram, Bengaluru, Karnataka 560020'),
('H02', 'Medcare Hospital', 'Bengaluru', 'www.medcarehospitalblr.com', '9148997480', 'medcarehospitalblr@gmail.com', 'abcde', 11, 33, '12, Subramanya Temple Rd, Parvathipuram, Vishweshwarapura, Shankarapura, Bengaluru, Karnataka 560004'),
('H03', 'Citizen Hospital', 'Bengaluru', 'www.citizenhospital.com', '9043943355', 'citizenhospital@gmail.com', 'citizen', 10, 36, 'Dispensary Rd, 2nd Phase, Kalasipalya, Bengaluru, Karnataka 560002'),
('H04', 'Fortis Hospital', 'Bengaluru', 'https://fortisbangalore.com/', '9196633672', 'care.bng@fortishealthcare.com', 'fortis123', 155, 123, '154/9, Bannerghatta Road, Opposite IIM-B, Bengaluru, Karnataka 560076'),
('H05', 'Manipal Hospital', 'Bengaluru', 'https://www.manipalhospitals.com/oldairportroad/', '8001023222', 'manipalhospitals@gmail.com', 'manipal123', 438, 267, '98, HAL Old Airport Road, Kodihalli, Bengaluru, Karnataka 560017'),
('H06', 'Columbia Asia Hospital', 'Bengaluru', 'https://www.columbiaindiahospitals.com/hospitals/h', '9180666050', 'columbiaasiahospitals@gmail.com', 'ca123', 671, 78, 'Kirloskar Business Park, Bellary Rd, Hebbal Kempapura, Bengaluru, Karnataka 560024'),
('H07', 'Hosmat Hospital', 'Bengaluru', 'https://www.hosmathospitals.com/', '8025552222', 'hosmathospital@gmail.com', 'hosmat123', 456, 567, '45, Magrath Road, Richmond Rd, Bengaluru, Karnataka 560025'),
('H08', 'Apollo Hospital,Jubilee Hills', 'Hyderabad', 'https://hyderabad.apollohospitals.com/', '8605001062', 'apollohospitalsjubileehills@gmail.com', 'appolo123hyd', 607, 345, 'Road No 72, Film Nagar, opposite Bharatiya Vidya Bhavan School, Jubilee Hills, Hyderabad, Telangana '),
('H09', 'Aware Hospitals', 'Hyderabad', 'https://awaregleneaglesglobalhospitallbnagar.com/', '9140241211', 'awarehospitals@gmail.com', 'aware123', 724, 587, '8-16-1, Nagarjuna Sagar Rd, Laxmi Enclave, Bhagya Nagar, Bairamalguda, Telangana 500035'),
('H10', 'Care Hospital', 'Hyderabad', 'https://www.carehospitals.com/', '9234405645', 'carehospitalshyd@gmail.com', 'carehyd123', 577, 450, 'Aditya Inn, Banjara Hills Rd Number 10, opp. to Banjara Hills, Avenue 4, Banjara Hills, Hyderabad, T'),
('H11', 'Jennifer Hospitals', 'Bengaluru', 'www.jenniferhospitals.com', '9448765215', 'jenniferhospital@gmail.com', 'jwnnifer123', 272, 445, 'NO 16, near freedom park railway colony, seshadri road ,bangalore 560009'),
('H12', 'Thomas Hospital', 'Chennai', 'https://www.thomashospital.com', '18605001066', 'thomashospital@gmail.com', 'thomas123', 167, 445, '21 Greams Lane, Off, Greams Rd, Thousand Lights, Chennai, Tamil Nadu 600006'),
('H13', 'St.Paul Hospital', 'Chennai', 'https://www.stpaulhospital.com', '9643178543', 'stpaulhospitals@gmail.com', 'stpaul123', 346, 562, 'L-10, Sidco Indl Est, Villivakkam Chennai Tamil Nadu 	600049'),
('H14', 'Olive Hospitals', 'Bengaluru', 'www.olivehospitals.com', '9845672451', 'olivehospitals@gmail.com', 'olive123', 377, 197, 'building no.12,nanalnagar x road,mehndupatnam,hyderabad,bangalore 560028'),
('H15', 'Sony Hospitals', 'Hyderabad', 'www.sonyhospitals.com', '9574247354', 'sonyhospitals@gmail.com', '0987', 100, 14, '18-139, Balanagar Hyderabad Telangana 500042');

-- --------------------------------------------------------

--
-- Table structure for table `RESERVE`
--

DROP TABLE IF EXISTS `RESERVE`;
CREATE TABLE `RESERVE` (
  `Reserve_ID` int(11) NOT NULL,
  `aadharno` varchar(12) DEFAULT NULL,
  `hospO2` varchar(5) DEFAULT NULL,
  `qto2` int(11) DEFAULT NULL,
  `hospRem` varchar(5) DEFAULT NULL,
  `qtrem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RESERVE`
--

INSERT INTO `RESERVE` (`Reserve_ID`, `aadharno`, `hospO2`, `qto2`, `hospRem`, `qtrem`) VALUES
(1, '111222333444', 'H04', 45, 'H05', 23),
(2, '987654321098', 'H12', 33, 'H12', 55),
(3, '678901234567', 'H08', 71, 'H09', 65),
(4, '456372829163', 'H10', 12, 'H15', 66),
(5, '123456789012', 'H05', 12, 'H05', 66),
(6, '890123456789', 'H11', 23, 'H14', 30),
(7, '123443211234', 'H14', 23, 'H14', 23),
(8, '111222333444', 'H11', 5, 'H11', 5),
(9, '111222333444', 'H13', 1, 'H13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
CREATE TABLE `USER` (
  `Uname` varchar(50) DEFAULT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `UPassword` varchar(15) DEFAULT NULL,
  `Pref_city` varchar(20) DEFAULT NULL,
  `Qt_Remdesivir` int(11) DEFAULT NULL,
  `Qt_O2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`Uname`, `Aadhar`, `Phone`, `UPassword`, `Pref_city`, `Qt_Remdesivir`, `Qt_O2`) VALUES
('Reena Jasmine Edwin', '111222333444', '9620840489', 'reena123', 'Chennai', 1, 1),
('Alexanderia', '123443211234', '9448534673', 'abcde', 'Bengaluru', 23, 23),
('Sai Brinda', '123456789012', '9782673561', 'brinda145', 'Bengaluru', 66, 12),
('Keerthana K', '234567890123', '8923783628', 'kkeer678', 'Bengaluru', 67, 89),
('Jason', '345678901234', '89673568913', 'jason123', 'Chennai', 20, 12),
('Mark Paul', '456372829163', '9678347640', 'setmymark12', 'Hyderabad', 66, 12),
('Adam', '456789012345', '9983647321', 'adamapple', 'Bengaluru', 26, 44),
('Flemin', '567890123456', '9678323785', 'flemins34', 'Hyderabad', 45, 67),
('Andrew Ken', '678901234567', '7856789045', 'andrew23ken', 'Hyderabad', 65, 71),
('Henderson', '765432198765', '9448767876', 'henrybakkaboi', 'Hyderabad', 32, 100),
('David Watson', '768492018353', '9731665267', 'davidwat97', 'Bengaluru', 45, 56),
('Mathew Levi', '789012345678', '9235489302', 'levi45matt23', 'Chennai', 13, 73),
('Timothy', '876543219876', '8863367892', 'timboy456', 'Chennai', 54, 39),
('John', '890123456789', '7890345672', 'john@78', 'Bengaluru', 30, 23),
('Leena Jennifer Edwin', '987654321098', '9448523678', 'leena123', 'Chennai', 55, 33);

-- --------------------------------------------------------

--
-- Table structure for table `VOLUNTEER`
--

DROP TABLE IF EXISTS `VOLUNTEER`;
CREATE TABLE `VOLUNTEER` (
  `Vname` varchar(50) DEFAULT NULL,
  `Age` varchar(2) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Blood_Donate` varchar(5) DEFAULT 'F',
  `Healthcare_System` varchar(5) DEFAULT 'F',
  `Humane_Services` varchar(5) DEFAULT 'F',
  `Society_Services` varchar(5) DEFAULT 'F',
  `Environmental_Services` varchar(5) DEFAULT 'F',
  `Donation` varchar(5) DEFAULT 'F',
  `Other` varchar(5) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VOLUNTEER`
--

INSERT INTO `VOLUNTEER` (`Vname`, `Age`, `Email`, `Phone`, `Aadhar`, `City`, `Blood_Donate`, `Healthcare_System`, `Humane_Services`, `Society_Services`, `Environmental_Services`, `Donation`, `Other`) VALUES
('Reena Jasmine Edwin', '19', 'reenajasmineedwin@gmail.com', '9620840485', '111222333444', 'Bengaluru', 'F', 'T', 'T', 'F', 'T', 'T', 'F'),
('Sai Brinda', '20', 'saibrinda@gmail.com', '9782673561', '123456789012', 'Bengaluru', 'T', 'F', 'T', 'T', 'T', 'F', 'F'),
('Keerthana K', '20', 'keerthanak@gmail.com', '8923783628', '234567890123', 'Bengaluru', 'T', 'T', 'T', 'F', 'F', 'F', 'F'),
('Flemin', '47', 'flemin0427@gmail.com', '9678323785', '567890123456', 'Hyderabad', 'F', 'F', 'F', 'T', 'T', 'F', 'F'),
('Andrew Ken', '29', 'andrewken1992@gmail.com', '7856789045', '678901234567', 'Hyderabad', 'T', 'F', 'F', 'F', 'T', 'T', 'F'),
('Mathew Levi', '35', 'mathewlevi@gmail.com', '9235489302', '789012345678', 'Chennai', 'T', 'T', 'T', 'T', 'T', 'T', 'F'),
('Timothy', '41', 'timothy198023@gmail.com', '8863367892', '876543219876', 'Chennai', 'F', 'F', 'F', 'F', 'F', 'F', 'T'),
('Leena Jennifer Edwin', '19', 'leenajenniferedwin@gmail.com', '9448523678', '987654321098', 'Chennai', 'F', 'T', 'T', 'T', 'F', 'F', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD PRIMARY KEY (`Aadhar`);

--
-- Indexes for table `HOSPITAL`
--
ALTER TABLE `HOSPITAL`
  ADD PRIMARY KEY (`Hosp_id`);

--
-- Indexes for table `RESERVE`
--
ALTER TABLE `RESERVE`
  ADD PRIMARY KEY (`Reserve_ID`),
  ADD KEY `hospO2` (`hospO2`),
  ADD KEY `aadharno` (`aadharno`),
  ADD KEY `hospRem` (`hospRem`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`Aadhar`);

--
-- Indexes for table `VOLUNTEER`
--
ALTER TABLE `VOLUNTEER`
  ADD PRIMARY KEY (`Aadhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `RESERVE`
--
ALTER TABLE `RESERVE`
  MODIFY `Reserve_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Aadhar`) REFERENCES `USER` (`Aadhar`);

--
-- Constraints for table `RESERVE`
--
ALTER TABLE `RESERVE`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`hospO2`) REFERENCES `HOSPITAL` (`Hosp_id`),
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`aadharno`) REFERENCES `USER` (`Aadhar`),
  ADD CONSTRAINT `reserve_ibfk_3` FOREIGN KEY (`hospRem`) REFERENCES `HOSPITAL` (`Hosp_id`);

--
-- Constraints for table `VOLUNTEER`
--
ALTER TABLE `VOLUNTEER`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`Aadhar`) REFERENCES `USER` (`Aadhar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
