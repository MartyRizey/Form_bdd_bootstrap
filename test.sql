-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 27 Juin 2019 à 12:57
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `identity`
--

CREATE TABLE `identity` (
  `id` int(4) UNSIGNED NOT NULL,
  `familyname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `identity`
--

INSERT INTO `identity` (`id`, `familyname`, `firstname`, `age`, `email`) VALUES
(1, 'TROUASEUR', 'Adam', 38, 'adam.trouaseur@net.sos'),
(2, 'TICOULE', 'Tess', 89, 'tess.ticoule@gamil.com'),
(3, 'VELLE', 'Lara', 29, 'laraVelle@magil.fr'),
(4, 'VELLE', 'Lara', 16, 'velle.lara27@net.sos'),
(5, 'EHOUCESURLKHANAPE', 'Hamed', 47, 'hamedEhoucesurlkhanape@rocam.us'),
(6, 'COVERT', 'Larry', 50, 'larryCovert75@sarip.fr'),
(7, 'TERIEUR', 'Alex', 31, 'dehors@laposte.net'),
(8, 'TERIEUR', 'Alain', 31, 'dedans@laposte.net'),
(9, 'ENTROMBE', 'Adémar', 24, 'ademar.entrombe@turquoise.com'),
(10, 'EOLE', 'Laure', 52, 'parcequejelevauxbien@gamil.com'),
(11, 'OFOTEUIL', 'Amadeus', 19, 'amadeusOfoteuil@turquoise.com'),
(12, 'HARAGOIT', 'Monique', 41, 'monique.haragoit@sarip.fr'),
(17, 'HATEUR', 'Nordine', 21, 'nordine.hateur@laposte.net'),
(18, 'JECSPIRE', 'William', 45, 'william.jecspire@orange.uk'),
(20, 'DEMER', 'Marcel', 71, 'marcelDemer@magil.fr'),
(21, 'DEMER', 'Marcel', 56, 'marcel.demer06@turquoise.com'),
(22, 'CINQUE', 'Renaud', 20, 'renaud5@sarip.fr'),
(23, 'STICKEY', 'Sophie', 36, 'sophie_stickey@net.sos'),
(24, 'LAKREP', 'Suzette', 89, NULL),
(25, 'DEMER', 'Marcelle', 68, 'marcelleDemer@free.fr'),
(26, 'DEMER', 'Marine', 35, 'marine.demer06@free.fr'),
(27, 'BEAUQUAIS', 'Bill', 22, 'bill.beauquais@magil.fr'),
(28, 'HYÉNE', 'César', 16, 'cesar.hyene@net.sos'),
(30, 'ZOUDANLCOU', 'Debbie', 32, 'debie.zoudanlcou@smack.com'),
(31, 'TOTO', 'Tata', 3, ''),
(33, 'AMBAR', 'Oscar', 50, 'oscar.ambar@laposte.net'),
(38, 'DEJEUX', 'Odette', 112, 'odette.dejeux@net.sos'),
(41, 'LOPIN', 'Olga', 46, ''),
(42, 'NORD', 'Paul', 23, ''),
(43, 'PAIRE', 'Noël', 100, ''),
(44, 'HAUCHON', 'Paul', 63, ''),
(45, 'MAGINO', 'Pauline', 36, 'pauline.magino@free.fr'),
(46, 'BUFFALO', 'Bill', 102, ''),
(47, 'DARMERY', 'Jean', 36, 'pas de mail...'),
(48, 'DAIVAN', 'Rose', 59, 'pas d\'e-mail...'),
(49, 'ALEURE', 'Emile', 48, 'pas d\'email...'),
(50, 'FONCEK', 'Sophie', 28, 'charcuterie@free.fr'),
(51, 'CLOISON', 'Tabatha', 0, 'pas d\\\'email...'),
(52, 'SUFFY', 'Sam', 41, 'sam.suffy@laposte.net'),
(53, 'GIRARD', 'Dominique', 45, 'pas d\'email...'),
(54, 'MENVU', 'Gerard', 61, 'gerard.menvu@magil.fr'),
(57, 'VIGOTE', 'Sarah', 29, 'sarah.vigote@smack.com'),
(58, 'PARTOU', 'Djemal', 99, 'ail.ouille@net.sos'),
(59, 'ALENVAIRE', 'Elvis', 0, 'labricole@orange.uk'),
(60, 'SAIPRIERE', 'Heidi', 49, 'amennnn@smack.com'),
(61, 'AMETTO', 'Lucie', 35, 'lucie.ametto@orange.fr'),
(62, 'PANCUIR', 'Leslie', 35, ''),
(63, 'PANCUIR', 'Leslie', 35, ''),
(64, 'LIPP', 'Hans', 36, 'Pas d\'email...'),
(65, 'DALORS', 'Homer', 89, 'Pas d\'email...'),
(66, 'STIKERE', 'Helmut', 57, 'Pas d\'email...'),
(67, 'DANLECHOU', 'Inés', 1, 'Pas d\'email...'),
(68, 'BRAYE', 'Jean', 56, 'Pas d\'email...'),
(69, 'BRAYE', 'Jean', 56, 'Pas d\'email...'),
(70, 'TOTO', 'Mobile', 56, 'Pas d\'email...'),
(71, 'RIZEY', 'Marty', 58, 'Pas d\'email...'),
(72, 'FRAIMIDOREUR', 'Jean', 29, 'Pas d\'email...'),
(73, 'PONS', 'PIerre', 49, 'pierrepons@free.fr'),
(74, 'DUCHITE', 'Odile', 89, ''),
(75, 'HERME', 'Olaf', 0, 'olafherme@free.fr'),
(76, 'OUAQUE', 'THomas', 0, 'thomasouaque@orange.fr'),
(77, 'ALAITAGE', 'Thimothée', 0, 'timotheealaitage@sfr.fr'),
(78, 'COVERT', 'Larry', 0, 'larrycovert@sfr.fr'),
(79, 'GENCIL', 'Tony', 0, 'tony.gencil@magil.fr'),
(80, 'TRUAND', 'Tony', 0, 'tony.turand@gratos.fr'),
(81, 'TRUAND', 'Tony', 54, 'tonytruand@free.fr'),
(82, 'TOIRDÉGRAND', 'Théodore', 17, 'theodoretoirdegrand@gamil.fr'),
(83, 'toto', 'toto', 0, ''),
(84, 'TUTU', 'Tutu', 45, 'Pas d\'email...'),
(85, 'TORDERIR', 'Ness', 29, 'Pas d\'email...'),
(86, 'DEURIR', 'Nestor', 0, 'Pas d\'email...'),
(87, 'NORRIS', 'Chuck', 75, 'chucknono@gmail.us'),
(88, 'DEBOIS', 'Sylvester', 45, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
