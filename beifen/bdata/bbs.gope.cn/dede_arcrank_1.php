<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_arcrank`;");
E_C("CREATE TABLE `dede_arcrank` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `rank` smallint(6) NOT NULL DEFAULT '0',
  `membername` char(20) NOT NULL DEFAULT '',
  `adminrank` smallint(6) NOT NULL DEFAULT '0',
  `money` smallint(8) unsigned NOT NULL DEFAULT '500',
  `scores` mediumint(8) NOT NULL DEFAULT '0',
  `purviews` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `dede_arcrank` values('1','0','�������','5','0','0','');");
E_D("replace into `dede_arcrank` values('2','-1','����˸��','0','0','0','');");
E_D("replace into `dede_arcrank` values('3','10','ע���Ա','5','0','100','');");
E_D("replace into `dede_arcrank` values('4','50','�м���Ա','5','300','200','');");
E_D("replace into `dede_arcrank` values('5','100','�߼���Ա','5','800','500','');");
E_D("replace into `dede_arcrank` values('6','20','�ͼ���Ա','5','0','500','');");
E_D("replace into `dede_arcrank` values('7','150','������Ա','5','1000','500','');");
E_D("replace into `dede_arcrank` values('8','180','���ܻ�Ա','5','1100','500','');");

require("../../inc/footer.php");
?>