<?php
namespace App\Test\Fixture;

use Origin\TestSuite\Fixture;

/**
 * Run db:schema:load mailbox to create the table, then use db:schema:dump to update your
 * schema file, then use db:test:prepare
 */

class MailboxFixture extends Fixture
{
    protected $table = 'mailbox';
    
    protected $records = [
        [
            'message_id' => '<CAD05h8p3WCJLqVLVLebaE03KskpD8+AGEHEjZJ1JvnJpuh2+1w@mail.gmail.com>',
            'checksum' => 'f630f6d31746092ec6dfe627d973d224c9f0dcb8',
            'message' => 'MIME-Version: 1.0
Date: Tue, 12 Nov 2019 08:39:50 +0100
Message-ID: <CAD05h8p3WCJLqVLVLebaE03KskpD8+AGEHEjZJ1JvnJpuh2+1w@mail.gmail.com>
Subject: Re: Ticket 5000
From: Some User <demo@example.com>
To: Support <support@company.com>
Content-Type: text/plain; charset="UTF-8"

Help its not working',
            'status' => 'pending',
            'created' => '2019-11-11 16:11:00',
            'modified' => '2019-11-11 16:11:00',
        ]
    ];
}
