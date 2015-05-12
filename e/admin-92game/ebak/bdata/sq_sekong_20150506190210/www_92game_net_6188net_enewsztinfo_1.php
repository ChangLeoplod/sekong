<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsztinfo`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('2','1','0','4','997','1406257713','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('4','1','0','2','1621','1406258244','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('6','2','0','7','119','1406257177','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('7','2','0','7','129','1406257182','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('8','2','0','7','142','1406257191','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('9','2','0','7','145','1406257194','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('28','3','0','4','925','1406257667','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('29','3','0','4','938','1406257675','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('30','3','0','4','1044','1406257884','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('31','3','0','4','1072','1406257898','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('32','3','0','4','1113','1406257924','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('33','3','0','4','1123','1406257929','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('38','3','0','2','1585','1406258219','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('50','4','0','4','744','1406257560','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('51','4','0','4','761','1406257570','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('52','4','0','4','764','1406257572','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('53','4','0','4','830','1406257610','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('54','4','0','4','1015','1406257723','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('55','4','0','4','1054','1406257889','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('56','4','0','4','1078','1406257902','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('57','4','0','4','1081','1406257904','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('58','4','0','4','1107','1406257921','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('64','4','0','2','1773','1406258359','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('67','4','0','4','2144','1406258746','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('75','7','0','4','948','1406257682','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('76','7','0','4','993','1406257710','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('77','7','0','4','1000','1406257715','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('78','7','0','4','1021','1406257726','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('79','7','0','4','1099','1406257917','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('80','7','0','4','1134','1406257938','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('81','7','0','4','1140','1406257941','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('84','8','0','4','1088','1406257910','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('85','8','0','4','1131','1406257935','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('90','8','0','2','1736','1406258332','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('91','8','0','2','1738','1406258334','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('92','8','0','2','1740','1406258336','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('93','8','0','2','1827','1406258400','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('94','8','0','2','1831','1406258403','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('95','9','0','4','1112','1406257924','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('96','9','0','4','1127','1406257932','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('97','9','0','4','1141','1406257942','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('118','9','0','2','1597','1406258229','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('119','9','0','2','1797','1406258379','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('131','9','0','4','826','1406257608','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('132','9','0','4','829','1406257610','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('133','9','0','4','836','1406257614','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('134','9','0','4','840','1406257617','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('135','9','0','4','846','1406257622','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('136','9','0','4','856','1406257629','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('137','9','0','4','860','1406257631','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('138','9','0','4','864','1406257633','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('139','9','0','4','880','1406257640','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('140','9','0','4','881','1406257641','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('141','9','0','4','882','1406257642','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('142','9','0','4','884','1406257643','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('143','9','0','4','889','1406257647','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('144','9','0','4','890','1406257647','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('145','9','0','4','902','1406257656','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('146','9','0','4','919','1406257664','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('147','9','0','4','920','1406257665','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('148','9','0','4','963','1406257691','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('149','9','0','4','969','1406257694','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('150','9','0','4','1025','1406257870','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('151','9','0','4','1055','1406257889','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('152','9','0','4','1077','1406257901','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('153','9','0','4','1079','1406257903','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('154','9','0','4','1093','1406257914','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('155','9','0','7','19','1406257116','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('168','10','0','4','1034','1406257876','1','0');");

@include("../../inc/footer.php");
?>