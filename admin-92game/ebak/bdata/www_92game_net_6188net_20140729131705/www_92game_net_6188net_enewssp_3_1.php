<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewssp_3`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewssp_3` (
  `sid` int(10) unsigned NOT NULL auto_increment,
  `spid` int(10) unsigned NOT NULL default '0',
  `sptext` mediumtext NOT NULL,
  PRIMARY KEY  (`sid`),
  UNIQUE KEY `spid` (`spid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>