<?php
use Origin\Core\Autoloader;

$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$namespaces = [
    'App' => 'app',
    'App\\Test' => 'tests',
    'Origin' => 'origin/src',
    'Origin\\Test' => 'origin/tests'
];

$autoloader->addNamespaces($namespaces);
$autoloader->register();

require 'application.php';
