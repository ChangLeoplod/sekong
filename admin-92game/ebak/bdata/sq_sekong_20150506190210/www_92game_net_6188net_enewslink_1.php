<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewslink`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewslink` values('1','92工作室制作','','http://www.92game.net','2014-07-25 16:45:59','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_92game_net_6188net_enewslink` values('2','模板中心','','http://www.92game.net/mobanshangcheng/','2014-07-25 16:46:14','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_92game_net_6188net_enewslink` values('3','ak军事网','','http://akjunshi.92game.net','2014-07-25 16:46:43','0','88','31','_blank','0','','','1','0','2');");
E_D("replace into `www_92game_net_6188net_enewslink` values('4','励志一生','','http://lz13.92game.net','2014-07-25 16:47:03','0','88','31','_blank','0','','','1','0','3');");

@include("../../inc/footer.php");
?>