<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = __DIR__ . '/' . basename($file);
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
}
?>
