<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_ecms_news_doc_index`;");
E_C("CREATE TABLE `www_92game_net_6188net_ecms_news_doc_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4583 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4536','14','1','1431501716','1431501771','1431505869','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4537','14','1','1431501774','1431501838','1431505778','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4538','14','1','1431501841','1431501954','1431505755','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4539','14','1','1431501958','1431502093','1431505732','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4540','14','1','1431502096','1431502169','1431505717','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4541','14','1','1431502172','1431502253','1431505705','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4542','14','1','1431502258','1431502359','1431505694','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4543','14','1','1431502415','1431502476','1431505681','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4582','14','1','1431592464','1431592485','1431592485','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4533','14','1','1431501386','1431501459','1431505933','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4530','14','1','1431501109','1431501144','1431505109','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4524','14','1','1431484165','1431484576','1431504965','1');");
E_D("replace into `www_92game_net_6188net_ecms_news_doc_index` values('4529','14','1','1431501052','1431501107','1431505078','1');");

@include("../../inc/footer.php");
?>