<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_ask`;");
E_C("CREATE TABLE `dede_ask` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tidname` char(50) NOT NULL DEFAULT '',
  `tid2` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tid2name` char(50) NOT NULL DEFAULT '',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `title` char(80) NOT NULL DEFAULT '',
  `digest` tinyint(1) NOT NULL DEFAULT '0',
  `reward` smallint(6) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `expiredtime` int(10) unsigned NOT NULL DEFAULT '0',
  `solvetime` int(10) unsigned NOT NULL DEFAULT '0',
  `bestanswer` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `disorder` smallint(6) NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `extra` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disorder` (`tid`,`tid2`,`status`,`dateline`),
  KEY `digest` (`digest`),
  KEY `expiredtime` (`expiredtime`),
  KEY `reward` (`reward`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `dede_ask` values('1','3','�����Ⱦ','0','','1','0','����ר����Ƶ����ô���£�','0','15','1280145268','1281873268','1280154850','1','1','0','0','1','127.0.0.1','����ר����Ƶ����ô���£�','');");
E_D("replace into `dede_ask` values('2','1','ǰ���ټ���','6','ϸ����ǰ������','1','0','�����ʴ�','0','0','1280153980','1281881980','0','0','0','0','0','0','127.0.0.1','�����ʴ�ϵͳ','');");
E_D("replace into `dede_ask` values('3','1','ǰ���ټ���','0','','1','0','�����ʴ�2','0','0','1280154212','1281882212','0','0','0','0','0','0','127.0.0.1','������ʾ','');");
E_D("replace into `dede_ask` values('4','1','ǰ���ټ���','11','ǰ�����������ʴ�)','1','0','���Կ��','0','0','1280154968','1281882968','0','0','0','0','0','0','127.0.0.1','���Կ��','');");
E_D("replace into `dede_ask` values('5','5','���Բ���','0','','1','0','����һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı���','0','100','1280155088','1281883088','0','0','0','0','0','0','127.0.0.1','����һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı���','����һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı������һ���ܳ��ܳ��ı���');");
E_D("replace into `dede_ask` values('6','1','ǰ���ټ���','6','ϸ����ǰ������','0','0','�����ο�','0','0','1280186452','1281914452','0','0','0','0','0','0','127.0.0.1','�����ο�����','');");

require("../../inc/footer.php");
?>