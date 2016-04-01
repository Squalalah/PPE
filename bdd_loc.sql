-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 31 Mars 2016 à 17:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd_loc`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) COLLATE utf8_bin NOT NULL,
  `contenu_article` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `contenu_article`) VALUES
(1, 'Les koridaïens sur le tapis de squalala', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ipsum urna, molestie eget odio ut, interdum pharetra massa. Praesent eu gravida lacus, eget vulputate massa. Donec vitae dolor metus. Praesent sit amet mi ut velit accumsan tempus. Etiam nec porttitor nibh, vitae consequat diam. Fusce varius sem nec mi convallis, ac vestibulum sapien volutpat. Mauris ornare mauris fringilla dapibus pharetra. Vivamus dignissim, justo sit amet commodo placerat, sapien sapien pretium massa, in porta tortor eros ut lectus.'),
(2, 'Salut tout le monde c''est Squeezie !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ipsum urna, molestie eget odio ut, interdum pharetra massa. Praesent eu gravida lacus, eget vulputate massa. Donec vitae dolor metus. Praesent sit amet mi ut velit accumsan tempus. Etiam nec porttitor ni');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(11) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `pseudo`, `password`) VALUES
(1, 'anthony', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int(11) NOT NULL AUTO_INCREMENT,
  `nom_marque` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom_marque`) VALUES
(1, 'Nvidia'),
(2, 'MSI'),
(3, 'Acer'),
(4, 'Microsoft'),
(5, 'Adobe'),
(6, 'Wiko');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(100) COLLATE utf8_bin NOT NULL,
  `type_produit` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpt_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `type_produit`, `cpt_produit`) VALUES
(1, 'Nvidia GTX 980ti', 'Carte Graphique', 0),
(2, 'MSI GE72 6QF 011XFR', 'Pc portable Gamer', 0),
(3, 'ACER Ad15', 'PC portable Bureautique', 3),
(4, 'Auchan PC', 'PC fixe', 8),
(5, 'ACER pc', 'pc fixe', 5),
(6, 'XFR 360', 'Processeur', 10);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `titre_ticket` varchar(100) COLLATE utf8_bin NOT NULL,
  `desc_ticket` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_ticket` date NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `titre_ticket`, `desc_ticket`, `date_ticket`, `id_client`) VALUES
(1, 'Probleme avec les Reseau', 'Les reseaux branlent rien.', '2016-03-31', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `ticket-client` FOREIGN KEY (`id_client`) REFERENCES `ticket` (`id_ticket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
