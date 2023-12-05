/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.25-MariaDB : Database - project_webl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project_webl` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `project_webl`;

/*Table structure for table `auth_activation_attempts` */

DROP TABLE IF EXISTS `auth_activation_attempts`;

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_activation_attempts` */

/*Table structure for table `auth_groups` */

DROP TABLE IF EXISTS `auth_groups`;

CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups` */

insert  into `auth_groups`(`id`,`name`,`description`) values (1,'owner','akun untuk owner'),(2,'staf','akun untuk staf'),(3,'user','akun untuk user');

/*Table structure for table `auth_groups_permissions` */

DROP TABLE IF EXISTS `auth_groups_permissions`;

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_permissions` */

/*Table structure for table `auth_groups_users` */

DROP TABLE IF EXISTS `auth_groups_users`;

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_users` */

insert  into `auth_groups_users`(`group_id`,`user_id`) values (3,1);

/*Table structure for table `auth_logins` */

DROP TABLE IF EXISTS `auth_logins`;

CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values (1,'::1','ayuni1',NULL,'2023-12-01 02:45:48',0),(2,'::1','ayuni1',NULL,'2023-12-01 02:46:04',0),(3,'::1','user1@gmail.com',1,'2023-12-01 02:46:55',1),(4,'::1','staf1@gmail.com',2,'2023-12-01 02:51:08',1),(5,'::1','user1@gmail.com',1,'2023-12-01 02:51:47',1),(6,'::1','ayuni1',NULL,'2023-12-05 12:56:20',0),(7,'::1','ayuni1',NULL,'2023-12-05 12:56:36',0),(8,'::1','staf1@gmail.com',2,'2023-12-05 12:56:56',1),(9,'::1','user1@gmail.com',NULL,'2023-12-05 12:57:25',0),(10,'::1','user1@gmail.com',NULL,'2023-12-05 12:57:42',0),(11,'::1','user1@gmail.com',1,'2023-12-05 12:59:12',1),(12,'::1','user1@gmail.com',1,'2023-12-05 13:18:36',1);

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

/*Table structure for table `auth_reset_attempts` */

DROP TABLE IF EXISTS `auth_reset_attempts`;

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_reset_attempts` */

/*Table structure for table `auth_tokens` */

DROP TABLE IF EXISTS `auth_tokens`;

CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_tokens` */

/*Table structure for table `auth_users_permissions` */

DROP TABLE IF EXISTS `auth_users_permissions`;

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_users_permissions` */

/*Table structure for table `kamar` */

DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(220) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kamar` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values (1,'2017-11-20-223112','App\\Database\\Migrations\\CreateAuthTables','default','App',1701398498,1),(2,'2023-11-02-104836','App\\Database\\Migrations\\Kamar','default','App',1701398498,1),(3,'2023-11-02-104837','App\\Database\\Migrations\\CreatePemesananTabel','default','App',1701398498,1),(4,'2023-11-02-104855','App\\Database\\Migrations\\CreateStafTabel','default','App',1701398498,1),(5,'2023-11-02-104916','App\\Database\\Migrations\\CreateTransaksiTabel','default','App',1701398498,1);

/*Table structure for table `mkamar` */

DROP TABLE IF EXISTS `mkamar`;

CREATE TABLE `mkamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cNoKamar` varchar(12) NOT NULL,
  `cNameKamar` varchar(150) NOT NULL,
  `cFasilitas` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Kosong',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mkamar` */

insert  into `mkamar`(`id`,`cNoKamar`,`cNameKamar`,`cFasilitas`,`status`,`created_at`,`updated_at`,`deleted_at`) values (1,'101','MAWAR 01','Lengkap','Ditempati','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'103','ANGGREK LANTAI 01','Free Wifi, Kamar Mandi Dalam, TV, AC, Kunci Otomatis, Housekeeping Harian, Layanan Resepsionis 24 jam, Free Breakfast','Ditempati','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'201','ANGGREK LANTAI 02','Free Wifi, Kamar Mandi Dalam, TV, AC, Kunci Otomatis, Housekeeping Harian, Layanan Resepsionis 24 jam, Free Breakfast','Ditempati','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'201','ANGGREK LANTAI 1','Kosong','Ditempati','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kamar` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `harga` int(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Diproses',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kamar` (`id_kamar`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `mkamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id`,`id_kamar`,`tanggal_pemesanan`,`tanggal_masuk`,`tanggal_keluar`,`harga`,`status`,`created_at`,`updated_at`,`deleted_at`) values (4,1,'2023-11-16','2023-11-30','2023-12-01',200000,'Dikonfirmasi','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,4,'2023-11-24','2023-11-25','2023-11-26',200000,'Dikonfirmasi','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,5,'2023-11-30','2023-11-30','2023-12-01',200000,'Dikonfirmasi','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,7,'2023-12-01','2023-12-01','2023-12-02',200000,'Dikonfirmasi','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `staf` */

DROP TABLE IF EXISTS `staf`;

CREATE TABLE `staf` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_staf` varchar(220) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telepon` int(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `staf` */

insert  into `staf`(`id`,`nama_staf`,`alamat`,`no_telepon`,`created_at`,`updated_at`,`deleted_at`) values (1,'KRISTI AYUNI NUGROHO','KAMPUNG BARU',80000077,'2023-11-25 20:40:42','0000-00-00 00:00:00',NULL),(9,'ALDI NUGROHO','KAMPUNG BARU',4294967295,'2023-11-25 10:49:14',NULL,NULL);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(220) NOT NULL,
  `total` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_pemesanan` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_id_pemesanan_foreign` (`id_pemesanan`),
  CONSTRAINT `transaksi_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `transaksi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`password_hash`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values (1,'user1@gmail.com','user1','$2y$10$VtLsHCtxzT4Nhq1VL6Qy2el0jUDfW1qFUmA6KE78rhL9Yt6M96vSq',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2023-12-01 02:45:39','2023-12-01 02:45:39',NULL),(2,'staf1@gmail.com','staf1','$2y$10$VtLsHCtxzT4Nhq1VL6Qy2el0jUDfW1qFUmA6KE78rhL9Yt6M96vSq',NULL,NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL);

/* Trigger structure for table `pemesanan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `t_pemesanan_a_u` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `t_pemesanan_a_u` AFTER UPDATE ON `pemesanan` FOR EACH ROW BEGIN
	if NEW.status = "Dikonfirmasi" then
		update `mkamar` set `status` = "Ditempati" where `mkamar`.`id` = new.id_kamar;
	end if;
    END */$$


DELIMITER ;

/*Table structure for table `grafik` */

DROP TABLE IF EXISTS `grafik`;

/*!50001 DROP VIEW IF EXISTS `grafik` */;
/*!50001 DROP TABLE IF EXISTS `grafik` */;

/*!50001 CREATE TABLE  `grafik`(
 `jan` bigint(21) ,
 `feb` bigint(21) ,
 `mar` bigint(21) ,
 `apr` bigint(21) ,
 `mei` bigint(21) ,
 `juni` bigint(21) ,
 `juli` bigint(21) ,
 `agt` bigint(21) ,
 `sep` bigint(21) ,
 `okt` bigint(21) ,
 `nov` bigint(21) ,
 `des` bigint(21) 
)*/;

/*Table structure for table `v_pemesanan` */

DROP TABLE IF EXISTS `v_pemesanan`;

/*!50001 DROP VIEW IF EXISTS `v_pemesanan` */;
/*!50001 DROP TABLE IF EXISTS `v_pemesanan` */;

/*!50001 CREATE TABLE  `v_pemesanan`(
 `id` int(10) unsigned ,
 `id_kamar` int(11) ,
 `cNoKamar` varchar(12) ,
 `cNameKamar` varchar(150) ,
 `cFasilitas` varchar(250) ,
 `tanggal_pemesanan` date ,
 `tanggal_masuk` date ,
 `tanggal_keluar` date ,
 `harga` int(100) ,
 `status` varchar(50) ,
 `created_at` datetime ,
 `updated_at` datetime ,
 `deleted_at` datetime 
)*/;

/*View structure for view grafik */

/*!50001 DROP TABLE IF EXISTS `grafik` */;
/*!50001 DROP VIEW IF EXISTS `grafik` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grafik` AS (select ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '01' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `jan`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '02' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `feb`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '03' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `mar`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '04' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `apr`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '05' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `mei`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '06' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `juni`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '07' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `juli`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '08' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `agt`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '09' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `sep`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '10' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `okt`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '11' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `nov`,ifnull((select count(`pemesanan`.`id`) AS `COUNT(``pemesanan``.``id``)` from `pemesanan` where date_format(`pemesanan`.`tanggal_pemesanan`,'%Y') = date_format(current_timestamp(),'%Y') and date_format(`pemesanan`.`tanggal_pemesanan`,'%m') = '12' and `pemesanan`.`status` = 'Dikonfirmasi'),0) AS `des`) */;

/*View structure for view v_pemesanan */

/*!50001 DROP TABLE IF EXISTS `v_pemesanan` */;
/*!50001 DROP VIEW IF EXISTS `v_pemesanan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pemesanan` AS select `pemesanan`.`id` AS `id`,`pemesanan`.`id_kamar` AS `id_kamar`,`mkamar`.`cNoKamar` AS `cNoKamar`,`mkamar`.`cNameKamar` AS `cNameKamar`,`mkamar`.`cFasilitas` AS `cFasilitas`,`pemesanan`.`tanggal_pemesanan` AS `tanggal_pemesanan`,`pemesanan`.`tanggal_masuk` AS `tanggal_masuk`,`pemesanan`.`tanggal_keluar` AS `tanggal_keluar`,`pemesanan`.`harga` AS `harga`,`pemesanan`.`status` AS `status`,`pemesanan`.`created_at` AS `created_at`,`pemesanan`.`updated_at` AS `updated_at`,`pemesanan`.`deleted_at` AS `deleted_at` from (`pemesanan` join `mkamar` on(`pemesanan`.`id_kamar` = `mkamar`.`id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
