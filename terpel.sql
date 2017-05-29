-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: terpel
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premio` int(11) NOT NULL,
  `total_puntos` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (1,'1234',9,300,1,'2017-05-03 14:11:17','2017-05-09 18:50:18'),(2,'1234',11,900,1,'2017-05-05 16:28:27','2017-05-09 19:18:39'),(3,'1234',10,3500,0,'2017-05-16 23:11:35','2017-05-16 23:11:35'),(4,'1234',12,400,0,'2017-05-16 23:11:35','2017-05-16 23:11:35'),(5,'1234',10,3500,0,'2017-05-16 23:19:23','2017-05-16 23:19:23'),(6,'1234',12,400,0,'2017-05-16 23:19:23','2017-05-16 23:19:23'),(7,'1234',12,400,0,'2017-05-17 18:47:30','2017-05-17 18:47:30'),(8,'1234',13,450,0,'2017-05-17 18:47:30','2017-05-17 18:47:30'),(9,'1234',12,400,0,'2017-05-17 18:51:45','2017-05-17 18:51:45');
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eds`
--

DROP TABLE IF EXISTS `eds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eds`
--

LOCK TABLES `eds` WRITE;
/*!40000 ALTER TABLE `eds` DISABLE KEYS */;
INSERT INTO `eds` VALUES (1,'calle 50','2017-05-18 14:01:47','2017-05-18 14:01:47'),(2,'Estación Plaza Pedregal','2017-05-19 19:56:08','2017-05-19 19:56:08'),(3,'Estación Llano Bonito','2017-05-19 19:56:32','2017-05-19 19:56:32'),(4,'Estación Tocumen','2017-05-19 19:56:45','2017-05-19 19:56:45'),(5,'Estación Altos de Tocumen','2017-05-19 19:56:59','2017-05-19 19:56:59'),(6,'Estación Altos de Tataré','2017-05-19 19:57:19','2017-05-19 19:57:19'),(7,'Estación Pacora','2017-05-19 19:57:34','2017-05-19 19:57:34'),(8,'Estación Felipillo','2017-05-19 19:57:47','2017-05-19 19:57:47'),(9,'Estación Mañanita Este','2017-05-19 19:57:57','2017-05-19 19:57:57'),(10,'Estación Mañanita Oeste','2017-05-19 19:58:08','2017-05-19 19:58:08'),(11,'Estación Las Margaritas','2017-05-19 19:58:24','2017-05-19 19:58:24'),(12,'Estación Torti','2017-05-19 19:58:34','2017-05-19 19:58:34'),(13,'EDS Santa Fé','2017-05-19 19:58:43','2017-05-19 19:58:43'),(14,'Estación 24 de diciembre','2017-05-19 19:59:29','2017-05-19 19:59:29'),(15,'Estación Yaviza','2017-05-19 19:59:39','2017-05-19 19:59:39'),(16,'Estación Metetí','2017-05-19 19:59:48','2017-05-19 19:59:48'),(17,'Estación Santa Fe Este','2017-05-19 19:59:57','2017-05-19 19:59:57'),(18,'Estación Villalobos','2017-05-19 20:00:06','2017-05-19 20:00:06'),(19,'Estación Cativá','2017-05-19 20:53:09','2017-05-19 20:53:09'),(20,'Estación Espinar','2017-05-19 20:53:19','2017-05-19 20:53:19'),(21,'Estación Chilibre','2017-05-19 20:53:33','2017-05-19 20:53:33'),(22,'Estación San Andres','2017-05-19 20:53:43','2017-05-19 20:53:43'),(23,'Estación Bahia las Minas','2017-05-19 20:53:52','2017-05-19 20:53:52'),(24,'Estación Calle 10','2017-05-19 20:54:01','2017-05-19 20:54:01'),(25,'Estación Montserrat','2017-05-19 20:54:11','2017-05-19 20:54:11'),(26,'Estación San Judas','2017-05-19 20:54:20','2017-05-19 20:54:20'),(27,'Estación Milla20','2017-05-19 20:54:31','2017-05-19 20:54:31'),(28,'Estación Milla 14','2017-05-19 20:54:40','2017-05-19 20:54:40'),(29,'Estación Cerro Batea','2017-05-19 20:54:50','2017-05-19 20:54:50'),(30,'Estación Miraflores','2017-05-19 20:55:02','2017-05-19 20:55:02'),(31,'Estación Los Andes','2017-05-19 20:55:15','2017-05-19 20:55:15'),(32,'Estación Los Andes','2017-05-19 20:55:28','2017-05-19 20:55:28'),(33,'Estación Sabanitas','2017-05-19 20:55:38','2017-05-19 20:55:38'),(34,'Estación San Miguelito','2017-05-19 20:55:47','2017-05-19 20:55:47'),(35,'Estacion Quebrada López','2017-05-19 20:55:58','2017-05-19 20:55:58'),(36,'Estación Linton Bay','2017-05-19 20:56:14','2017-05-19 20:56:14'),(37,'Estación Chitré','2017-05-19 20:58:23','2017-05-19 20:58:23'),(38,'Estación Coronado','2017-05-19 20:59:55','2017-05-19 20:59:55'),(39,'Estación Dos Pinos','2017-05-19 21:05:17','2017-05-19 21:05:17'),(40,'Estación El Crisol','2017-05-19 21:06:24','2017-05-19 21:06:24'),(41,'Estación La Pesa','2017-05-19 21:23:19','2017-05-19 21:23:19');
/*!40000 ALTER TABLE `eds` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2017_04_26_040531_UsuariosTabla',1),(8,'2017_04_26_042247_PuntosTabla',1),(9,'2017_04_26_042606_PremiosTabla',1),(10,'2017_05_02_121606_CompraMigration',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `premios`
--

DROP TABLE IF EXISTS `premios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `premios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagen` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `puntos_supervisor` int(11) DEFAULT '0',
  `puntos_administrador` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `premios`
--

LOCK TABLES `premios` WRITE;
/*!40000 ALTER TABLE `premios` DISABLE KEYS */;
INSERT INTO `premios` VALUES (20,'Certificado de Super Xtra','Certificado de $ 10',230,2,'public/upload/premios/EBCFA485-29F5-A96D-B328-426C4BE4D1AE.png','2017-05-24 14:40:38','2017-05-24 14:40:38',115,77),(21,'Certificado de Super Xtra','Certificado de $ 20',460,2,'public/upload/premios/5153AEFC-2BD8-2077-1F95-D5C5C177D0AE.png','2017-05-24 14:41:25','2017-05-24 22:08:36',230,153),(22,'Certificado de Super Xtra','Certificado de $ 50',1150,2,'public/upload/premios/81F27AED-4FB8-D53C-953E-C5A1FF24C108.png','2017-05-24 14:42:04','2017-05-24 22:08:59',575,383),(23,'Certificado Machetazo','Certificado de $ 10',230,2,'public/upload/premios/2726C38A-AFDD-FF1B-A5E5-CB4735F44E6C.png','2017-05-24 14:42:53','2017-05-24 14:42:53',115,77),(24,'Certificado Machetazo','Certificado de $ 20',460,2,'public/upload/premios/35D93312-9065-4A33-6150-D2F29EF09375.png','2017-05-24 14:44:01','2017-05-24 22:09:22',230,153),(25,'Certificado Machetazo','Certificado de $ 50',1150,2,'public/upload/premios/F5D975E0-F076-D80C-DBAC-56470657F93D.png','2017-05-24 14:44:40','2017-05-24 22:09:37',575,383),(26,'Certificado Super 99','Certificado de $ 10',230,2,'public/upload/premios/48466B47-62F5-CCA0-9441-59D1BBB48251.png','2017-05-24 14:45:24','2017-05-24 14:45:24',115,77),(27,'Certificado Super 99','Certificado de $ 20',460,2,'public/upload/premios/601977CD-BA48-59B4-1EB3-522BBAA504A7.png','2017-05-24 14:46:21','2017-05-24 22:11:28',230,153),(28,'Certificado Super 99','Certificado de $ 50',1150,2,'public/upload/premios/C0E5C0E4-057B-13DF-2102-CC6180225D48.png','2017-05-24 14:47:15','2017-05-24 22:11:42',575,383),(29,'Certificado El Rey','Certificado de $ 10',230,2,'public/upload/premios/17E53ADC-5E4E-5904-09AE-881F56A5BBBA.png','2017-05-24 14:48:18','2017-05-24 22:10:28',115,77),(30,'Certificado El Rey','Certificado de $ 20',460,2,'public/upload/premios/AC522A5E-1387-AC76-E1E4-35089B63E916.png','2017-05-24 14:49:07','2017-05-24 22:10:46',230,153),(31,'Certificado El Rey','Certificado de $ 50',1150,2,'public/upload/premios/6E3E7C82-CB25-90EA-A7AF-B8E17F1FBCFC.png','2017-05-24 14:50:12','2017-05-24 22:12:16',575,383),(32,'Certificado de Multimax','Certificado de $ 50',1150,1,'public/upload/premios/002906CB-64B7-A91B-A52E-3D5687454C6E.png','2017-05-24 14:51:50','2017-05-24 22:12:49',575,383),(33,'Certificado de Multimax','Certificado de $ 100',2300,1,'public/upload/premios/5FDD68AF-77F1-2119-D4B6-9E2438BD2428.png','2017-05-24 14:52:44','2017-05-24 22:13:25',1150,767),(34,'Certificado de Panafoto','Certificado de $ 50',1150,1,'public/upload/premios/86AC1048-386D-6FE5-4764-6BDECD1B49CD.png','2017-05-24 14:53:35','2017-05-24 22:13:45',575,383),(35,'Certificado de Panafoto','Certificado de $ 100',2300,1,'public/upload/premios/64652C49-36C2-718D-C020-4529E040E58B.png','2017-05-24 14:54:54','2017-05-24 22:14:15',1150,767),(36,'Certificado de Vale Panamá','Certificado de $ 20',460,4,'public/upload/premios/86C749FF-0667-5F9E-76BE-BC039B96B330.png','2017-05-24 14:56:31','2017-05-24 22:14:59',230,153),(37,'Certificado de Gasolina Terpel','Certificado de $ 20',460,4,'public/upload/premios/F5946BB4-CE01-7B1B-8556-B54BBE0F8E9F.png','2017-05-24 14:57:20','2017-05-24 22:14:44',230,153),(38,'Pasadía Playa Blanca (lunes a miércoles)','Pasadía de 8am a 5pm. \r\nIncluye:\r\n- Desayuno, almuerzo y snack. \r\n- Uso de las instalaciones\r\n\r\nDebe hacer previa cita.',1107,3,'public/upload/premios/D6579E6D-9094-C3FC-B940-26C5BE435530.png','2017-05-24 15:01:12','2017-05-24 22:15:59',554,369),(39,'Pasadía Playa Blanca (Jueves y Viernes)','Pasadía de 8am a 5pm. \r\nIncluye:\r\n- Desayuno, almuerzo y snack\r\n- Uso de las instalaciones\r\n\r\n- Debe hacer previa cita.',1354,3,'public/upload/premios/8CAED37D-6A31-80F0-E01E-91CCD0D890A6.png','2017-05-24 15:03:14','2017-05-24 22:16:35',677,451),(40,'Pasadía Playa Blanca (Sábado)','Pasadía de 8am a 5pm. \r\nIncluye:\r\n- Desayuno, almuerzo y snack\r\n- Uso de las instalaciones\r\n\r\n- Debe hacer previa cita.',1590,3,'public/upload/premios/00586D1B-62D2-2BD7-BC1D-114D4B38F25D.png','2017-05-24 15:07:01','2017-05-24 22:17:07',795,530),(41,'Pasadía Playa Blanca (Domingo)','Pasadía de 8am a 5pm. \r\nIncluye:\r\n- Desayuno, almuerzo y snack\r\n- Uso de las instalaciones\r\n\r\n- Debe hacer previa cita.',1846,3,'public/upload/premios/33A48BF6-6976-6911-5411-4755F8B8108F.png','2017-05-24 22:18:23','2017-05-24 22:18:23',923,615),(42,'Pasadía Sheraton Bijao','Pasadía de 11am a 5pm. \r\nIncluye:\r\n- Almuerzo, snack y bebidas nacionales\r\n- Uso de las instalaciones\r\n\r\n- Debe hacer previa cita.',2080,3,'public/upload/premios/334C9960-E897-3C88-C242-9DFDCB9DF138.png','2017-05-24 22:20:12','2017-05-24 22:23:45',1040,693),(43,'Pasadía en el westin Playa Bonita','Pasadía de Lunes a domingo 11am a 5pm. \r\nIncluye:\r\n- Almuerzo, snack y bebidas nacionales.\r\n- Uso de las instalaciones\r\n\r\n- Debe hacer previa cita.',2080,3,'public/upload/premios/12922E45-B7D4-1445-1875-789727C82E02.png','2017-05-24 22:22:06','2017-05-24 22:24:25',1040,693);
/*!40000 ALTER TABLE `premios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntos`
--

DROP TABLE IF EXISTS `puntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puntos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `puntos` int(11) NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntos`
--

LOCK TABLES `puntos` WRITE;
/*!40000 ALTER TABLE `puntos` DISABLE KEYS */;
INSERT INTO `puntos` VALUES (1,591,'1234','2017-05-02 22:15:41','2017-05-02 22:15:41'),(2,5000,'1234','2017-05-03 14:19:46','2017-05-03 14:19:46'),(3,5000,'1234','2017-05-05 16:38:46','2017-05-05 16:38:46'),(4,915,'8345612','2017-05-05 16:38:46','2017-05-05 16:38:46'),(5,777,'849267','2017-05-05 16:38:46','2017-05-05 16:38:46'),(6,626,'8280917','2017-05-05 16:38:46','2017-05-05 16:38:46'),(7,500,'87171804','2017-05-05 16:38:46','2017-05-05 16:38:46'),(8,537,'87371072','2017-05-05 16:38:46','2017-05-05 16:38:46'),(9,497,'47232428','2017-05-05 16:38:46','2017-05-05 16:38:46'),(10,893,'4273737','2017-05-05 16:38:46','2017-05-05 16:38:46'),(11,200,'4194295','2017-05-05 16:38:46','2017-05-05 16:38:46'),(12,100,'1234','2017-05-17 19:07:28','2017-05-17 19:07:28'),(13,915,'8345612','2017-05-17 19:07:28','2017-05-17 19:07:28'),(14,777,'849267','2017-05-17 19:07:28','2017-05-17 19:07:28'),(15,626,'8280917','2017-05-17 19:07:28','2017-05-17 19:07:28'),(16,500,'87171804','2017-05-17 19:07:28','2017-05-17 19:07:28'),(17,537,'87371072','2017-05-17 19:07:28','2017-05-17 19:07:28'),(18,497,'47232428','2017-05-17 19:07:28','2017-05-17 19:07:28'),(19,893,'4273737','2017-05-17 19:07:28','2017-05-17 19:07:28'),(20,200,'4194295','2017-05-17 19:07:28','2017-05-17 19:07:28'),(21,100,'1234','2017-05-17 19:08:03','2017-05-17 19:08:03'),(22,915,'8345612','2017-05-17 19:08:03','2017-05-17 19:08:03'),(23,777,'849267','2017-05-17 19:08:03','2017-05-17 19:08:03'),(24,626,'8280917','2017-05-17 19:08:03','2017-05-17 19:08:03'),(25,500,'87171804','2017-05-17 19:08:03','2017-05-17 19:08:03'),(26,537,'87371072','2017-05-17 19:08:03','2017-05-17 19:08:03'),(27,497,'47232428','2017-05-17 19:08:03','2017-05-17 19:08:03'),(28,893,'4273737','2017-05-17 19:08:03','2017-05-17 19:08:03'),(29,200,'4194295','2017-05-17 19:08:03','2017-05-17 19:08:03'),(30,100,'1234','2017-05-17 19:08:07','2017-05-17 19:08:07'),(31,915,'8345612','2017-05-17 19:08:07','2017-05-17 19:08:07'),(32,777,'849267','2017-05-17 19:08:07','2017-05-17 19:08:07'),(33,626,'8280917','2017-05-17 19:08:07','2017-05-17 19:08:07'),(34,500,'87171804','2017-05-17 19:08:07','2017-05-17 19:08:07'),(35,537,'87371072','2017-05-17 19:08:07','2017-05-17 19:08:07'),(36,497,'47232428','2017-05-17 19:08:07','2017-05-17 19:08:07'),(37,893,'4273737','2017-05-17 19:08:07','2017-05-17 19:08:07'),(38,200,'4194295','2017-05-17 19:08:07','2017-05-17 19:08:07'),(39,591,'1234','2017-05-17 19:10:05','2017-05-17 19:10:05'),(40,915,'8345612','2017-05-17 19:10:05','2017-05-17 19:10:05'),(41,777,'849267','2017-05-17 19:10:05','2017-05-17 19:10:05'),(42,626,'8280917','2017-05-17 19:10:05','2017-05-17 19:10:05'),(43,500,'87171804','2017-05-17 19:10:05','2017-05-17 19:10:05'),(44,537,'87371072','2017-05-17 19:10:05','2017-05-17 19:10:05'),(45,497,'47232428','2017-05-17 19:10:05','2017-05-17 19:10:05'),(46,893,'4273737','2017-05-17 19:10:05','2017-05-17 19:10:05'),(47,200,'4194295','2017-05-17 19:10:05','2017-05-17 19:10:05'),(48,591,'1234','2017-05-17 19:12:40','2017-05-17 19:12:40'),(49,915,'8345612','2017-05-17 19:12:40','2017-05-17 19:12:40'),(50,777,'849267','2017-05-17 19:12:40','2017-05-17 19:12:40'),(51,626,'8280917','2017-05-17 19:12:40','2017-05-17 19:12:40'),(52,500,'87171804','2017-05-17 19:12:40','2017-05-17 19:12:40'),(53,537,'87371072','2017-05-17 19:12:40','2017-05-17 19:12:40'),(54,497,'47232428','2017-05-17 19:12:40','2017-05-17 19:12:40'),(55,893,'4273737','2017-05-17 19:12:40','2017-05-17 19:12:40'),(56,200,'4194295','2017-05-17 19:12:40','2017-05-17 19:12:40'),(57,591,'1234','2017-05-17 19:18:18','2017-05-17 19:18:18'),(58,915,'8345612','2017-05-17 19:18:18','2017-05-17 19:18:18'),(59,777,'849267','2017-05-17 19:18:18','2017-05-17 19:18:18'),(60,626,'8280917','2017-05-17 19:18:18','2017-05-17 19:18:18'),(61,500,'87171804','2017-05-17 19:18:18','2017-05-17 19:18:18'),(62,537,'87371072','2017-05-17 19:18:18','2017-05-17 19:18:18'),(63,497,'47232428','2017-05-17 19:18:18','2017-05-17 19:18:18'),(64,893,'4273737','2017-05-17 19:18:18','2017-05-17 19:18:18'),(65,200,'4194295','2017-05-17 19:18:18','2017-05-17 19:18:18');
/*!40000 ALTER TABLE `puntos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `eds` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `asesor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tipo_usuario` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `terminos` int(11) DEFAULT '0',
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `usuarios_usuario_unique` (`usuario`),
  UNIQUE KEY `usuarios_cedula_unique` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('0101','$2y$10$yzBgx5NYkOTKDHQ2W9JWJ.nQRDxIeRyBPXwKgRobx6r1SgZ/Y9nAe','0101','Angel','Vargas','ejemplo1@gmail.com','2020201','18','',4,'xrVrYDrW2kEia3e1polxi8pEchVrV9MlrJFTAYOaAWRRKce1ftLl1eaeW2RH','2017-05-19 20:09:38','2017-05-19 21:16:09',1),('0102','$2y$10$85w8OVLeM.u/AXSVVNZIYu5K5MRuoHHdMJC1prPrEBu80prz7ZtQa','0102','Fátima','Bermudez','ejemplo2@gmail.com','2020202','36','',4,'uPIVbSiEK1FAsZLG0Mg8ODw7NjbK5Y0w2LqRpNyNf30sDV0VtvFWe3QQRFBK','2017-05-19 20:51:23','2017-05-19 21:28:02',1),('0103','$2y$10$GZWtMf05BtL36sntIege/O21eW5c16HXQ4vZ/sanuqs0L/0itzTsu','0103','Gaspar','Herrera','ejemplo3@gmail.com','2020203','37','',4,NULL,'2017-05-19 20:59:26','2017-05-19 20:59:26',0),('0104','$2y$10$xSb82OxztnNTN6TShXJ8n.EYpjUXO1F.uX.6tQSfsuvijtwdeMKXy','0104','Gregorio','Stanford','ejemplo4@gmail.com','2020204','38','',4,NULL,'2017-05-19 21:00:39','2017-05-19 21:00:39',0),('0105','$2y$10$vdtY3syGp97dSZ.Oo1YQbePorO1CA9Lyne7akiem.gkQOWZJdMWQy','0105','Iliana','Ballesteros','ejemplo5@gmail.com','2020205','39','',4,'lUwLDLpizDqWaUdAqlDovHcDE5qh186KGziwchNUiph25JUFjT1O6o7Axl0M','2017-05-19 21:05:57','2017-05-19 21:05:57',0),('0106','$2y$10$mMIFJmayPZCM9AR61OTfRO0gZgvmwGX4Qn8AWgzGAc87QeWBIAc5y','0106','Mónica','Cañas','ejemplo6@gmail.com','2020206','40','',4,NULL,'2017-05-19 21:07:10','2017-05-19 21:07:10',0),('0107','$2y$10$Rp6Q.RmNOCNfhjliSkS4d.75Qhv8BmfiZJQifXS2oUZSyKWvNdTwy','0107','Alfredo','Saavedra','mail01@mail.com','123456789','37','103',6,'3UGLncNGYnjQxnqySVfEdsuhjSrt9eIbGNFxHvxCDsy9fFAdVuwgxw876tOs','2017-05-19 21:46:33','2017-05-19 21:47:02',1),('8790','$2y$10$A33M5Zfhd60s44WpsEODte1yQ3PuFJXJ5LW73JaNsaHZMuohBWQze','8790','Ana','Prueba1','email1@gmail.com','2337130','2','101',1,'t7jSjj00w2M2raNinwOaikZniM3JzcQ0baczUI7qjTF9sEV6XzX6ziJ66tU1','2017-05-19 21:09:48','2017-05-19 21:25:02',1),('87901','$2y$10$D0tokFR2jsoDNGibSiHAsOtq5CppmhhB8EkYuZSet4p8qMz/Phxre','87901','Luis','Ramirez','mail4@gmail.com','2337135','19','102',1,NULL,'2017-05-19 21:13:18','2017-05-19 21:13:18',0),('8790451','$2y$10$l7nlNFk7oud9qV3NMDmyqOrw46oTtaAot1E.g3SyupL0o2c4OtcJu','8790451','Fracisco','Colmenero','mail5@gmail.com','233851','27','102',1,NULL,'2017-05-19 21:15:10','2017-05-19 21:15:10',0),('8791','$2y$10$woL89nYj8a8dLw7furUlW.T2wvMyLyi5Pu2kP.V3ALZtMD78PIjWC','8791','Pablo','Montez','mail2@gmail.com','2337131','3','101',1,'WJVCX6BcUHGKYtP92bR4mtwqTM9VzDRkiPWeM9llv1ppQk3lHPyOSIHIjder','2017-05-19 21:11:18','2017-05-19 21:26:53',1),('8792','$2y$10$8q3rzTzPxdiiCE.3E6Wq9eUex90XVGHVdumMqjLB0tc6yYi3YlIyy','8792','Miguel','Cáceres','mail3@gmail.com','2337133','4','101',2,NULL,'2017-05-19 21:12:16','2017-05-19 21:12:16',0),('corina','$2y$10$0ydOfZ3VSiTRs1Q52AOFkurTYPck9qqEcFZRq2QXU0mTt9EnU9Olq','corina','Corina','Anyelo','Corina@fabricamosideas.com.pa','68142761','','',5,'uc8zvjveRhpNJzYqQZ8lZ0Ykqwb4Cb7vE23sRmXXenoehjkXOkOAUSARPBR8','2017-05-03 13:21:40','2017-05-10 13:10:55',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-29  8:10:20
