-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: sql3.freemysqlhosting.net    Database: sql3141988
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.12.04.1

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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `buildingid` int(11) NOT NULL AUTO_INCREMENT,
  `buildingname` char(255) DEFAULT NULL,
  `maplocationX` int(11) DEFAULT NULL,
  `maplocationY` int(11) DEFAULT NULL,
  `colorCoding` char(50) DEFAULT NULL,
  `address` char(255) DEFAULT NULL,
  PRIMARY KEY (`buildingid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES (1,'Fiske Planetarium and Science Center',4,5,'Blue','2414 Regent Dr, Boulder, CO 80309'),(2,'Muenzinger Psychology',143,676,'Green','1905 Colorado Ave, Boulder, CO 80309'),(3,'Folsom Field',23,198,'Red','2400 Colorado Ave, Boulder, CO 80302'),(4,'Coors Event Center',234,99,'Purple','950 Regent Dr, Boulder, CO 80305'),(10,'Prentup Field',53,876,'white','33rd St, Boulder, CO 80303'),(11,'Grusin Music Hall',42,53,'black','1020 18th Street, Boulder, CO'),(12,'Macky Auditorium',93,89,'Red','1595 PLEASANT ST Boulder, CO'),(13,'University Theatre',53,134,'Green','261 UCB, Boulder, CO 80302'),(20,'Baker Hall',32,87,'Orange','Baker Hall, Baker Dr, Boulder, CO 80310'),(21,'Willard Hall',132,17,'Orange','2200 Willard Loop Drive, Boulder, CO 80310'),(22,'Visual Art Complex',89,321,'Green','Boulder, CO 80310'),(23,'University Memorial Center',140,489,'Red','1669 Euclid Ave, Boulder, CO 80302'),(24,'Student Recreation Center',36,55,'White','1835 Pleasant St, Boulder, CO 80302'),(25,'Farrand Field',26,135,'White','Boulder, CO 80302'),(26,'Carlson Gymnasium',45,55,'White','Boulder, CO 80302'),(27,'Center for Community',179,120,'Red','Center for Community, 2010 Willard Loop Dr, Boulder, CO 80305'),(28,'Leads Business School',134,187,'Green','995 Regent Dr, Boulder, CO 80302');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campusevents`
--

DROP TABLE IF EXISTS `campusevents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campusevents` (
  `eventid` int(11) NOT NULL AUTO_INCREMENT,
  `date` char(10) DEFAULT NULL,
  `name` char(150) DEFAULT NULL,
  `buildingid` int(11) DEFAULT NULL,
  `info` char(255) DEFAULT NULL,
  `time` char(8) DEFAULT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campusevents`
--

LOCK TABLES `campusevents` WRITE;
/*!40000 ALTER TABLE `campusevents` DISABLE KEYS */;
INSERT INTO `campusevents` VALUES (1,'10-28-2016','Juno: Mission to Jupiter',1,'Learn about Juno','19:00:00'),(2,'10-31-2016','Takacs Quartet: Encore Series',11,'Grammy Award-winning chamber quartet','19:30:00'),(3,'11-02-2016','55th Annual CU Madrigal Festival',12,'Event is open to the public','08:00:00'),(4,'11-04-2016','\"Twelfth Night\" by William Shakespeare Opening Night',13,'A story of mistaken identities and love at first sight.','19:30:00'),(5,'11-10-2016','Secrets of Andean Skies',1,'The Inca of western South America created the most extensive and arguably the most successful empire in pre-Columbian Americas.','19:00:00'),(6,'2016-11-03','CWA Speaker Series Presents Chris Moody',1,'While the Conference on World Affairs hosts over 100 speakers and performers during one week in April, the CWA Speaker Series brings individual distinguished guests to campus, as a means of extending the cultural and intellectual environment of the CWA th','18:30:00'),(7,'2016-11-05','CU on the Weekend - Justice in a Warming World',1,'Far beyond merely molecules of carbon in the atmosphere, climate change is an issue defined by competing ideas of fairness and justice.','09:00:00'),(8,'2016-11-05','Early Music Ensemble',3,'An ensemble for those who lack free evenings.','16:30:00'),(9,'2016-11-06','Guitar and Flute Celebration',11,'Celebration of two of the greatest instruments of all time.','14:00:00'),(10,'2016-11-06','Japanese Ensemble',4,'Embrace your inner Japanese at this production','14:00:00'),(11,'2016-11-06','Mens Chorus, Womens Chorus and Collegiate Chorale',12,'Come join the boy and girls in their choral concert.','19:30:00'),(12,'2016-11-09','Student Jazz Combo',3,'Young jazz musicians show their worth in this explosive performance.','19:30:00'),(13,'2016-11-09','Symphonic Band',4,'The most sophisticated of student musicians display their excellence.','19:30:00'),(14,'2016-11-10','Wind Symphony',2,'The elitest of all instrument groups, the winds display their skills tonight.','19:30:00'),(15,'2016-11-11','Open Space, a dance concert',10,'In this student-produced and CU Dance Connection-curated series, dance works span a spectrum of styles, inviting and challenging viewers with exciting experimentation.','19:30:00');
/*!40000 ALTER TABLE `campusevents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sportsscores`
--

DROP TABLE IF EXISTS `sportsscores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sportsscores` (
  `scoreid` int(11) NOT NULL AUTO_INCREMENT,
  `sport` char(30) DEFAULT NULL,
  `date` char(10) DEFAULT NULL,
  `score` char(30) DEFAULT NULL,
  `opponent` char(30) DEFAULT NULL,
  `time` char(8) DEFAULT NULL,
  `buildingid` int(11) DEFAULT NULL,
  PRIMARY KEY (`scoreid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sportsscores`
--

LOCK TABLES `sportsscores` WRITE;
/*!40000 ALTER TABLE `sportsscores` DISABLE KEYS */;
INSERT INTO `sportsscores` VALUES (1,'football','2016-10-15','W 16-40','Arizona State','18:00:00',3),(2,'football','2016-10-22','W 10-5','Stanford','13:00:00',3),(3,'volleyball','2016-10-14','W 3-2','Washington State','20:00:00',4),(4,'volleyball','2016-10-22','L 1-3','Oregon','19:00:00',4),(5,'soccer','2016-10-23','W 3-2','California','14:00:00',10),(6,'football','2016-11-3','N 0-0','UCLA','19:00:00',3),(7,'volleyball','2016-10-28','L 2-3','UCLA','18:00:00',4),(8,'volleyball','2016-10-28','L 0-3','Southern California','18:00:00',4);
/*!40000 ALTER TABLE `sportsscores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-31 16:59:52
