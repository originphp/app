<?php
use Origin\Cache\Cache;
use Origin\Core\Config;

/**
 * Cache engines include File, Apcu, Redis, Memcached
 * @see https://www.originphp.com/docs/cache/
 */

Cache::config('default', [
    'engine' => 'File',
    'path' => CACHE,
    'duration' => '+60 minutes', // string or number of seconds e.g. 3600,
    'prefix' => 'cache_',
    'serialize' => true // set to false if you going to cache strings such as output
]);

/**
 * Caching setup used by framework
 *
 * - Model uses this to cache table metadata, if you make changes to table
 * then  clear this cache.
 */
Cache::config('origin', [
    'engine' => 'File',
    'path' => CACHE . '/origin',
    'duration' => Config::read('debug') ? '+2 minutes' : '+24 hours',
    'prefix' => 'cache_',
    'serialize' => true
]);
