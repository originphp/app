<?php
use Origin\Core\Configure;
use Origin\Core\Plugin;

/*
 * This will go in your config/server.php file once your app has been developed.
 */
Configure::write('debug', env('DEBUG', true));

Configure::write('App.url', env('APP_URL', 'http://localhost'));

/*
 * If you change namespace name then you will need to change:
 *  1. The namespace declaration in all your files in the src folder
 *  2. config/bootstrap.php file
 */
Configure::write('App.namespace', 'App');
Configure::write('App.encoding', 'UTF-8');
Configure::write('Session.timeout', 3600);

/**
 * Generate a random string such as md5(time()) and place
 * here. This is used by Security:hash
 */
Configure::write('Security.pepper', '-----ORIGIN PHP-----');

/**
 * This is the key used to encrypt cookies use Security::generateKey()
 * or make sure length is 32 bytes.
 */
Configure::write('Cookie.key', 'facc85a28e6a22e8ae8ab06c77aa2296');

/*
 * This is the default schema format to be used. This is used
 * by db commands setup/reset/load etc.
 */
Configure::write('Schema.format', 'php');



/*
 * Load your plugins here
 * use Origin\Core\Plugin
 * @example Plugin::load('ContactManager');
 */


/*
 * Initialize the plugins
 */
Plugin::initialize();
