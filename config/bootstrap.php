<?php

use Origin\Log\Log;
use Origin\Job\Queue;
use Origin\Cache\Cache;
use Origin\Core\Config;
use Origin\Core\Plugin;
use Origin\Email\Email;
use Origin\Mailbox\Mailbox;
use Origin\Storage\Storage;
use Origin\Model\ConnectionManager;

require __DIR__ . '/paths.php';
require dirname(__DIR__) . '/vendor/originphp/framework/src/Core/bootstrap.php';
require __DIR__ . '/autoload.php';

/**
 * Loads the config file, for example `log` will load `config/log.php`.
 * You can create your own configuration files and add them here
 *
 * @example
 * Config::load('stripe');
 * $token  = Config::read('Stripe.privateKey');
 */

 try {
     Config::load('app');
     Config::load('log');
     Config::load('cache');
     Config::load('database');
     Config::load('storage');
     Config::load('email');
     Config::load('queue');
     Config::load('mailbox');
 } catch (\Exception $exception) {
     $message = env('APP_DEBUG') === true ? $exception->getMessage() : 'Error reading/parsing configuration files.';
     exit($message . "\n");
 }

/**
 * Configure the server
 */
mb_internal_encoding(Config::read('App.encoding'));
date_default_timezone_set(Config::read('App.defaultTimezone'));

/**
 * Configure individual components, configuration will be
 * consumed so it will no longer be available using Config::read()
 * but you can get from component, e.g. Log::config('key');
 */
Log::config(Config::consume('Log'));
Cache::config(Config::consume('Cache'));
ConnectionManager::config(Config::consume('Database'));
Storage::config(Config::consume('Storage'));
Email::config(Config::consume('Email'));
Queue::config(Config::consume('Queue'));
Mailbox::config(Config::consume('Mailbox'));

/**
 * Load additional files here
 * @example
 * require __DIR__ .'/application.php';
 */

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
require __DIR__ . '/routes.php';
