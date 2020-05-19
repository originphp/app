<?php
use Origin\Storage\Engine\LocalEngine;
use Origin\Storage\Engine\S3Engine;

/**
 * Storage Configuration
 * Engines are Local, Ftp, Sftp, S3, Zip
 * @link https://www.originphp.com/docs/storage/
 */

return [
    'default' => [
        'className' => LocalEngine::class,
        'root' => ROOT . '/storage'
    ],
    's3' => [
        'className' => S3Engine::class,
        'credentials' => [
            'key' => env('S3_KEY'), // * required
            'secret' => env('S3_SECRET'), // * required
        ],
        'region' => 'us-east-1', // * required
        'version' => 'latest',
        'endpoint' => env('S3_ENDPOINT'), // for S3 comptabile protocols
        'bucket' => env('S3_BUCKET') // * required
    ]
];
