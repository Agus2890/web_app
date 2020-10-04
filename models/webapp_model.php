<?php
class webapp_model extends Model{
	function __construct(){
        parent::__construct();
    }
    function user_exist(){
        $jsondata = array();
        $user='';
        $host='';
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                $user= (isset($_GET['user']) && $_GET['user'])? $_GET['user']:'';
                $host= (isset($_GET['host']) && $_GET['host'])? $_GET['host']:'';
                break;
            case 'POST':
                echo var_dump($_POST);
                $user= (isset($_POST['user']) && $_POST['user'])? $_POST['user']:'';
                $host= (isset($_POST['host']) && $_POST['host'])? $_POST['host']:'';
                break;
            default:
        }
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM clientes WHERE host = :host AND user=:user');
            $query->execute(['host' => $host,'user'=>$user]);
            $data=$query->fetch(PDO::FETCH_OBJ);
            if($data  ){
                if(date("Y-m-d H:i:s") < $data->datestop ){
                    $jsondata['success'] = true;
                    $jsondata['status'] = $data->active;
                    $jsondata['datestop'] = $data->datestop;
                    $jsondata['datenow'] = date("Y-m-d H:i:s");
                    $jsondata['message'] = "Usuario vigente";
                }elseif(date("Y-m-d H:i:s") > $data->datestop){
                    $jsondata['success'] = false;
                    $jsondata['status'] = $data->active;
                    $jsondata['datestop'] = $data->datestop;
                    $jsondata['datenow'] = date("Y-m-d H:i:s");
                    $jsondata['message'] = "La Fecha de su suscripcion a vencido";
                }
            }else{
                $jsondata['success'] = false;
                $jsondata['message'] = "Usuario no encontrado";
            }
        } catch (PDOException $e) {
            $jsondata['success'] = false;
            $jsondata['message'] = $e->getMessage();
        }
        return $jsondata;
    }
}
?>