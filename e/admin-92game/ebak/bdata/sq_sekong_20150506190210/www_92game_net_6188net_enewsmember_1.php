<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsmember`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsmember` values('1','abcxiaoku','adc2080ba1c87362b0fffed7e17302bd','PFPZnTJaj8nPcREfXDzy','adfs@ddd.com','1429096126','1','10','0','0.00','0','0','1','CbgTYg','zPZa7JPyggLD');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('2','test1','69058a04870d509c8d3afdc9fc40dcef','ht7Q4kG7di68eh2Tv7VW','','1429875160','2','10','1435486683','0.00','1','0','1','jBSKz5','xLPnMxA7DBuq');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('3','2805641084','f2c589a51c972e1bfbfd8a9cbfad9177','epFbzbNQs88vM7Ja5gCv','','1429982284','2','0','1435502212','0.00','1','0','1','PebE8A','SJNLDLCs5ZvG');");

@include("../../inc/footer.php");
?>