<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Veranstaltungen',
        'Listveranstaltung',
        [
            \Lb\Veranstaltungen\Controller\VeranstaltungController::class => 'list'
        ],
        // non-cacheable actions
        [
            \Lb\Veranstaltungen\Controller\VeranstaltungController::class => ''
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Veranstaltungen',
        'Showveranstaltung',
        [
            \Lb\Veranstaltungen\Controller\VeranstaltungController::class => 'show'
        ],
        // non-cacheable actions
        [
            \Lb\Veranstaltungen\Controller\VeranstaltungController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    listveranstaltung {
                        iconIdentifier = veranstaltungen-plugin-listveranstaltung
                        title = LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_listveranstaltung.name
                        description = LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_listveranstaltung.description
                        tt_content_defValues {
                            CType = list
                            list_type = veranstaltungen_listveranstaltung
                        }
                    }
                    showveranstaltung {
                        iconIdentifier = veranstaltungen-plugin-showveranstaltung
                        title = LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_showveranstaltung.name
                        description = LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_showveranstaltung.description
                        tt_content_defValues {
                            CType = list
                            list_type = veranstaltungen_showveranstaltung
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
