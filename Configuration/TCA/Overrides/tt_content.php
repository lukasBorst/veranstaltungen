<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Veranstaltungen',
    'Listveranstaltung',
    'Veranstaltung: Listenansicht'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Veranstaltungen',
    'Showveranstaltung',
    'Veranstaltung: Detailansicht'
);
