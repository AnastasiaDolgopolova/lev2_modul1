<?php
  
class ImageManager{

	public function uploadImage ($image){

  	 $extension = pathinfo($image['name'],PATHINFO_EXTENSION);
  	 $filename = uniqid() . "." . $extension;

     move_uploaded_file( $image['tmp_name'], __DIR__ . '	/../public/uploads/'. $filename);

     return $filename;
  }



	public function deleteImage($filename){
		
 		unlink('uploads/'. $filename);
 	}
}
?>
