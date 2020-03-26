

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admin` (
 `adminid` int(11) NOT NULL AUTO_INCREMENT,
 `adminname` varchar(40) NOT NULL,
 `adminpwd` varchar(40) NOT NULL,
 PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

--
-- Table structure for table `events`
--
CREATE TABLE `events` (
 `EventID` int(11) NOT NULL AUTO_INCREMENT,
 `Title` varchar(255) NOT NULL,
 `Description` varchar(255) DEFAULT NULL,
 `StartDate` varchar(255) DEFAULT NULL,
 `EndDate` varchar(255) DEFAULT NULL,
 `Cost` int(11) DEFAULT NULL,
 `LocationID` int(11) DEFAULT NULL,
 PRIMARY KEY (`EventID`),
 KEY `LocationID` (`LocationID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

CREATE TABLE `club` (
 `clubid` int(11) NOT NULL AUTO_INCREMENT,
 `clubname` varchar(50) NOT NULL,
 `clubtype` varchar(50) NOT NULL,
 PRIMARY KEY (`clubid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


CREATE TABLE `register` (
 `username` varchar(60) NOT NULL,
 `rollno` varchar(20) NOT NULL,
 `clubname` varchar(50) NOT NULL,
 `year` int(4) NOT NULL,
 PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(40) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1
--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `LocationID`) VALUES
(1, 'Kashish', 'Freshers Night', '10 Oct', '10 Oct', 200, 1);


INSERT INTO `users` (`username`, `password`, `email`) VALUES
('test2', '1234', 'user.com');

