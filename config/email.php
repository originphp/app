<?php

/**
 * Email Configuration
 * @link https://www.originphp.com/docs/utility/email/
 */

return [
    'default' => [
        'host' => env('EMAIL_HOST'),
        'port' => env('EMAIL_PORT'),
        'username' => env('EMAIL_USERNAME'),
        'password' => env('EMAIL_PASSWORD'),
        'timeout' => 30,
        'ssl' => env('EMAIL_SSL'),
        'tls' => env('EMAIL_TLS'),
    ],
    /**
     * Test engine does not actually send the email
     */
    'test' => [
        'engine' => 'Test'
    ]
];
