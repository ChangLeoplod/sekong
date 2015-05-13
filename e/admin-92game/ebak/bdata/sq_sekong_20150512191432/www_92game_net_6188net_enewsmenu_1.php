<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsmenu`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsmenu` (
  `menuid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuname` varchar(60) NOT NULL DEFAULT '',
  `menuurl` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuid`),
  KEY `myorder` (`myorder`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsmenu` values('1','购买源码','http://www.92game.net/?6188','0','1');");
E_D("replace into `www_92game_net_6188net_enewsmenu` values('2','源码例表','http://www.92game.net/mobanshangcheng/?6188','0','1');");

@include("../../inc/footer.php");
?>