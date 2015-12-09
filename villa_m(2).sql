-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 26 Février 2014 à 15:09
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `villa_m`
--
CREATE DATABASE IF NOT EXISTS `villa_m` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `villa_m`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `user`, `mdp`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `codepostal` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `codepostal`, `ville`, `adresse`, `telephone`, `mail`, `message`) VALUES
(1, 'Stark', 'Ned', '81100', 'Winterfell', '9 bis rue des coccinelles', '02 54 85 78 75', 'nedstark@king.com', 'lorem lipsum'),
(2, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(3, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(4, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(5, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(6, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(7, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dqsdqsdqsd'),
(8, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dsqdqdqd'),
(9, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dsqdqdqd'),
(10, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dsqdqdqd'),
(11, 'ttthh', ',nb,b', '45400', 'sqdqsdqsd', 'dsqdqsd', '02.54.52.52.52', '', 'dsqdqdqd');

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `alt` varchar(45) DEFAULT NULL,
  `lang_id` int(11) NOT NULL,
  `id_photo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_description_lang1_idx` (`lang_id`),
  KEY `fk_description_photo1_idx` (`id_photo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Contenu de la table `description`
--

INSERT INTO `description` (`id`, `description`, `alt`, `lang_id`, `id_photo`) VALUES
(5, 'fqsfqsf', 'vuygvuy', 1, 3),
(16, '', '', 1, 13),
(17, '', '', 2, 13),
(18, '', '', 1, 14),
(19, '', '', 2, 14),
(24, 'Lit de la chambres agapante', 'litagapantes', 1, 17),
(25, 'bedd', 'bed', 2, 17),
(28, 'Salles de bain de la chambres agapantes', 'salle', 1, 19),
(29, 'Bathroom', 'bathroom', 2, 19),
(30, 'Deuxieme lit', 'dazdaz', 1, 20),
(31, 'dazdad', 'adzda', 2, 20),
(32, 'Douche', 'douche', 1, 21),
(33, 'shower', 'shower', 2, 21),
(34, 'salle de bain', 'sallesdebain', 1, 22),
(35, 'bathroom', 'bathroom', 2, 22),
(36, 'lit iris', 'lit', 1, 23),
(37, 'iris bed', 'bed', 2, 23),
(38, 'Lit', 'lit ', 1, 24),
(39, 'bed iris', 'bed', 2, 24),
(40, 'vue chambre mimosa', 'chambremimosa', 1, 25),
(41, 'bedroom', 'bed', 2, 25),
(42, 'lit mimosas', 'lit', 1, 26),
(43, 'bedroom', 'bed', 2, 26),
(44, 'douche mimosas', 'douche', 1, 27),
(45, 'shower', 'shower', 2, 27),
(46, 'salles de bain palmiers', 'salles de bain', 1, 28),
(47, 'shower palmiers', 'shower', 2, 28),
(48, 'chambres palmiers', 'chambres', 1, 29),
(49, 'bedroom palmier', 'bedroom', 2, 29),
(50, 'chambres reseda', 'chambres', 1, 30),
(51, 'reseda bed', 'bed', 2, 30),
(52, 'dzadza', '', 1, 31),
(53, '', '', 2, 31),
(54, '', '', 1, 32),
(55, '', '', 2, 32),
(56, '', '', 1, 33),
(57, '', '', 2, 33),
(58, '', '', 1, 34),
(59, '', '', 2, 34),
(60, '', '', 1, 35),
(61, '', '', 2, 35),
(62, '', '', 1, 36),
(63, '', '', 2, 36),
(64, '', '', 1, 37),
(65, '', '', 2, 37),
(66, '', '', 1, 38),
(67, '', '', 2, 38),
(70, '', '', 1, 40),
(71, '', '', 2, 40),
(72, '', '', 1, 41),
(73, '', '', 2, 41),
(74, '', '', 1, 42),
(75, '', '', 2, 42),
(76, '', '', 1, 43),
(77, '', '', 2, 43),
(78, '', '', 1, 44),
(79, '', '', 2, 44),
(80, '', '', 1, 45),
(81, '', '', 2, 45),
(82, '', '', 1, 46),
(83, '', '', 2, 46),
(84, '', '', 1, 47),
(85, '', '', 2, 47),
(86, '', '', 1, 48),
(87, '', '', 2, 48),
(88, '', '', 1, 49),
(89, '', '', 2, 49),
(90, '', '', 1, 50),
(91, '', '', 2, 50),
(92, '', '', 1, 51),
(93, '', '', 2, 51),
(94, '', '', 1, 52),
(95, '', '', 2, 52),
(96, '', '', 1, 53),
(97, '', '', 2, 53),
(98, '', '', 1, 54),
(99, '', '', 2, 54),
(100, '', '', 1, 55),
(101, '', '', 2, 55),
(102, '', '', 1, 56),
(103, '', '', 2, 56),
(104, '', '', 1, 57),
(105, '', '', 2, 57),
(114, '', '', 1, 62),
(115, '', '', 2, 62);

-- --------------------------------------------------------

--
-- Structure de la table `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lang`
--

INSERT INTO `lang` (`id`, `libelle`, `code`) VALUES
(1, 'francais', 'fr'),
(2, 'Anglais', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `contenu` text,
  `description` varchar(45) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `lang_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Page_lang_idx` (`lang_id`),
  KEY `fk_parent_idx` (`id_parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `titre`, `title`, `contenu`, `description`, `id_menu`, `id_parent`, `lang_id`) VALUES
(1, 'Accueil', 'dazdazd', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1>La villa Bellavista</h1>\r\n<p>Cette superbe villa pouvant accueillir jusqu''&agrave; 11 personnes est entour&eacute;e d''un parc ombrag&eacute; de 2000 m&sup2;, elle est situ&eacute;e entre mer et montagne dans un quartier priv&eacute; d''Antibes calme et tranquille. Une ligne r&eacute;guli&egrave;re de bus assure l''acc&egrave;s aux plages et &agrave; tous les commerces du centre ville,&agrave; deux pas de Nice et de son a&eacute;roport,de Cannes et de Saint Paul de Vence.</p>\r\n</body>\r\n</html>', 'fazfzafaffzaf', 0, NULL, 1),
(4, 'La villa', '', 'dzadazda', 'dzadzad', 3, NULL, 1),
(5, 'Les services', '', '<ul>\r\n<li>La liste des services est &eacute;volutive et tenue &agrave; jour r&eacute;guli&egrave;rement</li>\r\n<li>Simone organise, si vous le souhaitez, votre r&eacute;ception &agrave; l''a&eacute;roport. Elle vous aidera dans vos d&eacute;marches : taxi, courses, m&eacute;nage.</li>\r\n<li>Je vous fournirai une liste des restaurants de qualit&eacute; de la r&eacute;gion</li>\r\n<li>Sortie vers le Marineland et les parcs d''attractions.</li>\r\n<li>Vous trouverez un golf &agrave; BIOT &agrave; quelques minutes de la villa</li>\r\n<li>Vie nocturne de Juan les Pins en Juillet et Ao&ucirc;t : Casinos, jeux,</li>\r\n<li>Randonn&eacute;es dans la massif du Mercantour.</li>\r\n</ul>', 'zadzaddza', 0, NULL, 1),
(7, 'Propriété', '', '	<p >La villa de construction traditionnelle est située dans un grand parc arboré d''''essences méditerranéennes de 2000 m², sans vis à vis, cachée dans un écrin de verdure. De toutes les pièces vous avez un vue panoramique sur la baie des Anges et sur les Alpes.</p>', 'dzada', 2, NULL, 1),
(8, 'Piscine', '', '<p >La très grande piscine d''été de 12 m sur 7,50 m, ensoleillée du matin au soir dont la profondeur varie de 1,50 m à 3,20 m vous apporte le confort constant de baignades sécurisées. Vous pourrez profiter sur les bords de la piscine des équipements extérieurs : salon de jardin, teck, barbecue, four à pizza transats, pool house, plages bois de 50m2</p>', 'piscine', 2, NULL, 1),
(9, 'Chambres', '', 'chambres', 'chambres', 1, NULL, 1),
(10, 'Salles a vivres', '', '<p>Un grand salon et une salle à manger ouverts au sud vers la mer occupent le rez de chaussée. Une grande cuisine parfaitement équipée assure un confort inégalé. Toutes les pièces de cet étage s''ouvrent sur une grande terrasse et bénéficient d''''une vue magnifique sur mer et montagne.</p>', 'Salles a vivres', 2, NULL, 1),
(11, 'Home', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1>Villa Bellavista</h1>\r\n<p dir="ltr" style="line-height: 1.11; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>\r\n<p dir="ltr" style="line-height: 1.11; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>\r\n<p><span style="font-size: 13px; font-family: Arial; color: #000000; background-color: transparent; font-weight: normal; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Surrounded by a 2000 square meters shady garden, this astonishing villa welcomes up to 11 persons.It is situated between sea and mountain in a private, quiet and peaceful neighborhood of Antibes.</span><strong style="font-weight: normal;"><br /></strong></p>\r\n<p dir="ltr" style="line-height: 1.11; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13px; font-family: Arial; color: #000000; background-color: transparent; font-weight: normal; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">A regular bus line guarantees the beach&rsquo;s and shop&rsquo;s access. Numerous shops are located in the city center.</span></p>\r\n<p><strong id="docs-internal-guid-353ce2f1-6d22-03d6-cf90-dc9ec5a3bd53" style="font-weight: normal;"><span style="font-size: 13px; font-family: Arial; color: #000000; background-color: transparent; font-weight: normal; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Villa BellaVista is nearby Nice and its airport, Cannes and Saint Paul de Vence.</span></strong></p>\r\n</body>\r\n</html>', 'en', 0, 1, 2),
(12, 'La chambre Agapante', '', '<p>La chambre AGAPANTE située au rez de chaussée est équipée d''un lit de 140x200 et de meubles d''époques, elle s''ouvre vers la terrasse et la piscine. Une salle de bain attenante équipée d''une douche à jets complète l''ensemble.</p>', 'dd', 4, NULL, 1),
(13, 'La chambre iris', '', '<p>La chambre IRIS située au premier étage est équipée d''un lit double 140x200, elle s''ouvre vers la terrasse du premier étage. Une grande salle de bain complète l''équipement de l''étage.</p>', NULL, 4, NULL, 1),
(14, 'La chambre mimosa', '', '<p>La chambre MIMOSAS située à l''étage est équipée d''''un lit double 140x200 et d''un cabinet de toilette avec douche. De la terrasse située au même étage vous avez une vue exceptionnelle.\n</p>', NULL, 4, NULL, 1),
(15, 'La chambre palmier', '', '<p>La chambre PALMIERS est équipée d''un lit de 140x200 et d''''un lit de 90x140, elle se situe au rez-de-jardin, au même niveau que la piscine, une cuisine américaine et les équipements sanitaires complets (salle de bain, WC) constituent un studio indépendant.</p>', NULL, 4, NULL, 1),
(16, 'Tourisme', 'Tourisme', '<p>A 10 km seulement de la Méditerranée, bâti sur un socle rocheux à 800 m d''altitude,Gourdon domine la Vallée du Loup.Le panorama s''étale sur 80 km de Nice à Théoule.</p>', NULL, 5, NULL, 1),
(17, 'Tourisme', 'Tourisme', '<p>Le village historique de Saint Paul de Vence, ceint de remparts illuminés et dominant les vallées, prête à la contemplation. Entre chiner et farniente, il offre, de jour comme de nuit, diversité, étonnement et abrite des tables gourmandes, ateliers d''''artistes , boutiques de décoration.Et bien sur son celèbre terrain de boules '',</p>', NULL, 5, NULL, 1),
(18, 'Tourisme', 'tourisme', '<p>Le marché provençal du cours Masséna étale chaque matin ses riches éventaires, festival de senteurs et d''''accent. Joyau médiéval,idéalement situé à l''est d''''Antibes, Biot a su préserver une qualité de vie et une identité héritée de l''histoire et de l''''artisanat de création. Eloi Monod à l''''origine de la tradition du verre soufflé, a apporté une dynamique artistique, que l''on retrouve dans les ateliers de verrerie, poterie, céramique et joaillerie. </p>', NULL, 5, NULL, 1),
(19, 'Contact', '', NULL, '0', NULL, NULL, 1),
(20, 'La chambre Reseda', '', 'dddd', NULL, 4, NULL, 1),
(21, 'The property ', '', '<p>dqdqs</p>', NULL, NULL, 7, 2),
(22, 'The swimming-pool', 'The swimming-pool ', 'ddd', NULL, NULL, 8, 2),
(23, 'The AGAPANTE bedroom', '', 'zdfef', NULL, 0, 12, 2),
(24, 'the RESEDA bedroom', '', NULL, NULL, NULL, 20, 2),
(25, 'The IRIS bedroom', '', 'ddd', NULL, NULL, 13, 2),
(26, 'The MIMOSA bedroom', '', NULL, NULL, NULL, 14, 2),
(27, 'The PALMIERS bedroom', '', NULL, NULL, NULL, 15, 2),
(28, 'the RESEDA bedroom ', '', NULL, NULL, NULL, 20, 2),
(29, 'Living rooms', '', NULL, NULL, NULL, 10, 2),
(30, 'Tarifs', '', '<table border="0" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td>Par nuit&eacute;</td>\r\n<td>350e-715e</td>\r\n</tr>\r\n<tr>\r\n<td>Par semaine</td>\r\n<td>3598e-5005e</td>\r\n</tr>\r\n<tr>\r\n<td>Par mois</td>\r\n<td>7800e-12804e</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<div class="l">\r\n<ul>\r\n<li>Les tarifs sont modifi&eacute;s pendant le Festival Cannes.</li>\r\n<li>Conditions de r&eacute;servation et de r&egrave;glement: 25% &agrave; la reservation, solde 15 jours avant l''arriv&eacute;e, r&egrave;glements par virements bancaires.</li>\r\n<li>Les tarifs sont modifi&eacute;s pendant le Festival Cannes.</li>\r\n<li>Les tarifs sont modifi&eacute;s pendant le Festival Cannes.</li>\r\n</ul>\r\n</div>', NULL, 0, NULL, 1),
(32, 'Tourisme', '', '<p>Le port de cannes</p>', NULL, 5, NULL, 1),
(33, 'Contact', '', NULL, NULL, 7, NULL, 1),
(34, 'Services', '', '<ul>\r\n<li>Simone could meet you at the airport. She may help you in your approach : taxi, shopping, household</li>\r\n<li>I will give you a list of good restaurants in the area</li>\r\n<li>Voyages arranged to Marineland and entertainment park</li>\r\n<li>You will find a golf in BIOT few minutes from the villa</li>\r\n<li>Night life in Juan les pins in July and August Casio, games</li>\r\n<li>Walking in the Massif du Mercantour</li>\r\n</ul>', NULL, NULL, 5, 2),
(35, 'Tariffs', '', '<table border="0" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td>Overnight stay (EUR)</td>\r\n<td>350e-715&euro;</td>\r\n</tr>\r\n<tr>\r\n<td>Weekly</td>\r\n<td>3598&euro;-5005&euro;</td>\r\n</tr>\r\n<tr>\r\n<td>Monthly</td>\r\n<td>7800&euro;-12804&euro;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<div class="l">\r\n<ul>\r\n<li>Tariffs are modified during the &ldquo;Festival de Cannes&rdquo;.</li>\r\n<li>Bokoing and settlement condition : 25% at the booking , balance 15 days before arrival, settlements by bank transfer.</li>\r\n<li>Tariffs are modified during the &ldquo;Festival de Cannes&rdquo;.</li>\r\n<li>Tariffs are modified during the &ldquo;Festival de Cannes&rdquo;.</li>\r\n</ul>\r\n</div>', NULL, NULL, 30, 2);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idphoto` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(45) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `Page_id` int(11) NOT NULL,
  PRIMARY KEY (`idphoto`),
  KEY `fk_photo_Page1_idx` (`Page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`idphoto`, `chemin`, `thumb`, `Page_id`) VALUES
(3, 'img/salles.jpg', '', 5),
(13, 'img/1393321529.jpg', 'img/thumb_1393321529.jpg', 1),
(14, 'img/1393319592.jpg', 'img/thumb_1393319592.jpg', 1),
(17, 'img/1393353561.jpg', 'img/thumb_1393353561.jpg', 12),
(19, 'img/1393354068.jpg', 'img/thumb_1393354068.jpg', 12),
(20, 'img/1393354103.jpg', 'img/thumb_1393354103.jpg', 12),
(21, 'img/1393354125.jpg', 'img/thumb_1393354125.jpg', 12),
(22, 'img/1393354242.jpg', 'img/thumb_1393354242.jpg', 13),
(23, 'img/1393354257.jpg', 'img/thumb_1393354257.jpg', 13),
(24, 'img/1393354275.jpg', 'img/thumb_1393354275.jpg', 13),
(25, 'img/1393354304.jpg', 'img/thumb_1393354304.jpg', 14),
(26, 'img/1393354325.jpg', 'img/thumb_1393354325.jpg', 14),
(27, 'img/1393354342.jpg', 'img/thumb_1393354342.jpg', 14),
(28, 'img/1393354381.jpg', 'img/thumb_1393354381.jpg', 15),
(29, 'img/1393354402.jpg', 'img/thumb_1393354402.jpg', 15),
(30, 'img/1393354509.jpg', 'img/thumb_1393354509.jpg', 20),
(31, 'img/1393357890.jpg', 'img/thumb_1393357890.jpg', 7),
(32, 'img/1393357895.jpg', 'img/thumb_1393357895.jpg', 7),
(33, 'img/1393357901.jpg', 'img/thumb_1393357901.jpg', 7),
(34, 'img/1393357906.jpg', 'img/thumb_1393357906.jpg', 7),
(35, 'img/1393357912.jpg', 'img/thumb_1393357912.jpg', 7),
(36, 'img/1393357922.jpg', 'img/thumb_1393357922.jpg', 7),
(37, 'img/1393357928.jpg', 'img/thumb_1393357928.jpg', 7),
(38, 'img/1393357935.jpg', 'img/thumb_1393357935.jpg', 7),
(40, 'img/1393357948.jpg', 'img/thumb_1393357948.jpg', 7),
(41, 'img/1393357973.jpg', 'img/thumb_1393357973.jpg', 7),
(42, 'img/1393357981.jpg', 'img/thumb_1393357981.jpg', 7),
(43, 'img/1393357986.jpg', 'img/thumb_1393357986.jpg', 7),
(44, 'img/1393358848.jpg', 'img/thumb_1393358848.jpg', 8),
(45, 'img/1393358851.jpg', 'img/thumb_1393358851.jpg', 8),
(46, 'img/1393358855.jpg', 'img/thumb_1393358855.jpg', 8),
(47, 'img/1393358860.jpg', 'img/thumb_1393358860.jpg', 8),
(48, 'img/1393358866.jpg', 'img/thumb_1393358866.jpg', 8),
(49, 'img/1393358870.jpg', 'img/thumb_1393358870.jpg', 8),
(50, 'img/1393358875.jpg', 'img/thumb_1393358875.jpg', 8),
(51, 'img/1393363686.jpg', 'img/thumb_1393363686.jpg', 10),
(52, 'img/1393363690.jpg', 'img/thumb_1393363690.jpg', 10),
(53, 'img/1393363694.jpg', 'img/thumb_1393363694.jpg', 10),
(54, 'img/1393363699.jpg', 'img/thumb_1393363699.jpg', 10),
(55, 'img/1393363704.jpg', 'img/thumb_1393363704.jpg', 10),
(56, 'img/1393363708.jpg', 'img/thumb_1393363708.jpg', 10),
(57, 'img/1393363713.jpg', 'img/thumb_1393363713.jpg', 10),
(62, 'img/1393401494.jpg', 'img/thumb_1393401494.jpg', 33);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `fk_description_lang1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_description_photo1` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`idphoto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `fk_Page_lang` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_parent` FOREIGN KEY (`id_parent`) REFERENCES `page` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_Page1` FOREIGN KEY (`Page_id`) REFERENCES `page` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
