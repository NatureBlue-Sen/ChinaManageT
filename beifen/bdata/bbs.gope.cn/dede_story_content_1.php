<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_story_content`;");
E_C("CREATE TABLE `dede_story_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL DEFAULT '0',
  `bookname` varchar(40) NOT NULL DEFAULT '',
  `chapterid` int(11) NOT NULL DEFAULT '0',
  `bookid` int(11) NOT NULL DEFAULT '0',
  `catid` smallint(6) NOT NULL DEFAULT '0',
  `bcatid` smallint(6) NOT NULL DEFAULT '0',
  `booktype` int(11) NOT NULL DEFAULT '0',
  `mid` int(11) NOT NULL DEFAULT '0',
  `adminid` smallint(6) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sortid` smallint(6) NOT NULL DEFAULT '0',
  `sortbook` smallint(6) NOT NULL DEFAULT '0',
  `ischeck` smallint(6) NOT NULL DEFAULT '1',
  `bigpic` varchar(80) NOT NULL DEFAULT '',
  `body` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`sortbook`,`chapterid`,`bookid`,`catid`,`bcatid`,`mid`,`adminid`,`addtime`,`ischeck`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>