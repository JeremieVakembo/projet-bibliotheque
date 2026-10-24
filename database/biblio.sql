-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 sep. 2023 à 15:13
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonne`
--

CREATE TABLE `abonne` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `num` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonne`
--

INSERT INTO `abonne` (`id`, `nom`, `num`) VALUES
(1, 'vakembo', 'KD5521');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `datenaissance` date NOT NULL,
  `nationnalite` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `livre` varchar(250) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `nbr` varchar(250) NOT NULL,
  `dat` date NOT NULL,
  `files` varchar(250) NOT NULL,
  `domaine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `photo`, `livre`, `cat`, `auteur`, `nbr`, `dat`, `files`, `domaine`) VALUES
(1, 'francais.jfif', 'pratique du français', 'français', 'zamenga', '202', '1964-06-18', 'FAO - SURVEILLANCE IAHP CHEZ LES OISEAUX SAUVAGES.pdf', ''),
(8, 'franc.jpg', 'pratique du français', 'manuels de francais', 'zamenga', '220', '2023-09-24', 'COUTEAUX.pdf', ''),
(10, 'comptabilité.jpg', 'pratique ', 'manuels de francais', 'zamenga', '225', '2023-09-24', 'FAO - SURVEILLANCE IAHP CHEZ LES OISEAUX SAUVAGES.pdf', '');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `NumCons` int(11) NOT NULL,
  `DateCons` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `HeureDebut` time DEFAULT NULL,
  `HeureFin` time DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `idlivre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`NumCons`, `DateCons`, `HeureDebut`, `HeureFin`, `iduser`, `idlivre`) VALUES
(13, '2023-09-24 17:15:04', '06:23:10', '06:53:09', 1, 8),
(14, '2023-09-24 17:15:04', '06:23:44', '06:53:09', 1, 1),
(15, '2023-09-24 17:15:04', '06:26:46', '06:53:09', 1, 1),
(16, '2023-09-24 17:15:04', '06:33:47', '06:53:09', 1, 1),
(17, '2023-09-24 17:15:04', '06:33:56', '06:53:09', 1, 8),
(18, '2023-09-24 17:15:04', '06:56:36', '06:53:09', 1, 1),
(19, '2023-09-24 17:15:04', '06:56:42', '06:53:09', 1, 8),
(20, '2023-09-24 17:15:04', '06:58:02', '06:53:09', 1, 10),
(21, '2023-09-24 17:15:04', '07:09:51', '06:53:09', 1, 10),
(23, '2023-09-25 00:29:07', '02:27:40', '03:27:40', 1, 1),
(24, '2023-09-25 01:59:53', '02:27:46', '06:53:09', 1, 8),
(25, '2023-09-25 01:59:59', '02:27:57', '06:53:09', 1, 10),
(26, '2025-09-22 22:00:00', '04:02:25', NULL, 1, 1),
(27, '2025-09-22 22:00:00', '04:11:11', NULL, 1, 1),
(28, '2025-09-22 22:00:00', '04:11:17', NULL, 1, 8),
(29, '2025-09-22 22:00:00', '04:11:22', NULL, 1, 10),
(30, '2025-09-22 22:00:00', '02:03:18', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `objet` varchar(250) NOT NULL,
  `messager` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `sexe` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `opt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `post`, `sexe`, `classe`, `opt`) VALUES
(1, 'mobulu123', 'nkazi', 'M', '4èm', 'pedagogie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `statuts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `pass`, `statuts`) VALUES
(1, 'jeremie', 'jeremievakembo01@gmail.com', '$2y$10$qdeQWgMP9PRHqBKu/Yv7eOaQewp70RfEBp.6vyo52YM/DGng9A7KW', '1'),
(2, 'jere', 'jere01@gmail.com', '$2y$10$zpODA2SRXVQiM9xL9fIMK.pALJ3XuZx6UqRVN7cND798oc3Ajgf4y', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonne`
--
ALTER TABLE `abonne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`NumCons`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonne`
--
ALTER TABLE `abonne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `NumCons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
