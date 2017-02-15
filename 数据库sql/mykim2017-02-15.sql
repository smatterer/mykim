/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : mykim

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-02-15 21:37:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1486418182');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1486418190');

-- ----------------------------
-- Table structure for my_user
-- ----------------------------
DROP TABLE IF EXISTS `my_user`;
CREATE TABLE `my_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of my_user
-- ----------------------------
INSERT INTO `my_user` VALUES ('1', 'admin', 'FAYJAfH-TEVOsR1JPcSGJoEpWaalg1Wv', '$2y$13$J4KBKcBbhb/48TemuSnSOOxOI8rPPues.aalsEydcK4jLr/AwyNei', null, '111@qq.com', '10', '1486421532', '1486421532');
