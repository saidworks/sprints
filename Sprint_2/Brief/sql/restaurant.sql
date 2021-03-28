-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 28 mars 2021 à 21:40
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `password`, `username`, `email`, `firstname`, `lastname`) VALUES
(1, '$2y$10$goyUDRBAEMtA8n90LmKJ1up72rHMi7Tp/YvYCLoztrJ2WPfDeRFuO', 'admin', 'zitouni.sd@gmail.com', 'Said', 'ZITOUNI');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'Second test without second foreach loop for binding values'),
(2, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'Second test in the restaurant table'),
(3, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'Third test '),
(4, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'Third test '),
(5, 'Said Green', 'said.storage@gmail.com', 'Fourth test'),
(7, 'Said Green', 'said.storage@gmail.com', 'Fourth test'),
(8, 'Said Green', 'said.storage@gmail.com', 'Fourth test'),
(9, 'Said Green', 'said.storage@gmail.com', 'Fourth test'),
(10, 'Adil', 'adil@email.com', 'here is my message'),
(11, 'test', 'test@emaiL.com', 'Test here'),
(12, 'Said Zitouni', 'zitouni.sd@gmail.com', 'Your products are out of date'),
(13, 'Said Zitouni', 'zitouni.sd@gmail.com', 'Your products are out of date'),
(14, 'Said Zitouni', 'zitouni.sd@gmail.com', 'Your products are out of date'),
(15, 'Said Zitouni', 'zitouni.sd@gmail.com', 'Your products are out of date'),
(16, 'Gamma', 'zeta@email.com', 'No it is not'),
(17, 'BEta', 'zeta@email.com', 'No it is not'),
(18, 'BEta', 'zeta@email.com', 'No it is not'),
(19, 'BEta', 'zeta@email.com', 'No it is not'),
(20, 'BEta', 'zeta@email.com', 'No it is not'),
(21, 'BEta', 'zeta@email.com', 'No it is not'),
(22, 'BEta', 'zeta@email.com', 'No it is not'),
(23, 'BEta', 'zeta@email.com', 'No it is not'),
(24, 'BEta', 'zeta@email.com', 'No it is not'),
(25, 'BEta', 'zeta@email.com', 'No it is not'),
(26, 'BEta', 'zeta@email.com', 'No it is not'),
(27, 'BEta', 'zeta@email.com', 'No it is not'),
(28, 'BEta', 'zeta@email.com', 'No it is not'),
(29, 'BEta', 'zeta@email.com', 'No it is not'),
(30, 'BEta', 'zeta@email.com', 'No it is not'),
(31, 'BEta', 'zeta@email.com', 'No it is not'),
(32, 'BEta', 'zeta@email.com', 'No it is not'),
(33, 'BEta', 'zeta@email.com', 'No it is not'),
(34, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(35, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(36, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(37, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(38, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(39, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(40, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(41, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(42, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(43, 'Said', 'zitouni.sd@hotmail.com', 'Test your skills here'),
(44, 'Said', 'zitouni.sd@hotmail.com', 'Another test'),
(45, 'Said', 'zitouni.sd@hotmail.com', 'Test again the problem was in gmail we need to activate less secure thing '),
(46, 'Said', 'zitouni.sd@hotmail.com', 'Test again the problem was in gmail we need to activate less secure thing '),
(47, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'type your message here'),
(48, 'Said ZITOUNI', 'zitouni.sd@gmail.com', 'type your message here'),
(49, '', '', 'type your message here'),
(50, 'Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(51, 'Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(52, 'سعيد Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(53, 'سعيد Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(54, 'Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(55, 'Said ZITOUNI', 'zitouni.sd@gmail.com', ''),
(56, 'Chicken', 'zeta@email.com', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', ''),
(62, '', '', ''),
(63, '', '', ''),
(64, '', '', ''),
(65, '', '', ''),
(66, '', '', ''),
(67, '', '', ''),
(68, '', '', ''),
(69, '', '', ''),
(70, 'zitouni.sd@gmail.com', 'zeta@email.com', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `items` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `totalamount` int(11) NOT NULL,
  `discountrate` int(11) NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `adminId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `adminId`, `name`, `price`, `category`, `image`) VALUES
(1, 1, 'Chicken', 22, NULL, 'products/Chicken1.jpg'),
(2, 1, 'Pizza', 25, NULL, 'products/Pizza3.jpg'),
(3, 1, 'Pasta', 18, NULL, 'products/Pasta5.jpg'),
(4, 1, 'Salad', 15, NULL, 'products/Salad4.jpg'),
(5, 1, 'Hamburger', 30, NULL, 'products/Hamburger2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `phone`, `orderid`) VALUES
(1, 'Said', 'ZITOUNI', 'zitouni.sd@gmail.com', '$2y$10$2UdOoCuanufICMrsCbIb8e6ySdCSA88YUWNt6zmM1DL8ewLtcazZ2', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminId` (`adminId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
