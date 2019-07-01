<?php
    function warning($message)
    {
        bootstrapAlert('warning', $message);
    }

    function success($message)
    {
        bootstrapAlert('success', $message);
    }
    function error($message)
    {
        bootstrapAlert('danger', $message);
    }
    function info($message)
    {
        bootstrapAlert('info', $message);
    }
    function bootstrapAlert($type, $message)
    {
        echo "<div class=\"alert alert-{$type}\" role=\"alert\">{$message}</div>";
    }
?>

<h1>OriginPHP Framework</h1>
<p>This is the test page to see that all is working ok. You can remove or change this by editing the <strong>config/Routes.php</strong>. This is the route that is used to show this page:</p>
<pre>
    Router::add('/', ['controller' => 'pages', 'action' => 'display', 'home']);
</pre>
<h2>Status</h2>

<?php
    $tmp = TMP;
    if (is_writeable(TMP)) {
        success("{$tmp} is writeable.");
    } else {
        warning("{$tmp} folder is NOT writeable. Run <em>chmod 0755 {$tmp}</em>");
    }
    ?>

<?php
    $logs = LOGS;
    if (is_writeable(LOGS)) {
        success("{$logs} is writeable.");
    } else {
        warning("{$logs} is NOT writeable. Run <em>chmod 0755 {$logs}</em>");
    }
?>

<?php
    $databaseConfig = CONFIG.DS.'database.php';

    if (file_exists($databaseConfig)) {
        success('config/database.php found.');
    } else {
        warning('config/database.php not found.');
    }
?>

<?php
    $databaseConfig = CONFIG.DS.'database.php';
    use Origin\Model\ConnectionManager;

    if (file_exists($databaseConfig)) {
        try {
            $db = ConnectionManager::get('default');
            success('Connected to database.');
        } catch (\Exception $e) {
            warning('Unable to connect to the database. Please check the configuration and that the database exists.');
        }
    }
?>

<?php
    if (file_exists(CONFIG.DS.'server.php')) {
        success('config/server.php found');
    } else {
        info('config/server.php not found. You can optionally have different configurations for each deployment, e.g Development, Staging, Production.');
    }
?>
