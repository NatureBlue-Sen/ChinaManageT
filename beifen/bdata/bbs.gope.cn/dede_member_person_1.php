<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_member_person`;");
E_C("CREATE TABLE `dede_member_person` (
  `mid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `onlynet` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `sex` enum('��','Ů','����') NOT NULL DEFAULT '��',
  `uname` char(30) NOT NULL DEFAULT '',
  `qq` char(12) NOT NULL DEFAULT '',
  `msn` char(50) NOT NULL DEFAULT '',
  `tel` varchar(15) NOT NULL DEFAULT '',
  `mobile` varchar(15) NOT NULL DEFAULT '',
  `place` smallint(5) unsigned NOT NULL DEFAULT '0',
  `oldplace` smallint(5) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '1980-01-01',
  `star` smallint(6) unsigned NOT NULL DEFAULT '1',
  `income` smallint(6) NOT NULL DEFAULT '0',
  `education` smallint(6) NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '160',
  `bodytype` smallint(6) NOT NULL DEFAULT '0',
  `blood` smallint(6) NOT NULL DEFAULT '0',
  `vocation` smallint(6) NOT NULL DEFAULT '0',
  `smoke` smallint(6) NOT NULL DEFAULT '0',
  `marital` smallint(6) NOT NULL DEFAULT '0',
  `house` smallint(6) NOT NULL DEFAULT '0',
  `drink` smallint(6) NOT NULL DEFAULT '0',
  `datingtype` smallint(6) NOT NULL DEFAULT '0',
  `language` set('��ͨ��','�Ϻ���','�㶫��','Ӣ��','����','����','����','�������','����','��������','����','��������') DEFAULT NULL,
  `nature` set('�Ը�����','�Ը�����','���ÿ���','���Ų��','���û�ʧ','�嶯','��Ĭ','����','�ḡ','��Ĭ����','����Ƹ�','ʱϲʱ��','��ӹ����','��˵���','��ǿ','����','����','����','���Կ���','��������','�ƻ��Ʊ�','���ʹ㷺','����Ѷ�','��˽','���','����','����','������ĥ','��������','�����ѻ�','��С����','�ֹ�����','����','�Ը�','�Ա�','�ݽ�','��������','С������','��������','����˳��','����С��','����','��ǿ','��ˬ','����','��������','�����ҵ�','����Ϊ��','��ֱ','��α','��Ƨ','��ʵ','�ؾ�','����','�ٶ�','��������','���','����','�̱�') DEFAULT NULL,
  `lovemsg` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_member_person` values('1','1','��','admin','','','','','0','0','1980-01-01','1','0','0','160','0','0','0','0','0','0','0','0','','','','','0');");

require("../../inc/footer.php");
?>