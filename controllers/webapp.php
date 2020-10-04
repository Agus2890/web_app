<?php
class webapp extends Controller{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
        $data=$this->model->user_exist();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
	}

}
?>