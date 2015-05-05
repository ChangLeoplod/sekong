<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsdownrecord`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsdownrecord` (
  `id` int(11) NOT NULL DEFAULT '0',
  `pathid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(120) NOT NULL DEFAULT '',
  `cardfen` int(11) NOT NULL DEFAULT '0',
  `truetime` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  KEY `userid` (`userid`),
  KEY `truetime` (`truetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1837','0','1','abcxiaoku','邻家妹妹清纯美女生活写真','10','1429632294','2','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1833','0','1','abcxiaoku','夏至户外林琳君写真','100','1429633695','2','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('2149','0','1','abcxiaoku','性感身姿内衣诱惑','100','1429634006','4','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('2147','0','1','abcxiaoku','人面若桃花的巨乳诱惑','100','1429636071','4','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1822','0','1','abcxiaoku','清纯女仆小美女','30','1429641355','2','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1821','0','1','abcxiaoku','桃色美女午后私房秀','10','1429641916','2','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1820','0','1','abcxiaoku','白雪公主私房气质写真','20','1429642663','2','2');");
E_D("replace into `www_92game_net_6188net_enewsdownrecord` values('1818','0','1','abcxiaoku','可爱小萝莉唯美写真','20','1429642980','2','2');");

@include("../../inc/footer.php");
?>