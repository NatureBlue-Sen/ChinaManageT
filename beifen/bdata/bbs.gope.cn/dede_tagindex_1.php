<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_tagindex`;");
E_C("CREATE TABLE `dede_tagindex` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` char(12) NOT NULL DEFAULT '',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  `total` int(10) unsigned NOT NULL DEFAULT '0',
  `weekcc` int(10) unsigned NOT NULL DEFAULT '0',
  `monthcc` int(10) unsigned NOT NULL DEFAULT '0',
  `weekup` int(10) unsigned NOT NULL DEFAULT '0',
  `monthup` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `dede_tagindex` values('1','四通','17','2','1','2','2','1319718199','1319718199','1319718199');");
E_D("replace into `dede_tagindex` values('2','党建','17','0','1','0','0','1319718199','1319718199','1319718199');");
E_D("replace into `dede_tagindex` values('3','网站','17','0','1','0','0','1319718199','1319718199','1319718199');");
E_D("replace into `dede_tagindex` values('4','管理','17','0','1','0','0','1319718199','1319718199','1319718199');");

require("../../inc/footer.php");
?>