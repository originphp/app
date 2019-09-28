<?php
use Origin\Core\Plugin;
use Origin\Core\Autoloader;

$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$namespaces = [
    'App' => 'app',
    'App\\Test' => 'tests',
    'Origin' => 'origin/src',
    'Origin\\Test' => 'origin/tests'
];

$autoloader->addNamespaces($namespaces);
$autoloader->register();

include 'application.php';
include 'log.php';
include 'cache.php';
include 'database.php';
include 'storage.php';
include 'email.php';
include 'queue.php';

/*
 * Load your plugins here
 * use Origin\Core\Plugin
 * @example Plugin::load('ContactManager');
 */

/*
 * Initialize the plugins
 */
Plugin::initialize();
