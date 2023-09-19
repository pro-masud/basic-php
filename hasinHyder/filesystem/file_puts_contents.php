<?php
$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/textthree.txt";

// file_put_contents($filePath, "Pro Masud Rana\n", FILE_APPEND | LOCK_EX);

$data = file_get_contents($filePath);

echo $data;