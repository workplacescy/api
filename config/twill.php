<?php

declare(strict_types=1);

use App\Models\Place;

return [
    'enabled' => [
        'activitylog' => false,
        'block-editor' => false,
        'buckets' => false,
        'dashboard' => true,
        'file-library' => false,
        'search' => true,
        'settings' => false,
        'users-image' => false,
    ],
    'auth_login_redirect_path' => '/admin/',
    'load_default_migrations' => false,
    'dashboard' => [
        'modules' => [
            Place::class => [
                'name' => 'places',
                'count' => true,
                'create' => true,
                'activity' => false,
                'draft' => true,
                'search' => true,
            ],
        ],
    ],
    'default_crops' => [
        'photos' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 0,
                ],
            ],
            'thumb' => [
                [
                    'name' => 'thumb',
                    'ratio' => 1,
                ],
            ],
        ],
    ],
    'imgix' => [
        'default_params' => [
            'auto' => 'compress,enhance,format',
            'fit' => 'min',
            //'q' => 80,
        ],
        'thumb_params' => [
            //'crop' => 'edges',
            'crop' => 'entropy',
            'fit' => 'crop',
            'h' => 235,
            'q' => 45,
            'w' => 235,
        ]
    ]
];
