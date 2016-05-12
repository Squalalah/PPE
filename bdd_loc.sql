-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Mai 2016 à 17:08
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
  `NUMARTICLE` int(11) NOT NULL AUTO_INCREMENT,
  `CONTENU` text COLLATE utf8_bin NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_bin NOT NULL,
  `DATEPUBLICATION` datetime NOT NULL,
  `NUMTECH` int(11) NOT NULL,
  PRIMARY KEY (`NUMARTICLE`),
  KEY `NUMTECH` (`NUMTECH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`NUMARTICLE`, `CONTENU`, `TITRE`, `DATEPUBLICATION`, `NUMTECH`) VALUES
(1, 'Bonjour à tous !', 'Bienvenu sur le site', '2016-05-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `NUMCLIENT` int(11) NOT NULL,
  `NOMCLIENT` char(32) DEFAULT NULL,
  `PRENOMCLIENT` char(32) DEFAULT NULL,
  `IDCLIENT` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MDPCLIENT` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MAILCLIENT` char(32) DEFAULT NULL,
  `ADRESSECLIENT` char(32) DEFAULT NULL,
  `CPCLIENT` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMCLIENT`),
  UNIQUE KEY `IDCLIENT` (`IDCLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NUMCLIENT`, `NOMCLIENT`, `PRENOMCLIENT`, `IDCLIENT`, `MDPCLIENT`, `MAILCLIENT`, `ADRESSECLIENT`, `CPCLIENT`) VALUES
(0, 'koridai', 'squalala', 'anthony', '1234', 'rien', 'rien', 'rien'),
(1, 'ABDOUL', 'Jean-Rashid', 'RASHIDO', 'nininininini', 'rashidoooooooo@turlak.noius', '123 rue bidon', '56');

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `NUMTICKET` char(32) NOT NULL,
  `MESSAGETECH` char(32) DEFAULT NULL,
  `MESSAGECLIENT` char(32) DEFAULT NULL,
  `DESCRIPTION` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMTICKET`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE IF NOT EXISTS `garantie` (
  `NUMGARANTIE` int(11) NOT NULL AUTO_INCREMENT,
  `NUMPROD` int(11) NOT NULL,
  `CODEGARANTIE` varchar(32) DEFAULT NULL,
  `NUMCLIENT` int(11) DEFAULT NULL,
  PRIMARY KEY (`NUMGARANTIE`),
  KEY `I_FK_GARANTIE_PRODUIT` (`NUMPROD`),
  KEY `NUMCLIENT` (`NUMCLIENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `garantie`
--

INSERT INTO `garantie` (`NUMGARANTIE`, `NUMPROD`, `CODEGARANTIE`, `NUMCLIENT`) VALUES
(1, 1, '1111-1111-1111-1111', 0);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `NUMMARQUE` int(11) NOT NULL,
  `LIBELLEMARQUE` char(32) DEFAULT NULL,
  `URLMARQUE` text NOT NULL,
  PRIMARY KEY (`NUMMARQUE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`NUMMARQUE`, `LIBELLEMARQUE`, `URLMARQUE`) VALUES
(1, 'Nvidia', 'http://www.nvidia.fr/page/home.html');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `NUMMESSAGE` int(32) NOT NULL AUTO_INCREMENT,
  `NUMTICKET` char(32) NOT NULL,
  `UTILISATEUR` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DESCRIPTION` char(32) DEFAULT NULL,
  `DateMessage` datetime NOT NULL,
  PRIMARY KEY (`NUMMESSAGE`),
  KEY `I_FK_MESSAGE_TICKET` (`NUMTICKET`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`NUMMESSAGE`, `NUMTICKET`, `UTILISATEUR`, `DESCRIPTION`, `DateMessage`) VALUES
(1, '1', 'TECHNICIEN: ', 'i', '2016-05-12 13:44:09');

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

CREATE TABLE IF NOT EXISTS `probleme` (
  `NUMPROB` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLEPROB` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMPROB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `probleme`
--

INSERT INTO `probleme` (`NUMPROB`, `LIBELLEPROB`) VALUES
(1, 'Mon produit est defectueux'),
(2, 'Mon produit ne fonctionne pas'),
(3, 'Autre...');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `NUMPROD` int(11) NOT NULL,
  `NUMTYPE` int(11) NOT NULL,
  `NUMMARQUE` int(11) NOT NULL,
  `LIBELLEPROD` char(32) DEFAULT NULL,
  `OCCURPROD` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMPROD`),
  KEY `I_FK_PRODUIT_TYPEPRODUIT` (`NUMTYPE`),
  KEY `I_FK_PRODUIT_MARQUE` (`NUMMARQUE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`NUMPROD`, `NUMTYPE`, `NUMMARQUE`, `LIBELLEPROD`, `OCCURPROD`) VALUES
(1, 1, 1, 'GTX 1080', '0');

-- --------------------------------------------------------

--
-- Structure de la table `rechercher`
--

CREATE TABLE IF NOT EXISTS `rechercher` (
  `NUMTYPE` int(11) NOT NULL,
  `NUMCLIENT` int(11) NOT NULL,
  PRIMARY KEY (`NUMTYPE`,`NUMCLIENT`),
  KEY `I_FK_RECHERCHER_TYPEPRODUIT` (`NUMTYPE`),
  KEY `I_FK_RECHERCHER_CLIENT` (`NUMCLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialisation`
--

CREATE TABLE IF NOT EXISTS `specialisation` (
  `NUM_SPE` int(11) NOT NULL,
  `NUMTECH` int(11) NOT NULL,
  `LIBELLE_SPE` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUM_SPE`),
  KEY `I_FK_SPECIALISATION_TECHNICIEN` (`NUMTECH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `NUMTECH` int(11) NOT NULL AUTO_INCREMENT,
  `NOMTECH` char(32) DEFAULT NULL,
  `PRENOMTECH` char(32) DEFAULT NULL,
  `IDTECH` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MDPTECH` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `EVALUATION` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMTECH`),
  UNIQUE KEY `IDTECH` (`IDTECH`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`NUMTECH`, `NOMTECH`, `PRENOMTECH`, `IDTECH`, `MDPTECH`, `EVALUATION`) VALUES
(1, 'Koridai', 'Squalala', 'Squalala', '1234', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `NUMTICKET` char(32) NOT NULL,
  `NUMCLIENT` int(11) NOT NULL,
  `NUMPROB` int(11) NOT NULL,
  `NUMPROD` int(11) NOT NULL,
  `NUMTECH` int(11) DEFAULT NULL,
  `DESCRIPTION` char(32) DEFAULT NULL,
  `FINI` char(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`NUMTICKET`),
  KEY `I_FK_TICKET_CLIENT` (`NUMCLIENT`),
  KEY `I_FK_TICKET_PROBLEME` (`NUMPROB`),
  KEY `I_FK_TICKET_PRODUIT` (`NUMPROD`),
  KEY `I_FK_TICKET_TECHNICIEN` (`NUMTECH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`NUMTICKET`, `NUMCLIENT`, `NUMPROB`, `NUMPROD`, `NUMTECH`, `DESCRIPTION`, `FINI`) VALUES
('1', 1, 1, 1, 1, 'A L''AIDE RHALED !', 'n'),
('2', 1, 1, 1, 1, 'NOTICE ME SENPAI', 'n'),
('3', 1, 1, 1, 1, 'NOTICE ME SENPAI', 'o'),
('4', 1, 1, 1, NULL, 'NOTICE ME SENPAI', 'n');

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

CREATE TABLE IF NOT EXISTS `typeproduit` (
  `NUMTYPE` int(11) NOT NULL,
  `LIBELLETYPE` char(32) DEFAULT NULL,
  `OCCURTYPE` char(32) DEFAULT NULL,
  PRIMARY KEY (`NUMTYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeproduit`
--

INSERT INTO `typeproduit` (`NUMTYPE`, `LIBELLETYPE`, `OCCURTYPE`) VALUES
(1, 'chemmy-cherry', '0');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `numtech` FOREIGN KEY (`NUMTECH`) REFERENCES `technicien` (`NUMTECH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`NUMTICKET`) REFERENCES `ticket` (`NUMTICKET`);

--
-- Contraintes pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD CONSTRAINT `garantie_ibfk_1` FOREIGN KEY (`NUMPROD`) REFERENCES `produit` (`NUMPROD`),
  ADD CONSTRAINT `numclient` FOREIGN KEY (`NUMCLIENT`) REFERENCES `client` (`NUMCLIENT`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`NUMTICKET`) REFERENCES `ticket` (`NUMTICKET`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`NUMTYPE`) REFERENCES `typeproduit` (`NUMTYPE`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`NUMMARQUE`) REFERENCES `marque` (`NUMMARQUE`);

--
-- Contraintes pour la table `rechercher`
--
ALTER TABLE `rechercher`
  ADD CONSTRAINT `rechercher_ibfk_1` FOREIGN KEY (`NUMTYPE`) REFERENCES `typeproduit` (`NUMTYPE`),
  ADD CONSTRAINT `rechercher_ibfk_2` FOREIGN KEY (`NUMCLIENT`) REFERENCES `client` (`NUMCLIENT`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`NUMCLIENT`) REFERENCES `client` (`NUMCLIENT`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`NUMPROD`) REFERENCES `produit` (`NUMPROD`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
