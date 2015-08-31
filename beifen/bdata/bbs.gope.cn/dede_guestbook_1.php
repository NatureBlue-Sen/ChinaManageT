<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_guestbook`;");
E_C("CREATE TABLE `dede_guestbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `tid` mediumint(8) NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned DEFAULT '0',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `uname` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `homepage` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `face` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `dtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ischeck` smallint(6) NOT NULL DEFAULT '1',
  `msg` text,
  PRIMARY KEY (`id`),
  KEY `ischeck` (`ischeck`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `dede_guestbook` values('1','标题','0','1','0','admin','','','23221105','13','127.0.0.1','1319782952','1','所得税的');");
E_D("replace into `dede_guestbook` values('2','测试留言','0','1','1319786171','姓名','admin@admin.com','127.0.0.2','123456','01','127.0.0.1','1319785817','1','<div class=''rebox''>彩色电视kdj上课了<br />\r\n是的几十块短斤少两</div>\n<p>\r\n	<font color=\"red\">管理员回复：测试回复</font></p>');");
E_D("replace into `dede_guestbook` values('3','速度','0','1','0','admin','','','','01','127.0.0.1','1319786752','1','啊大时代');");

require("../../inc/footer.php");
?>