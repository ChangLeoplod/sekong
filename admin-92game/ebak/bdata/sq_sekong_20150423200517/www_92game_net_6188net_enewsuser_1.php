<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsuser`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsuser` values('1','92game','912c70a3a4229b8d124c6fbfbd4338c4','ZuFyWZBJWw45aaPjjcDC','|','1','0','1','0','9pNJswYu','116','1429790626','58.49.51.38','','','0','1429789141','180.142.151.163','1406180154','127.0.0.1','N5WZzGMzaaAFMTmPdHLETqHiPgEKfuXTgi4E7thLVMdkgYpv');");
E_D("replace into `www_92game_net_6188net_enewsuser` values('2','demo','39616234f8a8a8c0cdec638502842e8e','Sq6ZPqEuyGWuvT87QSrG','|','1','0','1','0','aP9ED7BS','1','1406604482','210.209.85.210','','','0','0','','1406511385','127.0.0.1','MVHpf3L33EJ5hiYWFELA2P3u2ruVVtxVciLBTkJhvupaTSH2');");

@include("../../inc/footer.php");
?>