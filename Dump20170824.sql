-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: chim
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `crime_places`
--

DROP TABLE IF EXISTS `crime_places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crime_places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `tel` text COLLATE utf8mb4_unicode_ci,
  `lat` text COLLATE utf8mb4_unicode_ci,
  `lng` text COLLATE utf8mb4_unicode_ci,
  `owner_name` text COLLATE utf8mb4_unicode_ci,
  `owner_age` text COLLATE utf8mb4_unicode_ci,
  `owner_identity` text COLLATE utf8mb4_unicode_ci,
  `owner_address_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_at` text COLLATE utf8mb4_unicode_ci,
  `manager_name` text COLLATE utf8mb4_unicode_ci,
  `manager_age` text COLLATE utf8mb4_unicode_ci,
  `manager_identity` text COLLATE utf8mb4_unicode_ci,
  `manager_address_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_address_tel` text COLLATE utf8mb4_unicode_ci,
  `manager_current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_current_address_tel` text COLLATE utf8mb4_unicode_ci,
  `place_desc` text COLLATE utf8mb4_unicode_ci,
  `place_event` text COLLATE utf8mb4_unicode_ci,
  `place_note` text COLLATE utf8mb4_unicode_ci,
  `place_crime_desc` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_deleted` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `crime_places_user_deleted_foreign` (`user_deleted`),
  KEY `crime_places_user_created_foreign` (`user_created`),
  CONSTRAINT `crime_places_user_created_foreign` FOREIGN KEY (`user_created`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `crime_places_user_deleted_foreign` FOREIGN KEY (`user_deleted`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crime_places`
--

LOCK TABLES `crime_places` WRITE;
/*!40000 ALTER TABLE `crime_places` DISABLE KEYS */;
/*!40000 ALTER TABLE `crime_places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criminals`
--

DROP TABLE IF EXISTS `criminals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criminals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_person` text COLLATE utf8mb4_unicode_ci,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci,
  `nickname1` text COLLATE utf8mb4_unicode_ci,
  `nickname2` text COLLATE utf8mb4_unicode_ci,
  `type_identity` text COLLATE utf8mb4_unicode_ci,
  `identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address_tel` text COLLATE utf8mb4_unicode_ci,
  `origin_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_address_tel` text COLLATE utf8mb4_unicode_ci,
  `time_at` text COLLATE utf8mb4_unicode_ci,
  `job` text COLLATE utf8mb4_unicode_ci,
  `workplace_name` text COLLATE utf8mb4_unicode_ci,
  `workplace_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `education` text COLLATE utf8mb4_unicode_ci,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_age` text COLLATE utf8mb4_unicode_ci,
  `father_status` text COLLATE utf8mb4_unicode_ci,
  `father_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_address_tel` text COLLATE utf8mb4_unicode_ci,
  `father_job` text COLLATE utf8mb4_unicode_ci,
  `father_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_age` text COLLATE utf8mb4_unicode_ci,
  `mother_status` text COLLATE utf8mb4_unicode_ci,
  `mother_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_address_tel` text COLLATE utf8mb4_unicode_ci,
  `mother_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_age` text COLLATE utf8mb4_unicode_ci,
  `spouse_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_address_tel` text COLLATE utf8mb4_unicode_ci,
  `spouse_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `child_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_age` text COLLATE utf8mb4_unicode_ci,
  `child_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_address_tel` text COLLATE utf8mb4_unicode_ci,
  `child_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_workplace_tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_tel` text COLLATE utf8mb4_unicode_ci,
  `child_status` text COLLATE utf8mb4_unicode_ci,
  `height` text COLLATE utf8mb4_unicode_ci,
  `shape` text COLLATE utf8mb4_unicode_ci,
  `teeth` text COLLATE utf8mb4_unicode_ci,
  `skin` text COLLATE utf8mb4_unicode_ci,
  `hair` text COLLATE utf8mb4_unicode_ci,
  `head` text COLLATE utf8mb4_unicode_ci,
  `face` text COLLATE utf8mb4_unicode_ci,
  `eyebrow` text COLLATE utf8mb4_unicode_ci,
  `eye` text COLLATE utf8mb4_unicode_ci,
  `ear` text COLLATE utf8mb4_unicode_ci,
  `nose` text COLLATE utf8mb4_unicode_ci,
  `mouse` text COLLATE utf8mb4_unicode_ci,
  `chin` text COLLATE utf8mb4_unicode_ci,
  `beard` text COLLATE utf8mb4_unicode_ci,
  `scar` text COLLATE utf8mb4_unicode_ci,
  `pronunciation` text COLLATE utf8mb4_unicode_ci,
  `noteable` text COLLATE utf8mb4_unicode_ci,
  `behavior` text COLLATE utf8mb4_unicode_ci,
  `favor_place` text COLLATE utf8mb4_unicode_ci,
  `previous_crime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weapon` text COLLATE utf8mb4_unicode_ci,
  `vehicle` text COLLATE utf8mb4_unicode_ci,
  `crime_related` text COLLATE utf8mb4_unicode_ci,
  `crime_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_deleted` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `criminals_user_deleted_foreign` (`user_deleted`),
  KEY `criminals_user_created_foreign` (`user_created`),
  CONSTRAINT `criminals_user_created_foreign` FOREIGN KEY (`user_created`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `criminals_user_deleted_foreign` FOREIGN KEY (`user_deleted`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criminals`
--

LOCK TABLES `criminals` WRITE;
/*!40000 ALTER TABLE `criminals` DISABLE KEYS */;
/*!40000 ALTER TABLE `criminals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_places`
--

DROP TABLE IF EXISTS `general_places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `tel` text COLLATE utf8mb4_unicode_ci,
  `lat` text COLLATE utf8mb4_unicode_ci,
  `lng` text COLLATE utf8mb4_unicode_ci,
  `owner_name` text COLLATE utf8mb4_unicode_ci,
  `owner_age` text COLLATE utf8mb4_unicode_ci,
  `owner_identity` text COLLATE utf8mb4_unicode_ci,
  `owner_address_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_name` text COLLATE utf8mb4_unicode_ci,
  `manager_age` text COLLATE utf8mb4_unicode_ci,
  `manager_identity` text COLLATE utf8mb4_unicode_ci,
  `manager_address_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_address_tel` text COLLATE utf8mb4_unicode_ci,
  `manager_current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_current_address_tel` text COLLATE utf8mb4_unicode_ci,
  `place_desc` text COLLATE utf8mb4_unicode_ci,
  `place_event` text COLLATE utf8mb4_unicode_ci,
  `place_note` text COLLATE utf8mb4_unicode_ci,
  `time_at` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_deleted` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `general_places_user_deleted_foreign` (`user_deleted`),
  KEY `general_places_user_created_foreign` (`user_created`),
  CONSTRAINT `general_places_user_created_foreign` FOREIGN KEY (`user_created`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `general_places_user_deleted_foreign` FOREIGN KEY (`user_deleted`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_places`
--

LOCK TABLES `general_places` WRITE;
/*!40000 ALTER TABLE `general_places` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_06_15_125856_create_tbls',1),(4,'2017_06_17_025502_add_fields_person',1),(5,'2017_06_20_145603_add_type_person_field',1),(6,'2017_06_22_102752_add_criminals_tbl',1),(7,'2017_06_24_153122_add_place_tbl',1),(8,'2017_06_25_134210_add_crime_place_tbl',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_at` text COLLATE utf8mb4_unicode_ci,
  `user_deleted` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_identity` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `job` text COLLATE utf8mb4_unicode_ci,
  `workplace1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplace1_tel` text COLLATE utf8mb4_unicode_ci,
  `workplace2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplace2_tel` text COLLATE utf8mb4_unicode_ci,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address_tel` text COLLATE utf8mb4_unicode_ci,
  `origin_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_address_tel` text COLLATE utf8mb4_unicode_ci,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_age` text COLLATE utf8mb4_unicode_ci,
  `father_status` text COLLATE utf8mb4_unicode_ci,
  `father_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_address_tel` text COLLATE utf8mb4_unicode_ci,
  `father_job` text COLLATE utf8mb4_unicode_ci,
  `father_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_age` text COLLATE utf8mb4_unicode_ci,
  `mother_status` text COLLATE utf8mb4_unicode_ci,
  `mother_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_address_tel` text COLLATE utf8mb4_unicode_ci,
  `mother_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_age` text COLLATE utf8mb4_unicode_ci,
  `spouse_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_address_tel` text COLLATE utf8mb4_unicode_ci,
  `spouse_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `child1_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child1_age` text COLLATE utf8mb4_unicode_ci,
  `child1_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child1_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child1_tel` text COLLATE utf8mb4_unicode_ci,
  `child2_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child2_age` text COLLATE utf8mb4_unicode_ci,
  `child2_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child2_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child2_tel` text COLLATE utf8mb4_unicode_ci,
  `child3_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child3_age` text COLLATE utf8mb4_unicode_ci,
  `child3_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child3_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child3_tel` text COLLATE utf8mb4_unicode_ci,
  `vehicle1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member1_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member1_age` text COLLATE utf8mb4_unicode_ci,
  `family_member1_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member1_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member1_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member1_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `family_member1_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member2_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member2_age` text COLLATE utf8mb4_unicode_ci,
  `family_member2_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member2_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member2_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member2_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `family_member2_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member3_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member3_age` text COLLATE utf8mb4_unicode_ci,
  `family_member3_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member3_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member3_workplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member3_workplace_tel` text COLLATE utf8mb4_unicode_ci,
  `family_member3_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee1_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee1_age` text COLLATE utf8mb4_unicode_ci,
  `employee1_identity` text COLLATE utf8mb4_unicode_ci,
  `employee1_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee2_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee2_age` text COLLATE utf8mb4_unicode_ci,
  `employee2_identity` text COLLATE utf8mb4_unicode_ci,
  `employee2_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_person` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `persons_user_deleted_foreign` (`user_deleted`),
  KEY `persons_user_created_foreign` (`user_created`),
  CONSTRAINT `persons_user_created_foreign` FOREIGN KEY (`user_created`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `persons_user_deleted_foreign` FOREIGN KEY (`user_deleted`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-24 12:30:09
