-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `Judul` varchar(255) NOT NULL,
  `Tahun` year(4) DEFAULT NULL,
  `Durasi` int(11) DEFAULT NULL,
  `Bahasa` varchar(50) DEFAULT NULL,
  `Bersuara` char(1) DEFAULT NULL,
  `Festival` longtext,
  `Award` longtext,
  `Sinopsis` longtext,
  `Link` varchar(255) DEFAULT NULL,
  `ID_FILM` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Sutradara` int(11) NOT NULL,
  `ID_Produser` int(11) NOT NULL,
  PRIMARY KEY (`ID_FILM`),
  KEY `ID_Sutradara` (`ID_Sutradara`),
  KEY `ID_Produser` (`ID_Produser`),
  CONSTRAINT `film_ibfk_1` FOREIGN KEY (`ID_Sutradara`) REFERENCES `sutradara` (`ID_DIR`) ON UPDATE CASCADE,
  CONSTRAINT `film_ibfk_2` FOREIGN KEY (`ID_Produser`) REFERENCES `produser` (`ID_PROD`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES ('Aku Padamu',2018,12,'English','Y','Hoho','Hihi','HEHE','www.detik.com',14,1,1),('Aku Padamu',2018,12,'English','Y','Hoho','Hihi','HEHE','www.detik.com',15,2,2);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produser`
--

DROP TABLE IF EXISTS `produser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produser` (
  `Nama_Lengkap` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `No_Telp` varchar(12) DEFAULT NULL,
  `Nama_PH` varchar(255) DEFAULT NULL,
  `Alamat_PH` varchar(255) DEFAULT NULL,
  `Kota_PH` varchar(50) DEFAULT NULL,
  `Provinsi_PH` varchar(50) DEFAULT NULL,
  `No_Telp_PH` varchar(12) DEFAULT NULL,
  `ID_PROD` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_PROD`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produser`
--

LOCK TABLES `produser` WRITE;
/*!40000 ALTER TABLE `produser` DISABLE KEYS */;
INSERT INTO `produser` VALUES ('Muhammad Rizki Duwinano','rizkiduwinanto@gmail.com','87877739093','Anjing','Jalan Cisitu Indah 4 No.20a','Bandung','Jawa Barat','87877739093',1),('Muhammad Rizki Duwinano','rizkiduwinanto@gmail.com','87877739093','Anjing','Jalan Cisitu Indah 4 No.20a','Bandung','Jawa Barat','87877739093',2);
/*!40000 ALTER TABLE `produser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sutradara`
--

DROP TABLE IF EXISTS `sutradara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sutradara` (
  `Nama_Lengkap` varchar(255) NOT NULL,
  `No_Telp` varchar(12) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Kota` varchar(50) DEFAULT NULL,
  `Provinsi` varchar(50) DEFAULT NULL,
  `Kodepos` varchar(10) DEFAULT NULL,
  `Biografi` longtext,
  `Email` varchar(255) DEFAULT NULL,
  `ID_DIR` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_DIR`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sutradara`
--

LOCK TABLES `sutradara` WRITE;
/*!40000 ALTER TABLE `sutradara` DISABLE KEYS */;
INSERT INTO `sutradara` VALUES ('Muhammad Rizki Duwinanto','87877739093','Jalan Cisitu Indah 4 No.20A','Bandung','Jawa Barat','12530','HEHE','rizkiduwinanto@gmail.com',1),('Muhammad Rizki Duwinanto','87877739093','Jalan Cisitu Indah 4 No.20A','Bandung','Jawa Barat','12530','HEHE','rizkiduwinanto@gmail.com',2);
/*!40000 ALTER TABLE `sutradara` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-16 15:56:13
