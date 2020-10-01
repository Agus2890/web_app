<?php
/**
* 
*/
class View{
	
	function __construct(){
		//echo "llamando a Vistas";
	}
	public function render($name,$noinclude=false,$footer=false){
		require 'views/'.$name.'.php';
		// if ($noinclude==true) {
		// 	require 'views/'.$name.'.php';
		// }
		// elseif($noinclude==false && $footer==false){
		// 	require 'views/header.php';
		// 	require 'views/'.$name.'.php';
		// 	require 'views/footer.php';
		// }elseif($noinclude==false && $footer==true){
		// 	require 'views/header.php';
		// 	require 'views/'.$name.'.php';
		// }

	}
}
?>