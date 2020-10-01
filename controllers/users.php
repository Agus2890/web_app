<?php
class users extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if(!isset($_SESSION['user'])){
            header("Location: ".URL."page_web");
        }
    }
    function index(){
        $users  = $this->model->get_users();
        $this->view->usuarios = $users;        
        $this->view->render('users/index');
    }
    function register_users(){
		$data=$this->model->register_users();
		// header('Content-type: application/json; charset=utf-8');
        // echo json_encode($data);
        if($data){
            $this->view->mensaje = "Registrado Correctamente";
            header("Location: ".URL."users?msg=Registrado Correctament");
            // $users  = $this->model->get_users();
            // $this->view->usuarios = $users;    
            // $this->view->render('users/index');
        }else{
            $this->view->mensaje = $data;
            header("Location: ".URL."users?msg=Error al registrar");
        }
        
	}
    
}
?>