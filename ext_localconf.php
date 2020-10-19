<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.pfflexslider',
    'Slider',
    [
        'Slider' => 'list'
    ],
    // non-cacheable actions
    []
);
