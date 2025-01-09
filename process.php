<?php
    file_put_contents("./log", "Server: " . json_encode($_SERVER) . "\n");
    file_put_contents("./log", "Request: " . json_encode($_GET), FILE_APPEND);

    exit
?>