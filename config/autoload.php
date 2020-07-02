<?php
use Origin\Core\Autoloader;

/**
 * Handles the autoloading using the OriginPHP autoloader.
 *
 * If you want prefer to use or want to switch to composer for autoloading then
 * you can add the following to your composer.json
 *
 * {
 *  "autoload": {
 *      "psr-4": {
 *          "App\\": "app/"
 *      }
 *  },
 *  "autoload-dev": {
 *      "psr-4": {
 *          "App\\Test": "tests/"
 *       }
 *   }
 * }
 */
$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$autoloader->addNamespaces([
    'App' => 'app',
    'App\\Test' => 'tests'
]);
$autoloader->register();
