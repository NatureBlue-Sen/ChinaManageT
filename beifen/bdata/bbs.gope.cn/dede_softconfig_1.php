<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_softconfig`;");
E_C("CREATE TABLE `dede_softconfig` (
  `downtype` smallint(6) NOT NULL DEFAULT '0',
  `ismoresite` smallint(6) NOT NULL DEFAULT '0',
  `gotojump` smallint(6) NOT NULL DEFAULT '0',
  `islocal` smallint(5) unsigned NOT NULL DEFAULT '1',
  `sites` text,
  `downmsg` text,
  `moresitedo` smallint(5) unsigned NOT NULL DEFAULT '1',
  `dfrank` smallint(5) unsigned NOT NULL DEFAULT '0',
  `dfywboy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `argrange` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`downtype`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_softconfig` values('0','1','1','1','http://www.aaa.com | �����ַһ	\nhttp://www.bbb.com | �����ַ��	\nhttp://www.ccc.com | �����ַ��	\n','<p>���Ƽ�ʹ�õ�����רҵ���ع������ر�վ�����ʹ�� WinRAR v3.10 ���ϰ汾��ѹ��վ�����<br />	\n��������������ǲ������ص������������,лл����!!<br />	\n�����ر�վ��Դ������������ݲ����������һ��ʱ�����ԣ�<br />	\n���������ʲô���⣬�뵽��վ��̳ȥ��Ѱ�����ǽ��������ṩ���� �����õ���Դ��<br />	\n����վ�ṩ��һЩ��ҵ����ǹ�ѧϰ�о�֮�ã���������ҵ��;���빺�����档</p>','0','0','0','0');");

require("../../inc/footer.php");
?>