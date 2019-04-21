

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `CATCode` varchar(32) NOT NULL,
  `CATLibelle` varchar(255) DEFAULT NULL,
  `CATDesc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CATCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



LOCK TABLES `categorie` WRITE;

INSERT INTO `categorie` VALUES ('CONS','CONSOLE','Jeux vid&eacute;o et autres'),('IMAGESON','IMAGE & SON',NULL),('INFORMATIQUE','INFORMATIQUE',NULL),('OBJETSCO','OBJET CONNECTE',NULL),('OCCAS','RECONDITIONNE','occasion'),('ORDI','ORDINATEUR',NULL),('TEL','TELEPHONIE',NULL);

UNLOCK TABLES;



DROP TABLE IF EXISTS `client`;

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
  `CLIZip` int(6) DEFAULT NULL,
  PRIMARY KEY (`CLIId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('4870af656245e90368c23692b83c5d22','vic20016@gmail.com','ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff','2019-04-11','Durand','Victor',NULL,NULL,NULL,NULL),('7108d30cca832696903f02b893b07d70','vic200166@gmail.com','ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff','2019-04-17','Durand','Victor',NULL,NULL,NULL,NULL),('d32ec41050e795aee7aa2b793b6815e6','jules.clear@yahoo.fr','94ce57d3f40928c60f063d1369cb0d8335472d50a3651760ef449a499412ccda7b74f90894e44e8ec6195d7b5903d85b170a64fdb66d37c00118232538971366','2019-04-13','Jules','CLEAR',NULL,NULL,NULL,NULL),('f11bfec3eac5e89b328573f3b1a38a64','alahuhakbar@gmail.com','14a2cf0cd678f79c87b8414da4398175b666ebb412686664072e9671bc8411d6ba4244c59e6354f580a43b4cac4f829432b18560abbcdb516c0c42c5532ab9c1','2019-04-17','alahuhakbar','alahuhakbar',NULL,NULL,NULL,NULL);

UNLOCK TABLES;


DROP TABLE IF EXISTS `commande`;

CREATE TABLE `commande` (
  `COMRef` varchar(32) NOT NULL,
  `COMDate` date DEFAULT NULL,
  `COMPrix` varchar(255) DEFAULT NULL,
  `COMStatus` varchar(255) DEFAULT NULL,
  `COMVille` varchar(255) NOT NULL,
  `COMCP` int(11) NOT NULL,
  `COMAdresse` varchar(255) NOT NULL,
  `COMCliId` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`COMRef`),
  KEY `COMCliId` (`COMCliId`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`COMCliId`) REFERENCES `client` (`CLIId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




LOCK TABLES `commande` WRITE;

INSERT INTO `commande` VALUES ('7a2e7d9354c19489c4bdb7b4200a8b83','2019-04-17','2857','En traitement','Lyon',69002,'58 Rue Pierre Dupont','7108d30cca832696903f02b893b07d70'),('7b7d3363032d3dad5cd9dca979001174','2019-04-17','1159','En traitement','Lyon',69004,'58 rue Pierre Dupont','7108d30cca832696903f02b893b07d70'),('ac030d61588d77ac848424c997551d59','2019-04-17','89951','En traitement','alahuhakbar',38671,'alahuhakbar','f11bfec3eac5e89b328573f3b1a38a64');

UNLOCK TABLES;



DROP TABLE IF EXISTS `lignecommande`;

CREATE TABLE `lignecommande` (
  `LIGNProdCode` varchar(32) NOT NULL,
  `LIGNComRef` varchar(32) NOT NULL,
  `LIGNQte` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LIGNProdCode`,`LIGNComRef`),
  KEY `LIGNComRef` (`LIGNComRef`),
  CONSTRAINT `lignecommande_ibfk_1` FOREIGN KEY (`LIGNProdCode`) REFERENCES `produit` (`PRODRef`),
  CONSTRAINT `lignecommande_ibfk_2` FOREIGN KEY (`LIGNComRef`) REFERENCES `commande` (`COMRef`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `lignecommande` WRITE;

INSERT INTO `lignecommande` VALUES ('AIRPODSV2','7a2e7d9354c19489c4bdb7b4200a8b83','1'),('CASQUESURFACE','7a2e7d9354c19489c4bdb7b4200a8b83','1'),('CASQUESURFACE','ac030d61588d77ac848424c997551d59','1'),('IPHONEXS64AG','ac030d61588d77ac848424c997551d59','7'),('IPHONEXS64GR','7a2e7d9354c19489c4bdb7b4200a8b83','2'),('IPHONEXS64GR','7b7d3363032d3dad5cd9dca979001174','1'),('IPHONEXS64GR','ac030d61588d77ac848424c997551d59','11'),('IPHONEXS64OR','ac030d61588d77ac848424c997551d59','59'),('JBLXTREME','ac030d61588d77ac848424c997551d59','1'),('SAMSUNGGALAXYBUDSJAUNE','ac030d61588d77ac848424c997551d59','1');

UNLOCK TABLES;


DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `PRODRef` varchar(32) NOT NULL,
  `PRODLibelle` varchar(255) DEFAULT NULL,
  `PRODPrix` varchar(255) DEFAULT NULL,
  `PRODDesc` varchar(255) DEFAULT NULL,
  `PRODCatCode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`PRODRef`),
  KEY `PRODCatCode` (`PRODCatCode`),
  CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`PRODCatCode`) REFERENCES `categorie` (`CATCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


LOCK TABLES `produit` WRITE;

INSERT INTO `produit` VALUES ('AIRPODSOCCASION','AIRPODS OCCASION','99','Airpods 1&egrave;re g&eacute;n&eacute;ration en occasion.Etat irr&eacute;prochable.','OCCAS'),('AIRPODSV2','Ecouteurs sans fil Apple AirPods V2 ','179','Activation et connexion automatiques ; Configuration\r\nfacile pour tous vos appareils Apple ; Acc&eacute;dez rapidement à Siri en disant\r\n« Dis Siri » ou en configurant le double toucher ; Touchez deux fois pour\r\nlancer la lecture ou passer au morceau suiv','IMAGESON'),('APPLETV','Apple TV 4K','209','Apple TV 4K, Siri Remote Cordon d’alimentation, Documentation, Câble Lightning vers USB','OBJETSCO'),('APPLEWATCH','APPLE WATCH 3','399','Apple Watch Series 3 (GPS) Boîtier en Aluminium Gris Sid&eacute;ral de 38 mm avec Bracelet Sport Noir','OBJETSCO'),('CASQUESURFACE','Casque Microsoft Surface','360','Surface Headphones vient compl&eacute;ter la famille de produits Surface. Il vous permet d’&eacute;couter votre musique et de passer vos appels confortablement tout au long de la journ&eacute;e. Sa conception ergonomique vous offre une exp&eacute;rience d','IMAGESON'),('GOOGLEHOME','Google home','149','Echo Plus est &eacute;quip&eacute; d&apos;un hub Zigbee int&eacute;gr&eacute; pour configurer et contrôler facilement vos appareils connect&eacute;s compatibles, et vous permet de profiter d&apos;un son am&eacute;lior&eacute; pour &eacute;couter de la mus','OBJETSCO'),('IMACAPPLE','iMac Apple 21,5\"','1700','Haut?parleurs st&eacute;r&eacute;o, Micro, Prise casque 3.5 mm, Prise en charge des &eacute;couteurs iPhone Apple avec micro','INFORMATIQUE'),('IMPRIMANTEHP','Imprimante multifonctions HP','130','Technologie Jet d&apos;encre ( couleur ) HP Thermal Inkjet - 4 encres ; Cycle d&apos;utilisation mensuel (maxi) : 20000 pages ; AirPrint activ&eacute; ; Impression à partir d&apos;un lecteur flash USB, num&eacute;riser vers un dossier, HP ePrint, impressi','INFORMATIQUE'),('IPADAPPLE4','IPAD BLANC Apple','500','&eacute;cran Liquid Retina 12,9 pouces avec technologies ProMotion et True Tone','INFORMATIQUE'),('IPHONEXS64AG','iPhone XS 64Go Argent','1159','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('IPHONEXS64GR','iPhone XS 64Go Gris Sid&eacute;ral','1159','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('IPHONEXS64OR','iPhone XS 64Go Or','1159','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('IPHONEXSMAX64AG','iPhone XS Max 64Go Argent','1259','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('IPHONEXSMAX64GR','iPhone XS Max 64Go Gris Sid&eacute;ral','1259','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('IPHONEXSMAX64OR','iPhone XS Max 64Go Or','1259','Super Retina. En grand. En tr&egrave;s grand. Cr&eacute;&eacute; sp&eacute;cialement, l’&eacute;cran OLED de l’iPhone XS offre les couleurs les plus pr&eacute;cises du march&eacute;, le HDR et des noirs vraiment fid&egrave;les. Et l’iPhone XS Max b&eacute','TEL'),('JBLFLIPOCCASION','JBL FLIP 3 OCCASION','59','JBL FLIP 3 vendu en bon &eacute;tat de couleurs bleu.','OCCAS'),('JBLXTREME','BL Xtreme Bluetooth Noir','199','L&apos;Xtreme JBL est &eacute;quip&eacute;e de 4 haut-parleurs dont 2 boomers passifs pour des basses puissantes. Elle est dot&eacute;e d&apos;une &eacute;norme batterie Li-ion rechargeable de 10000 mAh offrant jusqu&apos;à 15 heures d&apos;autonomie, ave','IMAGESON'),('NINTENDO','NINTENDO SWITCH','99','Rencontrez la Nintendo 2DS, la toute nouvelle console de la famille Nintendo 3DS ! La console portable Nintendo 2DS vous permet d&apos;acc&eacute;der à une myriade de jeux et de fonctions exceptionnels, et vous permet d&apos;entrer en connexion avec vos a','CONS'),('OCCASIONIPAD','IPAD blanc 64Go','299','&eacute;cran Liquid Retina 12,9 pouces avec technologies.','OCCAS'),('PCPortableAcerPredatorHelios','PC Portable Acer','1600','Ecran Acer ComfyView LCD, Technologie IPS (Dalle Mate), Ratio image 16:9, Taux de rafraîchissement : 60Hz, Acer BluelightShield™ (pour att&eacute;nuer la lumi&egrave;re bleue)','INFORMATIQUE'),('PS4','PLAYSTATION 4','299','Si vous n&apos;avez pas encore une PS4 ne tardez plus à l&apos;acheter ! C&apos;est une console qui va vous donner l&apos;acc&egrave;s à une multitude des jeux, qui vont vous ouvrir l&apos;esprit !','CONS'),('PS4OCCASION','PS4 OCCASION','259','PS4 en occasion en parfait &eacute;tat. vendu avec plusieurs jeux.','OCCAS'),('SAMSUNGGALAXYBUDSJAUNE','Ecouteurs sans fil Samsung Jaune','149','Ouvrez l&apos;&eacute;tui pour que les Galaxy Buds s&apos;associent directement à votre produit Galaxy* en un clin d&apos;œil.\r\n\r\n*N&eacute;cessite un smartphone Galaxy avec une version Android 7.1.1 ou sup&eacute;rieure et l&apos;installation de l&apos;a','IMAGESON'),('SOMMEILMONTRE','Bracelet d&apos;Activit&eacute; Goo Sleep Care','79','Bracelet d&apos;Activit&eacute; Goo Sleep Care • Montre Connect&eacute;e pr&eacute;vient Apn&eacute;e du Sommeil • Smartwatch Cardiofr&eacute;quencem&egrave;tre • Tracker Calcule Taux d&apos;O2 dans Le Sang • Podom&egrave;tre &eacute;tanche • Compatible i','OBJETSCO'),('SWITCH','Nintendo switch','329','À la maison, la Nintendo Switch est install&eacute;e dans la station d&apos;accueil Nintendo Switch qui assure sa connexion au t&eacute;l&eacute;viseur, vous permettant de jouer en famille ou avec vos amis dans le confort de votre salon. Il suffit de la r','CONS'),('XBOX','PACK XBOX ONE','499.99','Avec une qualit&eacute; de jeu &eacute;lev&eacute;e, les jeux optimis&eacute;s pour la XBOX One X sont plus performants, ils b&eacute;n&eacute;ficient d’une m&eacute;moire record, d’une meilleure r&eacute;solution ainsi que d’un temps de chargement plus r','CONS');

UNLOCK TABLES;

CREATE TABLE coupon (
  COUPONCode VARCHAR(50) primary key,
  COUPONReduction INT NOT NULL
);

INSERT INTO coupon VALUES ('CHARTREUX25', 25), ('SAVE10', 10);
