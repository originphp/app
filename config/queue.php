<?php
/**
 * Queue Configuration
 * Engines are Database and Redis
 * @see https://www.originphp.com/docs/queue/
 */

use Origin\Job\Engine\DatabaseEngine;
use Origin\Job\Queue;

Queue::config('default', [
    'className' => DatabaseEngine::class,
    'connection' => 'default'
]);

Queue::config('test', [
    'className' => DatabaseEngine::class,
    'connection' => 'test'
]);
