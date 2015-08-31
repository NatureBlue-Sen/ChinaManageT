<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_co_note`;");
E_C("CREATE TABLE `dede_co_note` (
  `nid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `channelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `notename` varchar(50) NOT NULL DEFAULT '',
  `sourcelang` varchar(10) NOT NULL DEFAULT 'gb2312',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  `cotime` int(10) unsigned NOT NULL DEFAULT '0',
  `pnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isok` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `usemore` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listconfig` text,
  `itemconfig` text,
  PRIMARY KEY (`nid`),
  KEY `isok` (`isok`,`channelid`,`cotime`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `dede_co_note` values('1','1','新闻','gb2312','1319708304','1319707733','0','1','0','{dede:noteinfo notename=\"新闻\" channelid=\"1\" macthtype=\"string\"\r\n    refurl=\"http://\" sourcelang=\"gb2312\" cosort=\"asc\"\r\n  isref=\"no\" exptime=\"10\" usemore=\"0\" /}\r\n{dede:listrule sourcetype=\"hand\" rssurl=\"http://\" regxurl=\"http://\"\r\nstartid=\"1\" endid=\"\" addv=\"1\" urlrule=\"area\" musthas=\".html\"\r\n nothas=\"\" listpic=\"1\" usemore=\"0\"}\r\n    {dede:addurls}http://dangjian.zf11.com/Article/ShowClass.asp?ClassID=7{/dede:addurls}\r\n    {dede:batchrule}{/dede:batchrule}\r\n    {dede:regxrule}{/dede:regxrule}\r\n    {dede:areastart}<table width=\"95%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">{/dede:areastart}\r\n    {dede:areaend}<table width=\"639\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">{/dede:areaend}\r\n{/dede:listrule}\r\n','{dede:sppage sptype=''full'' srul=''1'' erul=''5''}{/dede:sppage}\r\n{dede:previewurl}http://dangjian.zf11.com/zf/Article/270.html{/dede:previewurl}\r\n{dede:keywordtrim}{/dede:keywordtrim}\r\n{dede:descriptiontrim}{/dede:descriptiontrim}\r\n{dede:item field=''title'' value='''' isunit='''' isdown=''''}\r\n   {dede:match}<td align=\"center\" valign=\"middle\"><h1>[内容]</h1></td>{/dede:match}\r\n   \r\n   {dede:function}{/dede:function}\r\n{/dede:item}{dede:item field=''writer'' value='''' isunit='''' isdown=''''}\r\n   {dede:match}{/dede:match}\r\n   \r\n   {dede:function}{/dede:function}\r\n{/dede:item}{dede:item field=''source'' value='''' isunit='''' isdown=''''}\r\n   {dede:match}{/dede:match}\r\n   \r\n   {dede:function}{/dede:function}\r\n{/dede:item}{dede:item field=''pubdate'' value='''' isunit='''' isdown=''''}\r\n   {dede:match}{/dede:match}\r\n   \r\n   {dede:function}{/dede:function}\r\n{/dede:item}{dede:item field=''body'' value='''' isunit=''1'' isdown=''1''}\r\n   {dede:match}<DIV class=Content id=fontzoom style=\"FONT-SIZE: 14px; LINE-HEIGHT: 32px\">[内容]</td>\r\n              </tr>\r\n            </table></td></tr>{/dede:match}\r\n   \r\n   {dede:function}{/dede:function}\r\n{/dede:item}');");

require("../../inc/footer.php");
?>