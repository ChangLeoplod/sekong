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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('3','c639f4132b7cb8878aa154b6ba36e025');");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('2','990f397f1b1fe958ecc10f7f8db14102');");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('1','0ea3acb24b42786e2cf0a1e0fb997ab5');");
E_D("replace into `www_92game_net_6188net_enewsuserloginck` values('4','48bd40eb5831b27f3721ef07b1d8ccdf');");

@include("../../inc/footer.php");
?>