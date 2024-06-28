<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    echo nl2br(htmlspecialchars(file_get_contents($url)));
}
?>
