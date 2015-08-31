<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_story_bookstars`;");
E_C("CREATE TABLE `dede_story_bookstars` (
  `bid` varchar(11) NOT NULL,
  `totalvotes` int(11) NOT NULL DEFAULT '0',
  `totalvalue` int(11) NOT NULL DEFAULT '0',
  `voteinfo` longtext,
  `usedids` longtext,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>