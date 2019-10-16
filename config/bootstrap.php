<?php
use Origin\Core\Plugin;
use Origin\Core\Autoloader;

require __DIR__ . '/paths.php';
require ORIGIN . '/src/bootstrap.php';

$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$autoloader->addNamespaces([
    'App' => 'app',
    'App\\Test' => 'tests',
    'Origin' => 'origin/src',
    'Origin\\Test' => 'origin/tests'
]);
$autoloader->register();

include __DIR__ . '/application.php';
include __DIR__ . '/log.php';
include __DIR__ . '/cache.php';
include __DIR__ . '/database.php';
include __DIR__ . '/storage.php';
include __DIR__ . '/email.php';
include __DIR__ . '/queue.php';
require __DIR__ . '/routes.php';

/*
 * Load your plugins here
 * use Origin\Core\Plugin
 * @example Plugin::load('ContactManager');
 */
Plugin::load('Generate');
/*
 * Initialize the plugins
 */
Plugin::initialize();
