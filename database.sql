-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 juin 2024 à 08:43
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `title`, `description`, `scheduled_at`, `created_at`, `author`) VALUES
(37, 'Addition assignments not able to understand', 'Im trying to learn about the loops and the addition assignments such as ++, +=, *=... etc The problem is I don\'t get the logic of it completely if (x+=y = x + y).\r\n\r\nWhy in the sum= 0 the result is 6 and sum = number is 11? I dont get where this 6 comes from. Do you know a nice resource to help me on this? Thank you!', '2024-06-04 13:30:00', '2024-06-04 10:35:33', 1),
(38, 'Comment centrer une div ?', 'Ca decal toujours vers la gauche je comprends pas', '2024-06-04 18:00:00', '2024-06-04 10:37:14', 1),
(39, 'Comment appeler une API avec JS', 'Je suis debutant en JS et PHP et l\'erreur me met : \r\n#Error\r\n#define YYJSON_TYPE_NONE\r\n((uint8_t)0)', '2024-06-04 13:30:00', '2024-06-04 10:38:36', 1),
(40, 'Comment générer des input SQL ?', 'Je dois générer des contenus pour mon site web, y\'a qlqun pour m\'aider svp ?  je suis debutant pitié :)', '2024-06-04 16:00:00', '2024-06-04 10:40:11', 1),
(41, 'Mon app react native : soucis navigation', 'The action \'NAVIGATE\' with payload {\"name\":\"Home\"} was not handled by any navigator.\r\nPourtant mon fichier est clean !', '2024-06-04 16:30:00', '2024-06-04 10:42:07', 1),
(42, 'Les startups de logiciels qui ont besoin de $ peuvent-elles éviter le capital-risque ?', 'L\'épisode d\'aujourd\'hui est une conversation avec Benjamin Shestakofsky, professeur adjoint de sociologie à l\'Université de Pennsylvanie, qui se concentre sur la manière dont les technologies numériques affectent le travail et l\'emploi, les organisations et les échanges économiques.', '2024-06-04 19:00:00', '2024-06-04 10:42:49', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;