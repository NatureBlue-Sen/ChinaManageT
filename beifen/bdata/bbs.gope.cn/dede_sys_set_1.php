<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_sys_set`;");
E_C("CREATE TABLE `dede_sys_set` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sname` char(20) NOT NULL DEFAULT '',
  `items` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `dede_sys_set` values('1','nature','�Ը�����,�Ը�����,���ÿ���,��Ĭ����,��Ĭ,����,�ḡ,�嶯,��ǿ,����,����,����,��˵���,��˽,���,����,����,����,�Ը�,�Ա�,��������,����,�ݽ�,С������,����,��ǿ,����˳��,����С��,��������,���ʹ㷺,��ˬ,����,�ƻ��Ʊ�,��ֱ,��α,�ֹ�����,��������,�����ѻ�,��Ƨ,������ĥ,��С����,�����ҵ�,����Ϊ��,��ʵ,�ؾ�,����,�ٶ�,���,����,����Ѷ�,��������,�̱�,��������,��ӹ����,ʱϲʱ��,���û�ʧ,���Կ���,���Ų��,����Ƹ�,ѭ�浸��');");
E_D("replace into `dede_sys_set` values('2','language','��ͨ��,�Ϻ���,�㶫��,Ӣ��,����,����,����,�������,����,��������,����,��������');");

require("../../inc/footer.php");
?>