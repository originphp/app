<?php
use Origin\Model\Schema;

class ApplicationSchema extends Schema
{
    const VERSION = 20190829000000;
    /**
     * This is an example
     *
     * @var array
     */
    /*
    protected $bookmarks = [
        'columns' => [
            'id' => ['type' => 'integer', 'limit' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true],
            'user_id' => ['type' => 'integer', 'limit' => 11, 'unsigned' => false, 'null' => false, 'default' => null],
            'title' => ['type' => 'string', 'limit' => 50, 'null' => false, 'default' => null],
            'description' => ['type' => 'text', 'null' => true, 'default' => null],
            'url' => ['type' => 'text', 'null' => true, 'default' => null],
            'category' => ['type' => 'string', 'limit' => 80, 'null' => true, 'default' => null],
            'created' => ['type' => 'datetime', 'null' => false, 'default' => null],
            'modified' => ['type' => 'datetime', 'null' => false, 'default' => null],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'column' => 'id'],
            'bookmarks_ibfk_1' => ['type' => 'foreign', 'column' => 'user_id', 'references' => ['users', 'id']],
        ],
        'indexes' => [
            'user_id' => ['type' => 'index', 'column' => 'user_id'],
        ],
        'options' => ['engine' => 'InnoDB', 'autoIncrement' => 1000],
    ];
    */
}
