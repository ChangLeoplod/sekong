<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsmember`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsmember` values('1','abcxiaoku','adc2080ba1c87362b0fffed7e17302bd','PFPZnTJaj8nPcREfXDzy','adfs@ddd.com','1429096126','1','10','0','0.00','0','0','1','CbgTYg','zPZa7JPyggLD');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('2','test1','69058a04870d509c8d3afdc9fc40dcef','ht7Q4kG7di68eh2Tv7VW','','1429875160','2','10','1435486683','0.00','1','0','1','jBSKz5','xLPnMxA7DBuq');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('3','2805641084','f2c589a51c972e1bfbfd8a9cbfad9177','zzzzzzzzzzzzzzzzzzzz','','1429982284','2','0','1435502212','0.00','1','0','1','PebE8A','SJNLDLCs5ZvG');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('4','1893761673','5c3ee3b3307aa440da3202c9dc842fd3','55555555555555555555','','1431481393','2','0','1434079271','0.00','1','0','1','hhhhhh','hhhhhhhhhhhh');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('5','10000Peter','ca359f55f25f8d7a51941f701c91728c','tttttttttttttttttttt','','1431507932','1','0','0','0.00','0','0','1','YYYYYY','YYYYYYYYYYYY');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('6','10000小新','2f16359733292907eed81228aeb158c3','CCCCCCCCCCCCCCCCCCCd','','1431512656','2','0','1434178536','0.00','1','0','1','ddddww','dddddddddddd');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('7','10000pconline武汉','14bc9b26901f75d2bdf61061f9886472','FFFFFFFFFFFHHHHHHHHH','','1431586686','1','0','0','0.00','0','0','1','yyyyyy','KKKKKKKKKKKK');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('8','11310128-76-6570','38b380fffa50d38e990bf215b75654aa','222222222222222222YY','','1431589066','1','0','0','0.00','0','0','1','wwqqqq','wwwwwwwwwwww');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('9','111-87912039-811','00be0bd7838ef0d4a65e8982f3f4bc97','EEEEEEEEEEEEEEEEEEEE','','1431590855','1','0','0','0.00','0','0','1','UUUUUU','2222UUUUUUUU');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('10','10000黑羽','5c236bc5add19fa696f406a13ea18961','4444444444xxxxxxxxxx','','1431661781','1','0','0','0.00','0','0','1','pppppp','HHHHHppppppp');");
E_D("replace into `www_92game_net_6188net_enewsmember` values('11','384-87-1397-75-2','5357bc4ad76ec7e9c341eba2e129bf3e','iiiiiiiiiiiiiiiiiiii','','1431669283','1','0','0','0.00','0','0','1','GGGGGG','GGGGGGGGGGGG');");

@include("../../inc/footer.php");
?>