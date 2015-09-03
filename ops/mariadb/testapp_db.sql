DROP TABLE IF EXISTS `testapp_users`;
CREATE TABLE testapp_users ( user_id int(4) unsigned NOT NULL AUTO_INCREMENT, user_name varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL, PRIMARY KEY (user_id));
LOCK TABLES `testapp_users` WRITE;
INSERT INTO `testapp_users` VALUES ('1','test'),('2','admin');
UNLOCK TABLES;
