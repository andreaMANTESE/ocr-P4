-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 nov. 2019 à 16:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alaska_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `members_id` int(255) NOT NULL,
  `commentaire` text CHARACTER SET latin1 NOT NULL,
  `date_comment` datetime NOT NULL,
  `signaled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `members_id`, `commentaire`, `date_comment`, `signaled`) VALUES
(18, 1, 52, 'J\'ai terminé votre dernier livre des yeux dans la nuit il y a quelques semaines et j\'ai entendu parler de ce blog. Je suis content de savoir qu\'un prochain livre est en préparation ! Intriguant cet article !', '2019-06-11 13:26:25', NULL),
(19, 1, 57, 'Olala encore une enquête qui promet d\'être intéressante ! En plus, j\'adore l\'endroit que vous avez choisi ! J\'y ai déjà passé mes vacances là-bas, c\'est très beau !\r\n ', '2019-04-22 12:44:17', NULL),
(20, 1, 53, 'Premier article de ce blog qui nous plonge déjà dans l\'ambiance ! Jean Forteroche, un des meilleurs dans le domaine du thriller !\r\n', '2019-05-09 21:31:54', NULL),
(21, 1, 60, 'Que va t-il se passer encore ? Hâte d\'en savoir un peu plus ! Ce livre va t-il parler de disparation ou de meurtre ?', '2019-05-31 17:45:44', NULL),
(22, 1, 58, 'Je guète l\'ouverture de ce blog depuis 1 mois, on en entend tellement parler. Concept super original ! Mon livre préféré est Séquestrée, l\'histoire m\'avait tenu en haleine du début à la fin, même si tout les autre ont été également un véritable succès !', '2019-04-15 09:24:24', NULL),
(23, 1, 54, 'Ce premier article me laisse penser que l\'histoire va tourner autour d\'un crime ', '2019-05-01 17:49:55', NULL),
(24, 1, 63, 'Livre qui sera aussi intriguant que les autres, j\'en suis sûr !', '2019-05-25 19:42:40', NULL),
(25, 1, 67, 'Le meurtre, la spécialité de Jean Forteroche ^^ Hâte de lire les articles mois après mois jusqu\'à la sortie du livre !', '2019-05-25 00:00:00', NULL),
(28, 2, 62, 'Un article stressant qui laisse deviner la suite ! ', '2019-04-11 22:57:54', NULL),
(31, 2, 67, 'la suite ! la suite !', '2019-04-14 21:47:49', 0),
(34, 3, 51, 'Ambiance Alaska ^^ ! Les articles déjà postés promettent un futur thriller intéressant et intriguant !', '2019-05-19 20:54:48', NULL),
(35, 0, 66, 'pas mal !', '2019-05-16 17:44:46', 1),
(36, 3, 65, 'Je trouve ça vraiment super que Jean Forteroche se rende carrément en Alaska pour écrire son livre !', '2019-05-20 17:37:54', 1),
(38, 3, 58, 'Excellent détails du lieu !', '2019-05-28 20:50:50', NULL),
(40, 3, 53, 'Excellent extrait!', '2019-05-30 08:17:17', NULL),
(41, 3, 52, 'Des animaux empaillés???? Waouh !', '2019-05-29 20:48:55', NULL),
(42, 3, 63, 'Je commence à m\'ahbituer à lire ces petits articles, je les attends même avec impatience !', '2019-05-29 11:30:30', NULL),
(43, 3, 57, 'Ces passages me donnent envie de replonger dans un des anciens livre de Jean Forteroche ! J\'adore tellement cette ambiance froide et angoissante !', '2019-05-31 21:54:53', NULL),
(44, 3, 60, 'La forêt des ombres est à nouveau mon livre de chevet du soir !', '2019-05-30 20:55:55', NULL),
(45, 3, 61, 'Article trop court ! Je veux deja en savoir plus ! Plus qu\'à attendre le mois prochain pour un nouvel article !', '2019-05-29 15:37:38', NULL),
(46, 2, 58, 'Super top !', '2019-11-18 15:34:53', NULL),
(47, 2, 58, 'C\'est genial !', '2019-11-18 15:19:40', NULL),
(51, 3, 45, 'Interessant ce blog, je découvre Jean Forteroche par un ami et je dois avouer que ces romans sont supers !', '2019-11-18 15:36:23', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
