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
    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM users WHERE id = :id');
        try{
            $query->execute(['id' => $id]);
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


}
?>