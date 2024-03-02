<?php
$command = 'ls -la /';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
