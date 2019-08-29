<?php
use Origin\Core\Config;

/*
 * This will go in your config/server.php file once your app has been developed.
 */
Config::write('debug', env('DEBUG', true));

Config::write('App.url', env('APP_URL', 'http://localhost'));

/*
 * If you change namespace name then you will need to change:
 *  1. The namespace declaration in all your files in the src folder
 *  2. config/bootstrap.php file
 */
Config::write('App.namespace', 'App');
Config::write('App.encoding', 'UTF-8');
Config::write('Session.timeout', 3600);

/**
 * Generate a random string such as md5(time()) and place
 * here. This is used by Security:hash
 */
Config::write('Security.pepper', '-----ORIGIN PHP-----');

/**
 * This is the key used to encrypt cookies use Security::generateKey()
 * or make sure length is 32 bytes.
 */
Config::write('Cookie.key', 'facc85a28e6a22e8ae8ab06c77aa2296');

/*
 * This is the default schema format to be used. This is used
 * by db commands setup/reset/load etc.
 */
Config::write('Schema.format', 'php');
