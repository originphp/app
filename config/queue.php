<?php
/**
 * Queue Configuration
 * Engines are Database and Redis
 * @see https://www.originphp.com/docs/queue/
 */
use Origin\Job\Queue;

Queue::config('default', [
    'engine' => 'Database',
    'datasource' => 'default'
]);

Queue::config('test', [
    'engine' => 'Database',
    'datasource' => 'test'
]);
