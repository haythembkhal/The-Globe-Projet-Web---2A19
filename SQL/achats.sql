-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 08 mai 2022 à 21:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `the_globe`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `idAchat` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idSpectacle` int(11) NOT NULL,
  `prixTotal` float NOT NULL,
  `dateAchat` varchar(20) NOT NULL,
  `adresseEmail` varchar(50) NOT NULL,
  `nbrePlaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`idAchat`, `idClient`, `idSpectacle`, `prixTotal`, `dateAchat`, `adresseEmail`, `nbrePlaces`) VALUES
(3, 1, 2, 85, '2022-03-12', 'sarra@gmail.com', 3),
(4, 3, 2, 125, '2022-04-13', 'modifiertest@gmail.com', 5),
(5, 2, 3, 5, '2022-04-14', 'ajout1@gmail.com', 8),
(7, 1, 2, 45, '2022-04-04', 'ajout1@gmail.com', 5),
(8, 1, 2, 5, '2022-04-14', 'modifiertest@gmail.com', 8),
(10, 2, 1, 2, '2022-04-21', 'client5@gmail.com', 5),
(11, 2, 3, 5, '2022-04-13', 'sarra@gmail.com', 8),
(12, 2, 2, 452, '2022-04-13', 'client5@gmail.com', 9),
(13, 2, 3, 25, '2022-05-05', 'sarra@gmail.com', 5),
(14, 2, 3, 5, '2022-05-05', 'pdf@gmail.com', 5),
(15, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(16, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(17, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(18, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(19, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(20, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(21, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(22, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(23, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 5),
(24, 2, 3, 55, '2022-05-05', 'testPDF@gmail.com', 6),
(25, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(26, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(27, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(28, 2, 3, 32, '2022-05-05', 'testPDF3@gmail.com', 65),
(29, 2, 3, 32, '2022-05-05', 'testPDF3@gmail.com', 65),
(30, 2, 3, 32, '2022-05-05', 'testPDF3@gmail.com', 65),
(31, 2, 3, 15, '2022-05-06', 'ticket@gmail.com', 8),
(32, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(33, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(34, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(35, 2, 3, 532, '2022-05-06', 'sarrag52@gmail.com', 5),
(36, 2, 3, 532, '2022-05-06', 'sarrag52@gmail.com', 5),
(37, 2, 3, 125, '2022-05-06', 'sarrag52@gmail.com', 5),
(38, 2, 3, 125, '2022-05-06', 'sarrag52@gmail.com', 5),
(39, 1, 2, 5, '2022-05-02', 'stat@gmail.com', 1),
(40, 2, 3, 9, '2022-05-06', 'stattest@gmail.com', 80);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`idAchat`),
  ADD KEY `fk_AchatsClients` (`idClient`),
  ADD KEY `fk_AchatsSpectacles` (`idSpectacle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `idAchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `fk_AchatsClients` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_AchatsSpectacles` FOREIGN KEY (`idSpectacle`) REFERENCES `spectacles` (`spectacleId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
