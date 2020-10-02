<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if(!isset($_SESSION['user'])){
            header("Location: ".URL."page_web");
        }
    }
    function index(){
        $clientes  = $this->model->get_clientes();
        $this->view->clientes = $clientes;        
        $this->view->render('index/index');
        // header("Location: page_web/index.html");
    }

    function delete_table($id){
        $jsondata = array();
        try{
            $table=(isset($_GET["table"]) and $_GET["table"]) ? $_GET["table"]:false;
            if($table){
                $res=$this->model->delete($id);
                if ($res){
                    $jsondata['success'] = true;
                    $jsondata['message'] = 'Eliminado Correctamente';
                }else{
                    $jsondata['success'] = false;
                    $jsondata['message'] = 'Error al Eliminar';
                }
            }else{
                $jsondata['success'] = false;
                $jsondata['message'] = 'No ha indicado la tabla del registro valide la informacion';
            }
        }catch(PDOException $e) {
                $jsondata['success'] = false;
                $jsondata['message'] = $e->getMessage();
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsondata);
    }
    function register_contacto(){
        $data=$this->model->register_contacto();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    function register_paquete(){
        $data=$this->model->register_paquete();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}
?>