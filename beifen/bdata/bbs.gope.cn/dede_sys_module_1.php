<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_sys_module`;");
E_C("CREATE TABLE `dede_sys_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hashcode` char(32) NOT NULL DEFAULT '',
  `modname` varchar(30) NOT NULL DEFAULT '',
  `indexname` varchar(20) NOT NULL DEFAULT '',
  `indexurl` varchar(30) NOT NULL DEFAULT '',
  `ismember` tinyint(4) NOT NULL DEFAULT '1',
  `menustring` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `dede_sys_module` values('1','0cce60bc0238aa03804682c801584991','�ٶ�����','','','0','');");
E_D("replace into `dede_sys_module` values('2','1f35620fb42d452fa2bdc1dee1690f92','�ļ�������','','','0','');");
E_D("replace into `dede_sys_module` values('3','72ffa6fabe3c236f9238a2b281bc0f93','������','','','0','');");
E_D("replace into `dede_sys_module` values('4','b437d85a7a7bc778c9c79b5ec36ab9aa','��������','','','0','');");
E_D("replace into `dede_sys_module` values('5','acb8b88eb4a6d4bfc375c18534f9439e','ͶƱģ��','','','0','');");
E_D("replace into `dede_sys_module` values('6','572606600345b1a4bb8c810bbae434cc','�������','','','0','');");
E_D("replace into `dede_sys_module` values('7','0a7bea5dbe571d35def883cbec796437','���Բ�ģ��','','','0','');");

require("../../inc/footer.php");
?>