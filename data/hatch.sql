/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `sd_adm_menu` */

DROP TABLE IF EXISTS `sd_adm_menu`;

CREATE TABLE `sd_adm_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `menu_name` varchar(255) NOT NULL COMMENT '菜单',
  `menu_url` varchar(255) NOT NULL COMMENT '路径',
  `parent_id` int(10) DEFAULT NULL COMMENT '父id',
  `menu_type` enum('1','2') NOT NULL DEFAULT '1' COMMENT '类型 1.菜单  2.操作',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sd_adm_menu` */

/*Table structure for table `sd_home_menu` */

DROP TABLE IF EXISTS `sd_home_menu`;

CREATE TABLE `sd_home_menu` (
  `henu_id` int(10) NOT NULL AUTO_INCREMENT,
  `henu_parentid` int(10) DEFAULT '0' COMMENT '父id',
  `henu_name` varchar(255) DEFAULT NULL COMMENT '菜单名',
  `henu_url` varchar(255) DEFAULT NULL COMMENT '路径',
  PRIMARY KEY (`henu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sd_home_menu` */

/*Table structure for table `sd_role` */

DROP TABLE IF EXISTS `sd_role`;

CREATE TABLE `sd_role` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL COMMENT '角色信息',
  `role` text COMMENT '权限',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sd_role` */

insert  into `sd_role`(`role_id`,`role_name`,`role`) values (1,'',NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sd_user` */

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
