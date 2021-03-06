<?php
return [
    'home' => [
        'route' => '/',
        'path' => [
            'classname' => 'NightStandardEdition\Controller\HomeController',
            'callablemethod' => 'homeAction'
        ]
    ],
    'worldRepository' => [
        'route' => '/world/cities/{countryCode',
        'path' => [
            'classname' => 'NightStandardEdition\Controller\RepositoryController',
            'callablemethod' => 'listCitiesFromCountryCodeAction'
        ]
    ],
    'worldRepositoryJSON' => [
        'route' => '/json/world/cities/{countryCode',
        'path' => [
            'classname' => 'NightStandardEdition\Controller\RepositoryController',
            'callablemethod' => 'listCitiesFromCountryCodeActionJSON'
        ]
    ],
    'translations' => [
        'route' => '/translations/{lang}',
        'path' => [
            'classname' => 'NightStandardEdition\Controller\TranslationsController',
            'callablemethod' => 'translateAction'
        ]
    ],
    'notfound' => [
        'route' => '',
        'path' => [
            'classname' => 'NightStandardEdition\Controller\NotFoundController',
            'callablemethod' => 'notFoundAction'
        ]
    ]
];