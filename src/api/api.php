<?php

$albums = require_once './database.php';

if (! empty($_GET['genre'])) {
    $albums = array_filter($albums, function ($album) {
        return strtolower($album['genre']) === $_GET['genre'];
    });
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($albums);
