<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_admintype`;");
E_C("CREATE TABLE `dede_admintype` (
  `rank` float NOT NULL DEFAULT '1',
  `typename` varchar(30) NOT NULL DEFAULT '',
  `system` smallint(6) NOT NULL DEFAULT '0',
  `purviews` text,
  PRIMARY KEY (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_admintype` values('1','��Ϣ����Ա','1','t_AccList a_AccNew a_AccList a_MyList a_MyEdit a_MyDel sys_MdPwd sys_Feedback sys_MyUpload plus_���Բ�ģ�� ');");
E_D("replace into `dede_admintype` values('5','Ƶ������Ա','1','t_AccList t_AccNew t_AccEdit t_AccDel a_AccNew a_AccList a_AccEdit a_AccDel a_AccCheck a_MyList a_MyEdit a_MyDel a_MyCheck co_AddNote co_EditNote co_PlayNote co_ListNote co_ViewNote spec_New spec_List spec_Edit sys_MdPwd sys_Log sys_ArcTj sys_Source sys_Writer sys_Keyword sys_MakeHtml sys_Feedback sys_Upload sys_MyUpload member_List member_Edit plus_վ�����ŷ��� plus_��������ģ�� plus_���Բ�ģ�� plus_ͶƱģ�� plus_������ ');");
E_D("replace into `dede_admintype` values('10','��������Ա','1','admin_AllowAll ');");

require("../../inc/footer.php");
?>