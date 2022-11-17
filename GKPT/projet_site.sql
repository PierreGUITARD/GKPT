-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 17 nov. 2022 à 15:11
-- Version du serveur :  5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `idUtilisateur` int(11) NOT NULL,
  `idSysteme` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `doc_pedago`
--

CREATE TABLE `doc_pedago` (
  `id_doc_pedago` int(11) NOT NULL,
  `nom_doc_pedago` varchar(100) NOT NULL,
  `chemin` varchar(200) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `format` varchar(100) NOT NULL,
  `date_exp` date DEFAULT NULL,
  `date_soumission` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `doc_technique`
--

CREATE TABLE `doc_technique` (
  `id_doc_technique` int(11) NOT NULL,
  `id_Systeme` int(11) NOT NULL,
  `nom_doc` varchar(100) NOT NULL,
  `chemin` varchar(200) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `doc_technique`
--

INSERT INTO `doc_technique` (`id_doc_technique`, `id_Systeme`, `nom_doc`, `chemin`, `taille`, `type`) VALUES
(3, 1, 'PDF Test2', 'Genres_Genres_04Ledocumenttechnique.pdf', 620000, 'pdf'),
(4, 2, 'PDF Test3', 'Genres_Genres_04Ledocumenttechnique.pdf', 620000, 'pdf'),
(5, 3, 'PDF Test4', 'Genres_Genres_04Ledocumenttechnique.pdf', 620000, 'pdf'),
(6, 4, 'PDF Test5', 'Genres_Genres_04Ledocumenttechnique.pdf', 620000, 'pdf');

-- --------------------------------------------------------

--
-- Structure de la table `soumettre`
--

CREATE TABLE `soumettre` (
  `idUtilisateur` int(11) NOT NULL,
  `idDoc_Pedago` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `systeme`
--

CREATE TABLE `systeme` (
  `id_systeme` int(11) NOT NULL,
  `nom_systeme` varchar(100) NOT NULL,
  `nom_fabricant` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `numero_serie` int(11) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `systeme`
--

INSERT INTO `systeme` (`id_systeme`, `nom_systeme`, `nom_fabricant`, `description`, `photo`, `numero_serie`, `lien`) VALUES
(1, 'ECOL’CAFE', 'Aforp', 'Machine à café', 'machine_cafe.jpg', 100001, 'machine_cafe.php'),
(2, 'HYDROLIS', 'Aforp', 'Pompe hydraulique', 'hydraulis.jpg', 100002, 'hydraulis.php'),
(3, 'LEVAGE', 'Aforp', 'Pont levage', 'levier.jpg', 100003, 'bras_levier.php'),
(4, 'STAUBLI', 'Aforp', 'Bras robotique', 'bras_robot.jpg', 100004, 'bras_robot.php');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `MDP_Utilisateur` varchar(256) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`idUtilisateur`,`idSysteme`),
  ADD KEY `id_Systeme_FK` (`idSysteme`);

--
-- Index pour la table `doc_pedago`
--
ALTER TABLE `doc_pedago`
  ADD PRIMARY KEY (`id_doc_pedago`);

--
-- Index pour la table `doc_technique`
--
ALTER TABLE `doc_technique`
  ADD PRIMARY KEY (`id_doc_technique`),
  ADD KEY `idSysteme_FK` (`id_Systeme`);

--
-- Index pour la table `soumettre`
--
ALTER TABLE `soumettre`
  ADD PRIMARY KEY (`idUtilisateur`,`idDoc_Pedago`),
  ADD KEY `id_Doc_Pedago_FK` (`idDoc_Pedago`);

--
-- Index pour la table `systeme`
--
ALTER TABLE `systeme`
  ADD PRIMARY KEY (`id_systeme`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `doc_pedago`
--
ALTER TABLE `doc_pedago`
  MODIFY `id_doc_pedago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `doc_technique`
--
ALTER TABLE `doc_technique`
  MODIFY `id_doc_technique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `systeme`
--
ALTER TABLE `systeme`
  MODIFY `id_systeme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `id_Systeme_FK` FOREIGN KEY (`idSysteme`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Utilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `doc_technique`
--
ALTER TABLE `doc_technique`
  ADD CONSTRAINT `idSysteme_FK` FOREIGN KEY (`id_Systeme`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `soumettre`
--
ALTER TABLE `soumettre`
  ADD CONSTRAINT `idUtilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Doc_Pedago_FK` FOREIGN KEY (`idDoc_Pedago`) REFERENCES `doc_pedago` (`id_doc_pedago`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
