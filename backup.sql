/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.6.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: unigroup
-- ------------------------------------------------------
-- Server version	10.6.18-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `advantages`
--

DROP TABLE IF EXISTS `advantages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advantages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` varchar(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advantages`
--

LOCK TABLES `advantages` WRITE;
/*!40000 ALTER TABLE `advantages` DISABLE KEYS */;
INSERT INTO `advantages` VALUES (1,'12 ЛЕТ','На рынке','1',1,'2024-12-16 09:05:28','2024-12-16 09:05:28'),(2,'80+','Единиц спецтехники','1',2,'2024-12-16 09:09:41','2024-12-16 09:09:41'),(3,'345+','проектов сдано','1',3,'2024-12-16 09:09:56','2024-12-16 09:09:56'),(4,'120','специалистов в штате','1',4,'2024-12-16 09:10:05','2024-12-16 09:10:05');
/*!40000 ALTER TABLE `advantages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachmentable`
--

DROP TABLE IF EXISTS `attachmentable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachmentable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attachmentable_type` varchar(255) NOT NULL,
  `attachmentable_id` int(10) unsigned NOT NULL,
  `attachment_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  KEY `attachmentable_attachment_id_foreign` (`attachment_id`),
  CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachmentable`
--

LOCK TABLES `attachmentable` WRITE;
/*!40000 ALTER TABLE `attachmentable` DISABLE KEYS */;
INSERT INTO `attachmentable` VALUES (81,'App\\Models\\Block',1,111),(82,'App\\Models\\Block',2,112),(83,'App\\Models\\Block',5,113),(84,'App\\Models\\Block',6,114),(85,'App\\Models\\Block',8,120),(86,'App\\Models\\Block',8,121),(87,'App\\Models\\Block',8,122),(88,'App\\Models\\Block',8,123),(89,'App\\Models\\Block',8,124),(90,'App\\Models\\Block',9,125),(91,'App\\Models\\Block',9,126),(92,'App\\Models\\Block',9,127),(93,'App\\Models\\Block',9,128),(94,'App\\Models\\Block',9,130),(95,'App\\Models\\Block',9,131),(96,'App\\Models\\Block',11,132),(97,'App\\Models\\Block',11,133),(98,'App\\Models\\Block',12,134),(99,'App\\Models\\Block',12,135),(100,'App\\Models\\Block',12,136),(101,'App\\Models\\Block',13,137),(102,'App\\Models\\Block',13,138),(103,'App\\Models\\Block',13,139),(104,'App\\Models\\Block',17,140),(105,'App\\Models\\Block',18,141),(106,'App\\Models\\Block',21,142),(107,'App\\Models\\Portfolio',4,148),(108,'App\\Models\\Portfolio',4,149),(109,'App\\Models\\Portfolio',4,150),(110,'App\\Models\\Portfolio',3,152),(111,'App\\Models\\Portfolio',2,154),(112,'App\\Models\\Portfolio',1,155),(113,'App\\Models\\Portfolio',1,156);
/*!40000 ALTER TABLE `attachmentable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `original_name` text NOT NULL,
  `mime` varchar(255) NOT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `path` text NOT NULL,
  `description` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `hash` text DEFAULT NULL,
  `disk` varchar(255) NOT NULL DEFAULT 'public',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (111,'585e5acec19e59b43c496ffede1a185524d9e91d','Rectangle 3 (1).png','image/png','png',261237,0,'2024/12/28/',NULL,NULL,'94a9649aef4d69f1fe5630468fdb5d27912dbeb2','public',1,'blocks','2024-12-28 18:12:27','2024-12-28 18:12:27'),(112,'20ead0f24faf297e89d09dfd6241d3b57e1c8a9f','pngwing.com (2) 1 (1).png','image/png','png',249969,0,'2024/12/28/',NULL,NULL,'2f92c8972b5c98423f3dd9d7bc6e4b0c8efbccaa','public',1,'blocks','2024-12-28 18:13:20','2024-12-28 18:13:20'),(113,'13003bcaec82bd923b667c5181cb9f55883f446f','russia 1 (1).png','image/png','png',437691,0,'2024/12/28/',NULL,NULL,'f0a5cbc736fc95c82214f96380551e23343930de','public',1,'blocks','2024-12-28 18:14:33','2024-12-28 18:14:33'),(114,'2ccfcd115da74e02a658cb8ec8ea99cfe6475009','image 40 (2).png','image/png','png',411233,0,'2024/12/28/',NULL,NULL,'5cd0bb1dee7b01053eb31eaf09399ec0fb3f6e05','public',1,'blocks','2024-12-28 18:14:50','2024-12-28 18:14:50'),(120,'227c3dcfc3ff162508672312c7b6feadcbb2c49f','image 50.png','image/png','png',373417,0,'2024/12/28/',NULL,NULL,'9e2ffb22d4dd99dd95f58ad620de134377d4b4d4','public',1,'blocks','2024-12-28 18:16:10','2024-12-28 18:16:10'),(121,'de5623320f568052979a4753d86bbe3fff015932','image 49.png','image/png','png',91780,0,'2024/12/28/',NULL,NULL,'feee4c6d176c0311ed8cddc33e6e3a953febf9bd','public',1,'blocks','2024-12-28 18:16:12','2024-12-28 18:16:12'),(122,'022cd0af6ceea9ed51bbc2269a4bd8199902fc93','image (1).png','image/png','png',91295,1,'2024/12/28/',NULL,NULL,'78cd36da85422cb62e722d068e2399e3096104d7','public',1,'blocks','2024-12-28 18:16:16','2024-12-28 18:16:16'),(123,'0db3faaedce03ce14277b70b557c9744145178fd','image (2).png','image/png','png',65955,2,'2024/12/28/',NULL,NULL,'51e573b6122b9c98226cfeb051d277b3d0e84e78','public',1,'blocks','2024-12-28 18:16:19','2024-12-28 18:16:19'),(124,'d95a4a25911158f57a63f64a694839dda8547221','image 51.png','image/png','png',74005,3,'2024/12/28/',NULL,NULL,'8d21ee72daaa02201537d7b3d4883ec27f9fc493','public',1,'blocks','2024-12-28 18:16:21','2024-12-28 18:16:21'),(125,'d8cd4010423ad96cd45bf90ef8a85a42716327ed','Rectangle 4669.png','image/png','png',139109,0,'2024/12/28/',NULL,NULL,'be176a1a163b8fc4a3c75373142d814aadea1441','public',1,'blocks','2024-12-28 18:17:00','2024-12-28 18:17:00'),(126,'d3c18aef024386c3254e1b62f6cf309dcc8ce294','Rectangle 4671.png','image/png','png',187354,0,'2024/12/28/',NULL,NULL,'6f07abf7d99153f3c4fcbf46e4eea59126f2c7f7','public',1,'blocks','2024-12-28 18:17:05','2024-12-28 18:17:05'),(127,'eebb711e18df48e3250776621ffcb945369d063c','Rectangle 4673.png','image/png','png',80697,1,'2024/12/28/',NULL,NULL,'691fe71b5470533eb8fe86a225645e7f401fdd54','public',1,'blocks','2024-12-28 18:17:07','2024-12-28 18:17:07'),(128,'be0559ab637a5b3631526f63b574f3f7f5a59769','Rectangle 4672.png','image/png','png',107988,2,'2024/12/28/',NULL,NULL,'d474839f77ee7c3185cd3f7e0c904a7e1bc7e4f0','public',1,'blocks','2024-12-28 18:17:10','2024-12-28 18:17:10'),(130,'7ba39cc8f5087f88f7f05f395d19e4394ee49127','Rectangle 4674.png','image/png','png',182816,3,'2024/12/28/',NULL,NULL,'0b1fc0b4fbde2eb2ae80f137239e50f1926e9b09','public',1,'blocks','2024-12-28 18:17:16','2024-12-28 18:17:16'),(131,'3d2d0ffab638783d2a94039ae9e79065d40309d0','Rectangle 4670.png','image/png','png',115626,4,'2024/12/28/',NULL,NULL,'793314659fa9a4ba753ff5d630e413393be8ff0d','public',1,'blocks','2024-12-28 18:17:19','2024-12-28 18:17:19'),(132,'c122efac172a93a9bab466908821dddceb3bdba1','Rectangle 4665 (1).png','image/png','png',265995,0,'2024/12/28/',NULL,NULL,'cc7a5bba9721abc16f92abe02916ad4d0f074ec7','public',1,'blocks','2024-12-28 18:18:45','2024-12-28 18:18:45'),(133,'28f888a26cbf411c5bb33d7f1a348d7866123aee','Rectangle 4666.png','image/png','png',229113,0,'2024/12/28/',NULL,NULL,'5801d8ea8993b16aa38b226c22a2c0881461bfd0','public',1,'blocks','2024-12-28 18:18:45','2024-12-28 18:18:45'),(134,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704 (2).png','image/png','png',4640,0,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:06','2024-12-28 18:19:06'),(135,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704 (1).png','image/png','png',4640,0,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:06','2024-12-28 18:19:06'),(136,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704.png','image/png','png',4640,1,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:06','2024-12-28 18:19:06'),(137,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704 (2).png','image/png','png',4640,0,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:23','2024-12-28 18:19:23'),(138,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704 (1).png','image/png','png',4640,0,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:23','2024-12-28 18:19:23'),(139,'70357e72c103dc5886cd8327f5fd093a1d81e31c','Rectangle 4704.png','image/png','png',4640,1,'2024/12/28/',NULL,NULL,'ea8d84e375c54ac99478f607f2cc46ca86e637f2','public',1,'blocks','2024-12-28 18:19:23','2024-12-28 18:19:23'),(140,'dc4b82a7ad835300037d6097a091013aac5fd70a','AdobeStock_66738663 1.png','image/png','png',1027987,0,'2024/12/28/',NULL,NULL,'0e55e36cc9c3c8a0f81d3f69b03daf882de57222','public',1,'blocks','2024-12-28 18:20:58','2024-12-28 18:20:58'),(141,'2dc82a0828e7fe41803b372aea5245e255274037','Запись экрана от 21.12.2024 15:47:31.mp4','video/mp4','mp4',2825093,0,'2024/12/28/',NULL,NULL,'25e70d6c383f43a3c62ebb3342e399c85a48a645','public',1,'blocks','2024-12-28 18:21:15','2024-12-28 18:21:15'),(142,'93b6a675080dfe9d2b4e79b92165a7a75b0f7ca2','image 103 (1).png','image/png','png',574660,0,'2024/12/28/',NULL,NULL,'eba33b9cdd844b6a21c20e06068d18379bb87402','public',1,'blocks','2024-12-28 18:21:40','2024-12-28 18:21:40'),(143,'93b6a675080dfe9d2b4e79b92165a7a75b0f7ca2','image 103 (1).png','image/png','png',574660,0,'2024/12/28/',NULL,NULL,'eba33b9cdd844b6a21c20e06068d18379bb87402','public',1,NULL,'2024-12-28 18:22:50','2024-12-28 18:22:50'),(144,'b633f7c1dd65fcabd7f4953acb22f1aed513dcb3','image (3).png','image/png','png',255318,0,'2024/12/28/',NULL,NULL,'2c65c25322ffb2ae7c9c1e96f638f12b1f83ecb0','public',1,NULL,'2024-12-28 18:22:55','2024-12-28 18:22:55'),(148,'d2e01b91a77b50e02f075d1d0aa9f5f0d7484096','image 41 (2).png','image/png','png',262333,0,'2024/12/28/',NULL,NULL,'21a5417ab426c73b33ba1333d17e319122b66009','public',1,'portfolios','2024-12-28 18:23:22','2024-12-28 18:23:22'),(149,'d2e01b91a77b50e02f075d1d0aa9f5f0d7484096','image 41 (1).png','image/png','png',262333,0,'2024/12/28/',NULL,NULL,'21a5417ab426c73b33ba1333d17e319122b66009','public',1,'portfolios','2024-12-28 18:23:22','2024-12-28 18:23:22'),(150,'d2e01b91a77b50e02f075d1d0aa9f5f0d7484096','image 41.png','image/png','png',262333,1,'2024/12/28/',NULL,NULL,'21a5417ab426c73b33ba1333d17e319122b66009','public',1,'portfolios','2024-12-28 18:23:22','2024-12-28 18:23:22'),(151,'070af11b5c648f11762c41bc72dcdb1522b0d940','image (4).png','image/png','png',159391,0,'2024/12/28/',NULL,NULL,'c4d797aafbb579b5d8cc6cc84f038d16503098ec','public',1,NULL,'2024-12-28 18:23:30','2024-12-28 18:23:30'),(152,'32d58fed52bd1c38542509f0fbcd48302ae70795','droneflyernick-8UfHz77ortc-unsplash 2 (1).png','image/png','png',728646,0,'2024/12/28/',NULL,NULL,'ff3f6924bc6c9fae378df397d00f778a774def8e','public',1,'portfolios','2024-12-28 18:23:57','2024-12-28 18:23:57'),(153,'f234d05e9c07b5446ee8d33aa4477eb8cce27fe5','image (5).png','image/png','png',244118,0,'2024/12/28/',NULL,NULL,'4549ee8e8ef12f5c765624da25e0d6f6c4229b13','public',1,NULL,'2024-12-28 18:24:04','2024-12-28 18:24:04'),(154,'070af11b5c648f11762c41bc72dcdb1522b0d940','image (4).png','image/png','png',159391,0,'2024/12/28/',NULL,NULL,'c4d797aafbb579b5d8cc6cc84f038d16503098ec','public',1,'portfolios','2024-12-28 18:24:11','2024-12-28 18:24:11'),(155,'8a8cd8ebbc67652a82b5c8541c3b94822a57d3d0','AdobeStock_332377574 2.png','image/png','png',92322,0,'2024/12/28/',NULL,NULL,'86623867379b7260133112998af7e849d821a27c','public',1,'portfolios','2024-12-28 18:25:18','2024-12-28 18:25:18'),(156,'8aeddae570f8f4fff9fb0cf371215c8d437d0ae0','AdobeStock_332377574 1.png','image/png','png',304633,0,'2024/12/28/',NULL,NULL,'1ee38a46d5deac63e1531886191633bd400729b0','public',1,'portfolios','2024-12-28 18:25:21','2024-12-28 18:25:21'),(157,'24425bca651e1dfae2e350976f973f581ac1f7be','image (6).png','image/png','png',207892,0,'2024/12/28/',NULL,NULL,'aade38ad7cffeaa1091109842f1d47255aed7a5f','public',1,NULL,'2024-12-28 18:25:25','2024-12-28 18:25:25'),(158,'7635dcb1db1545f48e33d574c7df3bc1a07acd07','Rectangle 4677 (1).png','image/png','png',216922,0,'2024/12/28/',NULL,NULL,'06355e555713b8a8474bed08a4771a7aa1d28a10','public',1,NULL,'2024-12-28 18:25:59','2024-12-28 18:25:59'),(159,'4061264bf1e4265dd61bc3978cc60d5f8e9cab6b','Vector (2).png','image/png','png',1336,0,'2024/12/28/',NULL,NULL,'31c1c50b4e35d2c16bb538627d5982f4a55bb4cf','public',1,NULL,'2024-12-28 18:26:34','2024-12-28 18:26:34'),(160,'8d6d2f3d5452df27b94b5bde5381985e0343032c','tractor-svgrepo-com (1) 2.png','image/png','png',2502,0,'2024/12/28/',NULL,NULL,'d5c27184ecbf5c35881ec7064d67b9568f0596d5','public',1,NULL,'2024-12-28 18:27:43','2024-12-28 18:27:43'),(161,'b6193da5e976ff529575fa5f9554dc79b2b5f772','Vector (3).png','image/png','png',2758,0,'2024/12/28/',NULL,NULL,'998275cfe044f454d19bf7905217e4b5aade032b','public',1,NULL,'2024-12-28 18:27:59','2024-12-28 18:27:59'),(162,'d05e3c84f329b96a2718d00fb6ddd9ff29070eaf','Group 40722 (1).png','image/png','png',480235,0,'2024/12/28/',NULL,NULL,'bfde04c306d88d20200dfe25742d1ba9a431e9dc','public',1,NULL,'2024-12-28 18:29:41','2024-12-28 18:29:41'),(163,'0a415cc4d00e0bca5266422afa610018e1822a10','Layer_x0020_1 (4).svg','image/svg+xml','svg',6075,0,'2024/12/28/',NULL,NULL,'137034d0442cc4394c25eaacd351bd81c268ddbc','public',1,NULL,'2024-12-28 18:29:44','2024-12-28 18:29:44'),(164,'0a415cc4d00e0bca5266422afa610018e1822a10','Layer_x0020_1 (4).svg','image/svg+xml','svg',6075,0,'2024/12/28/',NULL,NULL,'137034d0442cc4394c25eaacd351bd81c268ddbc','public',1,NULL,'2024-12-28 18:29:51','2024-12-28 18:29:51'),(165,'b6193da5e976ff529575fa5f9554dc79b2b5f772','Vector (3).png','image/png','png',2758,0,'2024/12/28/',NULL,NULL,'998275cfe044f454d19bf7905217e4b5aade032b','public',1,NULL,'2024-12-28 18:29:55','2024-12-28 18:29:55'),(166,'d04c94124b11a01e9bcfb8c6f65787797f8a9307','Layer_x0020_1 (5).svg','image/svg+xml','svg',6071,0,'2024/12/28/',NULL,NULL,'6125bf29a5e1c1007230e588757542b773385e48','public',1,NULL,'2024-12-28 18:30:08','2024-12-28 18:30:08'),(167,'b6193da5e976ff529575fa5f9554dc79b2b5f772','Vector (3).png','image/png','png',2758,0,'2024/12/28/',NULL,NULL,'998275cfe044f454d19bf7905217e4b5aade032b','public',1,NULL,'2024-12-28 18:39:22','2024-12-28 18:39:22'),(168,'d04c94124b11a01e9bcfb8c6f65787797f8a9307','Layer_x0020_1 (5).svg','image/svg+xml','svg',6071,0,'2024/12/28/',NULL,NULL,'6125bf29a5e1c1007230e588757542b773385e48','public',1,NULL,'2025-01-08 16:08:18','2025-01-08 16:08:18');
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bids`
--

DROP TABLE IF EXISTS `bids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bids` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bids`
--

LOCK TABLES `bids` WRITE;
/*!40000 ALTER TABLE `bids` DISABLE KEYS */;
/*!40000 ALTER TABLE `bids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `text` longtext DEFAULT NULL,
  `additional_text` longtext DEFAULT NULL,
  `link_text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `active` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blocks`
--

LOCK TABLES `blocks` WRITE;
/*!40000 ALTER TABLE `blocks` DISABLE KEYS */;
INSERT INTO `blocks` VALUES (1,'Баннер',NULL,'banner','<p><strong style=\"color: rgb(144, 36, 46);\">Полный спектр услуг в строительстве</strong> жилых и административных объектов, дорог, кровельные и фасадные работы, собственный парк спецтехники</p>',NULL,'Подробнее','/about/','1','2024-12-16 09:11:32','2025-01-09 10:52:27'),(2,'Парк собственной техники','Аренда спецтехники','rent','<p>Наша компания располагает собственным парком специализированной техники, состоящим более чем из <strong style=\"color: rgb(144, 36, 46);\">80 единиц</strong>. В арсенале — самосвалы, краны, погрузчики, экскаваторы и катки, что позволяет нам обеспечивать полный цикл строительных и транспортных работ. Наличие собственного оборудования обеспечивает <strong style=\"color: rgb(144, 36, 46);\">гибкость, оперативность и высокое качество</strong> на всех этапах строительства, от подготовки площадки до сдачи объекта</p>',NULL,'Посмотреть ещё','/rent/','1','2024-12-16 09:14:52','2024-12-28 18:31:27'),(5,'Работаем на всей территории РФ',NULL,'map','<p>ООО «Универсал-Групп» ведет свою деятельность &lt;br&gt; в качестве подрядчика с 2012 года &lt;br&gt; в Москве, Московской &lt;br&gt; и Самарской области и сейчас <strong style=\"color: rgb(144, 36, 46);\">работает по всей России</strong></p>',NULL,NULL,NULL,'1','2024-12-16 10:39:43','2024-12-28 18:31:21'),(6,'Связаться с нами',NULL,'form','<p>Оставьте свои данные и наш &lt;br&gt; менеджер свяжется с Вами</p>',NULL,'Отправить',NULL,'1','2024-12-16 10:43:00','2024-12-16 15:40:34'),(7,'Наши проекты',NULL,'projects',NULL,NULL,'Посмотреть ещё','/portfolio/','1','2024-12-16 10:47:27','2024-12-28 18:17:43'),(8,'Галерея 1',NULL,'gallery-1',NULL,NULL,NULL,NULL,'1','2024-12-16 11:07:35','2024-12-16 11:07:35'),(9,'Галерея 2',NULL,'gallery-2',NULL,NULL,NULL,NULL,'1','2024-12-16 11:08:05','2024-12-16 11:08:05'),(10,'Отзывы',NULL,'reviews',NULL,NULL,NULL,NULL,'1','2024-12-16 11:11:35','2024-12-16 11:11:35'),(11,'О компании',NULL,'about','<p>Наша компания располагает собственным парком специализированной техники, состоящим более чем из <strong style=\"color: rgb(144, 36, 46);\">80 единиц</strong>. В арсенале — самосвалы, краны, погрузчики, экскаваторы и катки, что позволяет нам обеспечивать полный цикл строительных и транспортных работ. Наличие собственного оборудования обеспечивает <strong style=\"color: rgb(144, 36, 46);\">гибкость, оперативность и высокое качество</strong></p><p>на всех этапах строительства, от подготовки площадки до сдачи объекта.</p>',NULL,NULL,NULL,'1','2024-12-18 14:10:47','2024-12-28 18:31:10'),(12,'Сертификаты','Сертификаты','certificates',NULL,NULL,NULL,NULL,'1','2024-12-18 14:22:04','2024-12-18 14:22:04'),(13,'Грамоты','Грамоты','literacy',NULL,NULL,NULL,NULL,'1','2024-12-18 14:22:37','2024-12-18 14:22:37'),(14,'FAQ','Ответы на вопросы','faq',NULL,NULL,NULL,NULL,'1','2024-12-18 14:37:33','2024-12-18 14:37:33'),(15,'Наши партнёры',NULL,'our-partners','<p>Мы сотрудничаем с надежными партнерами, на которых всегда можно положиться.</p><p>Они имеют в своей собственности более <strong style=\"color: rgb(144, 36, 46);\">100 единиц техники</strong>.</p>',NULL,NULL,NULL,'1','2024-12-18 15:56:35','2024-12-28 18:30:59'),(16,'Бегущая строка компании',NULL,'company-marquee','<p>universal group</p>',NULL,NULL,NULL,'1','2024-12-19 15:07:08','2024-12-19 15:07:08'),(17,'Портфолио работ',NULL,'portfolio','<p><strong style=\"color: rgb(144, 36, 46);\">Полный спектр услуг в строительстве</strong> жилых и административных объектов, дорог, кровельные и фасадные работы, отделочные работы</p>',NULL,NULL,NULL,'1','2024-12-21 08:44:27','2024-12-28 18:32:02'),(18,'Видео в портфолио',NULL,'portfolio-video',NULL,NULL,NULL,NULL,'1','2024-12-21 12:36:24','2024-12-21 12:36:24'),(20,'Контакты',NULL,'contacts',NULL,NULL,NULL,NULL,'1','2024-12-22 23:59:38','2024-12-22 23:59:38'),(21,'Аренда спецтехники',NULL,'rent-page',NULL,NULL,NULL,NULL,'1','2024-12-24 19:02:28','2024-12-24 19:02:28');
/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `quote` longtext NOT NULL,
  `picture` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
INSERT INTO `directors` VALUES (1,'Иванов иван','Генеральный директор','<p>Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu leo</p>','<p>Искренне верим</p><p>в силу качественного</p><p>строительства.</p>','http://127.0.0.1:8000/storage/2024/12/28/7635dcb1db1545f48e33d574c7df3bc1a07acd07.png','2024-12-18 15:43:26','2024-12-28 18:26:01');
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Do you offer financing options for purchasing classic cars?','Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu','1',1,'2024-12-18 14:36:00','2024-12-18 14:36:00'),(2,'Are the showcased cars fully restored or in original condition?','Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu','1',2,'2024-12-18 14:36:00','2024-12-18 14:36:58'),(3,'Do you assist with shipping for purchased classic cars?','Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu','1',3,'2024-12-18 14:36:00','2024-12-18 14:37:00'),(4,'Are your vintage cars certified or inspected for authenticity?','Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu','1',4,'2024-12-18 14:36:00','2024-12-18 14:37:06'),(5,'Can I request additional photos before purchasing?','Lorem ipsum dolor sit amet consectetur adipiscing elit etiam cras tellus sit tempor amet, nascetur quam ornare proin platea diam amet sed fringilla eget pretium id sagittis in porttitor pharetra dui. A venenatis molestie vitae rutrum eu','1',5,'2024-12-18 14:36:00','2024-12-18 14:37:10');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `coorX` varchar(255) NOT NULL,
  `coorY` varchar(255) NOT NULL,
  `active` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps`
--

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;
INSERT INTO `maps` VALUES (1,'Москва','Наш офис в Москве','37.588144','55.733842','1','2024-12-25 16:34:05','2024-12-25 16:36:05'),(2,'Самара','Наш офис в Самаре','53.195878','50.100202','1','2024-12-25 16:35:58','2024-12-25 16:35:58');
/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marquees`
--

DROP TABLE IF EXISTS `marquees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marquees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marquees`
--

LOCK TABLES `marquees` WRITE;
/*!40000 ALTER TABLE `marquees` DISABLE KEYS */;
INSERT INTO `marquees` VALUES (1,'Строительство дорог','1',1,'2024-12-16 16:10:42','2024-12-16 16:10:42'),(2,'Отделочные работы','1',2,'2024-12-16 16:10:47','2024-12-16 16:10:47'),(3,'Кровельные и фасадные работы','1',3,'2024-12-16 16:10:53','2024-12-16 16:10:56'),(4,'Благоустройство территорий','1',4,'2024-12-16 16:11:01','2024-12-16 16:11:01'),(5,'Строительство жилых и административных зданий','1',5,'2024-12-16 16:11:07','2024-12-16 16:11:07'),(6,'Полный цикл строительных работ','1',6,'2024-12-16 16:11:13','2024-12-16 16:11:13');
/*!40000 ALTER TABLE `marquees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` varchar(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Главная','/','1',1,'2024-12-15 21:46:30','2024-12-22 22:51:52'),(2,'О компании','/about/','1',2,'2024-12-15 21:46:47','2024-12-22 22:51:49'),(3,'Наши работы','/portfolio/','1',3,'2024-12-15 21:47:14','2024-12-22 22:51:45'),(4,'Контакты','/contacts/','1',4,'2024-12-15 21:47:25','2024-12-22 22:51:56'),(5,'Аренда спецтехники','/rent/','1',5,'2024-12-15 21:47:38','2024-12-22 22:51:59');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2015_04_12_000000_create_orchid_users_table',1),(4,'2015_10_19_214424_create_orchid_roles_table',1),(5,'2015_10_19_214425_create_orchid_role_users_table',1),(6,'2016_08_07_125128_create_orchid_attachmentstable_table',1),(7,'2017_09_17_125801_create_notifications_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2024_12_15_121656_create_pages_table',2),(11,'2024_12_16_003200_create_settings_table',3),(12,'2024_12_16_003213_create_menus_table',3),(13,'2024_12_16_063317_create_blocks_table',4),(14,'2024_12_16_064821_create_advantages_table',5),(15,'2024_12_16_183210_create_partners_table',6),(16,'2024_12_16_183213_create_reviews_table',6),(18,'2024_12_16_185608_create_marquees_table',7),(19,'2024_12_16_185559_create_projects_table',8),(20,'2024_12_18_173238_create_faqs_table',8),(22,'2024_12_18_183215_create_directors_table',9),(23,'2024_12_21_123848_create_portfolios_table',10),(27,'2024_12_24_214436_create_rent_sections_table',11),(28,'2024_12_24_215320_create_rents_table',11),(29,'2024_12_25_184537_create_maps_table',12),(30,'2024_12_26_180446_create_bids_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_name` longtext NOT NULL,
  `page_url` longtext NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` longtext DEFAULT NULL,
  `h1` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `keywords` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Главная','/','main','Главная','Развитие территорий - строительство без границ','Развитие территорий строительство без границ','Развитие территорий строительство без границ','2024-12-15 21:06:54','2024-12-18 15:55:36'),(2,'О компании','/about','about','О компании','О компании','О компании',NULL,'2024-12-18 14:05:22','2024-12-18 15:55:31'),(3,'Портфолио','/portfolio','portfolio','Портфолио','Портфолио','Портфолио',NULL,'2024-12-19 16:09:31','2024-12-19 16:09:31'),(4,'Контакты','/contacts','contacts','Контакты','Контакты','Контакты',NULL,'2024-12-22 22:55:38','2024-12-22 22:55:38'),(5,'Аренда спецтехники','/rent','rent','Аренда спецтехники','Аренда спецтехники','Аренда спецтехники',NULL,'2024-12-24 19:01:26','2024-12-24 19:01:26');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
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
INSERT INTO `partners` VALUES (1,'ООО «АРКАДА»','1',1,'2024-12-16 15:46:53','2024-12-16 15:46:53'),(2,'ООО «СТК-Восход»','1',2,'2024-12-16 15:46:57','2024-12-16 15:46:57'),(3,'ООО «Григстройгрупп»','1',3,'2024-12-16 15:47:02','2024-12-16 15:47:02'),(4,'ООО «ТСК»','1',4,'2024-12-16 15:47:06','2024-12-16 15:47:06');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` longtext DEFAULT NULL,
  `chars` longtext DEFAULT NULL,
  `additional_text` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `preview_text` longtext NOT NULL,
  `preview` longtext NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,'Детский сад \"Пчёлка\"','<p>Уютное и современное учреждение дошкольного образования, где были выполнены работы по <strong style=\"color: rgb(144, 36, 46);\">капитальному ремонту и благоустройству территории</strong>. Здание площадью 1500 <strong>м²</strong>  включает в себя игровые комнаты, зону отдыха и зеленую площадку на улице, созданную для активного отдыха детей.</p>','[]','[]','simple','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','http://127.0.0.1:8000/storage/2024/12/28/24425bca651e1dfae2e350976f973f581ac1f7be.png','1',4,'2024-12-21 13:37:28','2025-01-08 16:27:58'),(2,'Детский сад \"Пчёлка\"','<p>Уютное и современное учреждение дошкольного образования, где были выполнены работы по <strong style=\"color: rgb(144, 36, 46);\">капитальному ремонту и благоустройству территории</strong>. Здание площадью 1500 <strong>м²</strong>  включает в себя игровые комнаты, зону отдыха и зеленую площадку на улице, созданную для активного отдыха детей.</p>','a:3:{i:0;s:9:\"1500 м²\";i:1;s:16:\"6 месяцев\";i:2;s:16:\"6 месяцев\";}','[]','reverse','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','http://127.0.0.1:8000/storage/2024/12/28/f234d05e9c07b5446ee8d33aa4477eb8cce27fe5.png','1',3,'2024-12-21 13:37:28','2025-01-08 16:27:51'),(3,'Детский сад \"Пчёлка\"','<p>Уютное и современное учреждение дошкольного образования, где были выполнены работы по <strong style=\"color: rgb(144, 36, 46);\">капитальному ремонту и благоустройству территории</strong>. Здание площадью 1500 <strong>м²</strong>  включает в себя игровые комнаты, зону отдыха и зеленую площадку на улице, созданную для активного отдыха детей.</p>','[]','a:2:{i:0;s:57:\"установка детской площадки 222222\";i:1;s:41:\"озеленение территории\";}','additional','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','http://127.0.0.1:8000/storage/2024/12/28/070af11b5c648f11762c41bc72dcdb1522b0d940.png','1',2,'2024-12-21 13:37:28','2025-01-08 16:27:44'),(4,'Детский сад \"Пчёлка\"','<p>Уютное и современное учреждение дошкольного образования, где были выполнены работы по <strong style=\"color: rgb(144, 36, 46);\">капитальному ремонту и благоустройству территории</strong>. Здание площадью 1500 <strong>м²</strong>  включает в себя игровые комнаты, зону отдыха и зеленую площадку на улице, созданную для активного отдыха детей.</p>','a:3:{i:0;s:9:\"1500 м²\";i:1;s:16:\"6 месяцев\";i:2;s:16:\"6 месяцев\";}','[]','default','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','http://127.0.0.1:8000/storage/2024/12/28/b633f7c1dd65fcabd7f4953acb22f1aed513dcb3.png','1',1,'2024-12-21 13:37:28','2024-12-28 18:24:40');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent_sections`
--

DROP TABLE IF EXISTS `rent_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent_sections`
--

LOCK TABLES `rent_sections` WRITE;
/*!40000 ALTER TABLE `rent_sections` DISABLE KEYS */;
INSERT INTO `rent_sections` VALUES (1,'Автокраны','http://127.0.0.1:8000/storage/2024/12/28/4061264bf1e4265dd61bc3978cc60d5f8e9cab6b.png','1',1,'2024-12-25 16:01:38','2024-12-28 18:26:36'),(2,'Дорожные\\грунтовые катки','http://127.0.0.1:8000/storage/2024/12/28/8d6d2f3d5452df27b94b5bde5381985e0343032c.png','1',2,'2024-12-28 18:27:44','2024-12-28 18:27:44'),(3,'Бульдозеры','http://127.0.0.1:8000/storage/2024/12/28/b6193da5e976ff529575fa5f9554dc79b2b5f772.png','1',3,'2024-12-28 18:27:59','2024-12-28 18:27:59');
/*!40000 ALTER TABLE `rent_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rents`
--

DROP TABLE IF EXISTS `rents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` longtext NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `rent_sections_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rents_rent_sections_id_foreign` (`rent_sections_id`),
  CONSTRAINT `rents_rent_sections_id_foreign` FOREIGN KEY (`rent_sections_id`) REFERENCES `rent_sections` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rents`
--

LOCK TABLES `rents` WRITE;
/*!40000 ALTER TABLE `rents` DISABLE KEYS */;
INSERT INTO `rents` VALUES (1,'Автокран ABCD321','5600','1',1,1,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(2,'Автокран ABCD321','5600','1',2,1,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(3,'Автокран ABCD321','5600','1',3,1,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(4,'Автокран ABCD321','5600','1',4,1,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(5,'Автокран ABCD321','5600','1',1,2,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(6,'Автокран ABCD321','5600','1',2,2,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(7,'Автокран ABCD321','5600','1',3,2,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(8,'Автокран ABCD321','5600','1',4,2,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(9,'Автокран ABCD321','5600','1',1,3,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(10,'Автокран ABCD321','5600','1',2,3,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(11,'Автокран ABCD321','5600','1',3,3,'2024-12-25 16:01:44','2024-12-28 18:26:50'),(12,'Автокран ABCD321','5600','1',4,3,'2024-12-25 16:01:44','2024-12-28 18:26:50');
/*!40000 ALTER TABLE `rents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `active` char(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'Александр К.','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','1',1,'2024-12-16 15:46:18','2024-12-16 15:46:18'),(2,'Виталий Д.','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','1',2,'2024-12-16 15:46:24','2024-12-16 15:46:24'),(3,'Антонина Иванова','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','1',3,'2024-12-16 15:46:31','2024-12-16 15:46:31'),(4,'Дмитриев Дмитрий','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','1',4,'2024-12-16 15:46:38','2025-01-13 15:01:06'),(5,'Иванов Иван','Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.','1',5,'2024-12-16 15:46:44','2025-01-13 15:00:57');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_users_role_id_foreign` (`role_id`),
  CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vk` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `quote` text NOT NULL,
  `logo` text NOT NULL,
  `logoFooter` text NOT NULL,
  `quotePicture` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'+7(499) 340-08-99','xx.xxdenkenxx.xx@yandex.ru','vk.com','whatsapp.com','Мы всегда требуем от себя больше, чем требует заказчик','http://127.0.0.1:8000/storage/2024/12/28/0a415cc4d00e0bca5266422afa610018e1822a10.svg','http://127.0.0.1:8000/storage/2024/12/28/d04c94124b11a01e9bcfb8c6f65787797f8a9307.svg','http://127.0.0.1:8000/storage/2024/12/28/d05e3c84f329b96a2718d00fb6ddd9ff29070eaf.png','2024-12-15 21:52:05','2025-01-10 03:45:48');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',NULL,'$2y$12$n/Utd6Iz5p3A3HAdBNv8EOLysG6vZZqF8NaWHSPJBcuZl4Yvs1hoW','jOr5HvKTlIgAKnZ8W0VqhlmV3WmCE3inIFIoNbOeX1EhQUGDblaqqsCYlyOE','2024-12-15 07:33:41','2024-12-15 07:33:41','{\"platform.systems.roles\":true,\"platform.systems.users\":true,\"platform.systems.attachment\":true,\"platform.index\":true}');
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

-- Dump completed on 2025-01-13 21:02:31
