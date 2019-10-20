<?php
use Origin\Storage\Storage;

/**
 * Storage Configuration
 * Engines are Local, Ftp, Sftp
 * @see https://www.originphp.com/docs/storage/
 */

Storage::config('default', [
    'engine' => 'Local',
    'root' => ROOT . '/storage'
]);
