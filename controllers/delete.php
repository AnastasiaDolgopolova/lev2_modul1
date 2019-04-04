<?php
include __DIR__ . '/../model/functions.php';
require_once __DIR__ . '/../model/function_delet_img.php';
$db =include __DIR__ . '/../model/database/start.php';

$id = $_GET['id'];

$db->delete('posts', $id);

deleteImage($_GET['image']);

header('Location: /');
?>


