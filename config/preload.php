<?php

use App\Http\Controller\ApplicationController;
use Origin\Core\Preloader;

/**
 * PHP 7.4+ preloading
 *
 * Add the following line to php.ini file on your production server
 *
 *  opcache.preload=/var/www/config/preload.php
 *
 * NOTE: Each time you run composer update or git pull you will need to restart webserver
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('FRAMEWORK', ROOT . '/vendor/originphp/framework/src');

/**
 * Run the autoloaders to get class information
 */
require dirname(__DIR__) .'/vendor/autoload.php';
require_once FRAMEWORK . '/Core/Autoloader.php';
require __DIR__ . '/autoload.php';

/**
 * Setup preloading
 */
$preloader = new Preloader();
$preloader->addDirectory(FRAMEWORK);
$preloader->addClass(ApplicationController::class);
$loaded = $preloader->load();
