<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsclass`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL auto_increment,
  `bclassid` smallint(5) unsigned NOT NULL default '0',
  `classname` varchar(50) NOT NULL default '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL default '0',
  `lencord` smallint(6) NOT NULL default '0',
  `link_num` tinyint(4) NOT NULL default '0',
  `newstempid` smallint(6) NOT NULL default '0',
  `onclick` int(11) NOT NULL default '0',
  `listtempid` smallint(6) NOT NULL default '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL default '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL default '',
  `newspath` varchar(20) NOT NULL default '',
  `filename` tinyint(1) NOT NULL default '0',
  `filetype` varchar(10) NOT NULL default '',
  `openpl` tinyint(1) NOT NULL default '0',
  `openadd` tinyint(1) NOT NULL default '0',
  `newline` int(11) NOT NULL default '0',
  `hotline` int(11) NOT NULL default '0',
  `goodline` int(11) NOT NULL default '0',
  `classurl` varchar(200) NOT NULL default '',
  `groupid` smallint(6) NOT NULL default '0',
  `myorder` smallint(6) NOT NULL default '0',
  `filename_qz` varchar(20) NOT NULL default '',
  `hotplline` tinyint(4) NOT NULL default '0',
  `modid` smallint(6) NOT NULL default '0',
  `checked` tinyint(1) NOT NULL default '0',
  `firstline` tinyint(4) NOT NULL default '0',
  `bname` varchar(50) NOT NULL default '',
  `islist` tinyint(1) NOT NULL default '0',
  `searchtempid` smallint(6) NOT NULL default '0',
  `tid` smallint(6) NOT NULL default '0',
  `tbname` varchar(60) NOT NULL default '',
  `maxnum` int(11) NOT NULL default '0',
  `checkpl` tinyint(1) NOT NULL default '0',
  `down_num` tinyint(4) NOT NULL default '0',
  `online_num` tinyint(4) NOT NULL default '0',
  `listorder` varchar(50) NOT NULL default '',
  `reorder` varchar(50) NOT NULL default '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL default '',
  `jstempid` smallint(6) NOT NULL default '0',
  `addinfofen` int(11) NOT NULL default '0',
  `listdt` tinyint(1) NOT NULL default '0',
  `showclass` tinyint(1) NOT NULL default '0',
  `showdt` tinyint(1) NOT NULL default '0',
  `checkqadd` tinyint(1) NOT NULL default '0',
  `qaddlist` tinyint(1) NOT NULL default '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL default '0',
  `adminqinfo` tinyint(1) NOT NULL default '0',
  `doctime` smallint(6) NOT NULL default '0',
  `classpagekey` varchar(255) NOT NULL default '',
  `dtlisttempid` smallint(6) NOT NULL default '0',
  `classtempid` smallint(6) NOT NULL default '0',
  `nreclass` tinyint(1) NOT NULL default '0',
  `nreinfo` tinyint(1) NOT NULL default '0',
  `nrejs` tinyint(1) NOT NULL default '0',
  `nottobq` tinyint(1) NOT NULL default '0',
  `ipath` varchar(255) NOT NULL default '',
  `addreinfo` tinyint(1) NOT NULL default '0',
  `haddlist` tinyint(4) NOT NULL default '0',
  `sametitle` tinyint(1) NOT NULL default '0',
  `definfovoteid` smallint(6) NOT NULL default '0',
  `wburl` varchar(255) NOT NULL default '',
  `qeditchecked` tinyint(1) NOT NULL default '0',
  `wapstyleid` smallint(6) NOT NULL default '0',
  `repreinfo` tinyint(1) NOT NULL default '0',
  `pltempid` smallint(6) NOT NULL default '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL default '0',
  `wfid` smallint(6) NOT NULL default '0',
  `cgtoinfo` tinyint(1) NOT NULL default '0',
  `bdinfoid` varchar(25) NOT NULL default '',
  `repagenum` smallint(5) unsigned NOT NULL default '0',
  `keycid` smallint(6) NOT NULL default '0',
  `allinfos` int(10) unsigned NOT NULL default '0',
  `infos` int(10) unsigned NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsclass` values('1','0','明星美女','','0','20','5','1','0','1','','1','mingxingmeinv','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','明星美女','0','0','1','news','0','1','2','2','id DESC','newstime DESC','明星美女','','1','0','0','0','0','0','0',',2,','1','0','0','明星美女','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','310','310','1406180360');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('2','0','清纯美女','','0','20','5','1','0','1','','1','qingchunmeinv','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','清纯美女','0','0','1','news','0','1','2','2','id DESC','newstime DESC','清纯美女','','1','0','0','0','0','0','0',',2,','1','0','0','清纯美女','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','301','301','1406180382');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('3','0','高清美女','','0','20','5','1','0','1','','1','gaoqingmeinv','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','高清美女','0','0','1','news','0','1','2','2','id DESC','newstime DESC','高清美女','','1','0','0','0','0','0','0',',2,','1','0','0','高清美女','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','387','387','1406180402');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('4','0','性感美女','','0','20','5','1','0','1','','1','xingganmeinv','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','性感美女','0','0','1','news','0','1','2','2','id DESC','newstime DESC','性感美女','','1','0','0','0','0','0','0',',2,','1','0','0','性感美女','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','425','425','1406180432');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('5','0','性感车模','','0','20','5','1','0','1','','1','xingganchemo','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','性感车模','0','0','1','news','0','1','2','2','id DESC','newstime DESC','性感车模','','1','0','0','0','0','0','0',',2,','1','0','0','性感车模','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','171','171','1406180450');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('6','0','美女自拍','','0','20','5','1','0','1','','1','meinvzipai','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','美女自拍','0','0','1','news','0','1','2','2','id DESC','newstime DESC','美女自拍','','1','0','0','0','0','0','0',',2,','1','0','0','美女自拍','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','391','391','1406180468');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('7','0','秀人模特','','0','20','5','1','0','1','','1','xiurenmote','.html','','0','.html','1','0','10','10','10','','0','0','','10','1','1','10','秀人模特','0','0','1','news','0','1','2','2','id DESC','newstime DESC','秀人模特','','1','0','0','0','0','0','0',',2,','1','0','0','秀人模特','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','164','164','1406180490');");

@include("../../inc/footer.php");
?>