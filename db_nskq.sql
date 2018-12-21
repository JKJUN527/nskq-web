/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost
 Source Database       : db_nskq

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : utf-8

 Date: 12/20/2018 20:38:41 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `db_admin`
-- ----------------------------
DROP TABLE IF EXISTS `db_admin`;
CREATE TABLE `db_admin` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `db_admin`
-- ----------------------------
BEGIN;
INSERT INTO `db_admin` VALUES ('1', '1', 'admin', '$2y$10$Mk4BtG4FAbEdkDxwqFkEhOTLzMHLNzi/Cmg.hzhWR8INm8JWxBEgq', '0', '2018-03-20 20:55:22', '2018-12-20 18:43:43', '2018-12-20 18:43:43'), ('3', '0', 'jkjun', '$2y$10$VvrQ2rC67AOVvs6Sr6sWeuSdF0gyBQa/v1mFv8sVFYfsMzpQ/hZ12', '0', '2018-03-20 21:42:23', '2018-03-21 13:35:27', '2018-03-21 13:35:27');
COMMIT;

-- ----------------------------
--  Table structure for `db_culture`
-- ----------------------------
DROP TABLE IF EXISTS `db_culture`;
CREATE TABLE `db_culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '企业文化展示--首页轮播图',
  `type` tinyint(4) DEFAULT '0' COMMENT '0 企业文化照片 1 首页轮播图',
  `title` varchar(255) DEFAULT NULL COMMENT '主标题',
  `sub_title` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `db_culture`
-- ----------------------------
BEGIN;
INSERT INTO `db_culture` VALUES ('2', '0', '公司前台', null, null, 'http://localhost:8000/storage/adpic/2018-12-20-17-25-02-5c1b5fee71510adpic.jpg', '2018-12-20 17:25:02', '2018-12-20 17:25:02'), ('3', '0', '办公区', null, null, 'http://localhost:8000/storage/adpic/2018-12-20-17-25-35-5c1b600f82f5eadpic.jpg', '2018-12-20 17:25:35', '2018-12-20 17:25:35'), ('4', '0', '会议室', null, null, 'http://localhost:8000/storage/adpic/2018-12-20-17-25-56-5c1b6024cda3dadpic.jpg', '2018-12-20 17:25:56', '2018-12-20 17:25:56'), ('5', '0', '职工餐厅', null, null, 'http://localhost:8000/storage/adpic/2018-12-20-17-26-16-5c1b6038733f6adpic.jpg', '2018-12-20 17:26:16', '2018-12-20 17:26:16'), ('7', '1', '标题1', '副标题1', '简介简介简介1', 'http://localhost:8000/storage/adpic/2018-12-20-18-51-59-5c1b744fde440adpic.jpg', '2018-12-20 18:51:59', '2018-12-20 18:51:59'), ('8', '1', '标题2', '副标题2', '简介简介简介2', 'http://localhost:8000/storage/adpic/2018-12-20-18-52-28-5c1b746c50a12adpic.jpg', '2018-12-20 18:52:28', '2018-12-20 18:52:28');
COMMIT;

-- ----------------------------
--  Table structure for `db_message`
-- ----------------------------
DROP TABLE IF EXISTS `db_message`;
CREATE TABLE `db_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言表',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `db_message`
-- ----------------------------
BEGIN;
INSERT INTO `db_message` VALUES ('2', '主页用户', '我有合作意向，请尽快与我联系', '631642753@qq.com', null, '2018-12-20 15:39:28', '2018-12-20 15:39:28'), ('3', 'jkjun', 'fdfsfdsfsfd', '1234@qq.com', null, '2018-12-20 19:39:23', '2018-12-20 19:39:23');
COMMIT;

-- ----------------------------
--  Table structure for `db_news`
-- ----------------------------
DROP TABLE IF EXISTS `db_news`;
CREATE TABLE `db_news` (
  `nid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '新闻标题',
  `quote` varchar(255) DEFAULT NULL COMMENT '引用出处',
  `content` longtext COMMENT '内容',
  `picture` varchar(255) DEFAULT NULL COMMENT '图片',
  `tag` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '类型',
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `db_product`
-- ----------------------------
DROP TABLE IF EXISTS `db_product`;
CREATE TABLE `db_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL COMMENT '产品类别',
  `name` varchar(200) DEFAULT NULL COMMENT '产品名称',
  `image` varchar(500) DEFAULT NULL COMMENT '描述图片',
  `model` varchar(100) DEFAULT NULL COMMENT '规格',
  `main_introduce` varchar(500) DEFAULT NULL COMMENT '主要介绍',
  `sub_introduce` varchar(1000) DEFAULT NULL COMMENT '包装',
  `is_urgency` int(1) unsigned DEFAULT '0' COMMENT '是否是优势产品 0 不是 1 是',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `db_product`
-- ----------------------------
BEGIN;
INSERT INTO `db_product` VALUES ('2', '9', '欧美电水壶', 'http://localhost:8000/storage/products/2018-12-20-13-59-56-5c1b2fdc97630product.jpg', null, '产品介绍', null, '1', '2018-12-20 13:59:56', '2018-12-20 14:40:55'), ('3', '10', '产品2', 'http://localhost:8000/storage/products/2018-12-20-14-42-50-5c1b39ea2b3faproduct.jpg', null, 'fads&nbsp;发送到发送到发大水范德萨发生大幅度撒<br>发送到发送范德萨发生的', null, '1', '2018-12-20 14:42:50', '2018-12-20 14:43:26'), ('4', '11', '产品4', 'http://localhost:8000/storage/products/2018-12-20-14-43-22-5c1b3a0a27213product.jpg', '123', '饭撒范德萨范德萨范德萨范德萨发撒', null, '1', '2018-12-20 14:43:22', '2018-12-20 20:07:30');
COMMIT;

-- ----------------------------
--  Table structure for `db_product_type`
-- ----------------------------
DROP TABLE IF EXISTS `db_product_type`;
CREATE TABLE `db_product_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '产品类别——中文名称',
  `describe` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `db_product_type`
-- ----------------------------
BEGIN;
INSERT INTO `db_product_type` VALUES ('9', '欧美风电水壶', '描述描述', '2018-12-15 14:31:44', '2018-12-15 14:31:44'), ('10', 'nini', 'fjdsjfdsf', '2018-12-15 14:56:41', '2018-12-15 14:56:41'), ('11', '分类3', null, '2018-12-20 14:42:05', '2018-12-20 14:42:05'), ('12', '分类4', null, '2018-12-20 14:42:14', '2018-12-20 14:42:14');
COMMIT;

-- ----------------------------
--  Table structure for `db_webinfo`
-- ----------------------------
DROP TABLE IF EXISTS `db_webinfo`;
CREATE TABLE `db_webinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(200) DEFAULT NULL COMMENT '电话',
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL COMMENT '邮箱',
  `address_en` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL COMMENT '地址',
  `postcodes` varchar(100) DEFAULT NULL COMMENT '邮编',
  `brief` varchar(1000) DEFAULT NULL COMMENT '企业简介',
  `describe` longtext COMMENT '企业详情介绍描述',
  `describe_en` longtext COMMENT '英文描述',
  `picture` varchar(1000) DEFAULT NULL COMMENT '企业展示图片',
  `carousel` varchar(1000) DEFAULT NULL COMMENT '首页轮播图',
  `shopNum` int(11) DEFAULT NULL,
  `dailyTurnover` int(11) DEFAULT NULL COMMENT '日成交量',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `productsClass` int(11) DEFAULT NULL COMMENT '产品种类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `db_webinfo`
-- ----------------------------
BEGIN;
INSERT INTO `db_webinfo` VALUES ('1', '13738713800', '0577-88620778', '280722223@qq.com', 'A504，Wenzhou Jinhai chemical market，No. 422, No. twenty-five Binhai Road,Wenzhou economic and Technological Development Zone,Wenzhou，China.', '温州经济技术开发区滨海二十五路422号A504号', '325000', '没有完美的个人，只有完美的团队。', '温州市顺泰化工有限公司成立于2003年。历经十多年的经营与开拓，顺泰化工现已发展成为知名的化工产品生产、销售、仓储、物流业务于一体的综合性现代化工公司。公司拥有一支年轻活力、具有国际化和前瞻性视野的高素质员工团队，80%以上具有本科及以上学历。公司在发展现有业务的同时，积极开拓绿色经济、新能源、精细化工等新兴领域，并致力“一带一路”、“中国 制造2025”、“互联网+传统产业”、“工业4.0”等新趋势，从而为供应商和客户提供更优质的服务和专业支持。我们将坚守“诚信为本，厚德载物”的企业核心价值观，秉承“创业与创新是顺泰的基因”的企业精神， 致力于成为工业化工的优质供应商，以认真负责、勇于拼搏的 经营团队，期待为您提供专业、优质、高效的服务。', 'Wenzhou Shuntai Chemical Co., Ltd. was founded in 2003. Having been operating and developing for over 10 years, Shuntai has grown into a renowned conglomerate that integrates chemicals trade and storage operations in East China and Yangtze River Delta in particular. Our workforce is young and energetic with international visions and high professionalism, over 80% of it hold an undergraduate or above degree. Building upon current operations, the Company is also actively pushing into emerging areas of green economy, new energy and fine chemicals, and committed to new trends of the Belt and Road Initiative, Made in China 2025, Internet + Traditional Industries, and Industry 4.0, to provide quality service and support to vendors and clients. We uphold the core value of honesty and moral integrity, and the corporate ethos of entrepreneurship and innovation, in devoting ourselves to become a trustworthy supplier of industrial chemicals. Our team is dedicated, brave and professional, looking forward to providing professional, quality and efficient service to you.', '', null, '54', '10000', '2018-03-20 20:49:03', '2018-12-20 14:20:28', '500');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
