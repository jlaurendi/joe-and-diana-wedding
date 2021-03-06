-- MySQL dump 10.13  Distrib 5.5.42-37.1, for Linux (x86_64)
--
-- Host: localhost    Database: fourplat_wedding
-- ------------------------------------------------------
-- Server version	5.5.42-37.1-log
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `guestbook`
--

DROP TABLE IF EXISTS `guestbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `comment` mediumtext,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wedding` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestbook`
--

LOCK TABLES `guestbook` WRITE;
/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
INSERT INTO `guestbook` VALUES (8,'???','antelope0420@hotmail.com','????????????????????Best Wishes.','2015-10-27 17:34:24','us'),(9,'???','emi921223@hotmail.com','?????????????!!!??????????!!!','2015-10-27 17:35:30','us'),(10,'??','h801427@gmail.com','????????? ?????????\n???????????????????????????????\n\n????????????????????????','2015-10-27 17:38:02','us'),(11,'???','hitiff0429@gmail.com','???????????????????','2015-10-27 17:39:09','us'),(12,'Alisa Laurendi','mlaurendi@sc.rr.com','Best Wishes to a wonderful couple.  May you both have a life time of adventure and prosperity together.  Love you both!! ','2015-10-27 17:26:53','us'),(15,'??','annabelle0514@hotmail.com','???????????????????!!!!!!!!!\n???????\n?????????????\n???????????????  : )\n','2015-10-27 23:52:34','us'),(16,'??','energyselina@gmail.com','??~????!?????????????QQ ??????????????!????????????????!','2015-10-28 00:58:23','us'),(17,'Aunt Lisa','lisanoto@bellsouth.net','So happy for you two!  I can\'t wait to join you in celebrating your commitment to each other!\nLove,\nAunt Lisa\n','2015-10-28 02:09:36','us'),(18,'??','vicki34lin@gmail.com','???????!!!\n ????????????????????????!! \n(??????????????????XD)\n????!!!','2015-10-28 04:44:10','us'),(19,'Aunt Grace','gracelani2002@yahoo.com','We are so happy you found each other in this immense world of ours!\nWhat are the mathematical odds of that?\nLooking forward to sharing your special day with you and to welcome Diana into our family.\n\nLove, Uncle Bruce and Aunt Grace','2015-10-28 22:17:28','us'),(20,'???','peshan0624@gmail.com','????~~~~~~~~\n???????!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!','2015-10-29 07:25:25','us'),(21,'Dad (Joseph\'s father) Mike Laurendi','mlaurendi@sc.rr.com','Dear Joseph and Diana,\n??\nZhùhè\n\nCongratulations on finding each other! I am really excited you have taken the next step and I am so happy for you both!\n\nI remember when you two visited your (Joseph\'s) mother and me at our home in Summerville, South Carolina. The feelings I experienced ranged from pride and love and happiness and joy for you.\n\nI wish you a wonderful life together and many successes on your new path together. You are a truly special couple. I was very impressed with you two traveling to meet not only your (Joseph\'s) mother and me, but also my parents, Mary and Joe, your (Joseph\'s) grand-parents, in Florida.\n\nWhat a beautiful wedding announcement guestbook online!\n\nI also wish you minimum stress and lots of strength in the fast times that are so characteristic in the time leading up to weddings!\n\nBelieve in your dreams.\n\nLove,\nDad','2015-10-29 22:13:55','us'),(22,'???','eternal511503@yahoo.com.tw','????????????\n\n??????????\n\n????????????????????\n\n???????????:)','2015-11-01 02:55:01','us');
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsvps`
--

DROP TABLE IF EXISTS `rsvps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsvps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `attend_taiwan` tinyint(1) DEFAULT NULL,
  `attend_usa` tinyint(1) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dietary` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsvps`
--

LOCK TABLES `rsvps` WRITE;
/*!40000 ALTER TABLE `rsvps` DISABLE KEYS */;
INSERT INTO `rsvps` VALUES (9,'Joseph Laurendi','jlaurendi@gmail.com',1,1,0,'2015-10-26 18:52:40','58 Manchester Road','6173088603','vegan'),(10,'Joseph Laurendi','jlaurendi@gmail.com',1,1,0,'2015-10-26 18:57:04','blah','617','I\'m testing this out!'),(11,'Joseph Laurendi','jlaurendi@gmail.com',2,0,1,'2015-10-27 15:37:56','58 Manchester Road','6173088603',''),(12,'???','emi921223@hotmail.com',2,1,0,'2015-10-27 15:44:44','??????????462?','0973301385','????!!!!'),(13,'??','kelsy.rao@hyatt.com',2,1,0,'2015-10-27 15:45:20','?????????423?2?21?2?','0939537456',''),(14,'???','h801427@gmail.com',2,1,0,'2015-10-27 15:46:29','?????????????','0960298400',''),(15,'Joseph Laurendi','jlaurendi@gmail.com',2,1,0,'2015-10-27 15:59:21','2027 N Prospect Ave, Milwaukee, WI 53202','6173088603',''),(16,'???','lsally7911@gmail.com',1,1,0,'2015-10-27 16:46:10','80654-??????????475?1?2-3?','0937003257','??????????????'),(17,'???','hitiff0429@gmail.com',1,1,0,'2015-10-27 16:48:44','33076 ??????????450?????','0931255429','???????'),(18,'???','Cmf19910725@hotmail.com',1,1,0,'2015-10-27 16:57:13','?????????600?55?12?4?','0937315847',''),(19,'æ´ªèå','agnes511003@gmail.com',1,1,0,'2015-10-27 17:37:24','å°åå¸é¹½æ°´åå¤§èé9é°4ä¹6è','0975412629','ç¡'),(20,'Allen Lin','allenlin24@gmail.com',1,0,1,'2015-10-27 20:58:36','58 Manchester Road, Brookline, MA 02446','5083384728',''),(21,'Jennifer Noto','jennifernoto720@gmail.com',2,0,1,'2015-10-27 22:37:36','7612 Satinwing Lane, Raleigh, NC 27617','17045078251',''),(22,'é­å¿å»','kuohsinyu0313@gmail.com',1,1,0,'2015-10-28 00:18:57','é«éå¸å·¦çåæ°èä¸è·¯151è13æ¨ä¹ä¸','0933389142',''),(23,'Mr. and Mrs. Joseph F. Laurendi','mlaurendi2007@yahoo.com',2,0,1,'2015-10-28 00:31:03','','352-368-7664','None'),(24,'Lisa Noto','lisanoto@bellsouth.net',1,0,1,'2015-10-28 02:04:42','4920 Glenbrier Dr, Charlotte, NC 28212','704-491-9862',''),(25,'é­æ·å°¹','sandicheng29@gmail.com',1,1,0,'2015-10-28 02:52:56','','0931763871',''),(26,'è¨±ä¹æ','energyselina@gmail.com',1,1,0,'2015-10-28 03:13:34','234æ°åå¸æ°¸ååä¿å¹³è·¯292å··36å¼1è5æ¨','0926726171','no'),(27,'æä½³æ§','cherishbaby@kimo.com',1,1,0,'2015-10-28 05:13:11','é«éå¸å¤§å¯®åæçµéï¼è·¯ï¼108è','0963205687',''),(28,'Sameer Deshpande','skdeshpande91@gmail.com',1,0,1,'2015-10-28 13:27:50','23 S. 23rd St, Unit 2F, Philadelphia, PA 19103','2142876040','Vegetarian'),(29,'å³å è¦','sheep80427@hotmail.com',1,1,0,'2015-10-28 13:59:25','é«éå¸é³¥æ¾åè¯ç¾éä¸­å±±è·¯93å··17è','0912154118',''),(30,'Kelly Laurendi','klaurendi@gmail.com',1,0,1,'2015-10-28 15:19:57','19 Overlook Ridge Terrace, Unit 438, Revere, MA 02151','5089017011','none'),(31,'æ¯å®é','poplisa@livemail.tw',2,1,0,'2015-10-28 15:27:44','é«éå¸ä»æ­¦åç£å§éä»åè·¯182è','0932505908',''),(32,'é§æå¥','98205072@nccu.edu.tw',1,1,0,'2015-10-29 06:48:39','æ°åå¸æ¿æ©åèªå¼·æ°æ72è3æ¨','0988061356','Not too much seafood haha'),(33,'æ¹¯æºé','soup0915@gmail.com',1,1,0,'2015-10-29 13:48:09','é«éå¸æ©é ­åä»éééè±è·¯139å··25è','0956111266',''),(34,'å³å è¦','sheep80427@hotmail.com',1,1,0,'2015-10-30 12:40:41','é«éå¸é³¥æ¾åä¸­å±±è·¯93å··17è','0912154118',''),(35,'æå£«å©·','ericalin98@hotmail.com',1,1,0,'2015-10-31 02:31:07','å°åå¸å¤§å®ååå¹³æ±è·¯2æ®µ118å··4å¼2-2è3æ¨','0987860072','ç¡'),(36,'è¡éºç¾','antelope0420@hotmail.com',1,1,0,'2015-10-31 13:33:13','å²¡å±±åæ½­åºéå´å±±è¥¿å··41è','+886916837297','NO'),(37,'æ¾å¥å¡','eva80318@gmail.com',1,1,0,'2015-10-31 15:11:01','','0912915643',''),(38,'æ½å­å®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:12:19','é«éå¸çå·¢åå®æéå®åè·¯220è','+1 949 351 5807','ç¡'),(39,'æ½å­å®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:13:18','é«éå¸çå·¢åå®æéå®åè·¯220è','+1 949 351 5807','ç¡'),(40,'æ½å­å®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:14:42','é«éå¸çå·¢åå®æéå®åè·¯220è','+1 949 351 5807','No'),(41,'è¨±å¯§å¢','linda51227@hotmail.com',1,1,0,'2015-11-01 02:40:51','æ°åå¸ä¸éåä¸­æ­£åè·¯205å··5è3æ¨','0919-811-946','æä¸åçååå'),(42,'é®çæ','softsheep125@gmail.com',2,1,0,'2015-11-01 02:41:49','é«éå¸çå·¢åå®æ­£è·¯114è','0930012403','æå°éª¯é«çæµ·æ°´éæ'),(43,'è¨±æ¯ç¿','hsuch1130@gmail.com',1,1,0,'2015-11-01 02:41:55','æ°åå¸æ°¸ååè±«æºªè¡217å··29è5æ¨','0922436746','ç¡'),(44,'çæ','greysky09@gmail.com',1,1,0,'2015-11-01 02:47:00','å°åå¸ä¸­æ­£åå¿ å­è¥¿è·¯ä¸æ®µåè12æ¨','0911306501',''),(45,'é³å¨è±ª','eternal511503@yahoo.com.tw',1,1,0,'2015-11-01 02:52:29','å°ä¸­å¸è±ååå¿ å­è¡105å··21è','0930710829','ç¡'),(46,'å¼µå±å¹³','hikaru20012@gmail.com',1,1,0,'2015-11-01 02:55:39','å®è­å¸ç¸£æ¿å«è¡51å··52å¼15è','0972305996',''),(47,'Joseph Laurendi','jlaurendi@gmail.com',1,0,1,'2015-11-01 03:07:14','??','6173088603',''),(48,'???','mimonkey@gmail.com',2,1,0,'2015-11-01 03:10:45','?????????253?2?','0988555123','??');
/*!40000 ALTER TABLE `rsvps` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-31 21:19:13
