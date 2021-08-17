-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 17 août 2021 à 13:17
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

DROP TABLE IF EXISTS `achats`;
CREATE TABLE IF NOT EXISTS `achats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_boutiques` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `date`, `contenu`) VALUES
(1, 'ORGANISER SES VACANCES AVEC SON ANIMAL', '2021-06-22 15:46:24', 'Un des principaux freins à l’adoption et, encore de nos jours, une des raisons principales de l’abandon... est l’organisation des vacances ! Pourtant, il existe de nombreuses solutions pour partir avec ou sans son animal. Il faut juste bien préparer son séjour !'),
(2, '« VERY CAT TRIP », LE NOUVEAU FILM DE LA SPA CONTRE L’ABANDON D’ANIMAUX', '2021-06-22 15:46:24', 'Lorsqu’on parle de l’abandon des animaux en France, c’est très souvent le chien auquel on pense en premier. On imagine un brave toutou attaché à un arbre en bord de forêt ou au lampadaire d’un parking, sous un ciel gris, et attendant sagement que son maître revienne le chercher... Bien que cette image ne soit pas un fantasme, le chat en France détient pourtant la palme en terme d’abandon.'),
(3, '#DEMAINSANSCORRIDA : CRUAUTÉ RECONNUE PAR LA LOI, DIVERTISSEMENT APPROUVÉ !', '2021-06-20 15:47:32', 'À la veille de la reprise de la saison taurine, la SPA pousse un cri d’alarme pour que la corrida soit abolie dans les quelques départements où elle persiste encore au prétexte d’une « tradition locale ininterrompue ». Les faits de « sévices graves et actes de cruauté » envers les animaux sont pourtant punis par la loi : n’y-a-t-il pas une incohérence ?'),
(4, 'MOIS DE L’ADOPTION : 5 QUESTIONS À SE POSER AVANT D’ADOPTER', '2021-06-18 15:48:24', 'Durant ce Mois de l’adoption, la SPA sensibilise les futurs adoptants à l’adoption responsable. L’accueil d’un animal représente un engagement véritable dont il faut prendre en compte toutes les facettes pour que tout se passe sereinement pour l’animal et la famille adoptante.'),
(5, 'LES REFUGES DE DEMAIN', '2021-05-27 15:52:31', 'La Société Protectrice des Animaux a imaginé ses refuges de demain ! Disposant d’un réseau de 62 refuges et Maisons SPA, l’association a travaillé sur un concept de refuge pour les futures constructions. C’est une réflexion de long terme, qui a été menée de façon structurée pour la rendre pérenne.'),
(6, 'UN NOUVEAU CHALET POUR NOS CHATS LIBRES !', '2021-04-26 15:53:55', 'Le refuge SPA de Vallérargues doit très prochainement accueillir une nouvelle population d’environ 25 chats errants sur son site et souhaite pouvoir mettre en place un hébergement approprié.'),
(7, 'SAUVETAGE DE 110 ANIMAUX DANS UN ÉLEVAGE​', '2021-06-16 15:48:47', 'La SPA est intervenue le 26 mars dernier dans un élevage pour sauver près de 110 animaux qui vivaient des conditions invivables. ​'),
(8, 'POUR LE MOIS DE L’ADOPTION, FAITES CONFIANCE À LA SPA', '2021-06-06 15:48:47', 'Le mois de mai donne le coup d’envoi du « Mois de l’adoption » dans les 62 refuges et Maisons SPA. Cet événement printanier, à la veille d’une période estivale qui apportera son lot d’abandons, est l’occasion pour les équipes de l’association de se mobiliser pour sensibiliser le public à l’engagement que représente l’accueil d’un animal.'),
(9, 'INFORMATION COVID', '2021-06-17 15:54:49', 'Suite aux annonces du gouvernement concernant la mise en place de nouvelles restrictions afin de faire face à la crise sanitaire, nous vous informons que le refuge sera fermé au public à partir du 02/04/21 au soir.'),
(10, 'CORRIDA : LA GRANDE OUBLIÉE DES DÉBATS !', '2021-06-14 15:55:08', 'Lorsque l’on se plaît à envisager le futur déconfinement, la reprise des activités, la réouverture des restaurants et des lieux de culture et de loisirs, c’est « le monde d’après » que l’on imagine. Si la crise sanitaire nous a collectivement et individuellement appris beaucoup de choses sur nos sociétés, nos économies et nos modes de fonctionnement, elle a également permis de mettre en lumière des défaillances.  ');

-- --------------------------------------------------------

--
-- Structure de la table `boutiques`
--

DROP TABLE IF EXISTS `boutiques`;
CREATE TABLE IF NOT EXISTS `boutiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `valeurs` float NOT NULL,
  `stocks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boutiques`
--

INSERT INTO `boutiques` (`id`, `type`, `nom`, `valeurs`, `stocks`) VALUES
(1, 'Produits', 'Gel hydroalcoolique 30 ml', 1.3, 13),
(2, 'Produits', 'Gel hydroalcoolique 1 Litre', 8.49, 30),
(3, 'Produits', '4 Flacons de 500ml - Gel Hydroalcoolique Purity', 15.49, 24),
(4, 'Accessoires', '50 masques chirurgicaux bleus', 59.99, 22),
(5, 'Accessoires', 'LOT (10 pcs) Masque CHIRURGICAL ADULTE NOIR', 32.99, 22),
(6, 'Accessoires', 'Thermomètre Frontal Adulte IDOIT Thermometre', 32.99, 13),
(7, 'Produits', 'GEL HYDROALCOOLIQUE 5L AVEC POMPE', 8.19, 112);

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

DROP TABLE IF EXISTS `dons`;
CREATE TABLE IF NOT EXISTS `dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montants` float NOT NULL,
  `date` datetime NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
