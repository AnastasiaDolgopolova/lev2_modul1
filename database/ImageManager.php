<?php

//if(count($_FILES)>0){
 // $filename= uploadImage($_FILES ['image']);
  
class ImageManager{

  public function uploadImage ($image){

   $extension = pathinfo($image['name'],PATHINFO_EXTENSION);
   $filename = uniqid() . "." . $extension;

    move_uploaded_file( $image['tmp_name'], __DIR__ . '/../uploads/'. $filename);

    return $filename;
  }
	public function deleteImage($filename){
		
 		unlik(__DIR__ . '/../uploads/'. $filename);
 	}
}
?>
