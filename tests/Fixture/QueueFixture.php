<?php
namespace App\Test\Fixture;

use Origin\TestSuite\Fixture;

/**
 * Run db:schema:load queue to create the table, then use db:schema:dump to update your
 * schema file, then use db:test:prepare
 */

class QueueFixture extends Fixture
{
    protected $table = 'queue';
}
