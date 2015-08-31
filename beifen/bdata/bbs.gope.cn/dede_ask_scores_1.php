<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_ask_scores`;");
E_C("CREATE TABLE `dede_ask_scores` (
  `mid` int(11) NOT NULL,
  `userid` char(20) NOT NULL,
  `ascores` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mscores` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>