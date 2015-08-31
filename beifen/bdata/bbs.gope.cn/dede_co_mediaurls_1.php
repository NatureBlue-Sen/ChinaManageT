<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_co_mediaurls`;");
E_C("CREATE TABLE `dede_co_mediaurls` (
  `nid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hash` char(32) NOT NULL DEFAULT '',
  `tofile` char(60) NOT NULL DEFAULT '',
  KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_co_mediaurls` values('1','f252fc640df523cd00ff9e68fcb8ae17','/uploads/allimg/c111026/13196340D640-164W.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','cae17dd5f91a96b414ef7c45acc020fa','/uploads/allimg/c111026/13196340R350-24502.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','7262ebfbb76aeb42e143904cb33abdc7','/uploads/allimg/c111026/13196340Z330-31S7.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','aebaa90ffab553fedb13927011e5fa9e','/uploads/allimg/c111027/1319645D11Z-14F9.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','598ac6c694292199ed0f8d02b3e18394','/uploads/allimg/c111027/1319645D6030-25255.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','5d46c4a449f9d822e2553eaee01bef77','/uploads/allimg/c111027/1319645E1520-35U6.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','15042681d7209d106b12edcc61fc8bd4','/uploads/allimg/c111027/1319645EC30-41061.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','91e6711a0bf0b71cc57b70dc77b8461f','/uploads/allimg/c111027/1319645F1I0-56113.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','acba201a969fd2ca36a8c05b56e5d35b','/uploads/allimg/c111027/1319645FL20-154J.jpg');");
E_D("replace into `dede_co_mediaurls` values('1','639bcce6f463b48cbb7fbbfea18719db','/uploads/allimg/c111027/1319645G2R0-2I38.jpg');");

require("../../inc/footer.php");
?>