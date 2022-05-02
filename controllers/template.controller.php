<?php


/**
 * 
 */
class ControllerTemplate
{
	
	static public function template()
	{
		# code...

		include "views/template.php";


	}


	/*=============================================
	=   Section call Template Style dinamic        =
	=============================================*/
	static public function ctrStyleTemplate(){

			$table="template";

			$answer = ModelTemplate::mdlStyleTemplate($table);

			return $answer; 


	}

}