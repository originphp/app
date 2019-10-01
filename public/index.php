<?php

/**
 * Front Controller.
 */
define('START_TIME', microtime(true));

/**
 * Start the Origin Bootstrap Process.
 */
require dirname(__DIR__) . '/vendor/originphp/framework/src/bootstrap.php';

/**
 * Mini router for static content on built in server
 */
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (file_exists(WEBROOT . $path) and is_file(WEBROOT . $path)) {
        return false;
    }
}

require dirname(__DIR__) . '/vendor/originphp/framework/src/Http/server.php';
