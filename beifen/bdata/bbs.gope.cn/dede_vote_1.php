<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_vote`;");
E_C("CREATE TABLE `dede_vote` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `votename` varchar(50) NOT NULL DEFAULT '',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totalcount` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ismore` tinyint(6) NOT NULL DEFAULT '0',
  `isallow` tinyint(6) NOT NULL DEFAULT '0',
  `view` tinyint(6) NOT NULL DEFAULT '0',
  `spec` int(20) unsigned NOT NULL DEFAULT '0',
  `isenable` tinyint(6) NOT NULL DEFAULT '0',
  `votenote` text,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `dede_vote` values('1','���Ǵ��Ķ���֪��վ�ģ�','1266336000','1584547200','0','0','1','1','0','0','<v:note id=\"1\" count=\"1\">���ѽ���</v:note>rn<v:note id=\"2\" count=\"0\">�Ż���վ����������</v:note>rn<v:note id=\"3\" count=\"2\">Google��ٶ�����</v:note>rn<v:note id=\"4\" count=\"2\">�����վ�ϵ�����</v:note>rn<v:note id=\"5\" count=\"1\">����;��</v:note>rn');");

require("../../inc/footer.php");
?>