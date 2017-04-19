-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 19 Avril 2017 à 08:19
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_econnect`
--

-- --------------------------------------------------------

--
-- Structure de la table `activités`
--

CREATE TABLE `activités` (
  `id` int(11) NOT NULL,
  `Texte` varchar(100) NOT NULL,
  `Photo` blob NOT NULL,
  `Vidéo` blob NOT NULL,
  `Date` date NOT NULL,
  `Likes` int(255) NOT NULL,
  `Hates` int(255) NOT NULL,
  `Loves` int(255) NOT NULL,
  `Laughs` int(255) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Accessibilité` int(3) NOT NULL COMMENT '1: Public ; 2: amis ; 3: lui_meme'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `id` int(11) NOT NULL COMMENT 'id utilisateur',
  `id2` int(11) NOT NULL COMMENT 'id amis',
  `Mail2` varchar(100) NOT NULL COMMENT 'Mail ami'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `Nom` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Lieu` varchar(100) NOT NULL,
  `Début` time(6) NOT NULL,
  `Fin` time(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Mdp` varchar(10) NOT NULL COMMENT 'Lettres uniquement, max 10',
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Pays` varchar(100) NOT NULL,
  `Photo_profil` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Mail`, `Mdp`, `Nom`, `Prenom`, `Sexe`, `Date_de_naissance`, `Ville`, `Pays`, `Photo_profil`) VALUES
(7, 'briacboulet@gmail.com', 'asseline19', 'BOULET', 'Briac', 'Homme', '1994-05-20', 'Paris', 'France', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activités`
--
ALTER TABLE `activités`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
