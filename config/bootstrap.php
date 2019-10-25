<?php
use Origin\Core\Config;
use Origin\Core\Plugin;
use Origin\Core\Autoloader;

require __DIR__ . '/paths.php';
require ORIGIN . '/src/bootstrap.php';

$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$autoloader->addNamespaces([
    'App' => 'app',
    'App\\Test' => 'tests'
]);
$autoloader->register();

/**
 * Load environment vars
 */
if (file_exists(__DIR__ . '/.env.php')) {
    $result = require __DIR__ . '/.env.php';
    foreach ($result as $key => $value) {
        $_ENV[$key] = $value;
    }
}

require __DIR__ . '/application.php';

mb_internal_encoding(Config::read('App.encoding'));
date_default_timezone_set(Config::read('App.defaultTimezone'));

require __DIR__ . '/log.php';
require __DIR__ . '/cache.php';
require __DIR__ . '/database.php';
require __DIR__ . '/storage.php';
require __DIR__ . '/email.php';
require __DIR__ . '/queue.php';

/*
 * Load your plugins here
 * use Origin\Core\Plugin
 * @example Plugin::load('ContactManager');
 */

/*
 * Initialize plugins
 */
Plugin::initialize();

/**
 * Load the routes after plugins have been loaded
 */
require CONFIG . '/routes.php';
