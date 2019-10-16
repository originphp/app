<?php
use Origin\Cache\Cache;

/**
 * Cache engines include File,Apcu,Redis,Memcached
 * @see https://www.originphp.com/docs/cache/
 */

Cache::config('default', [
    'engine' => 'File',
    'path' => ROOT . '/tmp/cache',
    'duration' => '+60 minutes', // string or number of seconds e.g. 3600,
    'prefix' => 'cache_',
    'serialize' => true // set to false if you going to cache strings such as output
]);