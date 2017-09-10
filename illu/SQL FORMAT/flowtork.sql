/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.42-community : Database - flowtork
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

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_pic` varchar(255) DEFAULT NULL,
  `brand_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `brand` */

insert  into `brand`(`brand_id`,`brand_name`,`brand_pic`,`brand_desc`) values (1,'Arnold Staroesdeseou','imahe/1.jpeg','1234567890-6578234567890eqesgfbvcthujkmsdvcsvccxv'),(2,'FUGIDENSO KAUPSUCEDS DERSCO','imahe/2.jpeg','asascacavadgagdasdasgadgagda');

/*Table structure for table `counter` */

DROP TABLE IF EXISTS `counter`;

CREATE TABLE `counter` (
  `count_id` int(100) NOT NULL AUTO_INCREMENT,
  `filler` int(100) DEFAULT NULL,
  PRIMARY KEY (`count_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `counter` */

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
