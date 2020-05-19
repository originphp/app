<?php

use Origin\Storage\Engine\LocalEngine;

/**
 * Storage Configuration
 * Engines are Local, Ftp, Sftp, S3, Zip
 * @link https://www.originphp.com/docs/storage/
 */

return [
    'default' => [
        'className' => LocalEngine::class,
        'root' => ROOT . '/storage'
    ]
];
