-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 mai 2024 à 10:13
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quickquery`
--

-- --------------------------------------------------------

--
-- Structure de la table `alert`
--

DROP TABLE IF EXISTS `alert`;
CREATE TABLE IF NOT EXISTS `alert` (
  `user_id` int NOT NULL,
  `question_id` bigint NOT NULL,
  KEY `user_id` (`user_id`,`question_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `user_id` int NOT NULL,
  `question_id` bigint NOT NULL,
  KEY `user_id` (`user_id`,`question_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `scheduled_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `title`, `description`, `scheduled_at`, `created_at`, `author`) VALUES
(4, 'dsfsdf', 'sdfsdfsdf', '2024-05-27 15:45:00', '2024-05-28 14:04:59', 1),
(5, 'dsfsdf', 'sdfsdfsdf', '2024-05-27 15:45:00', '2024-05-28 14:04:59', 1),
(6, 'Comment coder en JS via une app API GoogleMaps ?', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '2024-05-27 15:45:00', '2024-05-28 14:06:08', 1),
(7, 'Comment coder en JS via une app API GoogleMaps ?', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '2024-05-27 15:45:00', '2024-05-28 14:06:08', 1),
(8, 'Comment utilisez twig pour faire une sauce grabiche ?', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '2024-05-27 15:45:00', '2024-05-28 14:07:45', 1),
(9, 'Comment coder en nocode ?', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '2024-05-27 15:45:00', '2024-05-28 14:12:29', 1),
(10, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:26:37', 1),
(11, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:37:08', 1),
(12, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:39:56', 1),
(13, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:40:05', 1),
(14, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:41:56', 1),
(15, 'J\'insere des tags dans la database et je sais pas comment faire ?', 'Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet', '2024-05-27 15:45:00', '2024-05-28 14:42:04', 1),
(16, 'aaaaa aaaaaaaaaa aa aaaa', 'aaaaa aaaaaaaaaa aa aaaaaaaaa aaaaaaaaaa aa aaaaaaaaa aaaaaaaaaa aa aaaaaaaaa aaaaaaaaaa aa aaaaaaaaa aaaaaaaaaa aa aaaaaaaaa aaaaaaaaaa aa aaaa', '2024-05-27 15:45:00', '2024-05-28 14:42:49', 1),
(17, 'Est ce que c\'est bien de faire du php ?', 'Lorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmv', '2024-05-27 15:45:00', '2024-05-29 10:23:33', 1),
(18, 'Un test de question depuis le change TEXT du champ description et du charset utf8mb4...', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', '2024-05-27 15:45:00', '2024-05-29 12:26:46', 1),
(19, 'fdsdfs sdf sdf sdf sdf', 'fdsfsdfsfsd fsd fsdfsf', '2024-05-27 15:45:00', '2024-05-29 17:14:56', 1),
(20, 'hfghfg', 'hfghfgdf dfg dfg dfg', '2024-05-27 15:45:00', '2024-05-29 18:25:51', 1),
(21, 'aaaaaa  aa aaa', 'aaaaaaaaaaaaaaaa   a a a aa aaa', '2024-05-27 15:45:00', '2024-05-29 18:57:09', 1),
(22, 'J\'inzcire une super bquesiotn', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', '2024-05-27 15:45:00', '2024-05-30 14:10:00', 1),
(23, 'qsdqsd', 'qsdqsdqsd', '2024-05-27 15:45:00', '2024-05-30 15:48:32', 1),
(24, 'Une question vraiment super sur le CSS !', 'Lorem ipsum dolor sitt amtLorem ipsum dolor sitt amtLorem ipsum dolor sitt amtLorem ipsum dolor sitt amtLorem ipsum dolor sitt amt', '2024-05-27 15:45:00', '2024-05-30 16:18:37', 1),
(25, 'Comment faire une pate à crepe en CSS ?', 'lorem ipsum dolor it amt ,ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt ipsum dolor it amt', '2024-05-27 15:45:00', '2024-05-31 10:07:36', 1),
(26, 'Ceci n\'est pas une question', 'Lorem ipsum bla blaLorem ipsum bla blaLorem ipsum bla blaLorem ipsum bla blaLorem ipsum bla blaLorem ipsum bla bla', '2024-05-31 18:00:00', '2024-05-31 11:23:06', 1),
(27, 'fdgdfgdfgdf gd', 'd fgdf gdfg df gdfg', '2024-05-31 14:30:00', '2024-05-31 11:24:14', 1),
(28, 'Ceci n\'est pas une autre quesiton', 'fqdfsdf sdf sdf dsf sdf sd', '0000-00-00 00:00:00', '2024-05-31 11:57:58', 1),
(29, 'qsdqs', 'dqs qsd qsd qsd', '0000-00-00 00:00:00', '2024-05-31 11:59:33', 1),
(30, 'dfsdf sd', 'f sdf sd fsd fsdf', '0000-00-00 00:00:00', '2024-05-31 12:00:30', 1),
(31, 'aaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbb', '2024-05-31 14:00:00', '2024-05-31 12:06:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `question_tag`
--

DROP TABLE IF EXISTS `question_tag`;
CREATE TABLE IF NOT EXISTS `question_tag` (
  `question_id` bigint NOT NULL,
  `tag_id` int NOT NULL,
  KEY `question_id` (`question_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question_tag`
--

INSERT INTO `question_tag` (`question_id`, `tag_id`) VALUES
(16, 2),
(16, 3),
(16, 4),
(17, 2),
(17, 4),
(18, 2),
(18, 4),
(19, 2),
(19, 4),
(20, 1),
(20, 3),
(21, 1),
(21, 4),
(22, 3),
(22, 4),
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(23, 6),
(23, 7),
(24, 1),
(24, 4),
(25, 1),
(25, 3),
(25, 4),
(26, 2),
(26, 3),
(26, 4),
(27, 2),
(28, 1),
(28, 3),
(29, 2),
(30, 2),
(30, 3),
(31, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'php'),
(2, 'css'),
(3, 'html'),
(4, 'javascript'),
(5, 'react'),
(6, 'react router'),
(7, 'vuejs'),
(8, 'python'),
(9, 'cobol'),
(10, 'assembleur'),
(11, 'boostrap'),
(12, 'tailwing'),
(13, 'c'),
(14, 'c++'),
(15, 'c#'),
(16, 'dotnet'),
(17, 'laravel'),
(18, 'symfony'),
(19, 'kotlin'),
(20, 'swift'),
(21, 'angular'),
(22, 'twig'),
(23, 'sass');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'Pierre', 'jobrider@gmail.com', '$2y$10$e/2wTz5aPbW6DA9z1.zPueDzy8qX4T/9szq1y47QRO.Ds2LGwktHa'),
(2, 'Samy', 'samy@gmail.com', '$2y$10$e/2wTz5aPbW6DA9z1.zPueDzy8qX4T/9szq1y47QRO.Ds2LGwktHa');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `alert_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `alert_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `participant_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `question_tag`
--
ALTER TABLE `question_tag`
  ADD CONSTRAINT `question_tag_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `question_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;