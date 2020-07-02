<?php
use Origin\Model\Engine\MysqlEngine;

/**
 * Database configuration
 * Engines are mysql,pgsql, and sqlite
 * @link https://www.originphp.com/docs/getting-started/
 */

return [
    'default' => [
        'host' => env('DB_HOST', '127.0.0.1'),
        'database' => 'application',
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
        'className' => MysqlEngine::class
    ],
    'test' => [
        'host' => env('DB_HOST', '127.0.0.1'),
        'database' => 'application_test',
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
        'className' => MysqlEngine::class
    ]
];
