/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.22-MariaDB : Database - flowtork
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
  `is_deactivate` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact_no` varchar(255) DEFAULT NULL,
  `user_type_id` bigint(20) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `admin_account` */

insert  into `admin_account`(`id`,`email`,`password`,`full_name`,`is_login`,`is_deactivate`,`is_deleted`,`last_activity`,`contact_no`,`user_type_id`,`picture`) values 
(1,'cjayconocono','cjay','cjay conocono',0,0,0,'2017-10-08 10:04:59','1234',1,NULL),
(2,'test','123456','',0,0,0,'2017-10-08 07:24:39','123',NULL,''),
(3,'ww','123456','',0,0,0,'2017-10-08 07:42:48','123',NULL,'adminpic/image/jpeg'),
(4,'test','123456','',0,0,0,'2017-10-08 07:52:20','12345678901',NULL,'adminpic/P test3.jpeg'),
(5,'cjay','123456','Cjay Conocono',0,0,0,'2017-10-08 09:01:38','09275649386',NULL,'adminpic/P cjay4.jpeg'),
(6,'test','123456','',0,0,0,'2017-10-08 07:54:48','test',NULL,'adminpic/P test5.jpeg'),
(7,'cjayconocono2','123456','test',0,0,0,'2017-10-08 08:32:01','test',NULL,'adminpic/P test6.jpeg'),
(8,'123','123456','123',0,1,0,'2017-10-08 09:23:38','123',NULL,'adminpic/P 1237.jpeg'),
(10,'test 4','123456','test 4',0,0,0,'2017-10-08 10:00:53','test',NULL,'adminpic/P test 48.jpeg');

/*Table structure for table `assign` */

DROP TABLE IF EXISTS `assign`;

CREATE TABLE `assign` (
  `assign_id` int(100) NOT NULL AUTO_INCREMENT,
  `category_id` int(100) DEFAULT NULL,
  `brand_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`assign_id`),
  KEY `FK_assign` (`brand_id`),
  KEY `FK_assign2` (`category_id`),
  CONSTRAINT `FK_assign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  CONSTRAINT `FK_assign2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `assign` */

insert  into `assign`(`assign_id`,`category_id`,`brand_id`) values 
(1,1,1),
(2,2,1),
(3,3,1),
(4,1,2),
(6,1,3),
(7,4,3),
(8,5,4),
(9,6,4),
(10,7,4),
(11,8,4),
(12,9,4),
(13,10,5),
(14,11,6),
(15,12,6),
(16,13,7),
(17,14,8),
(18,15,9),
(19,16,10);

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_pic` varchar(255) DEFAULT NULL,
  `brand_desc` text,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `brand` */

insert  into `brand`(`brand_id`,`brand_name`,`brand_pic`,`brand_desc`) values 
(1,'AUMA','imahe/P AUMA.jpeg','Armaturen- Und Maschinen-Antriebe (Valve- and Machine Actuators). AUMA is the worldÂ´s leading manufacturer in valve actuator technology. AUMA have been developing and building electric actuators and valve gearboxes for more than 45 years and is one of the leading manufacturers in the industry. Energy sector, water industry, petro-chemical industry and users from the most diverse industries word wide relies on technologically sophisticated products by AUMA.'),
(2,'SIPOS Aktorik','imahe/P SIPOS Aktorik1.jpeg','SIPOS Aktorik GmbH has been independently active in the market since 1999. Arising from Siemens actuator division, SIPOS is the only one of the worldwide leading actuator manufacturers have access to 100 years of experience in this field. Holistic product know-how, from planning, solution development and commissioning up to service.'),
(3,'DREHMO','imahe/P DREHMO2.jpeg','Wherever material flows through pipelines in liquid, gas or powder form several kinds of valves are used to shut off or to regulate the rate of flow or pressure. For reliable remote operation of these valves, whether they be globe, gate, ball or butterfly valves or damper, DREHMO electromechanical actuators have been employed successfully over the world for several decades.'),
(4,'GE Measurement & Control','imahe/P GE Measurement & Control3.jpeg','GE Measurement & Control is a leading innovator in sensor-based measurement, inspection, asset condition monitoring, controls, and radiation measurement solutions that deliver accuracy, productivity and safety to customers in a wide range of industries, including oil & gas, power generation, aerospace, transportation and healthcare.'),
(5,'EKATO','imahe/P EKATO4.jpeg','Manufacturer of customized industrial agitators, complete plants and seals for the process industry such as Chemicals, plastics and polymers, pharmaceuticals, biotechnology, paints and coatings, flue gas desulfurization for power stations, hydrometallurgy, cosmetics and food. Member companies: EKATO RÃ¼hr- und Mischtechnik GmbH (large agitators for complex mixing processes) ; FLUID Misch- und Dispergiertechnik GmbH (modular industrial agitators); EKATO SYSTEMS GmbH (systems for blending, homogenizing and drying solid and semi-solid products, as well as high-quality mechanical seals and supply system)'),
(6,'FMC Technologies','imahe/P FMC Technologies5.jpeg','FMC Technologies, Inc., is a leading global provider of technology solutions for the energy industry. Named by FORTUNE Magazine as the Worlds Most Admired Oil and Gas Equipment, Service Company in 2012. FMC Technologies designs, manufactures and services technologically sophisticated systems and products such as subsea production and processing systems, surface wellhead systems, high pressure fluid control equipment, measurement solutions, and marine loading systems for the oil and gas industry.'),
(7,'PENTAIR','imahe/P PENTAIR6.jpeg','PENTAIR invents and manufactures solutions that address some of the worldâ€™s toughest challenges, with over 75 percent of our products, services and technologies related to food, water or energy. Collaborating with industrial partners, government, non-governmental organizations, and other companies, we serve a wide variety of customers in the food and beverage, residential and commercial, industrial, infrastructure, and energy verticals.'),
(8,'MERRICK Industries','imahe/P MERRICK Industries7.jpeg','MERRICK Industries, Inc. - industry-leader in technology which has experience and expertise in designing and manufacturing of high quality material handling products that are reliable, provide repeatable results, and are extremely accurate. Serving the belt scale and feeder industry since 1908 and as the inventor of dynamic weighing and weigh feeding system. At MERRICK, a wide selection of quality weighing systems allows them to handle a variety of dry bulk materials and applications ranging from cement to food products, power generation, mining, pharmaceuticals, steel, plastics, paper, chemicals, building materials, and even wastewater treatment.'),
(9,'KOSO','imahe/P KOSO8.jpeg','KOSO group has developed a diverse range of high-quality control valves greatly contributing to the implementation of process automation (PA) in various industries. KOSO is able to offer a complete line of automation systems, including sensors, controllers, and computers. Koso is the only valve supplier that does everything - manufacturing of disk stacks including EDM, laser cutting of disks & vacuum brazing of disk stack. Vectorâ„¢ disks of all available materials are precision manufactured with state of- the-art laser cutting technology.'),
(10,'Posiwell','imahe/P Posiwell9.jpeg','Posiwell is a joint development between : Trisome Technical Services & Supply Ptle Ltd and Valwell Development Enterprise Co; Ltd. Posiwell is designed for low maintenance and in-line repair requiring minimal parts. It is a user friendly product and yet functional without compromising Quality & Performance. Posiwell always provide solutions to meet and (or) exceed Customerâ€™s expectations.');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category_name`) values 
(1,'ELECTRIC ACTUATORS'),
(2,'INTEGRAL CONTROLLERS'),
(3,'VALVE GEARBOXES'),
(4,'GEAR BOXES'),
(5,'ULTRASONIC FLOWMETER (LIQUID APPLICATION)'),
(6,'ULTRASONIC FLOWMETER (GAS APPLICATION)'),
(7,'STEAM'),
(8,'CUSTODY TRANSFER'),
(9,'CORIOLIS'),
(10,'TANK AGITATORS & MIXERS'),
(11,'MARINE LOADING ARMS'),
(12,'PIGGABLE TRANSFER SYSTEM, TRUCK & RAILCAR'),
(13,'VALVES & CONTROLS'),
(14,'WEIGHING, FEEDING & UPGRADES'),
(15,'VALVES (VECTOR TRIM SERIES)'),
(16,'DOUBLE BLOCK & BLEED VALVES'),
(18,'test'),
(19,'test'),
(20,'test33'),
(21,'test33'),
(22,'test33'),
(23,'test33'),
(24,'test 4'),
(25,'tesst 5');

/*Table structure for table `defaultpass` */

DROP TABLE IF EXISTS `defaultpass`;

CREATE TABLE `defaultpass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `defaultpass` */

insert  into `defaultpass`(`id`,`password`) values 
(1,'123456');

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

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`email`,`name`,`subject`,`message`) values 
(1,'wew','wew','wew','we'),
(2,'wew','wew','wew','we');

/*Table structure for table `part` */

DROP TABLE IF EXISTS `part`;

CREATE TABLE `part` (
  `part_id` int(100) NOT NULL AUTO_INCREMENT,
  `part_name` varchar(255) DEFAULT NULL,
  `part_pic` varchar(255) DEFAULT NULL,
  `assign_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`part_id`),
  KEY `FK_part` (`assign_id`),
  CONSTRAINT `FK_part` FOREIGN KEY (`assign_id`) REFERENCES `assign` (`assign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `part` */

insert  into `part`(`part_id`,`part_name`,`part_pic`,`assign_id`) values 
(1,'SA Multi-turn Actuator with Integral Control','imahePART/P SA Multi-turn Actuator with Integral Control.jpeg',1),
(2,'SQ Part-turn Actuator with Integral Control','imahePART/P SQ Part-turn Actuator with Integral Control1.jpeg',1),
(3,'Linear Actuator','imahePART/P Linear Actuator2.jpeg',1),
(4,'Gen 2 Actuator - wall bracket','imahePART/P Gen 2 Actuator - wall bracket3.jpeg',1),
(5,'Lever Actuator','imahePART/P Lever Actuator4.jpeg',1),
(6,'Auma Control Head - AC 01.2','imahePART/P Auma Control Head - AC 01.25.jpeg',2),
(7,'Auma Control Head - AC 01.1','imahePART/P Auma Control Head - AC 01.16.jpeg',2),
(8,'Worm Gearbox','imahePART/P Worm Gearbox7.jpeg',3),
(9,'Spur Gearbox','imahePART/P Spur Gearbox8.jpeg',3),
(10,'Bevel Gearbox','imahePART/P Bevel Gearbox9.jpeg',3),
(11,'Sipos Electric Actuator HIMOD','imahePART/P Sipos Electric Actuator HIMOD10.jpeg',4),
(12,'Sipos 5 Flash Electric Actuator','imahePART/P Sipos 5 Flash Electric Actuator11.jpeg',4),
(13,'Drehmo S-range','imahePART/P Drehmo S-range12.jpeg',6),
(14,'Drehmo Heavy series Type DC','imahePART/P Drehmo Heavy series Type DC13.jpeg',6),
(15,'Drehmo Compact','imahePART/P Drehmo Compact14.jpeg',6),
(16,'Drehmo i-matic','imahePART/P Drehmo i-matic15.jpeg',6),
(17,'Drehmo x-matic','imahePART/P Drehmo x-matic16.jpeg',6),
(18,'Drehmo C-matic','imahePART/P Drehmo C-matic17.jpeg',6),
(19,'Drehmo Worm gearbox','imahePART/P Drehmo Worm gearbox18.jpeg',7),
(20,'Drehmo Bevel gearbox','imahePART/P Drehmo Bevel gearbox19.jpeg',7);

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
  `is_deactivate` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `full_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_code` varchar(255) DEFAULT NULL,
  `forgot_password_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`user_type_id`,`password_question`,`password_answer`,`is_login`,`is_deactivate`,`is_deleted`,`last_activity`,`full_name`,`contact_no`,`email_code`,`forgot_password_code`) values 
(23,'cjayconocono@gmail.com','Ñ9ry yù‹}®Quz¢­\0«’n4UM¾À€cf',1,'What is your Dream job?','wew',0,0,0,'2017-10-08 06:01:15','Cjay Conocono','12345678901','','GvbodUU0RAKQdqZgpr6f'),
(24,'ccjayconocono@yahoo.com','¿ÁA—:•§§–‹\Z8ºeVó;­Xle©Þ',1,'Who was your first crush?','wew',0,1,0,'2017-10-08 10:09:26','test','asa','',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
