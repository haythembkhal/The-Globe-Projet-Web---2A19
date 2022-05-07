-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 08:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_globe`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `avisId` int(11) NOT NULL,
  `opinion` varchar(15) NOT NULL,
  `spectacleId` int(11) NOT NULL,
  `userId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`avisId`, `opinion`, `spectacleId`, `userId`) VALUES
(219, 'disliked', 380, 'idnt'),
(222, 'disliked', 393, 'idnt'),
(225, 'liked', 394, 'idnt'),
(237, 'disliked', 394, 'ident'),
(247, 'liked', 393, 'ident'),
(249, 'disliked', 380, 'ident');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idEval` int(11) NOT NULL,
  `dateCommentaire` date NOT NULL,
  `commentaire` text NOT NULL,
  `spectacleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idEval`, `dateCommentaire`, `commentaire`, `spectacleId`) VALUES
(118, '2022-04-19', '  lol', 380),
(120, '2022-04-20', 'salut ', 395),
(121, '2022-04-20', ' je m\'appele haythem', 395),
(123, '2022-04-21', 'saluttt', 394),
(127, '2022-04-22', 'sa', 394),
(135, '2022-04-23', 'dddk', 393),
(136, '2022-04-24', 'heyyy', 393),
(139, '2022-04-24', 'yo\r\n', 394),
(140, '2022-04-24', 'd', 393),
(141, '2022-04-24', 'd', 393),
(142, '2022-04-24', 'ss', 380),
(143, '2022-04-29', 'ee', 439),
(144, '2022-04-29', 'hgj', 439);

-- --------------------------------------------------------

--
-- Table structure for table `spectacles`
--

CREATE TABLE `spectacles` (
  `spectacleId` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `dateSpec` datetime NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `resto` varchar(255) NOT NULL,
  `gare` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `realisateurs` text NOT NULL,
  `plan` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `carte` varchar(255) NOT NULL,
  `imgportrait` varchar(255) NOT NULL,
  `imglandscape` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spectacles`
--

INSERT INTO `spectacles` (`spectacleId`, `titre`, `dateSpec`, `adresse`, `hotel`, `resto`, `gare`, `description`, `realisateurs`, `plan`, `video`, `carte`, `imgportrait`, `imglandscape`, `duration`) VALUES
(380, 'Will Smith Comedy', '2022-05-04 23:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' Will Smith est ', 'Will Smith  ', 'champ non utilisé', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/opera.jpg', 'assets/images/opera.jpg', '45m'),
(393, 'PNL Tournée', '2022-04-29 22:46:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' PNL est l\'un des meilleurs', 'C\'est PNL ', 'champ non utilisé', 'https://www.youtube.com/embed/0UNycii3lSw', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/screen1.png', 'assets/images/website.jpg', '90m'),
(394, 'Jamel Funny', '2022-05-06 16:52:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '        JAMEL est l\'un des PIRES', 'jhjhgh ', '23£', 'https://www.youtube.com/embed/_g0xVVFKRB8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/jamel2.jpg', 'assets/images/jamel.jpg', '70m'),
(395, 'BTS', '2022-05-07 22:15:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'BTS est l\'un des Meilleurs', 'C\'est BTS', 'assets/images/', 'https://www.youtube.com/embed/jWRMXiHhDjc', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/btsp.jpg', 'assets/images/bts.jpg', '100m'),
(396, 'Disney On Ice', '2022-05-03 00:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'JAMEL est l\'un des PIRES', 'C\'est Jamel', 'assets/images/', 'https://www.youtube.com/embed/9erLRuEpdPA', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/disneyl2.jpg', 'assets/images/disneyl2.jpg', '70m'),
(439, 'Date inferieure', '2022-03-29 21:40:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '   Will Smith est ', 'Will Smith    ', 'champ non utilisé', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/opera.jpg', 'assets/images/opera.jpg', '45m'),
(455, 'Will Smith Comedy', '2022-04-28 12:25:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '  Will Smith est ', 'Will Smith   ', '$20', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/opera.jpg', 'assets/images/opera.jpg', '45m'),
(456, 'Will Smith Comedy', '2022-05-06 10:04:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '  Will Smith est ', 'Will Smith   ', '$20', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/download.jpg', 'assets/images/download.jpg', '45m');

-- --------------------------------------------------------

--
-- Table structure for table `vu`
--

CREATE TABLE `vu` (
  `idSpec` int(11) NOT NULL,
  `vu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vu`
--

INSERT INTO `vu` (`idSpec`, `vu`) VALUES
(380, 1),
(395, 1),
(380, 1),
(380, 1),
(394, 1),
(380, 1),
(395, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(393, 1),
(394, 1),
(395, 1),
(395, 1),
(380, 1),
(380, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(455, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(456, 1),
(456, 1),
(380, 1),
(380, 1),
(393, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`avisId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idEval`),
  ADD KEY `FK_ID_SPECTACLE` (`spectacleId`);

--
-- Indexes for table `spectacles`
--
ALTER TABLE `spectacles`
  ADD PRIMARY KEY (`spectacleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `avisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idEval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `spectacles`
--
ALTER TABLE `spectacles`
  MODIFY `spectacleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_ID_SPECTACLE` FOREIGN KEY (`spectacleId`) REFERENCES `spectacles` (`spectacleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
