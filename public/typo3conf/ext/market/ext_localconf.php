<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['market'] = 'EXT:market/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['SplitUpProcessOrderCreateEvent'] = true;


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}



/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:market/Configuration/TsConfig/Page/All.tsconfig">');
