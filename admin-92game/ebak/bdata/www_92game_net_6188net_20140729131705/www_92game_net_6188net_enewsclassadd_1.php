<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsclassadd`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL default '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('1','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('2','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('3','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('4','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('5','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('6','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('7','','');");

@include("../../inc/footer.php");
?>