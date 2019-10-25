<?php
use Origin\Core\Config;

/**
 * Set configuration vars here
 * @example
 * Config::write('Stripe.secret', env('STRIPE_SECRET'));
 * then in your app $secret = Config::read('Stripe.secret');
 */
Config::write('debug', env('APP_DEBUG', true));

Config::write('App.url', env('APP_URL', 'http://localhost'));
Config::write('App.environment', env('APP_ENV'));

Config::write('App.namespace', 'App');
Config::write('App.encoding', 'UTF-8');
Config::write('App.defaultTimezone', 'UTC');

Config::write('Session.timeout', 3600);

/**
 * Encryption key to use.
 */
Config::write('Security.key', env('APP_KEY'));

/*
 * This is the default schema format to be used. This is used
 * by db commands setup/reset/load etc.
 */
Config::write('Schema.format', 'php');
