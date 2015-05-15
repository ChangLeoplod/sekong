<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsmemberadd`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('1','顶替枯','','','13452221122','','','','2','','','在在在在在','','','','','11','59.174.168.166','1430047174','59.174.164.71','23');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('2','','','','','','','','1','','','','','','','','3','59.174.164.71','1430222047','59.174.164.71','6');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','3','59.174.164.71','1431583119','27.19.172.178','16');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('4','','','','','','','','1','','','','','','','','0','111.175.6.176','1431573240','111.175.6.176','2');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('5','','','','','','','','1','','','','','','','','0','27.19.172.178','1431587263','111.175.6.176','8');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('6','','','','','','','','1','','','','','','','','0','27.19.172.178','1431586514','27.19.172.178','2');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('7','','','','','','','','1','','','','','','','','0','111.175.6.176','1431586809','111.175.6.176','2');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('8','','','','','','','','1','','','','','','','','0','27.19.172.178','1431595978','111.175.6.176','2');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('9','','','','','','','','1','','','','','','','','0','27.19.172.178','1431670550','221.232.174.234','3');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('10','','','','','','','','1','','','','','','','','0','221.232.174.234','1431662062','221.232.174.234','2');");
E_D("replace into `www_92game_net_6188net_enewsmemberadd` values('11','','','','','','','','1','','','','','','','','0','221.232.174.234','1431670132','221.232.174.234','2');");

@include("../../inc/footer.php");
?>