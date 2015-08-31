<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_story_chapter`;");
E_C("CREATE TABLE `dede_story_chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL DEFAULT '0',
  `catid` int(11) NOT NULL DEFAULT '0',
  `chapnum` smallint(6) NOT NULL DEFAULT '1',
  `postnum` smallint(6) NOT NULL DEFAULT '0',
  `mid` int(11) NOT NULL DEFAULT '0',
  `chaptername` varchar(40) NOT NULL DEFAULT '',
  `bookname` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>