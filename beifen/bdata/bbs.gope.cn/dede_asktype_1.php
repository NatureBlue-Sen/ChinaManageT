<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_asktype`;");
E_C("CREATE TABLE `dede_asktype` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '',
  `reid` int(10) unsigned NOT NULL DEFAULT '0',
  `disorder` int(10) unsigned NOT NULL DEFAULT '0',
  `asknum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `disorder` (`disorder`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=gbk");
E_D("replace into `dede_asktype` values('1','ǰ���ټ���','0','50','4');");
E_D("replace into `dede_asktype` values('2','�Թ����ϰ�','0','40','0');");
E_D("replace into `dede_asktype` values('3','�����Ⱦ','0','30','1');");
E_D("replace into `dede_asktype` values('4','��ֳ������','0','20','0');");
E_D("replace into `dede_asktype` values('5','���Բ���','0','10','1');");
E_D("replace into `dede_asktype` values('6','ϸ����ǰ������','1','57','2');");
E_D("replace into `dede_asktype` values('7','��ϸ����������','1','56','0');");
E_D("replace into `dede_asktype` values('8','ǰ����ʹ','1','55','0');");
E_D("replace into `dede_asktype` values('9','ǰ���ٳ�Ѫ','1','54','0');");
E_D("replace into `dede_asktype` values('10','ǰ��������','1','53','0');");
E_D("replace into `dede_asktype` values('11','ǰ�����������ʴ�)','1','52','1');");
E_D("replace into `dede_asktype` values('12','ǰ���ٰ�','1','51','0');");
E_D("replace into `dede_asktype` values('13','����','2','46','0');");
E_D("replace into `dede_asktype` values('14','��й','2','45','0');");
E_D("replace into `dede_asktype` values('15','���侫','2','44','0');");
E_D("replace into `dede_asktype` values('16','�����쳣����','2','43','0');");
E_D("replace into `dede_asktype` values('17','�������ϰ�','2','42','0');");
E_D("replace into `dede_asktype` values('18','������','2','41','0');");
E_D("replace into `dede_asktype` values('19','��Ƥ��ͷ��','3','392','0');");
E_D("replace into `dede_asktype` values('20','�����','3','391','0');");
E_D("replace into `dede_asktype` values('21','÷��','3','39','0');");
E_D("replace into `dede_asktype` values('22','�ܲ�','3','38','0');");
E_D("replace into `dede_asktype` values('23','غ����','3','37','0');");
E_D("replace into `dede_asktype` values('24','��غ��','3','36','0');");
E_D("replace into `dede_asktype` values('25','����','3','35','0');");
E_D("replace into `dede_asktype` values('26','������','3','34','0');");
E_D("replace into `dede_asktype` values('27','����','3','33','0');");
E_D("replace into `dede_asktype` values('28','����ʪ��','3','32','0');");
E_D("replace into `dede_asktype` values('29','��ʭ','3','31','0');");
E_D("replace into `dede_asktype` values('30','��Ƥ����','4','26','0');");
E_D("replace into `dede_asktype` values('31','����','4','25','0');");
E_D("replace into `dede_asktype` values('32','��غ֢','4','24','0');");
E_D("replace into `dede_asktype` values('33','������������','4','23','0');");
E_D("replace into `dede_asktype` values('34','����','4','22','0');");
E_D("replace into `dede_asktype` values('35','��Ĥ��Һ','4','21','0');");

require("../../inc/footer.php");
?>