<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_mail_order`;");
E_C("CREATE TABLE `dede_mail_order` (
  `mid` mediumint(8) NOT NULL,
  `typeid` smallint(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>