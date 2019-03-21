-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 mars 2019 à 08:45
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `CATCode` varchar(32) NOT NULL,
  `CATLibelle` varchar(255) DEFAULT NULL,
  `CATDesc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`CATCode`, `CATLibelle`, `CATDesc`) VALUES
('IMAGESON', 'Image & Son', NULL),
('INFORMATIQUE', 'Informatique', NULL),
('OBJETSCO', 'Objets Connectés', NULL),
('ORDI', 'Ordinateur', NULL),
('TEL', 'Téléphone', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CLIId` varchar(32) NOT NULL,
  `CLIMail` varchar(255) DEFAULT NULL,
  `CLIPassword` varchar(255) DEFAULT NULL,
  `CLIDateInscription` varchar(255) DEFAULT NULL,
  `CLINom` varchar(255) DEFAULT NULL,
  `CLIPrenom` varchar(255) DEFAULT NULL,
  `CLIDateNaissance` date DEFAULT NULL,
  `CLIVerif` int(1) DEFAULT NULL,
  `CLIAdresse` varchar(255) DEFAULT NULL,
  `CLIZip` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `COMRef` varchar(32) NOT NULL,
  `COMDate` date DEFAULT NULL,
  `COMPrix` varchar(255) DEFAULT NULL,
  `COMStatus` varchar(255) DEFAULT NULL,
  `COMCliId` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

CREATE TABLE `lignecommande` (
  `LIGNProdCode` varchar(32) NOT NULL,
  `LIGNComRef` varchar(32) NOT NULL,
  `LIGNQuantité` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `PRODRef` varchar(32) NOT NULL,
  `PRODLibelle` varchar(255) DEFAULT NULL,
  `PRODPrix` varchar(255) DEFAULT NULL,
  `PRODDesc` varchar(255) DEFAULT NULL,
  `PRODCatCode` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`PRODRef`, `PRODLibelle`, `PRODPrix`, `PRODDesc`, `PRODCatCode`) VALUES
('IPHONEXS64AG', 'iPhone XS 64Go Argent', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXS64GR', 'iPhone XS 64Go Gris Sidéral', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXS64OR', 'iPhone XS 64Go Or', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64AG', 'iPhone XS Max 64Go Argent', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64GR', 'iPhone XS Max 64Go Gris Sidéral', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64OR', 'iPhone XS Max 64Go Or', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`CATCode`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIId`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`COMRef`),
  ADD KEY `COMCliId` (`COMCliId`);

--
-- Index pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD PRIMARY KEY (`LIGNProdCode`,`LIGNComRef`),
  ADD KEY `LIGNComRef` (`LIGNComRef`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`PRODRef`),
  ADD KEY `PRODCatCode` (`PRODCatCode`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`COMCliId`) REFERENCES `client` (`CLIId`);

--
-- Contraintes pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD CONSTRAINT `lignecommande_ibfk_1` FOREIGN KEY (`LIGNProdCode`) REFERENCES `produit` (`PRODRef`),
  ADD CONSTRAINT `lignecommande_ibfk_2` FOREIGN KEY (`LIGNComRef`) REFERENCES `commande` (`COMRef`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`PRODCatCode`) REFERENCES `categorie` (`CATCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
