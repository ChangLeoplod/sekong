<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsdolog`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsdolog` (
  `logid` bigint(20) NOT NULL auto_increment,
  `logip` varchar(20) NOT NULL default '',
  `logtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL default '',
  `enews` varchar(30) NOT NULL default '',
  `doing` varchar(255) NOT NULL default '',
  `pubid` bigint(16) unsigned NOT NULL default '0',
  PRIMARY KEY  (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsdolog` values('1','221.206.118.202','2014-07-29 13:10:08','92game','EmptyTable','dbname=sq_6188net','0');");
E_D("replace into `www_92game_net_6188net_enewsdolog` values('2','221.206.118.202','2014-07-29 13:10:13','92game','DoRep','dbname=sq_6188net','0');");
E_D("replace into `www_92game_net_6188net_enewsdolog` values('3','221.206.118.202','2014-07-29 13:10:16','92game','DoOpi','dbname=sq_6188net','0');");
E_D("replace into `www_92game_net_6188net_enewsdolog` values('4','221.206.118.202','2014-07-29 13:16:50','92game','BakExe','dbname=sq_6188net','0');");
E_D("replace into `www_92game_net_6188net_enewsdolog` values('5','210.209.85.210','2014-07-29 13:17:00','92game','login','---','0');");

@include("../../inc/footer.php");
?>