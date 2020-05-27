<?php
shell_exec('rm themes/tjc_theme/style.css');
$output = shell_exec('git pull');
file_put_contents('hook_log.txt',$output."\nPull completed: ".date(DATE_RFC2822)."\n",FILE_APPEND);
?>