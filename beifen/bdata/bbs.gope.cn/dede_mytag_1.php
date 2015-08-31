<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_mytag`;");
E_C("CREATE TABLE `dede_mytag` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagname` varchar(30) NOT NULL DEFAULT '',
  `timeset` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `normbody` text,
  `expbody` text,
  PRIMARY KEY (`aid`),
  KEY `tagname` (`tagname`,`typeid`,`timeset`,`endtime`,`starttime`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `dede_mytag` values('1','0','底部','0','1319780823','1322372823','{dede:include filename=\"footer.htm\"/}','');");
E_D("replace into `dede_mytag` values('2','0','头部','0','1319780900','1322372900','{dede:include filename=\"head.htm\"/}','');");
E_D("replace into `dede_mytag` values('3','0','右侧','0','1319781248','1322373248','	<div class=\"mBottom\"><table width=\"299\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"rightBox\">\r\n      <tr>\r\n        <td height=\"30\" class=\"rightMenuTop\"><table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n          <tr>\r\n            <td width=\"11%\" align=\"center\"><img src=\"{dede:global.cfg_templeturl/}/skin/images/ico2.gif\" width=\"9\" height=\"10\" /></td>\r\n            <td width=\"89%\" class=\"rightTitle\">热点导读</td>\r\n          </tr>\r\n        </table></td>\r\n      </tr>\r\n      <tr>\r\n        <td align=\"center\" background=\"{dede:global.cfg_templeturl/}/skin/images/rightBox_bg.gif\">\r\n		<div class=\"hotnews\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"line-i\">\r\n		 {dede:arclist row=10 orderby=click titlelen=''40'' typeid=''all''}\r\n<tr><td align=\"left\"  class=\"line-i\">&nbsp;<a href=\"[field:arcurl/]\"\r\n  title=\"标题：[field:fulltitle function=''html2text(@me)''/]\r\n作者：[field:writer /]\r\n更新：[field:pubdate function=''GetDateTimeMK(@me)''/]\r\n点击：[field:click/]\" target=\"_blank\">[field:title/]</a></td></tr>\r\n      {/dede:arclist}\r\n</table></div></td>\r\n      </tr>\r\n      <tr>\r\n        <td><img src=\"{dede:global.cfg_templeturl/}/skin/images/rightBox_bottom.gif\" width=\"299\" height=\"9\" /></td>\r\n      </tr>\r\n    </table></div>','');");

require("../../inc/footer.php");
?>