<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_ecms_news_doc_data`;");
E_C("CREATE TABLE `www_92game_net_6188net_ecms_news_doc_data` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4536','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://v.weipai.cn/video/201403/13/02/9011C442-114A-4674-894E-D048B9895E92.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4537','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/10/15/B08F20F3-21BC-4C8D-97B4-AEFA3DF6ABAF.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4538','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/21/22/F1A4B234-68AF-406B-A400-BE3528F4E4DF.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4539','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/05/21/690DD518-E3F4-496A-9980-05BBE5875AE2.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4540','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/04/17/6D62BA3F-06C2-41FC-B37D-FE94B713EA02.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4541','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://v.weipai.cn/video/201403/07/23/7457571E-025D-48DC-88EF-957D6E082F57.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4542','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/27/15/DF0E9C0C-CE04-469F-ABCF-C5A85AE5F145.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4543','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201501/07/15/8C3813B0-F2A8-4E43-9C67-69F0DFE57A10.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4582','14','','1','0','0','0','','','','<p>&nbsp;http://aliv.weipai.cn/201504/10/04/C3D1B38E-9B55-4085-B6EF-D385E1B5FAB1.mov</p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4533','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/28/07/552B7F67-331E-45E0-8F6B-D78A02E4DD80.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4530','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/07/23/C77D340F-D0C4-40EE-AD00-2C3E019B739C.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4524','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201501/04/10/EBB4C970-8DC5-4F73-939A-172D42B8DB01.flv\" frameborder=\"0\" allowfullscreen=\"\"</iframe></p>');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_data` values('4529','14','','1','0','0','0','','','','<p><iframe height=\"498\" width=\"510\" src=\"http://aliv.weipai.cn/201405/05/14/82B20DB4-4D3D-4FD0-A099-F335D38A6B4A.flv\" frameborder=\"0\" allowfullscreen=\"\"></iframe></p>');");

@include("../../inc/footer.php");
?>