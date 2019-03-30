<?php

class InputValidation {
/*	//private $data;
	//private $dataValue;

	//function __construct ($data)
	//{
		$this->data=$data;
	//}
*/
	public static function InputEmpty ($data){
		$Message=array();
		foreach($data as $key => $value){
		 if(empty($value)){
	  		$errorMessage[]="поле $key не заполнено\n";
	  	}

	  }
	  return $errorMessage;
	}

	/*public function clean ($data){
		foreach($this->data as $this->key => $this->value){
			$this->value -> trim($this->value);
			$this->value ->stripslashes($this->value);
			$this->value ->strip_tags($this->value);
			$this->value ->htmlspecialchars($this->value);
		
		}
	  return $this->value;
	}
*/
}