<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewspayrecord`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewspayrecord` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `orderid` varchar(50) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '',
  `posttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paybz` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(12) NOT NULL DEFAULT '',
  `payip` varchar(20) NOT NULL DEFAULT '',
  `channelid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`,`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewspayrecord` values('1','2','test1','test1234567890','1','2015-04-29 17:33:07','购买点数: 10','alipay','','0');");
E_D("replace into `www_92game_net_6188net_enewspayrecord` values('2','2','test1','test1234567891','10','2015-04-29 18:18:03','充值类型:vip月卡','alipay','','0');");
E_D("replace into `www_92game_net_6188net_enewspayrecord` values('3','2','test1','test1234567892','10','2015-04-29 18:53:15','充值类型:vip月卡','alipay','59.174.164.71','1000');");
E_D("replace into `www_92game_net_6188net_enewspayrecord` values('4','3','2805641084','alipay290ad8bebca11a3','10','2015-04-29 22:36:52','充值类型:vip月卡','alipay','59.174.164.71','6000');");
E_D("replace into `www_92game_net_6188net_enewspayrecord` values('5','3','2805641084','alipay8bafbfd34ae206b','10','2015-04-29 22:50:26','充值类型:vip月卡','alipay','59.174.164.71','6000');");

@include("../../inc/footer.php");
?>