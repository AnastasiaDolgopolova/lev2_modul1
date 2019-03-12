<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
include __DIR__ . '/../database/ImageManager.php';

$id = $_GET['id'];

$db->delete('posts', $id);

deleteImage($_GET['image']);

header('Location: /');
?>


