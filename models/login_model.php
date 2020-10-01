<?php
class login_model extends Model{
	function __construct(){
        parent::__construct();
    }
    function login_user($user_login,$password){
        
        $jsondata = array();
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM users WHERE user=:user and password=:password');
            // $stmt = $db->prepare($query)
            $query->bindParam("user", $user_login,PDO::PARAM_STR) ;
            $query->bindParam("password", $password,PDO::PARAM_STR);
            $query->execute();
            $count = $query->rowCount();
            $data=$query->fetch(PDO::FETCH_OBJ);
            if($count){
				if($data->user==$user_login && $data->password==$password){
                    $_SESSION["user"] =$data->user;
                    $jsondata['success'] = true;
                    $jsondata['message'] = 'Inicio de sesion exitosa';
                }else{
                    $jsondata['success'] = false;
                    $jsondata['message'] = 'Usuario o contraseña incorrecta';
                }
            }else{
				$jsondata['success'] = false;
				$jsondata['message'] = 'El usuario no existe';
				//return false;
			}
        } catch (PDOException $e) {
            $jsondata['success'] = false;
			$jsondata['message'] = $e->getMessage();
        }
        return $jsondata;
    }

}
?>