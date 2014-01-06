<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Kitsunet.' . $_EXTKEY,
	'List',
	array(
		'Product' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		
	)
);

?>