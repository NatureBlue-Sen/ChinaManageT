<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_mail_title`;");
E_C("CREATE TABLE `dede_mail_title` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `period` int(10) NOT NULL,
  `typeid` smallint(5) NOT NULL,
  `title` char(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `addtime` int(10) NOT NULL,
  `sendtime` int(10) NOT NULL,
  `writer` char(20) NOT NULL,
  `mid` mediumint(8) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `count` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>