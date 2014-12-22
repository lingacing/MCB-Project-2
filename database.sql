/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `blog`;

USE `blog`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `kode_content` int(5) NOT NULL AUTO_INCREMENT,
  `judul_content` varchar(50) DEFAULT 'kosong',
  `kode_kategori` int(5) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `content` text NOT NULL,
  `keyword` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`kode_content`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `content` */

insert  into `content`(`kode_content`,`judul_content`,`kode_kategori`,`tanggal`,`penulis`,`content`,`keyword`,`deskripsi`) values (1,'CMS',1,'2013-12-21 00:00:00','Gerdyan Chandi','<p>\r\nTugas CMS.</p>\r\n','','');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kode_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `judul_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`kode_kategori`,`judul_kategori`) values (1,'Tutorial Java'),(2,'Tutorial PHP');

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `title` varchar(100) DEFAULT NULL,
  `keyword` text NOT NULL,
  `deskripsi` text NOT NULL,
  `limit_content` int(11) NOT NULL,
  `contact_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

insert  into `setting`(`title`,`keyword`,`deskripsi`,`limit_content`,`contact_text`) values ('Blog Sederhana dengan PHP','blog sederhana keyword','blog sederhana deskripsi',2,'Jl.Lodan Raya no. 2<br />\r\nUBM<br />\r\nJakarta<br />\r\nNo HP : 087808877989<br />');

/*Table structure for table `userapp` */

DROP TABLE IF EXISTS `userapp`;

CREATE TABLE `userapp` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `userapp` */

insert  into `userapp`(`username`,`password`,`nama_lengkap`) values ('admin','admin','Administrator');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
