-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 12 juil. 2022 à 10:50
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yellow`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idA` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idA`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'gnouga', 'david', 'davidggnouga@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `idEn` int(11) NOT NULL,
  `nomEn` varchar(100) DEFAULT NULL,
  `adresseEn` varchar(100) DEFAULT NULL,
  `secteurActivite` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`idEn`, `nomEn`, `adresseEn`, `secteurActivite`) VALUES
(1, 'soso', 'Dschang', 'Programmation'),
(3, 'STYVY', 'DOUALA', 'Programmation'),
(4, 'makup', 'Dschang', 'peau'),
(5, 'soso', 'Dschang', 'peau'),
(6, 'MIba', 'YAOUNDE', 'peau');

-- --------------------------------------------------------

--
-- Structure de la table `entrepriseetudiant`
--

CREATE TABLE `entrepriseetudiant` (
  `idEn` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `avis` varchar(500) DEFAULT NULL,
  `note` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entrepriseetudiant`
--

INSERT INTO `entrepriseetudiant` (`idEn`, `matricule`, `avis`, `note`) VALUES
(2, 450, 'tres bon et calme', 17),
(3, 450, 'tres bon et calme', 17),
(4, 450, 'tres poser j\'aime bien', 18);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `email`) VALUES
(450, 'TCHINDA', 'CYRILLE', 'tchindacyrille2000@gmail.com'),
(1743, 'styvy', 'mhvv', 'stephlovelackouong@gmail.com'),
(1804, 'GNOUGA', 'DAVID', 'davidggnouga@gmail.com'),
(1867, 'FOFACK', 'BRIDOLPHE', 'bridolpheassohou@gmail.com'),
(3746, 'GOUEGNI', 'MIDRELLE', 'midrellegouegni@gmail.com'),
(3874, 'KENFACK', 'SILVERE', 'k114silvermomo@gmail.com'),
(4284, 'TCHINDA', 'YVAN', 'tchindayvan603@gmail.com'),
(4337, 'ASSOPDON', 'ROSA', 'rosaassopdon12345@gmail.com'),
(4448, 'LACKOUONG', 'STEPHANE', 'stephlovelackouong@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idFi` int(11) NOT NULL,
  `nomFi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idFi`, `nomFi`) VALUES
(1, 'genie_civil');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idF` int(11) NOT NULL,
  `nomF` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idF`, `nomF`) VALUES
(1, 'BTS');

-- --------------------------------------------------------

--
-- Structure de la table `formationetudiant`
--

CREATE TABLE `formationetudiant` (
  `idF` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `temoignage` varchar(500) DEFAULT NULL,
  `vote` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formationetudiant`
--

INSERT INTO `formationetudiant` (`idF`, `matricule`, `temoignage`, `vote`) VALUES
(1, 450, 'tres bon cette institut', 16),
(2, 0, '', 0),
(3, 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `formationfiliere`
--

CREATE TABLE `formationfiliere` (
  `idF` int(11) NOT NULL,
  `idFi` int(11) NOT NULL,
  `TauxReussite` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `institut`
--

CREATE TABLE `institut` (
  `idI` int(11) NOT NULL,
  `nomI` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `tauxReussite` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `institut`
--

INSERT INTO `institut` (`idI`, `nomI`, `adresse`, `tauxReussite`) VALUES
(1, 'Institut Supérieur des Sciences et Technologies NANFAH (ISSTN)', 'Dschang', 79);

-- --------------------------------------------------------

--
-- Structure de la table `institutetudiant`
--

CREATE TABLE `institutetudiant` (
  `idI` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `temoignage` varchar(500) DEFAULT NULL,
  `vote` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `institutetudiant`
--

INSERT INTO `institutetudiant` (`idI`, `matricule`, `temoignage`, `vote`) VALUES
(1, 4448, 'que des bons produits consmetiques', 17);

-- --------------------------------------------------------

--
-- Structure de la table `institutformation`
--

CREATE TABLE `institutformation` (
  `idI` int(11) NOT NULL,
  `idF` int(11) NOT NULL,
  `anneeFormation` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `idN` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`idN`, `nom`, `email`) VALUES
(1, 'STYVY', 'stephlovelackouong@gmail.com'),
(2, 'TCHINDA CYRILLE', 'tchindacyrille2000@gmail.com'),
(3, 'David', 'davidggnouga@gmail.com'),
(7, 'midrelle', 'midrellegouegni@gmail.com'),
(8, 'TCHINDA', 'tchindacyrille2000@gmail.com'),
(9, 'Stéphane love ', 'stephlovelackouong@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `uniinfo`
--

CREATE TABLE `uniinfo` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `score` double DEFAULT NULL,
  `rank` int(200) DEFAULT NULL,
  `year` int(15) DEFAULT NULL,
  `ratio` double DEFAULT NULL,
  `interstu` double DEFAULT NULL,
  `acadrep` double DEFAULT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `uniinfo`
--

INSERT INTO `uniinfo` (`id`, `name`, `address`, `score`, `rank`, `year`, `ratio`, `interstu`, `acadrep`, `info`) VALUES
(1, 'UNIVERSITY OF DSCHANG (UDS)', 'DSCHANG', 94.6, 7390, 1993, 85.1, 77.1, 99.9, 'https://www.um.edu.my/'),
(2, 'UNIVERSITY OF YAOUNDE II', 'SOA', 93.6, 9950, 1962, 85, 76.8, 92, 'https://www.um.uds.my/'),
(3, 'UNIVERSITY OF DOUALA (UDLA)', 'Douala', 70.8, 4619, 1977, 82.8, 69.5, 75.4, 'https://www.upm.edu.my/'),
(4, 'UNIVERSITY OF BUEA (UB)', 'BUEA', 70.1, 8173, 1992, 82.6, 67.7, 73.6, 'https://www.usm.my/index.php'),
(5, 'INSTITUT CATHOLIQUE DE YAOUNDE (ICE)', 'YAOUNDE', 67.1, 9625, 1989, 93.7, 95.8, 55.2, 'https://www.utm.my/'),
(6, 'BAMENDA UNIVERSITY OF SCIENCE AND TECHNOLOGY  (BUST)', 'BAMENDA', 46.1, 9978, 1998, 39.5, 92.9, 22.7, 'https://www.utp.edu.my/Pages/Home.aspx'),
(7, 'UNIVERSITY des MONTAGNE (UdM)', 'BANGANGTE', 38.1, 8795, 2000, 48, 98.9, 26.7, 'http://www.uum.edu.my/'),
(8, ' UNIVERSITE ADVENTISTE COSENDAI (UAC)\r\n', 'NANGA-EBOKO', 36.3, 11523, 1996, 54.9, 99.3, 25.8, 'https://university.taylors.edu.my/en.html'),
(9, 'UNIVERSITY OF YAOUNDE I (UYI)\r\n', 'YAOUNDE', 30.8, 9951, 1962, 72.2, 99.5, 11.4, 'https://www.ucsiuniversity.edu.my/'),
(10, 'Institut Supérieur des Sciences et Technologies NANFAH (ISSTN)', 'DSCHANG', 67.53, 27187, 1999, 40.5, 94.1, 20.1, 'https://www.msu.edu.my/'),
(11, 'ISTA (Institut Universitaire du Golfe de Guinée)', 'DOUALA', 67.48, 13030, 2020, 96.6, 96.1, 89.7, 'https://www.um.edu.my/'),
(13, 'Institut Supérieur de Management de Manerigouba  (ISMAM) ', 'NKONGSAMBA', 60.98, 377834, 2018, 86.2, 87.2, 76.3, 'https://www.usm.my/index.php'),
(14, 'Institut Supérieur de Transport, des Affaires et de Management (ISTAM)', 'DOUALA', 58.89, 398278, 2020, 95.1, 86.8, 77, 'https://www.ukm.my/portal/'),
(15, 'Institut Supérieur de l\'Entreprise et du Management (ISEM)', 'DOUALA', 57.26, 468478, 2020, 85, 94.9, 58.7, 'https://www.utm.my/'),
(16, 'Institut Universitaire et Stratégique de l\'Estuaire / Institut Supérieur des Affaires et de Management', 'DOUALA', 65.1, 82948, 2020, 45.1, 82.8, 25.9, 'https://www.utp.edu.my/Pages/Home.aspx'),
(17, 'Institut Supérieur de Technologie et d\'Etudes commerciales (ISTEC)', 'BANGANGTE', 63.37, 1164989, 2020, 47.3, 98.9, 29.5, 'http://www.uum.edu.my/'),
(18, 'Institut Supérieur de Management et de l\'Entrepreneuriat (IME)', 'DOUALA', 61.73, 87387383, 2020, 63.4, 99.5, 28.1, 'https://university.taylors.edu.my/en.html'),
(19, 'Institut Supérieur de Management (ISMA)\r\n', 'DOUALA', 57.26, 122873, 2020, 70.8, 99.5, 16.9, 'https://www.ucsiuniversity.edu.my/'),
(20, 'Institut Supérieur de Technologie Avancée et du Management(ISTAMA)', 'DOUALA', 55.14, 1797848, 2020, 48.7, 88.8, 23.8, 'https://www.msu.edu.my/'),
(21, 'Groupe Tankou Enseignement Supérieur (GTES)', 'BAFOUSSAM', 49.23, 89957, 2010, 74.3, 99.6, 32.7, 'https://university.taylors.edu.my/en.html'),
(22, 'Institut Supérieur de Technologie Appliquée et de Gestion (ISTAG)', 'YAOUNDE', 48.44, 708788, 2021, 43.7, 67.7, 30.4, 'https://www.utp.edu.my/Pages/Home.aspx'),
(23, 'Institut Supérièur Africain d\'Enseignement Managérial ET Technologique ', 'DOUALA', 47.22, 348377, 2021, 89.8, 89, 79.9, 'https://www.usm.my/index.php'),
(24, 'Institut Supérieur de Gestion (ISG) ', 'DOUALA', 55.1, 348378, 2021, 89.8, 88, 79.9, 'https://www.usm.my/index.php'),
(25, 'ESG(Institut Universitaire du Golfe de Guinée)', 'DOUALA', 54.95, 359893, 2021, 98.8, 85.5, 80.1, 'https://www.ukm.my/portal/'),
(26, 'Institut Universitaire SIANTOU', 'YAOUNDE', 53, 392982, 2021, 80.3, 95.3, 63.6, 'https://www.utm.my/'),
(27, 'Institut Supérieur Matamfen (ISMAT)', 'YAOUNDE', 52.56, 708788, 2021, 43.7, 67.7, 30.4, 'https://www.utp.edu.my/Pages/Home.aspx'),
(28, 'Institut Supérieur de Gestion et de Technologie (ISGET)', 'DOUALA', 52.38, 89958, 2021, 74.3, 99.6, 32.7, 'https://university.taylors.edu.my/en.html'),
(29, 'nstitut Supérieur Professeurs Réunis (ISPR)', 'DOUALA', 43.94, 1079839, 2021, 55.3, 98.5, 33.5, 'http://www.uum.edu.my/'),
(30, 'Institut Supérieur des métiers (ISMET)', 'DOUALA', 42.59, 139983, 2021, 55.3, 86.2, 27.6, 'https://www.msu.edu.my/'),
(31, 'Institut Supérieur Industriel et Commercial  (ISIC)', 'GAROUA', 41.94, 349833, 2019, 80.3, 99.5, 68.4, 'https://www.upm.edu.my/'),
(32, 'Institut Supérieur polytechnique', 'YAOUNDE', 33.33, 10594839, 2021, 71.1, 99.3, 23.9, 'https://www.ucsiuniversity.edu.my/'),
(50, 'Institut des Sciences Economiques et Informatiques de Gestion (ISEIG)', 'YAOUNDE', 27.16, 3388988, 2018, 82.8, 69.5, 40.5, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idA`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`idEn`);

--
-- Index pour la table `entrepriseetudiant`
--
ALTER TABLE `entrepriseetudiant`
  ADD PRIMARY KEY (`idEn`,`matricule`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idFi`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idF`);

--
-- Index pour la table `formationetudiant`
--
ALTER TABLE `formationetudiant`
  ADD PRIMARY KEY (`idF`,`matricule`);

--
-- Index pour la table `formationfiliere`
--
ALTER TABLE `formationfiliere`
  ADD PRIMARY KEY (`idF`,`idFi`);

--
-- Index pour la table `institut`
--
ALTER TABLE `institut`
  ADD PRIMARY KEY (`idI`);

--
-- Index pour la table `institutetudiant`
--
ALTER TABLE `institutetudiant`
  ADD PRIMARY KEY (`idI`,`matricule`);

--
-- Index pour la table `institutformation`
--
ALTER TABLE `institutformation`
  ADD PRIMARY KEY (`idI`,`idF`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idN`);

--
-- Index pour la table `uniinfo`
--
ALTER TABLE `uniinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `idEn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entrepriseetudiant`
--
ALTER TABLE `entrepriseetudiant`
  MODIFY `idEn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idFi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formationetudiant`
--
ALTER TABLE `formationetudiant`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formationfiliere`
--
ALTER TABLE `formationfiliere`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `institut`
--
ALTER TABLE `institut`
  MODIFY `idI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `institutetudiant`
--
ALTER TABLE `institutetudiant`
  MODIFY `idI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `institutformation`
--
ALTER TABLE `institutformation`
  MODIFY `idI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `idN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `uniinfo`
--
ALTER TABLE `uniinfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
