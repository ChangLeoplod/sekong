<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewspubvar`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL auto_increment,
  `myvar` varchar(60) NOT NULL default '',
  `varname` varchar(20) NOT NULL default '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL default '',
  `myorder` smallint(5) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `tocache` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('1','www.92game.net.ming','网站名','92美图','变量名不可修改','0','0','1');");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('2','www_92game_net_domaind','不带www域名','92game.net','变量名不可修改','0','0','1');");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('3','www.92game.net.url','不带http://','6188.92game.net','变量名不可修改','0','0','1');");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('4','www_92game_net_yzm','验证码','42b8c53a274538934373ccce7fb392f7','变量名不可修改','0','0','1');");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('5','www.92game.net.tongji','统计代码','统计代码','变量名不可修改','0','0','1');");
E_D("replace into `www_92game_net_6188net_enewspubvar` values('6','www.92game.net.beian','备案号','苏ICP备 11030476号-1','变量名不可修改','0','0','1');");

@include("../../inc/footer.php");
?>