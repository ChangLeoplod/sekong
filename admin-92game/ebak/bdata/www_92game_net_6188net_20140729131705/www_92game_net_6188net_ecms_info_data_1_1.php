<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_ecms_info_data_1`;");
E_C("CREATE TABLE `www_92game_net_6188net_ecms_info_data_1` (
  `id` int(10) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `keyid` varchar(255) NOT NULL default '',
  `dokey` tinyint(1) NOT NULL default '0',
  `newstempid` smallint(5) unsigned NOT NULL default '0',
  `closepl` tinyint(1) NOT NULL default '0',
  `haveaddfen` tinyint(1) NOT NULL default '0',
  `infotags` varchar(80) NOT NULL default '',
  `email` varchar(80) NOT NULL default '',
  `mycontact` varchar(255) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>