<?php
/**
 * Front Controller.
 */
define('START_TIME', microtime(true));

/**
 * Start the Origin Bootstrap Process.
 */
require dirname(__DIR__) . DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR .'originphp'. DIRECTORY_SEPARATOR .'framework'. DIRECTORY_SEPARATOR .'src'. DIRECTORY_SEPARATOR .'bootstrap.php';

/**
 * Mini router for static content on built in server
 */
if (php_sapi_name() == 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (file_exists(WEBROOT . $path) and is_file(WEBROOT . $path)) {
        return false;
    }
}

$Dispatcher = new Origin\Http\Dispatcher();
$Dispatcher->start();
