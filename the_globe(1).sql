-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 01 mai 2022 à 17:29
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
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administrateur` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_administrateur`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'Balla Moussa', 'Keita', 'admin', 'administrateurTheGlobe@esprit.tn', '93046758d21048ae10e9fa249537aa79');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `connecter` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `firstname`, `lastname`, `ville`, `email`, `password`, `connecter`) VALUES
(76, 'Balla Moussa', 'Keita', 'Tunis', 'OUMAR@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(77, 'test', 'test', 'Tunis', 'test@esprit.tn', '93046758d21048ae10e9fa249537aa79', 0),
(78, 'Sarra', 'GHARSALLAH', 'Monastir', 'Sarra.gharsallah@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(79, 'Omar', 'ELKAR', 'Sousse', 'elkar@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(81, 'inconnu', 'inconnu', 'Djerba', 'inconnu@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(82, 'ess', 'ess', 'Ariana', 'ess@yahoo.fr', '25d55ad283aa400af464c76d713c07ad', 0),
(91, 'esssai', 'esgg', 'Monastir', 'balla@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(92, 'moussa', 'KEITA', 'Hammamet', 'moussa@guinee.gov', '25d55ad283aa400af464c76d713c07ad', 0),
(93, 'dfdf', 'fsdf', 'Ariana', 'dgsdg@gsdg.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(94, 'Camara', 'Tenen', 'Tunis', 'fidako@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(95, 'dfdf', 'fsdf', 'Sfax', 'dgsdg@gdfghjg.tn', '25f9e794323b453885f5181f1b624d0b', 0),
(96, 'MENDES', 'PARFAIT', 'Sousse', 'MARIE@ESPRIT.tn', 'aadc64662498fa0bfde229df08b47849', 0),
(97, 'Aminata', 'Diallo', 'Djerba', 'oumou@esprit.tn', '25f9e794323b453885f5181f1b624d0b', 0),
(98, 'josehp', 'BONJAWO', 'Monastir', 'joseph@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(100, 'Balla Moussa', 'Keita', 'Tunis', 'ballamou39@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(114, 'Linda', 'JEDIDI', 'Sfax', 'linda@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(117, 'BallaMoussa', 'KEITA', 'Defau', 'ballamoussa.keita@esprit.tn', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(118, 'ouamr', 'sgsdg', 'Tunis', 'essai@gmail.com', 'abb06380a9bcd3fba8f3df56aacfb99b', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id_employe` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_employe`, `firstname`, `lastname`, `ville`, `email`, `password`) VALUES
(38, 'Tenen', 'Kourouma', 'monday', 'tenen@esprit.tn', '25d55ad283aa400af464c76d713c07ad'),
(39, 'oumar', 'serty', 'drtfgy', 'rftg@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id_employe` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_notification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id_notification`, `message`, `etat`, `date_notification`) VALUES
(14, 'PUBLICATION:Balla Moussa Keita vient de publier un temoignage', 1, '2022-04-29 09:10:57'),
(15, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est JEDIDI', 1, '2022-04-29 09:14:29'),
(16, 'PUBLICATION:Balla Moussa Keita vient de publier un temoignage', 1, '2022-04-29 09:57:53'),
(17, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est sgsdg', 1, '2022-04-29 10:03:13');

-- --------------------------------------------------------

--
-- Structure de la table `onlineuser`
--

CREATE TABLE `onlineuser` (
  `id_client` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id_temoignage` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoignage`, `message`, `client`) VALUES
(7, 'Convinced that entertainment can be an effective way to boost performance. Passionate about shows, cinema, and theaters. I love this website, I use it everyday. Good job guys!', 76),
(10, 'Good job guys!', 76),
(15, 'I\'m proud of you; Good job', 78),
(16, 'this is a comment', 78),
(17, 'Good job Guys. I\'m proud of you.', 76),
(18, 'Good job Guys. I\'m proud of you.', 76),
(19, 'Good job Guys. I\'m proud of you.', 76),
(20, 'Good job Guys. I\'m proud of you.', 76),
(21, 'Good job Guys. I\'m proud of you.', 76),
(22, 'Les notifs fonctionnent bien.', 76),
(23, 'Les notifications fonctionnent bien..', 76),
(24, 'Good job guys!', 98),
(25, 'Good job', 76),
(26, 'fghjghbj', 100),
(27, 'Good job', 76),
(28, 'Good job', 76),
(29, 'Good job guys', 76);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_employe`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id_employe`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`);

--
-- Index pour la table `onlineuser`
--
ALTER TABLE `onlineuser`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoignage`),
  ADD KEY `fk_client_temoignage` (`client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `onlineuser`
--
ALTER TABLE `onlineuser`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoignage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD CONSTRAINT `fk_client_temoignage` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
