<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_arccache`;");
E_C("CREATE TABLE `dede_arccache` (
  `md5hash` char(32) NOT NULL DEFAULT '',
  `uptime` int(11) NOT NULL DEFAULT '0',
  `cachedata` mediumtext,
  PRIMARY KEY (`md5hash`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_arccache` values('086b280cab88aabcfcb5f2982c6d1b3a','1332063689','28,6,7,1,135,52,10,11,12,15');");

require("../../inc/footer.php");
?>