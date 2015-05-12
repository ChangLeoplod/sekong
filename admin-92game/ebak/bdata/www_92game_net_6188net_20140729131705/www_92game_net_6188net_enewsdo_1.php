<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsdo`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsdo` (
  `doid` smallint(5) unsigned NOT NULL auto_increment,
  `doname` varchar(60) NOT NULL default '',
  `dotime` smallint(6) NOT NULL default '0',
  `isopen` tinyint(1) NOT NULL default '0',
  `doing` tinyint(4) NOT NULL default '0',
  `classid` text NOT NULL,
  `lasttime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`doid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsdo` values('1','自动刷新首页','12','0','0',',','1273215883');");

@include("../../inc/footer.php");
?>