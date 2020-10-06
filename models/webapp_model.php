<?php
class webapp_model extends Model{
	function __construct(){
        parent::__construct();
        date_default_timezone_set("America/Mexico_City");
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
                $user= (isset($_POST['user']) && $_POST['user'])? $_POST['user']:'';
                $host= (isset($_POST['host']) && $_POST['host'])? $_POST['host']:'';
            break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
                header('Allow: GET, PUT, DELETE');
            break;
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

    function get_apk(){
        $jsondata = array();
        $user='';
        $password='';
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                $user= (isset($_GET['user']) && $_GET['user'])? $_GET['user']:'';
                $password= (isset($_GET['password']) && $_GET['password'])? $_GET['password']:'';
            break;
            case 'POST':
                $user= (isset($_POST['user']) && $_POST['user'])? $_POST['user']:'';
                $password= (isset($_POST['password']) && $_POST['password'])? $_POST['password']:'';
            break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
                header('Allow: GET, PUT, DELETE');
            break;
        }
        try {
            // $query = $this->db->connect()->prepare('SELECT * FROM users WHERE user = :user AND password=:password');
            // $query->execute(['user' => $user,'password'=>$password]);
            // $data=$query->fetch(PDO::FETCH_OBJ);
            // if($data ){
            $query_app = $this->db->connect()->query('SELECT * FROM version_apk WHERE versioncode=(SELECT MAX(versioncode) FROM version_apk)');
            $res=$data_apk=$query_app->fetch(PDO::FETCH_OBJ);
            if($res){
                $jsondata['state'] = 1;
                $jsondata['success'] = true;
                $jsondata['odoo']['message'] = "Usuario autentificado correctamente";
                $jsondata['odoo']['mandatory'] =$data_apk ? $data_apk->mandatory:'' ;
                $jsondata['odoo']['versionCode'] =$data_apk ? $data_apk->versioncode:'' ;
                $jsondata['odoo']['versionName'] =$data_apk ? $data_apk->versionname:'' ;
                $jsondata['odoo']['downloadURL'] = $data_apk ? $data_apk->download_url:'' ;
            }else{
                $jsondata['state'] = 0;
                $jsondata['success'] = false;
                $jsondata['message'] = "No se pudo autentificar su usuario";
            }

            
            // }else{
            //     $jsondata['success'] = false;
            //     $jsondata['message'] = "No se pudo autentificar su usuario";
            // }
        } catch (PDOException $e) {
            $jsondata['state'] = 0;
            $jsondata['success'] = false;
            $jsondata['message'] = $e->getMessage();
        }
        return $jsondata;
    }
}
?>