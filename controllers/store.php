<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
include __DIR__ . '/../database/ImageManager.php';

$filename= uploadImage($_FILES ['image']);
 
dd($filename);
die;
$db->create('posts', [
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'text' => $_POST['text'],
	'image' => $filename
]);


header('Location: /');

?>