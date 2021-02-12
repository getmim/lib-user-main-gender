<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            // 0 Unknown
            // 1 Male
            // 2 Female
            'gender' => [
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => true,
                    'default' => 1
                ],
                'index' => 4500
            ]
        ]
    ]
];
