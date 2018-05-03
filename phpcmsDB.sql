-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: phpcmsDB
-- ------------------------------------------------------
-- Server version	5.5.55-0+deb8u1

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
-- Table structure for table `about_page`
--

DROP TABLE IF EXISTS `about_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_page` (
  `about_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_page`
--

LOCK TABLES `about_page` WRITE;
/*!40000 ALTER TABLE `about_page` DISABLE KEYS */;
INSERT INTO `about_page` VALUES ('About SiteEntice','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque ultricies urna quis euismod. Mauris volutpat nulla felis. Proin cursus vel nulla vitae facilisis. Duis quis venenatis lorem. Integer lobortis sodales dictum. Cras condimentum libero sem, nec posuere risus ultrices a. Aliquam eu hendrerit enim, sed porttitor tortor. Nunc nec leo id dolor tristique pharetra ut at nunc. Donec vitae mauris nisl. Vivamus dapibus et lacus ac pellentesque. Etiam dolor sapien, volutpat eget leo ut, fringilla sagittis felis. Vestibulum ligula ligula, congue vitae tristique vel, luctus et ex. Vestibulum vehicula felis non orci posuere dictum. Nam massa metus aliquet ac convallis ac, efficit<strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Ullamcorper mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ac libero at nunc sollicitudin egestas. Etiam auctor, nulla et faucibus facilisis, magna ante consectetur est, et bibendum enim neque ac massa. Suspendisse pretium vulputate mollis. Donec ut ullamcorper lacus. Donec a aliquam est. Proin laoreet urna ut ultrices gravida. Fusce at enim eleifend, dignissim nunc id, placerat eros. Sed sed massa in urna imperdiet iaculis. Praesent mauris purus, eleifend ac porta id, feugiat vel lacus. Maecenas vitae neque nec augue accumsan molestie rhoncus quis nulla. Nullam finibus mauris quis metus suscipit, at auctor lorem luctus. Vestibulum pulvinar lacinia rhoncus. Donec condimentum orci sed ex efficitur, at faucibus dui tincidunt. Cras at est nec ligula mattis semper. Curabitur vitae aliquet ante, ultrices sagittis quam. Fusce fringilla ornare ipsum in porta. Nunc sollicitudin odio a dolor consequat accumsan. Praesent condimentum nulla sit amet ligula venenatis gravida. Cras ut dolor in mi vestibulum lacinia. Curabitur nec velit aliquet, efficitur diam volutpat, pellentesque magna. Aenean at ultrices tellus. Cras tortor liber<em>o, porta vel laoreet vel, porta ut nulla. In tempor nisi quis turpis tincidunt mollis. Aenean non lacus vestibulum, auctor ante vitae, lacinia ipsum. Aenean sed est vulputate</em></strong></p>\r\n<p>\\r\\n</p>\r\n<p><em>Ecus augue a, pulvinar dolor. Donec diam lectus, mollis at velit sed, lobortis hendrerit ex. Fusce volutpat, nibh nec laoreet pretium, quam enim consequat nisi, vel pulvinar mi ante ac augue. Curabitur gravida, massa eget commodo auctor, orci dui egestas tellus, ac dictum er</em>at enim eget nulla. Etiam cursus, mi non iaculis laoreet, enim nunc euismod nunc, ac sollicitudin felis libero gravida augue. Nulla pulvinar luctus leo, quis molestie enim venenatis eu. Aliquam vel iaculis quam, tincidunt dapibus ipsum. Phasellus aliquet eros nec quam sodales ornare. Sed convallis, nunc eu feugiat cursus, ex metus elementum nisi, sit amet cursus diam mauris id velit. Aliquam lacinia aliquam lectus vel tempor. Pellentesque lobortis eleifend finibus. Vestibulum non ipsum vel eros pretium lacinia sed a nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque lorem ligula, ullamcorper a arcu ut, egestas accumsan urna. Mauris vel turpis maximus, consectetur nulla sit amet, vehicula nisi. Curabitur id maximus ipsum. Quisque viverra tincidunt diam, malesuada mollis justo sollicitudin a. Duis malesuada feugiat quam cursus dignissim. Suspendisse ac sapien lobortis, consequat nunc sit amet, lacinia lorem. Nunc ut nulla vitae dui feugiat rhoncus id a nunc. Fusce odio ex, dignissim vitae metus quis, efficitur rutrum ex. Mauris eu nunc venenatis, cursus velit nec, pellentesque orci. Suspendisse elementum venenatis velit. Vestibulum maximus, augue vitae sollicitudin volutpat, urna urna vehicula nulla, at auctor nisi ligula quis tortor. Fusce at dignissim ante. Pellentesque lobortis elit hendrerit tempus suscipit. Sed et metus nec odio tempus congue quis eget eros. In arcu ligula, consequat non iaculis eget, malesuada quis velit.</p>\r\n<p>\\r\\n</p>\r\n<p><em>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin leo eros, euismod in justo sed, lacinia accumsan mi. Morbi hendrerit, sapien ac tincidunt ornare, libero ante ultricies arcu, non egestas diam tortor ac nunc. Ut sollicitudin posuere libero, ac pharetra tortor eleifend a. Mauris sollicitudin purus a dolor maximus efficitur. In imperdiet, enim non tincidunt mollis, quam nisi finibus sem, id pretium ipsum ex sed neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque, dolor ut semper venenatis, dolor ante tincidunt ipsum, suscipit facilisis mi libero in libero. Maecenas in consectetur velit, id consectetur orci. Donec eu accumsan leo. Aenean sed eros eleifend erat rhoncus vulputate. Phasellus et lacus nec arcu dictum posuere. Mauris vitae placerat eros, a vehicula felis. Ut sapien leo, dignissim at urna eu, convallis viverra purus. Nulla tellus nisi, ullamcorper non nisl quis, suscipit vehicula lorem. Cras at quam venenatis, molestie metus a, dictum enim. Vivamus augue purus, sodales non dictum sed, porttitor ac odio. Cras imperdiet laoreet viverra. Sed hendrerit mollis facilisis. Nulla et ullamcorper quam. Nunc vel odio et augue gravida sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla lectus turpis, accumsan eu nunc eget, venenatis finibus justo. Morbi vestibulum et odio eget bibendum. Mauris vitae dui interdum tortor varius sodales ut sit amet risus. Nullam vehicula tincidunt urna ut volutpat. Sed convallis pellentesque velit ut porta. Sed sodales ullamcorper ornare. Aliquam fringilla, justo et feugiat vulputate, leo ligula sodales eros, sed molestie nunc felis at eros. Aliquam dapibus lorem id risus vulputate, eget tincidunt sapien gravida. Donec tempus sagittis sem quis ultrices.</em></p>');
/*!40000 ALTER TABLE `about_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) COLLATE ucs2_bin NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2 COLLATE=ucs2_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Bootstrap'),(2,'Javascript');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fp_styles`
--

DROP TABLE IF EXISTS `fp_styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fp_styles` (
  `admin_bar_color` varchar(255) NOT NULL,
  `body_background_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fp_styles`
--

LOCK TABLES `fp_styles` WRITE;
/*!40000 ALTER TABLE `fp_styles` DISABLE KEYS */;
INSERT INTO `fp_styles` VALUES ('#3a4556','#FEFCEC');
/*!40000 ALTER TABLE `fp_styles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE ucs2_bin NOT NULL,
  `post_author` varchar(255) COLLATE ucs2_bin NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text COLLATE ucs2_bin NOT NULL,
  `post_content` text COLLATE ucs2_bin NOT NULL,
  `post_tags` varchar(255) COLLATE ucs2_bin NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) COLLATE ucs2_bin NOT NULL,
  `post_excerpt` text COLLATE ucs2_bin NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2 COLLATE=ucs2_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'FT CMS Project','John Doe','2018-03-25','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.','PHP, CMS, FT, JAVASCRIPT, JAMES',0,'draft','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent...'),(2,2,'Determination of motivation','John Doe','2018-03-24','','Motivation is a multi-level concept. Even the blinking of the brain requires motivation, not to mention the motivation to get involved in semi-annual projects. As the actions are invested in each other, so are the investments and motivations. The motivation to talk with a colleague is invested in the motivation to better understand the task that is invested in the motivation to qualitatively cope with the functional for which you are responsible, which in turn is part of the motivation in time and in due quality to release the product. Lower levels of motivation are necessary for the existence of the upper levels, but the upper levels also support the lower ones. For example, if you love the product, this gives you an extra reason to take care of the quality of the task, even if you do not like it.','PHP, CMS, FT, JAVASCRIPT',0,'draft','Motivation is a multi-level concept. Even the blinking of the brain requires motivation, not to mention the motivation to get involved in semi-annual projects. As the actions are invested in... ');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `verified` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `resettable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `roles_mask` int(10) unsigned NOT NULL DEFAULT '0',
  `registered` int(10) unsigned NOT NULL,
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'dgs@campfirepixels.com','$2y$10$QLffmAgBK7iEQgUfatGDQeUvqIzjTwgYfg8F1QuldyhF/blrBShLa','dgs',0,1,1,1,1520704474,1520945388),(16,'root@devnull.org','$2y$10$DW0DOMt9Kcljy5PB.Mlt6uAukYgz/amAuyIFbdIpZx0ysmOJGoFUC','root',0,1,1,1,1520945164,1520945415);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_confirmations`
--

DROP TABLE IF EXISTS `users_confirmations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_confirmations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `selector` (`selector`),
  KEY `email_expires` (`email`,`expires`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_confirmations`
--

LOCK TABLES `users_confirmations` WRITE;
/*!40000 ALTER TABLE `users_confirmations` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_confirmations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_new`
--

DROP TABLE IF EXISTS `users_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_new` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_new`
--

LOCK TABLES `users_new` WRITE;
/*!40000 ALTER TABLE `users_new` DISABLE KEYS */;
INSERT INTO `users_new` VALUES (1,'rico','123','Rico','Suave','ricosuave123123@gmail.com','','subscriber',''),(10,'mkenney','$2y$12$nVc53bXnEiHNse58Pd1yv.D3Tws/zZox5nD6hmP1VUmml/PPZig66','Michael','Kenney','james@jjedmond.com','','admin',''),(11,'DSSDFASDFASDF','$2y$10$G/ud6RFsOIeghn4qFIOheu06WVc5Bd13YSbTWtu4tJ/ltYok8dcGW','James','Kenney','james@jjedmond.com','','admin',''),(12,'joebill','$1$582Tc9YQ$mUd7Tp8bI63VyZRtbZdrr0','Joe','Bill','joebill@joebill.com','','subscriber',''),(13,'dsmith','$2y$10$bci4G1nyk0mtprej4nBf9eRLq/iTIt2mH7ZB49kDjsxI94TU0Mp1m','Danny','Smith','Danny.Smith@francistuttle.edu','','admin','');
/*!40000 ALTER TABLE `users_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_remembered`
--

DROP TABLE IF EXISTS `users_remembered`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_remembered` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(10) unsigned NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `selector` (`selector`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_remembered`
--

LOCK TABLES `users_remembered` WRITE;
/*!40000 ALTER TABLE `users_remembered` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_remembered` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_resets`
--

DROP TABLE IF EXISTS `users_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_resets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(10) unsigned NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `selector` (`selector`),
  KEY `user_expires` (`user`,`expires`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_resets`
--

LOCK TABLES `users_resets` WRITE;
/*!40000 ALTER TABLE `users_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_throttling`
--

DROP TABLE IF EXISTS `users_throttling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float unsigned NOT NULL,
  `replenished_at` int(10) unsigned NOT NULL,
  `expires_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`bucket`),
  KEY `expires_at` (`expires_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_throttling`
--

LOCK TABLES `users_throttling` WRITE;
/*!40000 ALTER TABLE `users_throttling` DISABLE KEYS */;
INSERT INTO `users_throttling` VALUES ('pdJwH9fiZd1WVgvQdTg5W2qMcBIZQrhvmQzxu6JzbTw',74,1521428307,1521968307),('do_NkDD4Z6Sj6XRUZreYholpK67UBoGndjwnl5gl0gc',49,1520945221,1521017221),('-dDqgPK2QMeFVeBN0xrs-DEcT0aOCLoI3nxczYCLCcA',29,1520737756,1520809756),('Fo7Od8Z4nNhPd1smGYJBMC1LjY-6qi1QYRBHhMLdsRE',29,1520737756,1520809756),('at2zyHvMMQa8Dei0fnYHLJxECaq-qiM2E6EcDvkK8I4',4,1520945164,1521377164),('1zjyBTHsbKG5WBl9JpuBx-gbqd2PLPOILX3jh6oU2II',27.0217,1520738048,1520810048),('1Da6Qt2_lSESiV13mLF2w5ynVQhZ1HQ_5JR7flcLIgU',27.0217,1520738048,1520810048),('V3891s3raRd6tfUtj0PuICf7aoeTpQj6cLTkWkYXNl8',29,1520738659,1520810659),('_KWeGhW4fkngd_c896G3I8qxcglPav1mItgSMK4E0nQ',29,1520738659,1520810659),('Jf3A6RS3RiVouhzk2mMA5YJo0PBvrvbJtTaHInzt760',29,1520945221,1521017221),('Tifhg2wQrCBDF5t6_HvCe4sXvqv8uEZI-Ye1O4FQ1Uo',29,1520945221,1521017221);
/*!40000 ALTER TABLE `users_throttling` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-03 17:46:54
