<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsbefrom`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsbefrom` (
  `befromid` smallint(5) unsigned NOT NULL auto_increment,
  `sitename` char(60) NOT NULL default '',
  `siteurl` char(200) NOT NULL default '',
  PRIMARY KEY  (`befromid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>