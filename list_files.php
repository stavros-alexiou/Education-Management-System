<?php
session_start();

$files = scandir('C:\xampp\htdocs\Content_sharing');
$result = [];

foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        array_push($result, $file);
    }
}

header('Content-Type: application/json');
echo json_encode($result);


?>
