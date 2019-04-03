<?php
include __DIR__ . '/../database/Validate.php';
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';
require_once __DIR__ . '/../database/ImageManager.php';
$data = [ 
	'title' => clean($_POST['title']),
	'description' => clean($_POST['description']),
	'text' => clean($_POST['text']),
];
 $errorMessage=InputValidation::empty_validation($data);
if(empty($errorMessage)){
if(!empty($_FILES['image']['tmp_name'])){
	$imageMove = new ImageManager($_FILES ['image']);

	$filename=$imageMove-> uploadImage();
	$imageMove->deleteImage($_POST['oldImage']);		
  }
 else{$filename = $_POST['oldImage'];
	
  }
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