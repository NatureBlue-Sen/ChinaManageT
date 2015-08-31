<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_store_groups`;");
E_C("CREATE TABLE `dede_store_groups` (
  `storeid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `storename` char(20) NOT NULL DEFAULT '',
  `tops` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `orders` smallint(6) unsigned NOT NULL DEFAULT '0',
  `nums` int(13) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`storeid`),
  KEY `orders` (`orders`,`tops`),
  KEY `nums` (`nums`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `dede_store_groups` values('1','╫╩ся','0','0','2');");
E_D("replace into `dede_store_groups` values('2','бцсн','0','0','0');");
E_D("replace into `dede_store_groups` values('3','уре╝ся','1','0','0');");

require("../../inc/footer.php");
?>