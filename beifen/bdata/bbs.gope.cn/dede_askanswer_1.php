<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_askanswer`;");
E_C("CREATE TABLE `dede_askanswer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `askid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ifanswer` tinyint(1) NOT NULL DEFAULT '0',
  `tid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `tid2` smallint(6) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(32) NOT NULL DEFAULT '',
  `anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `goodrate` smallint(6) unsigned NOT NULL DEFAULT '0',
  `badrate` smallint(6) unsigned NOT NULL DEFAULT '0',
  `userip` char(15) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `brief` char(200) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `ifcheck` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `askid` (`askid`),
  KEY `uid` (`uid`),
  KEY `dateline` (`askid`,`dateline`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `dede_askanswer` values('1','1','1','3','0','2','huida','0','1','0','127.0.0.1','1280145745','','���ã���Ƶ,��,��ʹ,�����������,����������,ҹ���.��Щ����ǰ�����׵��ٴ�����,��Ժ��ǰ���ٷ����Ʒ�������������ϵͳ������Ĳ����кܺõ�����Ч����,������ҩ���Ǵﲻ������Ч����,Ҳ��������ҪäĿ��ҩ,��ʱ��ȥרҵ������ר��ҽԺ���м�������,���������Ĳ�������ȷ�����,ϣ���ҵĻش������������������������������Ҳ�Ŀͷ����߲�����ѯ����52733999�����������������������������������ר��������ѯ��','1');");

require("../../inc/footer.php");
?>