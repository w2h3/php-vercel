<?php
$command = 'ls -la ../user/';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
