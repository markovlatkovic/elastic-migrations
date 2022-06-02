<?php declare(strict_types=1);

return [
    'storage' => env('ELASTIC_MIGRATIONS_DIRECTORY', base_path('elastic/migrations')),
    'database' => [
        'table' => env('ELASTIC_MIGRATIONS_TABLE', 'elastic_migrations'),
        'connection' => env('ELASTIC_MIGRATIONS_CONNECTION'),
    ],
    'prefixes' => [
        'index' => env('ELASTIC_MIGRATIONS_INDEX_PREFIX', env('SCOUT_PREFIX', '')),
        'alias' => env('ELASTIC_MIGRATIONS_ALIAS_PREFIX', env('SCOUT_PREFIX', '')),
    ],
];
