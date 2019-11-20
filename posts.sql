-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Septembre 2019 à 13:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `alaska_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `titre`, `texte`, `creation_date`) VALUES
(2, 'Les ombres...(2ème extrait)', 'La nuit commence à se réveiller. Les premières gouttes de pluie tombent dans la forêt de Tongass et viennent terminer leur course sur la parka rouge vif de Cassie.\r\n\r\nElle a les pieds nus, le regard apeuré et essaie de distinguer le moindre bruit. Avec la pluie, difficile de percevoir le moindre bruit de pas dans cette forêt verdoyante, avec ces arbres imposants, les uns comme les autres, ces fougères immenses, ces sapins, maîtres de la forêt qui grince sous le poids du vent. Mais Cassie le sait, il n''est pas loin, il se rapproche.\r\n\r\nElle doit à tout prix se relever de cet arbre gigantesque contre lequel elle s''est adossé pour reprendre son souffle et calmer son esprit, et courir, courir aussi longtemps qu''elle le peut, sans jamais se retourner, dans cette forêt envahie par la nuit noire.', '2019-04-11 07:17:17'),
(3, 'Retour aux sources...(3ème extrait)', 'À son arrivée en Alaska, elle pose son regard sur cette vue dont elle connaît si bien, et l''émerveillement vient s''emparer d''elle.\r\n\r\n\r\nElle repense au bon moments passés ici, à son enfance paisible et joyeuse, à cette maison familiale, ces repas de famille interminable, a ces promenades dans les forêts avec ces sentiers interminables, ces chutes d''eaux de glaciers,le froid qui vient gifler le visage et roser les joues, les gens au franc parler mais en même temps, mystérieux, à ces après-midi dans le pub du père de son ami d''enfance, à siroter une limonade et deguster de delicieux pancakes degoulinants de sirop d''érable, à tendre une oreille pour ecouter les vieilles histoires dans anciens sur les mystères des forêt de cette Etat.\r\n\r\n\r\nMais aussi... À cette histoire tragique, cette histoire qui a chambouler sa vie paisible, et qui, adolescente, la poussée à quitter cet Etat, ces magnifiques paysages... Ce côté, si apaisant de l''Alaska.', '2019-05-16 21:13:12'),
(4, 'Premiers soupçons.... (1er extrait)', 'A l''entrée se tient une jeune femme brune, bien droite pour voir par-dessus le portail en fer, avec un regard noir et perçant à  faire fondre le plus stoïque des hommes. A la vue de Jack, elle s''étire un peu plus en hauteur en se hissant sur la pointe des pieds, la main sur le front pour se protéger de la pluie qui continue de tomber.\r\n- Bonjour ! Monsieur Lubrano ?\r\n- Oui ! Mais excusez-moi je n''ai pas le temps, ni pour des pubs et encore moins si ça concerne une religion.\r\n- Non, non ! Je suis de la police. Je fais une enquête.\r\n- De la police ? Jack ne sait pas que penser. Il a déjà eu à faire aux policiers de Birchs, à ceux de Stevens Village, il ne lui manque plus que la CIA pour compléter le tableau. Alors qu''est-ce que c''est encore que cette nouvelle arrivante ? Il s''approche du portail, la dame a repris sa taille normale, du coup il ne voit plus ses yeux..\r\n- Qu''est-ce qui se passe ? Rien de grave jespère ?\r\n- Rien de grave ! Une enquête de routine! ça vous dérange si on entre cinq minutes, ça ne sera pas long!', '2019-04-14 03:08:08'),
(7, 'titre', '<span style="text-decoration: underline;"><em><strong>je tape un texte</strong></em></span>', '2019-07-25 14:20:45'),
(8, 'titre2', 'texte2', '2019-07-30 15:53:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
