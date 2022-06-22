-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hoteldatabase
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `fasilitas_kamar`
--

DROP TABLE IF EXISTS `fasilitas_kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas_kamar`
--

LOCK TABLES `fasilitas_kamar` WRITE;
/*!40000 ALTER TABLE `fasilitas_kamar` DISABLE KEYS */;
INSERT INTO `fasilitas_kamar` VALUES (3,6,'846-tv.jpg','Televisi LED Jernih'),(4,6,'463-ac.jpg','Air Conditioner (AC)'),(5,6,'79-toilet.jpg','Kamar Mandi dalam Ruangan'),(6,6,'82-teh.jpeg','Teh dan Coffe'),(7,6,'68-mandi.jpg','Peralatan Mandi'),(8,9,'794-tv.jpg','Televisi Led Jernih'),(9,9,'236-ac.jpg','Air Conditioner (AC)'),(10,9,'250-toilet.jpg','Kamar Mandi dalam Ruangan\r\n'),(11,9,'689-teh.jpeg','Teh dan Coffe'),(12,9,'95-mandi.jpg','Peralatan Mandi'),(13,9,'800-lounge.jpg','Akses Executive Lounge.'),(14,9,'560-brankas.jpg','Brankas');
/*!40000 ALTER TABLE `fasilitas_kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (1,'Kolam Renang Indoor','318-kolam indoor.jpg'),(2,'Kolam Renang Outdoor','589-kolam-outdoor.jpg'),(4,'Restoran','239-restoran.jpg'),(5,'Lapangan Basket','606-basket.jpg'),(6,'Taman Bermain Anak','235-main.jpg'),(7,'Biliard','777-biliard.jpg'),(8,'Gym','218-gym.jpg');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kamar`
--

DROP TABLE IF EXISTS `kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar` varchar(100) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kamar`
--

LOCK TABLES `kamar` WRITE;
/*!40000 ALTER TABLE `kamar` DISABLE KEYS */;
INSERT INTO `kamar` VALUES (6,'Standard',2,'350000','30-standard.jpg'),(9,'Twinn ',0,'500000','30-twin.jpg'),(10,'Deluxe',0,'6500000','183-deluxe.jpg'),(11,'Elite',0,'1000000','191-elite.jpg'),(12,'Family Suite',0,'1500000','926-familySuite.jpg'),(13,'Presidential Suite',0,'3000000','888-presidentialSuite.jpg'),(18,'coba1',26,'300000','175-gym.jpg');
/*!40000 ALTER TABLE `kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `cek_in` varchar(255) DEFAULT NULL,
  `cek_out` varchar(255) DEFAULT NULL,
  `jml_kamar` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `email_pemesan` varchar(255) DEFAULT NULL,
  `hp_pemesan` varchar(255) DEFAULT NULL,
  `nama_tamu` varchar(255) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `koderes` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES (75,'2022-05-26','2022-05-27','20',0,'Roronoa Zoro','zoro@gmail.com','081387225631','Robin',18,'2','051722Roronoa Zoro18'),(79,'2022-05-18','2022-05-19','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','Nami',6,'1','051822Ichan180522'),(84,'2022-05-18','2022-05-19','1',0,'Eka','eka@gmail.com','081234564657','nami',6,'1','051822Eka081234564657'),(85,'2022-05-21','2022-05-22','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','Robin',6,'1','051822Ichan6'),(86,'2022-05-18','2022-05-19','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','ichan',6,'1','051822Ichan6'),(87,'2022-05-18','2022-05-19','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','ichan',6,'1','051822Ichan6'),(88,'2022-05-18','2022-05-19','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','ichan',6,'1','051822Ichan6'),(89,'2022-05-18','2022-05-19','1',0,'Ichan','ichaputriana39@gmail.com','081387225631','ichan',6,'1','051822Ichan6'),(90,'2022-05-19','2022-05-20','1',0,'Rico','ichaputriana39@gmail.com','081234564657','robin',6,'1','051822Rico6'),(91,'2022-05-20','2022-05-20','2',0,'Sasha Banks','sasha@gmail.com','081234564657','Sasha',6,'1','051822Sasha Banks6');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tambah_kamar`
--

DROP TABLE IF EXISTS `tambah_kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tambah_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tambah_kamar`
--

LOCK TABLES `tambah_kamar` WRITE;
/*!40000 ALTER TABLE `tambah_kamar` DISABLE KEYS */;
INSERT INTO `tambah_kamar` VALUES (29,18,2),(30,18,2),(31,18,2),(32,18,2),(33,18,2),(34,18,2),(35,18,2),(36,18,2),(37,18,2),(38,18,2),(39,18,2),(40,18,6),(41,0,20),(42,0,20),(43,0,20),(44,0,12),(45,0,12),(46,0,12),(47,0,12),(48,0,12),(49,0,12),(50,0,12),(51,0,12),(52,0,12),(53,6,12),(54,6,5),(55,6,2),(56,6,2),(57,6,1),(58,6,2),(59,18,2),(60,6,2);
/*!40000 ALTER TABLE `tambah_kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','Administrator','admin1234','1'),(3,'Resepsionis','Resepsionis','resepsionis1234','2'),(4,'Icha Dewi Putriana','ichan','ichan1234','3'),(5,'Sanji','Sanji','sanji1234','3'),(6,'Roronoa Zoro','Roronoa Zoro','zoro1234','3'),(7,'Fitri','fifi','123','3');
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

-- Dump completed on 2022-06-22 10:42:21
