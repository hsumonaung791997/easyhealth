-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: easyhealth
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `type` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'New Health BLog','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',30,1,18,'2020-01-12 20:33:05','2020-02-04 20:29:53'),(2,'New Press Release Blog','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',29,1,17,'2020-01-12 20:33:38','2020-02-04 20:28:55'),(3,'Updated Health Blog','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',28,1,18,'2020-01-12 20:35:45','2020-02-04 20:27:52'),(4,'Latest Press Release Blog','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',27,1,17,'2020-01-12 20:36:29','2020-02-04 20:25:23'),(5,'Latest Press Release Post','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',48,1,17,'2020-02-05 23:46:04','2020-02-05 23:46:04'),(6,'Latest New Health Post','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',49,1,18,'2020-02-05 23:46:48','2020-02-05 23:46:48');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profiles`
--

LOCK TABLES `company_profiles` WRITE;
/*!40000 ALTER TABLE `company_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Mr Jone','MBBS','General Diseases Doctor','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',14,1,'2020-02-03 07:48:57','2020-02-03 07:48:57'),(2,'Mrs Jenny','MBBS','General Dr','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',31,1,'2020-02-04 20:36:04','2020-02-04 20:36:04'),(3,'Mr John','MBBS','Eye Specialist Doctor','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',32,1,'2020-02-04 20:37:03','2020-02-04 20:37:03'),(4,'Jassica','NCSC','Nursing','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>',34,1,'2020-02-04 22:36:51','2020-02-04 22:37:07');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Haledan Easy Health Center','Haledan Center','<p>It is near the Pacific Office and in the Haledan Center</p>','16.826033','96.130215','09441155447','2020-02-02 22:35:49','2020-02-02 22:35:49'),(2,'Easy Health Care Center 3','Myayni Gone','<p>It is easyhealth center 2</p>','16.804665','96.137491','09254787288','2020-02-04 23:47:25','2020-02-04 23:47:25'),(3,'Easy Health Care Center 3','Pansodan Office Tower','<p>It is easy health care center 3</p>','16.775843','96.161583','09441155447','2020-02-04 23:49:44','2020-02-04 23:49:44'),(4,'Easy Health Care Center 4','Kyawt Myaung','<p>awfsgfsegs</p>','16.902843','96.135442','09254787288','2020-02-04 23:54:05','2020-02-04 23:54:05'),(5,'Easy Health Care Center Care 5','Near Sule  Pagoda','<p>It is easy health care center 5</p>','16.774599','96.158873','09441155447','2020-02-05 00:07:43','2020-02-05 00:07:43');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medias`
--

DROP TABLE IF EXISTS `medias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medias`
--

LOCK TABLES `medias` WRITE;
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` VALUES (1,'2384102192.png','upload/services/2020/01/','png','253512','blog1.png',NULL,NULL),(2,'5913026785.png','upload/services/2020/01/','png','322196','women-health.png',NULL,NULL),(3,'1149055018.png','upload/services/2020/01/','png','248988','about.png',NULL,NULL),(4,'6649778351.png','upload/services/2020/01/','png','322196','women-health.png',NULL,NULL),(5,'2887142023.jpeg','upload/services/2020/01/','jpeg','37567','gg.jpeg',NULL,NULL),(6,'3257179070.jpeg','upload/blogs/2020/01/','jpeg','11808','e.jpeg',NULL,NULL),(7,'3255856685.jpeg','upload/blogs/2020/01/','jpeg','12100','hh.jpeg',NULL,NULL),(8,'2486295406.jpeg','upload/blogs/2020/01/','jpeg','37567','jj.jpeg',NULL,NULL),(10,'1195383277.jpeg','upload/blogs/2020/01/','jpeg','12100','hh.jpeg',NULL,NULL),(11,'1357565319.jpeg','upload/services/2020/01/','jpeg','11808','e.jpeg',NULL,NULL),(12,'1456353525.jpeg','upload/services/2020/01/','jpeg','40299','ff.jpeg',NULL,NULL),(13,'2826730009.jpeg','upload/services/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(14,'1471899524.jpeg','upload/doctors/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(15,'3330908524.jpeg','upload/services/2020/02/','jpeg','11808','e.jpeg',NULL,NULL),(16,'2868005921.jpeg','upload/services/2020/02/','jpeg','11808','e.jpeg',NULL,NULL),(17,'2673016976.jpeg','upload/services/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(19,'1742960248.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(20,'1506098125.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(21,'1771073700.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(22,'3106852101.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(23,'5941664395.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(24,'3040756338.png','upload/partners/2020/02/','png','15702','partner1.png',NULL,NULL),(25,'3336524904.png','upload/whyus/2020/02/','png','248988','about.png',NULL,NULL),(26,'1301419182.png','upload/whyus/2020/02/','png','248988','about.png',NULL,NULL),(27,'8691094618.jpeg','upload/blogs/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(28,'2374695221.jpeg','upload/blogs/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(29,'2464649607.jpeg','upload/blogs/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(30,'2593895173.jpeg','upload/blogs/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(31,'1304016847.jpeg','upload/doctors/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(32,'1244094113.jpeg','upload/doctors/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(33,'2305396717.jpeg','upload/value_proposition/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(34,'2433391663.jpeg','upload/doctors/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(35,'2603258383.png','upload/value_proposition/2020/02/','png','1811','images.png',NULL,NULL),(36,'2976975676.jpeg','upload/teams/2020/02/','jpeg','37567','jj.jpeg',NULL,NULL),(37,'3160436048.jpeg','upload/services/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL),(39,'1333989307.png','upload/services/2020/02/','png','322196','women-health.png',NULL,NULL),(41,'6465250397.jpg','upload/teamcover/2020/02/','jpg','153051','medical-management.jpg',NULL,NULL),(42,'5095320171.jpg','upload/teamcover/2020/02/','jpg','153051','medical-management.jpg',NULL,NULL),(43,'2046065727.png','upload/teams/2020/02/','png','337798','clinic-2.png',NULL,NULL),(44,'6207661609.png','upload/teams/2020/02/','png','337798','clinic-2.png',NULL,NULL),(45,'1045970707.png','upload/services/2020/02/','png','337798','clinic-2.png',NULL,NULL),(46,'2494065618.png','upload/teams/2020/02/','png','337798','clinic-2.png',NULL,NULL),(47,'1950868891.jpg','upload/teamcover/2020/02/','jpg','153051','medical-management.jpg',NULL,NULL),(48,'3159165471.jpeg','upload/blogs/2020/02/','jpeg','40299','ff.jpeg',NULL,NULL),(49,'1091055231.jpeg','upload/blogs/2020/02/','jpeg','37567','gg.jpeg',NULL,NULL);
/*!40000 ALTER TABLE `medias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (116,'2014_10_12_000000_create_users_table',1),(117,'2014_10_12_100000_create_password_resets_table',1),(118,'2019_11_07_084830_create_categories_table',1),(119,'2019_11_07_101121_create_medias_table',1),(120,'2019_11_08_034337_create_blogs_table',1),(121,'2019_11_08_035826_create_services_table',1),(122,'2019_11_14_062600_create_locations_table',1),(123,'2019_11_27_090406_create_doctors_table',1),(124,'2019_11_27_093920_create_whyuses_table',1),(125,'2019_12_16_095401_create_partners_table',1),(126,'2019_12_16_103248_create_teams_table',1),(127,'2019_12_17_031006_create_value_propositions_table',1),(128,'2019_12_17_035524_create_company_profiles_table',1),(129,'2019_12_23_043947_position',1),(130,'2020_02_05_103220_create_teamcovers_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',19,'2020-02-03 20:31:51','2020-02-03 20:31:51'),(2,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',20,'2020-02-03 20:32:39','2020-02-03 20:32:39'),(3,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',21,'2020-02-03 20:33:14','2020-02-03 20:33:14'),(4,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',22,'2020-02-03 20:33:57','2020-02-03 20:33:57'),(5,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',23,'2020-02-03 20:34:27','2020-02-03 20:34:27'),(6,'Family Medical Center','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',24,'2020-02-03 20:35:01','2020-02-03 20:35:01');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `content_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_three` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'Our Services','<p>&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',2,1,3,11,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n</ul>',NULL,'2020-01-10 02:36:54','2020-02-05 20:42:34'),(3,'Health Screenings and Diagnostics','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',3,1,NULL,11,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>',NULL,'2020-01-10 02:54:29','2020-02-06 00:39:24'),(4,'Corporate B2B Healthcare','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',4,1,NULL,12,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2>Pregnancy testing</h2>\r\n	</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>','<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n</ul>','2020-01-10 02:57:17','2020-02-06 00:44:14'),(5,'Miniphrase Services','<h3>&nbsp;In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</h3>',5,1,4,13,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>',NULL,'2020-01-10 02:58:47','2020-01-10 02:58:47'),(6,'New Miniphrase Serivce','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',11,1,4,13,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>',NULL,'2020-01-15 21:59:26','2020-01-15 21:59:26'),(7,'Latest Health Assessment Blog','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',12,1,3,12,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>',NULL,'2020-01-15 22:12:12','2020-01-15 22:12:12'),(8,'Home Services','<p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.</p>',13,1,NULL,11,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n</ul>',NULL,'2020-02-03 03:59:21','2020-02-06 00:41:47'),(9,'Health Screenings and Diagnostics','<p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.</p>',17,1,NULL,11,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n</ul>',NULL,'2020-02-03 04:15:19','2020-02-06 00:41:14'),(11,'Telemedicine Services','<p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.</p>',15,1,NULL,11,'<h3>Why should I choose private GP services with easy health?</h3>\r\n\r\n<ul>\r\n	<li>You don&rsquo;t need to be a Bupa member to book a private GP appointment</li>\r\n	<li>You can normally see a doctor on the same day if you need an urgent GP appointment</li>\r\n	<li>All of our costs are up front so you&rsquo;ll have no hidden surprises</li>\r\n	<li>You can book your appointment online or via a dedicated telephone booking team at a time convenient to you</li>\r\n	<li>We have experienced doctors and offer a high quality and professional service</li>\r\n	<li>Our customers love our service</li>\r\n</ul>',NULL,'2020-02-03 04:26:50','2020-02-06 00:42:40'),(12,'Health Core','<p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,1,3,12,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,'2020-02-05 01:58:27','2020-02-05 01:58:27'),(13,'Health Peak','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',37,1,3,12,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','<ul>\r\n	<li>Total assessment time - 60 minutes</li>\r\n	<li>&nbsp;Test time - 30 minutes</li>\r\n	<li>&nbsp;Review time - 30 minutes with a health adviser</li>\r\n	<li>&nbsp;Age range - Designed with those under 40 in mind, but</li>\r\n	<li>available to everyone over 18</li>\r\n	<li>Provide good health care<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ul>','2020-02-05 03:15:36','2020-02-05 03:26:54'),(14,'Private GP','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',39,1,8,11,'<p>Why should I choose private GP services with easy health?</p>\r\n\r\n<ul>\r\n	<li>You don&rsquo;t need to be a Bupa member to book a private GP appointment</li>\r\n	<li>You can normally see a doctor on the same day if you need an urgent GP appointment</li>\r\n	<li>All of our costs are up front so you&rsquo;ll have no hidden surprises</li>\r\n	<li>You can book your appointment online or via a dedicated telephone booking team at a time convenient to you</li>\r\n	<li>We have experienced doctors and offer a high quality and professional service</li>\r\n	<li>Our customers love our service</li>\r\n</ul>',NULL,'2020-02-05 03:17:36','2020-02-05 03:43:32'),(15,'Mature Health','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,1,3,12,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','<ul>\r\n	<li>&nbsp;Total assessment time - 60 minutes</li>\r\n	<li>&nbsp;Test time - 30 minutes</li>\r\n	<li>&nbsp;Review time - 30 minutes with a health adviser</li>\r\n	<li>&nbsp;Age range - Designed with those under 40 in mind, but available to everyone over 18</li>\r\n</ul>','2020-02-05 08:36:31','2020-02-05 08:36:31'),(16,'Mature Health','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,1,3,12,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','<ul>\r\n	<li>&nbsp;Total assessment time - 60 minutes</li>\r\n	<li>&nbsp;Test time - 30 minutes</li>\r\n	<li>&nbsp;Review time - 30 minutes with a health adviser</li>\r\n	<li>&nbsp;Age range - Designed with those under 40 in mind, but available to everyone over 18</li>\r\n</ul>','2020-02-05 08:36:34','2020-02-05 08:36:34'),(17,'Private GP Services','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',45,1,NULL,11,'<h3>We cover a wide range of male focused healthcare concerns including:</h3>\r\n\r\n<ul>\r\n	<li>Erectile dysfunction</li>\r\n	<li>Testicular lumps</li>\r\n	<li>Testicular pain</li>\r\n	<li>Bladder or prostate symptoms</li>\r\n	<li>Testicular examination and advice/demonstration of self-examination techniques</li>\r\n	<li>Prostate examination and PSA testing (screening for prostate cancer)</li>\r\n	<li>Pre-pregnancy advice</li>\r\n	<li>Osteoporosis and assessment of osteoporosis risk</li>\r\n</ul>',NULL,'2020-02-05 10:27:44','2020-02-06 00:33:01');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teamcovers`
--

DROP TABLE IF EXISTS `teamcovers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teamcovers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teamcovers`
--

LOCK TABLES `teamcovers` WRITE;
/*!40000 ALTER TABLE `teamcovers` DISABLE KEYS */;
INSERT INTO `teamcovers` VALUES (1,'Our Management Team',42,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','2020-02-05 04:59:18','2020-02-05 10:13:38'),(3,'Our Coporate Team',47,'<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2020-02-05 10:58:03','2020-02-05 10:58:03');
/*!40000 ALTER TABLE `teamcovers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Doctor Team','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',46,'2020-02-05 01:12:55','2020-02-05 10:48:12','General Diseases Doctors'),(2,'Nursing Team','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',43,'2020-02-05 10:15:44','2020-02-05 10:15:44','Nurse'),(3,'Special Doctors','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',44,'2020-02-05 10:16:41','2020-02-05 10:16:41','General Diseases Doctors');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','$2y$10$ZgS5EQKJNDqYznxIb45Rxu/hB4ZNzVwu2K7ZDESnFvO6Sm4i4h4CS','TOOzIytlZLjEbLasDCjj0zbSkCKOIXPmb6ieLlYft3k7Sw1roTFbOHZwZJxl','2020-01-10 02:07:53','2020-01-10 02:07:53'),(2,'admin11','admin11@gmail.com','$2y$10$pbCctFMeI24k.32Kaa6V.evaQFeOqb.l3/2t07RZnge7GsEC6LJwK',NULL,'2020-01-13 01:36:34','2020-01-13 01:36:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `value_propositions`
--

DROP TABLE IF EXISTS `value_propositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `value_propositions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `value_propositions`
--

LOCK TABLES `value_propositions` WRITE;
/*!40000 ALTER TABLE `value_propositions` DISABLE KEYS */;
INSERT INTO `value_propositions` VALUES (1,'fasfsg','<p>sfsgg</p>',33,1,'2020-02-04 22:27:39','2020-02-04 22:27:39'),(2,'afafdaf','<p>afdafaf</p>',35,1,'2020-02-04 22:45:05','2020-02-04 22:45:05');
/*!40000 ALTER TABLE `value_propositions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `whyuses`
--

DROP TABLE IF EXISTS `whyuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `whyuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whyuses`
--

LOCK TABLES `whyuses` WRITE;
/*!40000 ALTER TABLE `whyuses` DISABLE KEYS */;
INSERT INTO `whyuses` VALUES (1,'easy health - Myanmar’s First & Only Convenient-Care Clinic Chain','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',25,1,'2020-02-03 20:40:11','2020-02-03 20:40:11'),(2,'easy health - Myanmar’s First & Only Convenient-Care Clinic Chain','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',26,1,'2020-02-03 20:41:22','2020-02-03 20:41:22');
/*!40000 ALTER TABLE `whyuses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-06 13:51:00
