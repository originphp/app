<?php
/**
 * This file is not loaded by default. To load this add the following line
 * to your config/bootstrap.php
 *
 * require __DIR__ . '/mailbox.php';
 *
 */

use Origin\Mailbox\Mailbox;

/**
 * Configure the routing for the mailbox
 * 
 * @example 
 *
 * Mailbox::route('/^support@/i', 'Support');
 * Mailbox::route('/@replies\./i', 'Replies');
 */

/**
 * If you are not using email piping then you can download messages using IMAP or POP3
 *
 * @example
 * 
 * Mailbox::config('default', [
 *   'host' => 'imap.gmail.com',
 *   'port' => 993,
 *   'username' => 'user@gmail.com',
 *   'password' => 'password',
 *   'encryption' => 'ssl',
 *   'validateCert' => true,
 * ]);
 */
