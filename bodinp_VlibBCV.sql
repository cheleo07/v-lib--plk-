-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 27 Septembre 2019 à 16:54
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bodinp_VlibBCV`
--

-- --------------------------------------------------------

--
-- Structure de la table `ABONNE`
--

CREATE TABLE `ABONNE` (
  `CODEACCES` int(4) NOT NULL,
  `CODESECRET` int(4) NOT NULL,
  `CODEA` int(4) NOT NULL,
  `DATEDEBABON` date DEFAULT NULL,
  `DATEFINABON` date DEFAULT NULL,
  `CREDITTEMPS` int(2) DEFAULT NULL,
  `MONTANTADEBITER` decimal(13,2) DEFAULT NULL,
  `TYPEUTILISATEUR` char(32) DEFAULT NULL,
  `NOM` varchar(128) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ABONNEMENT`
--

CREATE TABLE `ABONNEMENT` (
  `CODEA` int(4) NOT NULL,
  `LIBELLEA` char(32) DEFAULT NULL,
  `DURÉEA` int(4) DEFAULT NULL,
  `MONTANTA` decimal(13,2) DEFAULT NULL,
  `CREDITTEMPSBASSE` int(4) DEFAULT NULL,
  `TARIFHORAIRE` decimal(13,2) DEFAULT NULL,
  `CAUTION` decimal(13,2) DEFAULT NULL,
  `TYPEA` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `DATEL`
--

CREATE TABLE `DATEL` (
  `DATEL` date NOT NULL,
  `HEURE` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ETATPLOT`
--

CREATE TABLE `ETATPLOT` (
  `NUMS` int(4) NOT NULL,
  `NUMP` int(4) NOT NULL,
  `HEURE` time NOT NULL,
  `DATEM` date NOT NULL,
  `ETATP` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ETATSTATION`
--

CREATE TABLE `ETATSTATION` (
  `NUMS` int(4) NOT NULL,
  `HEURE` time NOT NULL,
  `DATEM` date NOT NULL,
  `ETATS` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ETATVELO`
--

CREATE TABLE `ETATVELO` (
  `NUMV` int(4) NOT NULL,
  `HEURE` time NOT NULL,
  `DATEM` date NOT NULL,
  `ETATV` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `LOUER`
--

CREATE TABLE `LOUER` (
  `NUMV` int(4) NOT NULL,
  `CODEACCES` int(4) NOT NULL,
  `CODESECRET` int(4) NOT NULL,
  `DATEL` date NOT NULL,
  `HEURE` time NOT NULL,
  `TEMPSLOCATION` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `PLOT`
--

CREATE TABLE `PLOT` (
  `NUMS` int(4) NOT NULL,
  `NUMP` int(4) NOT NULL,
  `NUMV` int(4) DEFAULT NULL,
  `ETAT` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `STATION`
--

CREATE TABLE `STATION` (
  `NUMS` int(4) NOT NULL,
  `ETATS` char(255) DEFAULT NULL,
  `NOMS` char(255) DEFAULT NULL,
  `SITUATIONS` char(255) DEFAULT NULL,
  `CAPACITES` int(4) DEFAULT NULL,
  `NUMBOME` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `CODEACCES` int(4) NOT NULL,
  `CODESECRET` int(4) NOT NULL,
  `TYPEUTILISATEUR` char(32) DEFAULT NULL,
  `NOM` varchar(128) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `VELO`
--

CREATE TABLE `VELO` (
  `NUMV` int(4) NOT NULL,
  `NUMP` int(4) DEFAULT NULL,
  `NUMS` int(4) DEFAULT NULL,
  `ETATV` char(255) DEFAULT NULL,
  `DMEC` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ABONNE`
--
ALTER TABLE `ABONNE`
  ADD PRIMARY KEY (`CODEACCES`,`CODESECRET`),
  ADD KEY `I_FK_ABONNE_ABONNEMENT` (`CODEA`);

--
-- Index pour la table `ABONNEMENT`
--
ALTER TABLE `ABONNEMENT`
  ADD PRIMARY KEY (`CODEA`);

--
-- Index pour la table `DATEL`
--
ALTER TABLE `DATEL`
  ADD PRIMARY KEY (`DATEL`,`HEURE`);

--
-- Index pour la table `ETATPLOT`
--
ALTER TABLE `ETATPLOT`
  ADD PRIMARY KEY (`NUMS`,`NUMP`,`HEURE`,`DATEM`),
  ADD KEY `I_FK_ETATPLOT_PLOT` (`NUMS`,`NUMP`);

--
-- Index pour la table `ETATSTATION`
--
ALTER TABLE `ETATSTATION`
  ADD PRIMARY KEY (`NUMS`,`HEURE`,`DATEM`),
  ADD KEY `I_FK_ETATSTATION_STATION` (`NUMS`);

--
-- Index pour la table `ETATVELO`
--
ALTER TABLE `ETATVELO`
  ADD PRIMARY KEY (`NUMV`,`HEURE`,`DATEM`),
  ADD KEY `I_FK_ETATVELO_VELO` (`NUMV`);

--
-- Index pour la table `LOUER`
--
ALTER TABLE `LOUER`
  ADD PRIMARY KEY (`NUMV`,`CODEACCES`,`CODESECRET`,`DATEL`,`HEURE`),
  ADD KEY `I_FK_LOUER_VELO` (`NUMV`),
  ADD KEY `I_FK_LOUER_ABONNE` (`CODEACCES`,`CODESECRET`),
  ADD KEY `I_FK_LOUER_DATE` (`DATEL`,`HEURE`);

--
-- Index pour la table `PLOT`
--
ALTER TABLE `PLOT`
  ADD PRIMARY KEY (`NUMS`,`NUMP`),
  ADD UNIQUE KEY `I_FK_PLOT_VELO` (`NUMV`),
  ADD KEY `I_FK_PLOT_STATION` (`NUMS`);

--
-- Index pour la table `STATION`
--
ALTER TABLE `STATION`
  ADD PRIMARY KEY (`NUMS`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`CODEACCES`,`CODESECRET`);

--
-- Index pour la table `VELO`
--
ALTER TABLE `VELO`
  ADD PRIMARY KEY (`NUMV`),
  ADD UNIQUE KEY `I_FK_VELO_PLOT` (`NUMS`,`NUMP`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ABONNE`
--
ALTER TABLE `ABONNE`
  ADD CONSTRAINT `FK_ABONNE_ABONNEMENT` FOREIGN KEY (`CODEA`) REFERENCES `ABONNEMENT` (`CODEA`),
  ADD CONSTRAINT `FK_ABONNE_UTILISATEUR` FOREIGN KEY (`CODEACCES`,`CODESECRET`) REFERENCES `UTILISATEUR` (`CODEACCES`, `CODESECRET`);

--
-- Contraintes pour la table `ETATPLOT`
--
ALTER TABLE `ETATPLOT`
  ADD CONSTRAINT `FK_ETATPLOT_PLOT` FOREIGN KEY (`NUMS`,`NUMP`) REFERENCES `PLOT` (`NUMS`, `NUMP`);

--
-- Contraintes pour la table `ETATSTATION`
--
ALTER TABLE `ETATSTATION`
  ADD CONSTRAINT `FK_ETATSTATION_STATION` FOREIGN KEY (`NUMS`) REFERENCES `STATION` (`NUMS`);

--
-- Contraintes pour la table `ETATVELO`
--
ALTER TABLE `ETATVELO`
  ADD CONSTRAINT `FK_ETATVELO_VELO` FOREIGN KEY (`NUMV`) REFERENCES `VELO` (`NUMV`);

--
-- Contraintes pour la table `LOUER`
--
ALTER TABLE `LOUER`
  ADD CONSTRAINT `FK_LOUER_ABONNE` FOREIGN KEY (`CODEACCES`,`CODESECRET`) REFERENCES `ABONNE` (`CODEACCES`, `CODESECRET`),
  ADD CONSTRAINT `FK_LOUER_DATE` FOREIGN KEY (`DATEL`,`HEURE`) REFERENCES `DATEL` (`DATEL`, `HEURE`),
  ADD CONSTRAINT `FK_LOUER_VELO` FOREIGN KEY (`NUMV`) REFERENCES `VELO` (`NUMV`);

--
-- Contraintes pour la table `PLOT`
--
ALTER TABLE `PLOT`
  ADD CONSTRAINT `FK_PLOT_STATION` FOREIGN KEY (`NUMS`) REFERENCES `STATION` (`NUMS`),
  ADD CONSTRAINT `FK_PLOT_VELO` FOREIGN KEY (`NUMV`) REFERENCES `VELO` (`NUMV`);

--
-- Contraintes pour la table `VELO`
--
ALTER TABLE `VELO`
  ADD CONSTRAINT `FK_VELO_PLOT` FOREIGN KEY (`NUMS`,`NUMP`) REFERENCES `PLOT` (`NUMS`, `NUMP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
