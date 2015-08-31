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
E_D("replace into `dede_asktype` values('1','前列腺疾病','0','50','4');");
E_D("replace into `dede_asktype` values('2','性功能障碍','0','40','0');");
E_D("replace into `dede_asktype` values('3','泌尿感染','0','30','1');");
E_D("replace into `dede_asktype` values('4','生殖器整形','0','20','0');");
E_D("replace into `dede_asktype` values('5','男性不育','0','10','1');");
E_D("replace into `dede_asktype` values('6','细菌性前列腺炎','1','57','2');");
E_D("replace into `dede_asktype` values('7','非细菌性列腺炎','1','56','0');");
E_D("replace into `dede_asktype` values('8','前列腺痛','1','55','0');");
E_D("replace into `dede_asktype` values('9','前列腺充血','1','54','0');");
E_D("replace into `dede_asktype` values('10','前列腺囊肿','1','53','0');");
E_D("replace into `dede_asktype` values('11','前列腺增生（肥大)','1','52','1');");
E_D("replace into `dede_asktype` values('12','前列腺癌','1','51','0');");
E_D("replace into `dede_asktype` values('13','阳痿','2','46','0');");
E_D("replace into `dede_asktype` values('14','早泄','2','45','0');");
E_D("replace into `dede_asktype` values('15','不射精','2','44','0');");
E_D("replace into `dede_asktype` values('16','阴茎异常勃起','2','43','0');");
E_D("replace into `dede_asktype` values('17','性心理障碍','2','42','0');");
E_D("replace into `dede_asktype` values('18','性生活','2','41','0');");
E_D("replace into `dede_asktype` values('19','包皮龟头炎','3','392','0');");
E_D("replace into `dede_asktype` values('20','尿道炎','3','391','0');");
E_D("replace into `dede_asktype` values('21','梅毒','3','39','0');");
E_D("replace into `dede_asktype` values('22','淋病','3','38','0');");
E_D("replace into `dede_asktype` values('23','睾丸炎','3','37','0');");
E_D("replace into `dede_asktype` values('24','附睾炎','3','36','0');");
E_D("replace into `dede_asktype` values('25','非淋','3','35','0');");
E_D("replace into `dede_asktype` values('26','软下疳','3','34','0');");
E_D("replace into `dede_asktype` values('27','疱疹','3','33','0');");
E_D("replace into `dede_asktype` values('28','尖锐湿疣','3','32','0');");
E_D("replace into `dede_asktype` values('29','阴虱','3','31','0');");
E_D("replace into `dede_asktype` values('30','包皮过长','4','26','0');");
E_D("replace into `dede_asktype` values('31','包茎','4','25','0');");
E_D("replace into `dede_asktype` values('32','隐睾症','4','24','0');");
E_D("replace into `dede_asktype` values('33','精索静脉曲张','4','23','0');");
E_D("replace into `dede_asktype` values('34','疝气','4','22','0');");
E_D("replace into `dede_asktype` values('35','鞘膜积液','4','21','0');");

require("../../inc/footer.php");
?>