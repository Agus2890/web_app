<?php
class Bootstrap{
	
	function __construct(){
		$url=isset($_GET['url'])==''?'index':$_GET['url'];
		$url=rtrim($url,'/');
		$url=explode('/',$url);
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controllers= new Index();
			$controllers->index();
			return false;
		}

		$file='controllers/'.$url[0].'.php';

		if (file_exists($file)) {
			require $file;			
		}else{
			require_once 'controllers/error.php';
			$controllers= new Error_type();
			$controllers->index();
			//require 'controllers/index.php';
			//$controllers= new Index();
			//$controllers->index();
			return false;	
			//throw new Exception("Error: $file no existe.");
		}

		//require 'controllers/'.$url[0].'.php';
		$controllers= new $url[0];
		$controllers->loadModel($url[0]);

		if (isset($url[2])){
			if (method_exists($controllers,isset($url[1]) ? $url[1] : null  )) {
				$controllers->{$url[1]}($url[2]);
			}else{
				require 'controllers/error.php'; 
				$controllers_err= new Error_type();
				$controllers_err->index();
			}
		}else{

			if (method_exists($controllers,isset($url[1]) ? $url[1] : null   )){
				$controllers->{$url[1]}();
			}
			else{
				// require 'controllers/error.php'; 
				// $controllers_err= new Error_type();
				// $controllers_err->index();
				$controllers->index();
			}

		}


	}
}

?>