<?php
use Origin\Core\Autoloader;

$autoloader = Autoloader::instance();
$autoloader->directory(ROOT);

$namespaces = [
    'App' => 'src',
    'App\\Test' => 'tests'
];

$autoloader->addNamespaces($namespaces);
$autoloader->register();
