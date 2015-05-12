<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsfile_other`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL auto_increment,
  `pubid` tinyint(1) NOT NULL default '0',
  `filename` char(60) NOT NULL default '',
  `filesize` int(10) unsigned NOT NULL default '0',
  `path` char(20) NOT NULL default '',
  `adduser` char(30) NOT NULL default '',
  `filetime` int(10) unsigned NOT NULL default '0',
  `classid` tinyint(1) NOT NULL default '0',
  `no` char(60) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `onclick` mediumint(8) unsigned NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `cjid` int(10) unsigned NOT NULL default '0',
  `fpath` tinyint(1) NOT NULL default '0',
  `modtype` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('1','0','fce8d54f3fbcc137150a503a1b782ee8.jpg','44474','2014-07-26','92game','1406354070','0','1.jpg','1','0','1','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('2','0','551af60cf171c8ba1689ae6ec470af8c.jpg','42726','2014-07-26','92game','1406354153','0','1.jpg','1','0','2','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('3','0','a7bfdfb53dc842433b5cac8cfdc762d3.jpg','37469','2014-07-26','92game','1406354261','0','1.jpg','1','0','3','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('4','0','5c1f1f18a8aa0e1d59451d7d6453c9c6.jpg','77772','2014-07-26','92game','1406354350','0','1.jpg','1','0','4','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('5','0','a638b1ae1014d1a90cd234186dfbdc1f.jpg','56133','2014-07-26','92game','1406354415','0','1.jpg','1','0','5','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('6','0','c3b5e2a1e92b0667a7d0f8ea3c3379ff.jpg','516430','2014-07-26','92game','1406354516','0','1.jpg','1','0','6','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('7','0','63ef7926ed413beb46125942b1d94356.jpg','55267','2014-07-26','92game','1406354637','0','1.jpg','1','0','7','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('8','0','b02285040cbd2259564f10ffb88ab6e5.jpg','57046','2014-07-26','92game','1406354844','0','1.jpg','1','0','8','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('9','0','5f60297696c82b9521834bb9216cadac.jpg','90059','2014-07-26','92game','1406354948','0','1.jpg','1','0','9','0','0','2');");
E_D("replace into `www_92game_net_6188net_enewsfile_other` values('10','0','d9e01eef28eca223cae64a3cf82328c9.jpg','70675','2014-07-26','92game','1406355039','0','1.jpg','1','0','10','0','0','2');");

@include("../../inc/footer.php");
?>