<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_group_guestbook`;");
E_C("CREATE TABLE `dede_group_guestbook` (
  `bid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `uname` char(15) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `gid` int(11) unsigned NOT NULL DEFAULT '0',
  `stime` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`bid`),
  KEY `userid` (`userid`,`gid`),
  KEY `sitme` (`stime`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>