<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_arcatt`;");
E_C("CREATE TABLE `dede_arcatt` (
  `sortid` smallint(6) NOT NULL DEFAULT '0',
  `att` char(10) NOT NULL DEFAULT '',
  `attname` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`att`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_arcatt` values('5','s','����');");
E_D("replace into `dede_arcatt` values('1','h','ͷ��');");
E_D("replace into `dede_arcatt` values('3','f','�õ�');");
E_D("replace into `dede_arcatt` values('2','c','�Ƽ�');");
E_D("replace into `dede_arcatt` values('7','p','ͼƬ');");
E_D("replace into `dede_arcatt` values('8','j','��ת');");
E_D("replace into `dede_arcatt` values('4','a','�ؼ�');");
E_D("replace into `dede_arcatt` values('6','b','�Ӵ�');");

require("../../inc/footer.php");
?>