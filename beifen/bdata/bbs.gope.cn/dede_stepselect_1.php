<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_stepselect`;");
E_C("CREATE TABLE `dede_stepselect` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `itemname` char(30) DEFAULT NULL,
  `egroup` char(20) DEFAULT NULL,
  `issign` tinyint(1) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `dede_stepselect` values('1','Ѫ��','blood','1','1');");
E_D("replace into `dede_stepselect` values('2','����','bodytype','1','1');");
E_D("replace into `dede_stepselect` values('3','��˾��ģ','cosize','1','1');");
E_D("replace into `dede_stepselect` values('4','����','datingtype','1','1');");
E_D("replace into `dede_stepselect` values('5','�Ƿ�����','drink','1','1');");
E_D("replace into `dede_stepselect` values('6','�����̶�','education','1','1');");
E_D("replace into `dede_stepselect` values('7','ס��','house','1','1');");
E_D("replace into `dede_stepselect` values('8','����','income','1','1');");
E_D("replace into `dede_stepselect` values('9','����','marital','1','1');");
E_D("replace into `dede_stepselect` values('10','�Ƿ����','smoke','1','1');");
E_D("replace into `dede_stepselect` values('11','����','star','1','1');");
E_D("replace into `dede_stepselect` values('12','ϵͳ�����ʶ','system','1','1');");
E_D("replace into `dede_stepselect` values('13','��ҵ','vocation','2','0');");
E_D("replace into `dede_stepselect` values('14','����','nativeplace','2','0');");
E_D("replace into `dede_stepselect` values('15','��Ϣ����','infotype','2','0');");

require("../../inc/footer.php");
?>