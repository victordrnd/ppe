-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 mars 2019 à 11:39
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

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
('AIRPODSOCCASION', 'AIRPODS OCCASION', '99.99', 'Airpods 1ère génération en occasion.Etat irréprochable.', 'OCCAS'),
('AIRPODSV2', 'Ecouteurs sans fil Apple AirPods V2 ', '179.99', 'Activation et connexion automatiques ; Configuration\r\nfacile pour tous vos appareils Apple ; Accédez rapidement à Siri en disant\r\n« Dis Siri » ou en configurant le double toucher ; Touchez deux fois pour\r\nlancer la lecture ou passer au morceau suivant ; R', 'IMAGESON'),
('APPLETV', 'Apple TV 4K', '209.99', 'Apple TV 4K, Siri Remote Cordon d’alimentation, Documentation, Câble Lightning vers USB', 'OBJETSCO'),
('APPLEWATCH', 'APPLE WATCH 3', '399.99', 'Apple Watch Series 3 (GPS) Boîtier en Aluminium Gris Sidéral de 38 mm avec Bracelet Sport Noir', 'OBJETSCO'),
('CASQUESURFACE', 'Casque Microsoft Surface', '360.99', 'Surface Headphones vient compléter la famille de produits Surface. Il vous permet d’écouter votre musique et de passer vos appels confortablement tout au long de la journée. Sa conception ergonomique vous offre une expérience d’écoute immersive. Contrôlez', 'IMAGESON'),
('GOOGLEHOME', 'Google home', '149.99', 'Echo Plus est équipé d\'un hub Zigbee intégré pour configurer et contrôler facilement vos appareils connectés compatibles, et vous permet de profiter d\'un son amélioré pour écouter de la musique en streaming.', 'OBJETSCO'),
('IMACAPPLE', 'iMac Apple 21,5\"', '1700', 'Haut?parleurs stéréo, Micro, Prise casque 3.5 mm, Prise en charge des écouteurs iPhone Apple avec micro', 'INFORMATIQUE'),
('IMPRIMANTEHP', 'Imprimante multifonctions HP', '130', 'Technologie Jet d\'encre ( couleur ) HP Thermal Inkjet - 4 encres ; Cycle d\'utilisation mensuel (maxi) : 20000 pages ; AirPrint activé ; Impression à partir d\'un lecteur flash USB, numériser vers un dossier, HP ePrint, impression directe sans fil, compatib', 'INFORMATIQUE'),
('IPADAPPLE4', 'IPAD BLANC Apple', '500', 'Écran Liquid Retina 12,9 pouces avec technologies ProMotion et True Tone', 'INFORMATIQUE'),
('IPHONEXS64AG', 'iPhone XS 64Go Argent', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXS64GR', 'iPhone XS 64Go Gris Sidéral', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXS64OR', 'iPhone XS 64Go Or', '1159', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64AG', 'iPhone XS Max 64Go Argent', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64GR', 'iPhone XS Max 64Go Gris Sidéral', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('IPHONEXSMAX64OR', 'iPhone XS Max 64Go Or', '1259', 'Super Retina. En grand. En très grand. Créé spécialement, l’écran OLED de l’iPhone XS offre les couleurs les plus précises du marché, le HDR et des noirs vraiment fidèles. Et l’iPhone XS Max bénéficie d’un écran aux dimensions inédites sur iPhone.', 'TEL'),
('JBLFLIPOCCASION', 'JBL FLIP 3 OCCASION', '59.99', 'JBL FLIP 3 vendu en bon état de couleurs bleu.', 'OCCAS'),
('JBLXTREME', 'BL Xtreme Bluetooth Noir', '199.99', 'L\'Xtreme JBL est équipée de 4 haut-parleurs dont 2 boomers passifs pour des basses puissantes. Elle est dotée d\'une énorme batterie Li-ion rechargeable de 10000 mAh offrant jusqu\'à 15 heures d\'autonomie, avec deux ports de recharge USB. Elle intègre égale', 'IMAGESON'),
('NINTENDO', 'NINTENDO SWITCH', '99.99', 'Rencontrez la Nintendo 2DS, la toute nouvelle console de la famille Nintendo 3DS ! La console portable Nintendo 2DS vous permet d\'accéder à une myriade de jeux et de fonctions exceptionnels, et vous permet d\'entrer en connexion avec vos amis et de partici', 'CONS'),
('OCCASIONIPHONEX', 'IPHONE X OCCASION', '589.99', 'IPHONE X 128Go couleurs Gold en très bon état.', 'OCCAS'),
('PCPortableAcerPredatorHelios', 'PC Portable Acer', '1600', 'Ecran Acer ComfyView LCD, Technologie IPS (Dalle Mate), Ratio image 16:9, Taux de rafraîchissement : 60Hz, Acer BluelightShield™ (pour atténuer la lumière bleue)', 'INFORMATIQUE'),
('PS4', 'PLAYSTATION 4', '299.99', 'Si vous n\'avez pas encore une PS4 ne tardez plus à l\'acheter ! C\'est une console qui va vous donner l\'accès à une multitude des jeux, qui vont vous ouvrir l\'esprit !', 'CONS'),
('PS4OCCASION', 'PS4 OCCASION', '259.99', 'PS4 en occasion en parfait état. vendu avec plusieurs jeux.', 'OCCAS'),
('SAMSUNGGALAXYBUDSJAUNE', 'Ecouteurs sans fil Samsung Jaune', '149.99', 'Ouvrez l\'étui pour que les Galaxy Buds s\'associent directement à votre produit Galaxy* en un clin d\'œil.\r\n\r\n*Nécessite un smartphone Galaxy avec une version Android 7.1.1 ou supérieure et l\'installation de l\'application SmartThings. Si la fenêtre pop-up n', 'IMAGESON'),
('SOMMEILMONTRE', 'Bracelet d\'Activité Goo Sleep Care', '79.99', 'Bracelet d\'Activité Goo Sleep Care • Montre Connectée prévient Apnée du Sommeil • Smartwatch Cardiofréquencemètre • Tracker Calcule Taux d\'O2 dans Le Sang • Podomètre Étanche • Compatible iOS Android', 'OBJETSCO'),
('SWITCH', 'Nintendo switch', '329.99', 'À la maison, la Nintendo Switch est installée dans la station d\'accueil Nintendo Switch qui assure sa connexion au téléviseur, vous permettant de jouer en famille ou avec vos amis dans le confort de votre salon. Il suffit de la retirer de la station d\'acc', 'CONS'),
('XBOX', 'PACK XBOX ONE', '499.99', 'Avec une qualité de jeu élevée, les jeux optimisés pour la XBOX One X sont plus performants, ils bénéficient d’une mémoire record, d’une meilleure résolution ainsi que d’un temps de chargement plus rapide pour ton plus grand plaisir !', 'CONS');

--
-- Index pour les tables déchargées
--

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
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`PRODCatCode`) REFERENCES `categorie` (`CATCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
