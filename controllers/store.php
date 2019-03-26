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
 $validation= new InputValidation;


//if(!$errorMessage)
	$imageMove = new ImageManager;

	if(count($_FILES)>0){
	$filename=$imageMove-> uploadImage($_FILES ['image']);
	}
	else {
			$errorMessage='Добавте картинку.';
		}

	$db->create('posts', [
		'title' => $_POST['title'],
		'description' => $_POST['description'],
		'text' => $_POST['text'],
		'image' => $filename
	]);


	header('Location: /');
	}

	if($errorMessage) {
		require 'errors.php';
		exit;
	}

?>