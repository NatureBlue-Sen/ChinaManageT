<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_payment`;");
E_C("CREATE TABLE `dede_payment` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(120) NOT NULL DEFAULT '',
  `fee` varchar(10) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `dede_payment` values('3','alipay','֧����','2','֧������վ(www.alipay.com) �ǹ����Ƚ�������֧��ƽ̨��<br/>DedeCMS����֧�����Ƴ�֧�����ӿڡ�<br/><a href=\"https://www.alipay.com/himalayas/practicality_customer.htm?customer_external_id=C4335994340215837114&market_type=from_agent_contract&pro_codes=6ACD133C5F350958F7F62F29651356BB \" target=\"_blank\"><font color=\"red\">������������</font></a>','1','a:4:{s:14:\"alipay_account\";a:4:{s:5:\"title\";s:14:\"֧�����û��˺�\";s:11:\"description\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:20:\"yuan12345xin@163.com\";}s:10:\"alipay_key\";a:4:{s:5:\"title\";s:14:\"���װ�ȫУ����\";s:11:\"description\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:6:\"dsfsdf\";}s:14:\"alipay_partner\";a:4:{s:5:\"title\";s:12:\"���������ID\";s:11:\"description\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:1:\"1\";}s:17:\"alipay_pay_method\";a:5:{s:5:\"title\";s:14:\"֧�����˺�����\";s:11:\"description\";s:52:\"��ѡ�������һ�θ�֧����ǩ����Э������˵���Ľӿ�����\";s:4:\"type\";s:6:\"select\";s:5:\"iterm\";s:58:\"0:ʹ�ñ�׼˫�ӿ�,1:ʹ�õ������׽ӿ�,2:ʹ�ü�ʱ���ʽ��׽ӿ�\";s:5:\"value\";s:1:\"1\";}}','1','0','1');");
E_D("replace into `dede_payment` values('2','bank','���л��/ת��','0','��������	\n�տ�����Ϣ��ȫ�� ������ ���ʺŻ��ַ ������ �������� ��������	\nע�����������ʱ�����ڵ�㵥�������;��һ����ע�����Ķ����š�','4','a:0:{}','1','1','0');");
E_D("replace into `dede_payment` values('1','cod','��������','0','��ͨ���У�������	\n�����������򣺡�����','3','a:0:{}','1','1','0');");
E_D("replace into `dede_payment` values('6','yeepay','YeePay�ױ�','12','YeePay�ױ�������ͨ��ͨ��Ϣ�������޹�˾����רҵ���¶�Ԫ������֧��ҵ��һվʽ����������ߡ�������������֧����ͬʱ��YeePay�ױ����ϴ��£������������ֻ����̶��绰������һ��ƽ̨�ϣ��̶���֧�����ֻ���ֵ֮���׼��Ƴ���YeePay�ױ��绰֧��ҵ������ʵ��������֧����Ϊ���ഫͳ��ҵ��˵���֧���ĸ��ٹ�·��YeePay�ױ��ں������Ƚ��ĵ���֧���Ļ����ۺ��ڶ���ڡ����š�IT���������������ڵľ�뢣�ּ��ͨ�����µ�֧�����ƣ��ƶ��й����������½��̡�YeePay�ױ������ڳ�Ϊ����һ���ĵ���֧��Ӧ�úͷ����ṩ�̣�רע�ڽ�����ֵ������ƶ���ֵ�����������򣬴��²��ƹ��Ԫ�����ͳɱ��ġ���ȫ��Ч��֧������<input type=\"button\" name=\"Submit\" value=\"����ע��\" onclick=\"window.open(\"https://www.yeepay.com/selfservice/requestRegister.action\")\" />','2','a:2:{s:10:\"yp_account\";a:4:{s:5:\"title\";s:8:\"�̻����\";s:11:\"description\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:2:\"aa\";}s:6:\"yp_key\";a:4:{s:5:\"title\";s:8:\"�̻���Կ\";s:11:\"description\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:3:\"dsa\";}}','1','0','1');");

require("../../inc/footer.php");
?>