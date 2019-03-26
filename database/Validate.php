<?php
trait Data_Value
{
	public function arreyPiece ($datas){
		foreach($datas as $data => $value){
			
		}
	}
}
class InputValidation {
	private $datas;
	private $dataValue;
	
	use Data_Value;

	function __construct ($datas)
	{
		$this->datas=array_map("clean",$datas);
		$this->dataValue=arreyPiece ($datas);
	}


	}
	public function InputEmpty (){
		$this->datas->arreyPiece ();
		 if(strlen($value)<=0){
	  		$errorMessage[$data]="поле $data не заполнено\n";
	  	}
	  return($errorMessage);	
	}

	public function clean ($datas){

		$value = trim($value);
		$value = stripslashes($value);
		$value = strip_tags($value);
		$value = htmlspecialchars($value);

	  return $value;
	}

}