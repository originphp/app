<?php
namespace App\Mailer;

use Origin\Mailer\Mailer;

class AppMailer extends Mailer
{
    public $defaults = [
        'from' => ['phpunit07@gmail.com' => 'PHP Unit'],
    ];

    //
    public $layout = false;

    public $account = 'default';
}
