<?php
/**
* 
*/
class Controller{
	
	function __construct(){
		//echo "Controller";
		$this->view= new View();
		
	}

	public function loadModel($name){
		$path='models/'.$name.'_model.php';
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			$modelName=$name.'_model';
			$this->model= new $modelName();
		}
	}
}
?>