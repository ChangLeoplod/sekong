<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewslog`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewslog` values('1','92game','2014-07-29 13:17:00','210.209.85.210','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('2','92game','2015-04-15 17:46:51','1.56.174.225','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('3','92game','2015-04-15 18:03:51','58.49.238.97','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('4','92game','2015-04-15 19:04:58','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('5','92game','2015-04-15 19:32:44','58.49.238.97','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('6','92game','2015-04-15 23:38:39','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('7','92game','2015-04-16 00:55:07','1.56.174.69','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('8','92game','2015-04-16 01:06:14','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('9','92game','2015-04-16 01:08:56','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('10','92game','2015-04-16 01:24:32','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('11','92game','2015-04-16 01:45:16','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('12','92game','2015-04-16 01:46:08','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('13','92game','2015-04-16 02:12:23','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('14','92game','2015-04-16 02:17:09','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('15','92game','2015-04-16 02:17:15','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('16','92game','2015-04-16 02:17:19','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('17','92game','2015-04-16 02:17:22','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('18','92game','2015-04-16 02:22:11','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('19','92game','2015-04-16 17:38:57','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('20','92game','2015-04-16 17:44:47','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('21','92game','2015-04-16 18:42:58','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('22','92game','2015-04-16 18:44:38','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('23','92game','2015-04-16 18:56:07','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('24','92game','2015-04-16 23:49:58','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('25','92game','2015-04-16 23:56:00','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('26','92game','2015-04-17 00:04:30','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('27','92game','2015-04-17 00:07:26','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('28','92game','2015-04-17 00:36:46','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('29','92game','2015-04-17 00:38:57','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('30','92game','2015-04-17 02:07:08','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('31','92game','2015-04-17 04:28:44','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('32','92game','2015-04-17 17:25:32','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('33','92game','2015-04-17 17:25:59','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('34','92game','2015-04-17 18:11:58','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('35','92game','2015-04-17 18:44:56','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('36','92game','2015-04-17 19:13:44','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('37','92game','2015-04-17 22:42:04','111.175.7.248','0','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('38','92game','2015-04-17 22:42:20','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('39','92game','2015-04-17 22:42:45','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('40','92game','2015-04-17 22:44:14','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('41','92game','2015-04-17 22:57:27','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('42','92game','2015-04-17 22:58:44','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('43','92game','2015-04-17 22:59:08','59.174.168.166','0','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('44','92game','2015-04-17 22:59:14','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('45','92game','2015-04-17 23:01:46','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('46','root','2015-04-17 23:05:08','111.175.7.248','0','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('47','92game','2015-04-17 23:05:19','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('48','92game','2015-04-17 23:23:05','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('49','92game','2015-04-17 23:23:17','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('50','92game','2015-04-17 23:24:04','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('51','92game','2015-04-17 23:25:01','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('52','e.net92game','2015-04-17 23:26:54','59.174.168.166','0','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('53','92game','2015-04-17 23:27:03','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('54','92game','2015-04-17 23:27:33','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('55','92game','2015-04-17 23:32:17','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('56','92game','2015-04-17 23:42:55','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('57','92game','2015-04-18 00:13:32','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('58','92game','2015-04-18 00:20:56','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('59','92game','2015-04-18 00:35:57','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('60','92game','2015-04-18 06:07:58','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('61','92game','2015-04-19 23:15:33','121.60.119.81','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('62','92game','2015-04-19 23:34:06','121.60.119.81','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('63','92game','2015-04-19 23:37:10','121.60.119.81','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('64','92game','2015-04-20 00:19:59','121.60.119.81','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('65','92game','2015-04-20 17:10:54','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('66','92game','2015-04-20 17:36:14','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('67','92game','2015-04-20 18:08:19','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('68','92game','2015-04-20 22:03:04','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('69','92game','2015-04-20 22:22:34','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('70','92game','2015-04-20 22:25:10','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('71','92game','2015-04-20 22:31:14','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('72','92game','2015-04-20 22:32:03','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('73','92game','2015-04-20 22:34:21','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('74','92game','2015-04-20 22:38:52','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('75','92game','2015-04-20 22:39:43','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('76','92game','2015-04-20 22:43:16','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('77','92game','2015-04-20 22:47:35','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('78','92game','2015-04-20 22:48:00','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('79','92game','2015-04-20 23:31:52','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('80','92game','2015-04-21 01:17:16','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('81','92game','2015-04-21 02:24:53','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('82','92game','2015-04-21 17:53:58','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('83','92game','2015-04-21 19:21:10','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('84','92game','2015-04-21 22:15:42','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('85','92game','2015-04-21 22:53:06','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('86','92game','2015-04-22 00:36:05','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('87','92game','2015-04-22 01:04:06','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('88','92game','2015-04-22 01:10:58','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('89','92game','2015-04-22 17:50:21','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('90','92game','2015-04-22 18:29:35','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('91','92game','2015-04-22 18:36:08','111.175.7.248','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('92','92game','2015-04-22 18:44:39','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('93','92game','2015-04-22 19:23:46','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('94','92game','2015-04-22 19:30:55','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('95','92game','2015-04-22 19:59:20','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('96','92game','2015-04-22 20:00:54','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('97','92game','2015-04-22 21:47:33','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('98','92game','2015-04-22 23:34:25','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('99','92game','2015-04-23 00:01:46','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('100','92game','2015-04-23 00:25:39','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('101','92game','2015-04-23 01:22:42','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('102','92game','2015-04-23 01:40:29','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('103','92game','2015-04-23 02:33:28','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('104','92game','2015-04-23 07:07:17','111.175.165.8','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('105','92game','2015-04-23 17:18:46','59.174.168.166','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('106','92game','2015-04-23 18:22:23','59.174.164.71','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('107','92game','2015-04-23 19:18:05','58.49.51.38','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('108','92game','2015-04-23 19:39:01','180.142.151.163','1','','0');");
E_D("replace into `www_92game_net_6188net_enewslog` values('109','92game','2015-04-23 20:03:46','58.49.51.38','1','','0');");

@include("../../inc/footer.php");
?>