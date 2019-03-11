<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
include __DIR__ . '/../database/ImageManager.php';


if(!empty($_FILES['image']['tmp_name'])){
	
	$filename= uploadImage($_FILES ['image']);		
  }
 else{$filename = $_POST['oldImage'];
	
  }

$db->update('posts', $data = [ 
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'text' => $_POST['text'],
	'image' => $filename
], 
$_GET['id']);


header('Location: /');

?>