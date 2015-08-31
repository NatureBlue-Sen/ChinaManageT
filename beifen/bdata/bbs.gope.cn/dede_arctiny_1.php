<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_arctiny`;");
E_C("CREATE TABLE `dede_arctiny` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid2` varchar(90) NOT NULL DEFAULT '0',
  `arcrank` smallint(6) NOT NULL DEFAULT '0',
  `channel` smallint(5) NOT NULL DEFAULT '1',
  `senddate` int(10) unsigned NOT NULL DEFAULT '0',
  `sortrank` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=gbk");
E_D("replace into `dede_arctiny` values('1','14','0','0','1','1319645586','1319721011','0');");
E_D("replace into `dede_arctiny` values('2','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('3','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('4','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('5','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('6','14','0','0','1','1319645586','1319777044','0');");
E_D("replace into `dede_arctiny` values('7','14','0','0','1','1319645586','1319777113','0');");
E_D("replace into `dede_arctiny` values('8','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('9','14','0','0','1','1319645586','1319645586','0');");
E_D("replace into `dede_arctiny` values('10','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('11','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('12','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('13','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('14','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('15','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('16','15','0','0','1','1319645746','1319645746','0');");
E_D("replace into `dede_arctiny` values('17','18','0','0','1','1319646097','1319721490','0');");
E_D("replace into `dede_arctiny` values('18','18','0','0','1','1319646097','1319721520','0');");
E_D("replace into `dede_arctiny` values('19','18','0','0','1','1319646097','1319721503','0');");
E_D("replace into `dede_arctiny` values('20','18','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('21','18','0','0','1','1319646097','1319721475','0');");
E_D("replace into `dede_arctiny` values('22','18','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('23','17','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('24','17','0','0','1','1319646097','1319721411','0');");
E_D("replace into `dede_arctiny` values('25','17','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('26','17','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('27','17','0','0','1','1319646097','1319646097','0');");
E_D("replace into `dede_arctiny` values('28','17','0','0','1','1319646097','1319721399','0');");
E_D("replace into `dede_arctiny` values('29','17','0','0','1','1319646097','1319721454','0');");
E_D("replace into `dede_arctiny` values('30','17','0','0','1','1319646097','1319721379','0');");
E_D("replace into `dede_arctiny` values('31','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('32','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('33','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('34','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('35','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('36','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('37','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('38','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('39','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('40','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('41','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('42','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('43','3','0','0','1','1319646950','1319646950','0');");
E_D("replace into `dede_arctiny` values('44','3','0','0','1','1319646951','1319646951','0');");
E_D("replace into `dede_arctiny` values('45','3','0','0','1','1319646951','1319646951','0');");
E_D("replace into `dede_arctiny` values('46','3','0','0','1','1319646951','1319646951','0');");
E_D("replace into `dede_arctiny` values('47','10','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('48','10','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('49','10','0','0','1','1319648341','1319720837','0');");
E_D("replace into `dede_arctiny` values('50','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('51','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('52','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('53','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('54','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('55','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('56','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('57','10','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('58','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('59','10','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('60','4','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('61','10','0','0','1','1319648341','1319648341','0');");
E_D("replace into `dede_arctiny` values('62','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('63','10','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('64','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('65','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('66','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('67','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('68','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('69','4','0','0','1','1319648342','1319648342','0');");
E_D("replace into `dede_arctiny` values('70','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('71','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('72','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('73','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('74','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('75','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('76','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('77','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('78','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('79','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('80','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('81','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('82','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('83','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('84','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('85','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('86','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('87','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('88','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('89','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('90','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('91','5','0','0','1','1319649325','1319649325','0');");
E_D("replace into `dede_arctiny` values('92','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('93','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('94','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('95','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('96','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('97','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('98','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('99','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('100','6','0','-2','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('101','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('102','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('103','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('104','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('105','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('106','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('107','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('108','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('109','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('110','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('111','6','0','0','1','1319649701','1319649701','0');");
E_D("replace into `dede_arctiny` values('112','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('113','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('114','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('115','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('116','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('117','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('118','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('119','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('120','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('121','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('122','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('123','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('124','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('125','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('126','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('127','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('128','7','0','0','1','1319649787','1319649787','0');");
E_D("replace into `dede_arctiny` values('129','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('130','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('131','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('132','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('133','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('134','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('135','21','0','0','1','1319707830','1319707830','0');");
E_D("replace into `dede_arctiny` values('136','0','0','0','-1','1319781699','1319781610','1');");

require("../../inc/footer.php");
?>