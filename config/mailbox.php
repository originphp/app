<?php

/**
 * Mailbox configuration
 * @link https://www.originphp.com/docs/mailbox/
 *
 * Note: you will need to add routes for the mailbox, you can
 * put in this in a seperate file or in the routes.php
 *
 * @example
 * use Origin\Mailbox\Mailbox;
 * Mailbox::route('/^support@/i', 'Support');
 * Mailbox::route('/@replies\./i', 'Replies');
 */

/**
 * If you are not using email piping then you can download messages using IMAP or POP3
 */
return [
    /*'default' => [
        'host' => 'imap.gmail.com',
        'port' => 993,
        'username' => 'user@gmail.com',
        'password' => 'password',
        'encryption' => 'ssl',
        'validateCert' => true,
    ]*/
];
