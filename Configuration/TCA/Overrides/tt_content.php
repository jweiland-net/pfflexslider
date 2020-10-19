<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.pfflexslider',
    'Slider',
    'LLL:EXT:pfflexslider/Resources/Private/Language/locallang_db.xlf:plugin.title'
);
