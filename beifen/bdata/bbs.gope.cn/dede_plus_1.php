<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_plus`;");
E_C("CREATE TABLE `dede_plus` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `plusname` varchar(30) NOT NULL DEFAULT '',
  `menustring` varchar(200) NOT NULL DEFAULT '',
  `mainurl` varchar(50) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `isshow` smallint(6) NOT NULL DEFAULT '1',
  `filelist` text,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=gbk");
E_D("replace into `dede_plus` values('43','bShare������','<m:item name=''bShare������'' link=''plus_bshare.php'' rank=''plus_bShare������'' target=''main'' />','','֯���Ŷ�','1','<m:item name=''bShare������'' link=''plus_bshare.php'' rank=''plus_bShare������'' target=''main'' />');");
E_D("replace into `dede_plus` values('27','��������ģ��','<m:item name=''��������'' link=''friendlink_main.php'' rank=''plus_��������'' target=''main'' />','','֯���Ŷ�','1','');");
E_D("replace into `dede_plus` values('24','�ļ�������','<m:item name=''�ļ�������'' link=''file_manage_main.php'' rank=''plus_�ļ�������'' target=''main'' />','','֯���Ŷ�','1','');");
E_D("replace into `dede_plus` values('23','�ٶ�����','<m:item name=''�ٶ�����'' link=''baidunews.php'' rank=''plus_�ٶ�����'' target=''main'' />','','֯���Ŷ�','1','baidunews.php');");
E_D("replace into `dede_plus` values('28','ͶƱģ��','<m:item name=''ͶƱģ��'' link=''vote_main.php'' rank=''plus_ͶƱģ��'' target=''main'' />','','֯���Ŷ�','1','');");
E_D("replace into `dede_plus` values('25','������','<m:item name=''������'' link=''ad_main.php'' rank=''plus_������'' target=''main'' />','','֯�ιٷ�','1','');");
E_D("replace into `dede_plus` values('10','�������','<m:item name=''�������'' link=''erraddsave.php'' rank=''plus_�������'' target=''main'' />','','֯���Ŷ�','1','<m:item name=''�������'' link=''catalog_do.php?dopost=erraddsave.php'' rank=''plus_�������'' target=''main'' />');");
E_D("replace into `dede_plus` values('44','���Բ�ģ��','<m:item name=''���Բ�ģ��'' link=''catalog_do.php?dopost=guestbook'' rank=''plus_���Բ�ģ��'' target=''main'' />','','֯���Ŷ�','1','');");

require("../../inc/footer.php");
?>