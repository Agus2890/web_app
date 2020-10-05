<?php
class index_model extends Model{
	function __construct(){
        parent::__construct();
    }

    public function get_clientes(){
        try{
            $query = $this->db->connect()->query('SELECT * FROM clientes');
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return [];
        }
    }
    public function get_contacto(){
        try{
            $query = $this->db->connect()->query('SELECT * FROM contacto');
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return [];
        }
    }
    public function get_paquete(){
        try{
            $query = $this->db->connect()->query('SELECT * FROM paquetes');
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return [];
        }
    }
    public function delete($id,$table){
        $query = $this->db->connect()->prepare('DELETE FROM '.$table.' WHERE id = :id');
        try{
            $query->execute(['id' => $id]);
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function register_cliente(){
        $jsondata = array();
        $query = $this->db->connect()->prepare('INSERT INTO clientes (host, user,email,datestart,datestop,active) 
        VALUES(:host, :user, :email, :datestart, :datestop, :active)');
        try {
            $data=$query->execute([
                'host' => $_POST['txtip'],
                'user' => $_POST['txtuser'],
                'email' => $_POST['txtmail'],
                'datestart' => $_POST['txtdatestart'],
                'datestop' => $_POST['txtdatestop'],
                'active' => 1,
            ]);
            if($data){
                $jsondata['success'] = true;
                $jsondata['message'] = "Registrado Correctamente";
                $jsondata['redirec'] = URL.'index';
            }else{
                $jsondata['success'] = false;
                $jsondata['message'] = "Error al Registrar";
            }
        }catch (PDOException $e) {
            $jsondata['success'] = false;
            $jsondata['message'] = $e->getMessage();
        }
        return $jsondata;
    }
    function register_contacto(){
        $jsondata = array();
        if($_POST['txtname'] && $_POST['txtemail'] && $_POST['txtmessage'] ){
            $query = $this->db->connect()->prepare('INSERT INTO contacto (name, mail, mensaje) VALUES(:name, :mail, :mensaje)');
            try{
                $query->execute([
                    'name' => $_POST['txtname'],
                    'mail' => $_POST['txtemail'],
                    'mensaje' => $_POST['txtmessage'],
                ]);
                $jsondata['success'] = false;
                $jsondata['message'] = "Registrado Correctament";
            }catch(PDOException $e){
                $jsondata['success'] = false;
                $jsondata['message'] = $e->getMessage();
            }
        }else{
            $jsondata['success'] = false;
            $jsondata['message'] = "Registrado Correctament";
        }
        return $jsondata;
    }
    function register_paquete(){
        $jsondata = array();
        if($_POST['txtpaquete'] && $_POST['txt_mail_p']  ){
            $query = $this->db->connect()->prepare('INSERT INTO paquetes (mail, paquete) VALUES(:mail, :paquete)');
            try{
                $query->execute([
                    'paquete' => $_POST['txtpaquete'],
                    'mail' => $_POST['txt_mail_p'],
                ]);
                $jsondata['success'] = false;
                $jsondata['message'] = "Registrado Correctament";
            }catch(PDOException $e){
                $jsondata['success'] = false;
                $jsondata['message'] = $e->getMessage();
            }
        }else{
            $jsondata['success'] = false;
            $jsondata['message'] = "Registrado Correctament";
        }
        return $jsondata;
    }


}
?>