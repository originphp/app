<?php
namespace App\Mailer;

use Origin\Mailer\Mailer;

class ApplicationMailer extends Mailer
{
    public $defaults = [
        'from' => ['no-reply@example.com' => 'Web Application'],
    ];

    public $layout = 'mailer';

    public $account = 'default';
}
