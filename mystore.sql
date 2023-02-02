-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 jan. 2023 à 14:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mystore`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'adidas'),
(2, 'nike'),
(3, 'marwa'),
(4, 'suigy'),
(5, 'lc waikiki'),
(6, 'macdo');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_title`) VALUES
(1, 'fruit'),
(2, 'vegetable'),
(3, 'juice'),
(4, 'milk product'),
(5, 'shose'),
(6, 'sandwich');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_description`, `product_keywords`, `categorie_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(3, 'apple1', '  good and fresh apple', 0, 2, 3, 'images (1).jpg', 'images (1).jpg', 'images (1).jpg', '20', '2022-12-29 18:59:00', 'true'),
(4, 'banane', 'good and fresh banane ', 0, 1, 4, 'product-2.jpg', 'product-2.jpg', 'product-2.jpg', '30', '2022-11-28 19:09:34', 'true'),
(7, 'burger', 'delice burger with meat', 0, 6, 6, 'product-5.jpg', 'product-5.jpg', 'product-5.jpg', '100', '2022-11-28 19:12:48', 'true'),
(8, 'juice orange', 'fresh juice', 0, 3, 6, 'product-11.jpg', 'product-11.jpg', 'product-11.jpg', '25', '2022-11-28 19:16:46', 'true'),
(20, 'VRGRTABLE', 'fresh vegetable', 0, 2, 4, 'thumb-1.jpg', 'product-details-2.jpg', 'product-details-2.jpg', '12', '2022-12-27 09:38:16', 'true'),
(21, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(22, 'fruits', 'fruits', 0, 1, 4, 'thumb-4.jpg', 'thumb-4.jpg', 'thumb-4.jpg', '789', '2022-12-27 09:40:13', 'true'),
(23, 'fruits', 'fruits', 0, 1, 4, 'product-12.jpg', 'product-12.jpg', 'product-12.jpg', '456', '2022-12-27 09:40:57', 'true'),
(24, 'banane', 'fresh banane', 0, 1, 4, 'product-2.jpg', 'product-2.jpg', 'product-2.jpg', '77', '2022-12-27 09:41:56', 'true'),
(25, 'banan', 'banan', 0, 1, 4, 'product-2.jpg', 'product-2.jpg', 'product-2.jpg', '999', '2022-12-27 09:42:31', 'true'),
(26, 'tomato', 'tomato', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '444', '2022-12-27 09:43:40', 'true'),
(27, 'vegetable', 'vegetable', 0, 2, 4, 'product-details-3.jpg', 'product-details-3.jpg', 'product-details-3.jpg', '100', '2022-12-27 09:46:32', 'true'),
(28, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(29, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(30, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(31, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(32, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(33, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(34, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(35, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(36, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(37, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(38, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(39, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(40, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(41, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(42, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true'),
(43, 'fresh vegetable', 'fresh vegetable', 0, 2, 4, 'product-details-1.jpg', 'product-details-1.jpg', 'product-details-1.jpg', '10', '2022-12-27 09:39:12', 'true');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
