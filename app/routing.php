<?php
return [
    'vinos' => [
        'route' => '/vinos',
        'path' => [
            'classname' => 'NightStandardEdition\\Controller\\VinosController',
            'callablemethod' => 'listVinosAction'
        ]
    ],
    'notfound' => [
        'route' => '',
        'path' => [
            'classname' => 'NightStandardEdition\\Controller\\NotFoundController',
            'callablemethod' => 'notFoundAction'
        ]
    ]
];