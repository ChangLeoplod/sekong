<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsadminstyle`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsadminstyle` (
  `styleid` smallint(5) unsigned NOT NULL auto_increment,
  `stylename` char(30) NOT NULL default '',
  `path` smallint(5) unsigned NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsadminstyle` values('1','管理员后台界面','1','1');");
E_D("replace into `www_92game_net_6188net_enewsadminstyle` values('2','编辑后台界面','2','0');");

@include("../../inc/footer.php");
?>