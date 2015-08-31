<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_story_catalog`;");
E_C("CREATE TABLE `dede_story_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `rank` smallint(6) NOT NULL DEFAULT '0',
  `listrule` varchar(30) NOT NULL DEFAULT '',
  `viewrule` varchar(30) NOT NULL DEFAULT '',
  `booktype` smallint(6) NOT NULL DEFAULT '0',
  `keywords` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classname` (`classname`,`pid`,`rank`,`booktype`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>