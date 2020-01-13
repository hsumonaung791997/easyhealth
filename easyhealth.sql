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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medias`
--

LOCK TABLES `medias` WRITE;
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` VALUES (1,'2384102192.png','upload/services/2020/01/','png','253512','blog1.png',NULL,NULL),(2,'5913026785.png','upload/services/2020/01/','png','322196','women-health.png',NULL,NULL),(3,'1149055018.png','upload/services/2020/01/','png','248988','about.png',NULL,NULL),(4,'6649778351.png','upload/services/2020/01/','png','322196','women-health.png',NULL,NULL),(5,'2887142023.jpeg','upload/services/2020/01/','jpeg','37567','gg.jpeg',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (116,'2014_10_12_000000_create_users_table',1),(117,'2014_10_12_100000_create_password_resets_table',1),(118,'2019_11_07_084830_create_categories_table',1),(119,'2019_11_07_101121_create_medias_table',1),(120,'2019_11_08_034337_create_blogs_table',1),(121,'2019_11_08_035826_create_services_table',1),(122,'2019_11_14_062600_create_locations_table',1),(123,'2019_11_27_090406_create_doctors_table',1),(124,'2019_11_27_093920_create_whyuses_table',1),(125,'2019_12_16_095401_create_partners_table',1),(126,'2019_12_16_103248_create_teams_table',1),(127,'2019_12_17_031006_create_value_propositions_table',1),(128,'2019_12_17_035524_create_company_profiles_table',1),(129,'2019_12_23_043947_position',1);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Gp Services','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',1,1,NULL,11,'<h2>We cover a wide range of female focused health concerns, including:Pregnancy testing</h2>\r\n\r\n<ul>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n</ul>','2020-01-10 02:13:27','2020-01-10 02:13:27'),(2,'Woman Health','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',2,1,1,11,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n</ul>','2020-01-10 02:36:54','2020-01-10 02:36:54'),(3,'Health Assessment','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',3,1,NULL,12,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>','2020-01-10 02:54:29','2020-01-10 02:54:29'),(4,'Miniphrase Serivce','<p>In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</p>',4,1,NULL,13,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2>Pregnancy testing</h2>\r\n	</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>','2020-01-10 02:57:17','2020-01-10 02:57:17'),(5,'Miniphrase Services','<h3>&nbsp;In&nbsp;<a href=\"https://en.wikipedia.org/wiki/Publishing\">publishing</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphic_design\">graphic design</a>,&nbsp;<strong>lorem ipsum</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Placeholder_text\">placeholder text</a>&nbsp;commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final&nbsp;<a href=\"https://en.wikipedia.org/wiki/Copy_(written)\">copy</a>&nbsp;is available, but it may also be used to temporarily replace copy in a process called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Greeking\">greeking</a>, which allows designers to consider form without the meaning of the text influencing the design.</h3>',5,1,4,13,'<h2>We cover a wide range of female focused health concerns, including:</h2>\r\n\r\n<ul>\r\n	<li>Pregnancy testing</li>\r\n	<li>Smear tests (aged 25 and over) for cervical cancer</li>\r\n	<li>Discussion and advice on contraceptive choices</li>\r\n	<li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection</li>\r\n	<li>Pelvic pain</li>\r\n	<li>Vaginal discharge</li>\r\n	<li>Period problems</li>\r\n	<li>Menopause and HRT</li>\r\n	<li>Genital itching or irritation</li>\r\n	<li>Genital lumps or ulcers</li>\r\n	<li>Breast lumps</li>\r\n	<li>Breast pain</li>\r\n</ul>','2020-01-10 02:58:47','2020-01-10 02:58:47');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
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
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','$2y$10$ZgS5EQKJNDqYznxIb45Rxu/hB4ZNzVwu2K7ZDESnFvO6Sm4i4h4CS',NULL,'2020-01-10 02:07:53','2020-01-10 02:07:53');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whyuses`
--

LOCK TABLES `whyuses` WRITE;
/*!40000 ALTER TABLE `whyuses` DISABLE KEYS */;
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

-- Dump completed on 2020-01-10 17:20:01
