<?php
class versionapk extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
    }
    function index(){
        $versionapk  = $this->model->get_version_apk();
        $this->view->versionapk = $versionapk;        
        $this->view->render('versionapk/index');
    }
    function register_apk(){
        $data=$this->model->register_apk();
        header('Content-type: application/json; charset=utf-8');
		echo json_encode($data);
    }
}
?>