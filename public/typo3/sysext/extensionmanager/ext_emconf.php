<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extension Manager',
    'description' => 'TYPO3 Extension Manager',
    'category' => 'module',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '10.4.37',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.37',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
