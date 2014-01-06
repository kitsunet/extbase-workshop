<?php
return array(
	'BE' => array(
		'installToolPassword' => 'bacb98acf97e0b6112b1d1b650b84971',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '0',
	),
	'DB' => array(
		'database' => 'extbase-workshop',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => 'extbase',
		'username' => 'extbase',
	),
	'EXT' => array(
		'extConf' => array(
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:0:"";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
			'tmpl_workshop' => 'a:0:{}',
		),
		'extListArray' => array(
			'info',
			'perm',
			'func',
			'filelist',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			'css_styled_content',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'rsaauth',
			'saltedpasswords',
			'tmpl_workshop',
			'extension_builder',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(),
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
	),
	'SYS' => array(
		'compat_version' => '6.1',
		'encryptionKey' => 'fc086467a0272f4caa3c2a2ab9727d4230c72c24a5eb41efc5ef7d4a43c47f1be61e377c34e955215ede94d6d47847d0',
		'sitename' => 'Extbase Workshop',
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>