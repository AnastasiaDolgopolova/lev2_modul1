<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
require_once __DIR__ . '/../database/ImageManager.php';

$imageMove = new ImageManager;
$id = $_GET['id'];

$db->delete('posts', $id);

$imageMove->deleteImage($_GET['image']);

header('Location: /');
?>


