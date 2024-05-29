-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 mai 2024 à 09:40
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
  `title` varchar(255) NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `scheduled_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
(17, 'Est ce que c\'est bien de faire du php ?', 'Lorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmLorem ipusmv', '2024-05-27 15:45:00', '2024-05-29 10:23:33', 1);

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
(17, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'php'),
(2, 'css'),
(3, 'html'),
(4, 'javascript');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'Pierre', 'jobrider@gmail.com', '123456'),
(2, 'Samy', 'samy@gmail.com', '123456');

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
