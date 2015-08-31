<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_story_books`;");
E_C("CREATE TABLE `dede_story_books` (
  `bid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(6) DEFAULT '0',
  `bcatid` smallint(6) NOT NULL DEFAULT '0',
  `ischeck` smallint(6) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `booktype` smallint(6) NOT NULL DEFAULT '0',
  `iscommend` smallint(6) NOT NULL DEFAULT '0',
  `click` int(11) unsigned NOT NULL DEFAULT '0',
  `freenum` smallint(6) NOT NULL DEFAULT '0',
  `bookname` varchar(40) NOT NULL DEFAULT '',
  `author` varchar(30) NOT NULL DEFAULT '',
  `mid` int(11) unsigned NOT NULL DEFAULT '0',
  `adminid` int(11) NOT NULL DEFAULT '0',
  `litpic` varchar(100) NOT NULL DEFAULT '',
  `pubdate` int(11) NOT NULL DEFAULT '0',
  `lastpost` int(11) NOT NULL DEFAULT '0',
  `postnum` int(11) NOT NULL DEFAULT '0',
  `lastfeedback` int(11) NOT NULL DEFAULT '0',
  `feedbacknum` int(11) NOT NULL DEFAULT '0',
  `weekcc` int(11) NOT NULL DEFAULT '0',
  `monthcc` int(11) NOT NULL DEFAULT '0',
  `weekup` int(11) NOT NULL DEFAULT '0',
  `monthup` int(11) NOT NULL DEFAULT '0',
  `description` varchar(250) NOT NULL DEFAULT '',
  `body` mediumtext,
  `keywords` varchar(60) NOT NULL DEFAULT '',
  `userip` varchar(20) NOT NULL DEFAULT '',
  `senddate` int(11) NOT NULL DEFAULT '0',
  `arcrank` smallint(6) DEFAULT '0',
  `goodpost` varchar(60) NOT NULL DEFAULT '',
  `badpost` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notpost` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`),
  KEY `catid` (`catid`,`bcatid`,`ischeck`),
  KEY `click` (`click`,`weekcc`,`monthcc`,`weekup`,`monthup`),
  KEY `booktype` (`booktype`,`iscommend`,`freenum`,`bookname`,`mid`,`litpic`,`pubdate`,`lastpost`,`postnum`,`senddate`,`adminid`,`author`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>