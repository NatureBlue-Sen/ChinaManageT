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
E_D("replace into `dede_shops_paytype` values('2','货到付款','货到后支付购物款项');");
E_D("replace into `dede_shops_paytype` values('1','网银支付','能过网上银行支付购物金额');");
E_D("replace into `dede_shops_paytype` values('3','银行转帐','账号:\r\n户名:dd\r\n开户行:');");
E_D("replace into `dede_shops_paytype` values('4','邮政汇款','地址:\r\n邮编:jj\r\n姓名:');");
E_D("replace into `dede_shops_paytype` values('5','点数购买','扣会员站内账上金币点数');");

require("../../inc/footer.php");
?>