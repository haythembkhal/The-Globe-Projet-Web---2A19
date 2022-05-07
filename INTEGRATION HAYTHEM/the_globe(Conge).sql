-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 06:21 PM
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
-- Table structure for table `conges`
--

CREATE TABLE `conges` (
  `id_conge` int(11) NOT NULL,
  `type_conge` int(11) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat` int(11) DEFAULT NULL,
  `employes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conges`
--

INSERT INTO `conges` (`id_conge`, `type_conge`, `date_deb`, `date_fin`, `etat`, `employes`) VALUES
(7, 3, '2022-04-28', '2022-04-24', 0, 10),
(9, 3, '2022-04-23', '2022-04-19', NULL, 20),
(13, 3, '2022-04-14', '2022-04-19', NULL, 19),
(45, 3, '2022-04-24', '2022-04-29', 0, 16),
(46, 3, '2022-04-24', '2022-04-29', NULL, 16),
(48, 4, '2022-04-28', '2022-04-29', NULL, 6),
(49, 3, '2022-04-22', '2022-05-06', NULL, 8),
(50, 2, '2022-04-24', '2022-05-05', NULL, 28),
(51, 16, '2022-04-14', '2022-05-08', NULL, 1),
(52, 8, '2022-05-05', '2022-05-15', NULL, 125),
(53, 4, '2022-04-30', '2022-05-02', NULL, 190),
(54, 2, '2022-07-12', '2022-07-19', 0, 92),
(55, 16, '2022-05-06', '2022-05-08', NULL, 34),
(56, 16, '2022-04-30', '2022-05-05', NULL, 34),
(57, 4, '2022-05-02', '2022-05-05', 0, 56),
(58, 3, '2022-05-11', '2022-05-21', NULL, 77);

-- --------------------------------------------------------

--
-- Table structure for table `typec`
--

CREATE TABLE `typec` (
  `id_typeC` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typec`
--

INSERT INTO `typec` (`id_typeC`, `Name`, `Max`) VALUES
(2, 'Congé Paye', 23),
(3, 'Congé Sans solde', 91),
(4, 'Congé Médicale', 31),
(5, 'Matérnité', 356),
(8, 'Congé de formation', 7),
(16, 'Congé Annuel', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`id_conge`),
  ADD KEY `conges_ibfk_1` (`type_conge`);

--
-- Indexes for table `typec`
--
ALTER TABLE `typec`
  ADD PRIMARY KEY (`id_typeC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conges`
--
ALTER TABLE `conges`
  MODIFY `id_conge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `typec`
--
ALTER TABLE `typec`
  MODIFY `id_typeC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `conges_ibfk_1` FOREIGN KEY (`type_conge`) REFERENCES `typec` (`id_typeC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
