INSERT INTO `fdbc58_setting` VALUES ('mobile_host_type', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_host', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_username', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_pwd', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_signature', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_key', '');
INSERT INTO `fdbc58_setting` VALUES ('mobile_memo', '');
ALTER TABLE `fdbc58_store` ADD `store_free_time` varchar(10) DEFAULT NULL DEFAULT '2' COMMENT '商家配送时间';