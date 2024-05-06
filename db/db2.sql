/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - maintenance_services
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`maintenance_services` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `maintenance_services`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `admin_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`admin_id`,`admin_name`,`admin_email`,`admin_phone`,`admin_password`,`created_at`,`updated_at`) values 
(1,'admin','admin@gmail.com','7086788778','123','2023-12-15 14:34:54','2024-02-28 14:12:42'),
(2,'admin1','admin1@gmail.com','9667787979','123','2023-12-15 15:44:26','2023-12-15 15:44:26');

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `booking_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_tech_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `booking_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bookings` */

insert  into `bookings`(`booking_id`,`customer_id`,`book_tech_id`,`booking_status`,`payment_status`,`booking_date`,`created_at`,`updated_at`) values 
(1,'1','12','approved','pending','2024-02-09','2024-01-18 20:17:47','2024-03-02 19:19:02'),
(2,'2','12','approved','paid','2024-02-12','2024-01-18 20:18:43','2024-03-02 19:18:53'),
(3,'1','12','pending','pending','2024-02-19','2024-01-18 20:29:11','2024-02-08 23:05:09'),
(5,'2','12','rejected','pending','2024-02-16','2024-02-16 15:10:37','2024-03-04 10:47:03'),
(6,'2','3','pending','pending','2024-02-17','2024-02-16 16:34:25','2024-02-16 16:34:25');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`cat_id`,`cat_name`,`cat_image`,`created_at`,`updated_at`) values 
(1,'Electrician','1704375438.png','2024-01-04 13:37:18','2024-01-06 10:53:41'),
(3,'Plumber','1704537179.png','2024-01-06 10:32:59','2024-01-06 10:32:59'),
(4,'Carpenter','1704537204.jpg','2024-01-06 10:33:24','2024-01-06 10:33:24'),
(5,'Mechanic','1704537235.png','2024-01-06 10:33:55','2024-01-06 10:33:55');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`user_id`,`name`,`email`,`subject`,`message`,`reply`,`created_at`,`updated_at`) values 
(1,'2','Raj','raj@gmail.com','application','its too slow','pending','2024-03-03 06:28:36','2024-03-03 06:28:36'),
(2,'2','Raj','raj@gmail.com','suggestions','i have a suggestion can we have a meeting asap thanks alot','pending','2024-03-03 06:42:20','2024-03-03 06:42:20'),
(3,'2','Raj','raj@gmail.com','lorem','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatem eos possimus aliquid minima, quam blanditiis autem inventore? Corporis et odit exercitationem laboriosam. Assumenda ullam atque accusamus ipsam cupiditate maxime.','pending','2024-03-03 07:06:42','2024-03-03 07:06:42'),
(4,'12','mohan','mohan@gmail.com','update','hey i have a suggestion for upgrade','pending','2024-03-05 10:27:07','2024-03-05 10:27:07'),
(5,'3','Deepak','deepak@gmail.com','payment','cant do payment online please resolve this','ok','2024-03-05 10:29:18','2024-03-05 10:31:21'),
(6,'3','Ajoy','ajoy@gmail.com','hello','i have a complaint','pending','2024-03-05 10:30:21','2024-03-05 10:30:21');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customer_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proof` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`customer_id`,`customer_name`,`customer_email`,`customer_phone`,`customer_address`,`id_proof`,`created_at`,`updated_at`,`customer_password`) values 
(1,'customer1','customer1@gmail.com','7086788778','Thrissur 45,hjdj ksjnlfs snlnm,s','1704905128.png','2024-01-10 13:00:19','2024-01-10 17:23:05','123'),
(2,'Raj','raj@gmail.com','7086788778','Thrissur 453,Aswini junction','1707910822.jpg','2024-02-14 11:40:22','2024-02-14 11:40:22','123'),
(3,'Deepak','deepak@gmail.com','8678796868','Thrissur 453,Aswini junction','1708094421.jpg','2024-02-16 14:40:21','2024-02-16 14:40:21','123');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_12_15_043126_create_admins_table',1),
(6,'2023_12_18_165339_create_technicians_table',2),
(7,'2024_01_04_123522_create_categories_table',3),
(8,'2024_01_07_165823_create_customers_table',4),
(9,'2024_01_07_173328_create_customers_table',5),
(10,'2024_01_13_064841_create_bookings_table',6),
(11,'2024_03_01_154839_create_payments_table',7),
(12,'2024_03_03_055444_create_complaints_table',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technician_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_holder_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_month` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`customer_id`,`technician_id`,`card_holder_name`,`card_number`,`expiry_year`,`expiry_month`,`cvv`,`amount`,`created_at`,`updated_at`,`booking_id`) values 
(1,'2','12','Raj Kumar','2635765127537','2029','09','233','500','2024-03-02 13:02:55','2024-03-02 13:02:55',2);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `technicians` */

DROP TABLE IF EXISTS `technicians`;

CREATE TABLE `technicians` (
  `tech_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tech_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_cat_id` int(11) DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tech_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tech_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `technicians` */

insert  into `technicians`(`tech_id`,`tech_name`,`tech_email`,`tech_phone`,`tech_cat_id`,`type`,`location`,`profile`,`licence`,`password`,`created_at`,`updated_at`,`tech_status`) values 
(3,'Ajoy','ajoy@gmail.com','131526326',3,'Admin','thrissur','1703859115.jpg','1703859115.jpg','123','2023-12-29 14:11:55','2024-02-08 12:39:39','Approved'),
(4,'Mithun','mithun@gmail.com','131526326',3,'Admin','thrissur','1703859719.jpg','1703859719.jpg','123','2023-12-29 14:21:59','2024-02-29 15:21:18','Approved'),
(5,'tech','tech@gmail.com','25708248',4,'Admin','Thrissur','1704196957.jpg','1704196957.jpg','123','2024-01-02 12:02:37','2024-01-03 13:55:36','Rejected'),
(6,'tech1','tech1@gmail.com','25708248',4,'Admin','Thrissur','1704197437.jpg','1704197437.jpg','123','2024-01-02 12:10:37','2024-02-28 15:23:22','Approved'),
(8,'Yogesh','yogesh@gmail.com','68454334',1,'Admin','Mumbai','1704539673.jpg','1704539673.jpg','123','2024-01-06 11:14:33','2024-01-06 11:14:33','Pending'),
(9,'Yogesh','yogesh11@gmail.com','68454334',3,'Admin','Mumbai','1704539902.jpg','1704539902.jpg','123','2024-01-06 11:18:22','2024-01-06 11:18:22','Pending'),
(10,'Deepak','deepak@gmail.com','58265826562',5,'Admin','Thrissur','1704540191.jpg','1704540191.jpg','123','2024-01-06 11:23:11','2024-01-06 11:23:11','Approved'),
(11,'tech2','tech2@gmail.com','8556556',4,'Technician','Thrissur','1704617421.jpg','1704617421.png','123','2024-01-07 08:50:21','2024-01-11 13:37:21','Approved'),
(12,'mohan','mohan@gmail.com','976856576',1,'Admin','Mumbai','1707398924.jpg','1707398924.jpg','123','2024-02-08 13:28:44','2024-02-29 15:22:36','Approved'),
(13,'sarjeet','sarjeet@gmail.com','7086788778',5,'Admin','Mumbai','1707400691.jpg','1707400691.jpg','123','2024-02-08 13:58:11','2024-02-08 13:58:11','Approved'),
(14,'Hemant','hemant@gmail.com','906785',3,'Technician','Mumbai','1707402027.jpg','1707402027.png','123','2024-02-08 14:20:27','2024-02-08 14:20:27','Pending'),
(15,'Raj','raj@gmail.com','8979676776',1,'Admin','Mumbai','1709130776.jpg','1709130776.jpg','123','2024-02-28 14:32:56','2024-02-28 14:32:56','Approved');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
