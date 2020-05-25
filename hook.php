<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    file_put_contents('hook_log.txt', 'Request Recieved\n', FILE_APPEND);
    echo shell_exec('sudo git pull');
}
?>