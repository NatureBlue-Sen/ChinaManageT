<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_sysconfig`;");
E_C("CREATE TABLE `dede_sysconfig` (
  `aid` smallint(8) unsigned NOT NULL DEFAULT '0',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '1',
  `type` varchar(10) NOT NULL DEFAULT 'string',
  `value` text,
  PRIMARY KEY (`varname`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `dede_sysconfig` values('1','cfg_basehost','վ�����ַ','1','string','http://127.0.0.1');");
E_D("replace into `dede_sysconfig` values('2','cfg_cmspath','DedeCMS��װĿ¼','2','string','');");
E_D("replace into `dede_sysconfig` values('3','cfg_cookie_encode','cookie������','2','string','MdXCt1137Z');");
E_D("replace into `dede_sysconfig` values('4','cfg_indexurl','��ҳ��ҳ����','1','string','/');");
E_D("replace into `dede_sysconfig` values('5','cfg_backup_dir','���ݱ���Ŀ¼����dataĿ¼�ڣ�','2','string','backupdata');");
E_D("replace into `dede_sysconfig` values('6','cfg_indexname','��ҳ������','1','string','��ҳ');");
E_D("replace into `dede_sysconfig` values('7','cfg_webname','��վ����','1','string','�ҵ���վ');");
E_D("replace into `dede_sysconfig` values('8','cfg_adminemail','��վ����EMAIL','2','string','admin@dedecms.com');");
E_D("replace into `dede_sysconfig` values('9','cfg_html_editor','Html�༭����ckeditor,��Ҫfck���û�����ȥ�������أ�','2','string','ckeditor');");
E_D("replace into `dede_sysconfig` values('10','cfg_arcdir','�ĵ�HTMLĬ�ϱ���·��','1','string','/a');");
E_D("replace into `dede_sysconfig` values('11','cfg_medias_dir','ͼƬ/�ϴ��ļ�Ĭ��·��','1','string','/uploads');");
E_D("replace into `dede_sysconfig` values('12','cfg_ddimg_width','����ͼĬ�Ͽ��','3','number','240');");
E_D("replace into `dede_sysconfig` values('13','cfg_ddimg_height','����ͼĬ�ϸ߶�','3','number','180');");
E_D("replace into `dede_sysconfig` values('63','cfg_album_width','ͼ��Ĭ����ʾͼƬ�Ĵ�С','3','number','800');");
E_D("replace into `dede_sysconfig` values('15','cfg_imgtype','ͼƬ������ļ�����','3','string','jpg|gif|png');");
E_D("replace into `dede_sysconfig` values('16','cfg_softtype','�����ϴ����������','3','bstring','zip|gz|rar|iso|doc|xsl|ppt|wps');");
E_D("replace into `dede_sysconfig` values('17','cfg_mediatype','����Ķ�ý���ļ�����','3','bstring','swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov');");
E_D("replace into `dede_sysconfig` values('18','cfg_specnote','ר������ڵ���','2','number','6');");
E_D("replace into `dede_sysconfig` values('19','cfg_list_symbol','��Ŀλ�õļ������','2','string',' > ');");
E_D("replace into `dede_sysconfig` values('20','cfg_notallowstr','���ô��ϵͳ��ֱ��ֹͣ�û�������<br/>��|�ֿ�������Ҫ�ڽ�β��|','5','bstring','�ǵ�|���̲�|����');");
E_D("replace into `dede_sysconfig` values('21','cfg_feedbackcheck','���ۼ�����(��/��)�����','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('22','cfg_keyword_replace','�ؼ����滻(��/��)ʹ�ñ����ܻ�Ӱ��HTML�����ٶ�','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('23','cfg_fck_xhtml','�༭��(��/��)ʹ��XHTML','1','bool','N');");
E_D("replace into `dede_sysconfig` values('24','cfg_df_style','ģ��Ĭ�Ϸ��','1','string','moban');");
E_D("replace into `dede_sysconfig` values('25','cfg_multi_site','(��/��)֧�ֶ�վ�㣬��������󸽼�����Ŀ���ӡ�arclist�������þ�����ַ','2','bool','N');");
E_D("replace into `dede_sysconfig` values('58','cfg_rm_remote','Զ��ͼƬ���ػ�','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('27','cfg_dede_log','(��/��)����������־','2','bool','N');");
E_D("replace into `dede_sysconfig` values('28','cfg_powerby','��վ��Ȩ��Ϣ','1','bstring','Copyright &copy; 2002-2011 DEDECMS. ֯�οƼ� ��Ȩ����');");
E_D("replace into `dede_sysconfig` values('722','cfg_jump_once','��ת��ַ�Ƿ�ֱ����ת����������ʾ��תҳ��','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('723','cfg_task_pwd','ϵͳ�ƻ�����ͻ����������<br/>(��Ҫ�ͻ��ˣ�ͨ������̫��Ҫ)','7','string','');");
E_D("replace into `dede_sysconfig` values('29','cfg_arcsptitle','(��/��)������ҳ���⣬������Ӱ��HTML�����ٶ�','6','bool','N');");
E_D("replace into `dede_sysconfig` values('30','cfg_arcautosp','(��/��)�����������Զ���ҳ','6','bool','N');");
E_D("replace into `dede_sysconfig` values('31','cfg_arcautosp_size','�����Զ���ҳ��С����λ: K��','6','number','5');");
E_D("replace into `dede_sysconfig` values('32','cfg_auot_description','�Զ�ժҪ���ȣ�0-250��0��ʾ�����ã�','7','number','240');");
E_D("replace into `dede_sysconfig` values('33','cfg_ftp_host','FTP����','2','string','');");
E_D("replace into `dede_sysconfig` values('34','cfg_ftp_port','FTP�˿�','2','number','21');");
E_D("replace into `dede_sysconfig` values('35','cfg_ftp_user','FTP�û���','2','string','');");
E_D("replace into `dede_sysconfig` values('36','cfg_ftp_pwd','FTP����','2','string','');");
E_D("replace into `dede_sysconfig` values('37','cfg_ftp_root','��վ����FTP�е�Ŀ¼','2','string','/');");
E_D("replace into `dede_sysconfig` values('38','cfg_ftp_mkdir','�Ƿ�ǿ����FTP����Ŀ¼','2','bool','N');");
E_D("replace into `dede_sysconfig` values('39','cfg_feedback_ck','���ۼ���֤����ȷ��','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('40','cfg_list_son','�ϼ��б��Ƿ������������','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('41','cfg_mb_open','�Ƿ�����Ա����','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('42','cfg_mb_album','�Ƿ�����Աͼ������','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('43','cfg_mb_upload','�Ƿ������Ա�ϴ���ͼƬ����','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('44','cfg_mb_upload_size','��Ա�ϴ��ļ���С(K)','4','number','1024');");
E_D("replace into `dede_sysconfig` values('45','cfg_mb_sendall','�Ƿ񿪷Ż�Ա���Զ���ģ��Ͷ��','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('46','cfg_mb_rmdown','�Ƿ�ѻ�Աָ����Զ���ĵ����ص�����','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('47','cfg_cli_time','������ʱ������','2','number','8');");
E_D("replace into `dede_sysconfig` values('48','cfg_mb_addontype','��Ա������ɵ�����','4','bstring','swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov|zip|rar|doc|xsl|ppt|wps');");
E_D("replace into `dede_sysconfig` values('49','cfg_mb_max','��Ա�����ܴ�С����(MB)','4','number','500');");
E_D("replace into `dede_sysconfig` values('20','cfg_replacestr','�滻�������ᱻ�滻��***��<br/>��|�ֿ�������Ҫ�ڽ�β��|','5','bstring','����|����|����|����|ȥ��|����');");
E_D("replace into `dede_sysconfig` values('719','cfg_makeindex','�������º����ϸ�����վ��ҳ','6','bool','N');");
E_D("replace into `dede_sysconfig` values('51','cfg_keyword_like','ʹ�ùؼ��ʹ�������','6','bool','N');");
E_D("replace into `dede_sysconfig` values('52','cfg_index_max','��վ��ҳ���ú�����������ĵ���<br>�������ھ�������Ŀ�ɼ��������ݵ���վ<br>�����ñ����ֵ����Ϊ0����','6','number','10000');");
E_D("replace into `dede_sysconfig` values('53','cfg_index_cache','arclist��ǩ���û���<br />(0 �����ã�����0ֵΪ������)','6','number','86400');");
E_D("replace into `dede_sysconfig` values('54','cfg_tplcache','�Ƿ�����ģ�建��','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('55','cfg_tplcache_dir','ģ�建��Ŀ¼','6','string','/data/tplcache');");
E_D("replace into `dede_sysconfig` values('56','cfg_makesign_cache','����/�޸ĵ����ĵ��Ƿ�ʹ�õ��û���','6','bool','N');");
E_D("replace into `dede_sysconfig` values('59','cfg_arc_dellink','ɾ����վ������','7','bool','N');");
E_D("replace into `dede_sysconfig` values('60','cfg_arc_autopic','��ȡ��һ��ͼƬ��Ϊ����ͼ','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('61','cfg_arc_autokeyword','�Զ���ȡ�ؼ���','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('62','cfg_title_maxlen','�ĵ�������󳤶�<br>�Ĵ˲�������Ҫ�ֹ��޸����ݱ�','7','number','60');");
E_D("replace into `dede_sysconfig` values('64','cfg_check_title','�����ĵ�ʱ�Ƿ����ظ�����','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('65','cfg_album_row','ͼ�����ж�����ʽĬ������','3','number','3');");
E_D("replace into `dede_sysconfig` values('66','cfg_album_col','ͼ�����ж�����ʽĬ������','3','number','4');");
E_D("replace into `dede_sysconfig` values('67','cfg_album_pagesize','ͼ����ҳ��ͼÿҳ��ʾ�����','3','number','12');");
E_D("replace into `dede_sysconfig` values('68','cfg_album_style','ͼ��Ĭ����ʽ<br />1Ϊ��ҳ��ͼ,2Ϊ��ҳ��ͼ,3Ϊ����ͼ�б�','3','number','2');");
E_D("replace into `dede_sysconfig` values('69','cfg_album_ddwidth','ͼ��Ĭ������ͼ��С','3','number','200');");
E_D("replace into `dede_sysconfig` values('70','cfg_mb_notallow','������ע��Ļ�Աid','4','bstring','www,bbs,ftp,mail,user,users,admin,administrator');");
E_D("replace into `dede_sysconfig` values('71','cfg_mb_idmin','�û�id��С����','4','number','3');");
E_D("replace into `dede_sysconfig` values('72','cfg_mb_pwdmin','�û�������С����','4','number','3');");
E_D("replace into `dede_sysconfig` values('73','cfg_md_idurl','�Ƿ��ϸ��޶���Ա��¼id<br>�����Աʹ�ö��������������ô���','4','bool','N');");
E_D("replace into `dede_sysconfig` values('74','cfg_mb_rank','ע���ԱĬ�ϼ���<br>[��ԱȨ�޹�����]�鿴������������','4','number','10');");
E_D("replace into `dede_sysconfig` values('76','cfg_feedback_time','�����������ټ��ʱ��(����)','5','number','30');");
E_D("replace into `dede_sysconfig` values('77','cfg_feedback_numip','ÿ��IPһСʱ�����������','5','number','30');");
E_D("replace into `dede_sysconfig` values('78','cfg_md_mailtest','�Ƿ�����Emailֻ��ע��һ���ʺ�','4','bool','N');");
E_D("replace into `dede_sysconfig` values('79','cfg_mb_spacesta','��Աʹ��Ȩ�޿�ͨ״̬<br>(-10 �ʼ���֤ -1 �ֹ����, 0 û����)','4','number','-10');");
E_D("replace into `dede_sysconfig` values('728','cfg_mb_allowreg','�Ƿ������»�Աע��','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('729','cfg_mb_adminlock','�Ƿ��ֹ���ʹ���Ա�ʺŵĿռ�','4','bool','N');");
E_D("replace into `dede_sysconfig` values('81','cfg_vdcode_member','��ԱͶ���Ƿ�ʹ����֤��','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('83','cfg_mb_cktitle','��ԱͶ���Ƿ����ظ�����','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('84','cfg_mb_editday','Ͷ��೤ʱ��������޸�[��]','5','number','7');");
E_D("replace into `dede_sysconfig` values('729','cfg_sendarc_scores','Ͷ��ɻ�ȡ����','5','number','10');");
E_D("replace into `dede_sysconfig` values('88','cfg_caicai_sub','���ȿ۳����º�����','5','number','2');");
E_D("replace into `dede_sysconfig` values('89','cfg_caicai_add','�����۳����º�����','5','number','2');");
E_D("replace into `dede_sysconfig` values('90','cfg_feedback_add','��ϸ�����ɻ������','5','number','5');");
E_D("replace into `dede_sysconfig` values('91','cfg_feedback_sub','��ϸ�����۳�������','5','number','5');");
E_D("replace into `dede_sysconfig` values('730','cfg_sendfb_scores','�������ۿɻ����','5','number','3');");
E_D("replace into `dede_sysconfig` values('92','cfg_search_max','�����������ĵ���','6','number','50000');");
E_D("replace into `dede_sysconfig` values('93','cfg_search_maxrc','��󷵻����������','6','number','300');");
E_D("replace into `dede_sysconfig` values('94','cfg_search_time','�������ʱ��(��/����վ�����û�)','6','number','3');");
E_D("replace into `dede_sysconfig` values('95','cfg_baidunews_limit','�ٶ�����xml������������ ���100','8','string','100');");
E_D("replace into `dede_sysconfig` values('223','cfg_smtp_port','smtp�������˿�','2','string','25');");
E_D("replace into `dede_sysconfig` values('221','cfg_sendmail_bysmtp','�Ƿ�����smtp��ʽ�����ʼ�','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('222','cfg_smtp_server','smtp������','2','string','smtp.qq.com');");
E_D("replace into `dede_sysconfig` values('224','cfg_smtp_usermail','SMTP���������û�����','2','string','desdev@vip.qq.com');");
E_D("replace into `dede_sysconfig` values('225','cfg_smtp_user','SMTP���������û��ʺ�','2','string','desdev');");
E_D("replace into `dede_sysconfig` values('226','cfg_smtp_password','SMTP���������û�����','2','string','7260444huxiao');");
E_D("replace into `dede_sysconfig` values('96','cfg_updateperi','�ٶ�����xml����ʱ�� ����λ�����ӣ�','8','string','15');");
E_D("replace into `dede_sysconfig` values('227','cfg_online_type','����֧����������','2','string','nps');");
E_D("replace into `dede_sysconfig` values('706','cfg_upload_switch','ɾ�������ļ�ͬʱɾ����ظ����ļ�','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('708','cfg_rewrite','�Ƿ�ʹ��α��̬','2','bool','N');");
E_D("replace into `dede_sysconfig` values('707','cfg_allsearch_limit','��վȫ������ʱ������','2','string','1');");
E_D("replace into `dede_sysconfig` values('709','cfg_delete','���»���վ(��/��)����','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('710','cfg_keywords','վ��Ĭ�Ϲؼ���','1','string','');");
E_D("replace into `dede_sysconfig` values('711','cfg_description','վ������','1','bstring','');");
E_D("replace into `dede_sysconfig` values('712','cfg_beian','��վ������','1','string','������...');");
E_D("replace into `dede_sysconfig` values('713','cfg_need_typeid2','�Ƿ����ø���Ŀ','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('72','cfg_mb_pwdtype','ǰ̨������֤���ͣ�Ĭ��32 �� 32λmd5����ѡ��<br />l16 �� ǰ16λ�� r16 �� ��16λ�� m16 �� �м�16λ','4','string','32');");
E_D("replace into `dede_sysconfig` values('716','cfg_cache_type','id �ĵ�ID��content ��ǩ��������<br />(�޸Ĵ˱�����������ϵͳ����)','6','string','id');");
E_D("replace into `dede_sysconfig` values('717','cfg_max_face','��Ա�ϴ�ͷ���С����(��λ��KB)','3','number','50');");
E_D("replace into `dede_sysconfig` values('718','cfg_typedir_df','��Ŀ��ַʹ��Ŀ¼��������ʾĬ��ҳ������ /a/abc/ ��ʽ��','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('719','cfg_make_andcat','�������º����ϸ��������Ŀ','6','bool','N');");
E_D("replace into `dede_sysconfig` values('720','cfg_make_prenext','�������º����ϸ�������ƪ','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('721','cfg_feedback_forbid','�Ƿ��ֹ��������(��������ֹ���ȵ�)','5','bool','N');");
E_D("replace into `dede_sysconfig` values('724','cfg_addon_domainbind','����Ŀ¼�Ƿ��Ϊָ���Ķ�������','7','bool','N');");
E_D("replace into `dede_sysconfig` values('725','cfg_addon_domain','����Ŀ¼�Ķ�������','7','string','');");
E_D("replace into `dede_sysconfig` values('726','cfg_df_dutyadmin','Ĭ�����α༭(dutyadmin)','7','string','admin');");
E_D("replace into `dede_sysconfig` values('727','cfg_mb_allowncarc','�Ƿ������û��ռ���ʾδ�������','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('730','cfg_mb_spaceallarc','��Ա�ռ��������ĵ���Ƶ��ID(����Ϊ0)','4','number','0');");
E_D("replace into `dede_sysconfig` values('731','cfg_face_adds','�ϴ�ͷ�����ӻ���','5','number','10');");
E_D("replace into `dede_sysconfig` values('732','cfg_moreinfo_adds','��д��ϸ�������ӻ���','5','number','20');");
E_D("replace into `dede_sysconfig` values('733','cfg_money_scores','���ٻ��ֿ��Զһ�һ�����','5','number','50');");
E_D("replace into `dede_sysconfig` values('734','cfg_mb_wnameone','�Ƿ������û�����/�ǳ��ظ�','4','bool','N');");
E_D("replace into `dede_sysconfig` values('735','cfg_arc_dirname','�Ƿ�������Ŀ¼��Ϊ�ĵ��ļ���<br />�ĵ������������Ϊ��{typedir}/{aid}/index.html','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('736','cfg_puccache_time','�軺������ȫ�ֻ���ʱ��(��)','6','number','36000');");
E_D("replace into `dede_sysconfig` values('737','cfg_arc_click','�ĵ�Ĭ�ϵ����(-1��ʾ���50-200)','7','number','-1');");
E_D("replace into `dede_sysconfig` values('738','cfg_addon_savetype','����������ʽ(��data�������ڲ���)','3','string','ymd');");
E_D("replace into `dede_sysconfig` values('739','cfg_qk_uploadlit','�첽�ϴ�����ͼ(�ռ�̫���ȶ����û��رմ���)','3','bool','Y');");
E_D("replace into `dede_sysconfig` values('740','cfg_login_adds','��¼��Ա���Ļ����','5','number','2');");
E_D("replace into `dede_sysconfig` values('741','cfg_userad_adds','��Ա�ƹ�����','5','number','10');");
E_D("replace into `dede_sysconfig` values('742','cfg_ddimg_full','����ͼ�Ƿ�ʹ��ǿ�ƴ�С(�Ա������)','3','bool','N');");
E_D("replace into `dede_sysconfig` values('743','cfg_ddimg_bgcolor','����ͼ�հױ��������ɫ(0-��,1-��)','3','number','0');");
E_D("replace into `dede_sysconfig` values('744','cfg_replace_num','�ĵ�����ͬһ�ؼ����滻����(0Ϊȫ���滻)','7','number','2');");
E_D("replace into `dede_sysconfig` values('745','cfg_uplitpic_cut','�ϴ�����ͼ���Ƿ����ϵ����ü���','3','bool','Y');");
E_D("replace into `dede_sysconfig` values('746','cfg_album_mark','ͼ���Ƿ�ʹ��ˮӡ(СͼҲ����Ӱ��)','3','bool','N');");
E_D("replace into `dede_sysconfig` values('747','cfg_mb_feedcheck','��Ա��̬�Ƿ���Ҫ���','4','bool','N');");
E_D("replace into `dede_sysconfig` values('748','cfg_mb_msgischeck','��Ա״̬�Ƿ���Ҫ���','4','bool','N');");
E_D("replace into `dede_sysconfig` values('749','cfg_mb_reginfo','ע���Ƿ���Ҫ�����ϸ���ϵ���д','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('750','cfg_remote_site','�Ƿ�����Զ��վ��','2','bool','N');");
E_D("replace into `dede_sysconfig` values('751','cfg_title_site','�Ƿ񷢲��ͱ༭�ĵ�ʱԶ�̷���(����Զ��վ���ǰ����)','2','bool','N');");
E_D("replace into `dede_sysconfig` values('752','cfg_mysql_type','���ݿ����ͣ�֧��mysql��mysqli��','2','string','mysql');");
E_D("replace into `dede_sysconfig` values('753','cfg_sphinx_article','�Ƿ���������ȫ�ļ������ܣ�������sphinx��������','7','bool','N');");
E_D("replace into `dede_sysconfig` values('754','cfg_sphinx_host','Sphinx������������ַ','7','string','localhost');");
E_D("replace into `dede_sysconfig` values('755','cfg_sphinx_port','Sphinx�������˿ں�','7','number','9312');");
E_D("replace into `dede_sysconfig` values('14','cfg_domain_cookie','������cookie������(����: .dedecms.com)','2','string','');");
E_D("replace into `dede_sysconfig` values('756','cfg_memcache_enable','�Ƿ�����memcache���棬���Ϊ��(N)��Ĭ��ʹ���ļ�����','6','bool','N');");
E_D("replace into `dede_sysconfig` values('757','cfg_memcache_mc_defa','Ĭ��memcache�����������ַ','6','string','memcache://127.0.0.1:11211/default127');");
E_D("replace into `dede_sysconfig` values('758','cfg_memcache_mc_oth','����memcache�����������ַ','6','string','');");

require("../../inc/footer.php");
?>