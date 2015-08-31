<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_search_keywords`;");
E_C("CREATE TABLE `dede_search_keywords` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` char(30) NOT NULL DEFAULT '',
  `spwords` char(50) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `result` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `channelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `dede_search_keywords` values('1','在这里搜索...','在 这里 搜索 ...','5','0','1319781096','0','0');");
E_D("replace into `dede_search_keywords` values('2','在这里搜索...','在这里 搜索 ...','5','0','1319781096','0','0');");
E_D("replace into `dede_search_keywords` values('3','系统','系统','11','11','1319781274','0','0');");

require("../../inc/footer.php");
?>