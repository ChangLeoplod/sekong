<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewspicclass`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewspicclass` (
  `classid` smallint(5) unsigned NOT NULL auto_increment,
  `classname` varchar(60) NOT NULL default '',
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewspicclass` values('1','默认图片信息类别');");

@include("../../inc/footer.php");
?>