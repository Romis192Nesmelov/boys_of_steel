<?php

use MoonShine\Exceptions\MoonShineNotFoundException;
use MoonShine\Forms\LoginForm;
use MoonShine\Http\Middleware\Authenticate;
use MoonShine\Http\Middleware\SecurityHeadersMiddleware;
use MoonShine\Models\MoonshineUser;
use App\MoonShine\Layouts\MyLayout;
use MoonShine\Pages\ProfilePage;

return [
    'dir' => 'app/MoonShine',
    'namespace' => 'App\MoonShine',

    'title' => env('MOONSHINE_TITLE', 'Админ-панель'),
    'logo' => '/storage/images/logo.svg',
    'logo_small' => env('MOONSHINE_LOGO_SMALL'),

    'route' => [
        'domain' => env('MOONSHINE_URL', ''),
        'prefix' => env('MOONSHINE_ROUTE_PREFIX', 'admin'),
        'single_page_prefix' => 'page',
        'index' => 'moonshine.index',
        'middlewares' => [
            SecurityHeadersMiddleware::class,
        ],
        'notFoundHandler' => MoonShineNotFoundException::class,
    ],

    'use_migrations' => true,
    'use_notifications' => false,
    'use_theme_switcher' => true,

    'layout' => MyLayout::class,

    'disk' => 'public',

    'disk_options' => [],

    'cache' => 'file',

    'assets' => [
        'js' => [
            'script_attributes' => [
                'defer',
            ]
        ],
        'css' => [
            'link_attributes' => [
                'rel' => 'stylesheet',
            ]
        ]
    ],

    'forms' => [
        'login' => LoginForm::class
    ],

    'pages' => [
        'dashboard' => App\MoonShine\Pages\Dashboard::class,
        'profile' => ProfilePage::class
    ],

    'model_resources' => [
        'default_with_import' => false,
        'default_with_export' => false,
    ],

    'auth' => [
        'enable' => true,
        'middleware' => Authenticate::class,
        'fields' => [
            'username' => 'email',
            'password' => 'password',
            'name' => 'name',
            'avatar' => 'avatar',
        ],
        'guard' => 'moonshine',
        'guards' => [
            'moonshine' => [
                'driver' => 'session',
                'provider' => 'moonshine',
            ],
        ],
        'providers' => [
            'moonshine' => [
                'driver' => 'eloquent',
                'model' => MoonshineUser::class,
            ],
        ],
        'pipelines' => [],
    ],
    'locales' => [
        'en',
        'ru',
    ],

    'global_search' => [
        // User::class
    ],

    'tinymce' => [
        'file_manager' => false, // or 'laravel-filemanager' prefix for lfm
        'token' => env('MOONSHINE_TINYMCE_TOKEN', ''),
        'version' => env('MOONSHINE_TINYMCE_VERSION', '6'),
    ],

    'socialite' => [
        // 'driver' => 'path_to_image_for_button'
    ],
];
