<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_group_threads`;");
E_C("CREATE TABLE `dede_group_threads` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `smalltype` smallint(6) unsigned NOT NULL DEFAULT '0',
  `subject` char(80) NOT NULL DEFAULT '',
  `displayorder` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `author` char(15) NOT NULL DEFAULT '',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `lastpost` int(10) unsigned NOT NULL DEFAULT '0',
  `lastposter` char(15) NOT NULL DEFAULT '',
  `replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `digest` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `closed` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `digest` (`digest`),
  KEY `authorid` (`authorid`,`dateline`),
  KEY `displayorder` (`gid`,`lastpost`,`displayorder`,`smalltype`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>