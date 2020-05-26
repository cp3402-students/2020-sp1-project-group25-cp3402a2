<?php
file_put_contents('hook_log.txt',shell_exec('git pull'),FILE_APPEND);
//echo shell_exec('git pull');
?>