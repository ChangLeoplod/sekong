<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsbuybak`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsbuybak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `card_no` char(120) NOT NULL DEFAULT '',
  `buytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cardfen` int(10) unsigned NOT NULL DEFAULT '0',
  `money` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsbuybak` values('1','test1','test1234567890','2015-04-29 17:33:07','10','1','2','0','2');");
E_D("replace into `www_92game_net_6188net_enewsbuybak` values('2','test1','vip月卡','2015-04-29 18:18:03','0','10','2','30','1');");
E_D("replace into `www_92game_net_6188net_enewsbuybak` values('3','test1','vip月卡','2015-04-29 18:53:15','0','10','2','30','1');");
E_D("replace into `www_92game_net_6188net_enewsbuybak` values('4','2805641084','vip月卡','2015-04-29 22:36:52','0','10','3','30','1');");
E_D("replace into `www_92game_net_6188net_enewsbuybak` values('5','2805641084','vip月卡','2015-04-29 22:50:26','0','10','3','30','1');");

@include("../../inc/footer.php");
?>