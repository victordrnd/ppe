CREATE TABLE Produit (
PRODRef VARCHAR(32) NOT NULL,
PRODLibelle VARCHAR(255),
PRODPrix VARCHAR(255),
PRODDesc VARCHAR(255),
PRODCatCode VARCHAR(32),
PRIMARY KEY (PRODRef),
FOREIGN KEY (PRODCatCode) REFERENCES Categorie (CATCode)
);

CREATE TABLE Categorie (
CATCode VARCHAR(32) NOT NULL,
CATLibelle VARCHAR(255),
CATDesc VARCHAR(255),
PRIMARY KEY (CATCode)
);

CREATE TABLE Panier (
PANRef VARCHAR(32) NOT NULL,
PANDate VARCHAR(255),
PANCliId VARCHAR(32),
PRIMARY KEY (PANRef),
FOREIGN KEY (PANCliId) REFERENCES Client (CLIId)
);

CREATE TABLE Client (
CLIId VARCHAR(32) NOT NULL,
CLIMail VARCHAR(255),
CLIPassword VARCHAR(255),
CLIDateInscription VARCHAR(255),
CLINom VARCHAR(255),
CLIPrenom VARCHAR(255),
CLIDateNaissance DATE,
CLIVerif INT(1),
CLIAdresse VARCHAR(255),
CLIZip INT(6),
PRIMARY KEY (CLIId)
);

CREATE TABLE Lignecommande (
LIGNPanRef VARCHAR(32) NOT NULL,
LIGNProdCode VARCHAR(255) NOT NULL,
LIGNQuantité VARCHAR(255),
PRIMARY KEY (LIGNPanRef, LIGNProdCode),
FOREIGN KEY (LIGNPanRef) REFERENCES Panier (PANRef),
FOREIGN KEY (LIGNProdCode) REFERENCES Produit (PRODRef)
);

CREATE TABLE Commande (
COMRef VARCHAR(32) NOT NULL,
COMDate DATE,
COMPrix VARCHAR(255),
COMStatus VARCHAR(255),
COMCliId VARCHAR(32),
PRIMARY KEY (COMref),
FOREIGN KEY (COMCliId) REFERENCES Client (CLIId)
);
