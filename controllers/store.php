<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
include __DIR__ . '/../database/ImageManager.php';

$imageMove = new ImageManager;

if(count($_FILES)>0){
$filename=$imageMove-> uploadImage($_FILES ['image']);
}

$db->create('posts', [
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'text' => $_POST['text'],
	'image' => $filename
]);


header('Location: /');

?>