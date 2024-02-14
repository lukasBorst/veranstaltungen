<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,descritpion',
        'iconfile' => 'EXT:veranstaltungen/Resources/Public/Icons/tx_veranstaltungen_domain_model_veranstaltung.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, descritpion, organisator, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_veranstaltungen_domain_model_veranstaltung',
                'foreign_table_where' => 'AND {#tx_veranstaltungen_domain_model_veranstaltung}.{#pid}=###CURRENT_PID### AND {#tx_veranstaltungen_domain_model_veranstaltung}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.title',
            'description' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'descritpion' => [
            'exclude' => true,
            'label' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.descritpion',
            'description' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.descritpion.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'organisator' => [
            'exclude' => true,
            'label' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.organisator',
            'description' => 'LLL:EXT:veranstaltungen/Resources/Private/Language/locallang_db.xlf:tx_veranstaltungen_domain_model_veranstaltung.organisator.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_veranstaltungen_domain_model_organisator',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
    
    ],
];
