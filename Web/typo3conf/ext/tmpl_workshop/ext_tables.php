<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/', 'Template Workshop');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("
TCEFORM.pages {
	layout.disabled = 0
	fe_group.disabled = 0
}
TCEFORM.tt_content {
	sys_language_uid.disabled = 1
	layout.disabled = 0
	colPos.disabled = 0
	spaceBefore.disabled = 0
	spaceAfter.disabled = 0
	fe_group.disabled = 0
}

TCEFORM.tt_content.section_frame.removeItems = 1,5,6,10,11,12,66
TCEFORM.tt_content.section_frame.addItems {
}

RTE.default {
	#hideButtons = fontstyle,fontsize,line,table,textcolor,left,center,right
	#showButtons = formatblock,cut,copy,paste,bold,italic,underline,orderedlist,unorderedlist,outdent,indent,link,image,chMode
	#contentCSS =
}
mod.wizards.newContentElement.renderMode = tabs

");

?>