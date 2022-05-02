<?php


require_once "connection.php";

/**
 * Clase Modelo Intro
 */
class ModelIntro
{
	/*=============================================
	=  fuction call intro       =
	=============================================*/
	static public function mdlGetIntro($table, $item, $value){



		if($item != null) {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt-> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt-> fetch();




		} else {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt-> fetchAll();



		}

		$stmt->close();

		$stmt = null; 




	}


}	
