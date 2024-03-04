

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ida` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `prixunitaire` varchar(10) DEFAULT NULL,
  `qtestock` int DEFAULT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ida`, `libelle`, `prixunitaire`, `qtestock`, `Reference`) VALUES
(1, 'Article 1', '1000', 100,Ref000001),
(2, 'Article 2', '2500', 50,Ref000002),
(3, 'Article 3', '550', 200,Ref000003),
(4, 'Article 4', '850', 20,Ref000004),
(5, 'Article 5', '5500', 150,Ref000005);

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `qtecmd` int DEFAULT NULL,
  `idc` int NOT NULL,
  `ida` int NOT NULL,
  KEY `idc` (`idc`),
  KEY `ida` (`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`qtecmd`, `idc`, `ida`) VALUES
(2, 1, 1),
(1, 2, 3),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idc` int NOT NULL AUTO_INCREMENT,
  `datec` date DEFAULT NULL,
  `montant` varchar(100) DEFAULT NULL,
  `etat` varchar(10) DEFAULT NULL,
    `id_client` int NOT NULL,
  PRIMARY KEY (`idc`)
  FOREIGN KEY (`id_client`) REFERENCES  client(`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idc`, `datec`, `montant`, `etat`) VALUES
(1, '2024-02-23', '50000', '1'),
(2, '2024-02-22', '30000', '2'),
(3, '2024-02-21', '75500', '1');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`idc`) REFERENCES `commande` (`idc`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`ida`) REFERENCES `article` (`ida`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
