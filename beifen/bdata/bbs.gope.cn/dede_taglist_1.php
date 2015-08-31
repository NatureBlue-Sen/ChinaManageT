<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_taglist`;");
E_C("CREATE TABLE `dede_taglist` (
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  `arcrank` smallint(6) NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`tid`,`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_taglist` values('1','28','0','17','四通');");
E_D("replace into `dede_taglist` values('2','28','0','17','党建');");
E_D("replace into `dede_taglist` values('3','28','0','17','网站');");
E_D("replace into `dede_taglist` values('4','28','0','17','管理');");

require("../../inc/footer.php");
?>