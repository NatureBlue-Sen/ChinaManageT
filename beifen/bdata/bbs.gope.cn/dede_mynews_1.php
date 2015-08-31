<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_mynews`;");
E_C("CREATE TABLE `dede_mynews` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(60) NOT NULL DEFAULT '',
  `writer` varchar(20) NOT NULL DEFAULT '',
  `senddate` int(10) unsigned NOT NULL DEFAULT '0',
  `body` text,
  PRIMARY KEY (`aid`),
  KEY `senddate` (`typeid`,`senddate`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `dede_mynews` values('1','0','巷御生','admin','1280751222','<p>最最祥指社</p>');");

require("../../inc/footer.php");
?>