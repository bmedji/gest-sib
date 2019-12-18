-- MySQL dump 10.13  Distrib 5.5.62, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_projet
-- ------------------------------------------------------
-- Server version	5.5.62-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agences`
--

DROP TABLE IF EXISTS `agences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codeagence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libagence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agences`
--

LOCK TABLES `agences` WRITE;
/*!40000 ALTER TABLE `agences` DISABLE KEYS */;
INSERT INTO `agences` VALUES (2,'1','Abidjan','2018-04-23 21:19:03','2018-04-23 21:21:08'),(3,'2','Yamoussokro','2018-04-23 22:12:35','2018-04-23 22:12:35');
/*!40000 ALTER TABLE `agences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codecli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomcli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenomcli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numerodecomptecli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matgest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`codecli`),
  KEY `matgest` (`matgest`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directions`
--

DROP TABLE IF EXISTS `directions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codedir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelledir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`codedir`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directions`
--

LOCK TABLES `directions` WRITE;
/*!40000 ALTER TABLE `directions` DISABLE KEYS */;
INSERT INTO `directions` VALUES (1,'AS2000','Agence Sib 2000','2018-04-23 02:59:56','2018-04-23 00:46:26'),(8,'AS2002','Gagnoa','2018-06-02 11:54:32','2018-06-02 11:54:32'),(3,'DCDM','Direction Commerciale et Développement Marketing','2018-04-23 00:46:26','2018-04-23 00:46:26'),(4,'DG','Direction générale','2018-04-23 00:46:26','2018-04-23 00:46:26'),(5,'DGE','Direction des \r\ngrandes entreprises','2018-04-23 00:46:26','2018-04-23 00:46:26'),(6,'DOP','Direction des opérations','2018-04-23 00:46:26','2018-04-23 00:46:26');
/*!40000 ALTER TABLE `directions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonctionnalites`
--

DROP TABLE IF EXISTS `fonctionnalites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fonctionnalites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codefonc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libfonc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codefonc`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonctionnalites`
--

LOCK TABLES `fonctionnalites` WRITE;
/*!40000 ALTER TABLE `fonctionnalites` DISABLE KEYS */;
INSERT INTO `fonctionnalites` VALUES (2,'1','Admin','2018-04-23 21:52:47','2018-04-23 21:52:47'),(3,'2','Gestionnaire','2018-04-23 23:34:25','2018-04-27 01:59:16'),(4,'3','Superviseur','2018-04-24 16:10:18','2018-04-24 16:10:18'),(5,'4','Smc','2018-04-26 21:50:48','2018-04-27 01:59:02'),(6,'5','Unite Traitante','2018-04-27 08:27:57','2018-04-27 08:28:50'),(7,'6','Df','2018-05-07 10:03:10','2018-05-07 10:03:10');
/*!40000 ALTER TABLE `fonctionnalites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gestionnaires`
--

DROP TABLE IF EXISTS `gestionnaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gestionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matgest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomprengest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agencegest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`matgest`),
  KEY `idserv` (`idserv`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestionnaires`
--

LOCK TABLES `gestionnaires` WRITE;
/*!40000 ALTER TABLE `gestionnaires` DISABLE KEYS */;
INSERT INTO `gestionnaires` VALUES (1,'1','lebron james','1','1','2018-04-24 01:28:24','0000-00-00 00:00:00'),(7,'2','Ouattara draman','2','1','2018-04-23 23:01:12','2018-04-23 23:00:17'),(4,'4','Bougny jules','2','2','2018-04-23 22:15:44','2018-04-23 22:15:44');
/*!40000 ALTER TABLE `gestionnaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_04_07_183509_create_clients_table',1),(4,'2018_04_07_184513_create_gestionnaires_table',1),(5,'2018_04_07_184652_create_reclamations_table',1),(6,'2018_04_07_185046_create_directions_table',1),(7,'2018_04_07_185200_create_services_table',1),(8,'2018_04_07_185413_create_type_services_table',1),(11,'2018_04_07_185502_create_utilisateurs_table',2),(12,'2018_04_13_134230_refresh',2),(13,'2018_04_20_193316_create_fonctionnalites_table',3),(14,'2018_04_23_214734_create_agences_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclamations`
--

DROP TABLE IF EXISTS `reclamations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclamations` (
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
  `PieceComptable` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`referencerec`),
  KEY `codecli` (`codecli`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclamations`
--

LOCK TABLES `reclamations` WRITE;
/*!40000 ALTER TABLE `reclamations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reclamations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelleserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codedir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtypeserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idserv`),
  KEY `idtypeserv` (`idtypeserv`),
  KEY `idtypeserv_2` (`idtypeserv`),
  KEY `id` (`id`),
  FULLTEXT KEY `codedir` (`codedir`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (7,'1','','','','2018-04-23 05:24:51','2018-04-23 05:24:51'),(1,'2','SOL','DG','2','2018-04-23 05:24:51','2018-04-23 04:46:04'),(2,'3','BOM','DG','1','2018-04-23 05:05:53','2018-04-23 05:05:53'),(9,'4','LOL','DG','1','2018-05-30 01:29:58','2018-05-30 01:29:58');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_services`
--

DROP TABLE IF EXISTS `type_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtypeserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libtypserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idtypeserv`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_services`
--

LOCK TABLES `type_services` WRITE;
/*!40000 ALTER TABLE `type_services` DISABLE KEYS */;
INSERT INTO `type_services` VALUES (1,'1','Service émetteur','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'2','Service traitant','2018-04-23 03:45:16','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `type_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (25,'1','Koffi','Bertrand','1',1,'$2y$10$X6Ifh6wza69.BDrtbiy9Tum1fsWV5jNxaED5IIOeXkd472OUblkHa','MqALnIb9v3UnYmd8ImaeRQuv6lijhYzWS35q6yk6rA5roopJMMeS4MDGCCcT',NULL,'2018-06-03 08:58:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `matutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonctionutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwdutil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idserv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`matutil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-18  0:42:02
