<?php
$output = shell_exec('git pull');
file_put_contents('hook_log.txt',$output,FILE_APPEND);
?>