<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_groups`;");
E_C("CREATE TABLE `dede_groups` (
  `groupid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupname` varchar(75) NOT NULL DEFAULT '',
  `des` text,
  `groupimg` varchar(200) NOT NULL DEFAULT '0',
  `rootstoreid` int(10) unsigned NOT NULL DEFAULT '0',
  `storeid` int(10) unsigned NOT NULL DEFAULT '0',
  `smalltype` text,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `creater` char(15) NOT NULL DEFAULT '',
  `ismaster` text,
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isindex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ishidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hits` int(13) unsigned NOT NULL DEFAULT '0',
  `threads` int(13) unsigned NOT NULL DEFAULT '0',
  `members` int(13) unsigned NOT NULL DEFAULT '0',
  `stime` int(10) unsigned NOT NULL DEFAULT '0',
  `theme` char(20) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`groupid`),
  KEY `uid` (`uid`),
  KEY `stime` (`stime`),
  KEY `storeid` (`storeid`,`rootstoreid`),
  KEY `hits` (`hits`),
  KEY `threads` (`threads`,`members`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>