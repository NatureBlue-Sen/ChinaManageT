<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_flinktype`;");
E_C("CREATE TABLE `dede_flinktype` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `dede_flinktype` values('1','�ۺ���վ');");
E_D("replace into `dede_flinktype` values('2','������');");
E_D("replace into `dede_flinktype` values('3','������');");
E_D("replace into `dede_flinktype` values('4','�������');");
E_D("replace into `dede_flinktype` values('5','��������');");
E_D("replace into `dede_flinktype` values('6','������Ϣ');");
E_D("replace into `dede_flinktype` values('7','��̳��');");
E_D("replace into `dede_flinktype` values('8','��������');");

require("../../inc/footer.php");
?>