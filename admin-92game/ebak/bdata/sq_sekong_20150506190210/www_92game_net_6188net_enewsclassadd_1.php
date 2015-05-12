<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsclassadd`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('10','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('2','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('11','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('4','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('12','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('7','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('8','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('17','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('13','','');");
E_D("replace into `www_92game_net_6188net_enewsclassadd` values('14','','');");

@include("../../inc/footer.php");
?>