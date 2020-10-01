<?php
class users_model extends Model{
	function __construct(){
        parent::__construct();
    }

    public function get_users(){
        try{
            $query = $this->db->connect()->query('SELECT * FROM users');
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return [];
        }
    }
    function register_users(){
        $query = $this->db->connect()->prepare('INSERT INTO users (name, user, active,password) VALUES(:name, :user, :active,:password)');
        try{
            $query->execute([
                'name' => $_POST['txtname'],
                'user' => $_POST['txtuser'],
                'active' => 1,
                'password' => $_POST['txtpassword']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}
?>