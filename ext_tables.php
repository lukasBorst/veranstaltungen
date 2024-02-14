<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_veranstaltungen_domain_model_veranstaltung', 'EXT:veranstaltungen/Resources/Private/Language/locallang_csh_tx_veranstaltungen_domain_model_veranstaltung.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_veranstaltungen_domain_model_veranstaltung');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_veranstaltungen_domain_model_organisator', 'EXT:veranstaltungen/Resources/Private/Language/locallang_csh_tx_veranstaltungen_domain_model_organisator.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_veranstaltungen_domain_model_organisator');
})();
