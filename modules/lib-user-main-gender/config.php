<?php

return [
    '__name' => 'lib-user-main-gender',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-gender.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-gender' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => [
            [
                'lib-formatter' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'user.gender' => [
                'Unknown', 'Male', 'Female'
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'gender' => [
                    'type' => 'enum',
                    'enum' => 'user.gender',
                    'vtype' => 'int'
                ]
            ]
        ]
    ]
];
