<?php
return [
    'default'     => env('APP_ENV', 'local'),
    'migrations' => 'migrations',
    'connections' => [
        'local' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'lumen',
            'username'  => 'root',
            'password'  => 'entrar',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'testing' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'lumen_test',
            'username'  => 'root',
            'password'  => 'entrar',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];