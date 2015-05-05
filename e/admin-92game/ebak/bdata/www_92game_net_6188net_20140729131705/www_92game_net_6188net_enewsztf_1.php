<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsztf`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsztf` (
  `fid` smallint(5) unsigned NOT NULL auto_increment,
  `f` varchar(30) NOT NULL default '',
  `fname` varchar(30) NOT NULL default '',
  `fform` varchar(20) NOT NULL default '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL default '',
  `myorder` smallint(5) unsigned NOT NULL default '0',
  `ftype` varchar(30) NOT NULL default '',
  `flen` varchar(20) NOT NULL default '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL default '',
  PRIMARY KEY  (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsztf` values('1','guanyu','简介','textarea','\r\n<textarea name=\\\\\"guanyu\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"guanyu\\\\\"><?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[guanyu])?></textarea>\r\n','','0','TEXT','','','');");

@include("../../inc/footer.php");
?>