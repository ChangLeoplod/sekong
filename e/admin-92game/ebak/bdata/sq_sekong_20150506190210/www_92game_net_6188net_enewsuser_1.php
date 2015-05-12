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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsuser` values('1','92game','912c70a3a4229b8d124c6fbfbd4338c4','kjygnLYfy3n75RQWfR3Z','|','1','0','1','0','9pNJswYu','143','1430176435','111.175.165.8','','','0','1429891948','59.174.164.71','1406180154','127.0.0.1','N5WZzGMzaaAFMTmPdHLETqHiPgEKfuXTgi4E7thLVMdkgYpv');");
E_D("replace into `www_92game_net_6188net_enewsuser` values('4','jianlin','2f3b7ba68d1f01c19e8f9dbc507ac1c1','n5LnPSYz9uB6TwSWh9GZ','|','1','0','1','0','3ryfw32q','5','1430840341','58.48.31.5','','','0','1430126155','59.174.164.71','1429982308','58.49.51.38','UuUuyrB7shjwhzrQispt3xqsj7JUYNCxnk3z5TthYKCSxDzq');");
E_D("replace into `www_92game_net_6188net_enewsuser` values('3','xiaoku','20d8888a9ae4f7bd3c6ff59f448cab55','vKcESHsBSHAXnxaH4sgq','|','1','0','1','0','8FqFuHTJ','33','1430910096','27.19.172.178','','','0','1430838735','27.19.172.178','1429812694','58.49.51.38','A9vSk8skwuSxFjJWyNBKTNqPqkENdvNY5chgA6RMikTw3N3S');");

@include("../../inc/footer.php");
?>