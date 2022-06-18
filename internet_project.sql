-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 08:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internet_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Username`, `Password`) VALUES
(1111, 'Remon@gmail.com', 'Remon Emad', '1111'),
(2222, 'kareem@gmail.com', 'kareem sawah', '2222'),
(3333, 'salah@gmail.com', 'ahmed salah', '3333'),
(4444, 'madonna@gmail.com', 'madonna bassem', '4444'),
(5555, 'yehia@gmail.com', 'yehia mohamed', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `MovieID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`MovieID`,`UserID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`MovieID`, `UserID`) VALUES
(18, 3),
(3, 4),
(16, 6),
(6, 7),
(9, 7),
(5, 10),
(6, 11),
(9, 12),
(16, 13),
(25, 13);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `year` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `genre` text NOT NULL COMMENT 'Origin',
  `rating` int(11) NOT NULL,
  `origin` text NOT NULL,
  `description` text NOT NULL,
  `cast` text NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `name`, `year`, `duration`, `genre`, `rating`, `origin`, `description`, `cast`, `picture`) VALUES
(1, 'Bad Boys for Life', 2020, 124, 'Action, Comedy, Crime', 7, 'USA', 'Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.', 'Will Smith, Martin Lawrence', 'Bad Boys for Life'),
(2, 'The Gentlemen', 2019, 113, 'Action, Comedy, Crime', 8, 'USA', 'An American expat tries to sell off his highly profitable marijuana empire in London, triggering plots, schemes, bribery and blackmail in an attempt to steal his domain out from under him.', 'Matthew McConaughey, Charlie Hunnam', 'The Gentlemen'),
(3, 'Just Mercy', 2019, 137, 'Biography, Crime, Drama', 8, 'USA', 'World-renowned civil rights defense attorney Bryan Stevenson works to free a wrongly condemned death row prisoner.', 'Michael B. Jordan, Jamie Foxx', 'Just Mercy'),
(4, 'Birds of Prey', 2020, 109, 'Action, Adventure, Comedy', 6, 'USA', 'After splitting with the Joker, Harley Quinn joins superheroines Black Canary, Huntress and Renee Montoya to save a young girl from an evil crime lord.', 'Margot Robbie, Rosie Perez', 'Birds of Prey'),
(5, 'Horse Girl', 2020, 103, 'Drama, Mystery, Thriller', 6, 'USA', 'Sarah, a socially isolated woman with a fondness for arts and crafts, horses, and supernatural crime shows finds her increasingly lucid dreams trickling into her waking life.', 'Alison Brie, Molly Shannon', 'Horse Girl'),
(6, 'Ordinary Love', 2019, 92, 'Drama, Romance', 7, 'USA', 'An extraordinary look at the lives of a middle-aged couple in the midst of the wife''s breast cancer diagnosis.', 'Lesley Manville, Liam Neeson', 'Ordinary Love'),
(7, 'The Call of the Wild', 2020, 100, 'Adventure, Drama, Family', 7, 'USA', 'A sled dog struggles for survival in the wilds of the Yukon.', 'Harrison Ford, Omar Sy', 'The Call of the Wild'),
(8, 'Color Out of Space', 2019, 111, 'Horror, Mystery, Sci-Fi', 6, 'USA', 'A secluded farm is struck by a strange meteorite which has apocalyptic consequences for the family living there and possibly the world.', 'Nicolas Cage, Joely Richardson', 'Color Out of Space'),
(9, 'The Invisible Man', 2020, 124, 'Drama, Horror, Mystery', 7, 'USA', 'When Cecilia''s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.', 'Elisabeth Moss, Oliver Jackson-Cohen', 'The Invisible Man'),
(10, 'Guns Akimbo', 2019, 98, 'Action, Comedy, Crime', 6, 'USA', 'A guy relies on his newly-acquired gladiator skills to save his ex-girlfriend from kidnappers.', 'Daniel Radcliffe, Samara Weaving', 'Guns Akimbo'),
(11, 'Onward', 2020, 102, 'Animation, Adventure, Comedy', 7, 'USA', 'Two elven brothers embark on a quest to bring their father back for one day.', 'Tom Holland, Chris Pratt', 'Onward'),
(12, 'The Way Back', 2020, 108, 'Drama, Sport', 7, 'USA', 'Jack Cunningham was a high school basketball phenom who walked away from the game, forfeiting his future. Years later, when he reluctantly accepts a coaching job at his alma mater, he may get one last shot at redemption.', 'Ben Affleck, Al Madrigal', 'The Way Back'),
(13, 'Escape from Pretoria', 2020, 106, 'Crime, Mystery, Thriller', 7, 'USA', 'Based on the real-life prison break of two political captives, Escape From Pretoria is a race-against-time thriller set in the tumultuous apartheid days of South Africa.', 'Daniel Radcliffe, Daniel Webber', 'Escape from Pretoria'),
(14, 'Spenser Confidential', 2020, 111, 'Action, Comedy, Crime', 6, 'USA', 'When two Boston police officers are murdered, ex-cop Spenser teams up with his no-nonsense roommate Hawk to take down criminals.', 'Mark Wahlberg, Winston Duke', 'Spenser Confidential'),
(15, 'Lost Girls', 2020, 95, 'Crime, Drama, Mystery', 6, 'USA', 'When Mari Gilbert''s daughter disappears, police inaction drives her own investigation into the gated Long Island community where Shannan was last seen. Her search brings attention to over a dozen murdered sex workers.', 'Amy Ryan, Thomasin McKenzie', 'Lost Girls'),
(16, 'The Banker', 2020, 120, 'Biography, Drama', 7, 'USA', 'In the 1960s two African-American entrepreneurs hire a working-class white man to pretend to be the head of their business empire while they pose as a janitor and chauffeur.', 'Anthony Mackie, Samuel L. Jackson', 'The Banker'),
(17, 'The Platform', 2019, 94, 'Horror, Sci-Fi, Thriller', 7, 'USA', 'A vertical prison with one cell per level. Two people per cell. Only one food platform and two minutes per day to feed. An endless nightmare trapped in The Hole.', 'Ivan Massagué, Zorion Eguileor', 'The Platform'),
(18, 'Coffee & Kareem', 2020, 88, 'Action, Comedy, Crime', 5, 'USA', 'Twelve-year-old Kareem Manning hires a criminal to scare his mom''s new boyfriend -police officer James Coffee - but it backfires, forcing Coffee and Kareem to team up in order to save themselves from Detroit''s most ruthless drug kingpin.', 'Ed Helms, Taraji P. Henson', 'Coffee & Kareem'),
(19, 'Trolls World Tour', 2020, 91, 'Animation, Adventure, Comedy', 6, 'USA', 'When the Queen of the Hard Rock Trolls tries to take over all the Troll kingdoms, Queen Poppy and her friends try different ways to save all the Trolls.', ' Anna Kendrick, Justin Timberlake,', 'Trolls World Tour'),
(20, 'Sea Fever', 2019, 95, 'Drama, Horror, Mystery', 6, 'USA', 'The crew of a West of Ireland trawler, marooned at sea, struggle for their lives against a growing parasite in their water supply.', 'Hermione Corfield, Dag Malmberg', 'Sea Fever'),
(21, 'Nail Polish', 2021, 128, 'Drama', 8, 'India', 'Nail Polish, written and directed by Bugs Bhargava Krishna, stars Arjun Rampal, Manav Kaul, Anand Tiwari and Rajit Kapur. It''s a legal thriller that explores the uncertainty of the human mind.', ' Arjun Rampal, Manav Kaul', 'Nail Polish'),
(22, 'Ajeeb Daastaans', 2021, 142, 'Drama, Romance', 7, 'India', 'Four shorts explore the surprising ways in which unexpected catalysts inflame the uncomfortable emotions simmering under fractured relationships.', ' Fatima Sana Shaikh, Jaideep Ahlawat', 'Ajeeb Daastaans'),
(23, 'Sherni', 2021, 131, 'Action, Adventure, Drama', 7, 'India', 'An upright Forest Officer who strives for balance in a world of man-animal conflict while she also seeks her true calling in a hostile environment.', 'Vidya Balan, Vijay Raaz', 'Sherni'),
(24, 'Haseen Dillruba', 2021, 135, 'Crime, Drama, Mystery', 7, 'India', 'Under investigation as a suspect in her husband''s murder, a wife reveals details of their thorny marriage that seem to only further blur the truth.', ' Taapsee Pannu, Vikrant Massey', 'Haseen Dillruba'),
(25, '14 Phere', 2021, 111, 'Comedy, Romance', 7, 'India', 'Sanjay, a Rajput from Jahanabad, is in love with Aditi, a Jat from Jaipur. They want to get married, but don''t want to hurt their families. So they plan to get married by arranging a fake set of parents. Will they succeed?', ' Kriti Kharbanda, Gauahar Khan', '14 Phere'),
(26, 'Mimi', 2021, 132, 'Comedy, Drama', 8, 'India', 'Mimi is introduced by Bhanu to an American couple as a surrogate in exchange for Rs 2 million. She decides to have the baby even when they change their mind and tells her parent that Bhanu is the father.', 'Kriti Sanon, Evelyn Edwards', 'Mimi'),
(27, 'Shershaah', 2021, 135, 'Action, Biography, Drama', 9, 'India', 'The story of PVC awardee Indian soldier Capt. Vikram Batra, who shot to fame and became a household name during the Kargil War in 1999.', ' Sidharth Malhotra, Kiara Advani', 'Shershaah'),
(28, 'Bellbottom', 2021, 123, 'Action, Thriller', 7, 'India', 'When an Indian commercial airliner is hijacked by terrorists in the mid 1980s, a government agent is tasked with rescuing the 210 hostages.', 'Akshay Kumar, Huma Qureshi', 'Bellbottom'),
(29, 'Bhoot Police', 2021, 129, 'Comedy, Horror', 8, 'India', 'Two brothers whose job is to hunt and eradicate ghosts for money is assigned a project in a remote village', ' Saif Ali Khan, Abhinay Raj Singh', 'Bhoot Police'),
(30, 'Shiddat', 2021, 146, 'Romance', 8, 'India', 'A passionate love story involving two couples which highlights the contrast between a regular, mature yet egoistic husband and a unique, happy go lucky, enamored, overzealous boy chasing after the love of his life.', ' Sunny Kaushal, Abhinay Raj Singh', 'Shiddat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(50) NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` int(50) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `picture`) VALUES
(1, 'emad', 'emad@gmail.com', 1, 'emad'),
(2, 'sherif', 'sherif@gmail.com', 1, 'sherif'),
(3, 'salama', 'salama@gmail.com', 1, 'salama'),
(4, 'ashraf', 'ashraf@gmail.com', 1, 'ashraf'),
(5, 'omda', 'omda@gmail.com', 1, 'omda'),
(6, 'ali', 'ali@gmail.com', 1, 'ali'),
(7, 'omar', 'omar@gmail.com', 1, 'omar'),
(8, 'mahmoud', 'mahmoud@gmail.com', 1, 'mahmoud'),
(9, 'mohamed', 'mohamed@gmail.com', 1, 'mohamed'),
(10, 'ahmed', 'ahmed@gmail.com', 1, 'ahmed'),
(11, 'bishoy', 'bishoy@gmail.com', 1, 'bishoy'),
(12, 'marwan', 'marwan@gmail.com', 1, 'marwan'),
(13, 'shobaki', 'shobaki@gmail.com', 1, 'shobaki'),
(14, 'youssef', 'youssef@gmail.com', 1, 'youssef'),
(15, 'roni', 'roni@gmail.com', 1, 'roni');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE IF NOT EXISTS `watchlist` (
  `MovieID` int(100) NOT NULL,
  `UserID` int(100) NOT NULL,
  PRIMARY KEY (`MovieID`,`UserID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`MovieID`, `UserID`) VALUES
(25, 4),
(22, 5),
(12, 6),
(15, 7),
(6, 8),
(8, 9),
(7, 10),
(12, 10),
(26, 10),
(9, 11),
(24, 11),
(29, 11),
(14, 12),
(10, 13),
(2, 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
