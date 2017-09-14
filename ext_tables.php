<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.' . $_EXTKEY,
    'Slider',
    'LLL:EXT:pfflexslider/Resources/Private/Language/locallang_db.xlf:plugin.title'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'PF FlexSlider'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_pfflexslider_domain_model_slider',
    'EXT:pfflexslider/Resources/Private/Language/locallang_csh_tx_pfflexslider_domain_model_slider.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pfflexslider_domain_model_slider');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_pfflexslider_domain_model_link',
    'EXT:pfflexslider/Resources/Private/Language/locallang_csh_tx_pfflexslider_domain_model_link.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pfflexslider_domain_model_link');
