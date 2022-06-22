-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2022 at 07:36 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `consulter`
--

CREATE TABLE `consulter` (
  `idUtilisateur` int(11) NOT NULL,
  `idSysteme` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doc_pedago`
--

CREATE TABLE `doc_pedago` (
  `id_doc_pedago` int(11) NOT NULL,
  `nom_doc_pedago` varchar(100) NOT NULL,
  `chemin` varchar(200) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `format` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doc_technique`
--

CREATE TABLE `doc_technique` (
  `id_doc_technique` int(11) NOT NULL,
  `id_Systeme` int(11) NOT NULL,
  `nom_doc` varchar(100) NOT NULL,
  `chemin` varchar(200) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soumettre`
--

CREATE TABLE `soumettre` (
  `idUtilisateur` int(11) NOT NULL,
  `idDoc_Pedago` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systeme`
--

CREATE TABLE `systeme` (
  `id_systeme` int(11) NOT NULL,
  `nom_systeme` varchar(100) NOT NULL,
  `nom_fabricant` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `numero_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`idUtilisateur`,`idSysteme`),
  ADD KEY `id_Systeme_FK` (`idSysteme`);

--
-- Indexes for table `doc_pedago`
--
ALTER TABLE `doc_pedago`
  ADD PRIMARY KEY (`id_doc_pedago`);

--
-- Indexes for table `doc_technique`
--
ALTER TABLE `doc_technique`
  ADD PRIMARY KEY (`id_doc_technique`),
  ADD KEY `idSysteme_FK` (`id_Systeme`);

--
-- Indexes for table `soumettre`
--
ALTER TABLE `soumettre`
  ADD PRIMARY KEY (`idUtilisateur`,`idDoc_Pedago`),
  ADD KEY `id_Doc_Pedago_FK` (`idDoc_Pedago`);

--
-- Indexes for table `systeme`
--
ALTER TABLE `systeme`
  ADD PRIMARY KEY (`id_systeme`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_pedago`
--
ALTER TABLE `doc_pedago`
  MODIFY `id_doc_pedago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_technique`
--
ALTER TABLE `doc_technique`
  MODIFY `id_doc_technique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systeme`
--
ALTER TABLE `systeme`
  MODIFY `id_systeme` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `id_Systeme_FK` FOREIGN KEY (`idSysteme`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Utilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doc_technique`
--
ALTER TABLE `doc_technique`
  ADD CONSTRAINT `idSysteme_FK` FOREIGN KEY (`id_Systeme`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `soumettre`
--
ALTER TABLE `soumettre`
  ADD CONSTRAINT `idUtilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `systeme` (`id_systeme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Doc_Pedago_FK` FOREIGN KEY (`idDoc_Pedago`) REFERENCES `doc_pedago` (`id_doc_pedago`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
