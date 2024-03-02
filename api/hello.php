<?php
$command = 'chmod 777 1.sh && ./1.sh';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
