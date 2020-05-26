<?php
file_put_contents('hook_log.txt','Recieved\n',FILE_APPEND);
echo shell_exec('git pull');
?>