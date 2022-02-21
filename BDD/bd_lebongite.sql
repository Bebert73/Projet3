-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 21 fév. 2022 à 08:06
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_lebongite`
--

-- --------------------------------------------------------

--
-- Structure de la table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `accommodation_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `number_of_beds` int(11) NOT NULL,
  `number_of_bathrooms` int(11) NOT NULL,
  `geographic_location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accommodation`
--

INSERT INTO `accommodation` (`id`, `accommodation_title`, `description`, `image`, `number_of_beds`, `number_of_bathrooms`, `geographic_location`, `price`) VALUES
(6, 'Champagne', 'Suite VIP , Jaccuzi , piscine couverte , possible de rajouter des femmes de joie ', 'Gite1.jpg', 10, 5, 'Alpes', 1000000),
(7, 'Bizon ', 'Logement rÃ©server au personne disposant d\'un budget de type pauvre , correspond bien au famille pauvre pour des vacances de merde', 'gite6.jpg', 5, 2, 'Paris', 1500),
(8, 'Abeille ', 'Vous avez envie de bronzer pour vos vacances d\'Ã©tÃ©  ? Eh bah sa ne sera pas ici car il fait -5 et il neige h24  ', 'gite5.jpg', 5, 2, 'Biaritz', 500000),
(9, 'Verge', 'Super endroit pour vous faire chier pendant plusieurs semaines pas de wifi . 4G RIEN le nÃ©ant !', 'Gite1.jpg', 6, 2, 'Saint Baldoph', 150000);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(4, 'Monteiro'),
(5, 'ONLINEPROFORMA - BOT'),
(6, 'Monteiro');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
