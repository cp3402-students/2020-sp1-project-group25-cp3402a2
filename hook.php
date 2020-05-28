<?php
//shell_exec('rm themes/tjc_theme/style.css');
$output = shell_exec('git fetch --all');
$output .= shell_exec('git reset --hard origin/master');
$output .= shell_exec('git pull origin master');
file_put_contents('hook_log.txt',$output."\nPull completed: ".date(DATE_RFC2822)."\n\n",FILE_APPEND);
?>