<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewssql`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewssql` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `sqlname` varchar(60) NOT NULL default '',
  `sqltext` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>