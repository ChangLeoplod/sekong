<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsloginfail`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsloginfail` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsloginfail` values('111.175.7.248','2','1429283108');");
E_D("replace into `www_92game_net_6188net_enewsloginfail` values('59.174.168.166','2','1429284414');");

@include("../../inc/footer.php");
?>