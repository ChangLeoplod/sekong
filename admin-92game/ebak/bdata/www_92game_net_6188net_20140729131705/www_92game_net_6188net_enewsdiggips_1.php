<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsdiggips`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL default '0',
  `id` int(11) NOT NULL default '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>