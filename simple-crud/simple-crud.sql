/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - simple_crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simple_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `simple_crud`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama`,`hrg`,`jml`,`keterangan`,`foto`) values 
(1,'Aglonema Suksom',45000,10,'aglonemaSuksom','aglonemaSuksom.jpg'),
(2,'Aglonema Rotundum Aceh',30000,10,'-','aglonemaRotundumAceh.jpg'),
(3,'Aglonema RoDud Anjamani',75000,10,'-','aglonemaRoDudAnjamani.jpg'),
(4,'Aglonema Snow White Remaja',77,10,'-','aglonemaSnowWhiteRemaja.jpg'),
(5,'Aglonema Super White',90000,50,'-','aglonemaSuperWhite.jpg'),
(6,'Aglonema Venus',90000,10,'77','aglonemaVenus.jpg'),
(7,'Aglonema Red Anjamani Dewasa',75000,10,'-','aglonemaRedAnjamaniDewasa.jpg'),
(8,'Aglonema Ayunindi',35000,10,'-','aglonemaAyunindi.jpg'),
(9,'Aglonema Khocin',35000,10,'-','aglonemaKhocin.jpg');

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `kota` varchar(40) DEFAULT NULL,
  `provinsi` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id`,`nama_member`,`email`,`telp`,`alamat`,`kota`,`provinsi`,`gender`,`username`,`password`,`foto`) values 
(1,'Agus','agus@gmail.com','1234','Jl Melati IV 212','Agus','Jawa Tengah','1','agus','123','img_avatar1.png'),
(2,'Joko','joko@gmail.com',NULL,'Jl Bamu Seru','Semarang','Jawa Tengah',NULL,'joko','123','img_avatar3.png'),
(3,'Adul','adul@gmail.com',NULL,'Jl Melati Sukma 12','Pekalongan','Jawa Tengah',NULL,'adul','123','blank-user.png');

/*Table structure for table `tborder` */

DROP TABLE IF EXISTS `tborder`;

CREATE TABLE `tborder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idmember` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jenisByr` varchar(20) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `norek` varchar(40) DEFAULT NULL,
  `biayaKirim` double DEFAULT NULL,
  `pembelian` double DEFAULT NULL,
  `totalByr` double DEFAULT NULL,
  `ekspedisi` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tborder` */

insert  into `tborder`(`id`,`idmember`,`tgl`,`jenisByr`,`bank`,`norek`,`biayaKirim`,`pembelian`,`totalByr`,`ekspedisi`,`status`) values 
(1,1,'2023-04-23','Cash',NULL,NULL,10000,45000,55000,'JNE',1),
(2,2,'2023-04-22','Transfer','BCA','009',10000,105000,115000,'Anteraja',0);

/*Table structure for table `tborder_detail` */

DROP TABLE IF EXISTS `tborder_detail`;

CREATE TABLE `tborder_detail` (
  `idorder` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jml` float NOT NULL,
  `hrg` int(11) NOT NULL,
  PRIMARY KEY (`idorder`,`idbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tborder_detail` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`username`,`password`,`foto`) values 
(1,'admin','123','user-icon.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
