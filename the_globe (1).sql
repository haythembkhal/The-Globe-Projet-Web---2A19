-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 08 mai 2022 à 16:47
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
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categories` int(11) NOT NULL,
  `image` text NOT NULL,
  `likess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`id`, `nom`, `nationalite`, `genre`, `age`, `description`, `categories`, `image`, `likess`) VALUES
(32, 'Torri', 'Americain', 'homme', 25, 'petace', 35, 'Photo1.jpg', 5),
(33, 'Tom Holand', 'Camerounais', 'homme', 29, 'c\'est un gars bon un gars du mnolé', 34, 'kev.jpg', 4),
(34, 'Cardi B', 'Canadienne', 'femme', 35, 'elle connait rapper et a le flo', 33, 'c2.jpg', 11),
(35, 'The Jones', 'Americain', 'homme', 29, '  Atlanta pres de miami beach', 34, 'Gims.jpg', 3),
(37, 'Eva Mendes', 'Canadienne', 'femme', 23, 'l\'une des plus belle actrice du moment', 33, 'a5.jpg', 6),
(38, 'Will', 'Americain', 'homme', 19, 'donnzer', 34, 'a3.jpg', 3),
(41, 'Peter', 'Americain', 'homme', 19, 'meilleur', 34, '08_mai_clara.png', 0),
(44, 'Eren Jeager', 'Eldien', 'homme', 19, 'Le detenteur du Titan Assailant et le Protagoniste de SNK', 39, 'Eren.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `avisId` int(11) NOT NULL,
  `opinion` varchar(15) NOT NULL,
  `spectacleId` int(11) NOT NULL,
  `userId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avisId`, `opinion`, `spectacleId`, `userId`) VALUES
(363, 'disliked', 393, '76'),
(365, 'liked', 393, '78'),
(366, 'liked', 394, '76');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nombres_artiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`ID`, `nom`, `description`, `nombres_artiste`) VALUES
(32, 'Acteur', 'Donne', 0),
(33, 'Chanteur', 'Allo ', 0),
(34, 'Pianiste', 'Larry de la combi de noir ', 0),
(35, 'Humoriste', 'Un gars qui fait rire les gens par la parole', 0),
(38, 'Comedien', 'il fait rire le public ', 0),
(39, 'Guerrier', 'Les Types Les plus Badass de Animes', 0);

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
(78, 'Sarra', 'GHARSALLAH', 'Monastir', 'Sarra.gharsallah@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 1),
(79, 'Omar', 'ELKAR', 'Sousse', 'elkar@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(81, 'inconnu', 'inconnu', 'Djerba', 'inconnu@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(82, 'ess', 'ess', 'Ariana', 'ess@yahoo.fr', '25d55ad283aa400af464c76d713c07ad', 0),
(91, 'esssai', 'esgg', 'Monastir', 'balla@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(93, 'dfdf', 'fsdf', 'Ariana', 'dgsdg@gsdg.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(94, 'Camara', 'Tenen', 'Tunis', 'fidako@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(95, 'dfdf', 'fsdf', 'Sfax', 'dgsdg@gdfghjg.tn', '25f9e794323b453885f5181f1b624d0b', 0),
(96, 'MENDES', 'PARFAIT', 'Sousse', 'MARIE@ESPRIT.tn', 'aadc64662498fa0bfde229df08b47849', 0),
(97, 'Aminata', 'Diallo', 'Djerba', 'oumou@esprit.tn', '25f9e794323b453885f5181f1b624d0b', 0),
(98, 'josehp', 'BONJAWO', 'Monastir', 'joseph@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(100, 'Balla Moussa', 'Keita', 'Tunis', 'ballamou39@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(114, 'Linda', 'JEDIDI', 'Sfax', 'linda@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0),
(117, 'BallaMoussa', 'KEITA', 'Defau', 'ballamoussa.keita@esprit.tn', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(118, 'ouamr', 'sgsdg', 'Tunis', 'essai@gmail.com', 'abb06380a9bcd3fba8f3df56aacfb99b', 0),
(120, 'Mendes', 'voufo', 'pamol', 'mendesvoufo@gmail.com', '789246959f4969b77be84d40763a7ae5', 0);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `idEval` int(11) NOT NULL,
  `dateCommentaire` date NOT NULL,
  `commentaire` text NOT NULL,
  `spectacleId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`idEval`, `dateCommentaire`, `commentaire`, `spectacleId`, `username`, `userid`) VALUES
(202, '2022-05-08', 'ss', 395, 'Balla Moussa', 76),
(212, '2022-05-08', 'ddd', 394, 'Balla Moussa', 76);

-- --------------------------------------------------------

--
-- Structure de la table `conges`
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
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`id_conge`, `type_conge`, `date_deb`, `date_fin`, `etat`, `employes`) VALUES
(7, 3, '2022-04-28', '2022-04-24', 0, 10),
(9, 3, '2022-04-23', '2022-04-19', NULL, 20),
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
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_likes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_likes`, `id_user`, `id_art`) VALUES
(1, 1, 34),
(2, 1, 34),
(3, 1, 35),
(4, 1, 35),
(5, 1, 34),
(6, 1, 34),
(7, 1, 36),
(8, 1, 32),
(9, 1, 32),
(10, 1, 37),
(11, 1, 37),
(12, 1, 37),
(13, 1, 37),
(14, 1, 37),
(15, 1, 37),
(16, 1, 38),
(17, 1, 38),
(18, 1, 33),
(19, 1, 33),
(20, 1, 40),
(21, 1, 40),
(22, 1, 35),
(23, 1, 36),
(24, 1, 36),
(25, 1, 40),
(26, 1, 40),
(27, 1, 38),
(28, 1, 35),
(29, 1, 33),
(30, 1, 32),
(31, 1, 32),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34);

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
(17, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est sgsdg', 1, '2022-04-29 10:03:13'),
(18, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est voufo', 0, '2022-05-02 13:43:00');

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
-- Structure de la table `spectacles`
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
-- Déchargement des données de la table `spectacles`
--

INSERT INTO `spectacles` (`spectacleId`, `titre`, `dateSpec`, `adresse`, `hotel`, `resto`, `gare`, `description`, `realisateurs`, `plan`, `video`, `carte`, `imgportrait`, `imglandscape`, `duration`) VALUES
(380, 'Will Smith Comedy', '2022-05-04 23:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' Will Smith est ', 'Will Smith  ', 'champ non utilisé', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/opera.jpg', 'assets/images/opera.jpg', '45m'),
(393, 'PNL Tournée', '2022-04-29 22:46:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' PNL est l\'un des meilleurs', 'C\'est PNL ', 'champ non utilisé', 'https://www.youtube.com/embed/0UNycii3lSw', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/screen1.png', 'assets/images/website.jpg', '90m'),
(394, 'Jamel Funny', '2022-05-06 16:52:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '        JAMEL est l\'un des PIRES', 'jhjhgh ', '23£', 'https://www.youtube.com/embed/_g0xVVFKRB8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/jamel2.jpg', 'assets/images/jamel.jpg', '70m'),
(395, 'BTS', '2022-05-07 22:15:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'BTS est l\'un des Meilleurs', 'C\'est BTS', 'assets/images/', 'https://www.youtube.com/embed/jWRMXiHhDjc', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/btsp.jpg', 'assets/images/bts.jpg', '100m'),
(396, 'Disney On Ice', '2022-05-03 00:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'JAMEL est l\'un des PIRES', 'C\'est Jamel', 'assets/images/', 'https://www.youtube.com/embed/9erLRuEpdPA', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/disneyl2.jpg', 'assets/images/disneyl2.jpg', '70m'),
(439, 'Date inferieure', '2022-03-29 21:40:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '   Will Smith est ', 'Will Smith    ', 'champ non utilisé', 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/opera.jpg', 'assets/images/opera.jpg', '45m');

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
(26, 'fghjghbj', 100);

-- --------------------------------------------------------

--
-- Structure de la table `typec`
--

CREATE TABLE `typec` (
  `id_typeC` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typec`
--

INSERT INTO `typec` (`id_typeC`, `Name`, `Max`) VALUES
(2, 'Congé Paye', 23),
(3, 'Congé Sans solde', 91),
(4, 'Congé Médicale', 31),
(5, 'Matérnité', 356),
(8, 'Congé de formation', 7),
(16, 'Congé Annuel', 22);

-- --------------------------------------------------------

--
-- Structure de la table `vu`
--

CREATE TABLE `vu` (
  `idSpec` int(11) NOT NULL,
  `vu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vu`
--

INSERT INTO `vu` (`idSpec`, `vu`) VALUES
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
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(396, 1),
(439, 1),
(439, 1),
(439, 1),
(439, 1),
(439, 1),
(396, 1),
(380, 1),
(394, 1),
(394, 1),
(380, 1),
(394, 1),
(395, 1),
(394, 1),
(380, 1),
(380, 1),
(394, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(394, 1),
(380, 1),
(380, 1),
(393, 1),
(393, 1),
(394, 1),
(394, 1),
(380, 1),
(380, 1),
(380, 1),
(395, 1),
(380, 1),
(393, 1),
(393, 1),
(394, 1),
(394, 1),
(380, 1),
(394, 1),
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
(380, 1),
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
(380, 1),
(380, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(393, 1),
(393, 1),
(393, 1),
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
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(380, 1),
(394, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
(393, 1),
(393, 1),
(395, 1),
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
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(395, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(395, 1),
(439, 1),
(393, 1),
(393, 1),
(393, 1),
(395, 1),
(395, 1),
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
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(394, 1),
(394, 1),
(394, 1),
(393, 1),
(395, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(395, 1),
(395, 1),
(395, 1),
(395, 1),
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
(394, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_artistes_categories` (`categories`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`avisId`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idEval`),
  ADD KEY `FK_ID_SPECTACLE` (`spectacleId`);

--
-- Index pour la table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`id_conge`),
  ADD KEY `conges_ibfk_1` (`type_conge`);

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
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_likes`);

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
-- Index pour la table `spectacles`
--
ALTER TABLE `spectacles`
  ADD PRIMARY KEY (`spectacleId`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoignage`),
  ADD KEY `fk_client_temoignage` (`client`);

--
-- Index pour la table `typec`
--
ALTER TABLE `typec`
  ADD PRIMARY KEY (`id_typeC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `avisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idEval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT pour la table `conges`
--
ALTER TABLE `conges`
  MODIFY `id_conge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_likes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `onlineuser`
--
ALTER TABLE `onlineuser`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `spectacles`
--
ALTER TABLE `spectacles`
  MODIFY `spectacleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoignage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `typec`
--
ALTER TABLE `typec`
  MODIFY `id_typeC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD CONSTRAINT `fk_artistes_categories` FOREIGN KEY (`categories`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_ID_SPECTACLE` FOREIGN KEY (`spectacleId`) REFERENCES `spectacles` (`spectacleId`);

--
-- Contraintes pour la table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `conges_ibfk_1` FOREIGN KEY (`type_conge`) REFERENCES `typec` (`id_typeC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD CONSTRAINT `fk_client_temoignage` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
