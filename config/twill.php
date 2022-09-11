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
];
