<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_shops_delivery`;");
E_C("CREATE TABLE `dede_shops_delivery` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dname` char(80) NOT NULL,
  `price` float(13,2) NOT NULL DEFAULT '0.00',
  `des` char(255) DEFAULT NULL,
  `orders` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  KEY `orders` (`orders`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `dede_shops_delivery` values('1','�ͻ�����','10.21','�ͻ�����,��ȡ��Ʒʱ����.','0');");
E_D("replace into `dede_shops_delivery` values('2','�ؿ�ר�ݣ�EMS��','25.00','�ؿ�ר�ݣ�EMS��,Ҫ����������.','0');");
E_D("replace into `dede_shops_delivery` values('3','��ͨ�ʵ�','5.00','��ͨ�ʵ�','0');");
E_D("replace into `dede_shops_delivery` values('4','�ʾֿ���','12.00','�ʾֿ���','0');");

require("../../inc/footer.php");
?>