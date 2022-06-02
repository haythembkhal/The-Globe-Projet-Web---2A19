-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 juin 2022 à 22:31
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
(5, 2, 3, 5, '2022-04-14', 'ajout1@gmail.com', 8),
(7, 1, 2, 45, '2022-04-04', 'ajout1@gmail.com', 5),
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
(23, 2, 3, 545, '2022-05-05', 'testmodifier@gmail.com', 6),
(24, 2, 3, 55, '2022-05-05', 'testPDF@gmail.com', 6),
(25, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(26, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(27, 2, 3, 125, '2022-05-05', 'testPDF2@gmail.com', 5),
(28, 2, 3, 32, '2022-05-05', 'testPDF3@gmail.com', 65),
(30, 2, 3, 32, '2022-05-05', 'testPDF3@gmail.com', 65),
(31, 2, 3, 15, '2022-05-06', 'ticket@gmail.com', 8),
(32, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(33, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(34, 2, 3, 15, '2022-05-06', 'sarrag52@gmail.com', 8),
(35, 2, 3, 532, '2022-05-06', 'sarrag52@gmail.com', 5),
(36, 2, 3, 532, '2022-05-06', 'sarrag52@gmail.com', 5),
(37, 2, 3, 125, '2022-05-06', 'sarrag52@gmail.com', 5),
(38, 2, 3, 125, '2022-05-06', 'sarrag52@gmail.com', 5),
(41, 2, 3, 50, '2022-05-08', 'hdfh@esprit.tn', 4),
(42, 2, 3, 50, '2022-05-08', 'hdfh@esprit.tn', 4),
(43, 2, 3, 50, '2022-05-08', 'hdfh@esprit.tn', 4),
(44, 2, 3, 50, '2022-05-08', 'dfgh@esprit.tn', 4),
(45, 2, 3, 50, '2022-05-08', 'dfgh@esprit.tn', 4),
(46, 2, 3, 50, '2022-05-08', 'dfgh@esprit.tn', 4),
(47, 2, 3, 50, '2022-05-08', 'dfgh@esprit.tn', 4),
(48, 122, 393, 50, '2022-05-09', 'ballamou39@gmail.com', 4),
(49, 122, 393, 50, '2022-05-09', 'ballamou39@gmail.com', 4),
(50, 122, 393, 50, '2022-05-09', 'ballamou39@gmail.com', 4),
(51, 91, 393, 0, '2022-05-09', 'ballamou39@gmail.com', 4),
(52, 91, 393, 400, '2022-05-09', 'ballamou39@gmail.com', 4),
(53, 82, 396, 552, '2022-05-03', 'test@gmail.com', 4),
(54, 91, 393, 400, '2022-05-12', 'ballamou39@gmail.com', 4),
(55, 91, 393, 4500, '2022-05-12', 'fdfd@esprit.tn', 45),
(56, 91, 393, 400, '2022-05-12', 'fgf@rdptiyq.tn', 4),
(57, 117, 393, 400, '2022-05-12', 'ballamou39@gmail.com', 4),
(59, 120, 393, 400, '2022-05-13', 'ballamou39@gmail.com', 4),
(60, 120, 393, 200, '2022-05-13', 'ballamou39@gmail.com', 2),
(61, 120, 393, 600, '2022-05-13', 'ballamou39@gmail.com', 6),
(62, 120, 393, 600, '2022-05-13', 'ballamou39@gmail.com', 6),
(63, 122, 380, 300, '2022-05-13', 'oumeima.ibnelfekih@esprit.tn', 4),
(64, 137, 393, 1000, '2022-05-21', 'ballamou39@gmail.com', 10),
(65, 120, 393, 1000, '2022-05-27', 'moussa.dansoko@esprit.tn', 10),
(66, 120, 393, 4500, '2022-05-29', 'ballamou39@gmail.com', 45),
(67, 120, 393, 4500, '2022-05-29', 'ballamou39@gmail.com', 45),
(68, 120, 393, 4500, '2022-05-29', 'ballamou39@gmail.com', 45),
(69, 120, 393, 4500, '2022-05-29', 'ballamou39@gmail.com', 45),
(70, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(71, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(72, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(73, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(74, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(75, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(76, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(77, 120, 393, 1000, '2022-05-29', 'gfg@ers.com', 10),
(78, 139, 459, 200, '2022-06-01', 'ballamou39@gmail.com', 2),
(79, 139, 380, 1000, '2022-06-02', 'ballamou39@gmail.com', 10);

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
(34, 'Cardi B', 'Canadienne', 'femme', 35, 'elle connait rapper et a le flo', 33, 'a2.jpg', 32),
(37, 'Eva Mendes', 'Canadienne', 'femme', 23, 'l\'une des plus belle actrice du moment', 33, 'a5.jpg', 14),
(45, 'Chris Becker', 'Americain', 'Homme', 25, 'Super', 35, 'a3.jpg', 6);

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
(219, 'disliked', 380, 'idnt'),
(222, 'disliked', 393, 'idnt'),
(225, 'liked', 394, 'idnt'),
(247, 'liked', 393, 'ident'),
(253, 'disliked', 394, 'ident'),
(262, 'disliked', 380, 'ident'),
(275, 'liked', 394, ''),
(276, 'liked', 395, ''),
(288, 'disliked', 455, 'esssai'),
(293, 'disliked', 455, 'BallaMoussa'),
(363, 'disliked', 393, '76'),
(365, 'liked', 393, '78'),
(366, 'liked', 394, '76'),
(367, 'liked', 393, '91'),
(380, 'disliked', 393, '122'),
(381, 'liked', 393, '117'),
(387, 'liked', 380, '122'),
(468, 'disliked', 439, '120'),
(469, 'liked', 393, '120'),
(474, 'liked', 459, '139'),
(477, 'disliked', 380, '139');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'T-shirt'),
(3, 'Sac123'),
(5, 'Casquette');

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
(32, 'Acteur', 'Donnetest', 0),
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
  `connecter` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `firstname`, `lastname`, `ville`, `email`, `password`, `connecter`, `photo`) VALUES
(82, 'ess', 'ess', 'Ariana', 'ess@yahoo.fr', '25d55ad283aa400af464c76d713c07ad', 0, ''),
(92, 'moussa', 'KEITA', 'Hammamet', 'moussa@guinee.gov', '25d55ad283aa400af464c76d713c07ad', 0, ''),
(93, 'dfdf', 'fsdf', 'Ariana', 'dgsdg@gsdg.tn', '25d55ad283aa400af464c76d713c07ad', 0, ''),
(95, 'dfdf', 'fsdf', 'Sfax', 'dgsdg@gdfghjg.tn', '25f9e794323b453885f5181f1b624d0b', 0, ''),
(96, 'MENDES', 'PARFAIT', 'Sousse', 'MARIE@ESPRIT.tn', 'aadc64662498fa0bfde229df08b47849', 0, ''),
(97, 'Aminata', 'Diallo', 'Djerba', 'oumou@esprit.tn', '25f9e794323b453885f5181f1b624d0b', 0, ''),
(98, 'josehp', 'BONJAWO', 'Monastir', 'joseph@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, 'profil.jpg'),
(114, 'Linda', 'JEDIDI', 'Sfax', 'linda@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, 'profil.jpg'),
(117, 'BallaMoussa', 'KEITA', 'Defau', 'ballamoussa.keita@esprit.tn', 'd41d8cd98f00b204e9800998ecf8427e', 0, ''),
(120, 'barry', 'barry', 'tunis', 'barry@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, 'ballamoussa.jpg'),
(122, 'sarra', 'GHARSALLAH', 'Djerba123', 'sarra.gharsallah@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, 'profil.jpg'),
(137, 'Boris', 'AKAKPO', 'Tunis', 'borisdylan.akakpo@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, ''),
(139, 'Moussa', 'CAMARA', 'Tunis', 'moussa.dansoko@esprit.tn', '25d55ad283aa400af464c76d713c07ad', 0, 'ballamoussa.jpg'),
(140, 'Balla', 'KEITA', 'Tunis', 'ballamou39@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, 'ballamoussa.jpg');

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
(173, '2022-05-06', ' hey test', 455, 'BallaMoussa', 0),
(185, '2022-05-26', 'hey', 380, 'sarra', 122),
(186, '2022-05-26', 'jj', 380, 'sarra', 122),
(188, '2022-05-26', 'moussahhh', 380, 'barry', 120),
(190, '2022-05-26', 'hello', 393, 'barry', 120),
(191, '2022-05-26', 'bonjour', 393, 'barry', 120),
(195, '2022-06-01', 'essai de commentaire', 393, 'Moussa', 139),
(196, '2022-06-01', 'J\'ai adoré le festival de carthage l\'année dernière. J\'irai certainement encore cette année. Viva Tunisia!!', 459, 'Moussa', 139);

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
(0, 4, '2022-05-04', '2022-05-15', NULL, 450),
(7, 3, '2022-04-28', '2022-04-24', 0, 10),
(9, 3, '2022-04-23', '2022-04-19', NULL, 20),
(45, 3, '2022-04-24', '2022-04-29', 0, 16),
(46, 3, '2022-04-24', '2022-04-29', NULL, 16),
(48, 4, '2022-04-28', '2022-04-29', NULL, 6),
(49, 3, '2022-04-22', '2022-05-06', NULL, 8),
(50, 2, '2022-04-24', '2022-05-05', 0, 28),
(52, 8, '2022-05-05', '2022-05-15', 0, 125),
(53, 4, '2022-04-30', '2022-05-02', NULL, 190),
(54, 2, '2022-07-12', '2022-07-19', 0, 92),
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
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_employe`, `firstname`, `lastname`, `ville`, `email`, `password`, `photo`) VALUES
(38, 'Tenen123', 'Kourouma', 'monday', 'tenen@esprit.tn', '123456789', ''),
(39, 'oumar', 'serty', 'drtfgy', 'rftg@gmail.com', '25d55ad283aa400af464c76d713c07ad', '');

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
(0, 1, 32),
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
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `etat` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `message`, `date`, `etat`, `client`) VALUES
(1, 'bonjour, essai de message', '2022-05-30', 1, 120),
(2, 'bonjour, essai de message', '2022-05-30', 1, 120),
(3, 'j\'aimerais sasdgsdfhefh', '2022-05-30', 1, 139),
(4, 'essai envoi de message', '2022-06-01', 1, 139),
(5, 'J\'ai pas recu mes produits', '2022-06-02', 1, 139),
(6, 'zs\'ertfyuhtbhjn', '2022-06-02', 1, 139);

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
(18, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est barry', 1, '2022-05-05 18:11:50'),
(19, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est GHARSALLAH', 1, '2022-05-06 10:28:08'),
(20, 'PUBLICATION:BallaMoussa KEITA vient de publier un temoignage', 1, '2022-05-12 16:38:35'),
(21, 'PUBLICATION:sarra GHARSALLAH vient de publier un temoignage', 1, '2022-05-12 22:04:20'),
(22, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est Keita', 1, '2022-05-12 22:09:03'),
(23, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est KEITA', 1, '2022-05-12 22:28:51'),
(24, 'PUBLICATION:Ibrahim Keita vient de publier un temoignage', 1, '2022-05-12 23:21:18'),
(25, 'PUBLICATION:Linda JEDIDI vient de publier un temoignage', 1, '2022-05-12 23:22:19'),
(26, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est keita', 1, '2022-05-13 09:05:05'),
(27, 'PUBLICATION:sarra GHARSALLAH vient de publier un temoignage', 1, '2022-05-13 09:31:56'),
(28, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est AKAKPO', 1, '2022-05-21 23:07:07'),
(29, 'PUBLICATION:Boris AKAKPO vient de publier un temoignage', 1, '2022-05-21 23:07:59'),
(30, 'PUBLICATION:barry barry vient de publier un temoignage', 1, '2022-05-27 22:32:22'),
(31, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est Dansoko', 1, '2022-05-27 22:47:07'),
(32, 'PUBLICATION:barry barry vient de publier un temoignage', 1, '2022-05-29 14:01:50'),
(33, 'INSCRIPTION:Une personne vient de s\'inscrire sur le site. Son nom est KEITA', 1, '2022-05-31 18:09:14'),
(34, 'PUBLICATION:Moussa CAMARA vient de publier un temoignage', 1, '2022-06-02 12:42:00'),
(35, 'PUBLICATION:Moussa CAMARA vient de publier un temoignage', 1, '2022-06-02 17:41:52');

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
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_pannier` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_pannier`, `nom`, `image`, `prix`, `client`) VALUES
(47, 'Zayn Malik', '../Uploads/Zayn-Malik.png', 20, 120),
(48, 'Mozart', '../Uploads/sac-mozart.png', 50, 120);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `categorie_produit` int(11) NOT NULL,
  `quantite_produit` int(11) NOT NULL,
  `prix_produit` int(11) NOT NULL,
  `image_produit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `categorie_produit`, `quantite_produit`, `prix_produit`, `image_produit`) VALUES
(9, 'Mozart', 3, 25, 50, '../Uploads/2-sac-mozart.png'),
(10, 'Bb king', 1, 13, 35, '../Uploads/bb-king.png'),
(11, 'Johnny Hallyday', 1, 27, 35, '../Uploads/johnny-hallyday.png'),
(12, 'Kendji Girac', 5, 12, 20, '../Uploads/kendji-girac.png'),
(13, 'Michael Jackson', 1, 20, 35, '../Uploads/michael-jackson.png'),
(14, 'Zayn Malik', 5, 11, 20, '../Uploads/Zayn-Malik.png'),
(15, 'Mozart', 3, 9, 50, '../Uploads/sac-mozart.png'),
(16, 'Michael Jackson', 1, 18, 35, '../Uploads/Pull-Michael-Jackson.png'),
(17, 'Produit1', 3, 14, 100, '../Uploads/2-sac-mozart.png');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL,
  `idAchat` int(11) NOT NULL,
  `numSiege` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`idReservation`, `idAchat`, `numSiege`) VALUES
(3, 3, '15'),
(7, 14, '1'),
(8, 53, '34');

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
  `plan` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `carte` varchar(255) NOT NULL,
  `imgportrait` varchar(255) NOT NULL,
  `imglandscape` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `annonce` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `spectacles`
--

INSERT INTO `spectacles` (`spectacleId`, `titre`, `dateSpec`, `adresse`, `hotel`, `resto`, `gare`, `description`, `realisateurs`, `plan`, `video`, `carte`, `imgportrait`, `imglandscape`, `duration`, `annonce`) VALUES
(380, 'Will Smith Comedy', '2022-06-21 23:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' Willard Smith, alias Will Smith (prononcé en anglais : /wɪl smɪθ/1), est un acteur, chanteur, scénariste et producteur de cinéma américain, né le 25 septembre 1968 à Philadelphie2 en Pennsylvanie. Il est l\'un des rares artistes à avoir connu le succès dans trois différents médias de divertissement aux États-Unis et dans le monde : cinéma, télévision et musique. Il est devenu rapidement célèbre en tenant le rôle-titre de la série télévisée Le Prince de Bel-Air au début des années 1990, puis en s\'imposant au cinéma avec quelques blockbusters à succès comme Bad Boys (1995), Independence Day (1996), Men in Black (1997) puis Ennemi d\'État (1998). À la suite du flop de Wild Wild West (1999) [réf. souhaitée], il accepte de tourner dans deux suites : Men in Black 2 (2002) et Bad Boys 2 (2003), mais s\'essaie également à un cinéma plus dramatique : le mélodrame La Légende de Bagger Vance (2001) de Robert Redford puis Ali ..', 'Will Smith      ', 20, 'https://www.youtube.com/embed/myjEoDypUD8', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/will.jpg', 'assets/images/will2.jpg', '45m', 'Rire Comme Jamais'),
(393, 'PNL Tournée', '2022-05-29 22:46:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'PNL (sigle de Peace N’ Lovés) est un groupe de rap français composé de deux frères : Ademo et N.O.S, de leurs vrais noms Tarik et Nabil Andrieu, nés respectivement le 26 décembre 1986 et le 25 avril 19892,3, originaires de la cité des Tarterêts à Corbeil-Essonnes4.\r\n\r\nLe groupe se caractérise par une absence totale d\'interviews dans la presse5, ainsi que par des clips cinématographiques novateurs en France6, tournés à travers le monde (Japon7, États-Unis8, Italie9, Islande10, Afrique du Sud11, Namibie12, Jamaïque13…) dès ses débuts en 2015. \r\n\r\nLe premier album studio du duo, Le Monde Chico, sort en 2015, suivi par Dans la légende en 2016 puis Deux frères en 2019. PNL remportent le prix de la « meilleure création audiovisuelle » lors de l\'édition 2020 des Victoires de la musique, pour le clip du titre Au DD, figurant dans ce dernier album. ', 'Groupe PNL (sigle de Peace N’ Lovés)  composé des frères : Ademo et N.O.S, de leurs vrais noms Tarik et Nabil Andrieu.. ', 100, 'https://www.youtube.com/embed/0UNycii3lSw', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/PNL.jpg', 'assets/images/pnltournee.jpg', '90m', 'La Tendance Francaise'),
(395, 'BTS', '2022-05-07 22:15:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'BTS (hangeul : 방탄소년단, RR : Bangtan Sonyeondan ; kanji : 防弾少年団, rōmaji : Bōdan Shōnendan ; chinois : 防弹少年团, pinyin : Fángdàn Shàonián Tuán) aussi connu sous le nom de Bangtan Boys, est un boys band sud-coréen, originaire de Séoul. Il est formé en 2013 par Big Hit Entertainment et se compose de sept membres : Jin, Suga, J-Hope, RM, Jimin, V et Jungkook.\r\n\r\nLe nom du groupe, Bangtan Sonyeondan, est une combinaison de « 방탄 » qui signifie « pare-balles » et « 소년단 » qui signifie « boy scouts ».\r\n\r\nIls débutent en juin 2013 avec la chanson No More Dream de leur premier album, 2 Cool 4 Skool. Ils remportent le prix du « nouvel artiste de l\'année » lors des MelOn Music Awards 2013, des Golden Disk Awards 2013 et des Seoul Music Awards 2014, où ils gagneront deux bonsang (« grands prix »). En 2016, le groupe gagne son premier daesang (« prix principal ») en étant élu artiste de l\'année aux Mnet Asian Music Awards. ', 'Groupe BTS', 0, 'https://www.youtube.com/embed/jWRMXiHhDjc', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/btsp.jpg', 'assets/images/bts.jpg', '100m', 'Une Touche Koréenne'),
(396, 'Disney On Ice', '2022-05-03 00:27:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', 'Disney on Ice ou World on Ice sont les noms de plusieurs spectacles sur glace donnés par la société Feld Entertainment aux États-Unis et diverses sociétés dans les autres pays sous licence de la Walt Disney Company. Les spectacles sont principalement destinés à un public jeune et comprennent des patineurs en costume de personnages Disney exécutant des figures sur une musique empruntée aux films Disney.\r\n\r\nDe nombreux spectacles sont présentés en même temps sur tous les continents. Il existe aussi des spectacles qui ne se déroulent pas sur la glace et donnés par Feld Entertainment intitulés Disney Live.\r\n\r\nDe nombreux spectacles sont présentés en même temps sur tous les continents. Il existe aussi des spectacles qui ne se déroulent pas sur la glace et donnés par Feld Entertainment intitulés Disney Live... ', 'C\'est Jamel', 0, 'https://www.youtube.com/embed/9erLRuEpdPA', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/disneyl2.jpg', 'assets/images/disneyl2.jpg', '70m', 'Un Tour A Disney'),
(439, 'Wassa\'n Africa', '2022-03-29 21:40:00', 'Municipal Theatre 2 Rue d\'afriqe, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', ' Créé en 2005, Wassa’n Africa est un festival dédié aux cultures africaines.\r\nIl permet au public de découvrir et de voyager le temps d’un week-end au travers de spectacles, stages, concerts, conférences, danses, musiques, marché d’art, artisanat, créateurs, forum d’associations et restauration.\r\nCréé en 2005, Wassa’n Africa est un festival dédié aux cultures africaines.\r\nIl permet au public de découvrir et de voyager le temps d’un week-end au travers de spectacles, stages, concerts, conférences, danses, musiques, marché d’art, artisanat, créateurs, forum d’associations et restauration.', 'Wassan\'n Africa ', 0, 'https://www.youtube.com/embed/pJJBXo0MTBo', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/africa.jpg', 'assets/images/africa.jpg', '45m', 'Un Tour en Afrique'),
(455, 'Arabic Comedy', '2022-06-15 04:44:00', 'Municipal Theatre 2 Rue de Greece, Tunis ', 'Four Seasons', 'Chili\'s, Pizza Hut', 'Gare Centrale', '  Willard Smith, alias Will Smith (prononcé en anglais : /wɪl smɪθ/1), est un acteur, chanteur, scénariste et producteur de cinéma américain, né le 25 septembre 1968 à Philadelphie2 en Pennsylvanie.\r\n\r\nIl est l\'un des rares artistes à avoir connu le succès dans trois différents médias de divertissement aux États-Unis et dans le monde : cinéma, télévision et musique. Il est devenu rapidement célèbre en tenant le rôle-titre de la série télévisée Le Prince de Bel-Air au début des années 1990, puis en s\'imposant au cinéma avec quelques blockbusters à succès comme Bad Boys (1995), Independence Day (1996), Men in Black (1997) puis Ennemi d\'État (1998).\r\nÀ la suite du flop de Wild Wild West (1999) [réf. souhaitée], il accepte de tourner dans deux suites : Men in Black 2 (2002) et Bad Boys 2 (2003), mais s\'essaie également à un cinéma plus dramatique : le mélodrame La Légende de Bagger Vance (2001) de Robert Redford puis Ali ... ', 'Will Smith     ', 400, 'https://www.youtube.com/embed/ArucxnKjG4A', 'https://stay22.com/embed/gm?address=eiffel%20tower%20france', 'assets/images/5.jpg', 'assets/images/banner4.jpg', '45m', 'Un Peu De Magie'),
(459, 'Festival de Carthage', '2022-06-01 13:40:04', 'Tunisie', 'Tunis Palace Hotel', 'Le delice', 'Gare de tunis', 'Considéré comme l\'un des festivals arabes, africains et mondiaux les plus importants, le Festival international de Carthage est abrité par le théâtre antique de Carthage restauré au début du XXe siècle.\r\n\r\nLe festival de Carthage a drainé depuis sa fondation les artistes les plus réputés du monde arabe dont Ali Riahi, Hédi Jouini, Saber Rebaï, Kadhem Saher, Najwa Karam, Warda ou encore Majida El Roumi. Mais le festival va au-delà de la culture arabo-méditerranéenne pour offrir tous genres de créations artistiques. Ainsi, la scène de Carthage a notamment accueilli Youssou N\'Dour mais aussi Dalida, James Brown, Louis Armstrong, Ray Charles, Alpha Blondy, Joe Cocker, Serge Lama, Gérard Lenorman, Charles Aznavour, Julio Iglesias, Stromae, OneRepublic, Jason Derulo ou encore Jamel Debbouze, ainsi que des pièces de théâtre, des danses folkloriques et des ballets. ', 'Peuple Tunisien', 50, 'https://www.youtube.com/embed/c2yXZxoq7RM', 'https://www.stay22.com/embed/62975592ffc48500168a0393', 'assets/images/carthage.jpg', 'assets/images/carthage.jpg', '90', 'Au Pays des Jasmins');

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
(24, 'Good job guys!', 98),
(31, 'Good job guys...I love it!', 122),
(33, 'I use this website everyday.', 114),
(37, 'Bonjour', 120);

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
(395, 1),
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
(380, 1),
(394, 1),
(393, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(393, 1),
(380, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(439, 1),
(439, 1),
(396, 1),
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
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(395, 1),
(395, 1),
(380, 1),
(380, 1),
(380, 1),
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
(380, 1),
(380, 1),
(393, 1),
(393, 1),
(395, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(0, 1),
(0, 1),
(380, 1),
(380, 1),
(111111, 1),
(380, 1),
(380, 1),
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
(394, 1),
(393, 1),
(394, 1),
(393, 1),
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
(394, 1),
(394, 1),
(394, 1),
(395, 1),
(396, 1),
(456, 1),
(380, 1),
(456, 1),
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
(394, 1),
(380, 1),
(380, 1),
(380, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(396, 1),
(393, 1),
(393, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(393, 1),
(394, 1),
(380, 1),
(395, 1),
(394, 1),
(393, 1),
(394, 1),
(380, 1),
(394, 1),
(394, 1),
(394, 1),
(394, 1),
(380, 1),
(380, 1),
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
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
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
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(395, 1),
(395, 1),
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
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(380, 1),
(394, 1),
(396, 1),
(395, 1),
(396, 1),
(394, 1),
(439, 1),
(439, 1),
(439, 1),
(393, 1),
(380, 1),
(455, 1),
(455, 1),
(455, 1),
(380, 1),
(455, 1),
(380, 1),
(393, 1),
(396, 1),
(396, 1),
(395, 1),
(380, 1),
(455, 1),
(455, 1),
(455, 1),
(396, 1),
(396, 1),
(393, 1),
(455, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(396, 1),
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
(393, 1),
(393, 1),
(396, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(393, 1),
(380, 1),
(459, 1),
(459, 1),
(459, 1),
(459, 1),
(459, 1),
(459, 1),
(459, 1),
(459, 1),
(455, 1),
(455, 1),
(439, 1),
(439, 1),
(439, 1),
(393, 1),
(439, 1),
(439, 1),
(380, 1),
(380, 1),
(380, 1),
(380, 1),
(395, 1);

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
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

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
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `fk_message_client` (`client`);

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
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_pannier`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `fk_produits_categories` (`categorie_produit`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `fk_ReservationsAchats` (`idAchat`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `idAchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `avisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idEval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `onlineuser`
--
ALTER TABLE `onlineuser`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_pannier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `spectacles`
--
ALTER TABLE `spectacles`
  MODIFY `spectacleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoignage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_ID_SPECTACLE` FOREIGN KEY (`spectacleId`) REFERENCES `spectacles` (`spectacleId`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_client` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_produits_categories` FOREIGN KEY (`categorie_produit`) REFERENCES `categorie` (`id_cat`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_ReservationsAchats` FOREIGN KEY (`idAchat`) REFERENCES `achats` (`idAchat`);

--
-- Contraintes pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD CONSTRAINT `fk_client_temoignage` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
