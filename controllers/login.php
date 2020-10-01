<?php
class login extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
    }

    function login_user(){
        $username = trim($_POST['txt_user']);
        $password = trim($_POST['password']);
		$data=$this->model->login_user($username,$password);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($data);
    }
    function session_close(){
		@session_start();
		session_destroy();
		header("Location:".URL);
	}
}
?>