-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 14 Novembre 2018 à 19:06
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecoledb`
--
CREATE DATABASE IF NOT EXISTS `ecoledb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecoledb`;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `idclasse` int(10) unsigned NOT NULL,
  `nom_classe` varchar(45) NOT NULL,
  PRIMARY KEY (`idclasse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`idclasse`, `nom_classe`) VALUES
(1, 'TS1');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `ideleve` int(10) unsigned NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `classe_idclasse` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ideleve`,`classe_idclasse`),
  KEY `fk_eleve_classe_idx` (`classe_idclasse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`ideleve`, `nom`, `prenom`, `date_naissance`, `classe_idclasse`) VALUES
(1, 'diop', 'nogaye', '0000-00-00', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `fk_eleve_classe` FOREIGN KEY (`classe_idclasse`) REFERENCES `classe` (`idclasse`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
