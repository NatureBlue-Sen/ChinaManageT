<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_shops_paytype`;");
E_C("CREATE TABLE `dede_shops_paytype` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `paytype` varchar(20) NOT NULL,
  `des` text,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `dede_shops_paytype` values('2','��������','������֧���������');");
E_D("replace into `dede_shops_paytype` values('1','����֧��','�ܹ���������֧��������');");
E_D("replace into `dede_shops_paytype` values('3','����ת��','�˺�:\r\n����:dd\r\n������:');");
E_D("replace into `dede_shops_paytype` values('4','�������','��ַ:\r\n�ʱ�:jj\r\n����:');");
E_D("replace into `dede_shops_paytype` values('5','��������','�ۻ�Ավ�����Ͻ�ҵ���');");

require("../../inc/footer.php");
?>