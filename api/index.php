<?php
$command = 'ls -la ../ && echo "../../" && ls -la ../../';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
