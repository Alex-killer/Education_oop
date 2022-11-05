<?php
$db = include __DIR__ . '/../database/start.php';

$posts = $db->getAll('posts');

require_once __DIR__ . '/../index.view.php';