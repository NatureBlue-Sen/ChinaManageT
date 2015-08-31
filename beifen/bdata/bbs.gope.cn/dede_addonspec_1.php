<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_addonspec`;");
E_C("CREATE TABLE `dede_addonspec` (
  `aid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `note` text,
  `templet` varchar(30) NOT NULL DEFAULT '',
  `userip` char(15) NOT NULL DEFAULT '',
  `redirecturl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`),
  KEY `typeid` (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_addonspec` values('136','0','{dede:specnote imgheight=''90'' imgwidth=''120''\r\n                infolen=''160'' titlelen=''60'' col=''1'' idlist=''135,134,133,132,131,130,129,128,127,126,125,124,123,122,121,120,119,118,117,116,115,114,113,112,111,110,109,108,107,106''\r\n                name=''默认节点'' noteid=''default'' isauto=''0'' rownum=''20''\r\n                keywords='''' typeid=''0''}\r\n                <tr><td align=\"left\"  class=\"line-i\">&nbsp;<img src=\"[field:global.cfg_templeturl/]/skin/images/ico.gif\"/>&nbsp;<a href=\"[field:arcurl/]\" title=\"标题：[field:fulltitle function=''html2text(@me)''/]\r\n作者：[field:writer /]\r\n更新：[field:pubdate function=''GetDateTimeMK(@me)''/]\r\n点击：[field:click/]\" target=\"_blank\">[field:title/]</a></td>\r\n<td align=\"right\"  class=\"line-i\"><font color=\"#999999\">[[field:pubdate function=\"MyDate(''Y-m-d'',@me)\"/]]</font></td></tr>\r\n                {/dede:specnote}\r\n','moban/article_spec.htm','127.0.0.1','');");

require("../../inc/footer.php");
?>