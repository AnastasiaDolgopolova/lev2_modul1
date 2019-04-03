<?php

class InputValidation {

	public static function empty_validation ($data){
		$errorMessage=array();
		foreach($data as $key => $value){
			 if(empty($value)){
		  	$errorMessage[]="поле $key не заполнено\n";
			 
		  	}
	  }
	 return $errorMessage;
	}	
}