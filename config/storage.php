<?php

use Origin\Storage\Engine\LocalEngine;
use Origin\Storage\Storage;

/**
 * Storage Configuration
 * Engines are Local, Ftp, Sftp
 * @see https://www.originphp.com/docs/storage/
 */

Storage::config('default', [
    'className' => LocalEngine::class,
    'root' => ROOT . '/storage'
]);
