<?php
define('PRIVATE_KEY', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_REQUEST['thing'] === PRIVATE_KEY)
{
    file_put_contents('hook_log.txt', 'Request Recieved\n', FILE_APPEND);
    echo shell_exec('sudo git pull');
}
?>