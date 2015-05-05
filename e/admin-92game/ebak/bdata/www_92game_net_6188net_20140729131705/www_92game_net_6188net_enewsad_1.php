<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsad`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsad` (
  `adid` int(10) unsigned NOT NULL auto_increment,
  `picurl` varchar(255) NOT NULL default '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL default '0',
  `pic_height` int(10) unsigned NOT NULL default '0',
  `onclick` int(10) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `adtype` tinyint(3) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `target` varchar(10) NOT NULL default '',
  `alt` varchar(120) NOT NULL default '',
  `starttime` date NOT NULL default '0000-00-00',
  `endtime` date NOT NULL default '0000-00-00',
  `adsay` varchar(255) NOT NULL default '',
  `titlefont` varchar(14) NOT NULL default '',
  `titlecolor` varchar(10) NOT NULL default '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL default '0',
  `ylink` tinyint(1) NOT NULL default '0',
  `reptext` text NOT NULL,
  PRIMARY KEY  (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsad` values('1','','','960','60','0','1','1','通栏广告位960*90','','','2014-07-25','2024-08-24','','','','<center><div style=\"height: 90px;\r\nwidth: 960px;\r\nborder: 1px dashed #FFF;\r\nbackground-color: #FFF;\">&nbsp; id_1广告位-960*90</div></center>\r\n','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('2','','','960','60','0','1','1','通栏广告位960*60','','','2014-07-25','2024-08-24','','','','<center><div style=\"height: 90px;\r\nwidth: 960px;\r\nborder: 1px dashed #FFF;\r\nbackground-color: #FFF;\">&nbsp; id_2广告位-960*90</div></center>','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('3','','','960','60','0','1','1','通栏么广告位960*60','','','2014-07-25','2024-08-24','','','','<center><div style=\"height: 90px;\r\nwidth: 960px;\r\nborder: 1px dashed #FFF;\r\nbackground-color: #FFF;\">&nbsp; id_3广告位-960*90</div></center>','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('4','','','468','60','0','1','1','内容页百度图片关联广告位','','','2014-07-26','2024-08-25','','','','','2','0','<script>   \r\nvar baiduImagePlus = {\r\n    unionId: \"u1578531\" \r\n}; \r\n/*\r\n(function() {\r\n    var s = document.createElement(\"script\");\r\n    s.charset = ''gbk''; \r\n    s.async = true; \r\n    s.type = \"text/javascript\"; \r\n    s.src = \"http://ecma.bdimg.com/public03/imageplus/common_loader.js?cache=\" + Math.ceil(new Date() / 3600000);\r\n    document.getElementsByTagName(\"head\")[0].appendChild(s);\r\n})(); */\r\n\r\n(function() {\r\n var sssss = document.createElement(''script'');\r\nsssss.type = ''text/javascript''; \r\nsssss.src = ''http://ecma.bdimg.com/public03/imageplus/common_loader.js?cache='' + Math.ceil(new Date() / 3600000);\r\ndocument.getElementsByTagName(''head'')[0].appendChild(sssss);\r\n})(); \r\n\r\n\r\n\r\n</script>');");
E_D("replace into `www_92game_net_6188net_enewsad` values('5','','','468','60','0','1','1','全站对联广告位','','','2014-07-26','2024-08-25','','','','','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('6','','','935','20','0','1','1','内容页图片下文字广告位','','','2014-07-26','2024-08-25','','','','<div style=\"height: 20px;\r\nwidth: 933px;\r\nborder: 1px dashed #FFF;\r\nbackground-color: #FFF;\">&nbsp; id_6广告位-935*20</div>','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('7','','','300','250','0','1','1','专题页300×250广告位','','','2014-07-26','2024-08-25','','','','<div style=\"height: 250px;\r\nwidth: 298px;\r\nborder: 1px dashed #FFF;\r\nbackground-color: #FFF;\">&nbsp; id_7广告位-300*250</div>','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('8','','','300','250','0','1','1','专题页300×250广告位','','','2014-07-26','2024-08-25','','','','<div style=\"height: 250px;\r\nwidth: 298px;\r\nborder: 1px dashed #18C2C8;\r\nbackground-color: #FFF;\">&nbsp; id_8广告位-300*250</div>','2','0','');");
E_D("replace into `www_92game_net_6188net_enewsad` values('9','','','300','250','0','1','1','专题页300×250广告位','','','2014-07-26','2024-08-25','','','','<div style=\"height: 250px;\r\nwidth: 298px;\r\nborder: 1px dashed #18C2C8;\r\nbackground-color: #FFF;\">&nbsp; id_9广告位-300*250</div>','2','0','');");

@include("../../inc/footer.php");
?>