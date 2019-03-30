<?php

class InputValidation {
/*	//private $data;
	//private $dataValue;

	//function __construct ($data)
	//{
		$this->data=$data;
	//}
*/
	public static function empty_validation ($data){
		$errorMessage=array();
		foreach($data as $key => $value){
			 if(empty($value)){
		  	$errorMessage[]="поле $key не заполнено\n";
			 
		  	}
	  }
	// dd($errorMessage);
	 return $errorMessage;
	}

	/*public function clean ($data){
		foreach($data as $key => $value){

            $value = trim($value);
            $value = stripslashes($value);
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
        }

      return $data;
	}
*/
}