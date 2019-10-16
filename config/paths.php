<?php
/**
 * Constants for file paths are configured here
 * DS is kept for backwards comptability.
 */
if (! defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CONFIG', ROOT . '/config');
define('DATABASE', ROOT . '/database');
define('PLUGINS', ROOT . '/plugins');
define('TESTS', ROOT . '/tests');
define('WEBROOT', ROOT . '/public');
define('TMP', ROOT . '/tmp');
define('LOGS', ROOT . '/logs');
define('CACHE', TMP . '/cache');
define('ORIGIN', ROOT . '/vendor/originphp/framework');
