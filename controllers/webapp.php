<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);
class webapp extends Controller{
	function __construct(){
        parent::__construct();
	}
	function index(){
        $data=$this->model->user_exist();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    function get_apk(){
        $data=$this->model->get_apk();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function exist_client(){
        $data=$this->model->exist_client();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}
?>