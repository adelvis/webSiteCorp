<?php


require_once "connection.php";

/**
 * Clase Modelo Plantilla
 */
class ModelTemplate
{
	/*=============================================
	=   Section call Template Style dinamic        =
	=============================================*/
	static public function mdlStyleTemplate($table){

		$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table");

		$stmt-> execute();

		return $stmt->fetch();

		
		$stmt->close();

		$stmt= null;



	}


}	