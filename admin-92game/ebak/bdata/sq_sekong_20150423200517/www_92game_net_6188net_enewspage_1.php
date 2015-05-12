<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewspage`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewspage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewspage` values('1','RSS地图','<?=\\\\''<?xml version=\\\\\"1.0\\\\\" encoding=\\\\\"utf-8\\\\\"?>\\\\''?>\r\n\r\n<rss version=\\\\\"2.0\\\\\">\r\n  <channel>\r\n    <title><?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n    <link>http://<?=\$public_r[\\\\''add_www.92game.net.url\\\\'']?>/</link>\r\n    <description>Latest 50 infos of <?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></description>\r\n    <copyright>Copyright(C) <?=\$public_r[\\\\''add_www.92game.net.url\\\\'']?></copyright>\r\n    <lastBuildDate><?=gmdate(\\\\''r\\\\'',time())?></lastBuildDate>\r\n    <ttl>60</ttl>\r\n[e:loop={\\\\\"select * from [!db.pre!]ecms_news order by newstime desc limit 50\\\\\",0,24,0}]\r\n <item>\r\n      <title><![CDATA[<?=\$bqr[title]?>]]></title>\r\n      <description><![CDATA[ <?=\$bqr[smalltext]?>]]></description>\r\n      <link>http://<?=\$public_r[\\\\''add_www.92game.net.url\\\\'']?><?=\$bqr[titleurl]?></link>\r\n      <guid>http://<?=\$public_r[\\\\''add_www.92game.net.url\\\\'']?><?=\$bqr[titleurl]?></guid>\r\n      <category><?=\$class_r[\$bqr[classid]][\\\\''classname\\\\''] ?></category>\r\n      <author><![CDATA[<?=\$bqr[writer]?>]]></author>\r\n      <pubDate><?=gmdate(\\\\''r\\\\'',\$bqr[\\\\''newstime\\\\''])?></pubDate>\r\n    </item>\r\n[/e:loop]\r\n  </channel>\r\n</rss>','../../rss.xml','0','','','','0');");

@include("../../inc/footer.php");
?>