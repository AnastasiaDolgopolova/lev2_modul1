<?php
include __DIR__ . '/../model/classes/Validate.php';
include __DIR__ . '/../model/functions.php';
$db =include __DIR__ . '/../model/database/start.php';
require_once __DIR__ . '/../model/classes/ImageManager.php';
require_once __DIR__ . '/../model/function_clean.php';
$data = [ 
	'title' => clean($_POST['title']),
	'description' => clean($_POST['description']),
	'text' => clean($_POST['text']),
];
 $errorMessage=InputValidation::empty_validation($data);
if(empty($errorMessage)){
if(!empty($_FILES['image']['tmp_name'])){
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