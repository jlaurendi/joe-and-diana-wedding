-- MySQL dump 10.13  Distrib 5.5.42-37.1, for Linux (x86_64)
--
-- Host: localhost    Database: fourplat_wedding
-- ------------------------------------------------------
-- Server version	5.5.42-37.1-log

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
INSERT INTO `guestbook` VALUES (8,'蔡鈺羚','antelope0420@hotmail.com','祝你們倆永遠幸福直到天荒地老海枯石爛！！Best Wishes.','2015-10-27 17:34:24','us'),(9,'卓花枝','emi921223@hotmail.com','嗚嗚嗚嗚我會很想妳的親愛的!!!記得一直幸福到永遠喔!!!','2015-10-27 17:35:30','us'),(10,'嘎抓','h801427@gmail.com','祝你們感情永遠新鮮 跟我們的青春一樣！\n希望婚後也能夠有機會在世界的角落跟妳巧遇，然後用超大分貝聊天！\n\n最後我想跟伴娘之一說你好久沒來家聚了（搞錯重點）','2015-10-27 17:38:02','us'),(11,'蔡怡萱','hitiff0429@gmail.com','恭喜你們！！要一直幸福下去喔：））））','2015-10-27 17:39:09','us'),(12,'Alisa Laurendi','mlaurendi@sc.rr.com','Best Wishes to a wonderful couple.  May you both have a life time of adventure and prosperity together.  Love you both!! ','2015-10-27 17:26:53','us'),(15,'菜頭','annabelle0514@hotmail.com','怎麼辦為什麼我不在台灣我想要參加高雄場!!!!!!!!!\n恭喜親愛的烏梅\n雖然不能看到妳穿美美的婚紗\n但相信妳一定會成為最幸福的人妻  : )\n','2015-10-27 23:52:34','us'),(16,'乃文','energyselina@gmail.com','吳梅~恭喜你呀!許久未見你已經要遠赴他鄉了QQ 但一直看著你都是幸福的笑容呢!希望你結婚快樂，也能永保平安幸福!','2015-10-28 00:58:23','us'),(17,'Aunt Lisa','lisanoto@bellsouth.net','So happy for you two!  I can\'t wait to join you in celebrating your commitment to each other!\nLove,\nAunt Lisa\n','2015-10-28 02:09:36','us'),(18,'欣曄','vicki34lin@gmail.com','喜歡你們的網頁!!!\n 一人前端一人後端緊緊相連覺得連做個網頁都好甜蜜噢!! \n(怎麼辦說這種話好像有點太工程師氣息了XD)\n要幸福唷!!!','2015-10-28 04:44:10','us'),(19,'Aunt Grace','gracelani2002@yahoo.com','We are so happy you found each other in this immense world of ours!\nWhat are the mathematical odds of that?\nLooking forward to sharing your special day with you and to welcome Diana into our family.\n\nLove, Uncle Bruce and Aunt Grace','2015-10-28 22:17:28','us'),(20,'張霈萱','peshan0624@gmail.com','要幸福喔~~~~~~~~\n有網站好瞎趴阿!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!','2015-10-29 07:25:25','us'),(21,'Dad (Joseph\'s father) Mike Laurendi','mlaurendi@sc.rr.com','Dear Joseph and Diana,\n祝贺\nZhùhè\n\nCongratulations on finding each other! I am really excited you have taken the next step and I am so happy for you both!\n\nI remember when you two visited your (Joseph\'s) mother and me at our home in Summerville, South Carolina. The feelings I experienced ranged from pride and love and happiness and joy for you.\n\nI wish you a wonderful life together and many successes on your new path together. You are a truly special couple. I was very impressed with you two traveling to meet not only your (Joseph\'s) mother and me, but also my parents, Mary and Joe, your (Joseph\'s) grand-parents, in Florida.\n\nWhat a beautiful wedding announcement guestbook online!\n\nI also wish you minimum stress and lots of strength in the fast times that are so characteristic in the time leading up to weddings!\n\nBelieve in your dreams.\n\nLove,\nDad','2015-10-29 22:13:55','us'),(22,'陳威豪','eternal511503@yahoo.com.tw','看著烏梅這麼開心跟幸福，\n\n雞排覺得真的很高興，\n\n從大一一直以來的朋友要進入下一個階段了，\n\n希望未來一切也順利安好:)','2015-11-01 02:55:01','us');
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
INSERT INTO `rsvps` VALUES (9,'Joseph Laurendi','jlaurendi@gmail.com',1,1,0,'2015-10-26 18:52:40','58 Manchester Road','6173088603','vegan'),(10,'Joseph Laurendi','jlaurendi@gmail.com',1,1,0,'2015-10-26 18:57:04','blah','617','I\'m testing this out!'),(11,'Joseph Laurendi','jlaurendi@gmail.com',2,0,1,'2015-10-27 15:37:56','58 Manchester Road','6173088603',''),(12,'???','emi921223@hotmail.com',2,1,0,'2015-10-27 15:44:44','??????????462?','0973301385','????!!!!'),(13,'??','kelsy.rao@hyatt.com',2,1,0,'2015-10-27 15:45:20','?????????423?2?21?2?','0939537456',''),(14,'???','h801427@gmail.com',2,1,0,'2015-10-27 15:46:29','?????????????','0960298400',''),(15,'Joseph Laurendi','jlaurendi@gmail.com',2,1,0,'2015-10-27 15:59:21','2027 N Prospect Ave, Milwaukee, WI 53202','6173088603',''),(16,'梁阿梁','lsally7911@gmail.com',1,1,0,'2015-10-27 16:46:10','80654-高雄市前鎮區三多二路475巷1弄2-3號','0937003257','素食但請不要把我排去素桌謝謝'),(17,'蔡怡萱','hitiff0429@gmail.com',1,1,0,'2015-10-27 16:48:44','33076 桃園市桃園區永安北路450號四樓之一','0931255429','素食（蛋奶素）'),(18,'鄭閔分','Cmf19910725@hotmail.com',1,1,0,'2015-10-27 16:57:13','台北市信義區吳興街600巷55弄12號4樓','0937315847',''),(19,'æ´ªè““å›','agnes511003@gmail.com',1,1,0,'2015-10-27 17:37:24','å°å—å¸‚é¹½æ°´å€å¤§èŽŠé‡Œ9é„°4ä¹‹6è™Ÿ','0975412629','ç„¡'),(20,'Allen Lin','allenlin24@gmail.com',1,0,1,'2015-10-27 20:58:36','58 Manchester Road, Brookline, MA 02446','5083384728',''),(21,'Jennifer Noto','jennifernoto720@gmail.com',2,0,1,'2015-10-27 22:37:36','7612 Satinwing Lane, Raleigh, NC 27617','17045078251',''),(22,'éƒ­å¿ƒå–»','kuohsinyu0313@gmail.com',1,1,0,'2015-10-28 00:18:57','é«˜é›„å¸‚å·¦ç‡Ÿå€æ–°èŽŠä¸€è·¯151è™Ÿ13æ¨“ä¹‹ä¸€','0933389142',''),(23,'Mr. and Mrs. Joseph F. Laurendi','mlaurendi2007@yahoo.com',2,0,1,'2015-10-28 00:31:03','','352-368-7664','None'),(24,'Lisa Noto','lisanoto@bellsouth.net',1,0,1,'2015-10-28 02:04:42','4920 Glenbrier Dr, Charlotte, NC 28212','704-491-9862',''),(25,'é„­æ·å°¹','sandicheng29@gmail.com',1,1,0,'2015-10-28 02:52:56','','0931763871',''),(26,'è¨±ä¹ƒæ–‡','energyselina@gmail.com',1,1,0,'2015-10-28 03:13:34','234æ–°åŒ—å¸‚æ°¸å’Œå€ä¿å¹³è·¯292å··36å¼„1è™Ÿ5æ¨“','0926726171','no'),(27,'æž—ä½³æ…§','cherishbaby@kimo.com',1,1,0,'2015-10-28 05:13:11','é«˜é›„å¸‚å¤§å¯®å€æœƒçµé‡Œï¼ˆè·¯ï¼‰108è™Ÿ','0963205687',''),(28,'Sameer Deshpande','skdeshpande91@gmail.com',1,0,1,'2015-10-28 13:27:50','23 S. 23rd St, Unit 2F, Philadelphia, PA 19103','2142876040','Vegetarian'),(29,'å³å† è‘¦','sheep80427@hotmail.com',1,1,0,'2015-10-28 13:59:25','é«˜é›„å¸‚é³¥æ¾å€è¯ç¾Žé‡Œä¸­å±±è·¯93å··17è™Ÿ','0912154118',''),(30,'Kelly Laurendi','klaurendi@gmail.com',1,0,1,'2015-10-28 15:19:57','19 Overlook Ridge Terrace, Unit 438, Revere, MA 02151','5089017011','none'),(31,'æŸ¯å®œéŒš','poplisa@livemail.tw',2,1,0,'2015-10-28 15:27:44','é«˜é›„å¸‚ä»æ­¦å€ç£å…§é‡Œä»å…‰è·¯182è™Ÿ','0932505908',''),(32,'é„§æ–‡å¥•','98205072@nccu.edu.tw',1,1,0,'2015-10-29 06:48:39','æ–°åŒ—å¸‚æ¿æ©‹å€è‡ªå¼·æ–°æ‘72è™Ÿ3æ¨“','0988061356','Not too much seafood haha'),(33,'æ¹¯æ™ºéˆž','soup0915@gmail.com',1,1,0,'2015-10-29 13:48:09','é«˜é›„å¸‚æ©‹é ­å€ä»•éš†é‡Œéš†è±è·¯139å··25è™Ÿ','0956111266',''),(34,'å³å† è‘¦','sheep80427@hotmail.com',1,1,0,'2015-10-30 12:40:41','é«˜é›„å¸‚é³¥æ¾å€ä¸­å±±è·¯93å··17è™Ÿ','0912154118',''),(35,'æž—å£«å©·','ericalin98@hotmail.com',1,1,0,'2015-10-31 02:31:07','å°åŒ—å¸‚å¤§å®‰å€å’Œå¹³æ±è·¯2æ®µ118å··4å¼„2-2è™Ÿ3æ¨“','0987860072','ç„¡'),(36,'è”¡éˆºç¾š','antelope0420@hotmail.com',1,1,0,'2015-10-31 13:33:13','å²¡å±±å€æ½­åº•é‡Œå´‘å±±è¥¿å··41è™Ÿ','+886916837297','NO'),(37,'æ›¾å¥•å‡¡','eva80318@gmail.com',1,1,0,'2015-10-31 15:11:01','','0912915643',''),(38,'æ½˜å­Ÿå®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:12:19','é«˜é›„å¸‚ç‡•å·¢å€å®‰æ‹›é‡Œå®‰åŒ—è·¯220è™Ÿ','+1 949 351 5807','ç„¡'),(39,'æ½˜å­Ÿå®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:13:18','é«˜é›„å¸‚ç‡•å·¢å€å®‰æ‹›é‡Œå®‰åŒ—è·¯220è™Ÿ','+1 949 351 5807','ç„¡'),(40,'æ½˜å­Ÿå®£','mpan1218@mit.edu',1,1,0,'2015-11-01 01:14:42','é«˜é›„å¸‚ç‡•å·¢å€å®‰æ‹›é‡Œå®‰åŒ—è·¯220è™Ÿ','+1 949 351 5807','No'),(41,'è¨±å¯§å€¢','linda51227@hotmail.com',1,1,0,'2015-11-01 02:40:51','æ–°åŒ—å¸‚ä¸‰é‡å€ä¸­æ­£åŒ—è·¯205å··5è™Ÿ3æ¨“','0919-811-946','æˆ‘ä¸åƒç‰›å“ˆå“ˆå“ˆ'),(42,'é˜®çŽŸæš','softsheep125@gmail.com',2,1,0,'2015-11-01 02:41:49','é«˜é›„å¸‚ç‡•å·¢å€å®‰æ­£è·¯114è™Ÿ','0930012403','æˆ‘å°éª¯é«’çš„æµ·æ°´éŽæ•'),(43,'è¨±æ™¯ç¿”','hsuch1130@gmail.com',1,1,0,'2015-11-01 02:41:55','æ–°åŒ—å¸‚æ°¸å’Œå€è±«æºªè¡—217å··29è™Ÿ5æ¨“','0922436746','ç„¡'),(44,'çŽ‹æ˜•','greysky09@gmail.com',1,1,0,'2015-11-01 02:47:00','å°åŒ—å¸‚ä¸­æ­£å€å¿ å­è¥¿è·¯ä¸€æ®µå››è™Ÿ12æ¨“','0911306501',''),(45,'é™³å¨è±ª','eternal511503@yahoo.com.tw',1,1,0,'2015-11-01 02:52:29','å°ä¸­å¸‚è±åŽŸå€å¿ å­è¡—105å··21è™Ÿ','0930710829','ç„¡'),(46,'å¼µå‡±å¹³','hikaru20012@gmail.com',1,1,0,'2015-11-01 02:55:39','å®œè˜­å¸‚ç¸£æ”¿å…«è¡—51å··52å¼„15è™Ÿ','0972305996',''),(47,'Joseph Laurendi','jlaurendi@gmail.com',1,0,1,'2015-11-01 03:07:14','台灣','6173088603',''),(48,'楊仕丞','mimonkey@gmail.com',2,1,0,'2015-11-01 03:10:45','台北市中山區農安街253號2樓','0988555123','海鮮');
/*!40000 ALTER TABLE `rsvps` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-31 21:16:39
