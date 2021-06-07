<?php

/**
 * Redis library configuration.
 * Redis Session Engine uses this as well.
 * @link https://www.originphp.com/docs/utility/redis/
 *
 * If you are using the Dockerized Development Environment then change host to redis
 */
return [
    'default' => [
        'host' => '127.0.0.1', // or redis for Docker
        'port' => 6379,
    ],
    'session' => [
        'host' => '127.0.0.1', // or redis for Docker
        'port' => 6379,
        'prefix' => 'session_'
    ]
];
