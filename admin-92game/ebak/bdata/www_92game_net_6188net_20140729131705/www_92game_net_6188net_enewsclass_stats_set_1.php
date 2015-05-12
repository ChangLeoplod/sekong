<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsclass_stats_set`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsclass_stats_set` (
  `openstats` tinyint(1) NOT NULL default '0',
  `pvtime` int(10) unsigned NOT NULL default '0',
  `statsdate` int(10) unsigned NOT NULL default '0',
  `changedate` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsclass_stats_set` values('1','3600','0','0');");

@include("../../inc/footer.php");
?>