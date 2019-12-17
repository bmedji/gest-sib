-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 juin 2018 à 17:33
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

DROP TABLE IF EXISTS `agences`;
CREATE TABLE IF NOT EXISTS `agences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codeagence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libagence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `codeagence`, `libagence`, `created_at`, `updated_at`) VALUES
(2, '1', 'Abidjan', '2018-04-23 21:19:03', '2018-04-23 21:21:08'),
(3, '2', 'Yamoussokro', '2018-04-23 22:12:35', '2018-04-23 22:12:35');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codecli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomcli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenomcli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numerodecomptecli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matgest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`codecli`),
  KEY `matgest` (`matgest`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `codecli`, `nomcli`, `prenomcli`, `numerodecomptecli`, `matgest`, `updated_at`, `created_at`) VALUES
(8, '1', 'Konane', 'Patrick', 'qkldjfmqkfjq', '90', '2018-05-07 12:53:36', '2018-05-07 11:57:08'),
(9, '2', 'Kennedy', 'brown', 'mlqskdjfqmsdfj', '90', '2018-05-07 12:58:14', '2018-05-07 12:58:14'),
(10, '3', 'Digbeu', 'Franck', 'qklfjmqdkfjqs', '4', '2018-05-07 13:01:22', '2018-05-07 13:01:22'),
(11, '4', 'Kouame', 'Stephane', 'dlmjfqmf', '7', '2018-05-07 13:13:14', '2018-05-07 13:13:14');

-- --------------------------------------------------------

--
-- Structure de la table `directions`
--

DROP TABLE IF EXISTS `directions`;
CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codedir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelledir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`codedir`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `directions`
--

INSERT INTO `directions` (`id`, `codedir`, `libelledir`, `updated_at`, `created_at`) VALUES
(1, 'AS2000', 'Agence Sib 2000', '2018-04-23 02:59:56', '2018-04-23 00:46:26'),
(8, 'AS2002', 'Gagnoa', '2018-06-02 11:54:32', '2018-06-02 11:54:32'),
(3, 'DCDM', 'Direction Commerciale et Développement Marketing', '2018-04-23 00:46:26', '2018-04-23 00:46:26'),
(4, 'DG', 'Direction générale', '2018-04-23 00:46:26', '2018-04-23 00:46:26'),
(5, 'DGE', 'Direction des \r\ngrandes entreprises', '2018-04-23 00:46:26', '2018-04-23 00:46:26'),
(6, 'DOP', 'Direction des opérations', '2018-04-23 00:46:26', '2018-04-23 00:46:26');

-- --------------------------------------------------------

--
-- Structure de la table `fonctionnalites`
--

DROP TABLE IF EXISTS `fonctionnalites`;
CREATE TABLE IF NOT EXISTS `fonctionnalites` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codefonc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libfonc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codefonc`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fonctionnalites`
--

INSERT INTO `fonctionnalites` (`id`, `codefonc`, `libfonc`, `created_at`, `updated_at`) VALUES
(2, '1', 'Admin', '2018-04-23 21:52:47', '2018-04-23 21:52:47'),
(3, '2', 'Gestionnaire', '2018-04-23 23:34:25', '2018-04-27 01:59:16'),
(4, '3', 'Superviseur', '2018-04-24 16:10:18', '2018-04-24 16:10:18'),
(5, '4', 'Smc', '2018-04-26 21:50:48', '2018-04-27 01:59:02'),
(6, '5', 'Unite Traitante', '2018-04-27 08:27:57', '2018-04-27 08:28:50'),
(7, '6', 'Df', '2018-05-07 10:03:10', '2018-05-07 10:03:10');

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaires`
--

DROP TABLE IF EXISTS `gestionnaires`;
CREATE TABLE IF NOT EXISTS `gestionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matgest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomprengest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agencegest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`matgest`),
  KEY `idserv` (`idserv`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `gestionnaires`
--

INSERT INTO `gestionnaires` (`id`, `matgest`, `nomprengest`, `agencegest`, `idserv`, `updated_at`, `created_at`) VALUES
(1, '1', 'lebron james', '1', '1', '2018-04-24 01:28:24', '0000-00-00 00:00:00'),
(7, '2', 'Ouattara draman', '2', '1', '2018-04-23 23:01:12', '2018-04-23 23:00:17'),
(4, '4', 'Bougny jules', '2', '2', '2018-04-23 22:15:44', '2018-04-23 22:15:44');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_07_183509_create_clients_table', 1),
(4, '2018_04_07_184513_create_gestionnaires_table', 1),
(5, '2018_04_07_184652_create_reclamations_table', 1),
(6, '2018_04_07_185046_create_directions_table', 1),
(7, '2018_04_07_185200_create_services_table', 1),
(8, '2018_04_07_185413_create_type_services_table', 1),
(11, '2018_04_07_185502_create_utilisateurs_table', 2),
(12, '2018_04_13_134230_refresh', 2),
(13, '2018_04_20_193316_create_fonctionnalites_table', 3),
(14, '2018_04_23_214734_create_agences_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

DROP TABLE IF EXISTS `reclamations`;
CREATE TABLE IF NOT EXISTS `reclamations` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `referencerec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motifrec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumerec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `daterecprec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetraiterec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etatrec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statutrec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codecli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idserv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aregulariser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valider` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`referencerec`),
  KEY `codecli` (`codecli`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `referencerec`, `motifrec`, `resumerec`, `daterecprec`, `datetraiterec`, `etatrec`, `statutrec`, `codecli`, `observation`, `idserv`, `aregulariser`, `valider`, `created_at`, `updated_at`) VALUES
(31, '1', 'smqlkfjqm', 'sdkjfqm', '07/05/2018', '7/5/2018', 'Traitée', 'Non Fondée', '1', 'fdsqfmlsf', '2', NULL, 'Oui', '2018-05-07 12:02:14', '2018-05-07 12:29:28'),
(33, 'qsdlfqùsf', 'qmqdlkjf', 'dsmqljfqs', '07/05/2018', '7/5/2018', 'Traitée', 'Fondée', '4', 'mqdskjfqsd', '3', 'Oui', 'Oui', '2018-05-07 13:13:51', '2018-05-07 13:28:02');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelleserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codedir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtypeserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`idserv`),
  KEY `idtypeserv` (`idtypeserv`),
  KEY `idtypeserv_2` (`idtypeserv`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `idserv`, `libelleserv`, `codedir`, `idtypeserv`, `updated_at`, `created_at`) VALUES
(7, '1', '', '', '', '2018-04-23 05:24:51', '2018-04-23 05:24:51'),
(1, '2', 'SOL', 'DG', '2', '2018-04-23 05:24:51', '2018-04-23 04:46:04'),
(2, '3', 'BOM', 'DG', '1', '2018-04-23 05:05:53', '2018-04-23 05:05:53'),
(9, '4', 'LOL', 'DG', '1', '2018-05-30 01:29:58', '2018-05-30 01:29:58');

-- --------------------------------------------------------

--
-- Structure de la table `type_services`
--

DROP TABLE IF EXISTS `type_services`;
CREATE TABLE IF NOT EXISTS `type_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtypeserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libtypserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`idtypeserv`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_services`
--

INSERT INTO `type_services` (`id`, `idtypeserv`, `libtypserv`, `updated_at`, `created_at`) VALUES
(1, '1', 'Service émetteur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', 'Service traitant', '2018-04-23 03:45:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idfonc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idserv` int(255) NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `matricule`, `name`, `surname`, `idfonc`, `idserv`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(25, '1', 'Koffi', 'Bertrand', '1', 1, '$2y$10$X6Ifh6wza69.BDrtbiy9Tum1fsWV5jNxaED5IIOeXkd472OUblkHa', 'zyef5sqM7OVhKoES7o83YGhOWELe5PJXI6eoothzdwS6yfBijhDB641RvMPm', NULL, '2018-06-03 08:58:04'),
(50, '2', 'bouali', 'koulo', '5', 2, '$2y$10$f3F8ryuZYRWTKQa1tEv9bebGvdLof4kWKswEtqhy1sz4dlHiR4j/2', 'dFmZAfWvlViFOvVqcepHUrVkDDJO6sXj8S3SHRWEhODypGV9K5eaKQavs8tK', '2018-05-07 10:42:09', '2018-06-03 08:58:21'),
(51, '30', 'Kouassi', 'Kan', '2', 1, '$2y$10$3Zhhtf3yUwgBJksUPVqjgOSDxzJYgd3eMPJO4oO3CTuWZFPi2Lhba', 'NC5k9ZjbEddUbGeNEnq5TO61Ce7fycT1gT7IC0Bjaad5LHnsyweFLk33t44a', '2018-05-07 10:47:44', '2018-06-03 11:04:58'),
(53, '4', 'Dangui', 'juliette', '2', 1, '$2y$10$CdrNW521qnDTuNLdj3FFyeqlKwJFfUJDLET6DfxFY5Fz6mjivlLD2', 'cEWEYQULqIHavkke6N7FaXt2V0kwM650kjrUN6O6fC73mklGqyrfsVNB44Uw', '2018-05-07 10:59:18', '2018-06-03 08:58:50'),
(54, '5', 'Konan', 'bouagni jules', '3', 1, '$2y$10$blnt6df8h8kS.AW8es03nehqIDIAWdQw9hYLoG8JAnZGtLKLIFXcS', 'BGKyJ9n4t05fjC2QWGTqxPCZhe8fybN7DvVdC8M3b58gx1mj0IFdoJdcijVm', '2018-05-07 11:00:04', '2018-06-03 08:59:05'),
(55, 'A6478', 'Bouabou', 'carl', '4', 1, '$2y$10$LFTtbl.bOh/14MywuXTJ.OrUgvB1k5xYOYrP5YCVeMS/8kpNIO9t6', 'l6pWsBnxIbLZnoWtTM8VHhtd1fhcPMAcIewqM7QMidlhr5YJtBdLeFyDU6MY', '2018-05-07 11:00:30', '2018-06-03 09:39:06'),
(56, '7', 'Koffi', '', '2', 1, '$2y$10$HiiS6NkxNJZaQxxf.Rgr9eqk4a/x4UYq0cpzw63A.E3YTSSRDxwYi', 'TcDf4F3joWg7enyutAu78Vv7w09a54mtWHFTt1S3N7Yh3vThCV4Rw19PsxEp', '2018-05-07 11:03:41', '2018-05-07 11:03:41'),
(57, '8', 'Tanoh', '', '2', 1, '$2y$10$ipOMbo6NyQDYVfxIRoiI7uYLRUTN5Rr.ABx8a5y../mRvYB3inZj.', NULL, '2018-05-07 11:04:25', '2018-05-07 11:04:25'),
(58, '90', 'Bamba', 'mamadou', '2', 1, '$2y$10$YyUMynXYHmulsmqpz804yOG.RIztUZRXTZjUw9BhLGnl6ODS68rPy', 'iDfAcOmfO8aKOZo7NfMtFovG2Da9Wm1v8IZxz3cbqXcOUnQ4ftc5zLjV8nnY', '2018-05-07 11:55:12', '2018-06-03 09:36:31'),
(59, '10', 'Kouadio', '', '3', 1, '$2y$10$fLJKwJ60ds60un.OsU77/.6vbCgI0hGc4FNmu9xKv02LnOmPfOYrC', 'zQGpjBzHVgZqPNZSpJbtyp38V92MblGKLxsAdJIZGseIFVgAvnbl6MwTNHqz', '2018-05-07 11:55:43', '2018-05-07 11:55:43'),
(60, '11', 'Houphouet', '', '6', 1, '$2y$10$mZZrA4rishp6Vz5A7ZvHB.ki.jk4hPNy5d0dmljtm4YCZ.AN0k5ly', '87NHQHomPNHP3Ie8KG59q0hHdgGpMA9WgttcuNW9OCMeXRtiftc0YZ3nrg2o', '2018-05-07 13:11:03', '2018-05-07 13:11:03'),
(61, '12', 'Kanate Jule', '', '5', 3, '$2y$10$d4hL8D.FNa4QraiiO3Ay/uef6Q5gqL7x2N9O.Tsq.f8Mb.6jHV.by', 'xiIYJhaKbuUziofw1s8ALhUZnjgLwVesfQgZQvCgphm4nlotsfQuQxN9KtF9', '2018-05-07 13:20:03', '2018-05-07 13:20:03'),
(62, 'A4444', 'Billy', 'Devon', '2', 1, '$2y$10$aExm4TPNskGorrcXLmtE1OINl8Fem4zNCgHYKlRsmcZ7UMt1ws1lm', NULL, '2018-06-03 10:20:18', '2018-06-03 10:20:18');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `matutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonctionutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwdutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`matutil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `services`
--
ALTER TABLE `services` ADD FULLTEXT KEY `codedir` (`codedir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
