<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewswapstyle`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewswapstyle` (
  `styleid` smallint(5) unsigned NOT NULL auto_increment,
  `stylename` varchar(60) NOT NULL default '',
  `path` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewswapstyle` values('1','新闻模板','1');");
E_D("replace into `www_92game_net_6188net_enewswapstyle` values('2','分类信息模板','2');");

@include("../../inc/footer.php");
?>