<?php
file_put_contents('hook_log.txt','Recieved\n',FILES_APPEND);
shell_exec('git pull');
?>