<?php


require_once "../models/route.php";

/**
 * 
 */
class AjaxRoute 
{


	/*================================================================
	=         Obtencion de ruta del servidor Administrador          =
	==================================================================*/

	public $route;

	public function ajaxGetRoute(){

		if($this->route =="administrador"){

			$answer = ModelRoute::mdlRouteServer();

		}
		echo $answer;

	}


}


/*================================================================
=         Obtencion de ruta del servidor Administrador          =
==================================================================*/

if(isset($_POST["route"])){


	$route = new AjaxRoute();
	
	$route-> route=$_POST["route"];


	$route-> ajaxGetRoute();


}

