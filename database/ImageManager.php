<?php
  
class ImageManager{
	public $image;
	private $file_name;
	private $tmp_name;
	private $file_size;
	private $new_file_name;
	private $extension;
	public $delete_img;
	function __construct ($image)
	{
		//$this->delete_img=$delete_img;
		$this->image=$image;
		$this->file_name=$image['name'];
		$this->tmp_name=$image['tmp_name'];
		$this->file_size=$image['size'];
	}
	public function uploadImage (){
		$size=$this->file_size();
		if($size === true){
		$format=$this->get_image_format();}
		if($format === true){
		$this->new_file_name();
		$this->uploading ();}
		return $this->new_file_name;
	}
	public function file_size()
	{
		if($this->file_size >(1024000)){
			$errorMessage='Ошибка!Недопустимый размер файла.';
			return $errorMessage;
			die;
		}
		return true;
	}	
 	public function get_image_format()
	{ 
		$this->extension = pathinfo($this->file_name,PATHINFO_EXTENSION);
		$types = array('png','jpeg','jpg');
		if(!in_array($this->extension, $types)){
			$errorMessage='Ошибка!Недопустимый формат файла.';
			return $errorMessage;
			die;
		}
		 return true;
	}
 	public function new_file_name()
 	{
  	 	return $this->new_file_name = md5 (microtime()) . "." . $this->extension;
 	}
	public function uploading (){
	
    move_uploaded_file( $this->tmp_name, __DIR__ . '	/../public/uploads/'. $this->new_file_name);
     return $this->new_file_name;
  	}
	public function deleteImage($delete_img){
		$this->delete_img=$delete_img;
 		unlink('uploads/'. $this->delete_img);
 	}
}
?>