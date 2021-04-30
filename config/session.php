<?php

use Origin\Http\Session\Engine\PhpEngine;

return [
    'className' => PhpEngine::class,
    'name' => 'id',
    'idLength' => 32, // Must be at least 128 bits (16 bytes)
    'timeout' => 900 // Logout after 15 minutes of in activity
];
