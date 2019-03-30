<?php
include __DIR__ . '/../database/Validate.php';
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
require_once __DIR__ . '/../database/ImageManager.php';
$datas = [ 
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'text' => $_POST['text'],
];
 $validation=InputValidation::empty_validation($datas);

$imageMove = new ImageManager;

if(!empty($_FILES['image']['tmp_name'])){
	
	$filename=$imageMove-> uploadImage($_FILES ['image']);
	$imageMove->deleteImage($_POST['oldImage']);		
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

	if($errorMessage) {
		require 'errors.php';
		exit;
	}
?>