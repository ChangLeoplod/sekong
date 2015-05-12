<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewssearchtemp`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL auto_increment,
  `tempname` varchar(60) NOT NULL default '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL default '0',
  `modid` smallint(6) NOT NULL default '0',
  `showdate` varchar(50) NOT NULL default '',
  `subtitle` smallint(6) NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `docode` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewssearchtemp` values('1','默认搜索模板',' \r\n<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--keyboard--] 搜索结果-<?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n\r\n<link href=\\\\\"/templets/ye/css/6188_public.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_style.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script src=\\\\\"/templets/ye/css/jquery-1.4.4.min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/6188_new.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/da.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n</head>\r\n\r\n<body>\r\n  <div class=\\\\\"header\\\\\">\r\n[!--temp.qtheader--]\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 ad\\\\\">\r\n<script src=\\\\\"/d/js/acmsd/thea1.js\\\\\"></script>\r\n</div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000\\\\\">\r\n    <div class=\\\\\"position\\\\\"><a href=\\\\''/\\\\'' >主页</a> >> 搜索[!--keyboard--]结果</div>\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box03\\\\\">\r\n  <ul class=\\\\\"product01\\\\\">\r\n        [!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n[!--empirenews.listtemp--]\r\n  </ul>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"page\\\\\">[!--show.page--]</div>\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  \r\n  \r\n    [!--temp.footer--]\r\n</body>\r\n</html>\r\n','180','1','<li><a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"pic\\\\\" target=\\\\\"_Blank\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" width=\\\\\"184\\\\\" height=\\\\\"274\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"/> \r\n<p>[!--title--]</p></a>\r\n</li>','1','1','Y-m-d','24','0','0');");

@include("../../inc/footer.php");
?>