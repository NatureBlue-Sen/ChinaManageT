<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_arctype`;");
E_C("CREATE TABLE `dede_arctype` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `reid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `topid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sortrank` smallint(5) unsigned NOT NULL DEFAULT '50',
  `typename` char(30) NOT NULL DEFAULT '',
  `typedir` char(60) NOT NULL DEFAULT '',
  `isdefault` smallint(6) NOT NULL DEFAULT '0',
  `defaultname` char(15) NOT NULL DEFAULT 'index.html',
  `issend` smallint(6) NOT NULL DEFAULT '0',
  `channeltype` smallint(6) DEFAULT '1',
  `maxpage` smallint(6) NOT NULL DEFAULT '-1',
  `ispart` smallint(6) NOT NULL DEFAULT '0',
  `corank` smallint(6) NOT NULL DEFAULT '0',
  `tempindex` char(50) NOT NULL DEFAULT '',
  `templist` char(50) NOT NULL DEFAULT '',
  `temparticle` char(50) NOT NULL DEFAULT '',
  `namerule` char(50) NOT NULL DEFAULT '',
  `namerule2` char(50) NOT NULL DEFAULT '',
  `modname` char(20) NOT NULL DEFAULT '',
  `description` char(150) NOT NULL DEFAULT '',
  `keywords` varchar(60) NOT NULL DEFAULT '',
  `seotitle` varchar(80) NOT NULL DEFAULT '',
  `moresite` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sitepath` char(60) NOT NULL DEFAULT '',
  `siteurl` char(50) NOT NULL DEFAULT '',
  `ishidden` smallint(6) NOT NULL DEFAULT '0',
  `cross` tinyint(1) NOT NULL DEFAULT '0',
  `crossid` text,
  `content` text,
  `smalltypes` text,
  PRIMARY KEY (`id`),
  KEY `reid` (`reid`,`isdefault`,`channeltype`,`ispart`,`corank`,`topid`,`ishidden`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk");
E_D("replace into `dede_arctype` values('1','0','0','10','������̬','{cmspath}/a/dangjian','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('2','0','0','20','���㵳��','{cmspath}/a/jiceng','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('3','0','0','30','�鹤ָ��','{cmspath}/a/zugong','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('4','0','0','40','�ɲ�����','{cmspath}/a/ganbu','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('5','0','0','50','�˲Ź���','{cmspath}/a/cairen','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('6','0','0','60','Զ�̽���','{cmspath}/a/yuancheng','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('7','0','0','70','˼�뽨��','{cmspath}/a/sixiang','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('8','0','0','80','��ɽ֮ʯ','{cmspath}/a/tashan','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('9','0','0','90','�ļ�����','{cmspath}/a/xiazai','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('10','0','0','100','��Ƶ�㲥','{cmspath}/a/shipin','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('11','0','0','110','��������','/plus/guestbook.php','1','index.html','1','1','-1','2','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','/plus/guestbook.php','','0','0','','','');");
E_D("replace into `dede_arctype` values('12','0','0','120','��������','{cmspath}/a/jigou','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('13','0','0','130','�ٷ�΢��','{cmspath}/a/weibo','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('14','1','1','1','���ڶ�̬','{cmspath}/a/dangjian/guonei','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('15','1','1','2','���ض�̬','{cmspath}/a/dangjian/jiguan','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('16','1','1','3','�쵼����','{cmspath}/a/dangjian/jianghua','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('17','2','2','1','ũ�嵳��','{cmspath}/a/jiceng/nongcun','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('18','2','2','2','���ص���','{cmspath}/a/jiceng/jiguan','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('19','2','2','3','��ҵ����','{cmspath}/a/jiceng/qiye','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('20','2','2','4','��������','{cmspath}/a/jiceng/shequ','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('21','0','0','140','��վ����','{cmspath}/a/gonggao','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/a/gonggao','','0','0','','','');");

require("../../inc/footer.php");
?>