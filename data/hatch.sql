/*
SQLyog v10.2 
MySQL - 5.5.53 : Database - hatch
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hatch` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hatch`;

/*Table structure for table `sd_adm` */

DROP TABLE IF EXISTS `sd_adm`;

CREATE TABLE `sd_adm` (
  `adm_id` int(10) NOT NULL AUTO_INCREMENT,
  `adm_user` varchar(255) NOT NULL COMMENT '用户名',
  `adm_pwd` varchar(255) NOT NULL COMMENT '密码',
  `adm_role` int(10) NOT NULL COMMENT '角色',
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sd_adm` */

insert  into `sd_adm`(`adm_id`,`adm_user`,`adm_pwd`,`adm_role`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3',1);

/*Table structure for table `sd_adm_menu` */

DROP TABLE IF EXISTS `sd_adm_menu`;

CREATE TABLE `sd_adm_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `menu_name` varchar(255) NOT NULL COMMENT '菜单',
  `menu_url` varchar(255) NOT NULL COMMENT '路径',
  `parent_id` int(10) DEFAULT NULL COMMENT '父id',
  `menu_lv` int(10) NOT NULL DEFAULT '1' COMMENT '菜单级',
  `menu_type` enum('1','2') NOT NULL DEFAULT '1' COMMENT '类型 1跳转页 2分类',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

/*Data for the table `sd_adm_menu` */

insert  into `sd_adm_menu`(`menu_id`,`menu_name`,`menu_url`,`parent_id`,`menu_lv`,`menu_type`) values (1,'创业孵化平台','Index/index',0,1,'1'),(2,'信息发布','Publish/Index',0,1,'2'),(3,'内容管理','Content/Index',0,1,'2'),(4,'信息审核','Audit/Index',0,1,'2'),(5,'业务处理','Business/Index',0,1,'2'),(6,'用户管理','User/Index',0,1,'2'),(7,'系统设置','Setting/Index',0,1,'2'),(8,'新闻发布','Publish/new',2,2,'2'),(9,'活动发布','Publish/activity',2,2,'1'),(10,'公开平台发布','Publish/terrace',2,2,'2'),(11,'项目发布','Publish/project',2,2,'1'),(12,'创业辅导','Publish/coach',2,2,'2'),(13,'创业课程','Publish/course',12,3,'1'),(14,'专题讲座','Publish/chair',12,3,'1'),(15,'导师推荐','Publish/recommed',12,3,'1'),(16,'创业教育','Publish/education',12,3,'1'),(17,'直播辅导','Publish/live',12,3,'1'),(18,'创业测试','Publish/test',12,3,'1'),(19,'新闻管理','Content/new',3,2,'2'),(20,'通知公告','Content/notice',19,3,'1'),(21,'企业新闻','Content/enterprise',19,3,'1'),(22,'申报快讯','Content/falsh',19,3,'1'),(23,'媒体报道','Content/media',19,3,'1'),(24,'通知公告','Publish/notice',8,3,'1'),(25,'企业新闻','Publish/enterprise',8,3,'1'),(26,'申报快讯','Publish/falsh',8,3,'1'),(27,'媒体报道','Publish/media',8,3,'1'),(28,'活动管理','Content/activity',3,2,'1'),(29,'公开平台管理','Content/terrace',3,2,'2'),(30,'技术研发','Content/science',29,3,'1'),(31,'生活服务','Content/serve',29,3,'1'),(32,'共享空间','Content/space',29,3,'1'),(33,'政策法规','Content/policy',29,3,'1'),(34,'科技支撑','Content/support',29,3,'1'),(35,'技术研发','Publish/science',10,3,'1'),(36,'生活服务','Publish/serve',10,3,'1'),(37,'共享空间','Publish/space',10,3,'1'),(38,'政策法规','Publish/policy',10,3,'1'),(39,'科技支撑','Publish/support',10,3,'1'),(40,'项目管理','Content/project',3,2,'1'),(41,'创业辅导','Content/coach',3,2,'2'),(42,'创业课程','Content/course',41,3,'1'),(43,'专题讲座','Content/chair',41,3,'1'),(44,'创业教育','Content/recommed',41,3,'1'),(45,'直播辅导','Content/live',41,3,'1'),(46,'创业测试','Content/test',41,3,'1'),(47,'活动审核','Audit/activity',4,2,'1'),(48,'个人信息审核','Audit/person',4,2,'1'),(49,'企业信息审核','Audit/company',4,2,'1'),(50,'会面预约','Audit/face',4,2,'1'),(51,'入驻管理','Business/enter',5,2,'1'),(52,'物业管理','Business/property',5,2,'1'),(53,'统计管理','Business/statistics',5,2,'1'),(54,'服务管理','Business/serve',5,2,'2'),(55,'风险评估','Business/risk',54,3,'1'),(56,'创业知道','Business/guidance',54,3,'1'),(57,'跟踪扶持','Business/tail',54,3,'1'),(58,'创业导师','Business/teach',5,2,'1'),(59,'导师管理','User/teach',6,2,'1'),(60,'个人用户','User/user',6,2,'1'),(61,'企业用户','User/company',6,2,'1'),(62,'角色管理','Setting/role',7,2,'1'),(63,'用户管理','Setting/adm',7,2,'1');

/*Table structure for table `sd_home_menu` */

DROP TABLE IF EXISTS `sd_home_menu`;

CREATE TABLE `sd_home_menu` (
  `henu_id` int(10) NOT NULL AUTO_INCREMENT,
  `henu_parentid` int(10) DEFAULT '0' COMMENT '父id',
  `henu_name` varchar(255) DEFAULT NULL COMMENT '菜单名',
  `henu_url` varchar(255) DEFAULT NULL COMMENT '路径',
  PRIMARY KEY (`henu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `sd_home_menu` */

insert  into `sd_home_menu`(`henu_id`,`henu_parentid`,`henu_name`,`henu_url`) values (1,0,'咨询中心',NULL),(2,0,'创业服务',NULL),(3,0,'创业辅导',NULL),(4,0,'孵化空间',NULL),(5,0,'创业中心',NULL),(6,2,'项目推荐',NULL),(7,2,'风险评估',NULL),(8,2,'创业指导',NULL),(9,2,'跟踪扶持',NULL),(10,5,'入驻服务',NULL),(11,5,'团队认证',NULL),(12,5,'企业认证',NULL),(13,5,'创客交流',NULL),(14,3,'创业课程',NULL),(15,3,'专题讲座',NULL),(16,3,'导师推荐',NULL),(17,3,'会面预约',NULL),(18,3,'创业教育',NULL),(19,3,'直播辅导',NULL),(20,3,'创业测试',NULL),(21,1,'新闻中心',NULL),(22,1,'活动中心',NULL),(23,4,'基本信息',NULL),(24,4,'政策介绍',NULL),(25,4,'入孵流程',NULL),(26,4,'在线入孵',NULL);

/*Table structure for table `sd_role` */

DROP TABLE IF EXISTS `sd_role`;

CREATE TABLE `sd_role` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL COMMENT '角色信息',
  `role` text COMMENT '权限',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `sd_role` */

insert  into `sd_role`(`role_id`,`role_name`,`role`) values (1,'超级管理员','*'),(2,'审核员','4,47,48,49,50'),(3,'发布员',NULL);

/*Table structure for table `sd_user` */

DROP TABLE IF EXISTS `sd_user`;

CREATE TABLE `sd_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `user_pwd` varchar(255) NOT NULL COMMENT '密码',
  `user_role` int(10) NOT NULL COMMENT '角色',
  `user_state` enum('1','2','3','4') NOT NULL COMMENT '状态 1 未审核  2.待审核 3.审核失败 4.已审核',
  `last_ip` varchar(255) DEFAULT NULL COMMENT '上次登录ip',
  `last_time` date DEFAULT NULL COMMENT '上次登录时间',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `sd_user` */

insert  into `sd_user`(`user_id`,`user_name`,`user_pwd`,`user_role`,`user_state`,`last_ip`,`last_time`) values (1,'user','202cb962ac59075b964b07152d234b70',1,'1','::1','2017-10-18'),(2,'admin','202cb962ac59075b964b07152d234b70',1,'1','::1','2017-10-19');

/*Table structure for table `sd_user_estp` */

DROP TABLE IF EXISTS `sd_user_estp`;

CREATE TABLE `sd_user_estp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `company` varchar(255) DEFAULT NULL COMMENT '公司',
  `company_card` varchar(255) DEFAULT NULL COMMENT '机构代码',
  `legal person` varchar(255) DEFAULT NULL COMMENT '法人代表',
  `founding_time` date DEFAULT NULL COMMENT '公司成立时间',
  `registered_fund` int(20) DEFAULT NULL COMMENT '注册资金',
  `nature_of_unit` varchar(255) DEFAULT NULL COMMENT '单位性质',
  `institutional` varchar(255) DEFAULT NULL COMMENT '机构类型',
  `work_tel` varchar(255) DEFAULT NULL COMMENT '办公电话',
  `department` varchar(255) DEFAULT NULL COMMENT '联系部门',
  `contacts` varchar(255) DEFAULT NULL COMMENT '联系人',
  `contacts_tel` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `contents_email` varchar(255) DEFAULT NULL COMMENT '联系邮箱',
  `company_add` varchar(255) DEFAULT NULL COMMENT '办公地址',
  `company_intro` text COMMENT '公司简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sd_user_estp` */

/*Table structure for table `sd_user_info` */

DROP TABLE IF EXISTS `sd_user_info`;

CREATE TABLE `sd_user_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `sex` enum('1','2') DEFAULT NULL COMMENT '性别 1 男  2 女',
  `card_no` varchar(255) DEFAULT NULL COMMENT '身份证号',
  `add` varchar(255) DEFAULT NULL COMMENT '地址',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `card1` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `card2` varchar(255) DEFAULT NULL COMMENT '身份证反面',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sd_user_info` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
