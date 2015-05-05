<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsuserloginck`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('1','e467321dc4d54180f0ac6a69e33d6261');");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('2','990f397f1b1fe958ecc10f7f8db14102');");

@include("../../inc/footer.php");
?>