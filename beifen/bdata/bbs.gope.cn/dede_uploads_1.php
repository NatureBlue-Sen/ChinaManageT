<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_uploads`;");
E_C("CREATE TABLE `dede_uploads` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `arcid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` char(60) NOT NULL DEFAULT '',
  `url` char(80) NOT NULL DEFAULT '',
  `mediatype` smallint(6) NOT NULL DEFAULT '1',
  `width` char(10) NOT NULL DEFAULT '',
  `height` char(10) NOT NULL DEFAULT '',
  `playtime` char(10) NOT NULL DEFAULT '',
  `filesize` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `memberid` (`mid`),
  KEY `arcid` (`arcid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `dede_uploads` values('1','30','������վ����������վ��Ƶ�����վ����','/uploads/111027/1-11102H11626117.jpg','1','180','180','0','13678','1319721386','1');");
E_D("replace into `dede_uploads` values('2','28','��ͨ������վ����ϵͳ���ù��ܽ�����ͨ������վ����ϵͳ���ù���','/uploads/111027/1-11102H11644529.jpg','1','180','180','0','13478','1319721404','1');");
E_D("replace into `dede_uploads` values('3','24','����Һ��ʯ������Ӧվ�������������ָ��','/uploads/111027/1-11102H11H5337.jpg','1','500','333','0','117982','1319721445','1');");
E_D("replace into `dede_uploads` values('4','29','��ͨ������վ����ϵͳ������ص�ַ','/uploads/111027/1-11102H11J02F.jpg','1','529','353','0','29493','1319721460','1');");
E_D("replace into `dede_uploads` values('5','21','�����̼Ҷ�����߷���ٱ�','/uploads/111027/1-11102H11P21S.jpg','1','500','333','0','103912','1319721482','1');");
E_D("replace into `dede_uploads` values('6','17','���̻�Ƿ�ѡ�թƭ����������','/uploads/111027/1-11102H11Q5530.jpg','1','500','333','0','95898','1319721495','1');");
E_D("replace into `dede_uploads` values('7','19','���������������� ���衰ˢ�����ѡ�����թƭ','/uploads/111027/1-11102H11S2557.jpg','1','600','400','0','38455','1319721512','1');");
E_D("replace into `dede_uploads` values('8','18','ATM��ƭ������ ���ݾ���֧�з���','/uploads/111027/1-11102H11TJK.jpg','1','573','382','0','33657','1319721527','1');");
E_D("replace into `dede_uploads` values('9','0','1-11102Q401000-L.gif','/uploads/allimg/111028/1-11102Q401000-L.gif','1','0','0','0','12443','1319781660','1');");

require("../../inc/footer.php");
?>