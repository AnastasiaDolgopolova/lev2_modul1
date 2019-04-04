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
	$image=$_FILES ['image'];	
	$imageMove = new ImageManager($image);
	//$filename=$imageMove->uploadImage ();
	$errorMessage=$imageMove->file_size();

	if($errorMessage === true){
			$errorMessage=$imageMove-> get_image_format($img);	
		}
		
		if($errorMessage === true){
			$newName=$imageMove->new_file_name();
			$filename=$imageMove->uploading ();
		}
			elseif($errorMessage !== true){
			
			include 'errors.php';
			exit;
		}
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