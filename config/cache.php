<?php

use Origin\Core\Config;
use Origin\Cache\Engine\FileEngine;

/**
 * Cache engines include File, Apcu, Redis, Memcached
 * @link https://www.originphp.com/docs/cache/
 */

return [
    'default' => [
        'className' => FileEngine::class,
        'path' => CACHE,
        'duration' => '+60 minutes', // string or number of seconds e.g. 3600,
        'prefix' => 'cache_',
        'serialize' => true // set to false if you going to cache strings such as output
    ],
    /**
     * Caching setup used by framework
     *
     * - Model uses this to cache table metadata.
     * IMPORTANT: If you make changes to table then use the console command Cache::clear
     */
    'origin' => [
        'className' => FileEngine::class,
        'path' => CACHE . '/origin',
        'duration' => Config::read('App.debug') ? '+2 minutes' : '+24 hours',
        'prefix' => 'cache_',
        'serialize' => true
    ]
];
