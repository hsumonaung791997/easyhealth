-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: easyhealth
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Health Blogs','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',4,1,18,'2020-01-03 03:21:41','2020-01-03 03:21:41'),(2,'Press Release Blog','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',5,1,17,'2020-01-03 03:22:02','2020-01-03 03:22:02'),(3,'Press Release Blog','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',6,1,17,'2020-01-03 03:22:03','2020-01-03 03:22:03'),(4,'New Health Blog','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',7,1,18,'2020-01-03 03:22:30','2020-01-03 03:22:30');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profiles`
--

LOCK TABLES `company_profiles` WRITE;
/*!40000 ALTER TABLE `company_profiles` DISABLE KEYS */;
INSERT INTO `company_profiles` VALUES (1,'Our Profile','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',22,'2020-01-03 03:37:03','2020-01-03 03:37:03'),(2,'Easy Health Profile','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',23,'2020-01-03 03:38:51','2020-01-03 03:38:51'),(3,'Easy Health','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',24,'2020-01-03 03:39:13','2020-01-03 03:39:13');
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
INSERT INTO `doctors` VALUES (1,'Mr John','MBBS','General Dr','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',12,1,'2020-01-03 03:30:36','2020-01-03 03:30:36'),(2,'Mrs Jenny','NCSC','Special Nurse','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',13,1,'2020-01-03 03:31:07','2020-01-03 03:31:07'),(3,'Mrs Honey','MBBS','General Dr','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',14,1,'2020-01-03 03:31:36','2020-01-03 03:31:36'),(4,'Mr Jone','DNSC','Special Dental Doctor','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',15,1,'2020-01-03 03:32:26','2020-01-03 03:32:26');
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
INSERT INTO `locations` VALUES (1,'Easy Helath Center 1','Bahan Township','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>','16.804916','96.137416','09441155447','2020-01-03 02:42:32','2020-01-03 02:42:32'),(2,'Easy Helath Center 3','Haledan Center','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>','16.826403','96.130301','09259877509','2020-01-03 02:44:35','2020-01-03 02:44:53'),(3,'Easy Helath Center','Sanyeit Nyein','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>','16.833106','96.129403','09254787288','2020-01-03 03:26:29','2020-01-03 03:26:29'),(4,'Easy Health Care','Haledan','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>','16.826534','96.128821','09254787288','2020-01-03 03:28:05','2020-01-03 03:28:05'),(5,'Easy Health Center 5','San Chaung','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>','16.785333','96.141937','09259877508','2020-01-03 03:30:03','2020-01-03 03:30:03');
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medias`
--

LOCK TABLES `medias` WRITE;
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` VALUES (1,'2537574689.jpeg','upload/services/2020/01/','jpeg','7552','d.jpeg',NULL,NULL),(2,'1716662895.jpeg','upload/services/2020/01/','jpeg','11808','e.jpeg',NULL,NULL),(4,'1422060547.jpeg','upload/blogs/2020/01/','jpeg','40547','ss.jpeg',NULL,NULL),(5,'1719923372.jpeg','upload/blogs/2020/01/','jpeg','37567','gg.jpeg',NULL,NULL),(6,'1063376615.jpeg','upload/blogs/2020/01/','jpeg','37567','gg.jpeg',NULL,NULL),(7,'1029428367.jpeg','upload/blogs/2020/01/','jpeg','40299','ff.jpeg',NULL,NULL),(8,'1474462586.jpeg','upload/services/2020/01/','jpeg','7552','d.jpeg',NULL,NULL),(9,'1620555891.jpeg','upload/services/2020/01/','jpeg','6393','h.jpeg',NULL,NULL),(10,'1110852366.jpeg','upload/services/2020/01/','jpeg','7552','d.jpeg',NULL,NULL),(11,'4428156797.jpeg','upload/services/2020/01/','jpeg','24635','cc.jpeg',NULL,NULL),(12,'3750685296.jpeg','upload/doctors/2020/01/','jpeg','40547','ss.jpeg',NULL,NULL),(13,'3030044842.jpeg','upload/doctors/2020/01/','jpeg','40299','ff.jpeg',NULL,NULL),(14,'1459967227.jpeg','upload/doctors/2020/01/','jpeg','37567','jj.jpeg',NULL,NULL),(15,'7436162920.jpeg','upload/doctors/2020/01/','jpeg','40547','ss.jpeg',NULL,NULL),(16,'1919254414.jpeg','upload/whyus/2020/01/','jpeg','12248','q.jpeg',NULL,NULL),(17,'2850709716.jpeg','upload/whyus/2020/01/','jpeg','11808','e.jpeg',NULL,NULL),(18,'2731113641.jpeg','upload/partners/2020/01/','jpeg','6555','aa.jpeg',NULL,NULL),(19,'6622845846.png','upload/partners/2020/01/','png','1811','images.png',NULL,NULL),(20,'9626157266.jpeg','upload/partners/2020/01/','jpeg','7552','d.jpeg',NULL,NULL),(21,'2528746177.png','upload/partners/2020/01/','png','2002','images (1).png',NULL,NULL),(22,'2621699064.jpeg','upload/profiles/2020/01/','jpeg','6393','h.jpeg',NULL,NULL),(23,'1934933550.jpeg','upload/profiles/2020/01/','jpeg','12100','hh.jpeg',NULL,NULL),(24,'2507464284.jpeg','upload/profiles/2020/01/','jpeg','26103','kk.jpeg',NULL,NULL),(25,'1967047428.jpg','upload/teams/2020/01/','jpg','42048','team.jpg',NULL,NULL),(26,'5791266022.jpeg','upload/teams/2020/01/','jpeg','26103','kk.jpeg',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (60,'2014_10_12_000000_create_users_table',1),(61,'2014_10_12_100000_create_password_resets_table',1),(62,'2019_11_07_084830_create_categories_table',1),(63,'2019_11_07_101121_create_medias_table',1),(64,'2019_11_08_034337_create_blogs_table',1),(65,'2019_11_08_035826_create_services_table',1),(66,'2019_11_14_062600_create_locations_table',1),(67,'2019_11_27_090406_create_doctors_table',1),(68,'2019_11_27_093920_create_whyuses_table',1),(69,'2019_12_16_095401_create_partners_table',1),(70,'2019_12_16_103248_create_teams_table',1),(71,'2019_12_17_031006_create_value_propositions_table',1),(72,'2019_12_17_035524_create_company_profiles_table',1),(73,'2019_12_23_043947_position',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'Secure Link','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',18,'2020-01-03 03:33:40','2020-01-03 03:33:40'),(2,'Billion Bright','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',19,'2020-01-03 03:34:57','2020-01-03 03:34:57'),(3,'Easy Health','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',20,'2020-01-03 03:35:18','2020-01-03 03:35:18'),(4,'Partner Co','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',21,'2020-01-03 03:36:02','2020-01-03 03:36:02');
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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'GP services','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',1,1,NULL,11,'2020-01-03 03:06:17','2020-01-03 03:06:17'),(2,'Health Assessment','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',2,1,NULL,12,'2020-01-03 03:07:00','2020-01-03 03:07:00'),(3,'Private GP Service','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',8,1,NULL,11,'2020-01-03 03:23:10','2020-01-03 03:23:10'),(4,'Miniphrase Serivce','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',9,1,NULL,13,'2020-01-03 03:23:57','2020-01-03 03:23:57'),(5,'New Gp Service','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',10,1,1,11,'2020-01-03 03:24:25','2020-01-03 03:24:25'),(6,'New Health Assessment Service','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',11,1,2,12,'2020-01-03 03:24:54','2020-01-03 03:24:54');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Management Team','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',25,'2020-01-03 03:42:30','2020-01-03 03:42:30','General Dr'),(2,'Management Team','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',26,'2020-01-03 03:43:01','2020-01-03 03:43:01','General Dr');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','$2y$10$fP/nSt4nYMuTizBMkLY3Meuw39.cEc5XacZdkVNKxkjYE2r4.c5rO',NULL,'2020-01-03 02:39:56','2020-01-03 02:39:56');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `value_propositions`
--

LOCK TABLES `value_propositions` WRITE;
/*!40000 ALTER TABLE `value_propositions` DISABLE KEYS */;
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
INSERT INTO `whyuses` VALUES (1,'About Whyus','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',16,1,'2020-01-03 03:07:33','2020-01-03 03:32:50'),(2,'Why Us','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',17,1,'2020-01-03 03:33:12','2020-01-03 03:33:12');
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

-- Dump completed on 2020-01-03 17:02:56
