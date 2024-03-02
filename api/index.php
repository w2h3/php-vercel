<?php
$command = 'cat /lambda-entrypoint.sh';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
