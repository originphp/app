<?php
use Origin\Core\Configure;
use Origin\Core\Plugin;
use Origin\Cache\Cache;
use Origin\Log\Log;

/*
 * This will go in your config/server.php file once your app has been developed.
 */
Configure::write('debug', true);

/*
 * If you change namespace name then you will need to change:
 *  1. The namespace declaration in all your files in the src folder
 *  2. config/bootstrap.php file
 */
Configure::write('App.namespace', 'App');
Configure::write('App.encoding', 'UTF-8');
Configure::write('Session.timeout', 3600);

Cache::config('default', ['engine' => 'File']);

/**
 * Generate a random string such as md5(time()) and place
 * here. This is used with hashing and key generation by Security.
 */
Configure::write('Security.pepper', '-----ORIGIN PHP-----');
/**
 * This is the key used to encrypt cookies use Security::generateKey()
 * or make sure length is 32 bytes.
 */
Configure::write('Cookie.key', 'facc85a28e6a22e8ae8ab06c75aa2296');

/**
 * This is the log configuration
 */
Log::config('default', ['engine'=>'File']);

/*
 * Load your plugins here
 * @example Plugin::load('ContactManager');
 */
Plugin::initialize();
