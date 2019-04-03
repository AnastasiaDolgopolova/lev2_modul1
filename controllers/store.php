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
	if($_FILES['image']['name'] == ''){
		$errorMessage='Добавте картинку.';
		include 'errors.php';
		exit;
	}
	else{
	$imageMove = new ImageManager($_FILES ['image']);
	$filename=$imageMove->uploadImage ();
	}
	

	$db->create('posts', [
		'title' => $_POST['title'],
		'description' => $_POST['description'],
		'text' => $_POST['text'],
		'image' => $filename
	]);


	header('Location: /');
	}

	elseif($errorMessage) {
		require 'errors.php';
		exit;
	}

?>