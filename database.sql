-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306

-- Généré le : ven. 07 juin 2024 à 07:28

-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

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

--
-- Déchargement des données de la table `alert`
--

INSERT INTO `alert` (`user_id`, `question_id`) VALUES
(1, 41),
(1, 42),
(1, 42),
(1, 42),
(1, 42),
(1, 42),
(2, 41);


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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;


--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `title`, `description`, `scheduled_at`, `created_at`, `author`) VALUES
(37, 'Addition assignments not able to understand', 'Im trying to learn about the loops and the addition assignments such as ++, +=, *=... etc The problem is I don\'t get the logic of it completely if (x+=y = x + y).\r\n\r\nWhy in the sum= 0 the result is 6 and sum = number is 11? I dont get where this 6 comes from. Do you know a nice resource to help me on this? Thank you!', '2024-06-04 13:30:00', '2024-06-04 10:35:33', 1),
(38, 'Comment centrer une div ?', 'Ca decal toujours vers la gauche je comprends pas', '2024-06-04 18:00:00', '2024-06-04 10:37:14', 1),
(39, 'Comment appeler une API avec JS', 'Je suis debutant en JS et PHP et l\'erreur me met : \r\n#Error\r\n#define YYJSON_TYPE_NONE\r\n((uint8_t)0)', '2024-06-04 13:30:00', '2024-06-04 10:38:36', 1),
(40, 'Comment générer des input SQL ?', 'Je dois générer des contenus pour mon site web, y\'a qlqun pour m\'aider svp ?  je suis debutant pitié :)', '2024-06-04 16:00:00', '2024-06-04 10:40:11', 1),
(41, 'Mon app react native : soucis navigation', 'The action \'NAVIGATE\' with payload {\"name\":\"Home\"} was not handled by any navigator.\r\nPourtant mon fichier est clean !', '2024-06-04 16:30:00', '2024-06-04 10:42:07', 1),
(42, 'Les startups de logiciels qui ont besoin de $ peuvent-elles éviter le capital-risque ?', 'L\'épisode d\'aujourd\'hui est une conversation avec Benjamin Shestakofsky, professeur adjoint de sociologie à l\'Université de Pennsylvanie, qui se concentre sur la manière dont les technologies numériques affectent le travail et l\'emploi, les organisations et les échanges économiques.', '2024-06-04 19:00:00', '2024-06-04 10:42:49', 1),
(43, 'Comment installer VSCode sur linux ?', 'J&#039;ai une erreur #error 542id-var ##\r\nsur mon linux unbuntu verison 6.524.00\r\ncomment faire ? svp', '2024-06-04 14:00:00', '2024-06-04 11:24:10', 1),
(44, 'J&#039;aimerai apprendre le c# comment bien debuter', 'je suis etudaint en informatique &agrave; l&#039;INSECo de Reims et je vourdais devenir developpeur C# !!\r\nJ&#039;ai 27 ans et 3 ans d&#039;exp. en webmastering', '2024-06-04 14:30:00', '2024-06-04 11:38:38', 1),
(45, 'Possible d\'utiliser Laravel comme framework PHP pour développer l\'API et Vue.js pour le frontend', 'C\'est les principaux défis techniques qui était l\'intégration de plusieurs services tiers, comme les API de suivi des expéditions et les systèmes de gestion des stocks ?', '2024-06-06 12:30:00', '2024-06-06 17:11:48', 1);

-- --------------------------------------------------------

--
-- Structure de la table `question_tag`
--

DROP TABLE IF EXISTS `question_tag`;
<
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
(37, 1),
(37, 3),
(37, 4),
(38, 2),
(38, 3),
(39, 1),
(39, 3),
(39, 4),
(40, 6),
(40, 7),
(40, 8),
(41, 2),
(41, 3),
(41, 6),
(42, 21),
(42, 22),
(42, 23),
(43, 17),
(43, 18),
(44, 15),
(45, 1),
(45, 4);


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

