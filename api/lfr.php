<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    echo nl2br(htmlspecialchars(file_get_contents($file)));
}
?>
