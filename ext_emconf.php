<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Hide By Countries',
    'description' => 'restrict access CEs based on the frontend user country',
    'category' => 'fe',
    'state' => 'stable',
    'version' => '1.0.0',
    'author' => 'Oussema Harrabi',
    'author_email' => 'contact@oussemaharrbi.tn',
    'author_company' => 'Oussema ',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '12.1-12.4.99',
            'backend' => '13.1-12.4.99',
            'extbase' => '13.1-12.4.99',
            'fluid' => '12.1-12.4.99',
            'frontend' => '12.1-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
