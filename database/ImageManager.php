<?php
  
class ImageManager{
	public $image;
	private $file_name;
	private $tmp_name;
	private $file_size;
	private $new_file_name;

	function __construct ($image)
	{
		$this->image=$image;
		$this->file_name=$image['name'];
		$this->tmp_name=$image['tmp_name'];
		$this->file_size=$image['size'];
	}

	public function fileSize()
	{
		if($this->file_size>1024000){
			$errorMessage='Ошибка!Недопустимый размер файла.';
		}
	}	
 	
 	private function new_file_name()
 	{
 		$extension = pathinfo($this->file_name,PATHINFO_EXTENSION);
  	 	return $this->new_file_name = md5(uniqid()) . "." . $extension;
 	}

	public function uploadImage ($image){

     move_uploaded_file( $this->tmp_name, __DIR__ . '	/../public/uploads/'. $new_file_name);
     return $new_file_name;
  	}

	public function deleteImage($filename){
		
 		unlink('uploads/'. $filename);
 	}
}
?>