-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 14 Décembre 2023 à 00:57
-- Version du serveur: 4.1.22
-- Version de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(30) NOT NULL default '',
  `mot2pass` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`login`, `mot2pass`) VALUES
('admin@gmail.com', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cin` int(8) NOT NULL default '0',
  `nom` varchar(15) NOT NULL default '',
  `prenom` varchar(15) NOT NULL default '',
  `numdossier` int(15) NOT NULL default '0',
  `datenaiss` date NOT NULL default '0000-00-00',
  `adresse` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`cin`),
  KEY `cin` (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `numdossier`, `datenaiss`, `adresse`) VALUES
(101112131, 'Leroy', 'Thomas', 151, '1975-09-08', '12 Rue des Arts, Nan'),
(111222333, 'Dubois', 'Marie', 101, '1993-11-30', '10 Rue du Commerce'),
(181920212, 'Robert', 'Nicolas', 181, '1999-01-20', '25 Rue de la Nature');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL auto_increment,
  `CinCli` int(11) default NULL,
  `nomCli` varchar(20) NOT NULL default '',
  `nomProd` varchar(20) NOT NULL default '',
  `idProd` int(11) default NULL,
  `dateCommande` date default NULL,
  `total` decimal(10,2) default NULL,
  `statut` varchar(50) default NULL,
  `modePaiement` varchar(50) default NULL,
  `adresseLivraison` varchar(255) default NULL,
  `dateLivraison` date default NULL,
  PRIMARY KEY  (`idCommande`),
  KEY `CinCli` (`CinCli`),
  KEY `idProd` (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `CinCli`, `nomCli`, `nomProd`, `idProd`, `dateCommande`, `total`, `statut`, `modePaiement`, `adresseLivraison`, `dateLivraison`) VALUES
(4, 101112131, 'Ahmed', 'Huile pour Cheveux', 3, '2023-01-01', 50.00, 'en cours', 'Carte de crédit', 'Adresse de livraison 1', '2023-01-10'),
(5, 111222333, 'Ali', 'Creme hydratent', 4, '2023-02-05', 30.50, 'En cours', 'PayPal', 'Adresse de livraison 2', '2023-02-15'),
(6, 181920212, 'Same', 'Huile Kaviare', 5, '2023-03-10', 75.99, 'En cours', 'Virement bancaire', 'Adresse de livraison 3', '2023-03-20');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int(11) NOT NULL auto_increment,
  `libelle` varchar(255) NOT NULL default '',
  `description` text,
  `prix` decimal(10,2) NOT NULL default '0.00',
  `quantite` int(11) NOT NULL default '0',
  `img` varchar(255) default NULL,
  PRIMARY KEY  (`idProd`),
  KEY `idProd` (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idProd`, `libelle`, `description`, `prix`, `quantite`, `img`) VALUES
(3, 'Complément alimentaire multivitaminé', 'Boostez votre énergie avec ces vitamines essentielles', 14.99, 20, 'p3'),
(4, 'Savon bio à aloès vera', 'Savon doux enrichi à aloès vera pour une peau saine', 9.99, 40, 'p4'),
(5, 'Masque capillaire réparateur', 'Masque nourrissant pour des cheveux soyeux et réparés', 29.99, 60, 'p5'),
(6, 'Huile essentielle de lavande', 'Huile relaxante pour diffuseur', 39.99, 25, 'p6'),
(7, 'Baume à lèvres hydratant', 'Baume à lèvres pour des lèvres douces et hydratées', 4.99, 35, 'p7'),
(8, 'Crème hydratante visage', 'Une crème légère et hydratante pour le visage', 24.99, 50, 'p2'),
(9, 'Crème anti-âge', 'Réduisez les signes de l''âge avec cette crème puissante', 39.99, 30, 'p8');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `nom` varchar(30) NOT NULL default '',
  `mail` varchar(30) NOT NULL default '',
  `message` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`nom`, `mail`, `message`) VALUES
('tyghbv tfhg', 'iheb@gmail.com', 'n'),
('Yassine', 'yassine@gmail.com', 'jdjdjj bhhdhhd bgdgdggd'),
('wejden', 'wejden@gmail', 'as as as');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`CinCli`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `produit` (`idProd`) ON DELETE CASCADE ON UPDATE CASCADE;
