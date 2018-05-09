-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 09 mai 2018 à 16:28
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testtechnique`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `NumCompte` int(11) NOT NULL AUTO_INCREMENT,
  `Identifiant` varchar(255) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`NumCompte`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`NumCompte`, `Identifiant`, `MotDePasse`, `Admin`) VALUES
(1, 'Bernard1234', '$2y$10$wmjEIiNt.OU..loVymnK8uOW25TlVnk7DuU5W0TrYJ51f8W0dooYa', 1),
(6, 'Eric1234', '$2y$10$jAqq90sMSxK8VWDR4G0KTeTJyq.KOUiurvWVR0H7sEQw1zoqSMw9.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demandeintervention`
--

DROP TABLE IF EXISTS `demandeintervention`;
CREATE TABLE IF NOT EXISTS `demandeintervention` (
  `IdIntervention` int(11) NOT NULL AUTO_INCREMENT,
  `NomUtilisateur` varchar(255) NOT NULL,
  `Bureau` varchar(255) NOT NULL,
  `Probleme` varchar(500) NOT NULL,
  `PannePoste` varchar(500) DEFAULT NULL,
  `Description` varchar(1000) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  PRIMARY KEY (`IdIntervention`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demandeintervention`
--

INSERT INTO `demandeintervention` (`IdIntervention`, `NomUtilisateur`, `Bureau`, `Probleme`, `PannePoste`, `Description`, `Statut`) VALUES
(5, 'Eric', 'B54', 'Une imprimante', 'Imprimante ', 'Manque encre noir', 'En cours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
