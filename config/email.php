<?php
/**
 * Email Configuration
 * @see https://www.originphp.com/docs/utility/email/
 */
use Origin\Mailer\Email;

Email::config('default', [
        'host' => 'localhost',
        'port' => 465,
        'username' => 'email@gmail.com',
        'password' => 'secret',
        'timeout' => 30,
        'ssl' => true,
        'tls' => false
        ]);

Email::config('test', [
    'debug' => true
    ]);
