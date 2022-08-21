<?php

/**
 * Extension Manager/Repository config file for ext "alejandro_demo_seite".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Alejandro Demo Seite',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ars\\AlejandroDemoSeite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alejandro Ruiz',
    'author_email' => 'ruizsotoalejandro@gmail.com',
    'author_company' => 'ARS',
    'version' => '1.0.0',
];
