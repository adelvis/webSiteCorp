<?php


require_once "../controllers/template.controller.php";
require_once "../models/template.model.php";


/**
 * 
 */
class AjaxTemplate 
{
	/*=============================================
	=         Configuracion del Template           =
	=============================================*/
	
	public function ajaxStyleTemplate()
	{
		# code...

		$answer = ControllerTemplate::ctrStyleTemplate();

		echo json_encode($answer);


	}



}


/*=============================================
	=         Configuracion del Template           =
=============================================*/
$object = new AjaxTemplate();
$object-> ajaxStyleTemplate();
