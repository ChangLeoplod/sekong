<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsztinfo`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL auto_increment,
  `ztid` smallint(5) unsigned NOT NULL default '0',
  `cid` smallint(5) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `newstime` int(10) unsigned NOT NULL default '0',
  `mid` smallint(5) unsigned NOT NULL default '0',
  `isgood` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('1','1','0','6','463','1406257387','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('2','1','0','4','997','1406257713','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('3','1','0','3','1432','1406258119','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('4','1','0','2','1621','1406258244','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('5','1','0','1','1988','1406258522','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('6','2','0','7','119','1406257177','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('7','2','0','7','129','1406257182','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('8','2','0','7','142','1406257191','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('9','2','0','7','145','1406257194','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('10','2','0','3','1476','1406258148','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('11','2','0','1','2111','1406258611','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('12','3','0','6','241','1406257253','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('13','3','0','6','254','1406257262','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('14','3','0','6','263','1406257267','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('15','3','0','6','275','1406257272','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('16','3','0','6','293','1406257284','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('17','3','0','6','319','1406257299','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('18','3','0','6','328','1406257303','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('19','3','0','6','396','1406257346','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('20','3','0','6','496','1406257406','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('21','3','0','5','595','1406257467','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('22','3','0','5','602','1406257472','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('23','3','0','5','617','1406257481','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('24','3','0','5','621','1406257482','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('25','3','0','5','625','1406257484','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('26','3','0','5','652','1406257505','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('27','3','0','5','719','1406257544','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('28','3','0','4','925','1406257667','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('29','3','0','4','938','1406257675','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('30','3','0','4','1044','1406257884','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('31','3','0','4','1072','1406257898','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('32','3','0','4','1113','1406257924','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('33','3','0','4','1123','1406257929','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('34','3','0','3','1208','1406257982','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('35','3','0','3','1354','1406258071','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('36','3','0','3','1442','1406258128','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('37','3','0','3','1445','1406258130','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('38','3','0','2','1585','1406258219','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('39','3','0','1','1970','1406258505','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('40','4','0','6','195','1406257224','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('41','4','0','6','197','1406257226','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('42','4','0','6','210','1406257234','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('43','4','0','6','211','1406257235','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('44','4','0','6','280','1406257275','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('45','4','0','6','300','1406257290','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('46','4','0','6','302','1406257291','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('47','4','0','6','386','1406257339','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('48','4','0','6','530','1406257425','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('49','4','0','6','540','1406257432','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('50','4','0','4','744','1406257560','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('51','4','0','4','761','1406257570','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('52','4','0','4','764','1406257572','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('53','4','0','4','830','1406257610','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('54','4','0','4','1015','1406257723','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('55','4','0','4','1054','1406257889','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('56','4','0','4','1078','1406257902','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('57','4','0','4','1081','1406257904','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('58','4','0','4','1107','1406257921','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('59','4','0','3','1185','1406257968','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('60','4','0','3','1249','1406258008','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('61','4','0','3','1317','1406258046','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('62','4','0','3','1357','1406258072','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('63','4','0','3','1382','1406258088','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('64','4','0','2','1773','1406258359','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('65','4','0','1','1878','1406258438','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('66','4','0','1','1976','1406258512','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('67','4','0','4','2144','1406258746','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('68','5','0','1','1882','1406258441','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('69','5','0','1','2089','1406258597','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('70','6','0','1','1970','1406258505','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('71','6','0','1','2075','1406258585','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('72','7','0','6','265','1406257268','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('73','7','0','6','409','1406257355','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('74','7','0','5','640','1406257495','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('75','7','0','4','948','1406257682','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('76','7','0','4','993','1406257710','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('77','7','0','4','1000','1406257715','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('78','7','0','4','1021','1406257726','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('79','7','0','4','1099','1406257917','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('80','7','0','4','1134','1406257938','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('81','7','0','4','1140','1406257941','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('82','7','0','3','1520','1406258176','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('83','7','0','1','2098','1406258604','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('84','8','0','4','1088','1406257910','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('85','8','0','4','1131','1406257935','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('86','8','0','3','1401','1406258102','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('87','8','0','3','1422','1406258112','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('88','8','0','3','1424','1406258114','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('89','8','0','3','1426','1406258115','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('90','8','0','2','1736','1406258332','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('91','8','0','2','1738','1406258334','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('92','8','0','2','1740','1406258336','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('93','8','0','2','1827','1406258400','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('94','8','0','2','1831','1406258403','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('95','9','0','4','1112','1406257924','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('96','9','0','4','1127','1406257932','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('97','9','0','4','1141','1406257942','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('98','9','0','3','1181','1406257965','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('99','9','0','3','1183','1406257967','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('100','9','0','3','1204','1406257980','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('101','9','0','3','1216','1406257985','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('102','9','0','3','1217','1406257986','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('103','9','0','3','1219','1406257987','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('104','9','0','3','1221','1406257988','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('105','9','0','3','1231','1406257996','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('106','9','0','3','1234','1406257998','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('107','9','0','3','1240','1406258002','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('108','9','0','3','1256','1406258011','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('109','9','0','3','1264','1406258015','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('110','9','0','3','1275','1406258021','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('111','9','0','3','1290','1406258032','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('112','9','0','3','1348','1406258068','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('113','9','0','3','1368','1406258077','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('114','9','0','3','1414','1406258108','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('115','9','0','3','1428','1406258117','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('116','9','0','3','1436','1406258122','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('117','9','0','3','1453','1406258133','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('118','9','0','2','1597','1406258229','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('119','9','0','2','1797','1406258379','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('120','9','0','1','1880','1406258440','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('121','9','0','1','2018','1406258542','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('122','9','0','1','2035','1406258557','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('123','9','0','1','2079','1406258588','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('124','9','0','1','2093','1406258601','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('125','9','0','5','609','1406257476','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('126','9','0','5','630','1406257487','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('127','9','0','5','632','1406257489','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('128','9','0','5','636','1406257492','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('129','9','0','5','645','1406257499','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('130','9','0','5','646','1406257500','1','0');");
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
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('156','9','0','6','187','1406257219','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('157','9','0','6','232','1406257247','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('158','9','0','6','235','1406257249','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('159','9','0','6','260','1406257265','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('160','9','0','6','291','1406257282','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('161','9','0','6','388','1406257341','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('162','9','0','6','400','1406257350','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('163','9','0','6','451','1406257381','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('164','9','0','6','452','1406257382','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('165','9','0','6','473','1406257391','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('166','9','0','6','475','1406257392','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('167','9','0','5','587','1406257461','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('168','10','0','4','1034','1406257876','1','0');");
E_D("replace into `www_92game_net_6188net_enewsztinfo` values('169','10','0','1','1987','1406258521','1','0');");

@include("../../inc/footer.php");
?>