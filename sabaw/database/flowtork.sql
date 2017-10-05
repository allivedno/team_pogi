/*
SQLyog Community v12.2.0 (64 bit)
MySQL - 10.1.19-MariaDB : Database - flowtork
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`flowtork` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `flowtork`;

/*Table structure for table `admin_account` */

DROP TABLE IF EXISTS `admin_account`;

CREATE TABLE `admin_account` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `is_login` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact_no` varchar(255) DEFAULT NULL,
  `user_type_id` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_account` */

insert  into `admin_account`(`id`,`email`,`password`,`full_name`,`is_login`,`is_active`,`is_deleted`,`last_activity`,`contact_no`,`user_type_id`) values 
(1,'cjayconocono','¿ÁA—:•§§–‹\Z8ºeVó;­Xle©Þ','cjay conocono',0,0,0,'2017-09-14 14:52:36','1234',1);

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_pic` varchar(255) DEFAULT NULL,
  `brand_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `brand` */

insert  into `brand`(`brand_id`,`brand_name`,`brand_pic`,`brand_desc`) values 
(1,'KMP','imahe/P .jpeg','HALO'),
(2,'PMENT','imahe/P PMENT1.jpeg','DORPERM'),
(3,'KMS','imahe/P KMS2.jpeg','CPE'),
(4,'Backdoor','imahe/P Backdoor3.jpeg','asd'),
(5,'VEctor','imahe/P VEctor4.jpeg','3456789012e1dandnajsnkabsda'),
(6,'sous','imahe/P sous5.jpeg','23456718293qdas mcz '),
(7,'Pambihira','imahe/P Pambihira6.jpeg','gandaganda mo :D'),
(8,'Practice','imahe/P Pambihira6.jpeg','sodaasocasci'),
(9,'test','imahe/P test8.jpeg','test'),
(10,'','',''),
(11,'','','');

/*Table structure for table `detail` */

DROP TABLE IF EXISTS `detail`;

CREATE TABLE `detail` (
  `detail_id` int(100) NOT NULL AUTO_INCREMENT,
  `detail_desc` varchar(255) DEFAULT NULL,
  `detail_spec` varchar(255) DEFAULT NULL,
  `part_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `FK_detail` (`part_id`),
  CONSTRAINT `FK_detail` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail` */

/*Table structure for table `part` */

DROP TABLE IF EXISTS `part`;

CREATE TABLE `part` (
  `part_id` int(100) NOT NULL AUTO_INCREMENT,
  `part_name` varchar(255) DEFAULT NULL,
  `part_pic` varchar(255) DEFAULT NULL,
  `part_price` int(100) DEFAULT NULL,
  `brand_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`part_id`),
  KEY `FK_part` (`brand_id`),
  CONSTRAINT `FK_part` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `part` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type_id` bigint(20) NOT NULL DEFAULT '1',
  `password_question` varchar(255) NOT NULL,
  `password_answer` varchar(255) NOT NULL,
  `is_login` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `full_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`user_type_id`,`password_question`,`password_answer`,`is_login`,`is_active`,`is_deleted`,`last_activity`,`full_name`,`contact_no`,`email_code`) values 
(23,'cjayconocono@gmail.com','Ñ9ry yù?',1,'What is your Dream job?','wew',0,0,0,'2017-09-14 14:52:22','wew','12345678901',''),
(24,'ccjayconocono@yahoo.com','¿ÁA—:•§§–‹\Z8ºeVó;­Xle©Þ',1,'Who was your first crush?','wew',0,0,0,'2017-09-14 12:24:06','test','asa','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
