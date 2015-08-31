<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_group_notice`;");
E_C("CREATE TABLE `dede_group_notice` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `uname` char(15) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(80) NOT NULL DEFAULT '',
  `notice` text NOT NULL,
  `stime` int(10) unsigned NOT NULL DEFAULT '0',
  `gid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `stime` (`stime`),
  KEY `userid` (`userid`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>