<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_scores`;");
E_C("CREATE TABLE `dede_scores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titles` char(15) NOT NULL,
  `icon` smallint(6) unsigned DEFAULT '0',
  `integral` int(10) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `integral` (`integral`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `dede_scores` values('2','�б�','1','0','1');");
E_D("replace into `dede_scores` values('3','�೤','2','1000','1');");
E_D("replace into `dede_scores` values('4','��ξ','3','2000','1');");
E_D("replace into `dede_scores` values('5','��ξ','4','3000','1');");
E_D("replace into `dede_scores` values('6','��ξ','5','4000','1');");
E_D("replace into `dede_scores` values('7','��У','6','5000','1');");
E_D("replace into `dede_scores` values('8','��У','7','6000','1');");
E_D("replace into `dede_scores` values('9','��У','8','9000','1');");
E_D("replace into `dede_scores` values('10','�ٽ�','9','14000','1');");
E_D("replace into `dede_scores` values('11','�н�','10','19000','1');");
E_D("replace into `dede_scores` values('12','�Ͻ�','11','24000','1');");
E_D("replace into `dede_scores` values('15','��','12','29000','1');");

require("../../inc/footer.php");
?>