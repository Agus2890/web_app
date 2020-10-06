<?php
class versionapk_model extends Model{
	function __construct(){
        parent::__construct();
    }
    public function get_version_apk(){
        try{
            $query = $this->db->connect()->query('SELECT * FROM version_apk');
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return [];
        }
    }
    function register_apk(){
        $jsondata = array();
        try {
            $query = $this->db->connect()->prepare('INSERT INTO version_apk (mandatory, versioncode, versionname,download_url) 
            VALUES(:mandatory, :versioncode, :versionname,:download_url)');
            if(!empty($_FILES['txtapk']['name'])){
                $image_upload=$_FILES['txtapk']['name'];
                $tipo = $_FILES['txtapk']['type'];
                $tamano = $_FILES['txtapk']['size'];
                if ($_FILES["txtapk"]["type"] == "application/vnd.android.package-archive"){
                    move_uploaded_file($_FILES['txtapk']['tmp_name'],API_ROOT.'public/'.$_FILES['txtapk']['name']);
                    $result=$query->execute([
                        'mandatory' => $_POST['txtoption'],
                        'versioncode' => $_POST['txtversioncode'],
                        'versionname' => $_POST['txtversioname'],
                        'download_url' => URL.'public/'.$_FILES['txtapk']['name'],
                    ]);
                    if($result){
                        $jsondata['success'] = true;
                        $jsondata['message'] = 'Registrado Correctamente';
                        $jsondata['redirec'] = URL.'versionapk';
                    }else{
                        $jsondata['success'] = false;
                        $jsondata['message'] = "Error al Registrar";
                    }
                }else{
                    $jsondata['success'] = false;
                    $jsondata['message'] = "Error El Archivo no es un apk de Android";
                }
            }else{
                $jsondata['success'] = false;
                $jsondata['message'] = "Error revise que aya indicado el archivo APK  a subir";
            }
        }catch (PDOException $e) {
            $jsondata['success'] = false;
            $jsondata['message'] = $e->getMessage();
        }
        return $jsondata;
    }
}
?>