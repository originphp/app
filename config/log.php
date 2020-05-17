<?php
/**
 * Log Configuration
 * Engines include File,Console,Email and Syslog
 * @see https://www.originphp.com/docs/log/
 */

use Origin\Log\Engine\FileEngine;
use Origin\Log\Log;

Log::config('default', [
    'className' => FileEngine::class,
    'file' => LOGS . '/application.log'
]);
