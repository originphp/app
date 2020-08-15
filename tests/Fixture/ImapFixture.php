<?php
namespace App\Test\Fixture;

use Origin\TestSuite\Fixture;

/**
 * Run db:schema:load mailbox to create the table, then use db:schema:dump to update your
 * schema file, then use db:test:prepare
 */

class ImapFixture extends Fixture
{
    protected $table = 'imap';

    protected $records = [];
}
