<?php
/**
* 
*/
class Error_type extends Controller{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->msg="La pagina no existe";
		$this->view->render('error/index');
	}

}
/**
* 
*/
?>