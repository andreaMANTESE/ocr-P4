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
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `alias`, `mail`, `pass`, `date_inscription`, `role`) VALUES
(45, 'Helena', 'helena@moi.com', '$2y$10$C90NKPX0kIUgqs7ifuRIrOmCiFKlYqpa0hgYNNHDkjUqUynls/Ska', '2019-04-18', 'user'),
(50, 'Laura', 'laura@moi.com', '$2y$10$et.PnpkN50b3Bc7fXudtveAv4VdtQMrFhNd8dNuy/vDNbI/uWhKZm', '2019-05-01', 'user'),
(51, 'bruno', 'bruno@moi.com', '$2y$10$vNUgIsrzlp/1Rm477f11pOBTTAxLmHy73so7/DjdbrsY.9T5TCYn2', '2019-05-30', 'user'),
(52, 'Julien', 'julien@moi.com', '$2y$10$Dr8xont1OJcCvSv2MCOdRuHCYWWMwKbz3WN04CFhP1MTA2lwQwVLu', '2019-06-11', 'user'),
(53, 'Marie', 'marie@moi.com', '$2y$10$W1431CPVNXkrR.cHB8Xd5ebNRsTVg38H9crhs7L.zSfDOBBdbxxKK', '2019-05-09', 'user'),
(54, 'Sebastien', 'sebastien@moi.com', '$2y$10$crDT5rP4ZbT7ySrCFG8r/erQ3OpH9y2WxmtdYKAwFw.RLrk1Htc06', '2019-05-01', 'user'),
(55, 'Ida', 'ida@moi.com', '$2y$10$jdbRH5WEHiK/ZPnMbNThRem93hUE4RIWvI/77E2KoXpSIROVh6kju', '2019-05-17', 'user'),
(56, 'Antoine', 'antoine@moi.com', '$2y$10$TSKuXvt3rlXM6z3H9UOJoOW2EU.c2BXP0O3AjV6o6SrDpYqIiFLUi', '2019-06-01', 'user'),
(57, 'Lucie', 'lucie@moi.com', '$2y$10$wLTvsiwXAuvCmBhgGpGICOu0yxye.dVXWpYzm9QkDzBLIUoeJ9Kmq', '2019-04-22', 'user'),
(58, 'Benoît', 'benoit@moi.com', '$2y$10$zpV7NhRr/ZKQavk9Yb1jHu7ATAt5gtpbacrsQ0/MibdP0dsP9ARGO', '2019-04-15', 'user'),
(59, 'Paul', 'paul@moi.com', '$2y$10$lKBMkSRDUlBX.QfI9RofDOZyu1sOeWWr//Z2RzJunDgyeQs7SR9pG', '2019-06-09', 'user'),
(60, 'Aline', 'aline@moi.com', '$2y$10$VF0gWxfwsXa2Zpc6jp9h5uGzpXPc6gY/ehEEtkDtRUNdgP3LA.bk2', '2019-05-30', 'user'),
(61, 'Clara', 'clara@moi.com', '$2y$10$lfr46Th8UubvF/YDuxJjku4MYefbLLdiMo2C3UZUF2Thj3V9Mub9K', '2019-05-08', 'user'),
(62, 'Martin', 'martin@moi.com', '$2y$10$WOBDW6oRasnJFQ4DG.otOugw58rxi9JYTFvtNacMITKcFSODYin.u', '2019-04-10', 'user'),
(63, 'Sally', 'sally@moi.com', '$2y$10$VFEfPjZEaUeMNYjVfTPBB.kwminCrWrOsCSufYm83MlQ1U08V9QEG', '2019-05-23', 'user'),
(64, 'Paloma', 'paloma@moi.com', '$2y$10$4YQRGOXIgWLbdVggLCKVbeV9eeTvvU0eCYbH4nM1PvtmAJXJUJyuO', '2019-05-28', 'user'),
(65, 'Daniel', 'daniel@moi.com', '$2y$10$g78T8rZeLI1zwlTcqjMuy.cYlWvdvhmev.8m/5JwXy.fXaP/HLgW6', '2019-06-01', 'user'),
(66, 'Laurent', 'laurent@moi.com', '$2y$10$hrFUJdcmVePH3ZxMZQusreg5nVrgKBhTvKTu7ajRGIkgHVcGpLAj.', '2019-06-02', 'user'),
(67, 'Audrey', 'audrey@moi.com', '$2y$10$OX29YmYy.3LIsGmN.Nplqe.RwsuLPqYaNQo9QTNQiWsPMBKh3U5P2', '2019-05-08', 'user'),
(76, 'Jean Forteroche', 'jeanforteroche@moi.com', '$2y$10$lNwZT7lbOB.CImjLxKPXHepEmraMinJAxn2eo6AGa4OvYRENQRfve', '2019-07-01', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
