-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2018 at 06:34 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ote`
--
CREATE DATABASE IF NOT EXISTS `ote` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ote`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('32J15438@ict.edu.om', 'gb601'),
('32S15159@ict.edu.om', 'HF766');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `fest_name` char(30) NOT NULL,
  `fest_college` text NOT NULL,
  `date` date NOT NULL,
  `department` text NOT NULL,
  `place` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `GSM` int(8) NOT NULL,
  `about fest` varchar(200) NOT NULL,
  UNIQUE KEY `fest_name` (`fest_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`fest_name`, `fest_college`, `date`, `department`, `place`, `email`, `GSM`, `about fest`) VALUES
('4th Teaching and Learning Conf', 'Ibra College of Technology', '2018-10-10', 'All Department', 'Ibra', '32S15159@ict.edu.om', 99912345, 'important for students who study Public Speaking'),
('Human Resource Management (HRM', 'Hiher College of Technology', '2018-10-01', 'Business Studies', 'Muscat', '32S15159@ict.edu.om', 99912345, 'writing an effective CV and preparing for interviews'),
('Human Resource Management Club', 'Higher College of Technology', '2018-10-09', 'Business Studies', 'Muscat', '32S15159@ict.edu.om', 99912345, 'Important for Business Students'),
('Seminar on GSM network', 'Ibra College of Technology', '2018-10-23', 'Engineering ', 'Ibra', '32S15159@ict.edu.om', 99912345, 'Important for Engineering and IT students'),
('Seminar on Introduction to Arc', 'Al-Musanna College of Technology', '2018-10-17', 'Engineering', 'Al-Musanna', '32S15159@ict.edu.om', 99912345, 'This seminar aimed to give first year diploma students an overview of Architectural Engineering'),
('Seminar On ‘Enhanced Oil Recov', 'Al-Musanna College of Technology', '2018-10-09', 'Engineering', 'Al-Musanna ', '32S15159@ict.edu.om', 99912345, 'Important for Mechanical engineering Students'),
('Seminar on ‘Hybrid Technology’', 'Al-Musanna College of Technology', '2018-03-27', 'Engineering', 'Al-Musanna', '32S15159@ict.edu.om', 99912345, 'The main objective of the seminar was to emphasize the emerging technologies incorporated in the use of green energy'),
('Seminar on ‘Renewable Energy –', 'Al-Musanna College of Technology', '2018-05-22', 'Engineering', 'Al-Musanna', '32S15159@ict.edu.om', 99912345, 'Important for Engineering Students'),
('Seminar on ‘Student-Centered L', 'Al-Musanna College of Technology', '2018-09-12', 'IT', 'Al-Musanna', '32S15159@ict.edu.om', 99912345, 'The intent of the seminar is to highlight the various mathematical models that can make the teaching and learning process more effective.'),
('Seminar On “Research Issues In', 'Nizwa College of Technology', '2018-04-26', 'IT', 'Nizwa', '32S15159@ict.edu.om', 99912345, 'The aim of this seminar is to share the research issues in the field of Disaster Recovery and Risk Management to the faculty members.'),
('Workshop on Advisement & INSPI', 'Al-Musanna College of Technology', '2018-06-05', 'IT', 'Al-Musanna', '32S15159@ict.edu.om', 99912345, 'The workshop aimed at creating awareness regarding Advisement Procedures and to encourage the sharing of advisement-related issues.'),
('Workshop On Arduino Programmin', 'Nizwa College of Technology', '2018-09-09', 'Engineering', 'Nizwa', '32S15159@ict.edu.om', 99912345, 'Important for the Electrical Power section'),
('workshop on machine tools main', 'Shinas College of Technology', '2018-11-13', 'Engineering', 'Shinas', '32S15159@ict.edu.om', 99912345, 'Important for mechanical students'),
('Workshop on PCB Development', 'Ibra College of Technology', '2018-10-17', 'Engineering', 'Ibra', '32S15159@ict.edu.om', 99912345, 'This workshop aimed to impart knowledge on circuit designing and making PCB layout using the PCB wizard software'),
('Workshop On Quality Awareness', 'Nizwa College of Technology', '2018-10-04', 'Business Studies', 'Nizwa', '32S15159@ict.edu.om', 99912345, 'important for Business Staffs'),
('Workshop on Review of Literatu', 'Ibra College of Technology', '2018-10-02', 'IT', 'Ibra', '32S15159@ict.edu.om', 99912345, 'Important for Diploma Second Year from IT department'),
('workshop on ‘Rules and regulat', 'Shinas College of Technology', '2018-10-16', 'Engineering', 'Shinas', '32S15159@ict.edu.om', 99912345, 'Important for the students to get a practical knowledge and skills and to get the know-how of rules and regulations of buildings used in Oman and how to execute the construction as per drawing.'),
('workshop on “Energy Conservati', 'Shinas College of Technology', '2018-10-09', 'Engineering', 'Shinas', '32S15159@ict.edu.om', 99912345, 'important for civil engineering students'),
('Workshop on “Skills Enhancemen', 'Salalah College of Technology', '2018-09-25', 'IT', 'Salalah', '32S15159@ict.edu.om', 99912345, 'The workshop aimed to re-enforce the skills of the Course Project students in making project proposal, project management, database design and modeling as a way to improve, strengthen and achieve qual'),
('workshopon Matlab and Signal P', 'Ibri College of Technology', '2018-10-16', 'Engineering', 'Ibri', '32S15159@ict.edu.om', 99912345, 'Important for Advanced Diploma & Bachelor from all Specialization');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('32j1234@ict.edu.om', 'XD234'),
('32J1416@ict.edu.om', 'DF352'),
('32J19152@ict.edu.om', 'BX566'),
('32S12139@ict.edu.om', 'JT723'),
('32S14126@ict.edu.om', 'LK601'),
('32S15143@ict.edu.om', 'WH562'),
('32S5687@ict.edu.om', 'AB988'),
('32S8763@ict.edu.om', 'GH147'),
('34S3265@ict.edu.om', 'ZS432'),
('36J15274@ict.edu.om', 'CV534');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
