<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_askanswer`;");
E_C("CREATE TABLE `dede_askanswer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `askid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ifanswer` tinyint(1) NOT NULL DEFAULT '0',
  `tid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `tid2` smallint(6) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(32) NOT NULL DEFAULT '',
  `anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `goodrate` smallint(6) unsigned NOT NULL DEFAULT '0',
  `badrate` smallint(6) unsigned NOT NULL DEFAULT '0',
  `userip` char(15) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `brief` char(200) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `ifcheck` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `askid` (`askid`),
  KEY `uid` (`uid`),
  KEY `dateline` (`askid`,`dateline`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `dede_askanswer` values('1','1','1','3','0','2','huida','0','1','0','127.0.0.1','1280145745','','您好！尿频,尿急,尿痛,尿道灼热瘙痒,及排尿困难,夜尿多.这些都是前列腺炎的临床表现,我院的前列腺分型疗法和离子钛治疗系统会对您的病情有很好的治疗效果的,单纯的药物是达不到治疗效果的,也建议您不要盲目用药,及时的去专业的男性专科医院进行检查和治疗,这样对您的病情有明确的诊断,希望我的回答对您有所帮助。如果还有疑问请点击右侧的客服或者拨打咨询热线52733999环切手术后有助于提高性生活质量，进行专家在线咨询。','1');");

require("../../inc/footer.php");
?>