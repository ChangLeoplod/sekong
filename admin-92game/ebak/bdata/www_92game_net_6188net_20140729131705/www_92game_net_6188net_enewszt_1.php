<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewszt`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewszt` (
  `ztid` smallint(5) unsigned NOT NULL auto_increment,
  `ztname` varchar(60) NOT NULL default '',
  `onclick` int(10) unsigned NOT NULL default '0',
  `ztnum` tinyint(3) unsigned NOT NULL default '0',
  `listtempid` smallint(5) unsigned NOT NULL default '0',
  `ztpath` varchar(255) NOT NULL default '',
  `zttype` varchar(10) NOT NULL default '',
  `zturl` varchar(200) NOT NULL default '',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `islist` tinyint(1) NOT NULL default '0',
  `maxnum` int(11) NOT NULL default '0',
  `reorder` varchar(50) NOT NULL default '',
  `intro` text NOT NULL,
  `ztimg` varchar(255) NOT NULL default '',
  `zcid` smallint(5) unsigned NOT NULL default '0',
  `showzt` tinyint(1) NOT NULL default '0',
  `ztpagekey` varchar(255) NOT NULL default '',
  `classtempid` smallint(5) unsigned NOT NULL default '0',
  `myorder` smallint(5) unsigned NOT NULL default '0',
  `usezt` tinyint(1) NOT NULL default '0',
  `yhid` smallint(5) unsigned NOT NULL default '0',
  `endtime` int(10) unsigned NOT NULL default '0',
  `closepl` tinyint(1) NOT NULL default '0',
  `checkpl` tinyint(1) NOT NULL default '0',
  `restb` tinyint(3) unsigned NOT NULL default '0',
  `usernames` varchar(255) NOT NULL default '',
  `addtime` int(10) unsigned NOT NULL default '0',
  `pltempid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`ztid`),
  KEY `classid` (`classid`),
  KEY `zcid` (`zcid`),
  KEY `usezt` (`usezt`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewszt` values('1','古典美女','0','12','3','s/gudianmeinv','.html','/s/gudianmeinv/','0','1','0','newstime DESC','本专题收录了各种清新古典美女，如汉服，旗袍，和服，韩服等；清新亮丽的古典装扮迷人眼球。','/d/file/p/2014-07-26/fce8d54f3fbcc137150a503a1b782ee8.jpg','0','0','古装美女,清新淡雅,典雅气质','1','0','0','0','0','1','0','1','','1406353902','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('2','王馨瑶yanni','0','12','3','s/wangyaoyanni','.html','/s/wangyaoyanni/','0','1','0','newstime DESC','本专题收录了王馨瑶yanni的漂亮、性感的写真集；王馨瑶，2012年获得世界旅游小姐大赛广东赛区季军，职业：演员，推女郎模特。','/d/file/p/2014-07-26/551af60cf171c8ba1689ae6ec470af8c.jpg','0','0','王馨瑶yanni,王馨瑶','1','0','0','0','0','1','0','1','','1406354199','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('3','长腿美女写真','0','12','3','s/changtuimeinvxiezhen','.html','/s/changtuimeinvxiezhen/','0','1','0','newstime DESC','腿模，顾名思义以美腿写真为主的各类美女写真，纤细的美腿穿上各种好看的丝袜，绝对扣人心弦，，再陪上或清纯或成熟的天使面孔，引人无限的遐想。','/d/file/p/2014-07-26/a7bfdfb53dc842433b5cac8cfdc762d3.jpg','0','0','长腿美女,性感美腿,腿模写真','1','0','0','0','0','1','0','1','','1406354292','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('4','浴室美女','0','12','3','s/yushimeinv','.html','/s/yushimeinv/','0','1','0','newstime DESC','性感撩人的浴室美女，湿身诱惑无极限，浴室里的美女火辣的身材每一样都带给你不一样的视觉感受！','/d/file/p/2014-07-26/5c1f1f18a8aa0e1d59451d7d6453c9c6.jpg','0','0','浴室美女,浴室里的美女,浴室湿身诱惑美女','1','0','0','0','0','1','0','1','','1406354354','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('5','陈紫函','0','12','3','s/chenzihan','.html','/s/chenzihan/','0','1','0','newstime DESC','中国内地女演员。原名陈莎莎，毕业于北京电影学院表演系，与同班同学蒋勤勤、金巧巧并称“北电三朵花”。2006年因出演《白蛇传》的小青而走红；2010年陈紫函因为高产量、高质量和高收视，被媒体誉为“华谊电视剧一姐','/d/file/p/2014-07-26/a638b1ae1014d1a90cd234186dfbdc1f.jpg','0','0','陈紫函,陈莎莎,紫函公主','1','0','0','0','0','1','0','1','','1406354441','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('6','林志玲','0','12','3','s/linzhiling','.html','/s/linzhiling/','0','1','0','newstime DESC','林志玲拥有清秀面庞配着志玲招牌甜甜微笑，气质优雅，透着完美女神的优雅气质，集美丽与智慧于一身。下面是小编精心收集的关于林志玲姐姐的性感，火辣美照，一起来看看吧!','/d/file/p/2014-07-26/c3b5e2a1e92b0667a7d0f8ea3c3379ff.jpg','0','0','林志玲照片,林志玲写真,林志玲性感图片','1','0','0','0','0','1','0','1','','1406354555','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('7','足球宝贝','0','12','3','s/zuqiubaobei','.html','/s/zuqiubaobei/','0','1','0','newstime DESC','足球宝贝是一些美丽漂亮的女孩，多为抱着足球，穿着各队球衣，秀出各种可人姿态，为球队拉人气。各种性感的，火辣的，妩媚的足球宝贝。','/d/file/p/2014-07-26/63ef7926ed413beb46125942b1d94356.jpg','0','0','足球宝贝高清图片,足球宝贝美女,足球宝贝彩绘','1','0','0','0','0','1','0','1','','1406354684','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('8','cosplay美女','0','12','3','s/cosplaymeinv','.html','/s/cosplaymeinv/','0','1','0','newstime DESC','COSPLAY是英文Costume Play的简略写法，cosplay比较狭义的解释是模仿、装扮虚拟世界的角色，也被称为角色扮演。一般是利用服装、饰品、道具以及化妆来扮演动漫作品、游戏中的角色。','/d/file/p/2014-07-26/b02285040cbd2259564f10ffb88ab6e5.jpg','0','0','cosplay,游戏美女,可爱女仆,动漫美女,女仆装,性感女','1','0','0','0','0','1','0','1','','1406354876','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('9','比基尼美女','0','12','3','s/bijinimeinv','.html','/s/bijinimeinv/','0','1','0','newstime DESC','比基尼美女专题整理了各类最新的高清比基尼美女图片，比基尼泳装美女可以说是服装史上最具有视觉冲击力的美女服装。背后系带的胸衣和三角裤的装束不亚于原子弹爆炸。','/d/file/p/2014-07-26/5f60297696c82b9521834bb9216cadac.jpg','0','0','比基尼美女,比基尼泳装,比基尼高清美女图片','1','0','0','0','0','1','0','1','','1406354973','0');");
E_D("replace into `www_92game_net_6188net_enewszt` values('10','张婉悠','0','12','3','s/zhangwanyou','.html','/s/zhangwanyou/','0','1','0','newstime DESC','美女模特张婉悠半裸性感私房:张婉悠 三围92 65 88 CM,拥有E罩杯巨乳,完美的身材的张婉悠,一出道从芸芸新人女星中迅速崛起各类时尚杂志都纷纷邀请张婉悠拍摄封面。','/d/file/p/2014-07-26/d9e01eef28eca223cae64a3cf82328c9.jpg','0','0','张婉悠花浴,张婉悠,张婉悠私房写真','1','0','0','0','0','1','0','1','','1406355045','0');");

@include("../../inc/footer.php");
?>