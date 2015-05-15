<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsclass`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsclass` values('10','0','丝袜美腿','','0','25','10','1','0','1','','1','siwameitui','.html','Ym','0','.html','0','0','10','10','10','','0','2','','10','1','1','10','丝袜翘臀','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','354','354','1429627559');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('2','0','小清新','','0','20','5','1','0','1','','1','qingchunmeinv','.html','Ym','0','.html','1','0','10','10','10','','0','8','','10','1','1','10','小清新','0','0','1','news','0','1','2','2','id DESC','newstime DESC','小清新','','1','0','0','0','0','0','0',',2,','1','0','0','小清新','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','301','301','1406180382');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('4','0','性感美女','','0','20','5','1','0','1','','1','xingganmeinv','.html','Ym','0','.html','1','0','10','10','10','','0','1','','10','1','1','10','性感美女','0','0','1','news','0','1','2','2','id DESC','newstime DESC','性感美女','','1','0','0','0','0','0','0',',2,','1','0','0','性感美女','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','656','656','1406180432');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('14','0','福利视频','','0','25','10','1','0','1','','1','fulishipin','.html','Ym','0','.html','0','0','10','10','10','','0','4','','10','1','1','10','福利视频','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','38','38','1429627886');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('7','0','嫩模写真','','0','20','5','1','0','1','','1','xiurenmote','.html','','0','.html','1','0','10','10','10','','0','10','','10','1','1','10','嫩模写真','0','0','1','news','0','1','2','2','id DESC','newstime DESC','嫩模写真','','1','0','0','0','0','0','0',',2,','1','0','0','嫩模写真','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','284','284','1406180490');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('8','0','邪恶GIF','','0','25','10','1','0','1','','1','xieeGIF','.html','Ym','0','.html','0','0','10','10','10','','0','3','','10','1','1','10','邪恶GIF','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','384','384','1429112545');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('17','0','高清视频','','0','25','10','1','0','1','','1','gaoqingshipin','.html','Ym','0','.html','0','0','10','10','10','','0','5','','10','1','1','10','高清视频','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1430234334');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('12','0','嫩模私拍','','0','25','10','1','0','1','','1','nenmosipai','.php','Ym','0','.html','0','0','10','10','10','','0','6','','10','1','1','10','嫩模私拍','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','192','192','1429627626');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('13','0','高清私拍','','0','25','10','1','0','1','','1','gaoqingsipai','.html','Ym','0','.html','0','0','10','10','10','','0','7','','10','1','1','10','高清私拍','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','2','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','95','95','1429627860');");
E_D("replace into `www_92game_net_6188net_enewsclass` values('11','0','波涛汹涌','','0','25','10','1','0','1','','1','botaoxiongyong','.html','Ym','0','.html','0','0','10','10','10','','0','9','','10','1','1','10','波涛汹涌','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','289','289','1429627606');");

@include("../../inc/footer.php");
?>