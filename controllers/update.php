<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';

$db->update('posts', $data = [ 
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'text' => $_POST['text']
], 
$_GET['id']);


header('Location: /');

?>